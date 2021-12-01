-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2021 às 20:20
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogoperguntas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL,
  `resposta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `resposta`) VALUES
(1, 'Quem descobriu o Brasil?', 'Pedro Álvares Cabral'),
(2, 'Qual é a cor do céu?', 'Azul'),
(3, 'Quem inventou a lâmpada?', 'Thomas Edison'),
(4, 'Quanto tempo a Terra demora para dar uma volta completa em torno dela mesma?', '24 horas'),
(5, 'Quais são as fases da Lua? (na ordem)', 'Nova, crescente, cheia e minguante'),
(6, 'Qual o maior planeta do sistema solar?', 'Júpiter'),
(7, 'Qual o planeta mais próximo do Sol?', 'Mercúrio'),
(8, 'Qual o valor de PI (π)?  Exemplo (0,00)', '3,14'),
(9, 'Em que ano o Brasil foi descoberto?', '1500'),
(10, 'Qual o continente da Itália?', 'Europa'),
(11, 'Somos como somos por causa dos(as):     A- Cromossomos     B- Célula     C-DNA    D-Organelas   ( Responda Apenas com a palavra) ', 'Cromossomos'),
(12, 'Qual é o plural de anão?', 'Anões'),
(13, 'No filme: \"Branca de neve e os 7 anões\", qual o nome do anão que não fala?', 'Dunga'),
(14, 'Qual é o nome da princesa que lutou pela China?', 'Mulan'),
(15, 'Qual é o plural da palavra \"qualquer\"?', 'Quaisquer');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
