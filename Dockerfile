FROM debian:buster

RUN apt update && apt install -y curl gnupg2 ca-certificates lsb-release

RUN echo "deb http://nginx.org/packages/debian `lsb_release -cs` nginx" \
    | tee /etc/apt/sources.list.d/nginx.list

RUN curl -fsSL https://nginx.org/keys/nginx_signing.key | apt-key add -

RUN apt-key fingerprint ABF5BD827BD9BF62

RUN apt update && apt install -y nginx

WORKDIR /run

RUN mkdir php

RUN apt install -y php7.3-fpm php7.3-mysql

CMD [ "service", "php7.3-fpm", "restart" ]

WORKDIR /etc/nginx

COPY ./srcs/Nginx/nginx.conf .

COPY ./srcs/Nginx/localhost.conf ./conf.d/localhost.conf

RUN rm -f ./conf.d/default.conf

WORKDIR /var/www

COPY ./srcs/wordpress ./wordpress/

COPY ./srcs/phpMyAdmin ./phpMyAdmin/

COPY ./srcs/index.php .

CMD ["nginx", "-g", "daemon off;"]