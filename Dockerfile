# --- Etapa 1: build de assets con Vite ---
FROM node:20 AS assets
WORKDIR /app
# sólo lo necesario para Vite
COPY package*.json vite.config.* ./
COPY resources ./resources
COPY public ./public
RUN npm ci && npm run build

# --- Etapa 2: runtime PHP/Laravel ---
FROM php:8.2-cli

# Dependencias del sistema necesarias
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev \
 && docker-php-ext-install zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
# Copiamos TODO el proyecto (código Laravel)
COPY . .
# Copiamos los assets compilados al lugar correcto
COPY --from=assets /app/public/build /app/public/build

# Instala dependencias de PHP y cachea config/rutas/vistas
RUN composer install --no-dev --optimize-autoloader \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# Render usará este puerto
EXPOSE 10000

# Arranque (servidor embebido de PHP sirviendo /public)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
