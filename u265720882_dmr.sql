-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12/07/2018 às 20:49
-- Versão do servidor: 10.2.16-MariaDB
-- Versão do PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u265720882_dmr`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `bairros`
--

INSERT INTO `bairros` (`id`, `nome`) VALUES
(1, 'guacuri');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `id_estado`) VALUES
(1, 'Itupeva', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidades_bairros`
--

CREATE TABLE `cidades_bairros` (
  `id` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_bairro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `cidades_bairros`
--

INSERT INTO `cidades_bairros` (`id`, `id_cidade`, `id_bairro`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`id`, `telefone`, `cpf`, `email`, `telefone2`, `data`, `nome`, `status`) VALUES
(1, '(44) 444', '', '', '(44) 4444-44', '2018-07-05', 'teste cadastro editado', 'Ativo'),
(2, '(44) 44444-4444', '213.481.718', '', '', '2018-07-06', 'marcel quatro', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compradores`
--

CREATE TABLE `compradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `rg` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `corretores`
--

CREATE TABLE `corretores` (
  `id` int(11) NOT NULL,
  `creci` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `corretores`
--

INSERT INTO `corretores` (`id`, `creci`, `email`, `nome`, `telefone`, `data`, `senha`, `status`) VALUES
(5, '113271F', 'marcelhenrique09@yahoo.com.br', 'Marcel Simoes', '', '2018-06-29', '81dc9bdb52d04dc20036dbd8313ed055', 'Ativo'),
(6, ' ', 'marecrisbr@gmail.com', 'marcel hoyama', '(11) 97672-6576', '2018-07-05', 'acb0341a397e933de70e8e71b9ee22df', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `corretores_imoveis`
--

CREATE TABLE `corretores_imoveis` (
  `id` int(11) NOT NULL,
  `id_corretor` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `descricao_tem_fotos`
--

CREATE TABLE `descricao_tem_fotos` (
  `id` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_descricao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `descricoes`
--

CREATE TABLE `descricoes` (
  `id` int(11) NOT NULL,
  `suite` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dormitorio` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banheiro` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `energia_solar` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agua` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `churrasqueira` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `internet` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `piscina` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luz` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `garagem` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lavanderia` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `endereco` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `proximidades` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_fiador` int(11) DEFAULT NULL,
  `id_bairro` int(11) DEFAULT NULL,
  `id_comprador` int(11) DEFAULT NULL,
  `id_tipo_via` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `endereco`, `tipo`, `proximidades`, `cep`, `id_cliente`, `id_fiador`, `id_bairro`, `id_comprador`, `id_tipo_via`) VALUES
(1, 'hytus loteamento fechado', '', '', NULL, 1, NULL, 1, NULL, 1),
(2, 'luiz nunes', '', '', NULL, 2, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`) VALUES
(1, 'SP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fiadores`
--

CREATE TABLE `fiadores` (
  `id` int(11) NOT NULL,
  `telefone2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `url_imagem` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `id_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `area_construida` decimal(10,0) DEFAULT NULL,
  `documentacao` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aluguel` decimal(10,2) DEFAULT NULL,
  `dataimovel` date NOT NULL,
  `url_foto_principal` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `venda` decimal(10,2) DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_total` decimal(10,0) DEFAULT NULL,
  `codigo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `breve_descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `sobre_imovel` text COLLATE utf8_unicode_ci NOT NULL,
  `formapgtovenda` text COLLATE utf8_unicode_ci NOT NULL,
  `formapgtoaluguel` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_comprador` int(11) DEFAULT NULL,
  `id_tipo_assunto` int(11) NOT NULL,
  `id_tipo_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_descricoes`
--

CREATE TABLE `imoveis_descricoes` (
  `id` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL,
  `id_descricao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_interesses`
--

CREATE TABLE `imoveis_interesses` (
  `id` int(11) NOT NULL,
  `id_interesse` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `inquilinos`
--

CREATE TABLE `inquilinos` (
  `id` int(11) NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `telefone2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_fiador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `inquilinos_imoveis`
--

CREATE TABLE `inquilinos_imoveis` (
  `id` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL,
  `id_inquilino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `interesses`
--

CREATE TABLE `interesses` (
  `id` int(11) NOT NULL,
  `celular` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `data_interesse` date NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `id_tipo_assunto` int(11) NOT NULL,
  `id_tipo_imovel` int(11) NOT NULL,
  `id_tipo_negociacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacoes`
--

CREATE TABLE `situacoes` (
  `id` int(11) NOT NULL,
  `construcao` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `planta` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reforma` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pronto_morar` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date NOT NULL,
  `id_imovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_assuntos`
--

CREATE TABLE `tipos_assuntos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tipos_assuntos`
--

INSERT INTO `tipos_assuntos` (`id`, `nome`) VALUES
(7, 'Venda'),
(8, 'Aluga'),
(9, 'Permuta'),
(10, 'Avaliação'),
(11, 'Administração'),
(12, 'Regularização'),
(13, 'Assessoria'),
(14, 'Elaboração'),
(15, 'Acompanhamento em processos'),
(16, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_imoveis`
--

CREATE TABLE `tipos_imoveis` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tipos_imoveis`
--

INSERT INTO `tipos_imoveis` (`id`, `nome`) VALUES
(1, 'Residencial'),
(2, 'Comercial'),
(3, 'Terreno'),
(4, 'Galpão'),
(5, 'Apartamento'),
(6, 'Chacara'),
(7, 'Sitio'),
(8, 'Fazenda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_negociacoes`
--

CREATE TABLE `tipos_negociacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tipos_negociacoes`
--

INSERT INTO `tipos_negociacoes` (`id`, `nome`) VALUES
(1, 'aguardando'),
(2, 'negociando'),
(3, 'esperando'),
(4, 'encerrado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_vias`
--

CREATE TABLE `tipos_vias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tipos_vias`
--

INSERT INTO `tipos_vias` (`id`, `nome`) VALUES
(1, 'Rua'),
(2, 'Avenida'),
(3, 'Travessa'),
(4, 'Estrada'),
(5, 'Rodovia'),
(6, 'Sitio'),
(7, 'Alameda'),
(8, 'Chacara');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Índices de tabela `cidades_bairros`
--
ALTER TABLE `cidades_bairros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cidade` (`id_cidade`),
  ADD KEY `id_bairro` (`id_bairro`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `corretores`
--
ALTER TABLE `corretores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `corretores_imoveis`
--
ALTER TABLE `corretores_imoveis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_corretor` (`id_corretor`),
  ADD KEY `id_imovel` (`id_imovel`);

--
-- Índices de tabela `descricao_tem_fotos`
--
ALTER TABLE `descricao_tem_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_foto` (`id_foto`),
  ADD KEY `id_descricao` (`id_descricao`);

--
-- Índices de tabela `descricoes`
--
ALTER TABLE `descricoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fiador` (`id_fiador`),
  ADD KEY `id_bairro` (`id_bairro`),
  ADD KEY `id_comprador` (`id_comprador`),
  ADD KEY `id_tipo_via` (`id_tipo_via`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices de tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fiadores`
--
ALTER TABLE `fiadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_imovel` (`id_imovel`);

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_endereco` (`id_endereco`),
  ADD KEY `id_comprador` (`id_comprador`),
  ADD KEY `id_tipo_assunto` (`id_tipo_assunto`),
  ADD KEY `id_tipo_imovel` (`id_tipo_imovel`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices de tabela `imoveis_descricoes`
--
ALTER TABLE `imoveis_descricoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_imovel` (`id_imovel`),
  ADD KEY `id_descricao` (`id_descricao`);

--
-- Índices de tabela `imoveis_interesses`
--
ALTER TABLE `imoveis_interesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_interesse` (`id_interesse`),
  ADD KEY `id_imovel` (`id_imovel`);

--
-- Índices de tabela `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fiador` (`id_fiador`);

--
-- Índices de tabela `inquilinos_imoveis`
--
ALTER TABLE `inquilinos_imoveis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_imovel` (`id_imovel`),
  ADD KEY `id_inquilino` (`id_inquilino`);

--
-- Índices de tabela `interesses`
--
ALTER TABLE `interesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_imovel` (`id_tipo_imovel`),
  ADD KEY `id_tipo_assunto` (`id_tipo_assunto`),
  ADD KEY `id_tipo_negociacao` (`id_tipo_negociacao`);

--
-- Índices de tabela `situacoes`
--
ALTER TABLE `situacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_imovel` (`id_imovel`);

--
-- Índices de tabela `tipos_assuntos`
--
ALTER TABLE `tipos_assuntos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipos_imoveis`
--
ALTER TABLE `tipos_imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipos_negociacoes`
--
ALTER TABLE `tipos_negociacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipos_vias`
--
ALTER TABLE `tipos_vias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cidades_bairros`
--
ALTER TABLE `cidades_bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `compradores`
--
ALTER TABLE `compradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `corretores`
--
ALTER TABLE `corretores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `corretores_imoveis`
--
ALTER TABLE `corretores_imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `descricao_tem_fotos`
--
ALTER TABLE `descricao_tem_fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `descricoes`
--
ALTER TABLE `descricoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fiadores`
--
ALTER TABLE `fiadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `imoveis_descricoes`
--
ALTER TABLE `imoveis_descricoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imoveis_interesses`
--
ALTER TABLE `imoveis_interesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `inquilinos`
--
ALTER TABLE `inquilinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `inquilinos_imoveis`
--
ALTER TABLE `inquilinos_imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `interesses`
--
ALTER TABLE `interesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `situacoes`
--
ALTER TABLE `situacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipos_assuntos`
--
ALTER TABLE `tipos_assuntos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tipos_imoveis`
--
ALTER TABLE `tipos_imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tipos_negociacoes`
--
ALTER TABLE `tipos_negociacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tipos_vias`
--
ALTER TABLE `tipos_vias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `cidades_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`);

--
-- Restrições para tabelas `cidades_bairros`
--
ALTER TABLE `cidades_bairros`
  ADD CONSTRAINT `cidades_bairros_ibfk_1` FOREIGN KEY (`id_cidade`) REFERENCES `cidades` (`id`),
  ADD CONSTRAINT `cidades_bairros_ibfk_2` FOREIGN KEY (`id_bairro`) REFERENCES `bairros` (`id`);

--
-- Restrições para tabelas `corretores_imoveis`
--
ALTER TABLE `corretores_imoveis`
  ADD CONSTRAINT `corretores_imoveis_ibfk_1` FOREIGN KEY (`id_corretor`) REFERENCES `corretores` (`id`),
  ADD CONSTRAINT `corretores_imoveis_ibfk_2` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`);

--
-- Restrições para tabelas `descricao_tem_fotos`
--
ALTER TABLE `descricao_tem_fotos`
  ADD CONSTRAINT `descricao_tem_fotos_ibfk_1` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`),
  ADD CONSTRAINT `descricao_tem_fotos_ibfk_2` FOREIGN KEY (`id_descricao`) REFERENCES `descricoes` (`id`);

--
-- Restrições para tabelas `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`id_fiador`) REFERENCES `fiadores` (`id`),
  ADD CONSTRAINT `enderecos_ibfk_2` FOREIGN KEY (`id_bairro`) REFERENCES `bairros` (`id`),
  ADD CONSTRAINT `enderecos_ibfk_3` FOREIGN KEY (`id_comprador`) REFERENCES `compradores` (`id`),
  ADD CONSTRAINT `enderecos_ibfk_4` FOREIGN KEY (`id_tipo_via`) REFERENCES `tipos_vias` (`id`),
  ADD CONSTRAINT `enderecos_ibfk_5` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Restrições para tabelas `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`);

--
-- Restrições para tabelas `imoveis`
--
ALTER TABLE `imoveis`
  ADD CONSTRAINT `imoveis_ibfk_1` FOREIGN KEY (`id_endereco`) REFERENCES `enderecos` (`id`),
  ADD CONSTRAINT `imoveis_ibfk_2` FOREIGN KEY (`id_comprador`) REFERENCES `compradores` (`id`),
  ADD CONSTRAINT `imoveis_ibfk_3` FOREIGN KEY (`id_tipo_assunto`) REFERENCES `tipos_assuntos` (`id`),
  ADD CONSTRAINT `imoveis_ibfk_4` FOREIGN KEY (`id_tipo_imovel`) REFERENCES `tipos_imoveis` (`id`),
  ADD CONSTRAINT `imoveis_ibfk_5` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Restrições para tabelas `imoveis_descricoes`
--
ALTER TABLE `imoveis_descricoes`
  ADD CONSTRAINT `imoveis_descricoes_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`),
  ADD CONSTRAINT `imoveis_descricoes_ibfk_2` FOREIGN KEY (`id_descricao`) REFERENCES `descricoes` (`id`);

--
-- Restrições para tabelas `imoveis_interesses`
--
ALTER TABLE `imoveis_interesses`
  ADD CONSTRAINT `imoveis_interesses_ibfk_1` FOREIGN KEY (`id_interesse`) REFERENCES `interesses` (`id`),
  ADD CONSTRAINT `imoveis_interesses_ibfk_2` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`);

--
-- Restrições para tabelas `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD CONSTRAINT `inquilinos_ibfk_1` FOREIGN KEY (`id_fiador`) REFERENCES `fiadores` (`id`);

--
-- Restrições para tabelas `inquilinos_imoveis`
--
ALTER TABLE `inquilinos_imoveis`
  ADD CONSTRAINT `inquilinos_imoveis_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`),
  ADD CONSTRAINT `inquilinos_imoveis_ibfk_2` FOREIGN KEY (`id_inquilino`) REFERENCES `inquilinos` (`id`);

--
-- Restrições para tabelas `interesses`
--
ALTER TABLE `interesses`
  ADD CONSTRAINT `interesses_ibfk_1` FOREIGN KEY (`id_tipo_imovel`) REFERENCES `tipos_imoveis` (`id`),
  ADD CONSTRAINT `interesses_ibfk_2` FOREIGN KEY (`id_tipo_assunto`) REFERENCES `tipos_assuntos` (`id`),
  ADD CONSTRAINT `interesses_ibfk_3` FOREIGN KEY (`id_tipo_negociacao`) REFERENCES `tipos_negociacoes` (`id`);

--
-- Restrições para tabelas `situacoes`
--
ALTER TABLE `situacoes`
  ADD CONSTRAINT `situacoes_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
