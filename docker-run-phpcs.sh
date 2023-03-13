#!/usr/bin/env bash

echo "=================== PHPCS ==================="

eval "docker-compose exec php ./vendor/bin/phpcs -p -s --standard=phpcs.xml src tests"

echo "\n============================================="
