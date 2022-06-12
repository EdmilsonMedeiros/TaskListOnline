-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/06/2022 às 22:41
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `manager`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `conteudo` varchar(255) DEFAULT NULL,
  `dataTarefa` date DEFAULT NULL,
  `statusTarefa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `id_user`, `titulo`, `conteudo`, `dataTarefa`, `statusTarefa`) VALUES
(6, 2, 'Reunião no trabalho', 'Reunião no trabalho: Assuntos relativos a coleta de requisitos.', '2022-06-15', 'aberta'),
(7, 2, 'Praia com os amigos', 'Entretenimento', '2022-06-07', 'aberta'),
(8, 3, 'Tituldf Tifer', 'ggggg', '2022-06-16', 'aberta'),
(9, 3, 'ggg', 'ggg', '2022-06-10', 'aberta'),
(10, 3, 'gghhhh', 'hhhhh', '2022-06-23', 'aberta'),
(11, 3, 'hhjjj', 'jjjjttt', '2022-06-11', 'aberta'),
(12, 3, 'assfghjkk', 'adegjjkjçoç~', '2022-06-15', 'aberta'),
(13, 3, 'dsdsfghhh', 'hghjjghjhj', '2022-06-21', 'aberta'),
(14, 3, 'çlkçlkççlkç', 'lççkçklçlkçlkç', '2022-06-01', 'aberta'),
(15, 3, 'ggg', 'jjjjjjjjjjjjjjjjjjjjjjjjj', '2022-06-10', 'aberta'),
(16, 3, 'cccccccccccc', 'gggggggggggggggggggg', '2022-06-25', 'concluida');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `dataNascimento`, `email`, `senha`) VALUES
(2, 'Jarbson', '1993-12-10', 'jarbson@gmail.com', '12345678'),
(3, 'Edmilson Medeiros', '1993-12-31', 'edmilsonjhm@gmail.com', '12345678');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
