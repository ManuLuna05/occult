# --- Etapa 1: build de assets con Vite ---
FROM node:20 AS assets
WORKDIR /app

# Sólo lo necesario para Vite
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

# Copiamos TODO el proyecto
COPY . .

# Copiamos los assets compilados al sitio correcto
COPY --from=assets /app/public/build /app/public/build

# Instala dependencias de PHP (¡sin cachear config aquí!)
RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

# Limpiar caches en runtime (ya con ENV de Render) y arrancar
CMD ["sh","-c","php artisan config:clear && php artisan route:clear && php artisan view:clear && php artisan serve --host=0.0.0.0 --port=10000"]
