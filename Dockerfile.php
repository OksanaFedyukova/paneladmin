# Usa la imagen base oficial de PHP
FROM php:7.4-apache

# Habilita mod_rewrite de Apache
RUN a2enmod rewrite

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos de tu proyecto al directorio de trabajo del contenedor
COPY . /var/www/html

# Expone el puerto 80 para que la aplicación sea accesible
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]
