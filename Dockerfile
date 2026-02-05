FROM php:8.1-apache

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

# Set permissions for SuiteCRM
# Create directories if they don't exist
RUN mkdir -p cache custom modules themes data upload \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 cache custom modules themes data upload

# Create volumes
VOLUME ["/var/www/html/upload"]

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
