FROM php:5.6.31-fpm

MAINTAINER Michael Chi <chicong@outlook.com>

RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

# pdo_mysql
RUN cd /tmp \
    && curl -L -o php-5.6.31.tar.gz http://php.net/get/php-5.6.31.tar.gz/from/this/mirror \
    && tar zxvf php-5.6.31.tar.gz \
    && cd php-5.6.31/ext/pdo_mysql \
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

# redis ext
RUN cd /tmp \
    && curl -L -o redis-3.1.3.tgz https://pecl.php.net/get/redis-3.1.3.tgz \
    && tar zxvf redis-3.1.3.tgz \
    && cd redis-3.1.3 \
    && phpize \
    && ./configure \
    && make \
    && make install

# for mongodb ext
RUN apt-get update && apt-get install -y libssl-dev

# mongodb ext
RUN cd /tmp \
    && curl -L -o mongodb-1.2.9.tgz https://pecl.php.net/get/mongodb-1.2.9.tgz \
    && tar zxvf mongodb-1.2.9.tgz \
    && cd mongodb-1.2.9 \
    && phpize \
    && ./configure \
    && make \
    && make install

# swoole ext
RUN cd /tmp \
    && curl -L -o swoole-1.9.16.tgz https://pecl.php.net/get/swoole-1.9.16.tgz \
    && tar zxvf swoole-1.9.16.tgz \
    && cd swoole-1.9.16 \
    && phpize \
    && ./configure \
    && make \
    && make install
