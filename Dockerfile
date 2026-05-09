FROM php:8.2-apache

# Enable mysqli extension
RUN docker-php-ext-install mysqli

# Enable Apache rewrite module (important for PHP projects)
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Fix permissions (important on hosting platforms)
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80
