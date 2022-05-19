-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2022 às 16:12
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(8) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `create_data` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `email`, `username`, `password`, `birthday`, `create_data`) VALUES
(40, 'leonardo.sousa@grupoprominas.com.br', 'leo', '8a2dc3c6cb64e0b25858543b94411449', '2001-07-12', '2022-05-12 16:24:20'),
(41, 'warleymendes15@gmail.com', 'Warley', 'e10adc3949ba59abbe56e057f20f883e', '1995-10-25', '2022-05-17 13:56:27'),
(42, 'igor.miranda@grupoprominas.com.br', 'otakufedido', 'e10adc3949ba59abbe56e057f20f883e', '2002-05-25', '2022-05-17 13:58:41'),
(43, 'naoseioquedigitarcomissomasvaitercrudaquitbm@querocrud.com.br', 'querocrud', 'e10adc3949ba59abbe56e057f20f883e', '2020-02-02', '2022-05-17 14:00:56'),
(47, 'gabirel.rodrigues@gmail.com', 'gabs', 'cf1a1ae3a4b31dc947f3ffa49291d8d0', '2020-02-02', '2022-05-17 16:43:49');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
