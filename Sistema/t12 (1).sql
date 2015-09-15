-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 15-Set-2015 às 20:05
-- Versão do servidor: 5.5.44-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `t12`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `turma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `foto`, `turma_id`) VALUES
(9, 'Lorena', 'https://scontent.xx.fbcdn.net/hphotos-xtp1/v/t1.0-9/11169073_990219324324485_4148268338163146955_n.jpg?oh=8870763cac8c6e1a8731f8f5e97631b9&oe=56822E24', 1),
(10, 'Bruno Wosniak', 'https://scontent.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/1511059_781486138603322_239069593528729146_n.jpg?oh=44c694853eb62c14ed2ee8a5f88ebd22&oe=5673B3B8', 1),
(11, 'Tales', 'tales.jpg', 1),
(12, 'Diorgeeeee', 'diorge.jpg', 1),
(13, 'Pablo', '123456', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Bruno', 'bruno@bruno.com', '1234'),
(2, 'Mario', 'mario@mario.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
