-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/11/2018 às 22:11
-- Versão do servidor: 10.1.36-MariaDB
-- Versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `uniduniler`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `ID` int(11) NOT NULL,
  `Evento` varchar(45) NOT NULL,
  `Cor` varchar(45) NOT NULL,
  `Inicio` varchar(45) NOT NULL,
  `Termino` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `agenda`
--

INSERT INTO `agenda` (`ID`, `Evento`, `Cor`, `Inicio`, `Termino`) VALUES
(1, 'Teste', '#8B4513', '19/09/2018 00:00:00', '20/09/2018 00:00:00'),
(2, 'Teste01', '#007FFF', '2018-11-13 00:00:00', '2018-11-14 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades_galeria`
--

CREATE TABLE `atividades_galeria` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `upload_time` varchar(255) NOT NULL,
  `ID_atividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atividades_galeria`
--

INSERT INTO `atividades_galeria` (`id`, `file_name`, `upload_time`, `ID_atividades`) VALUES
(0, '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades_geral`
--

CREATE TABLE `atividades_geral` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `subtitulo` varchar(45) NOT NULL,
  `Descrição` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atividades_geral`
--

INSERT INTO `atividades_geral` (`ID`, `Titulo`, `subtitulo`, `Descrição`) VALUES
(0, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades_informacoes`
--

CREATE TABLE `atividades_informacoes` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Duracao` varchar(45) NOT NULL,
  `Publico` varchar(45) NOT NULL,
  `Necessidade` varchar(45) NOT NULL,
  `Youtube` varchar(45) NOT NULL,
  `ID_atividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `atualidades`
--

CREATE TABLE `atualidades` (
  `ID` int(11) NOT NULL,
  `Título` varchar(75) NOT NULL,
  `data` date NOT NULL,
  `Postagem` text NOT NULL,
  `Link` varchar(100) NOT NULL,
  `Imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atualidades`
--

INSERT INTO `atualidades` (`ID`, `Título`, `data`, `Postagem`, `Link`, `Imagem`) VALUES
(0, '', '0000-00-00', '', '', ''),
(1, 'Teste 01', '2018-11-13', 'Este é um teste de atualidades. Este é um teste de atualidades. Este é um teste de atualidades. Este é um teste de atualidades. Este é um teste de atualidades. Este é um teste de atualidades. Este é um teste de atualidades. ', 'http://localhost/phpmyadmin/sql.php?db=uniduniler&table=sistema&pos=0', 'uniduniler/dist/img/atualidades/Captura de tela de 2018-11-10 21-43-15.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `atualidades_galeria`
--

CREATE TABLE `atualidades_galeria` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `upload_time` varchar(255) NOT NULL,
  `ID_atualidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atualidades_galeria`
--

INSERT INTO `atualidades_galeria` (`id`, `file_name`, `upload_time`, `ID_atualidades`) VALUES
(0, '', '', 0),
(1, 'Captura de tela de 2018-11-10 21-43-15.png', '1542157156', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills`
--

CREATE TABLE `fills` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `Edição` varchar(75) NOT NULL,
  `Design` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `fills`
--

INSERT INTO `fills` (`id`, `data`, `Edição`, `Design`) VALUES
(0, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills_colaboradores`
--

CREATE TABLE `fills_colaboradores` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Cargo` varchar(75) NOT NULL,
  `ID_colaboradores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills_convidados`
--

CREATE TABLE `fills_convidados` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `ID_convidados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills_depoimentos`
--

CREATE TABLE `fills_depoimentos` (
  `ID` int(11) NOT NULL,
  `Autor` varchar(75) NOT NULL,
  `Depoimento` varchar(255) NOT NULL,
  `ID_fills` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills_galeria`
--

CREATE TABLE `fills_galeria` (
  `ID` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `upload_time` varchar(255) NOT NULL,
  `ID_fills` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills_notícias`
--

CREATE TABLE `fills_notícias` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `ID_noticias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fills_programacao`
--

CREATE TABLE `fills_programacao` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_programacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Assunto` varchar(45) NOT NULL,
  `Mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens_resposta`
--

CREATE TABLE `mensagens_resposta` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Assunto` varchar(45) NOT NULL,
  `Mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sistema`
--

CREATE TABLE `sistema` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  `P_Agenda` tinyint(4) NOT NULL,
  `P_mensagens` tinyint(4) NOT NULL,
  `P_Sistema` tinyint(4) NOT NULL,
  `P_Fills` tinyint(4) NOT NULL,
  `P_Atualidades` tinyint(4) NOT NULL,
  `P_Depoimentos` tinyint(4) NOT NULL,
  `P_Galeria` tinyint(4) NOT NULL,
  `P_Programação` tinyint(4) NOT NULL,
  `P_Notícias` tinyint(4) NOT NULL,
  `P_Convidados` tinyint(4) NOT NULL,
  `P_Equipe` tinyint(4) NOT NULL,
  `P_Edita_Agenda` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `sistema`
--

INSERT INTO `sistema` (`ID`, `Nome`, `Email`, `Senha`, `P_Agenda`, `P_mensagens`, `P_Sistema`, `P_Fills`, `P_Atualidades`, `P_Depoimentos`, `P_Galeria`, `P_Programação`, `P_Notícias`, `P_Convidados`, `P_Equipe`, `P_Edita_Agenda`) VALUES
(1, 'Super User', 'uniduniler@uniduniler.com.br', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1),
(5, 'Luís Araki', 'araki.luis@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `atividades_galeria`
--
ALTER TABLE `atividades_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `atividades_geral`
--
ALTER TABLE `atividades_geral`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `atividades_informacoes`
--
ALTER TABLE `atividades_informacoes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `atualidades`
--
ALTER TABLE `atualidades`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `atualidades_galeria`
--
ALTER TABLE `atualidades_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fills`
--
ALTER TABLE `fills`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fills_colaboradores`
--
ALTER TABLE `fills_colaboradores`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_id_colaboradores_idx` (`ID_colaboradores`);

--
-- Índices de tabela `fills_convidados`
--
ALTER TABLE `fills_convidados`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_id_convidados_idx` (`ID_convidados`);

--
-- Índices de tabela `fills_depoimentos`
--
ALTER TABLE `fills_depoimentos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_id_fills_idx` (`ID_fills`);

--
-- Índices de tabela `fills_galeria`
--
ALTER TABLE `fills_galeria`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_id_galeria_idx` (`ID_fills`);

--
-- Índices de tabela `fills_notícias`
--
ALTER TABLE `fills_notícias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_id_noticias_idx` (`ID_noticias`);

--
-- Índices de tabela `fills_programacao`
--
ALTER TABLE `fills_programacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_programacao_idx` (`id_programacao`);

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `mensagens_resposta`
--
ALTER TABLE `mensagens_resposta`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `atividades_galeria`
--
ALTER TABLE `atividades_galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `atividades_geral`
--
ALTER TABLE `atividades_geral`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `atividades_informacoes`
--
ALTER TABLE `atividades_informacoes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `atualidades`
--
ALTER TABLE `atualidades`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `atualidades_galeria`
--
ALTER TABLE `atualidades_galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fills`
--
ALTER TABLE `fills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fills_colaboradores`
--
ALTER TABLE `fills_colaboradores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fills_convidados`
--
ALTER TABLE `fills_convidados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fills_depoimentos`
--
ALTER TABLE `fills_depoimentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fills_galeria`
--
ALTER TABLE `fills_galeria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fills_notícias`
--
ALTER TABLE `fills_notícias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fills_programacao`
--
ALTER TABLE `fills_programacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagens_resposta`
--
ALTER TABLE `mensagens_resposta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sistema`
--
ALTER TABLE `sistema`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `fills_colaboradores`
--
ALTER TABLE `fills_colaboradores`
  ADD CONSTRAINT `fk_id_colaboradores` FOREIGN KEY (`ID_colaboradores`) REFERENCES `fills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `fills_convidados`
--
ALTER TABLE `fills_convidados`
  ADD CONSTRAINT `fk_id_convidados` FOREIGN KEY (`ID_convidados`) REFERENCES `fills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `fills_depoimentos`
--
ALTER TABLE `fills_depoimentos`
  ADD CONSTRAINT `fk_id_fills` FOREIGN KEY (`ID_fills`) REFERENCES `fills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `fills_galeria`
--
ALTER TABLE `fills_galeria`
  ADD CONSTRAINT `fk_id_galeria` FOREIGN KEY (`ID_fills`) REFERENCES `fills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `fills_notícias`
--
ALTER TABLE `fills_notícias`
  ADD CONSTRAINT `fk_id_noticias` FOREIGN KEY (`ID_noticias`) REFERENCES `fills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `fills_programacao`
--
ALTER TABLE `fills_programacao`
  ADD CONSTRAINT `fk_id_programacao` FOREIGN KEY (`id_programacao`) REFERENCES `fills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
