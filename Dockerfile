FROM php:8.2-apache

# Set working directory
WORKDIR /var/www

# Install required packages
RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel project files
COPY . /var/www

# Set correct Apache DocumentRoot to Laravel's /public directory
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/public|g' /etc/apache2/sites-available/000-default.conf && \
    echo '<Directory /var/www/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>' >> /etc/apache2/apache2.conf

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Install Laravel dependencies and optimize
RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]