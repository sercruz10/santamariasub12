# ===== 1) BUILDER PHP + COMPOSER (com extensões) =====
FROM php:8.2-fpm-alpine AS php_builder

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_MEMORY_LIMIT=-1

# Dependências para extensões e composer
RUN apk add --no-cache git unzip icu-dev libzip-dev oniguruma-dev mariadb-connector-c-dev $PHPIZE_DEPS

# Extensões PHP necessárias (MySQL)
RUN docker-php-ext-install intl mbstring zip pdo pdo_mysql

# Composer (da imagem oficial)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
# Copia manifestos primeiro (melhora cache)
COPY composer.json composer.lock ./
# Torna verboso a 1ª vez para ver erros; depois podes remover -vvv
RUN composer install -vvv --no-dev --prefer-dist --no-interaction --no-progress
# Copia o resto do código
COPY . .
RUN composer dump-autoload -o

# ===== 2) RUNTIME PHP-FPM + NGINX =====
FROM php:8.2-fpm-alpine

# Nginx + Supervisor + libs necessárias
RUN apk add --no-cache nginx supervisor icu-dev libzip-dev oniguruma-dev mariadb-connector-c-dev

# Extensões no runtime (iguais ao builder)
RUN docker-php-ext-install intl mbstring zip opcache pdo pdo_mysql

WORKDIR /var/www

# Código + vendor do builder
COPY --from=php_builder /app /var/www

# Configs Nginx/Supervisor
COPY deploy/nginx.conf /etc/nginx/nginx.conf
COPY deploy/supervisord.conf /etc/supervisord.conf

# Permissões Laravel
RUN chown -R www-data:www-data /var/www && chmod -R 775 storage bootstrap/cache

EXPOSE 10000
CMD ["/usr/bin/supervisord","-c","/etc/supervisord.conf"]
