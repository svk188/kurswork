FROM php:7.2-apache
RUN apt-get update
RUN apt-get install -y curl wget
RUN docker-php-ext-install -j$(nproc) mysqli pdo_mysql
RUN apt-get install -y libaprutil1-dbd-mysql
RUN a2enmod dbd
RUN a2enmod authn_dbd
RUN a2enmod rewrite
RUN pecl install redis && docker-php-ext-enable redis
# Сообщаем, какие порты контейнера слушать
EXPOSE 80