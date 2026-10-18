FROM nginx:1.27-alpine

ENV WEB_PORT=80

COPY default.conf.template /etc/nginx/templates/default.conf.template
COPY index.html styles.css /usr/share/nginx/html/

EXPOSE 80