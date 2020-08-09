FROM php:7.4-cli

RUN apt-get update && apt-get install -y git

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-configure zip \
  && docker-php-ext-install zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . ./app
WORKDIR /app
RUN composer install
VOLUME /app



