-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2020 às 12:36
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_animal`
--

CREATE TABLE `tbl_animal` (
  `TBL_CODCLI` int(6) NOT NULL,
  `TBL_NANIMAL` varchar(20) NOT NULL,
  `TBL_RACA` int(6) NOT NULL,
  `TBL_PORTE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_animal`
--

INSERT INTO `tbl_animal` (`TBL_CODCLI`, `TBL_NANIMAL`, `TBL_RACA`, `TBL_PORTE`) VALUES
(0, 'Pequeno', 0, ''),
(77, 'Pequeno', 0, 'Medio'),
(77, 'Pequeno', 1, 'Medio'),
(77, 'Chiquita', 1, 'Medio'),
(77, 'Passarinho', 0, 'Pequeno'),
(81, 'Pequeno', 0, 'Pequeno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `TBL_CODCLI` int(9) NOT NULL,
  `TBL_NCLI` varchar(90) NOT NULL,
  `TBL_TELCLI` varchar(14) NOT NULL,
  `TBL_CELCLI` varchar(15) NOT NULL,
  `TBL_ENDCLI` varchar(90) NOT NULL,
  `TBL_BAIRRO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`TBL_CODCLI`, `TBL_NCLI`, `TBL_TELCLI`, `TBL_CELCLI`, `TBL_ENDCLI`, `TBL_BAIRRO`) VALUES
(1, 'RODRIGO CESAR GIESAU', '4738010999', '47999480908', 'ALBERTO BORNSCHEIN, 128 BAIRRO GLÃ“RIA', ''),
(2, 'RODRIGO CESAR GIESAU', '4738010999', '47999480908', 'ALBERTO BORNSCHEIN, 128 BAIRRO GLÃ“RIA', ''),
(3, 'RODRIGO CESAR GIESAU', '4738010999', '47999480908', 'ALBERTO BORNSCHEIN, 128 BAIRRO GLÃ“RIA', ''),
(4, 'ANA PAULA ARNDT', '4738010999', '47999317704', 'MARCOS JOÃƒO SERAFIM, 308 VILA NOVA', ''),
(43, 'MARIA', '4738010999', '(47) 99948-09', 'AV PEDRO CAETANO RODRIGUES 5443 ,  - Bairro: DI AUGUSTO BORTOLI RAZIA - RONDONOPOLIS / MT', ''),
(45, 'Metas Marcio', '4738010999', '(47) 99948-09', 'R JOCA MAGALHAES 1061 E 1079 ANEXO ,  - Bairro: NOSSA SENHORA DA PENHA - SERRA TALHADA / P', ''),
(46, 'Metas Marcio', '4738010999', '(47) 99948-09', 'R JOCA MAGALHAES 1061 E 1079 ANEXO ,  - Bairro: NOSSA SENHORA DA PENHA - SERRA TALHADA / P', ''),
(47, 'Metas Marcio', '4738010999', '(47) 99948-09', 'R JOCA MAGALHAES 1061 E 1079 ANEXO ,  - Bairro: NOSSA SENHORA DA PENHA - SERRA TALHADA / P', ''),
(62, 'MARIA DE FATIMA', '4738010999', '(47) 99948-09', 'MARCOS JOÃƒO SERAFIM, 308 VILA NOVA', ''),
(63, 'Metas Adalberto', '4738010999', '(47) 99948-09', 'Alberto Bornschein', ''),
(64, 'ZEZE DOS PETS', '999999999', '99999999', 'RUA DO AU AU MIAU', ''),
(65, 'Teste celular', '99999999', '999480008', 'Gagagagssga', ''),
(75, 'Rodrigo Cesar', '4738010999', '47999480908', 'Rua alberto Bornschein', ''),
(76, 'Biju maria', '(47) 9999-9999', '(47) 99999-9999', 'Rua Marcos JoÃ£o Serafim 308 Vila Nova', ''),
(77, 'Pequeno', '(47) 3801-0999', '(47) 99948-0908', 'Alberto Bornchein, 128', 'Gloria'),
(78, 'TESTE', '(44) 4444-4444', '(44) 44444-4444', 'TESTE', 'TESTE'),
(79, 'TESTE', '(45) 4545-4545', '(45) 45454-5454', 'TESTE', 'TESTE'),
(81, 'Rodrigo TESTE', '(47) 3801-0999', '(47) 99948-0908', 'Alberto Bornschein, 128', 'Gloria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_user`
--

CREATE TABLE `tbl_user` (
  `TBL_IDUSER` int(6) NOT NULL,
  `TBL_LOGIN` varchar(30) NOT NULL,
  `TBL_PWD` int(6) NOT NULL,
  `TBL_NOME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_user`
--

INSERT INTO `tbl_user` (`TBL_IDUSER`, `TBL_LOGIN`, `TBL_PWD`, `TBL_NOME`) VALUES
(2, 'Admin', 123456, 'Administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`TBL_CODCLI`);

--
-- Índices para tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`TBL_IDUSER`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `TBL_CODCLI` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `TBL_IDUSER` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
