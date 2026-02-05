#!/bin/bash
set -e

# If vendor doesn't exist, run composer install
if [ ! -d "/var/www/html/vendor" ]; then
    echo "Vendor directory not found. Running composer install..."
    composer install --no-dev --optimize-autoloader --no-interaction
fi

# Install Portuguese Brazilian language pack if not present
if [ ! -f "/var/www/html/include/language/pt_BR.lang.php" ]; then
    echo "Installing Portuguese Brazilian (pt_BR) language pack..."
    
    # Download from SuiteCRM language packs repository
    cd /tmp
    curl -L -o suitecrm-lang-pt_BR.zip "https://github.com/nickhardman/suitecrm-portuguese-brazil-language-pack/archive/refs/heads/master.zip" || true
    
    if [ -f "suitecrm-lang-pt_BR.zip" ]; then
        unzip -q suitecrm-lang-pt_BR.zip || true
        
        # Copy language files to SuiteCRM
        if [ -d "suitecrm-portuguese-brazil-language-pack-master" ]; then
            cp -rf suitecrm-portuguese-brazil-language-pack-master/* /var/www/html/ 2>/dev/null || true
            echo "Portuguese language pack installed successfully."
        fi
        
        # Cleanup
        rm -rf suitecrm-lang-pt_BR.zip suitecrm-portuguese-brazil-language-pack-master
    else
        echo "Warning: Could not download Portuguese language pack. You can install it manually via Admin > Module Loader."
    fi
    
    cd /var/www/html
fi

# Fix permissions after potential composer install
chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/cache /var/www/html/custom /var/www/html/modules /var/www/html/themes /var/www/html/data /var/www/html/upload 2>/dev/null || true

# Execute the main command (apache)
exec "$@"
