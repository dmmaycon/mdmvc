-- DUMP INICIAL DO FRAMEWORK MDMVC

-- 1 -> executar esta linha
CREATE DATABASE IF NOT EXISTS `db_mdmvc` 

-- 2 -> executar esta linha
USE `db_mdmvc`;

-- 3 -> executar esta linha
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL DEFAULT '',
  `login` varchar(30) NOT NULL DEFAULT '',
  `senha` varchar(400) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
-- 3 -> até aqui

-- 4 -> executar esta linha
INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`) VALUES
	(1, 'Adminstrador', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin@mdmvc.com');

