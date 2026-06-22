-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/06/2026 às 19:30
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
-- Banco de dados: `espaço`
--
CREATE DATABASE IF NOT EXISTS `espaço` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `espaço`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_avaliacao`
--

CREATE TABLE `tb_avaliacao` (
  `cd` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `avaliacao` varchar(250) NOT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_menor`
--

CREATE TABLE `tb_menor` (
  `cd` int(11) NOT NULL,
  `cd_resp` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nasc` date NOT NULL,
  `escola` varchar(200) NOT NULL,
  `queixa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pagamentos`
--

CREATE TABLE `tb_pagamentos` (
  `cd` int(11) NOT NULL,
  `cd_resp` int(11) NOT NULL,
  `cd_sessao` int(11) NOT NULL,
  `cd_paciente` int(11) NOT NULL,
  `mtd_pagamento` enum('pix','débito','crédito','boleto') NOT NULL,
  `data_v` date NOT NULL,
  `data_p` date NOT NULL,
  `status` enum('pago','pendente','atrasado','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_profissionais`
--

CREATE TABLE `tb_profissionais` (
  `cd` int(11) NOT NULL,
  `cd_usuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `especialidade` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_resp`
--

CREATE TABLE `tb_resp` (
  `cd` int(11) NOT NULL,
  `cd_usuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nasc` date NOT NULL,
  `tele` int(11) NOT NULL,
  `endereço` varchar(200) NOT NULL,
  `cep` int(8) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `num` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_sessao`
--

CREATE TABLE `tb_sessao` (
  `cd` int(11) NOT NULL,
  `cd_paciente` int(11) NOT NULL,
  `cd_profissional` int(11) NOT NULL,
  `data_sessao` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `tipo_atend` enum('avaliação','anamnese','devolutiva','') NOT NULL,
  `modalidade` enum('presencial','online','','') NOT NULL,
  `status_sessao` enum('agendada','realizada','faltou_justificado','faltou_sem_justificacao','cancelada') NOT NULL,
  `valor_cobrado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nvl_usu` enum('usuario','adm','profissional','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  ADD PRIMARY KEY (`cd`);

--
-- Índices de tabela `tb_menor`
--
ALTER TABLE `tb_menor`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `CD_RESP` (`cd_resp`);

--
-- Índices de tabela `tb_pagamentos`
--
ALTER TABLE `tb_pagamentos`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_sessao` (`cd_sessao`),
  ADD KEY `cd_resp` (`cd_resp`),
  ADD KEY `cd_paciente` (`cd_paciente`);

--
-- Índices de tabela `tb_profissionais`
--
ALTER TABLE `tb_profissionais`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_usuario` (`cd_usuario`);

--
-- Índices de tabela `tb_resp`
--
ALTER TABLE `tb_resp`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_usuario` (`cd_usuario`);

--
-- Índices de tabela `tb_sessao`
--
ALTER TABLE `tb_sessao`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_paciente` (`cd_paciente`),
  ADD KEY `cd_profissional` (`cd_profissional`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `EMAIL` (`email`),
  ADD KEY `SENHA` (`senha`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_menor`
--
ALTER TABLE `tb_menor`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_pagamentos`
--
ALTER TABLE `tb_pagamentos`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_profissionais`
--
ALTER TABLE `tb_profissionais`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_resp`
--
ALTER TABLE `tb_resp`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_sessao`
--
ALTER TABLE `tb_sessao`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_menor`
--
ALTER TABLE `tb_menor`
  ADD CONSTRAINT `tb_menor_ibfk_1` FOREIGN KEY (`cd_resp`) REFERENCES `tb_resp` (`cd`);

--
-- Restrições para tabelas `tb_pagamentos`
--
ALTER TABLE `tb_pagamentos`
  ADD CONSTRAINT `tb_pagamentos_ibfk_1` FOREIGN KEY (`cd_sessao`) REFERENCES `tb_sessao` (`cd`),
  ADD CONSTRAINT `tb_pagamentos_ibfk_2` FOREIGN KEY (`cd_resp`) REFERENCES `tb_resp` (`cd`),
  ADD CONSTRAINT `tb_pagamentos_ibfk_3` FOREIGN KEY (`cd_paciente`) REFERENCES `tb_resp` (`cd`),
  ADD CONSTRAINT `tb_pagamentos_ibfk_4` FOREIGN KEY (`cd_paciente`) REFERENCES `tb_menor` (`cd`);

--
-- Restrições para tabelas `tb_profissionais`
--
ALTER TABLE `tb_profissionais`
  ADD CONSTRAINT `tb_profissionais_ibfk_1` FOREIGN KEY (`cd_usuario`) REFERENCES `tb_usuario` (`cd`);

--
-- Restrições para tabelas `tb_resp`
--
ALTER TABLE `tb_resp`
  ADD CONSTRAINT `tb_resp_ibfk_1` FOREIGN KEY (`cd_usuario`) REFERENCES `tb_usuario` (`cd`);

--
-- Restrições para tabelas `tb_sessao`
--
ALTER TABLE `tb_sessao`
  ADD CONSTRAINT `tb_sessao_ibfk_1` FOREIGN KEY (`cd_paciente`) REFERENCES `tb_menor` (`cd`),
  ADD CONSTRAINT `tb_sessao_ibfk_2` FOREIGN KEY (`cd_paciente`) REFERENCES `tb_resp` (`cd`),
  ADD CONSTRAINT `tb_sessao_ibfk_3` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissionais` (`cd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
