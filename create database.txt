CREATE DATABASE clientes;
USE clientes;

CREATE TABLE IF NOT EXISTS utilizadores (id int NOT NULL AUTO_INCREMENT,nome varchar(255) NOT NULL,email varchar(255) NOT NULL,telefone varchar(128) NOT NULL, morada varchar(2048) NOT NULL, PRIMARY KEY (id));