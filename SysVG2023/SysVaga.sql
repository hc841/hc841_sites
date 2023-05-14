CREATE DATABASE VagaBD;
USE VagaBD;
-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

DROP TABLE IF EXISTS `vaga`;
CREATE TABLE IF NOT EXISTS `vaga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `ativo` enum('s','n') NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `titulo`, `descricao`, `ativo`, `data`) VALUES
(15, 'Programador', 'Teste de vaga de programação em PHP', 's', '2022-09-08 03:00:00'),
(16, 'Estágio', 'Estágio em Java no IFC', 's', '2022-09-08 03:00:00'),
(17, 'Faxineira', 'Fazer faxina todo dia do ano.', 's', '2022-09-08 03:00:00'),
(18, 'Contador', 'Contar os tijolos do IFC.', 's', '2022-09-08 03:00:00'),
(19, 'Personal', 'Colocar os alunos do IFC em forma de ...', 's', '2022-09-08 03:00:00');
