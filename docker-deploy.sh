#!/usr/bin/env bash

docker-compose -f docker-compose.yml up -d && \
docker-compose exec php composer install && \
docker-compose exec php composer dump-autoload
