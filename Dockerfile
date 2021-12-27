FROM php:8.0.5-fpm-alpine

WORKDIR /app

COPY . /app/

CMD ["php", "-S", "127.0.0.1:80", "-t" "/app"]
EXPOSE 8080