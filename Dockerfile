FROM php:8.2-apache

WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel app source
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

EXPOSE 80

# Run Laravel setup and start Apache
CMD composer install --no-dev --optimize-autoloader && \
    php artisan key:generate --force && \
    php artisan migrate --force && \
    php artisan config:cache && \
    apache2-foreground