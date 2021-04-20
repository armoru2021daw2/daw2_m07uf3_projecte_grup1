use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
create database ong;
use ong;
grant all privileges on ong.* to 'admin'@'localhost';
