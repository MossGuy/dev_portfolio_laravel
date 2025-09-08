#!/bin/sh
set -e

echo "🚀 Running migrations..."
php artisan migrate --force || true

echo "✅ Starting PHP-FPM and Nginx..."
php-fpm -F & nginx -g 'daemon off;'
