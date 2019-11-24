#!/bin/bash
/etc/init.d/php7.3-fpm restart
/etc/init.d/mysql start
mysql -uroot <<<"CREATE DATABASE IF NOT EXISTS test ;"
mysql -uroot <<<"CREATE USER 'wp'@'%' IDENTIFIED BY '123456' ;"
mysql -uroot <<<"GRANT ALL ON test.* TO 'wp'@'%' ;"
mysql -uroot <<<"FLUSH PRIVILEGES ;"
mysql -uroot <<<"ALTER USER 'root'@'localhost' IDENTIFIED BY 'root' ;"
nginx -g "daemon off;"
/bin/bash