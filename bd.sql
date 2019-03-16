CREATE DATABASE images;

use images;

CREATE TABLE recebidos(img varchar(100) not null);

CREATE DATABASE contaBancaria;
use contaBancaria;
CREATE TABLE cliente(
	idCliente int PRIMARY KEY auto_increment not null,
    nomeCliente varchar(100) not null,
	email varchar(100) not null,
    senha varchar(100) not null,
    RG varchar(10) not null,
    CPF varchar(11) not null,
    endereco varchar(100) not null,
    telefone varchar(11) not null
);

ALTER TABLE cliente add cep varchar(20) not null;

CREATE TABLE consultaDados(
	id int PRIMARY KEY auto_increment not null,
    numeroDaConta int not null,
	saldo decimal(14,5) not null,
    saque decimal(14,5) not null,
    extrato varchar(100) not null
);

select * from cliente;
select * from consultaDados;

CREATE DATABASE nomeDatabase;
use nomeDatabase;
CREATE TABLE usuario(
	nome varchar(20) not null,
    senha varchar(20) not null,
    setor varchar(20) not null,
    nivel varchar(20) not null
);

desc usuario;
