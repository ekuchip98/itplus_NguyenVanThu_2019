CREATE DATABASE loginapp
CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username varchar (30) not null,
    password varchar (30) not null
)