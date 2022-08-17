CREATE DATABASE db_corrida;
USE db_corrida;

/*---TABELA CARRO------*/
CREATE TABLE tb_carro(
id_placa INT AUTO_INCREMENT PRIMARY KEY,
nm_nome VARCHAR(15),
ds_modelo VARCHAR(15),
ds_cor VARCHAR (15),
vl_numero INT(5)
);

DESCRIBE tb_carro;
INSERT INTO tb_carro
(id_placa, nm_nome, ds_modelo, ds_cor, vl_numero)
VALUES(default, 'corsa', '1967', 'azul escuro', '09'),
(default, 'fusca', '1974', 'azul marinho', '53'),
(default, 'honda civic', '2006', 'cinza', '06'),
(default, 'audi-r5', '2016', 'branco', '12'),
(default, 'skiline', '2000', 'laranja', '204'),
(default, 'camaro', '2003', 'amarelo', '134'),
(default, 'hb20', '2020', 'cinza', '777'),
(default, 'brasilia', '1980', 'amarelo', '35'),
(default, 'celta', '2005', 'preto', '22'),
(default, 'uno', '2012', 'vermelho', '180');

DROP TABLE tb_carro;
SELECT * FROM tb_carro;
/*-----------//------------//-----------//-----------//----------*/

/*---------TABELA MOTO-----------*/
CREATE TABLE tb_moto(
id_placa INT AUTO_INCREMENT PRIMARY KEY,
nm_nome VARCHAR(20),
vl_cilindradas INT(20),
ds_cor VARCHAR(15),
vl_numero INT(5)
);

DESCRIBE tb_moto;
INSERT INTO tb_moto
(id_placa, nm_nome, vl_cilindradas, ds_cor, vl_numero)
VALUES(default, 'bmw r 1200', '1200', 'branco', '45'),
(default, 'ducati monster 1100', '1100', 'vermelho', '89'),
(default, 'kawasaki z750', '750', 'verde', '123'),
(default, 'yamaha mt-07', '700', 'vermelho e preto', '109'),
(default, 'honda-cb 500f', '500', 'azul ebranco', '77'),
(default, 'suzuki gsx s-1000', '1000', 'amarelo', '65'),
(default, 'honda cb 650r', '650', 'roxo', '15'),
(default, 'yamaha xj6', '600', 'preto', '167'),
(default, 'honda pop 100', '500', 'branco', '678'),
(default, 'drafa riva 150', '1500', 'vermelho e azul', '150');

DROP TABLE tb_moto;
SELECT * FROM tb_moto;
/*------//----------//---------//--------//-----------//-------------*/

/*------------TABELA PILOTO--------------------*/
CREATE TABLE tb_piloto(
id_cpf INT AUTO_INCREMENT PRIMARY KEY,
vl_altura DOUBLE(3,2),
vl_peso VARCHAR(5),
dt_nasc DATE,
nm_nome VARCHAR(255)
);

DESCRIBE tb_piloto;
INSERT INTO tb_piloto
(id_cpf, vl_altura, vl_peso, dt_nasc, nm_nome)
VALUES('433.256.342-54', '1.63', '78kg', '1997.04.23', 'Ronaldo'),
('243.543.587-76', '1.75', '60kg', '2004.02.24', 'Clinton'),
('324.654.655-55', '1.80', '75kg', '1999.10.14', 'Antônio'),
('345.876.766-43', '1.65', '65kg', '2001.07.18', 'Kleiton'),
('655.765.543-56', '1.82', '80kg', '1987.03.12', 'Juninho'),
('089.576.534-13', '1.79', '79kg', '1998.04.27', 'Silvestre'),
('455.654.657-73', '1.67', '63kg', '2002.05.30', 'Sonego'),
('123.656.767-90', '1.83', '89kg', '1985.01.25', 'Felipe'),
('534.435.634-39', '1.87', '77kg', '1996.12.02', 'Fabricio'),
('785.561.766-87', '1.69', '70kg', '2003.11.09', 'Rodinei');

DROP TABLE tb_piloto;
SELECT * FROM tb_piloto;
/*--------//------------//----------------//-----------//--------------*/

/*----------TABELA CIRCUITO-------------------*/
CREATE TABLE tb_circuito(
id_pista INT AUTO_INCREMENT PRIMARY KEY,
ds_barreiras DOUBLE,
vl_drenagem DOUBLE,
qtd_medico INT,
qtd_veiculos INT,
id_moto INT,
id_circuito_moto INT,
FOREIGN KEY (id_pista) REFERENCES tb_moto (id_placa)
);

DESCRIBE tb_circuito;
INSERT INTO tb_circuito
(id_pista, ds_barreiras, vl_drenagem, qtd_medico, qtd_veiculos)
VALUES('', '', '', '', '');

DROP TABLE tb_circuito;
SELECT * FROM tb_circuito;
/*---------//------------------//-----------//------------------//-----------*/

/*-------------TABELA PITSTOP-------------------*/
CREATE TABLE table_pitstop(
id_patrocinio INT AUTO_iNCREMENT PRIMARY KEY,
qtd_mecanicos INT,
tp_tempo TIME,
ds_cabines VARCHAR(300),
ds_pitlane VARCHAR(20),
id_piloto INT,
id_carro INT,
id_pitstop_carro_piloto INT,
FOREIGN KEY (id_patrocinio) REFERENCES tb_piloto (id_cpf),
FOREIGN KEY (id_patrocinio) REFERENCES tb_carro (id_placa)
);

DESCRIBE tb_pitstop;
INSERT INTO tb_pitstop
(id_patrocinio, qtd_mecanicos, tp_tempo, ds_cabines, ds_pitlane)
VALUES('Ferrari', '7', '15s', '5', 'larga');

DROP TABLE tb_pitstop;
SELECT * FROM tb_pitstop;
/*--------//--------------//------------//------------//------------*/