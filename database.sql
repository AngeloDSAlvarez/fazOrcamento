CREATE DATABASE fazorcamento;
USE fazorcamento;

CREATE TABLE processador(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200),
    preco FLOAT
);


insert into processador VALUES
(null, "i5 6400", 200),
(null, "i7 2700", 200);


select * from processador;

CREATE TABLE placa_mae(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    chipset VARCHAR(10),
    soquete VARCHAR(20),
    preco FLOAT

);


INSERT INTO placa_mae VALUES
(null, "Duex", "h61", "lga1155", 120),
(null, "Blucase", "h110", "lga1151", 220);


select * from placa_mae;