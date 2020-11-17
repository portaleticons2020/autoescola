-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Nov-2020 às 13:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `autoescola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutores`
--

CREATE TABLE `instrutores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `credencial` varchar(50) NOT NULL,
  `data_venc` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instrutores`
--

INSERT INTO `instrutores` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `credencial`, `data_venc`, `email`) VALUES
(7, 'Odair Pereira Silva', '854.549.404-10', '(83) 98808-1341', 'Rua Conego Vicente, 170', '123456', '2021-03-11', 'odair.nti@gmail.com'),
(8, 'João Paulo Pereira', '111.333.222-41', '(83) 98808-1341', 'Rua Ladeira, 14', '122151', '2020-11-13', 'uilianpb1@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcionistas`
--

CREATE TABLE `recepcionistas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recepcionistas`
--

INSERT INTO `recepcionistas` (`id`, `nome`, `email`, `cpf`, `telefone`, `endereco`) VALUES
(2, 'Paula Recepcionista', 'paular@gmail.com', '854.549.549-11', '(83) 99988-1111', 'Rua Ladeira, 14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategorias`
--

CREATE TABLE `tbcategorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbcategorias`
--

INSERT INTO `tbcategorias` (`id`, `nome`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'E');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbveiculos`
--

CREATE TABLE `tbveiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `categoria` varchar(2) NOT NULL,
  `km` int(11) NOT NULL,
  `cor` varchar(35) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `ano` int(11) NOT NULL,
  `data_revisao` date NOT NULL,
  `id_instrutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbveiculos`
--

INSERT INTO `tbveiculos` (`id`, `placa`, `categoria`, `km`, `cor`, `marca`, `ano`, `data_revisao`, `id_instrutor`) VALUES
(3, 'MNZ6383', 'A', 12345, 'AZUL', 'FIAT', 2008, '2020-12-03', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `usuario` varchar(35) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `usuario`, `senha`, `nivel`, `email`, `foto`) VALUES
(8, 'Odair Pereira Silva', '854.549.404-10', 'odair', '123456', 'admin', 'odair.nti@gmail.com', 'foto.jpg'),
(10, 'Paula Recepcionista', '854.549.549-11', 'paular@gmail.com', '123', 'recep', 'paular@gmail.com', 'default.jpg'),
(11, 'João Paulo Pereira', '111.333.222-41', 'uilianpb1@gmail.com', '123', 'instrutor', 'uilianpb1@gmail.com', 'default.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `instrutores`
--
ALTER TABLE `instrutores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `recepcionistas`
--
ALTER TABLE `recepcionistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbveiculos`
--
ALTER TABLE `tbveiculos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `instrutores`
--
ALTER TABLE `instrutores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `recepcionistas`
--
ALTER TABLE `recepcionistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbveiculos`
--
ALTER TABLE `tbveiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
