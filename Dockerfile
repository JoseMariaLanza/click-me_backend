FROM php:7.2-apache
LABEL org.opencontainers.image.authors="lanza.josemaria@gmail.com"

RUN a2enmod rewrite

RUN apt-get update

RUN apt-get install -y libpq-dev \
    zlib1g-dev \
    libzip-dev \
    unzip \
&& apt-get -y install git \
&& docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
&& docker-php-ext-install pdo_pgsql pgsql \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN mkdir /app
WORKDIR /app
COPY ./app /app

RUN service apache2 restart
