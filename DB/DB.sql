-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2023 às 22:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fichaubs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `senha`) VALUES
(1, 'isabella', '8c74a202e89121eb276146d2aeedc4c1708c49bc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosficha`
--

CREATE TABLE `dadosficha` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomeempresa` longtext NOT NULL,
  `nomecliente` longtext NOT NULL,
  `cargo` longtext NOT NULL,
  `email` longtext NOT NULL,
  `telefonefixo` longtext NOT NULL,
  `whatsapp` longtext NOT NULL,
  `tipoempresa` longtext NOT NULL,
  `outrostipoempresa` longtext NOT NULL,
  `comentario` longtext NOT NULL,
  `clientehot` longtext NOT NULL,
  `tipodocliente` longtext NOT NULL,
  `porteempresa` longtext NOT NULL,
  `maquinasubs` longtext NOT NULL,
  `vendedor` longtext NOT NULL,
  `dataehora` longtext NOT NULL,
  `parceiro` longtext NOT NULL,
  `estadoregiao` longtext NOT NULL,
  `statuscliente` longtext NOT NULL,
  `agendarvisita` longtext DEFAULT NULL,
  `tipocadastro` longtext DEFAULT NULL,
  `qrcodeinfo` longtext DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `agendardemo` longtext DEFAULT NULL,
  `horariovisita` longtext DEFAULT NULL,
  `horariodemo` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `vendedor` longtext DEFAULT NULL,
  `data` longtext DEFAULT NULL,
  `nomeempresa` longtext DEFAULT NULL,
  `nomecliente` longtext DEFAULT NULL,
  `whatsapp` longtext DEFAULT NULL,
  `comentario` longtext DEFAULT NULL,
  `statuscliente` longtext DEFAULT NULL,
  `maquinasubs` longtext DEFAULT NULL,
  `clientehot` longtext DEFAULT NULL,
  `agendarvisita` longtext DEFAULT NULL,
  `estadoregiao` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `online`
--

CREATE TABLE `online` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `tempo` varchar(45) NOT NULL,
  `local` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `online`
--

INSERT INTO `online` (`id`, `ip`, `tempo`, `local`) VALUES
(1752, '::1', '1685477495', '/ubs/gestor/home.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(10) UNSIGNED NOT NULL,
  `qrcodeinfo` longtext NOT NULL,
  `vendedor` longtext NOT NULL,
  `dataehora` longtext NOT NULL,
  `infoextra` longtext DEFAULT NULL,
  `maquinasubs` longtext DEFAULT NULL,
  `clientehot` longtext DEFAULT NULL,
  `agendarvisita` longtext DEFAULT NULL,
  `estadoregiao` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `qrcode`
--

INSERT INTO `qrcode` (`id`, `qrcodeinfo`, `vendedor`, `dataehora`, `infoextra`, `maquinasubs`, `clientehot`, `agendarvisita`, `estadoregiao`) VALUES
(1, 'contato: 11992342344', 'Rene', '14/03/2023 15:45:23', 'Cliente po ksks', 'HRX, APL8000, Outros', NULL, NULL, 'AC'),
(2, 'https://iestgroup.com.br/', 'Rene', '14/03/2023 15:48:54', 'Te amo', 'APL 35s', NULL, NULL, NULL),
(4, 'contato: 11992342344', 'Rene', '14/03/2023 16:02:12', 'Apto, URGENTE, Não apto, Solicitou info x e-mail, Quer agendar visita, NÃO URGENTE', 'APLINK LCX, APL8000, Outros', NULL, NULL, 'Nenhum'),
(5, 'https://iestgroup.com.br/', 'Isabella', '14/03/2023 16:06:27', 'URGENTE, Não apto', 'APL 35s', NULL, NULL, 'AC'),
(6, 'https://qrco.de/bcNAxv', 'Ricardo', '14/03/2023 17:00:21', 'Solicitou info x e-mail', 'APL8000', NULL, NULL, 'AC'),
(7, 'BEGIN:VCARD\nVERSION:3.0\nN:Mauricio Becerra Villanueva ;\nORG:KEYENCE MÉXICO\nEMAIL;TYPE=INTERNET:mbecerra@keyence.com\nURL:www.keyence.com.mx\nTEL;TYPE=CELL: 477-366-1128\nTEL:800 539 3623\nADR:;;Manuel J. Clouthier #304, Fraccionamiento Hispanoamericano, ;León, ;Guanajuato. ;C.P.37125;México\nEND:VCARD', 'Ricardo', '14/03/2023 17:04:02', 'NÃO URGENTE', 'APLINK LCX, HRX, MRX72e', NULL, NULL, 'AC'),
(8, 'https://qrco.de/bcNAxv', 'Isabella', '14/03/2023 17:20:29', 'Apto, Interessado', 'APLINK LCX, APL8000', 'AC', NULL, 'Nenhum'),
(10, 'test este', 'Rene', '15/03/2023 12:33:21', 'Interessado', 'APLINK LCX, APL8000', NULL, NULL, 'Nenhum'),
(13, 'test este', 'Rene', '15/03/2023 13:47:02', 'URGENTE', 'HRX, APL 35s', 'ClienteHot', NULL, 'SP'),
(14, 'https://qrcodefacil.com/', 'Rene', '17/03/2023 15:37:53', 'URGENTE, Quer agendar visita', 'HRX, APL 35s', 'ClienteHot', '2023-03-14', 'SP'),
(15, 'dsf sdfsdf sdfsdfsdf', 'Rene', '17/03/2023 15:41:59', 'URGENTE, Não apto, Quer agendar visita', 'TJX, APL8000, Outros', 'ClienteHot', '2023-03-31', 'GO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dadosficha`
--
ALTER TABLE `dadosficha`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dadosficha`
--
ALTER TABLE `dadosficha`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `online`
--
ALTER TABLE `online`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1753;

--
-- AUTO_INCREMENT de tabela `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
