FROM php:8.2-apache

RUN a2enmod rewrite

# Fix AllowOverride in apache2.conf
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Fix AllowOverride in the VirtualHost as well
RUN sed -i '/<\/VirtualHost>/i\\t<Directory /var/www/html>\n\t\tAllowOverride All\n\t\tRequire all granted\n\t</Directory>' /etc/apache2/sites-enabled/000-default.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html