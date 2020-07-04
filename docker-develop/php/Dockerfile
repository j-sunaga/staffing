FROM php:7.4-fpm-alpine

# php.ini
COPY ./php.ini /usr/local/etc/php/

RUN apk --no-cache --update add \
  autoconf \
  curl-dev \
  cmake \
  libpng-dev \
  libxml2-dev \
  zlib-dev \
  pcre-dev \
  g++ \
  make \
  gd \
  bash \
  vim \
  icu-dev \
  libzip-dev \
  oniguruma-dev \
  nodejs \
  npm \
  tzdata \
  && rm -rf /var/cache/apk/*

RUN docker-php-ext-configure \
  # openssl \
  zip \
  && docker-php-ext-install \
  bcmath \
  ctype \
  fileinfo \
  gd \
  intl \
  json \
  mbstring \
  # openssl \
  pdo \
  pdo_mysql \
  tokenizer \
  xml \
  zip \
  opcache

ENV TZ Asia/Tokyo

# Composer
RUN curl -s http://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/html

RUN composer global require hirak/prestissimo
