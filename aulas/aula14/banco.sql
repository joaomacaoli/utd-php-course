-- CREATE DATABASE
CREATE DATABASE `system`;

USE `system`;

-- =====================================================================================
-- =============================== C R E A T E  ========================================
-- ===================================================================================== 


-- CRIANDO AS TABELAS
CREATE TABLE `users`(
	`id_user` INT(6) PRIMARY KEY AUTO_INCREMENT,
	`user_name` VARCHAR(50),
	`user_email` VARCHAR(50),
	`user_password` VARCHAR(50),
	`user_cpf` VARCHAR(15),
	`user_phone` VARCHAR(20),
	`user_type` VARCHAR(10),
	`user_adddress`VARCHAR(50),
	`user_created_in` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `clients`(
	`id_client` INT(6) PRIMARY KEY AUTO_INCREMENT,
	`client_name` VARCHAR(50),
	`client_email` VARCHAR(50),
	`client_password` VARCHAR(50),
	`client_cpf` VARCHAR(15),
	`client_phone` VARCHAR(20),
	`client_type` VARCHAR(10),
	`client_adddress`VARCHAR(50),
	`client_created_in` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `products`(
	`id_product` INT(6) PRIMARY KEY AUTO_INCREMENT,
	`product_name` VARCHAR(40),
	`product_code` VARCHAR(12),
	`product_price` FLOAT(6,2),
	`product_stock` INT(4),
	`product_created_in` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `orders`(
	`id_order` INT PRIMARY KEY AUTO_INCREMENT,
	`order_number` VARCHAR(10),
	`client_id` INT(6),
	`user_id` INT(6),
	`order_created_in` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `items`(
	`id_item` INT(6) PRIMARY KEY AUTO_INCREMENT,
	`product_id` INT(6),
	`item_quantity` INT(2),
	`order_id` INT,
	`item_created_in` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- INSERINDO UM USUÁRIO
INSERT INTO `users` (`user_name`,`user_email`,`user_password`,`user_cpf`,`user_phone`,`user_type`,`user_adddress`)
VALUES ('ANTHONY JEFFERSON', 'ANTHONY@EMAIL.COM','1234','60393507335','85999544262','ADMIN','RUA BEM ALI 222');

-- INSERINDO UM CLLIENTE
INSERT INTO `clients` (`client_name`,`client_email`,`client_password`,`client_cpf`,`client_phone`,`client_type`,`client_adddress`)
VALUES ('RAFAELA TELES', 'RAFAELA@EMAIL.COM','1234','12345678999','85999544255','BRONZE','RUA BEM ACOLÁ, 555');

INSERT INTO `clients` (`client_name`,`client_email`,`client_password`,`client_cpf`,`client_phone`,`client_type`,`client_adddress`)
VALUES ('ERIC EVANGELISTA', 'ERIC@EMAIL.COM','1234','12345678998','85999544222','PRATA','RUA BEM ALI, 555');


-- INSERINDO OS PRODUTOS 
INSERT INTO `products` (`product_name`,	`product_code`,	`product_price`,`product_stock`)
VALUES 
('Biscoito Rechado Morango', '000000000001',2.99,100),
('Biscoito Rechado Chocolate', '000000000002',2.99,100),
('Biscoito Rechado Escureto', '000000000003',2.99,100),
('Refrigerante Coca Cola Lata', '000000000004',3.99,100),
('Refrigerante Fanta Uva Lata', '000000000005',3.59,100),
('Refrigerante Fanta Laranja Lata', '000000000006',3.59,100),
('Salgadinho Cheetos Onda Requeijao P', '000000000007',1.99,100),
('Salgadinho Cheetos Lua Requeijao P', '000000000008',1.99,100),
('Ref São Geraldo 2lt', '000000000009',8.99,100),
('Salgadinho Fandangos Presunto P', '000000000010',1.99,100);

	
--  criandp uma venda
INSERT INTO `orders` (`order_number`,`client_id`,`user_id`)
VALUES ('0000000001',1,1);

-- CRIANDO OS ITENS DA VENDA
INSERT INTO `items` (`product_id`,`item_quantity`,`order_id`) 
VALUES 
(1,2,1),
(3,1,1),
(5,3,1);

--  criandp uma venda
INSERT INTO `orders` (`order_number`,`client_id`,`user_id`)
VALUES ('0000000002',2,1);

INSERT INTO `items` (`product_id`,`item_quantity`,`order_id`) 
VALUES 
(6,2,2),
(7,5,2),
(2,3,2);


-- =====================================================================================
-- ===============================  R E A D  ===========================================
-- =====================================================================================

-- VER OS PRODUTOS QUE ESTÃO CADASTRADOS
SELECT * FROM `products`;

-- Visualizando os campos necessários
SELECT `product_name`, `product_price`, `product_stock` FROM `products`

-- Visualizando os campos necessários
SELECT 
	`product_name`, `product_price`, `product_stock`,
	(`product_stock`*`product_price`)  AS `venda_geral`
FROM `products`

SELECT SUM((`product_stock`*`product_price`)) AS `venda_geral` FROM `products`

--  filtrando apenas produtos que eu quiser 
SELECT `product_name`, `product_price`, `product_stock` FROM `products`
WHERE `product_name` LIKE '%co%';

SELECT `product_name`, `product_price`, `product_stock` FROM `products`
WHERE `product_price` > 5.99;

SELECT AVG(`product_price`) FROM `products`;

-- `order_number`,`client_id`,`user_id`

SELECT 
	`order_number` AS `NF`,
	`user_name` AS `VENDEDOR`,
	`client_name` AS `CLIENTE`,
	`order_created_in` AS `DATA_VENDA`,
	SUM(`product_price`*`item_quantity`) AS `VALOR_TOTAL`
FROM
	`orders`,`clients`,`users`,`products`,`items`
WHERE
	`orders`.`client_id` = `clients`.`id_client` AND 
	`orders`.`user_id` = `users`.`id_user` AND
	`items`.`order_id` = `orders`.`id_order` AND
	`items`.`product_id` = `products`.`id_product`
GROUP BY 
	order_id;