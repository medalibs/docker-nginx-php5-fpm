# Serveur apache
FROM php:5.6.11-fpm
MAINTAINER Mohamed Ali BEN SLAMA <ben.slama.mohamed.ali@gmail.com>

RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++ libmcrypt-dev
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

RUN apt-get update \
    &&  docker-php-ext-install mbstring pdo_mysql mcrypt mysql
   
ADD conf/www.conf /etc/php5/fpm/pool.d/www.conf
ADD conf/custom.ini /usr/local/etc/php/conf.d/custom.ini

RUN useradd symfony -p symfony

RUN apt-get update
RUN apt-get -y install wget

RUN apt-get -y install locales
# Set the locale
RUN locale-gen fr_FR.utf8
ENV LANG fr_FR.utf8
ENV LANGUAGE fr_FR:fr
ENV LC_ALL fr_FR.utf8

ENTRYPOINT php-fpm --nodaemonize

VOLUME /var/www

WORKDIR /var/www
