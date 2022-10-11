-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2022 às 01:01
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `nome` int(11) NOT NULL,
  `senha` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `data_nasc` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT DELAYED IGNORE INTO `cliente` (`cod_cliente`, `nome`, `email`, `data_nasc`, `senha`) VALUES
(2, 'meu piruzinho', 'meu.piruzinho@cozinho.com', '2002-01-01', '123456'),
(3, 'meu piruzinho tamanho medio ', 'meu.piruzinho@cozinhoo.com', '2002-01-01', '145236'),
(4, 'vladimir pinho andrade dos san', 'vladimir.pinho@gmail.com', '2001-11-18', '123456');

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
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
