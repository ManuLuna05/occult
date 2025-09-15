FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev \
 && docker-php-ext-install zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Instala dependencias PHP (sin cachear config aquí)
RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

# Limpiamos caches y levantamos el server con las ENV ya presentes
CMD [ "sh", "-c", "php artisan config:clear && php artisan route:clear && php artisan view:clear && php artisan serve --host=0.0.0.0 --port=10000" ]
