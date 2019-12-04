
CREATE DATABASE IF NOT EXISTS `db_cinema` 
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `db_cinema`;


-- Tabela ingressos --
CREATE TABLE IF NOT EXISTS `ingressos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(40) NOT NULL,
  `FOTO` varchar(70) NOT NULL,
  `VALOR` float NOT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET=utf8;


--Tabela usuários --

CREATE TABLE IF NOT EXISTS `usuarios` (
`ID` int NOT NULL AUTO_INCREMENT,
`LOGIN` Varchar(80) NOT NULL,
`SENHA` Varchar(32) NOT NULL,
PRIMARY KEY (`ID`)
) DEFAULT CHARSET=utf8;


--Insert para popular inicialmente o site

INSERT INTO `ingressos` (`NOME`, `FOTO`, `VALOR`) VALUES 
('Coringa', 'imagens/Ingressos/coringa.png', '34.89'),
('Dora e a cidade perdida', 'imagens/Ingressos/Dora_acidade_perdida.jpg', '27.99'),
('Medo Profundo', 'imagens/Ingressos/medo_profundo.jpg', '29.99'),
('Panteras', 'imagens/Ingressos/panteras.jpg', '24.99');


INSERT INTO `usuarios` (`LOGIN`, `SENHA`) VALUES
('admin', '12345');






-- ------------------------

--
-- Usuário BD
-- 

CREATE USER IF NOT EXISTS 'admin'@'localhost' IDENTIFIED BY 'admin';

GRANT ALL PRIVILEGES ON `db_ingressos` . * TO 'admin'@'localhost';