FROM debian:buster

RUN apt update && apt install -y curl gnupg2 ca-certificates lsb-release

RUN echo "deb http://nginx.org/packages/debian `lsb_release -cs` nginx" \
    | tee /etc/apt/sources.list.d/nginx.list

RUN curl -fsSL https://nginx.org/keys/nginx_signing.key | apt-key add -

RUN apt-key fingerprint ABF5BD827BD9BF62

RUN apt update && apt install -y nginx

RUN apt install -y default-mysql-server default-mysql-client

WORKDIR /run

RUN mkdir php

RUN openssl req -x509 -nodes -days 365 -subj "/C=CA/ST=QC/O=1337/CN=localhost" -addext "subjectAltName=DNS:localhost" -newkey rsa:2048 -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt;

RUN apt install -y php7.3-fpm php7.3-mysql php7.3-mbstring

WORKDIR /etc/nginx

COPY ./srcs/Nginx/nginx.conf .

COPY ./srcs/Nginx/localhost.conf ./conf.d/localhost.conf

RUN rm -f ./conf.d/default.conf

WORKDIR /var/www

COPY ./srcs/wordpress ./wordpress/

COPY ./srcs/phpMyAdmin ./phpMyAdmin/

RUN mkdir /var/www/phpMyAdmin/tmp

RUN chmod 777 /var/www*

COPY ./srcs/start.sh  /start.sh
RUN chmod +x /start.sh

ENTRYPOINT ["/start.sh"]