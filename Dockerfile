# Utiliza la imagen base de PHP con la versión que necesites
FROM php:8.0-apache

# Actualiza el sistema y instala las dependencias necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip

# Copia los archivos del proyecto de Laravel al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias del proyecto utilizando Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader

# Copia el archivo de configuración de Apache
COPY docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Establece los permisos adecuados para las carpetas de almacenamiento de Laravel
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Ejecuta los comandos de optimización del proyecto de Laravel
RUN composer dump-autoload
RUN php artisan optimize

# Expone el puerto 80 para acceder a la aplicación
EXPOSE 80

# Comando por defecto para iniciar el servidor Apache
CMD ["apache2-foreground"]
