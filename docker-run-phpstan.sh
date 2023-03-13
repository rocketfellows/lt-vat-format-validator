#!/usr/bin/env bash

echo "=================== PHPSTAN ==================="

eval "docker-compose exec php ./vendor/bin/phpstan analyse"

echo "\n============================================="
