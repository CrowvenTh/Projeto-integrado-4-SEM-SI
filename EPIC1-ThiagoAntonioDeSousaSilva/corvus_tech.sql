drop database corvus_tech;
create schema if not exists corvus_tech default character set utf8;
use corvus_tech;

create table if not exists produtos(
    id int AUTO_INCREMENT primary key,
    nome VARCHAR(255) not null,
    descricao text not null,
    preco decimal(10, 3) not null,
    imagem VARCHAR(255) not null
);

create table if not exists usuarios (
    id int AUTO_INCREMENT primary key,
    nome VARCHAR(255) not null,
    email VARCHAR(255) not null UNIQUE,
    senha VARCHAR(100) not null
);

insert into produtos (nome, descricao, preco, imagem) values
('Apple Iphone 13 256GB', 'Um smartphone de última geração.', 3.899, '../view/imagens/celulares/Smartphone-Apple-Iphone-13-256gb-Meia-Noite_1728582984_g.jpg'),
('Xiaomi Redmi 13c 256GB','8GB Ram, 256GB, Octa Core Camera Tripla 50MP, Tela 6.74 Polegadas, Preto.',1.034,'../view/imagens/celulares/Smartphone-Xiaomi-Redmi-13c-8GB-Ram-256GB-Octa-Core-C-mera-Tripla-50MP-Tela-6-74-Polegadas-Preto_1721130729_g.jpg'),
('Samsung Galaxy A05 128GB', '128GB, 4GB RAM, Câmera 50MP, Tela 6.7, Preto','781.90','../view/imagens/celulares/Smartphone-Samsung-Galaxy-A05-4G-128GB-4GB-RAM-C-mera-50MP-Tela-6-7-Preto_1728315209_g.jpg'),
('Motorola Moto G04s', '8GB RAM, 128GB Câmera 50MP, Tela 6,6, Grafite','1.126','../view/imagens/celulares/Smartphone-Motorola-Moto-G04s-8GB-RAM-128GB-C-mera-50MP-Tela-6-6-Grafite_1726598953_g.jpg');

insert into produtos (nome, descricao, preco, imagem) values
('Gamer Acer Nitro V15','Intel Core i7-13620H, 16GB RAM, RTX 3050, SSD 512GB, 15.6" Full HD IPS, 144Hz, Linux, Preto - ANV15-51-73E9','5.449','../view/imagens/notebooks/notebook-gamer-acer-nitro-v15.jpg'),
('Samsung Galaxy Book3 360','Intel Core I5-1335U, 8GB RAM, SSD 256GB, 13.3 Full HD, Windows 11 Home, Grafite - NP730QFG-KF2BR','4.239','../view/imagens/notebooks/notebook-samsung-galaxy-book3-360.jpg'),
('Lenovo LOQ','Intel Core i5-12450H, 16GB RAM, GeForce RTX 2050 4GB, SSD 512GB, 15.6" Full HD, Windows 11 Home, Cinza - 83EU0001BR','4.499','../view/imagens/notebooks/notebook-lenovo-loq.jpg'),
('Asus Rog Strix G16','Intel Core i9-13980HX, 16GB RAM, RTX 4060 8GB, SSD 512GB, 16 FHD 165Hz, IPS, Win11, Cinza - G614JV-N3094W','11.299','../view/imagens/notebooks/notebook-gamer-asus-rog.jpg');

insert into produtos (nome, descricao, preco, imagem) values
('Nintendo Switch Oled','Joy-Con, Branco - HBGSKAAA2','2.089','../view/imagens/videoGames/console-nintendo-switch-oled.jpg'),
('PlayStation 5 Slim','SSD 1TB, Edição Digital, Branco + 2 Jogos Digitais - 1000038914','3.719','../view/imagens/videoGames/console-playstation-5-slim.jpg'),
('Nintendo Switch Lite','Turquesa Animal Crossing, Edição Limitada - 119922','1.229','../view/imagens/videoGames/console-nintendo-switch-lite.jpg'),
('Xbox Series X','Microsoft, 1Tb, Controle Sem Fio - Preto','5.750','../view/imagens/videoGames/Console-Xbox-Series-X.jpg');

select * from produtos;
select * from usuarios;
delete from produtos where id > 0;