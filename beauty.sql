-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2023 às 20:32
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `beauty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `celular` int(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sub` float NOT NULL,
  `total` float NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `datacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `categoria`, `qtd`, `preco`, `imagem`) VALUES
(1, 'kit amend roxo', 'cabelo', 100, 150, 'amend.png'),
(2, 'Beleza natural', 'cabelo', 100, 80, 'belezanatural.png'),
(3, 'Boca Rosa', 'cabelo', 100, 120, 'bocarosa.png'),
(4, 'kit Eudora azul', 'cabelo', 100, 130, 'eudora1.png'),
(5, 'kit amend verde', 'cabelo', 100, 120, 'amend2.png'),
(6, 'kit eudora rosa', 'cabelo', 100, 150, 'eudora2.png'),
(7, 'Forever liss', 'cabelo', 100, 100, 'foreverliss.png'),
(8, 'Kit Boca Rosa', 'cabelo', 100, 200, 'kitbocarosa.png'),
(9, 'Loreal', 'cabelo', 100, 100, 'loreal.png'),
(10, 'Pantene', 'cabelo', 100, 90, 'pantene.png'),
(11, 'Salon Line', 'cabelo', 100, 80, 'salonline.png'),
(12, 'Widi Care', 'cabelo', 100, 70, 'widicare.png'),
(13, 'Pó Bruna', 'maquiagem', 100, 45, 'pobruna.png'),
(14, 'Paleta de cor', 'maquiagem', 100, 50, 'paletadesmb.png'),
(15, 'Lip Tint BR', 'maquiagem', 100, 40, 'liptintbr.png'),
(16, 'Esponja Diamante', 'maquiagem', 100, 20, 'esponjamari.png'),
(17, 'corretivo BR', 'maquiagem', 100, 45, 'corretivobr.png'),
(18, 'Blush BR', 'maquiagem', 100, 50, 'blushbr.png'),
(19, 'Batom Mari', 'maquiagem', 100, 30, 'batommarii.png'),
(20, 'Batom Bruna', 'maquiagem', 100, 45, 'batombruna.png'),
(21, 'Batom Br', 'maquiagem', 100, 35, 'batombr.png'),
(22, 'Base Mari', 'maquiagem', 100, 75, 'basemari.png'),
(23, 'Base BR', 'maquiagem', 100, 65, 'basebr.png'),
(24, 'Elixir Facial ', 'maquiagem', 100, 60, 'aguabruna.png'),
(25, 'Perfume 212', 'perfume', 100, 600, '212.png'),
(26, 'Perfume Chanel ', 'perfume', 100, 500, 'chanel.png'),
(27, 'Perfume Ekos', 'perfume', 100, 200, 'ekos.png'),
(28, 'Perfume Eliana', 'perfume', 100, 120, 'eliana.png'),
(29, 'Perfume emily', 'perfume', 100, 100, 'emily.png'),
(30, 'Perfume Essencial', 'perfume', 100, 200, 'essencial.png'),
(31, 'Perfume Glamour', 'perfume', 100, 150, 'glamour.png'),
(32, 'Perfume Kaiak', 'perfume', 100, 80, 'kaiak.png'),
(33, 'Perfume Luna', 'perfume', 100, 130, 'luna.png'),
(34, 'Perfume Malbec', 'perfume', 100, 150, 'malbec.png'),
(35, 'Perfume Paixao', 'perfume', 100, 120, 'paixao.png'),
(36, 'Perfume Shakira', 'perfume', 100, 200, 'shakira.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idcproduto` (`idproduto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
