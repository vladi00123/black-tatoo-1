-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Dez-2022 às 17:59
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blacktatoo`
--
CREATE DATABASE IF NOT EXISTS `blacktatoo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blacktatoo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `nome` int(50) NOT NULL,
  `senha` int(255) NOT NULL,
  `email` int(50) NOT NULL,
  `data_nasc` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`nome`, `senha`, `email`, `data_nasc`, `id`) VALUES
(0, 0, 0, 21, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nasc` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `email`, `data_nasc`, `senha`) VALUES
(1, 'yago a', 'mimsay003@gmail.com', '2003-10-21', '$2y$10$BF9fPLBwNQaTC4Ab5hm5l.DRTkQ0ZfB0s8TqeLMOsnV4d4fdNuyjK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `nome` int(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(16) NOT NULL,
  `tel` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
