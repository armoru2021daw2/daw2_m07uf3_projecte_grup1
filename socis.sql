use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
create database socis;
use socis;
grant all privileges on socis.* to 'admin'@'localhost';
