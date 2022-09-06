FROM php:8.1-cli AS php8-xdebug
RUN apt-get update -yqq \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

ADD https://phar.phpunit.de/phpunit-9.phar /usr/local/bin/phpunit.phar
RUN chmod +x /usr/local/bin/phpunit.phar
RUN echo "memory_limit=512M" >> /usr/local/etc/php/conf.d/php_memory.ini