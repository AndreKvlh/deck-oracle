FROM php:8.2-apache

# 1. Instala dependências do sistema e extensões necessárias (como zip para o Composer)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# 2. O SEGREDO: Baixa o Composer oficial e joga para dentro dos binários do container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Habilita o mod_rewrite do Apache (essencial para rotas amigáveis se for usar depois)
RUN a2enmod rewrite

WORKDIR /var/www/html