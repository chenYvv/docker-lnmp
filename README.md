# docker-lnmp
Dockerfile 搭建lnmp环境

sudo docker run -p 80:80 -v ~/project-docker/app/:/usr/share/nginx/html --link service.php:service.php -d  service/nginx

sudo docker run -p 9000:9000 -v ~/project-docker/app/:/var/www/html/ --name service.php -d service/php

sudo docker run -p 3306:3306 -v ~/project-docker/data/mysql/:/var/lib/mysql/  -d service/mysql

sudo docker run --name dbmysql mysql

sudo docker run -p 3306:3306 --volumes-from dbmysq -d service/mysql
