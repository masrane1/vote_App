# Utiliser une image PHP avec Apache
FROM php:7.4-apache

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copier les fichiers de l'application
COPY . /var/www/html/

# Donner les permissions correctes
RUN chown -R www-data:www-data /var/www/html/
