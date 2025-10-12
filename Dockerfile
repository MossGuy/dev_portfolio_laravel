# Base image
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev zip libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev nodejs npm libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy all files (artisan must exist before composer install)
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install JS dependencies
RUN npm ci

# Build frontend assets for production
RUN
