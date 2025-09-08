FROM php:8.2-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev zip libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev nodejs npm \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy dependency files first (cache)
COPY composer.json composer.lock ./
COPY package.json package-lock.json ./

# Install PHP + JS dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm ci

# Copy rest van de app
COPY . .

# Build frontend assets
RUN npm run build

# Fix permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose port Render verwacht
EXPOSE 10000

# Start Laravel dev server op $PORT
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
