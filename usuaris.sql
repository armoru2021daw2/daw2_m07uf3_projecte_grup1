use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
create database usuaris;
use usuaris;
grant all privileges on usuaris.* to 'admin'@'localhost';
