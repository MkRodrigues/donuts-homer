CREATE DATABASE donutsh;
USE donutsh;

CREATE TABLE usuario (
id_usuario INT NOT NULL AUTO_INCREMENT,
 nome VARCHAR(255),
 rg VARCHAR(9) NOT NULL,
 cpf VARCHAR(11) NOT NULL,
 cargo VARCHAR(15) NOT NULL,
 departamento VARCHAR(15) NOT NULL,
 rua VARCHAR(255) NOT NULL,
 numero INT NOT NULL,
 cep VARCHAR(8) NOT NULL,
 bairro VARCHAR(50) NOT NULL,
 cidade VARCHAR(50) NOT NULL,
 estado VARCHAR(50) NOT NULL,
 login VARCHAR(50) NOT NULL,
 senha VARCHAR(8) NOT NULL,
 PRIMARY KEY(id_usuario)
 );

CREATE TABLE produto (
id_produto INT NOT NULL AUTO_INCREMENT,
 codigo varchar(30) NOT NULL,
 produto varchar(255) NOT NULL,
 preco varchar(25) NOT NULL,
 categoria varchar(25) NOT NULL,
 descricao varchar(255) NOT NULL,
 PRIMARY KEY(id_produto)
 );
 
 INSERT INTO usuario (nome, rg, cpf, cargo, departamento, rua, numero, cep, bairro, cidade, estado, login, senha) values ('Mikael Assis Silva','425598881','44423569832','Programador','T.I','Avenida Pastor Alemao',1,'04815230','Jd Primavera','Sao Paulo','Sao Paulo','mkrodrigues','admin');
