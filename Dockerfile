# Use the official PHP 7.4 image with Apache
FROM php:7.4-apache

# Change document root for Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/src

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# AllowOverride All for Apache
RUN echo '<Directory "/var/www/html">\n\
    AllowOverride All\n\
</Directory>' > /etc/apache2/conf-available/allow-override.conf && a2enconf allow-override

# Update the default apache site with the config we created.
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Copy local code to the container image.
COPY src/ /var/www/html/src/

# Expose port 80
EXPOSE 80