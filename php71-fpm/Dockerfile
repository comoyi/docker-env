FROM php:7.1.30-fpm

LABEL maintainer="Michael Chi <chicong@outlook.com>"

RUN usermod -u 1000 www-data

RUN groupmod -g 1000 www-data

RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

# anything required
RUN apt-get update && apt-get install -y \
# for gd
    libpng-dev libjpeg-dev libjpeg62-turbo-dev libfreetype6-dev \
# for mcrypt
    libmcrypt-dev \
# for soap
    libxml2-dev \
# for postgresql
    libpq-dev \
# for mongodb
    libssl-dev \
# for swoole $server->connections
    libpcre3-dev \
# for geoip
    geoip-bin geoip-database geoip-database-extra libgeoip-dev \
# for memcached
    libmemcached-dev

# php
RUN cd /usr/local/src \
    && curl -L -o php-7.1.30.tar.gz https://www.php.net/distributions/php-7.1.30.tar.gz \
    && tar zxvf php-7.1.30.tar.gz

# gd
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/gd \
    && phpize \
    && ./configure \
    --with-freetype-dir \
    --with-png-dir \
    --with-jpeg-dir \
    && make \
    && make install

# mcrypt
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/mcrypt \
    && phpize \
    && ./configure \
    && make \
    && make install

# bcmath
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/bcmath \
    && phpize \
    && ./configure \
    && make \
    && make install

# pcntl
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/pcntl \
    && phpize \
    && ./configure \
    && make \
    && make install

# gettext
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/gettext \
    && phpize \
    && ./configure \
    && make \
    && make install

# sysvsem
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/sysvsem \
    && phpize \
    && ./configure \
    && make \
    && make install

# shmop
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/shmop \
    && phpize \
    && ./configure \
    && make \
    && make install

# soap
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/soap \
    && phpize \
    && ./configure \
    && make \
    && make install

# sockets
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/sockets \
    && phpize \
    && ./configure \
    && make \
    && make install

# zip
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/zip \
    && phpize \
    && ./configure \
    && make \
    && make install

# xmlrpc
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/xmlrpc \
    && phpize \
    && ./configure \
    && make \
    && make install

# postgresql
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/pgsql \
    && phpize \
    && ./configure \
    && make \
    && make install

# pdo_postgresql
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/pdo_pgsql \
    && phpize \
    && ./configure \
    && make \
    && make install

# mysqli
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/mysqli \
    && phpize \
    && ./configure \
    && make \
    && make install

# pdo_mysql
RUN cd /usr/local/src \
    && cd php-7.1.30/ext/pdo_mysql \
    && phpize \
    && ./configure \
    && make \
    && make install

# stomp
RUN cd /usr/local/src \
    && curl -L -o stomp-2.0.2.tgz https://pecl.php.net/get/stomp-2.0.2.tgz \
    && tar zxvf stomp-2.0.2.tgz \
    && cd stomp-2.0.2 \
    && phpize \
    && ./configure \
    && make \
    && make install

# xdebug
RUN cd /usr/local/src \
    && curl -L -o xdebug-2.6.1.tgz https://pecl.php.net/get/xdebug-2.6.1.tgz \
    && tar zxvf xdebug-2.6.1.tgz \
    && cd xdebug-2.6.1 \
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
    && curl -L -o mongodb-1.5.3.tgz https://pecl.php.net/get/mongodb-1.5.3.tgz \
    && tar zxvf mongodb-1.5.3.tgz \
    && cd mongodb-1.5.3 \
    && phpize \
    && ./configure \
    && make \
    && make install

# swoole
RUN cd /usr/local/src \
    && curl -L -o swoole-4.2.13.tgz https://pecl.php.net/get/swoole-4.2.13.tgz \
    && tar zxvf swoole-4.2.13.tgz \
    && cd swoole-4.2.13 \
    && phpize \
    && ./configure \
    && make \
    && make install

# geoip
RUN cd /usr/local/src \
    && curl -L -o geoip-1.1.1.tgz https://pecl.php.net/get/geoip-1.1.1.tgz \
    && tar zxvf geoip-1.1.1.tgz \
    && cd geoip-1.1.1 \
    && phpize \
    && ./configure \
    && make \
    && make install

# memcached
RUN cd /usr/local/src \
    && curl -L -o memcached-3.1.3.tgz https://pecl.php.net/get/memcached-3.1.3.tgz \
    && tar zxvf memcached-3.1.3.tgz \
    && cd memcached-3.1.3 \
    && phpize \
    && ./configure \
    && make \
    && make install

# phalcon
RUN cd /usr/local/src \
    && curl -L -o phalcon-3.3.2.tar.gz https://github.com/phalcon/cphalcon/archive/v3.3.2.tar.gz \
    && tar zxvf phalcon-3.3.2.tar.gz \
    && cd cphalcon-3.3.2/build/ \
    && ./install

RUN rm -rf /usr/local/src/*
