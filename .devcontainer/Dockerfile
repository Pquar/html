# FROM php:8.2-apache

# # Instalar extensões PHP necessárias
# RUN apt-get update && apt-get install -y \
#     libpng-dev \
#     libjpeg-dev \
#     libfreetype6-dev \
#     libzip-dev \
#     zip \
#     unzip \
#     git \
#     curl \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg \
#     && docker-php-ext-install -j$(nproc) \
#     gd \
#     pdo \
#     pdo_mysql \
#     mysqli \
#     zip \
#     && apt-get clean \
#     && rm -rf /var/lib/apt/lists/*

# # Criar diretório para o VS Code Server e dar permissões ao www-data
# # O diretório home padrão do www-data é /var/www
# RUN mkdir -p /var/www/.vscode-server && chown -R www-data:www-data /var/www/.vscode-server && chmod -R u+w /var/www/.vscode-server

# # Instalar Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Configurar Apache
# RUN a2enmod rewrite
# COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# # Definir o diretório de trabalho para o código da aplicação
# WORKDIR /var/www/html

# # Configurar permissões para o diretório da aplicação
# RUN chown -R www-data:www-data /var/www/html \
#     && chmod -R 755 /var/www/html

# # Configurar shell para o usuário www-data
# RUN usermod -s /bin/bash www-data

# # Expor porta 80
# EXPOSE 80
