-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.20-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-06-05 23:12:24
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for zend
CREATE DATABASE IF NOT EXISTS `zend` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `zend`;


-- Dumping structure for table zend.informacoes_usuario
CREATE TABLE IF NOT EXISTS `informacoes_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(200) NOT NULL,
  `numero` int(11) DEFAULT '0',
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_alteracao` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `informacoes_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping structure for table zend.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` char(32) NOT NULL,
  `tipo` enum('ADMIN','USER') DEFAULT 'USER',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
