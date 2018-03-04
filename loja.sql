-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Mar-2018 às 01:47
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(4) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `email`, `senha`, `cpf`, `nome`, `nascimento`, `sexo`, `telefone`) VALUES
(1, 'jucadasilva@gmail.com', '15454', '1567894563', 'Juca da Silva', '1968-09-25', 'masculino', '21 48639455'),
(2, 'jucadasilva@gmail.com', '12345', '12345678910', 'Samsung', '1962-02-15', 'masculino', '21 59842654'),
(3, 'germano@gmail.com', '123456', '12345678912', 'Germano', '1993-02-25', 'masculino', '21 58953658');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_funcionario`
--

CREATE TABLE `cad_funcionario` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(255) COLLATE utf8_bin NOT NULL,
  `nascimento` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cad_funcionario`
--

INSERT INTO `cad_funcionario` (`id`, `nome`, `email`, `senha`, `sexo`, `cpf`, `nascimento`, `telefone`) VALUES
(1, 'Germano', 'germano@gmail.com', '123', 'masculino', '12345678911', '1900-02-28', '2124252628'),
(2, 'aa', 'aa@gmaill.com', '2113', 'masculino', '123456789098', '1992-05-31', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(4) NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(500) COLLATE utf8_bin NOT NULL,
  `preco` int(4) NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `nome`, `descricao`, `preco`, `foto`) VALUES
