-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2024 às 13:58
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `posts_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `data_postagem` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `texto`, `foto`, `video`, `data_postagem`) VALUES
(1, 'sadsada', '', '', '2024-10-11 11:18:45'),
(2, 'vsf zubeldia', '', '', '2024-10-11 11:20:08'),
(3, 'asdfsahafoshfo', '', '', '2024-10-11 11:20:37'),
(4, 'sdsa', '', '', '2024-10-11 11:21:58'),
(5, 'dasdsadasdasda', '', '', '2024-10-11 11:23:49'),
(6, 'sauafdusa', '', '', '2024-10-11 11:25:09'),
(7, 'bdbfbcv', '', '', '2024-10-11 11:25:25'),
(8, 'to mt tridt hj', '', '', '2024-10-11 11:26:12'),
(9, 'fsafds', 'spfc.jpg', NULL, '2024-10-11 11:39:24'),
(10, 'fsafds', 'spfc.jpg', NULL, '2024-10-11 11:41:12'),
(11, 'spfc', 'spfc.jpg', NULL, '2024-10-11 11:41:34'),
(12, 'fsadsadsa', 'spfc.jpg', NULL, '2024-10-11 11:46:35'),
(13, 'aqui é eu desgraça', 'spfc.jpg', NULL, '2024-10-11 11:47:53'),
(14, 'playboi carti', NULL, '_2024_ prod. ojivolta, earlonthebeat, and Kanye West.mp4', '2024-10-11 11:51:53'),
(15, 'Q todos os ADM\'S VÃO TUDO TOMAR NO CU BANDO DE FILHO DA PUTA, DA UMA MAMADA NOS NEGUINHOS E CALEM A POHA DA BOCA , VCS SO FALAM BOSTA , ABRE A BOCA E VEM ESSE BAFO DE PIKA, VAO TOMAR NO CU', 'cu.jpg', '_2024_ prod. ojivolta, earlonthebeat, and Kanye West.mp4', '2024-10-11 11:56:35');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
