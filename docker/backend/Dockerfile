FROM php:8.2-cli
LABEL authors="SCOURTOIS"

COPY ../../backend /var/www/

RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y locales && echo "fr_FR.UTF-8 UTF-8" > /etc/locale.gen && locale-gen

ENV LANG=fr_FR.UTF-8
ENV LANGUAGE=fr_FR:fr
ENV LC_ALL=fr_FR.UTF-8

CMD ["php", "-S", "0.0.0.0:9000", "-t", "/var/www/"]