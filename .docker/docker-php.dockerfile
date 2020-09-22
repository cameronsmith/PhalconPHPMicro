FROM php:7.2-fpm

MAINTAINER Cameron Smith

WORKDIR /usr/share/nginx/html

VOLUME .:/usr/share/nginx/html

RUN apt-get update && apt-get install libzip-dev -y

RUN pecl install phalcon \
    && pecl install zip \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable psr \
    && docker-php-ext-enable phalcon \
    && docker-php-ext-enable zip \
    && docker-php-ext-enable pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer