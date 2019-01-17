FROM php:7.2-apache

RUN sed -i "s/80/8080/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

COPY . /var/www/html/

ENV REDIS_OPTIONS_SCHEMA "tcp"
ENV REDIS_OPTIONS_HOST "localhost"
ENV REDIS_OPTIONS_PORT "6379"
ENV REDIS_OPTIONS_PASSWORD "changeme"

ENV RETWIS_TITLE "Moin"

EXPOSE 8080

