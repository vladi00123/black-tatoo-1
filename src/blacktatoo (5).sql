-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Dez-2022 às 18:10
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30
CREATE DATABASE IF NOT EXISTS blacktatoo DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE blacktatoo;
DROP USER IF EXISTS 'tatoo'@'localhost';
CREATE USER 'tatoo'@'localhost' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON blacktatoo.* TO 'tatoo'@'localhost';
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `email`, `senha`) VALUES
(1, 'admin@admin.com', '$2y$10$JzAP5MBU/uz4u9BbTkSjeue86kvL89P0HXWuwqH8UkwR3ttv8YlNe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `email`, `data_nasc`, `senha`) VALUES
(2, 'vladimir pinho andrade dos san', 'vladimir.pinho@gmail.com', '2001-11-18', '123456'),
(5, 'Adilio Jose dos Santos ', 'vladimir.pinh1o@gmail.com', '2010-11-11', '$2y$10$gDdK9wSmzTLCd5ZVTjnyyubtqCCmvr35fTsbcW/C.epiJKKzVpKVy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome` int(11) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `cpf` varchar(16) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
