-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Abr-2022 às 00:37
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `qtd` int(11) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `nome`, `local`, `qtd`, `obs`, `imagem`) VALUES
(10, 'Jane', 'Befama', 55, 'Iniciou o projeto', '0fc21f0a1fd653eb761dfa823af17acd.jpg'),
(8, 'Thomas', 'T.I', 65, 'Membro do grupo 5', '9f7d80825c9cce33fee369f90d60895e.jpg'),
(9, 'Jhonatan', 'T.I', 15, 'Programador deste projeto', '0b02500b8c73d44d163596fb58d8efbd.jpg'),
(7, 'javascript', 'T.I', 145, 'Este material serve para programar', '4cf1ffb519bf81b5a3aafc6606754de3.png'),
(11, 'Teste', 'Teste', 8, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, iure, hic impedit aliquid ipsam nulla, deserunt minus vitae praesentium dicta cupiditate eius quia sequi expedita ratione fuga! Aliquid, dolorum sapiente!', '99920d0b7d863eec1ab35a4ea691f3ee.png'),
(16, 'Code', 'T.I', 656, 'Item para T.I', 'aaf76d5b2ec11f7e887d08c49378d864.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `cpf`, `contato`, `funcao`, `email`, `senha`, `imagem`) VALUES
(4, 'jhonatan', 'torrres', '444.444.444-44', '(44) 4444-4444', 'Programador', 'jhonatancarvalhotorres12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '33ffb41df1b2b72bd10e242bafd74801.png'),
(5, 'jhonatan', 'torres', '501.720.748-19', '(11) 4443-3837', 'Programador', 'jhonatancarvalhotorres152@gmail.com', '202cb962ac59075b964b07152d234b70', '651ea8bde82871acb166b07fe83ec07a.png'),
(6, 'Teste', 'Teste', '555.555.555-55', '(44) 4444-4444', 'Test', 'hbhbhbh@resr.com', '9f86307a00325a28ba8179f593291790', '7bf1cf6a3cbe865ede76faa143c1b200.png'),
(7, 'egegeergg', 'ggtrgr', '333.333.333-33', '(33) 3333-3333', 'eregrrg', 'bufdugu@njdrbhrfejk.com', '10c0852383dede59fa98cee18f4005a0', '9fbc063a215c6899ca95707e92a604f3.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
