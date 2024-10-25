-- drop database corvus_tech_epic1;
create database corvus_tech_epic1;

use corvus_tech_epic1;

create table usuario(
	idUsuario int primary key auto_increment, 
    nome varchar(45), 
    email varchar(60), 
    senha varchar(16)
);

-- select * from usuario;