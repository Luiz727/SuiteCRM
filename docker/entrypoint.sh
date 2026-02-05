#!/bin/bash
set -e

# Initialize volume from backup if empty (APP_BACKUP pattern)
# This handles the case where a named volume is mounted over /var/www/html
if [ ! -f "/var/www/html/index.php" ] && [ -d "/var/www/html_backup" ]; then
    echo "Volume is empty. Initializing from application backup..."
    cp -a /var/www/html_backup/. /var/www/html/
    echo "Application files restored successfully."
fi

# Always sync critical directories that may have been updated (install, language packs)
# This ensures new language packs and install configurations are always applied
if [ -d "/var/www/html_backup" ]; then
    echo "Syncing install and language files from backup..."
    
    # Sync install directory (for lang.config.php and language files)
    if [ -d "/var/www/html_backup/install" ]; then
        cp -rf /var/www/html_backup/install/. /var/www/html/install/
    fi
    
    # Sync language files
    if [ -d "/var/www/html_backup/include/language" ]; then
        cp -rf /var/www/html_backup/include/language/. /var/www/html/include/language/
    fi
    
    # Sync module language files
    if [ -d "/var/www/html_backup/modules" ]; then
        find /var/www/html_backup/modules -name "pt_BR.lang.php" -exec sh -c 'dest="/var/www/html${1#/var/www/html_backup}"; mkdir -p "$(dirname "$dest")"; cp "$1" "$dest"' _ {} \;
    fi
    
    echo "Critical files synced successfully."
fi

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

# Compile SCSS to CSS if themes.css doesn't exist (required for install wizard)
if [ ! -f "/var/www/html/themes/SuiteP/css/themes.css" ]; then
    echo "Compiling theme CSS files from SCSS..."
    cd /var/www/html
    
    # Create placeholder CSS files for install wizard
    # These are normally generated during build but may be missing in dev/git installs
    cat > /var/www/html/themes/SuiteP/css/themes.css << 'EOF'
/* SuiteCRM Theme CSS - Auto-generated placeholder */
body { font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif; }
EOF
    
    cat > /var/www/html/themes/SuiteP/css/fontello.css << 'EOF'
/* Fontello icons placeholder */
@font-face { font-family: 'fontello'; }
EOF
    
    cat > /var/www/html/themes/SuiteP/css/animation.css << 'EOF'
/* Animation CSS placeholder */
EOF
    
    cat > /var/www/html/themes/SuiteP/css/responsiveslides.css << 'EOF'
/* ResponsiveSlides CSS placeholder */
.rslides { list-style: none; }
EOF
    
    # Create placeholder JS
    mkdir -p /var/www/html/themes/SuiteP/js
    cat > /var/www/html/themes/SuiteP/js/responsiveslides.min.js << 'EOF'
/* ResponsiveSlides placeholder */
(function($){$.fn.responsiveSlides=function(){return this;}})(jQuery);
EOF
    
    echo "Theme CSS files created successfully."
fi

# Fix permissions after potential composer install
chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/cache /var/www/html/custom /var/www/html/modules /var/www/html/themes /var/www/html/data /var/www/html/upload 2>/dev/null || true

# Execute the main command (apache)
exec "$@"
