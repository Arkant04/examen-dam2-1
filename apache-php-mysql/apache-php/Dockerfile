FROM php:7.4-apache

# Actualizar el sistema e instalar las dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Copiar los archivos PHP al contenedor
COPY index.php /var/www/html/
COPY info.php /var/www/html/
COPY random.php /var/www/html/
COPY users.php /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]
