# Use patched PHP version (fixes critical PHP2Shell CVE-2026-109618 & CVE-2026-109619)
FROM php:8.2.35-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite headers

# ── Security Hardening ──

# Hide PHP version from response headers
RUN echo "expose_php = Off" > /usr/local/etc/php/conf.d/security.ini && \
    echo "display_errors = Off" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "log_errors = On" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "error_log = /var/log/php_errors.log" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "disable_functions = exec,passthru,shell_exec,system,proc_open,popen" >> /usr/local/etc/php/conf.d/security.ini

# Hide Apache version & OS info, add security headers
RUN echo "ServerTokens Prod" >> /etc/apache2/conf-available/security.conf && \
    echo "ServerSignature Off" >> /etc/apache2/conf-available/security.conf && \
    echo '<IfModule mod_headers.c>' >> /etc/apache2/conf-available/security.conf && \
    echo '  Header always set X-Content-Type-Options "nosniff"' >> /etc/apache2/conf-available/security.conf && \
    echo '  Header always set X-Frame-Options "SAMEORIGIN"' >> /etc/apache2/conf-available/security.conf && \
    echo '  Header always set X-XSS-Protection "1; mode=block"' >> /etc/apache2/conf-available/security.conf && \
    echo '  Header always set Referrer-Policy "strict-origin-when-cross-origin"' >> /etc/apache2/conf-available/security.conf && \
    echo '</IfModule>' >> /etc/apache2/conf-available/security.conf

# Disable directory listing
RUN sed -i 's/Options Indexes FollowSymLinks/Options -Indexes +FollowSymLinks/' /etc/apache2/apache2.conf

# Copy project files
COPY . /var/www/html/

# Set proper ownership and permissions
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Expose port 80
EXPOSE 80
