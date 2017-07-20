FROM php:7.1.7-fpm

MAINTAINER Michael Chi <chicong@outlook.com>

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