(2, 'celulares', 'Samsung', '', 900, 'imagens/celular1.jpg'),
(22, 'celulares', 'LG K10', 'Smartphone LG K10 Novo 32GB Dourado Dual Chip 4G - CÃ¢m. 13MP + Selfie 5MP Tela 5.3â€ Proc. Octa Core O LG K10 novo tem 32GB* de memÃ³ria interna. NÃ£o apague suas fotos, nem as suas mÃºsicas favoritas por falta de espaÃ§o. Com 32GB de memÃ³ria interna* ', 705, 'imagens/celular2.jpg'),
(23, 'eletrodomesticos', 'Geladeira/Refrigerador Electrolux Frost Free Inox - Duplex 380L Painel Touch', 'Refrigerador duplex com capacidade para 386 litros. Possui dispenser de Ã¡gua externo para obter facilmente Ã¡gua direto do refrigerador. As prateleiras sÃ£o 100% removÃ­veis com maior limpeza e otimizaÃ§Ã£o de espaÃ§o, por serem de vidro sÃ£o mais resist', 2137, 'imagens/eletrodomestico1.jpg'),
(24, 'consoles', 'Playstation 4 500GB Sony', 'Jogos incrÃ­veis. Entretenimento sem fim. Mais leve e mais fino, o sistema PlayStation 4 tem disco rÃ­gido de 500 GB para tudo o que hÃ¡ de melhor em jogos, mÃºsicas e muito mais. O pacote PlayStation Hits oferece jogos incrÃ­veis que proporcionarÃ£o entr', 1300, 'imagens/games1.jpg'),
(25, 'informatica', 'Mouse Sem Fio Ã“ptico 1000dpi Dell', 'O mouse Ã³ptico wireless WM126 da Dell oferece performance wireless para uso diÃ¡rio com excelente duraÃ§Ã£o da bateria. Ele foi projetado para criar um espaÃ§o de trabalho organizado com uma conexÃ£o RF wireless e plug-and-play confiÃ¡vel.', 34, 'imagens/informatica1.jpg'),
(26, 'livros', 'Contabilidade Geral - SÃ©rie Em Foco', 'O livro Contabilidade Geral da SÃ©rie em Foco (antiga SÃ©rie FÃ¡cil) foi elaborado para atender ao conteÃºdo programÃ¡tico tanto dos cursos de bacharel em CiÃªncias ContÃ¡beis como de outros cursos para os quais sejam exigidos do estudante conhecimentos d', 48, 'imagens/livro1.jpg'),
(27, 'moveis', 'Estante para TV 60\" Italian', 'A Estante para TV 60Â’Â’ Italian da DJ MÃ³veis tem seu toque especial com as luminÃ¡rias de LED Bivolt, que ficam nos cantos superiores da estante, destacando os objetos de decoraÃ§Ã£o. Sua estrutura Ã© produzida em MDP trazendo maior durabilidade e quali', 643, 'imagens/moveis1.jpg'),
(28, 'celulares', 'Motorola Moto G5s ', 'Estilo ou eficiÃªncia? Fique com os dois. A estrutura Ãºnica em metal garante um acabamento premium ao seu smartphone, deixando ele mais bonito e resistente. Fique longe do carregador. A bateria de 3000mAh tem capacidade suficiente para o dia todo. Na hor', 836, 'imagens/celular3.jpg'),
(29, 'eletrodomesticos', 'Lava e Seca LG 8,5kg', 'A lava e seca WD9WE6A da LG tem capacidade de 8,5 kg e combina 6 movimentos de lavagem com eficiÃªncia e economia. Para grandes quantidades de roupa vocÃª pode usar o sistema de agitaÃ§Ã£o, oscilaÃ§Ã£o para roupas delicadas, fricÃ§Ã£o dissolve as manchas,', 2042, 'imagens/eletrodomestico2.jpg'),
(30, 'consoles', 'Controle para PS4 Sem Fio', 'RevolucionÃ¡rio, intuitivo e preciso: o controle sem fio DualShockÂ®4 para o sistema PlayStationÂ®4 define esta geraÃ§Ã£o de jogos, combinando recursos revolucionÃ¡rios e conforto com controles precisos e intuitivos', 430, 'imagens/games2.jpg'),
(31, 'informatica', 'Teclado Gamer MultimÃ­dia USB', 'Teclado Gamer Profissional Warrior da Multilaser com funÃ§Ã£o Anti-Ghosting em atÃ© 32 teclas. Com a funÃ§Ã£o Macro, 7 cores de LED e fabricaÃ§Ã£o com Double injection(dupla iluminaÃ§Ã£o e grande durabilidade). O Teclado Gamer Profissional Warrior lhe dar', 80, 'imagens/informatica2.jpg'),
(32, 'livros', 'A Sutil Arte De Ligar o Foda-Se', 'Chega de tentar buscar um sucesso que sÃ³ existe na sua cabeÃ§a. Chega de se torturar para pensar positivo enquanto sua vida vai ladeira abaixo. Chega de se sentir inferior por nÃ£o ver o lado bom de estar no fundo do poÃ§o.', 23, 'imagens/livro2.jpg'),
(33, 'moveis', 'Rack pra TV atÃ© 47â€', 'O combo da linha Inovare da MultimÃ³veis Ã© composto por uma rack, um painel com espaÃ§o para tv atÃ© 47\" e uma prÃ¡tica mesa de centro. Feito 100% MDP 15mm, tem acabamento com pintura UV texturizado na cor duna acetinado. O painel conta com espaÃ§amento ', 220, 'imagens/moveis2.jpg'),
(34, 'eletrodomesticos', 'Micro-ondas Panasonic', 'Micro-ondas Consul Espelhado 20 litros. Compacto e moderno, ele possui o Menu Uso FÃ¡cil e receitas prÃ©-programadas que descomplicam o seu dia-a-dia. Descongelar a carne do almoÃ§o, preparar o lanche das crianÃ§as, aquecer o jantar. Com ele vocÃª faz tud', 350, 'imagens/eletrodomestico3.jpg'),
(35, 'consoles', 'Battlefield 1', 'Presencie a guerra total somente em Battlefield 1. Lute em batalhas Ã©picas, de combates urbanos em uma cidade francesa sitiada atÃ© as fortalezas altamente protegidas nos Alpes italianos, ou combates frenÃ©ticos nos desertos das ArÃ¡bias. Descubra um mun', 150, 'imagens/games3.jpg'),
(36, 'informatica', 'Notebook samsung essentials ', 'O Notebook Samsung Ã© o modelo ideal para vocÃª que procura mais desempenho. Com um design moderno e sofisticado e com autonomia aproximada de atÃ© 8 horas de bateria, este modelo NP370E4K conta com um super processador IntelÂ® CeleronÂ® 3205U, 1.5 GHz, 2MB L3 Cache, memÃ³ria de 4GB e HD de 500 GB.', 1450, 'imagens/informatica3.jpg'),
(37, 'livros', 'Livro - MÃ­ni AurÃ©lio', 'O Mini AurÃ©lio Ã© perfeito para acompanhar o dia a dia dos alunos.', 31, 'imagens/livro3.jpg'),
(38, 'moveis', 'Guarda-roupa Casal', 'Um quarto moderno e aconchegante precisarÃ¡ de um mÃ³vel diferenciado como este Guarda-Roupa Rusti Araplac, desenvolvido para oferecer total conforto e comodidade para vocÃª e sua famÃ­lia. Ele Ã© composto por dez portas de bater, puxadores de PVC prata, corrediÃ§as metÃ¡licas, bastÃµes madeira revestidos em PVC, gavetas externas e seis unidades de pÃ©s de PVC prata. Seu material Ã© ecologicamente correto que confere a boa resistÃªncia e durabilidade Ã  peÃ§a.', 310, 'imagens/moveis3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_funcionario`
--
ALTER TABLE `cad_funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cad_funcionario`
--
ALTER TABLE `cad_funcionario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
