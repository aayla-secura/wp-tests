#!/bin/bash

DOCKER_COMPOSE="$(realpath "$(dirname "${BASH_SOURCE[0]}")/docker-compose.yml")"

##### Default config
PLUGIN_PATH=""
PLUGIN_VERSION="0.0.0"
RUN_TESTS=1
# TEST_HOOK="" # TODO
TEST_GROUP=""
RESET_TEST_ENV=0
REQUIRED_PLUGINS=()
WORDPRESS_DB_NAME=wordpress
WORDPRESS_DB_HOST=wptest-db
#####

PHP_UNIT_EXTRA_ARGS=()
PLUGIN_NAME=""
PLUGIN_DIR=""
PLUGIN_ZIP=""

die() {
	cat >/dev/stderr <<EOF
$*

${BASH_SOURCE[0]} -p <plugin path> [... options]

Options:
  -p|--plugin  <plugin path>  Set the full path to the plugin. Required.

  -v|--version <version>      Set the version to be included in the plugin zip
                              filename.
                              [TODO automatically determine it.]

  -n|--no-tests               Do not run unit tests. Only install the plugin.

  -I|--init-hook <hook>       Run the tests during the given hook instead of
                              the default muplugins_loaded.

  -g|--group <group>          Run only the given group of tests unit tests.

  -R|--reset                  Reset the test installation.

  -r|--require <plugin name>  Load the following plugin in the test bootstrap file.
                              Can be given more than once.

  -d|--db-name <prefix>       SQL database name. Default is 'wordpress'.
                              The test database will have _test suffix and
                              credentials root:root.

  -H|--host    <host>         Database hostname. Default is 'wptest-db'.

_________________________

Alternatively you can create a wp-tests.conf.sh in the _current_ directory
(from which you invoke this script), with one or more of the following
variables, which will override the default ones:

PLUGIN_PATH=""
PLUGIN_VERSION="0.0.0"
RUN_TESTS=1
TEST_GROUP=""
RESET_TEST_ENV=0
REQUIRED_PLUGINS=()
WORDPRESS_DB_NAME=wordpress
WORDPRESS_DB_HOST=wptest-db
EOF
	exit 1
}

zip_plugin() {
	local curr_dir="${PWD}" res
	cd "${PLUGIN_DIR}" || return $?

	[[ -e "${PLUGIN_ZIP}" ]] && rm "${PLUGIN_ZIP}"
	zip -r "${PLUGIN_ZIP}" "${PLUGIN_NAME}" -x "**/.php-cs-fixer.cache"
	res=$?

	cd "${curr_dir}" || return $?
	return ${res}
}

file_exists() {
	[[ -n "${1}" ]] || return 1
	docker compose -f "${DOCKER_COMPOSE}" exec wp stat "${1}" &>/dev/null
}

require_plugins_test_bootstrap() {
	local plugin file
	for plugin in "${REQUIRED_PLUGINS[@]}"; do
		file="/var/www/html/wp-content/plugins/${plugin}/${plugin}.php"
		file_exists "${file}" || file="/var/www/html/wp-content/plugins/${plugin}/plugin.php"
		file_exists "${file}" || die "Cannot find plugin file for '${plugin}'"

		echo -e "\n>>>> Requiring '${plugin}' in test bootstrap\n"
		# insert the require before the line that requires our plugin
		docker compose -f "${DOCKER_COMPOSE}" exec wp sed -E -i \
			'/^(\s*)require .*__FILE__.*\/('"${PLUGIN_NAME}"'|plugin)\.php/ s/^((\s*).*)/\2require '"'${file//\//\\/}'"';\n\1/' \
			"/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests/bootstrap.php"
	done
}

########## Load conf
[[ -f ./wp-tests.conf.sh ]] && . ./wp-tests.conf.sh

########## Parse cmdline

