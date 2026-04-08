FROM php:8.2-apache

RUN a2enmod rewrite

# Set DocumentRoot to project folder
RUN sed -i 's|/var/www/html|/var/www/html/Majesty_project|g' /etc/apache2/sites-available/000-default.conf

# makes /Majesty_project/ paths work even though we are inside that folder
RUN sed -i '/DocumentRoot/a \    Alias "/Majesty_project" "/var/www/html/Majesty_project"' /etc/apache2/sites-available/000-default.conf

# permissions for the directory
RUN echo '<Directory /var/www/html/Majesty_project>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html/Majesty_project