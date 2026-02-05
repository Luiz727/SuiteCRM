FROM php:8.2-apache

# Download script to install PHP extensions (more robust than manual apt-get)
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

# Install system dependencies and PHP extensions
RUN install-php-extensions \
    gd \
    zip \
    intl \
    mysqli \
    pdo_mysql \
    soap \
    imap \
    opcache \
    ldap \
    bcmath \
    exif \
    gettext \
    xmlrpc

# Install git, unzip and cron (system tools)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    cron \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache modules
RUN a2enmod rewrite

# Copy custom PHP configuration
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

# Set working directory
WORKDIR /var/www/html

# Copy application source
COPY . /var/www/html

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set permissions for SuiteCRM
# Create directories if they don't exist
RUN mkdir -p cache custom modules themes data upload \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 cache custom modules themes data upload

# Create backup of application for volume initialization (APP_BACKUP pattern)
RUN cp -a /var/www/html /var/www/html_backup

# Copy and set entrypoint
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Create volumes
VOLUME ["/var/www/html/upload"]

# Expose port 80
EXPOSE 80

# Use entrypoint script
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["apache2-foreground"]
