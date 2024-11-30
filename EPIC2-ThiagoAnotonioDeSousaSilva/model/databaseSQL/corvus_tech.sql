drop schema corvus_tech;

create schema if not exists corvus_tech default character set utf8;

use corvus_tech;

create table if not exists cliente (
	id int not null primary key auto_increment, 
	nome varchar(50), 
    cpf varchar(15), 
    endereco varchar(100), 
    email varchar(50), 
    telefone varchar(15),
	senha varchar(255));

create table if not exists produto (
    idproduto int not null primary key auto_increment,
    imagem varchar(500),
    nome varchar(50), 
    quantidade int, 
    preco double);
    
create table if not exists clientepedido (id int not null primary key auto_increment, idcliente int not null, idproduto int not null, quantidadepedido int, totalpedido double, datapedido date,
foreign key (idcliente) references cliente(id),
foreign key (idproduto) references produto(idproduto));

select id, idcliente, idproduto, quantidadepedido, totalpedido, date_format(datapedido, '%d/%m/%y') as datapedido from clientepedido;

-- SELECTS --
select * from cliente;

select * from produto;

select * from clientepedido;

select cp.id as ID, c.nome as Cliente, c.endereco as Endereço, e.nome as Produto, cp.quantidadepedido as Quantidade
, cp.totalpedido as Total, cp.datapedido as Data_Pedido FROM clientepedido as cp
INNER JOIN cliente as c on cp.idcliente = c.id
INNER JOIN produto as e on cp.idproduto = e.idproduto;


-- TRIGGERS --

DELIMITER //
create trigger total_pedido
before insert on clientepedido
for each row 
BEGIN
DECLARE preco_calc double;

select preco into preco_calc
from produto
where id = new.idproduto;
 
set new.totalpedido = (preco_calc * new.quantidadepedido);
END //

DELIMITER ;

DELIMITER //
create trigger total_pedido2
before update on clientepedido
for each row 
BEGIN
DECLARE preco_calc double;

select preco into preco_calc
from produto
where id = new.idproduto;
 
set new.totalpedido = (preco_calc * new.quantidadepedido);
END //

DELIMITER ;
