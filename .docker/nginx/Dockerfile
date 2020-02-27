FROM nginx:1.17.8

COPY .docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY . /src/

WORKDIR /src/

RUN chown -R www-data:www-data /src
