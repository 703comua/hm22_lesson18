FROM php:7.4.3-fpm

RUN apt update

RUN apt install libpq-dev -y

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN apt-get install -qq git curl libmcrypt-dev libjpeg-dev libpng-dev libfreetype6-dev libbz2-dev libzip-dev

RUN apt-get clean

RUN docker-php-ext-install pdo_mysql zip

RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY .docker/php-fpm/xdebug-dev.ini /usr/local/etc/php/conf.d/xdebug-dev.ini

COPY . /src/

WORKDIR /src/

RUN chown -R www-data:www-data /src

RUN usermod -u 1000 www-data && \
    groupmod -g 1000 www-data
