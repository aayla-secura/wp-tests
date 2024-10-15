#!/bin/bash

# default must match docker-compose.yml
WORDPRESS_DB_HOST=wptest-db
WORDPRESS_DB_NAME=wordpress

PLUGIN_PATH=""
PLUGIN_VERSION="0.0.0"
REQUIRED_PLUGINS=()
RUN_TESTS=0
DO_INSTALL=0
RESET_TEST=0

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

  -i|--install                Install the plugin on the test Wordpress.

  -t|--test                   Run unit tests. Implies -i.

  -R|--reset                  Reset the test installation.
                              Only relevant if -t is also given

  -r|--require <plugin name>  Load the following plugin in the test bootstrap file.
                              Can be given more than once.
                              Only relevant if -t is also given.
                              If there's a .requires file in the plugin
                              directory, plugin names will also be read from
                              there, whitespace separated.

  -d|--db-name <prefix>       SQL database name. Default is 'wordpress'.
                              The test database will have _test suffix and
                              credentials root:root.

  -H|--host    <host>         Database hostname. Default is 'wptest-db'.
EOF
	exit 1
}

set_plugin() {
	PLUGIN_PATH="$(realpath "${1}")"

	PLUGIN_NAME="$(basename "${PLUGIN_PATH}")"
	PLUGIN_DIR="$(dirname "${PLUGIN_PATH}")"
	PLUGIN_ZIP="${PLUGIN_DIR}/${PLUGIN_NAME}-${PLUGIN_VERSION}.zip"
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
	docker compose exec wp stat "${1}" &>/dev/null
}

require_plugins_test_bootstrap() {
	if [[ -e "${PLUGIN_DIR}/.requires" ]]; then
		# plugin names can't contain spaces
		for plugin in $(<"${PLUGIN_DIR}/.requires"); do
			REQUIRED_PLUGINS+=("${plugin}")
		done
	fi

	local plugin file
	for plugin in "${REQUIRED_PLUGINS[@]}"; do
		file="/var/www/html/wp-content/plugins/${plugin}/${plugin}.php"
		file_exists "${file}" || file="/var/www/html/wp-content/plugins/${plugin}/plugin.php"
		file_exists "${file}" || die "Cannot find plugin file for '${plugin}'"

		echo -e "\n>>>> Requiring '${plugin}' in test bootstrap\n"
		# insert the require before the line that requires our plugin
		docker compose exec wp sed -E -i \
			'/^(\s*)require .*__FILE__.*\/('"${PLUGIN_NAME}"'|plugin)\.php/ s/^((\s*).*)/\2require '"'${file//\//\\/}'"';\n\1/' \
			"/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests/bootstrap.php"
	done
}

while [[ $# -gt 0 ]]; do
	case "${1}" in
	-p | --plugin)
		[[ $# -ge 2 ]] || die "-p requires an argument"
		[[ -d "${2}" ]] || die "No such directory '${2}'"
		set_plugin "${2}"
		shift 2
		;;

	-v | --version)
		[[ $# -ge 2 ]] || die "-v requires an argument"
		PLUGIN_VERSION="${2}"
		shift 2
		;;

	-i | --install)
		DO_INSTALL=1
		shift 1
		;;

	-t | --test)
		DO_INSTALL=1
		RUN_TESTS=1
		shift 1
		;;

	-R | --reset)
		RESET_TEST=1
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

[[ -z "${PLUGIN_PATH}" ]] && die "-p option is required"
echo -e "\n***** Building '${PLUGIN_PATH}' *****\n"

zip_plugin || exit $?
echo -e "\n>>>> Generated '${PLUGIN_ZIP}'\n"

if [[ ${DO_INSTALL} -ne 0 ]]; then
	docker compose cp "${PLUGIN_ZIP}" wp:/usr/local/dist/ || exit $?

	REMOTE_PLUGIN_ZIP=/usr/local/dist/"$(basename "${PLUGIN_ZIP}")"
	docker compose exec wp chown root:root "${REMOTE_PLUGIN_ZIP}" || exit $?
	docker compose exec wp chmod 755 "${REMOTE_PLUGIN_ZIP}" || exit $?
	echo -e "\n>>>> Copied plugin zip to container\n"

	if docker compose exec wp wp plugin is-installed "${PLUGIN_NAME}"; then
		docker compose exec wp wp plugin uninstall --deactivate "${PLUGIN_NAME}" || exit $?
	fi

	docker compose exec wp wp plugin install --force --activate "${REMOTE_PLUGIN_ZIP}" || exit $?
	echo -e "\n>>>> Installed plugin\n"
fi

[[ ${RUN_TESTS} -eq 0 ]] && exit 0

docker compose exec wp wp scaffold plugin-tests "${PLUGIN_NAME}" || exit $?

if ! file_exists /tmp/wordpress-tests-lib || [[ ${RESET_TEST} -ne 0 ]]; then
	docker compose exec wp su www-data -s /bin/bash -- \
		"/var/www/html/wp-content/plugins/${PLUGIN_NAME}/bin/install-wp-tests.sh" \
		"${WORDPRESS_DB_NAME}_test" root root "${WORDPRESS_DB_HOST}" latest || exit $?
fi

# Add required plugins to bootstrap
require_plugins_test_bootstrap || exit $?
echo -e "\n>>>> Generated plugin test environment\n"

if [[ -e "${PLUGIN_DIR}"/tests ]]; then
	# Delete the sample test and copy tests
	docker compose exec wp rm "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests/test-sample.php" || exit $?
	docker compose cp "${PLUGIN_DIR}"/tests wp:"/var/www/html/wp-content/plugins/${PLUGIN_NAME}/" || exit $?
	docker compose exec wp chown -R www-data:www-data "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests" || exit $?
	docker compose exec wp chmod -R go+rX "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/tests" || exit $?
else
	# Enable the sample test
	docker compose exec wp sed -i '/<exclude>/d' "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/phpunit.xml.dist" || exit $?
fi
echo -e "\n>>>> Copied test files to container\n"

echo -e "\n>>>> Running tests\n"
# Run the tests
docker compose exec wp composer global exec -- \
	phpunit -c "/var/www/html/wp-content/plugins/${PLUGIN_NAME}/phpunit.xml.dist" || exit $?
