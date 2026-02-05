FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libc-client-dev \
    libkrb5-dev \
    libldap2-dev \
    cron \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Configure PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install -j$(nproc) \
    gd \
    zip \
    intl \
    mysqli \
    pdo_mysql \
    soap \
    imap \
    opcache \
    curl \
    mbstring \
    xml

# Enable Apache modules
RUN a2enmod rewrite

# Copy custom PHP configuration
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

# Set working directory
WORKDIR /var/www/html

# Copy application source
COPY . /var/www/html

# Set permissions for SuiteCRM
# SuiteCRM requires specific directories to be writable
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 cache custom modules themes data upload

# Create volume for uploads to ensure persistence if mapped incorrectly (fallback)
VOLUME ["/var/www/html/upload"]

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
