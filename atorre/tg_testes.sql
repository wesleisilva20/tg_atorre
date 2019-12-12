-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2019 às 02:28
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tg_testes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_atracao`
--

CREATE TABLE `area_atracao` (
  `are_codigo` int(11) NOT NULL,
  `are_tipo` varchar(11) DEFAULT NULL,
  `are_localizacao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area_atracao`
--

INSERT INTO `area_atracao` (`are_codigo`, `are_tipo`, `are_localizacao`) VALUES
(1, 'tecnologia', 'sala 1'),
(2, 'comercial', 'sala1'),
(3, 'RH', 'sala5'),
(4, 'administrac', 'sala7'),
(5, 'atracao', 'sala9'),
(6, 'controle', 'sala3'),
(7, 'alimentacao', 'patio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atracao`
--

CREATE TABLE `atracao` (
  `atr_codigo` int(11) NOT NULL,
  `atr_nome` varchar(100) DEFAULT NULL,
  `atr_empresa` varchar(100) DEFAULT NULL,
  `atr_tipo` varchar(100) DEFAULT NULL,
  `atr_convidado` varchar(100) DEFAULT NULL,
  `atr_hora_inicio` time DEFAULT NULL,
  `atr_hora_fim` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atracao`
--

INSERT INTO `atracao` (`atr_codigo`, `atr_nome`, `atr_empresa`, `atr_tipo`, `atr_convidado`, `atr_hora_inicio`, `atr_hora_fim`) VALUES
(1, 'Final Copa Vale', 'Copa Vale', 'Jogo online', 'Fnx', '10:30:00', '13:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `calendario`
--

CREATE TABLE `calendario` (
  `cld_codigo` int(11) NOT NULL,
  `cld_data_inicio` date DEFAULT NULL,
  `cld_data_fim` date DEFAULT NULL,
  `cld_hora_abertura` time DEFAULT NULL,
  `cld_hora_fechamento` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `calendario`
--

INSERT INTO `calendario` (`cld_codigo`, `cld_data_inicio`, `cld_data_fim`, `cld_hora_abertura`, `cld_hora_fechamento`) VALUES
(1, '0000-00-00', '0000-00-00', '10:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estandes`
--

CREATE TABLE `estandes` (
  `est_codigo` int(11) NOT NULL,
  `est_nome` varchar(100) DEFAULT NULL,
  `est_tipo` varchar(100) DEFAULT NULL,
  `est_valor` varchar(9) DEFAULT NULL,
  `fun_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estandes`
--

INSERT INTO `estandes` (`est_codigo`, `est_nome`, `est_tipo`, `est_valor`, `fun_codigo`) VALUES
(2, 'Razer', 'Venda', '20000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `evt_codigo` int(11) NOT NULL,
  `cld_codigo` int(11) NOT NULL,
  `evt_nome` varchar(150) DEFAULT NULL,
  `evt_endereco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`evt_codigo`, `cld_codigo`, `evt_nome`, `evt_endereco`) VALUES
(1, 1, 'Vale Geek', 'Rua Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `fun_codigo` int(11) NOT NULL,
  `fun_nome` varchar(100) DEFAULT NULL,
  `fun_rg` varchar(12) DEFAULT NULL,
  `fun_cpf` varchar(14) DEFAULT NULL,
  `fun_endereco` varchar(150) DEFAULT NULL,
  `fun_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`fun_codigo`, `fun_nome`, `fun_rg`, `fun_cpf`, `fun_endereco`, `fun_nivel`) VALUES
(1, 'Weslei Luiz da Silva', '382607880', '45654059890', 'testeteste', 1),
(2, 'Pedro Antonio', '707070', '123456789', 'Testando', 1),
(3, 'Camila Couto', '808080', '987654321', 'vamo fiii', 1),
(4, 'Camila Couto', '808080', '987654321', 'vamo fiii', 1),
(5, 'teste', '444', '444', 'teste', 1),
(6, 'teste1', '111', '111', 'blablabla', 1),
(7, 'Jacare', '2222', '2222', 'lagoa', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `pcr_codigo` int(11) NOT NULL,
  `pcr_nome` varchar(100) DEFAULT NULL,
  `pcr_empresa` varchar(100) DEFAULT NULL,
  `pcr_cnpj` varchar(18) DEFAULT NULL,
  `pcr_contribuicao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`pcr_codigo`, `pcr_nome`, `pcr_empresa`, `pcr_cnpj`, `pcr_contribuicao`) VALUES
(1, 'Douglas', 'HyperX', '1111111', '50,000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `par_codigo` int(11) NOT NULL,
  `par_nome` varchar(100) DEFAULT NULL,
  `par_rg` varchar(12) DEFAULT NULL,
  `par_cpf` varchar(14) DEFAULT NULL,
  `par_cidade` varchar(32) DEFAULT NULL,
  `par_telefone` varchar(16) DEFAULT NULL,
  `par_email` varchar(50) DEFAULT NULL,
  `evt_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `participantes`
--

INSERT INTO `participantes` (`par_codigo`, `par_nome`, `par_rg`, `par_cpf`, `par_cidade`, `par_telefone`, `par_email`, `evt_codigo`) VALUES
(1, 'Jeremias', '808080', '4040404040', 'Pinda', '1299999999', 'jere_mias@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrocinadores`
--

CREATE TABLE `patrocinadores` (
  `pat_codigo` int(11) NOT NULL,
  `pat_nome` varchar(100) DEFAULT NULL,
  `pat_empresa` varchar(100) DEFAULT NULL,
  `pat_marca` varchar(100) DEFAULT NULL,
  `pat_cnpj` varchar(18) DEFAULT NULL,
  `pat_nivel` varchar(8) DEFAULT NULL,
  `evt_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patrocinadores`
--

INSERT INTO `patrocinadores` (`pat_codigo`, `pat_nome`, `pat_empresa`, `pat_marca`, `pat_cnpj`, `pat_nivel`, `evt_codigo`) VALUES
(1, 'Roberto', 'Aorus', 'Aorus', '80808080', 'ouro', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `set_codigo` int(11) NOT NULL,
  `evt_codigo` int(11) DEFAULT NULL,
  `fun_codigo` int(11) DEFAULT NULL,
  `pcr_codigo` int(11) DEFAULT NULL,
  `are_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`set_codigo`, `evt_codigo`, `fun_codigo`, `pcr_codigo`, `are_codigo`) VALUES
(1, 1, 1, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area_atracao`
--
ALTER TABLE `area_atracao`
  ADD PRIMARY KEY (`are_codigo`);

--
-- Índices para tabela `atracao`
--
ALTER TABLE `atracao`
  ADD PRIMARY KEY (`atr_codigo`);

--
-- Índices para tabela `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`cld_codigo`);

--
-- Índices para tabela `estandes`
--
ALTER TABLE `estandes`
  ADD PRIMARY KEY (`est_codigo`),
  ADD KEY `fun_codigo` (`fun_codigo`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`evt_codigo`),
  ADD KEY `cld_codigo` (`cld_codigo`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`fun_codigo`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`pcr_codigo`);

--
-- Índices para tabela `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`par_codigo`),
  ADD KEY `evt_codigo` (`evt_codigo`);

--
-- Índices para tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD PRIMARY KEY (`pat_codigo`),
  ADD KEY `evt_codigo` (`evt_codigo`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`set_codigo`),
  ADD KEY `evt_codigo` (`evt_codigo`),
  ADD KEY `fun_codigo` (`fun_codigo`),
  ADD KEY `pcr_codigo` (`pcr_codigo`),
  ADD KEY `are_codigo` (`are_codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area_atracao`
--
ALTER TABLE `area_atracao`
  MODIFY `are_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `atracao`
--
ALTER TABLE `atracao`
  MODIFY `atr_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `calendario`
--
ALTER TABLE `calendario`
  MODIFY `cld_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estandes`
--
ALTER TABLE `estandes`
  MODIFY `est_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `evt_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `fun_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `pcr_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `participantes`
--
ALTER TABLE `participantes`
  MODIFY `par_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  MODIFY `pat_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `set_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estandes`
--
ALTER TABLE `estandes`
  ADD CONSTRAINT `fun_codigo` FOREIGN KEY (`fun_codigo`) REFERENCES `funcionarios` (`fun_codigo`);

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`cld_codigo`) REFERENCES `calendario` (`cld_codigo`);

--
-- Limitadores para a tabela `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`evt_codigo`) REFERENCES `evento` (`evt_codigo`);

--
-- Limitadores para a tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD CONSTRAINT `patrocinadores_ibfk_1` FOREIGN KEY (`evt_codigo`) REFERENCES `evento` (`evt_codigo`);

--
-- Limitadores para a tabela `setor`
--
ALTER TABLE `setor`
  ADD CONSTRAINT `setor_ibfk_1` FOREIGN KEY (`evt_codigo`) REFERENCES `evento` (`evt_codigo`),
  ADD CONSTRAINT `setor_ibfk_2` FOREIGN KEY (`fun_codigo`) REFERENCES `funcionarios` (`fun_codigo`),
  ADD CONSTRAINT `setor_ibfk_3` FOREIGN KEY (`pcr_codigo`) REFERENCES `parceiros` (`pcr_codigo`),
  ADD CONSTRAINT `setor_ibfk_4` FOREIGN KEY (`are_codigo`) REFERENCES `area_atracao` (`are_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
