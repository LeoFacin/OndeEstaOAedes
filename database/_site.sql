-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2017 às 04:52
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(50) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `criado`, `modificado`) VALUES
(1, 'Administrador', '2017-04-21 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `criada` datetime DEFAULT NULL,
  `modificada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_acesso_id`, `criada`, `modificada`) VALUES
(1, 'Leonardo', 'leo_facin@hotmail.com', '123', 1, '2017-04-21 21:27:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
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
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
