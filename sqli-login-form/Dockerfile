FROM debian:bullseye

# Install necessary packages
RUN apt-get update && apt-get install -y \
    apache2 \
    php7.4 \
    libapache2-mod-php7.4 \
    php7.4-mysql \
    mysql-client \
    default-mysql-server \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the source code into the container
COPY src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chgrp -R www-data /var/www/html/

# Apache configuration
RUN sed -i 's!/var/www/html!/var/www/html!g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's!/var/www/html!/var/www/html!g' /etc/apache2/sites-available/default-ssl.conf

# Expose port 80
EXPOSE 80


RUN echo "mysql-server mysql-server/root_password qwe123" | debconf-set-selections
RUN echo "mysql-server mysql-server/root_password_again qwe123" | debconf-set-selections

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y ...

# Start Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]