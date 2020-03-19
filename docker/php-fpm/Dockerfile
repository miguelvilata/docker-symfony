FROM php:7.3-fpm

ARG DEBUG=false
ARG REMOTE_HOST="127.0.0.1"

RUN apt-get update && apt-get install -y libzip-dev zlib1g-dev libicu-dev

RUN docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install zip \ 
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \ 
    && docker-php-ext-install opcache

RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y vim

#RUN if [ $DEBUG = true ] ; then \
#    pecl install xdebug-2.6.0; \
#      docker-php-ext-enable xdebug; fi ;

COPY "./ini/php.ini-development" "/usr/local/etc/php/php.ini"
#COPY "./ini/docker-php-ext-xdebug.ini" "/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini"

#RUN echo "\nxdebug.remote_host="$REMOTE_HOST >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini;

WORKDIR /var/www