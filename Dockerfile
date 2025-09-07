# 1) Composer (instala dependências PHP)
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-progress --no-interaction
COPY . .

# 2) (Opcional) Build de assets com Vite
FROM node:20-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json* pnpm-lock.yaml* yarn.lock* ./
RUN npm ci || npm install
COPY . .
RUN npm run build

# 3) Runtime: PHP-FPM + Nginx via supervisord
FROM php:8.2-fpm-alpine
RUN apk add --no-cache nginx supervisor icu-dev libzip-dev oniguruma-dev libpq-dev
# PHP extensions (ajusta p/ MySQL se precisares)
RUN docker-php-ext-install intl mbstring zip opcache pdo pdo_pgsql
# (MySQL alternativa)
# RUN apk add --no-cache mariadb-connector-c-dev && docker-php-ext-install pdo_mysql

WORKDIR /var/www
COPY --from=vendor /app /var/www
# Copia assets do Vite (se existir)
COPY --from=assets /app/public/build /var/www/public/build

# Nginx + Supervisor
COPY deploy/nginx.conf /etc/nginx/nginx.conf
COPY deploy/supervisord.conf /etc/supervisord.conf

# Permissões de escrita
RUN chown -R www-data:www-data /var/www \
 && chmod -R 775 storage bootstrap/cache

EXPOSE 10000
CMD ["/usr/bin/supervisord","-c","/etc/supervisord.conf"]
