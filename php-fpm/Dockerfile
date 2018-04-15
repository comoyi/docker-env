FROM php:7.1.16-fpm

LABEL maintainer="Michael Chi <chicong@outlook.com>"

RUN usermod -u 1000 www-data

RUN groupmod -g 1000 www-data

RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

# xdebug
RUN cd /tmp \
    && curl -L -o xdebug-2.6.0.tgz https://pecl.php.net/get/xdebug-2.6.0.tgz \
    && tar zxvf xdebug-2.6.0.tgz \
    && cd xdebug-2.6.0 \
    && phpize \
    && ./configure \
    && make \
    && make install

# redis
RUN cd /tmp \
    && curl -L -o redis-3.1.6.tgz https://pecl.php.net/get/redis-3.1.6.tgz \
    && tar zxvf redis-3.1.6.tgz \
    && cd redis-3.1.6 \
    && phpize \
    && ./configure \
    && make \
    && make install

# for mongodb
RUN apt-get update && apt-get install -y libssl-dev

# mongodb
RUN cd /tmp \
    && curl -L -o mongodb-1.4.2.tgz https://pecl.php.net/get/mongodb-1.4.2.tgz \
    && tar zxvf mongodb-1.4.2.tgz \
    && cd mongodb-1.4.2 \
    && phpize \
    && ./configure \
    && make \
    && make install

# swoole
RUN cd /tmp \
    && curl -L -o swoole-2.1.3.tgz https://pecl.php.net/get/swoole-2.1.3.tgz \
    && tar zxvf swoole-2.1.3.tgz \
    && cd swoole-2.1.3 \
    && phpize \
    && ./configure \
    && make \
    && make install
