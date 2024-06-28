#!/bin/bash

# Set permissions
chown -R www-data:www-data /var/www
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Start PHP-FPM
exec php-fpm
