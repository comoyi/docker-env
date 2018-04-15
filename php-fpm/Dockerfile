FROM php:7.1.16-fpm

LABEL maintainer="Michael Chi <chicong@outlook.com>"

RUN usermod -u 1000 www-data

RUN groupmod -g 1000 www-data

RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

# anything required
RUN apt-get update && apt-get install -y \
# for gd
    libpng-dev libfreetype6-dev \
# for mcrypt
    libmcrypt-dev \
# for soap
    libxml2-dev \
# for mongodb
    libssl-dev

# php
RUN cd /usr/local/src \
    && curl -L -o php-7.1.16.tar.gz http://php.net/get/php-7.1.16.tar.gz/from/this/mirror \
    && tar zxvf php-7.1.16.tar.gz

# gd
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/gd \
    && phpize \
    && ./configure --with-freetype-dir \
    && make \
    && make install

# mcrypt
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/mcrypt \
    && phpize \
    && ./configure \
    && make \
    && make install

# bcmath
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/bcmath \
    && phpize \
    && ./configure \
    && make \
    && make install

# pcntl
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/pcntl \
    && phpize \
    && ./configure \
    && make \
    && make install

# gettext
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/gettext \
    && phpize \
    && ./configure \
    && make \
    && make install

# sysvsem
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/sysvsem \
    && phpize \
    && ./configure \
    && make \
    && make install

# shmop
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/shmop \
    && phpize \
    && ./configure \
    && make \
    && make install

# soap
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/soap \
    && phpize \
    && ./configure \
    && make \
    && make install

# sockets
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/sockets \
    && phpize \
    && ./configure \
    && make \
    && make install

# zip
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/zip \
    && phpize \
    && ./configure \
    && make \
    && make install

# xmlrpc
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/xmlrpc \
    && phpize \
    && ./configure \
    && make \
    && make install

# pdo_mysql
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/pdo_mysql \
    && phpize \
    && ./configure \
    && make \
    && make install

# mysqli
RUN cd /usr/local/src \
    && cd php-7.1.16/ext/mysqli \
    && phpize \
    && ./configure \
    && make \
    && make install

# xdebug
RUN cd /usr/local/src \
    && curl -L -o xdebug-2.6.0.tgz https://pecl.php.net/get/xdebug-2.6.0.tgz \
    && tar zxvf xdebug-2.6.0.tgz \
    && cd xdebug-2.6.0 \
    && phpize \
    && ./configure \
    && make \
    && make install

# redis
RUN cd /usr/local/src \
    && curl -L -o redis-3.1.6.tgz https://pecl.php.net/get/redis-3.1.6.tgz \
    && tar zxvf redis-3.1.6.tgz \
    && cd redis-3.1.6 \
    && phpize \
    && ./configure \
    && make \
    && make install

# mongodb
RUN cd /usr/local/src \
    && curl -L -o mongodb-1.4.2.tgz https://pecl.php.net/get/mongodb-1.4.2.tgz \
    && tar zxvf mongodb-1.4.2.tgz \
    && cd mongodb-1.4.2 \
    && phpize \
    && ./configure \
    && make \
    && make install

# swoole
RUN cd /usr/local/src \
    && curl -L -o swoole-2.1.3.tgz https://pecl.php.net/get/swoole-2.1.3.tgz \
    && tar zxvf swoole-2.1.3.tgz \
    && cd swoole-2.1.3 \
    && phpize \
    && ./configure \
    && make \
    && make install
