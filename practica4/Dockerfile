FROM php:8.1-fpm

# Instala extensiones de php necesarias
RUN docker-php-ext-install pdo-mysql

WORKDIR /app

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]