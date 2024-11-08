drop database if exists exercicios;
create database exercicios;
use exercicios;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/11/2024 às 01:44
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exercicios`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `calculadora`
--

CREATE TABLE `calculadora` (
  `id` int(11) NOT NULL,
  `valorUm` float NOT NULL,
  `valorDois` float NOT NULL,
  `operacao` enum('+','-','/','*') NOT NULL,
  `resultado` float DEFAULT NULL,
  `erro` varchar(125) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `calculadora`
--

INSERT INTO `calculadora` (`id`, `valorUm`, `valorDois`, `operacao`, `resultado`, `erro`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 100, 10, '+', 110, NULL, '2024-11-07 00:18:22', 1, '2024-11-07 00:18:22', NULL, NULL, NULL),
(2, 100, 10, '+', 110, NULL, '2024-11-07 00:26:22', 1, '2024-11-07 00:26:22', NULL, NULL, NULL),
(3, 100, 0, '+', NULL, NULL, '2024-11-07 00:30:47', 1, '2024-11-07 00:30:47', NULL, NULL, NULL),
(4, 100, 0, '+', NULL, 'Divisão por zero.', '2024-11-07 00:33:17', 1, '2024-11-07 00:33:17', NULL, NULL, NULL),
(5, 100, 0, '/', NULL, 'Divisão por zero.', '2024-11-07 00:38:43', 1, '2024-11-07 00:38:43', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `calculadora`
--
ALTER TABLE `calculadora`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `calculadora`
--
ALTER TABLE `calculadora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `exercicios`.`agenda` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(125) NOT NULL , `email` VARCHAR(125) NOT NULL , `telefoneCelular` VARCHAR(11) NOT NULL , `telefoneFixo` VARCHAR(10) NULL , `endereco` VARCHAR(1024) NOT NULL , `created_by` INT NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_by` INT NULL , `updated_at` DATETIME NULL , `deleted_by` INT NULL , `deleted_at` DATETIME NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
