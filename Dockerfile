FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev \
 && docker-php-ext-install zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader

# Render te da el puerto en $PORT
ENV PORT=10000

# Servimos /public y limpiamos caches en runtime (ya con las ENV reales)
CMD ["sh","-c","php artisan config:clear && php artisan route:clear && php artisan view:clear && php -S 0.0.0.0:$PORT -t public"]
