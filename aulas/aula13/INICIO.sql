-- MOSTRANDO OS BANCOS DE DADOS EXISTENTES NA INSTANCIA
SHOW DATABASES;


/* 

	OPERAÇÕES BÁSICAS DE BANCOS DE DADOS

	CREATE - [ CREATE ]
	READ - [ USE, ]
	UPDATE
	DELETE

*/
-- CRIANDO UM BANCO DE DADOS
CREATE DATABASE `nomedobanco`;

-- USANDO UM BANCO DE DADOS JÁ EXISTENTE
USE `nomedobanco`;

-- CRIAR TABELAS PARA O BANCO DE DADOS

CREATE TABLE `nomedatabela`(
	-- campos da tabela 
	`codigo` INT(8),
	`sexo` CHAR(1),
	`uf` CHAR(2),
	`aeroporto` CHAR(2),
	`nome` VARCHAR(50),
	`cpf` VARCHAR(15),
	`ddi` VARCHAR(5),
	`ddd` CHAR(2),
	`telefone` VARCHAR(10),
	`obs` TEXT,
	`nascimento` DATE,
	`valor` FLOAT(9,2),
	`midia` BLOB,
	`dataDeCriacao` TIMESTAMP
);
