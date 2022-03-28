#!/bin/sh
set -eu
exec 2>&1

DAEMON=/usr/sbin/php-fpm8

test -x ${DAEMON} || (echo 'php-fpm has not installed.' && exit 1)
${DAEMON} --test || (echo 'php-fpm config has error.' && exit 1)

exec ${DAEMON} --nodaemonize