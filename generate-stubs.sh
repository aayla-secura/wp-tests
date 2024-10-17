#!/bin/bash

SOURCE_PATH=""
OUTPUT_FILE=""
GEN_TESTS=0

die() {
	cat >/dev/stderr <<EOF
$*

${BASH_SOURCE[0]} -s /path/to/src [-o /path/to/output | -n name_of_ouput]

  OR

${BASH_SOURCE[0]} -t

Options for generating output of single library:
  -s|--source  <source path>  Set the full path to the source files. Required.
  -o|--output  <output path>  Set the full path to the output file.
  -n|--name    <name>         Set the base name of the output file without extension.
                              It will be placed in ./php-stubs

Options for generating output of all wordpress unit tests:
  -t|--tests                  Generate relevant stubs for Wordpress unit tests.
EOF
	exit 1
}

########## Parse cmdline

while [[ $# -gt 0 ]]; do
	case "${1}" in
	-s | --source)
		[[ $# -ge 2 ]] || die "-s requires an argument"
		SOURCE_PATH="${2}"
		shift 2
		;;

	-o | --output)
		[[ $# -ge 2 ]] || die "-o requires an argument"
		OUTPUT_FILE="${2}"
		shift 2
		;;

	-n | --name)
		[[ $# -ge 2 ]] || die "-n requires an argument"
		OUTPUT_FILE=./php-stubs/"${2}".php
		shift 2
		;;

	-t | --tests)
		GEN_TESTS=1
		shift 1
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
if [[ -z "${SOURCE_PATH}" && ${GEN_TESTS} -eq 0 ]]; then
	die "One of -s or -t is required"
fi

if [[ -n "${SOURCE_PATH}" ]]; then
	SOURCE_PATH="$(realpath "${SOURCE_PATH}")"
	[[ -e "${SOURCE_PATH}" ]] || die "No such file or directory '${SOURCE_PATH}'"

	OUTPUT_FILE="$(realpath -m "${OUTPUT_FILE}")"

elif [[ -n "${OUTPUT_FILE}" ]]; then
	die "-o or -n are only valid if -s is also given"
fi

########## Check if php-stubs/generator is installed
[[ -e vendor/bin/generate-stubs ]] ||
	composer require --dev php-stubs/generator || exit $?

########## Generate specified custom source stubs
if [[ -n "${SOURCE_PATH}" ]]; then
	mkdir -p "$(dirname "${OUTPUT_FILE}")" || exit $?
	composer exec -- generate-stubs "${SOURCE_PATH}" --out="${OUTPUT_FILE}" || exit $?
fi

########## Generate test stubs
if [[ ${GEN_TESTS} -eq 1 ]]; then
	[[ -d ./php-stubs ]] || mkdir php-stubs || exit $?

	# Wordpress stubs
	[[ -e vendor/php-stubs/wordpress-stubs ]] ||
		composer require --dev php-stubs/wordpress-stubs || exit $?
	cp vendor/php-stubs/wordpress-stubs/wordpress-stubs.php php-stubs/

	# PHPUnit stubs
	[[ -e ./phpunit/src ]] && CHECKOUT_PHPUNIT=0 || CHECKOUT_PHPUNIT=1

	if [[ ${CHECKOUT_PHPUNIT} -eq 1 ]]; then
		git clone https://github.com/sebastianbergmann/phpunit || exit $?
	else
		echo "Using existing ./phpunit. Must be a git repo. Will switch to tag 9.3.0" >/dev/stderr
	fi

	# Wordpress requires v9.3, so check that one out
	cd phpunit || exit $?
	git checkout 9.3.0 || exit $?
	cd ..

	composer exec -- generate-stubs phpunit/src/ \
		--out=./php-stubs/phpunit.php || exit $?

	if [[ ${CHECKOUT_PHPUNIT} -eq 1 ]]; then
		rm -rf phpunit
	fi

	# PHPUnit polyfills required by Wordpress tests
	[[ -e ./PHPUnit-Polyfills/src/ ]] && CHECKOUT_PHPUNIT_POLLY=0 || CHECKOUT_PHPUNIT_POLLY=1

	if [[ ${CHECKOUT_PHPUNIT_POLLY} -eq 1 ]]; then
		git clone https://github.com/Yoast/PHPUnit-Polyfills || exit $?
	else
		echo "Using existing ./PHPUnit-Polyfills. Must be a git repo" >/dev/stderr
	fi

	composer exec -- generate-stubs PHPUnit-Polyfills/src/ \
		--out=./php-stubs/yoast-phpunit-polyfills.php

	if [[ ${CHECKOUT_PHPUNIT_POLLY} -eq 1 ]]; then
		rm -rf PHPUnit-Polyfills
	fi

	# Wordpress test libs
	[[ -e ./wordpress-tests-lib ]] && COPY_WP_TESTLIB=0 || COPY_WP_TESTLIB=1

	if [[ ${COPY_WP_TESTLIB} -eq 1 ]]; then
		docker compose cp wp:/tmp/wordpress-tests-lib ./ ||
			die "Have you done docker compose up?"
	fi

	composer exec -- generate-stubs wordpress-tests-lib/includes/ \
		--out=./php-stubs/wordpress-tests-lib.php

	if [[ ${COPY_WP_TESTLIB} -eq 1 ]]; then
		rm -rf wordpress-tests-lib/
	fi
fi
