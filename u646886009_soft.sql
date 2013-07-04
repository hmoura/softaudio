
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 04/07/2013 às 08:42:09
-- Versão do Servidor: 5.1.66
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u646886009_soft`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `occupations`
--

CREATE TABLE IF NOT EXISTS `occupations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoOcupacao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipoOcupacao` (`tipoOcupacao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `occupations`
--

INSERT INTO `occupations` (`id`, `tipoOcupacao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fonoaudiologo', '2013-06-30 19:14:35', '2013-07-02 14:42:56', NULL),
(2, 'Teste', '2013-06-30 19:14:48', '2013-06-30 22:41:10', NULL),
(3, 'Médico', '2013-07-02 15:37:36', NULL, NULL),
(4, 'Teste3', '2013-07-03 11:50:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(9) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(5) NOT NULL,
  `cep` int(8) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cel` int(11) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `cidade` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`,`rg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `nome`, `cpf`, `rg`, `dataNascimento`, `created_at`, `updated_at`, `deleted_at`, `rua`, `bairro`, `complemento`, `numero`, `cep`, `email`, `cel`, `tel`, `cidade`, `estado`) VALUES
(1, 'Teste', 1, 3, '2013-06-07', '2013-06-30 19:13:13', '2013-06-30 22:38:20', NULL, '3', '3', '3', 3, 3, NULL, NULL, 2, '3', 'AC'),
(2, 'HIVISON DO NASCIMENTO MOURA', 2147483647, 24, '2011-10-30', '2013-07-04 08:15:02', NULL, NULL, '3', 'Centro', NULL, 3, 5916400, NULL, 123, 123, 're', 'PR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'wdm', 'wdm@dsdsd.com', '7472ecbd23035919ce77c9ea20727d74', '2013-06-30 18:06:50', '2013-07-02 14:41:17', NULL),
(2, 'hw', 'hw@com', '65c2a3d77127c15d068dec7e00e50649', '2013-06-30 18:08:33', NULL, NULL),
(3, 'hivison', '123@123', '202cb962ac59075b964b07152d234b70', '2013-06-30 18:51:00', NULL, NULL),
(4, 'teste', '222@22', 'e8d95a51f3af4a3b134bf6bb680a213a', '2013-06-30 19:11:38', '2013-06-30 22:36:50', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idOccupations` int(11) DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `cr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cel` int(11) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `idOccupations` (`idOccupations`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `workers`
--

INSERT INTO `workers` (`id`, `idOccupations`, `nome`, `cpf`, `rg`, `dataNascimento`, `cr`, `cel`, `tel`, `email`, `rua`, `bairro`, `complemento`, `cidade`, `estado`, `numero`, `created_at`, `updated_at`, `deleted_at`, `cep`) VALUES
(1, 1, 'Hivison do Nascimento Moura', 2147483647, 24, '2012-11-30', '02', 81114237, 81114237, 'hivison_nisia@hotmail.com', 'José Augusto Freire', 'Centro', 'Casa', 'Nísia Floresta', 'CE', 39, '2013-07-04 09:08:30', '2013-07-04 09:39:14', NULL, 5916400);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
