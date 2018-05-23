-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2018 às 22:54
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgc`
--

CREATE DATABASE sgc;

USE sgc;

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `idCola` int(11) NOT NULL,
  `nomeCola` varchar(50) NOT NULL,
  `cpfCola` varchar(12) NOT NULL,
  `emailCola` varchar(50) NOT NULL,
  `telefoneCola` varchar(50) NOT NULL,
  `ruaCola` varchar(50) NOT NULL,
  `numeroCola` int(11) NOT NULL,
  `bairroCola` varchar(50) NOT NULL,
  `entidadeCola` varchar(150) DEFAULT NULL,
  `valorDoadoCola` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidades`
--

CREATE TABLE `entidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cnpj` varchar(150) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

CREATE TABLE `setores` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `setor` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cpf` char(11) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `tipo` int(11) NOT NULL,
  `entidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `endereco`, `cpf`, `senha`, `email`, `telefone`, `tipo`, `entidade`) VALUES
(1, 'Administrador', 'rua x', '123456789', '25f9e794323b453885f5181f1b624d0b', 'admin@gmail.com', '1111111111111', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`idCola`);

--
-- Indexes for table `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `idCola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
