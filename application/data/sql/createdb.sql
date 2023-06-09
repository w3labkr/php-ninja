CREATE DATABASE IF NOT EXISTS `laradock` CHARACTER SET utf8mb4 COLLATE 'utf8mb4_unicode_ci' ;

CREATE USER IF NOT EXISTS `laradock`@'localhost' IDENTIFIED BY 'secret' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON *.* TO `laradock`@'localhost';

CREATE USER IF NOT EXISTS `laradock`@'%' IDENTIFIED BY 'secret' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON *.* TO `laradock`@'%';

FLUSH PRIVILEGES;
