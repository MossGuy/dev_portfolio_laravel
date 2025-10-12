#!/bin/sh
set -e

echo "🚀 Running Laravel entrypoint..."

# Run migrations first
php artisan migrate --force

# Clear and rebuild caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Laravel server
php artisan serve --host=0.0.0.0 --port=$PORT
