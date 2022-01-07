FROM php:7.3.0-apache
RUN apt-get -y update
RUN apt-get -y install gcc g++ python python3
COPY . /var/www/html
EXPOSE 80
