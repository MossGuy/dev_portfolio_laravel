# Base image
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev zip libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev nodejs npm libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy all files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install JS dependencies
RUN npm ci

# Build frontend assets for production
RUN NODE_ENV=production npm run build && ls -l public/build

# Clear & cache Laravel stuff
RUN php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php artisan cache:clear && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Fix permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose port for Render
EXPOSE 10000

# Start Laravel server on the port Render provides
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=$PORT"]
