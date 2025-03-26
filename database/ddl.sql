CREATE DATABASE loja_produtos;
USE loja_produtos;

CREATE TABLE categoria(
    id int primary key auto_increment,
    nome varchar(50) not null,
);

CREATE TABLE produto(
    id int primary key auto_increment,
    nome varchar(50) not null,
    descricao text not null,
    preco float not null,
    idcategoria int not null, 

    foreign key (idcategoria) references categoria(id)
);

CREATE TABLE usuario(
    id int primary key auto_increment,
    cpf varchar(11) not null unique,
    nome varchar(25) not null,
    email varchar(25) not null,
    datanascimento date not null,
    telefone varchar(13) not null
);