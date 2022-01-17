FROM php:8.1.1-fpm
WORKDIR /var/www
RUN chown -R www-data:www-data /var/www
RUN rm -rf /var/www/html  
RUN ln -s public html
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
EXPOSE 8000
ENTRYPOINT ["php-fpm"]