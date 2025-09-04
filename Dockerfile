# Basis image
FROM php:8.2-fpm

# Install system dependencies + Postgres support
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libonig-dev libzip-dev zip nginx \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip

# Node & npm installeren
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install JS dependencies en build assets
RUN npm install && npm run build

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Clear caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Copy Nginx config
COPY ./nginx.conf /etc/nginx/sites-enabled/default

# Expose port 80
EXPOSE 80

# Start PHP-FPM en Nginx + run migrations bij startup
CMD php artisan migrate --force && php-fpm -F & nginx -g 'daemon off;'
