FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
        git unzip icu-dev libzip-dev libpng-dev libjpeg-turbo-dev freetype-dev oniguruma-dev \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql mbstring intl zip gd bcmath opcache pcntl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN addgroup -g 1000 app && adduser -u 1000 -G app -D -s /bin/sh app \
    && mkdir -p /var/www/html && chown -R app:app /var/www/html

USER app

WORKDIR /var/www/html
