FROM nginx:latest

RUN apt update && apt install nano

COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf 
COPY app /var/www/html
