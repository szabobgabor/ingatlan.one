FROM php:8.4-apache

# Use the default development configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql \
    && pecl install xdebug-3.4.2 \
    && docker-php-ext-enable xdebug

# Set document root to public
ENV APACHE_DOCUMENT_ROOT /var/www/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable mod rewrite
RUN a2enmod rewrite

# Install Composer to run scripts
COPY --from=composer /usr/bin/composer /usr/bin/composer
