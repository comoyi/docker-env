FROM php:5.6.31-fpm

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
    libssl-dev \
# for geoip
    geoip-bin geoip-database libgeoip-dev

# php
RUN cd /tmp \
    && curl -L -o php-5.6.31.tar.gz http://php.net/get/php-5.6.31.tar.gz/from/this/mirror \
    && tar zxvf php-5.6.31.tar.gz

# gd
RUN cd /tmp \
    && cd php-5.6.31/ext/gd \
    && phpize \
    && ./configure --with-freetype-dir \
    && make \
    && make install

# mcrypt
RUN cd /tmp \
    && cd php-5.6.31/ext/mcrypt \
    && phpize \
    && ./configure \
    && make \
    && make install

# bcmath
RUN cd /tmp \
    && cd php-5.6.31/ext/bcmath \
    && phpize \
    && ./configure \
    && make \
    && make install

# pcntl
RUN cd /tmp \
    && cd php-5.6.31/ext/pcntl \
    && phpize \
    && ./configure \
    && make \
    && make install

# gettext
RUN cd /tmp \
    && cd php-5.6.31/ext/gettext \
    && phpize \
    && ./configure \
    && make \
    && make install

# sysvsem
RUN cd /tmp \
    && cd php-5.6.31/ext/sysvsem \
    && phpize \
    && ./configure \
    && make \
    && make install

# shmop
RUN cd /tmp \
    && cd php-5.6.31/ext/shmop \
    && phpize \
    && ./configure \
    && make \
    && make install

# soap
RUN cd /tmp \
    && cd php-5.6.31/ext/soap \
    && phpize \
    && ./configure \
    && make \
    && make install

# sockets
RUN cd /tmp \
    && cd php-5.6.31/ext/sockets \
    && phpize \
    && ./configure \
    && make \
    && make install

# zip
RUN cd /tmp \
    && cd php-5.6.31/ext/zip \
    && phpize \
    && ./configure \
    && make \
    && make install

# xmlrpc
RUN cd /tmp \
    && cd php-5.6.31/ext/xmlrpc \
    && phpize \
    && ./configure \
    && make \
    && make install

# pdo_mysql
RUN cd /tmp \
    && cd php-5.6.31/ext/pdo_mysql \
    && phpize \
    && ./configure \
    && make \
    && make install

# mysqli
RUN cd /tmp \
    && cd php-5.6.31/ext/mysqli \
    && phpize \
    && ./configure \
    && make \
    && make install

# mysql
RUN cd /tmp \
    && cd php-5.6.31/ext/mysql \
    && phpize \
    && ./configure \
    && make \
    && make install

# xdebug
RUN cd /tmp \
    && curl -L -o xdebug-2.5.5.tgz https://pecl.php.net/get/xdebug-2.5.5.tgz \
    && tar zxvf xdebug-2.5.5.tgz \
    && cd xdebug-2.5.5 \
    && phpize \
    && ./configure \
    && make \
    && make install

# redis
RUN cd /tmp \
    && curl -L -o redis-3.1.3.tgz https://pecl.php.net/get/redis-3.1.3.tgz \
    && tar zxvf redis-3.1.3.tgz \
    && cd redis-3.1.3 \
    && phpize \
    && ./configure \
    && make \
    && make install

# mongodb
RUN cd /tmp \
    && curl -L -o mongodb-1.2.9.tgz https://pecl.php.net/get/mongodb-1.2.9.tgz \
    && tar zxvf mongodb-1.2.9.tgz \
    && cd mongodb-1.2.9 \
    && phpize \
    && ./configure \
    && make \
    && make install

# swoole
RUN cd /tmp \
    && curl -L -o swoole-1.10.5.tgz https://pecl.php.net/get/swoole-1.10.5.tgz \
    && tar zxvf swoole-1.10.5.tgz \
    && cd swoole-1.10.5 \
    && phpize \
    && ./configure \
    && make \
    && make install

# memcache
RUN cd /tmp \
    && curl -L -o memcache-2.2.7.tgz https://pecl.php.net/get/memcache-2.2.7.tgz \
    && tar zxvf memcache-2.2.7.tgz \
    && cd memcache-2.2.7 \
    && phpize \
    && ./configure \
    && make \
    && make install

# mongo
RUN cd /tmp \
    && curl -L -o mongo-1.6.14.tgz https://pecl.php.net/get/mongo-1.6.14.tgz \
    && tar zxvf mongo-1.6.14.tgz \
    && cd mongo-1.6.14 \
    && phpize \
    && ./configure \
    && make \
    && make install

# geoip
RUN cd /tmp \
    && curl -L -o geoip-1.1.1.tgz https://pecl.php.net/get/geoip-1.1.1.tgz \
    && tar zxvf geoip-1.1.1.tgz \
    && cd geoip-1.1.1 \
    && phpize \
    && ./configure \
    && make \
    && make install
    