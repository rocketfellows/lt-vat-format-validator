FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip \
    mc
RUN docker-php-ext-install zip
RUN mkdir -p /home/app
WORKDIR /home/app
COPY . /home/app
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer