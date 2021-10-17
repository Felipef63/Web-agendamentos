-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Set-2021 às 13:02
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
-- Database: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--
CREATE DATABASE IF NOT EXISTS analise;
CREATE TABLE IF NOT EXISTS `agendamentos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `origem` varchar(20) NOT NULL,
  `data_contato` date NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `nome`, `telefone`, `origem`, `data_contato`, `observacao`) VALUES
(1, 'Felipe Cavalcante Lins', '(11)91111-1111', 'Fixo', '2021-09-23', 'Consulta agendada para dia 25/09/2021\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
