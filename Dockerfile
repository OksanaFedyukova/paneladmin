FROM php:7.4-apache

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