while [[ $# -gt 0 ]]; do
	case "${1}" in
	-p | --plugin)
		[[ $# -ge 2 ]] || die "-p requires an argument"
		PLUGIN_PATH="${2}"
		shift 2
		;;

	-v | --version)
		[[ $# -ge 2 ]] || die "-v requires an argument"
		PLUGIN_VERSION="${2}"
		shift 2
		;;

	-n | --no-tests)
		RUN_TESTS=0
		shift 1
		;;

		# TODO
	# -I | --init-hook)
	#   [[ $# -ge 2 ]] || die "-I requires an argument"
	#   TEST_HOOK="${2}"
	#   shift 2
	#   ;;

	-g | --group)
		[[ $# -ge 2 ]] || die "-g requires an argument"
		TEST_GROUP="${2}"
		shift 2
		;;

	-R | --reset)
		RESET_TEST_ENV=1
		shift 1
		;;

	-r | --require)
		[[ $# -ge 2 ]] || die "-r requires an argument"
		REQUIRED_PLUGINS+=("${2}")
		shift 2
		;;

	-H | --host)
		[[ $# -ge 2 ]] || die "-H requires an argument"
		WORDPRESS_DB_NAME="${2}"
		shift 2
		;;

	-d | --db-name)
		[[ $# -ge 2 ]] || die "-d requires an argument"
		WORDPRESS_DB_HOST="${2}"
		shift 2
		;;

	-h | --help)
		die
		;;

	*)
		die "Unknown argument '${1}'"
		;;
	esac
done

########## Validate args
PLUGIN_PATH="$(realpath "${PLUGIN_PATH}")"
[[ -d "${PLUGIN_PATH}" ]] || die "No such directory '${PLUGIN_PATH}'"

PLUGIN_NAME="$(basename "${PLUGIN_PATH}")"
PLUGIN_DIR="$(dirname "${PLUGIN_PATH}")"
PLUGIN_ZIP="${PLUGIN_DIR}/${PLUGIN_NAME}-${PLUGIN_VERSION}.zip"

if [[ -n "${TEST_GROUP}" ]]; then
	PHP_UNIT_EXTRA_ARGS+=(--group "${TEST_GROUP}")
fi

########## Zip and upload the plugin
[[ -z "${PLUGIN_PATH}" ]] && die "You must specify a plugin path"
echo -e "\n***** Building '${PLUGIN_PATH}' *****\n"

zip_plugin || exit $?
echo -e "\n>>>> Generated '${PLUGIN_ZIP}'\n"

docker compose -f "${DOCKER_COMPOSE}" cp "${PLUGIN_ZIP}" wp:/usr/local/dist/ || exit $?

REMOTE_PLUGIN_ZIP=/usr/local/dist/"$(basename "${PLUGIN_ZIP}")"
docker compose -f "${DOCKER_COMPOSE}" exec wp chown root:root "${REMOTE_PLUGIN_ZIP}" || exit $?
docker compose -f "${DOCKER_COMPOSE}" exec wp chmod 755 "${REMOTE_PLUGIN_ZIP}" || exit $?
echo -e "\n>>>> Copied plugin zip to container\n"

########## Install the plugin
if docker compose -f "${DOCKER_COMPOSE}" exec wp wp plugin is-installed "${PLUGIN_NAME}"; then
	docker compose -f "${DOCKER_COMPOSE}" exec wp wp plugin uninstall --deactivate "${PLUGIN_NAME}" || exit $?
fi

docker compose -f "${DOCKER_COMPOSE}" exec wp \
	wp plugin install --force --activate "${REMOTE_PLUGIN_ZIP}" || exit $?
echo -e "\n>>>> Installed plugin\n"

[[ ${RUN_TESTS} -eq 0 ]] && exit 0

########## Setup the tests
docker compose -f "${DOCKER_COMPOSE}" exec wp wp scaffold plugin-tests "${PLUGIN_NAME}" || exit $?

if ! file_exists /tmp/wordpress-tests-lib || [[ ${RESET_TEST_ENV} -ne 0 ]]; then
	docker compose -f "${DOCKER_COMPOSE}" exec wp su www-data -s /bin/bash -- \
		"/var/www/html/wp-content/plugins/${PLUGIN_NAME}/bin/install-wp-tests.sh" \
		"${WORDPRESS_DB_NAME}_test" root root "${WORDPRESS_DB_HOST}" latest || exit $?
fi

########## Add required plugins to bootstrap
require_plugins_test_bootstrap || exit $?
echo -e "\n>>>> Generated plugin test environment\n"

########## Edit the PHPUnit config
# if [[ -n "${TEST_HOOK}" ]]; then
# TODO
# fi

if [[ -e "${PLUGIN_DIR}"/tests ]]; then
	# There are tests, so delete the sample test and copy tests
	docker compose -f "${DOCKER_COMPOSE}" exec wp \
		rm "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests/test-sample.php" || exit $?
	docker compose -f "${DOCKER_COMPOSE}" cp \
		"${PLUGIN_DIR}"/tests wp:"/var/www/html/wp-content/plugins/${PLUGIN_NAME}/" || exit $?
	docker compose -f "${DOCKER_COMPOSE}" exec wp \
		chown -R www-data:www-data "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests" || exit $?
	docker compose -f "${DOCKER_COMPOSE}" exec wp \
		chmod -R go+rX "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests" || exit $?
else
	# There are no tests, so nable the sample test
	docker compose -f "${DOCKER_COMPOSE}" exec wp \
		sed -i '/<exclude>/d' "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/phpunit.xml.dist" || exit $?
fi
echo -e "\n>>>> Copied test files to container\n"

########## Run the tests
echo -e "\n>>>> Running tests\n"
docker compose -f "${DOCKER_COMPOSE}" exec wp composer global exec -- \
	phpunit -c "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/phpunit.xml.dist" \
	"${PHP_UNIT_EXTRA_ARGS[@]}" || exit $?
