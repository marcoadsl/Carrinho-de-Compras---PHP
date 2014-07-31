-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Jul-2014 às 01:36
-- Versão do servidor: 5.5.34-0ubuntu0.13.04.1
-- versão do PHP: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `Carrinho_de_compras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Produtos`
--

CREATE TABLE IF NOT EXISTS `Produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabela com todos os produtos presentes no carrinho' AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `Produtos`
--

INSERT INTO `Produtos` (`id`, `nome`, `imagem`, `preco`) VALUES
(1, 'Guitarra Condor rx-20s modelo strato', 'guitarra.jpg', 670),
(2, 'Bateria Taye Acústica PX522S GG KT Preta - cod: 2774338  (+ info)', 'bateria.jpg', 3399),
(3, 'Pedal Wah wah - Dunlop', 'guitarra.jpg', 650);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabela com todos os usuarios cadastrados no ''web site''' AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `Usuario`
--

INSERT INTO `Usuario` (`id`, `nome`, `senha`) VALUES
(1, 'pedro', 'pedr0704');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
