/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `bairros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `cidades_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `cidades_bairros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cidade` int(11) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_bairro` (`id_bairro`),
  KEY `id_cidade` (`id_cidade`),
  CONSTRAINT `cidades_bairros_ibfk_1` FOREIGN KEY (`id_bairro`) REFERENCES `bairros` (`id`),
  CONSTRAINT `cidades_bairros_ibfk_2` FOREIGN KEY (`id_cidade`) REFERENCES `cidades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `corretores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creci` varchar(10) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `nome` varchar(300) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data` date NOT NULL,
  `senha` varchar(32) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `corretores_imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_corretor` int(11) DEFAULT NULL,
  `id_imovel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_corretor` (`id_corretor`),
  KEY `id_imovel` (`id_imovel`),
  CONSTRAINT `corretores_imoveis_ibfk_1` FOREIGN KEY (`id_corretor`) REFERENCES `corretores` (`id`),
  CONSTRAINT `corretores_imoveis_ibfk_2` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `descricao_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_foto` int(11) DEFAULT NULL,
  `id_descricao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_foto` (`id_foto`),
  KEY `id_descricao` (`id_descricao`),
  CONSTRAINT `descricao_fotos_ibfk_1` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`),
  CONSTRAINT `descricao_fotos_ibfk_2` FOREIGN KEY (`id_descricao`) REFERENCES `descricoes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `descricoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suite` varchar(10) DEFAULT NULL,
  `dormitorio` varchar(10) DEFAULT NULL,
  `banheiro` varchar(10) DEFAULT NULL,
  `garagem` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `UF` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_imagem` varchar(50) DEFAULT NULL,
  `id_imovel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_imovel` (`id_imovel`),
  CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluguel` varchar(50) DEFAULT NULL,
  `data` date NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `breve_descricao` varchar(10) DEFAULT NULL,
  `venda` varchar(50) DEFAULT NULL,
  `url_foto_principal` varchar(50) DEFAULT NULL,
  `nivel` varchar(30) NOT NULL,
  `id_tipo_imovel` int(11) DEFAULT NULL,
  `id_tipo_assunto` int(11) DEFAULT NULL,
  `id_bairro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_imovel` (`id_tipo_imovel`),
  KEY `id_tipo_assunto` (`id_tipo_assunto`),
  KEY `id_bairro` (`id_bairro`),
  CONSTRAINT `imoveis_ibfk_1` FOREIGN KEY (`id_tipo_imovel`) REFERENCES `tipos_imoveis` (`id`),
  CONSTRAINT `imoveis_ibfk_2` FOREIGN KEY (`id_tipo_assunto`) REFERENCES `tipos_assuntos` (`id`),
  CONSTRAINT `imoveis_ibfk_3` FOREIGN KEY (`id_bairro`) REFERENCES `bairros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `imoveis_descricoes` (
  `id_imovel` int(11) DEFAULT NULL,
  `id_descricao` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_descricao` (`id_descricao`),
  KEY `id_imovel` (`id_imovel`),
  CONSTRAINT `imoveis_descricoes_ibfk_1` FOREIGN KEY (`id_descricao`) REFERENCES `descricoes` (`id`),
  CONSTRAINT `imoveis_descricoes_ibfk_2` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `imoveis_interesses` (
  `id_interesse` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_interesse` (`id_interesse`),
  KEY `id_imovel` (`id_imovel`),
  CONSTRAINT `imoveis_interesses_ibfk_1` FOREIGN KEY (`id_interesse`) REFERENCES `interesses` (`id`),
  CONSTRAINT `imoveis_interesses_ibfk_2` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `interesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celular` varchar(16) DEFAULT NULL,
  `data_interesse` date NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `nome` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `id_tipo_assunto` int(11) NOT NULL,
  `id_tipo_imovel` int(11) NOT NULL,
  `id_tipo_negociacao` int(11) NOT NULL,
  `mensagem` text,
  PRIMARY KEY (`id`),
  KEY `id_tipo_assunto` (`id_tipo_assunto`),
  KEY `id_tipo_imovel` (`id_tipo_imovel`),
  KEY `id_tipo_negociacao` (`id_tipo_negociacao`),
  CONSTRAINT `interesses_ibfk_1` FOREIGN KEY (`id_tipo_assunto`) REFERENCES `tipos_assuntos` (`id`),
  CONSTRAINT `interesses_ibfk_2` FOREIGN KEY (`id_tipo_imovel`) REFERENCES `tipos_imoveis` (`id`),
  CONSTRAINT `interesses_ibfk_3` FOREIGN KEY (`id_tipo_negociacao`) REFERENCES `tipos_negociacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `situacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `construcao` varchar(10) DEFAULT NULL,
  `planta` varchar(10) DEFAULT NULL,
  `reforma` varchar(10) DEFAULT NULL,
  `pronto_morar` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_imovel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_imovel` (`id_imovel`),
  CONSTRAINT `situacoes_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imoveis` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tipos_assuntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tipos_imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tipos_negociacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
