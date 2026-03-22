# ========================
# STAGE 1 - PHP Base
# ========================
FROM php:8.5-fpm AS php-base

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip unzip git curl \
    && docker-php-ext-install intl pdo pdo_mysql bcmath zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# ========================
# STAGE 2 - Composer
# ========================
FROM php-base AS composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --prefer-dist --no-scripts --no-autoloader

COPY . .

RUN rm -f bootstrap/cache/*.php

RUN composer dump-autoload --optimize --classmap-authoritative

# ========================
# STAGE 3 - Frontend
# ========================
# Projeto sem frontend?
# Basta comentar/remover este stage e o COPY --from=frontend no stage final.
FROM node:22-alpine AS frontend

WORKDIR /app

COPY package.json package-lock.json* ./

RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi

COPY resources resources
COPY public public
COPY vite.config.js ./

RUN npm run build

# ========================
# STAGE 4 - PHP Final
# ========================
FROM php-base

WORKDIR /var/www

COPY --chown=www-data:www-data . .
COPY --from=composer --chown=www-data:www-data /app/vendor /var/www/vendor
COPY --from=frontend --chown=www-data:www-data /app/public/build /var/www/public/build

RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache public/build \
    && chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
