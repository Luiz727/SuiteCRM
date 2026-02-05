#!/bin/bash
set -e

# If vendor doesn't exist, run composer install
if [ ! -d "/var/www/html/vendor" ]; then
    echo "Vendor directory not found. Running composer install..."
    composer install --no-dev --optimize-autoloader --no-interaction
fi

# Fix permissions after potential composer install
chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/cache /var/www/html/custom /var/www/html/modules /var/www/html/themes /var/www/html/data /var/www/html/upload 2>/dev/null || true

# Execute the main command (apache)
exec "$@"
