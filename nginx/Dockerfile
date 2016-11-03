#  server web
FROM nginx:latest
MAINTAINER Mohamed Ali BEN SLAMA <ben.slama.mohamed.ali@gmail.com>

ADD conf.d /etc/nginx/conf.d

EXPOSE 80

VOLUME /var/www

RUN useradd root -p root
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

WORKDIR /var/www
