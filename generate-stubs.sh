#!/bin/bash

die() {
	echo "$*" >/dev/stderr

	echo "./${BASH_SOURCE[0]} /path/to/src [name-of-output-dir]" >/dev/stderr

	exit 1
}

if [[ -z "${1}" ]]; then
	die "Pass a path to the library or plugin whose stubs you want as argument"
fi

if ! [[ -e ./vendor ]]; then
	die "No vendor directory in current directory. Are you in the correct folder?"
fi

LIB="$(realpath "${1}")"
if ! [[ -e "${LIB}" ]]; then
	die "No such file or directory '${LIB}'"
fi

[[ -d ./php-stubs ]] || mkdir ./php-stubs || exit $?
STUBS_DIR="$(realpath "./php-stubs/")"
[[ -e "${STUBS_DIR}" ]] || exit 1

if [[ -n "${2}" ]]; then
	BASE="${2}"
else
	BASE="$(basename "${LIB}")"
fi

composer exec -- generate-stubs "${LIB}" --out="${STUBS_DIR}/${BASE}.php"
