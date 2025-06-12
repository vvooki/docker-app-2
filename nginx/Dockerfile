FROM nginx:latest

RUN apt update && apt install -y nano && rm -rf /var/lib/apt/lists/*

COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf 
COPY app /var/www/html

HEALTHCHECK CMD curl -f http://localhost || exit 1