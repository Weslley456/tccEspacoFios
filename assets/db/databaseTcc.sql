
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

	

--
-- Base de Dados: `espacofios`
--

CREATE DATABASE `espacofios`;
USE `espacofios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--


CREATE TABLE `usuario` (
	`id` INT(8) NOT NULL AUTO_INCREMENT,
	`nome` varchar(80) NOT NULL,
	`email` varchar(50) NOT NULL,
	`senha` varchar(12) NOT NULL,
	`cpf` varchar(11) NOT NULL,
	`cidade` varchar(80) NOT NULL,
	`celular` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adiministrador`
--


CREATE TABLE `administrador` (
	`id` INT(8) NOT NULL AUTO_INCREMENT,
	`user` varchar(80) NOT NULL,
	`password` varchar(12) NOT NULL,
	`email` varchar(50) NOT NULL,
	`cpf` varchar(11) NOT NULL,
	`rg` varchar(20) NOT NULL,
	`cargo` varchar(30) NOT NULL,
	`telefone` INT(9) NOT NULL,
	`celular` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--


CREATE TABLE `promocoes` (
	`id` INT(8) NOT NULL AUTO_INCREMENT,
	`nomeCliente` varchar(80) NOT NULL,
	`senha` varchar(12) NOT NULL,
	`produto` varchar(50) NOT NULL,
	`preco` INT(30) NOT NULL,
	`qtdeProdutos` INT(30) NOT NULL,
	`observacoes` varchar(255) NOT NULL,
	`titulo` varchar(60) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `produtos` (
	`id` INT(8) NOT NULL AUTO_INCREMENT,
	`titulo` varchar(60) NOT NULL,
	`imagem` varchar(255) NOT NULL,
	`descricao` varchar(255) NOT NULL,
	`preco` int(10) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `comentarios` (
	`id` INT(8) NOT NULL AUTO_INCREMENT,
	`nome` varchar(60) NOT NULL,
	`email` varchar(70) NOT NULL,
	`mensagem` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `cpf`, `cidade`, `celular`) VALUES
(3, 'teste', 'teste@hotmail.com', 'MTIz', 'MTA0NzI4NjA', 'Teste', 2147483647);



INSERT INTO `administrador` (`id`, `user`, `password`, `email`, `cpf`, `rg`, `cargo`, `telefone`, `celular`) VALUES
(1, 'teste', '123', 'teste@gmail.com', '99999999999', '999999999', 'adm', 999999999, 999999999);



INSERT INTO `promocoes` (`id`, `nomeCliente`, `senha`, `produto`, `preco`, `qtdeProdutos`, `observacoes`, `titulo`) VALUES
(1, ''teste', ', '123', 'Fio Cléo', 97.80, 3, 'Cliente frequente', 'Promo');



INSERT INTO `produtos` (`id`, `titulo`, `imagem`) VALUES
(1, 'Roupa Cléa', 'a29a9ad25f54247fea5d4559ed541ae4.jpg'),
(2, 'Linha Cléa', '12a5cc99de81c95c67f160dc13e13ba0.jpg'),
(3, 'Roupa Anne', '546f14ab6167df9514bc5b7a882c5812.jpg'),
(4, 'Linha Anne', 'd1ce951bb1cfb64ab3c6857fb4975b02.jpg'),
(5, 'Roupa Charme', 'ce30984a118df68de873a28b1dcb4c7b.jpg'),
(6, 'Linha Charme', '6bd5db330eb5ae45e75e283ee77e9a8e.jpg');