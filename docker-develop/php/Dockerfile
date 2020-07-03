FROM php:7.2-fpm

# php.ini
COPY php.ini /usr/local/etc/php/

RUN apk --update add vim zlib-dev tzdata && \
  rm -rf /var/cache/apk/* && \
  docker-php-ext-install \
  pdo_mysql \
  mysqli \
  mbstring \
  zip \
  bcmath

# Composer
RUN curl -s http://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

ENV TZ Asia/Tokyo
