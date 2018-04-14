FROM nginx
MAINTAINER chenyw
COPY ./conf.d/* /etc/nginx/conf.d/
ENTRYPOINT ["/usr/sbin/nginx","-g","daemon off;"]
EXPOSE 80