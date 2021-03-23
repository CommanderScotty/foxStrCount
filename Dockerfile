FROM php:apache
SHELL ["/bin/bash", "-c"]
COPY . /var/www/html/
