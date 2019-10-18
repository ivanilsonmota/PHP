/*
* Criado por: Ivanilson Pereira Mota
*/

CREATE DATABASE IF NOT EXISTS phpstudies;

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(32) NOT NULL
);


INSERT INTO users (name, email, password) VALUES ('Pedro', 'pedro@gmail.com', md5('pedro191919'));
INSERT INTO users (name, email, password) VALUES ('João', 'joão@gmail.com', md5('joao191919'));
INSERT INTO users (name, email, password) VALUES ('Israel', 'israel@gmail.com', md5('israel191919'));
INSERT INTO users (name, email, password) VALUES ('Gabriel', 'gabriel@gmail.com', md5('gabriel191919'));
