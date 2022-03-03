FROM php:8.0-apache
RUN echo "ServerName m133-web" >> /etc/apache2/apache2.conf
RUN echo "ServerAdmin admin@ipoac.ch" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y