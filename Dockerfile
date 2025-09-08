FROM php:8.2-fpm

# Install system dependencies + Postgres support
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libonig-dev libzip-dev zip nginx \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip

# Node & npm installeren
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy dependency files (beter cachegedrag)
COPY package*.json ./
COPY composer*.json ./

# Install JS dependencies en build assets
RUN npm install

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy rest van de Laravel app
COPY . .

# Build frontend assets
RUN npm run build

# Fix permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Clear caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Copy Nginx config
COPY ./nginx.conf /etc/nginx/sites-enabled/default

# Copy entrypoint script en uitvoerbaar maken
COPY ./docker-entrypoint.sh /var/www/docker-entrypoint.sh
RUN chmod +x /var/www/docker-entrypoint.sh

# Expose port 80
EXPOSE 80

# Start via entrypoint
CMD ["sh", "/var/www/docker-entrypoint.sh"]
