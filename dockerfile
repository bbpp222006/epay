FROM php:7.2-fpm

COPY . /var/www/html
RUN docker-php-ext-install pdo_mysql

# 设置工作目录
WORKDIR /var/www/html

# 定义容器启动时的默认端口
EXPOSE 9000
