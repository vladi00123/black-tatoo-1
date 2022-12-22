-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/12/2022 às 03:51
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blacktatoo`
--
CREATE DATABASE IF NOT EXISTS `blacktatoo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blacktatoo`;

DROP USER IF EXISTS 'tatoo'@'localhost';
CREATE USER IF NOT EXISTS 'tatoo'@'localhost' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON blacktatoo.* TO 'tatoo'@'localhost';

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `nome` int(50) NOT NULL,
  `senha` int(255) NOT NULL,
  `email` int(50) NOT NULL,
  `data_nasc` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nasc` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  primary key(cod_cliente)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
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
   primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `cod_agen` int(50) NOT NULL AUTO_INCREMENT, 
  `nome` int(50) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `tatuagens` varchar(50) NOT NULL,
  `dia_` varchar(10) NOT NULL,
  `hora` int(11) NOT NULL,
   primary key(cod_agen)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
