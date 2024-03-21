FROM php:latest

RUN apt-get update \
    && apt-get install -y apache2 \
    && a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
