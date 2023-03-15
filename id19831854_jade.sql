-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Nov-2022 às 01:36
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id19831854_jade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `Nome_aluno` varchar(60) NOT NULL,
  `User_aluno` varchar(30) NOT NULL,
  `Senha_aluno` int(30) NOT NULL,
  `Ano` int(4) NOT NULL,
  `Curso` varchar(60) NOT NULL,
  `Turma` varchar(1) NOT NULL,
  `Serie` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Nome_aluno`, `User_aluno`, `Senha_aluno`, `Ano`, `Curso`, `Turma`, `Serie`) VALUES
('Leonardo Fonseca', 'leofo', 1234, 0, '', '', 0),
('Júlia', 'juju', 1230, 0, '', '', 0),
('Roberta Oliveira', 'roberta_oli123', 154, 0, '', '', 0),
('João Carvalho', 'userJoao', 123, 0, '', '', 0),
('Nome Completo', 'Nome', 123456789, 2024, 'Desenvolvimento de Sistema', 'B', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Arquivos`
--

CREATE TABLE `Arquivos` (
  `Nome_arquivos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_sala` int(11) NOT NULL,
  `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Arquivos`
--

INSERT INTO `Arquivos` (`Nome_arquivos`, `id_sala`, `endereco`) VALUES
('Apresentação TCC - Jade.pptx', 11, '../../uploads/Arquivos/Apresentação TCC - Jade.pptx'),
('Banco de dados webhost.png', 11, '../../uploads/Arquivos/Banco de dados webhost.png'),
('Consulta de API.txt', 11, '../../uploads/Arquivos/Consulta de API.txt'),
('CURSOS SISU.pdf', 11, '../../uploads/Arquivos/CURSOS SISU.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chave`
--

CREATE TABLE `chave` (
  `id_chave` int(11) NOT NULL,
  `Num_chave` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chave`
--

INSERT INTO `chave` (`id_chave`, `Num_chave`) VALUES
(1, '159');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `Nome_conteudo` varchar(60) NOT NULL,
  `Nome_disciplina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `IdMsg` int(11) NOT NULL,
  `Msg` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `User` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`IdMsg`, `Msg`, `User`, `id_sala`) VALUES
(5, 'envia outrta mensagem agfora tecldo ruim', '', 0),
(7, 'tentando dnv mensagem epica 2', '', 0),
(8, 'mensagem da andressa :P', '', 0),
(13, 'enviando uma mensagem', '', 0),
(15, 'lknfdln', '', 0),
(16, 'fhgfohifghorhio', '', 0),
(17, 'fhgfohifghorhio', '', 0),
(18, 'barbara atrasou', '', 0),
(19, 'barbara atrasou 2', '', 0),
(20, 'gregrw', '', 0),
(21, 'gregrw', '', 0),
(22, 'gregrwffeihp23pihdnd31nçi', '', 0),
(23, 'dfkjbDFHJGVFDKHRF', '', 0),
(24, 'dfkjbDFHJGVFDKHRF', '', 0),
(25, 'ESCREWVENDO UMA MENSAGEM PRAN MINHGA AJMIGS BARABARA', '', 0),
(26, 'SALVE SALVE FAMILIA', '', 0),
(27, 'SALVE SALVE FAMILIA', '', 0),
(28, 'SALVE SALVE FAMILIA', '', 0),
(29, 'SALVE SALVE FAMILIA', '', 0),
(30, 'lsfdknvdsjvpvsf', '', 0),
(31, 'mensagem do dia', '', 0),
(32, 'mensagem do dia', '', 0),
(33, 'Oi', '', 0),
(34, 'Oi', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `Nome_professor` varchar(60) NOT NULL,
  `NumMatricula_professor` int(15) NOT NULL,
  `User_professor` varchar(30) NOT NULL,
  `Senha_professor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`Nome_professor`, `NumMatricula_professor`, `Disciplina_professor`, `Disciplina2_professor`, `Disciplina3_professor`, `User_professor`, `Senha_professor`) VALUES
('Leonardo Fonseca', 4521, 'leofo@gmail.com', '12345'),
('Estevam Ferri', 12, 'estevinferrin', '456'),
('Neymar Siqueira Dellareti', 495867, 'DellaretiNeymas', '456987');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(11) NOT NULL,
  `Nome_sala` varchar(60) NOT NULL,
  `Curso_sala` varchar(35) NOT NULL,
  `Serie_sala` int(1) NOT NULL,
  `Turma_sala` varchar(3) NOT NULL,
  `Ano_sala` int(4) NOT NULL,
  `Nome_professor` varchar(60) NOT NULL,
  `Cor_sala` varchar(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`id_sala`, `Nome_sala`, `Curso_sala`, `Serie_sala`, `Turma_sala`, `Ano_sala`, `Nome_professor`, `Cor_sala`) VALUES
(11, 'Sala Teste', 'Desenvolvimento de Sistema', 3, 'A', 2022, 'Leonardo Fonseca', ''),
(12, 'Teste', 'Desenvolvimento de Sistema', 1, 'B', 2022, 'Leonardo Fonseca', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`Nome_aluno`);

--
-- Índices para tabela `Arquivos`
--
ALTER TABLE `Arquivos`
  ADD PRIMARY KEY (`Nome_arquivos`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Índices para tabela `chave`
--
ALTER TABLE `chave`
  ADD PRIMARY KEY (`id_chave`);

--
-- Índices para tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`Nome_conteudo`),
  ADD KEY `id_disciplina` (`Nome_disciplina`);

--
-- Índices para tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`IdMsg`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Nome_professor`);

--
-- Índices para tabela `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chave`
--
ALTER TABLE `chave`
  MODIFY `id_chave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `IdMsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
