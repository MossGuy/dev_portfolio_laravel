#!/bin/sh
set -e

echo "🚀 Running Laravel entrypoint..."

# Clear en rebuild caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Run migrations (force zodat het ook in production werkt)
php artisan migrate --force || true

# Start PHP-FPM en Nginx
php-fpm -F & nginx -g 'daemon off;'

# Start Laravel server
php artisan serve --host=0.0.0.0 --port=$PORT
