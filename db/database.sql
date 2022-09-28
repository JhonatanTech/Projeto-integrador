-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Set-2022 às 21:16
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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `nome`, `local`, `qtd`, `obs`, `imagem`) VALUES
(29, 'Violão', 'Música', 15, 'Violão novo', '788c7852bd8f977e195fc25a1d567163webp'),
(30, 'Rede de vôlei', 'Educação Física', 2, 'Rede antiga com alguns defeitos', '6afe83ddbae36f16e96e864eeb5eeedcwebp'),
(28, 'Vassoura', 'Limpeza', 65, 'Vassoura leve e nova na cor rosa', 'b1d8c6d5345ea93b3e93d8cee51eac17avif'),
(27, 'Sabão Ype', 'Limpeza', 100, 'Sabão novo sem validade', '20a69be2b2e717a08f6b3aa898a1ce87.png'),
(24, 'Caderno', 'Direção', 100, 'Cadernos novos', '197ae9e5ff555875c57c2e645c14fda1webp'),
(25, 'Cola branca', 'Direção', 15, 'Novas', '791588fce97b1db964da9f0b47eee201webp'),
(31, 'Bola Nike futsal', 'Educação Física', 3, 'Bola velha', '12e39e821a31a5372d12b5083739582bwebp'),
(26, 'Cola branca 1kg', 'Limpeza', 15, 'Cola nova de 1kg', 'bb269a8e388469d5a31c5cb758df9f0djfif'),
(42, 'Cola branca', 'Direção', 15, 'Material novo e de ótimo estado', '374ab1ba898a6f91459aef12ede8930c.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

DROP TABLE IF EXISTS `solicitacao`;
CREATE TABLE IF NOT EXISTS `solicitacao` (
  `data` varchar(255) NOT NULL,
  `qtd` int(11) NOT NULL,
  `obs` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `cpf`, `contato`, `funcao`, `email`, `senha`, `imagem`) VALUES
(5, 'jhonatan', 'torres', '501.720.748-19', '(11) 4443-3837', 'Programador', 'jhonatancarvalhotorres12@gmail.com', '202cb962ac59075b964b07152d234b70', '651ea8bde82871acb166b07fe83ec07a.png'),
(14, 'Jhonatan', 'Carvalho Torres', '501.111.111-11', '(44) 44444-4444', 'sf', 'jhonatancarvalhotorres123@gmail.com', '202cb962ac59075b964b07152d234b70', '775be1c94df4e1d3fc3ead9bbe1f6968.jpg'),
(9, 'Juan', 'Teixeira', '413.509.258-71', '(11) 44821-638', 'Carregador de Caixas', 'juan.teixeira@fatec.sp.gov.br', 'c7f626ad40317f4dc7b295c6f04c850d', 'b517417a1addd78094ca109999306175.jpg'),
(10, 'Vitor ', 'Eduardo', '507.341.587-41', '(11) 95789-6431', 'Professor ', 'jorginho@email.com', '0448ce9547639e9fcba2fafb71af4ab8', '038224ce6bf0e101393cd6136813171b.jpg'),
(11, 'Jane', 'de Sena', '315.244.768-03', '', 'agente de organização escolar', 'janedesena@hotmail.com', '0881f2255c2c475adb146c02ac51105c', '5daf1908d6aaa184c963b3676a838995.jpg'),
(12, 'Gabriel', 'David', '503.611.908-83', '(11) 93256-7540', 'Auxiliar administrativo', 'gd84797@gmail.com', '202cb962ac59075b964b07152d234b70', 'f10c39fbeb71193b790da0549555cb67.jpg'),
(13, 'Josiane', 'Luz', '135.061.976-06', '(35) 99229-2505', 'Teste', 'josi.luz2707@gmail.com', '593c68374801a0bc72b08ec9b24081ac', 'df64c3c4f69b451f18b077521bf7b881.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
