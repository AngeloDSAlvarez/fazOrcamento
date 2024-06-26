CREATE DATABASE fazorcamento;
USE fazorcamento;

DROP TABLE processador;
CREATE TABLE processador(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200),
    preco FLOAT,
    nucleos INT,
    threads INT,
    clock_max FLOAT,
    clock_min FLOAT,
    mem_cache INT,
    lancamento DATE,
	benchmark FLOAT,	
    soquete ENUM('AM3', 'AM4', 'AM5', 'LGA1155', 'LGA1151', 'LGA1150', 'LGA1200', 'LGA1700'),
    memoria_ram ENUM("ddr2", "ddr3", "ddr4", "ddr5"),
    veloc_ram INT,
    tdp INT,
	grafico BOOLEAN
);
INSERT INTO processador VALUES (NULL,'i7 2600', 2, 2, 2, 3, 4, 6, '2011-04-01', 4, 'LGA1151', 'ddr3', 2133, 95, 1);

INSERT INTO processador VALUES (NULL,'a', 0, 0, 0, 0, 0, 00, '2000-01-01', 0, '00', 'ddr3', 0, 0, 0);

insert into processador VALUES
(null, "i5 6400", 180, 4, 4, 3.4, 3.1, 6, "2011-01-01", 3869, "1155", "ddr3", "1333", 95, TRUE);



select * from processador;

DROP TABLE placa_mae;
CREATE TABLE placa_mae(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    soquete ENUM('AM3', 'AM4', 'AM5', 'LGA1155', 'LGA1151', 'LGA1150', 'LGA1200', 'LGA1700'),
    preco FLOAT,
    info_adicional VARCHAR(255)
);
#DROP TABLE placa_mae;
#ALTER TABLE placa_mae
#MODIFY COLUMN soquete ENUM('AM3', 'AM4', 'AM5', 'LGA1155', 'LGA1551', 'LGA1150', 'LGA1200', 'LGA1700');



INSERT INTO placa_mae VALUES
(null, "Duex h61", "lga11	55", 120, "Com m.2, 2 slot ram, 2 usb 3.0"),
(null, "Bluecase h110", "lga1151", 220, "Com m.2, 2 slot ram, 2 usb 3.0");


select * from placa_mae;


INSERT INTO processador VALUES (NULL,'i7 2600', 1900, 4, 4, 4, 2, 6, 5033, 'lga1155', 'ddr3', 2133, 95, '2011-01-01', 1);
DROP TABLE memoria_ram;
CREATE TABLE memoria_ram(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(200),
    preco FLOAT,
    geracao ENUM("ddr2", "ddr3", "ddr4", "ddr5"),
    clock FLOAT
);

INSERT INTO memoria_ram VALUE
(null, "duex 8gb", 80, "ddr4", 2666);