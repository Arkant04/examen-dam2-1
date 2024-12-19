FROM php:7.4-apache
RUN a2enmod rewrite
COPY index.php /var/www/html/
COPY info.php /var/www/html/
COPY random.php /var/www/html/
EXPOSE 80
CMD ["apache2-foreground"]
