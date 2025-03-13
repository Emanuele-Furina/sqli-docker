FROM php:7.4-apache-bullseye

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the source code into the container
COPY src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/ 

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]