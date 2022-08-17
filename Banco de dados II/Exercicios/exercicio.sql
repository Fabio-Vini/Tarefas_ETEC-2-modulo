CREATE DATABASE db_conceito;
USE db_conceito;

CREATE TABLE tb_aluno(
id_aluno INT PRIMARY KEY AUTO_INCREMENT,
nm_aluno VARCHAR(40),
ds_profissao VARCHAR(20),
dt_nascimento DATE,
ds_sexo ENUM('M', 'F'),
qt_peso DECIMAL(4, 2),
tm_altura DECIMAL(3, 2),
ds_nascionalidade VARCHAR(20) DEFAULT 'BRASIL'
);

describe tb_aluno;

SELECT * FROM tb_aluno;