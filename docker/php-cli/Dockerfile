FROM php:7.3-cli

# install symfony binary
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

ARG DEBUG=false
ARG REMOTE_HOST="127.0.0.1"

RUN apt-get update && apt-get install -y libzip-dev zlib1g-dev libicu-dev

RUN docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install zip \ 
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \ 
    && docker-php-ext-install opcache

RUN apt-get update && apt-get install -y default-mysql-client && rm -rf /var/lib/apt    
RUN apt-get update && apt-get install -y vim nano

# DEBUG
RUN if [ $DEBUG = true ] ; then \
    pecl install xdebug-2.6.0; \
      docker-php-ext-enable xdebug; fi ;

COPY "./ini/php.ini-development" "/usr/local/etc/php/php.ini"
COPY "./ini/docker-php-ext-xdebug.ini" "/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini"

RUN echo "\nxdebug.remote_host="$REMOTE_HOST >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini;

RUN apt-get install -y git
CMD /usr/local/bin/composer install -vvv

