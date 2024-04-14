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
    soquete VARCHAR(30),
    memoria_ram ENUM("ddr2", "ddr3", "ddr4", "ddr5"),
    veloc_ram INT,
    tdp INT,
	grafico BOOLEAN
);


insert into processador VALUES
(null, "i5 6400", 180, 4, 4, 3.4, 3.1, 6, "2011-01-01", 3869, "1155", "ddr3", "1333", 95, TRUE);
(null, "i7 2700", 200);


select * from processador;

DROP TABLE placa_mae;
CREATE TABLE placa_mae(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    soquete VARCHAR(20),
    preco FLOAT,
    info_adicional VARCHAR(255)
);


INSERT INTO placa_mae VALUES
(null, "Duex h61", "lga1155", 120, "Com m.2, 2 slot ram, 2 usb 3.0"),
(null, "Bluecase h110", "lga1151", 220, "Com m.2, 2 slot ram, 2 usb 3.0");


select * from placa_mae;