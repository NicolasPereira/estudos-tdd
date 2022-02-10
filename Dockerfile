FROM devilbox/php-fpm-8.1:latest

# Baixo os Pacotes da Internetsss
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip

# Instalo os pacotes baixados para dentro do PHP
RUN docker-php-ext-install zip

WORKDIR /var/www
RUN rm -rf /var/www/html  
RUN ln -s public html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN echo 'alias phpunit="php vendor/bin/phpunit"' >> ~/.bashrc

EXPOSE 9000

ENTRYPOINT ["php-fpm"]