FROM php:8.2-apache

# Enable Apache mod_rewrite (useful for clean URLs)
RUN a2enmod rewrite

# Copy all project files to Apache's document root
COPY . /var/www/html/

# Set proper ownership and permissions
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Expose port 80
EXPOSE 80
