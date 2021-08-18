-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jul-2020 às 14:19
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_alphasphere`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `about`
--

INSERT INTO `about` (`id`, `title`, `content`) VALUES
(1, 'About Us:', 'We\'re a small team of eSports lover which made this website to be a fun and interecting website that pulls lovers of League of Legends to connect to their favorite teams easier ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `street` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contact`
--

INSERT INTO `contact` (`id`, `street`, `phone`, `email`) VALUES
(0, '(531) 500-2994 · 1226 P St Ste 102 Lincoln, NE 68508', '961685401', 'alphasphere@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gallery`
--

INSERT INTO `gallery` (`id`, `photos`) VALUES
(0, 'photos1.jpg'),
(1, 'photos2.jpg'),
(2, 'photos3.jpg'),
(3, 'photos4.jpg'),
(4, 'photos5.jpg'),
(5, 'photos6.jpg'),
(6, 'photos7.jpg'),
(7, 'photos8.jpg'),
(8, 'photos9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `learn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`, `img`, `learn`) VALUES
(1, 'TL VS C9 - WHOSE THE BEST MIDLANER NA', 'After Alot of fights between players Nisqy from C9 and the old C9 mid laner which is fighting against his team Jensen which was considered from the beggining one of the best Mid Laners on the world go head to head in Week 3 of LCS', '23/06/2020', 'news1.jpg', 'https://www.youtube.com/watch?v=KEB1lVodjfc&t=1s'),
(2, 'MAD Lions\' Head Coach on G2 and Fnatic: \"We Have No Reason to Fear Them\"', 'MAD Lions came roaring out of the gate this Summer Season, clawing their way to the number one spot in the LEC rankings with a streak of wins that has taken even their coach by surprise.\r\n\r\n“I think a lot of other teams are still finding their feet\"', '01/07/2020', 'news2.jpg', 'https://watch.lolesports.com/article/mad-lions\'-head-coach-on-g2-and-fnatic-we-have-no-reason-to-fear-them/blta347c03a9e6ab170'),
(3, 'A New Generation: The Young Players Taking Rogue and MAD Lions to New Heights', 'The European League of Legends scene has an extensive record of developing exciting young prospects who don’t take long to make an impression on the global stage. From Misfits Gaming pushing the limits of South Korea’s SK Telecom T1 in 2017 ', '01/07/2020', 'news3.jpg', 'https://watch.lolesports.com/article/a-new-generation-the-young-players-taking-rogue-and-mad-lions-to-new-heights/blt9eb6d44ef43a78c6'),
(4, 'Five of the Best Champion Picks and Plays from Week 3 of the LEC Summer Season', 'Take a look at how the meta is evolving with this week’s top picks.\r\nWe’ve had another explosive weekend in the League of Legends European Championship, filled with some of the most exciting games we’ve seen to date.', '29/06/2020', 'news4.png', 'https://watch.lolesports.com/article/five-of-the-best-champion-picks-and-plays-from-week-3-of-the-lec-summer-season/blt36734b28690368be'),
(5, 'BT Excel’s Kasing: “I Want to Get Back Into the LEC, Whether It’s With Excel or Another Team.”', 'Raymond \"Kasing\" Tsang is one of the most experienced players you will find in the Northern League of Legends Championship (NLC). After years at the highest level in Europe, and even a very brief stint over in North America with Team SoloMid, the Bri', '26/06/2020', 'news5.jpg', 'https://watch.lolesports.com/article/bt-excel%E2%80%99s-kasing-%E2%80%9Ci-want-to-get-back-into-the-lec,-whether-it%E2%80%99s-with-excel-or-another-team.%E2%80%9D/bltdafae46597ea0bbd'),
(6, 'Fnatic vs G2 Preview: Europe\'s Greatest Rivalry Gets Personal', 'There have been 15 seasons of professional European League of Legends. Between them, Fnatic and G2 Esports have won 14, seven apiece. If you’re looking for the best showdown in competitive League of Legends, you’ll find it this Saturday when these tw', '25/06/2020', 'news6.jpg', 'https://watch.lolesports.com/article/fnatic-vs-g2-preview-europe\'s-greatest-rivalry-gets-personal/blt828ef568b45d77a3'),
(7, 'Watch Games, Get Loot: How to Get Started with Drops', 'Watching League of Legends esports is about to get even more exciting. In the coming weeks, you can start earning exclusive drops just by tuning in, with rewards such as champions, skins, and Blue Essence all up for grabs.', '23/06/2020', 'news7.png', 'https://watch.lolesports.com/article/watch-games,-get-loot-how-to-get-started-with-drops/blt072d68c8d76ec857'),
(8, 'Celebrate the 2020 Spring Split Champions with Conqueror Nautilus', 'We\'ll release the Conqueror Nautilus skin as a way for fans to celebrate the 2020 LoL Esports Spring Split Champions. Historically, the Conqueror skin line celebrated the Mid-Season Invitational and all the players who qualified for one of the year\'s', '22/06/2020', 'news8.jpg', 'https://watch.lolesports.com/article/celebrate-the-2020-spring-split-champions-with-conqueror-nautilus/bltb036ce48d3e89d07'),
(9, 'European Regional Leagues: How the Prime League Offers a Path to Pro Status for More Than 700 Teams\r\n', 'With the road to European Masters Summer 2020 right ahead of us, the path for aspiring competitive League of Legends players to make it onto one of the biggest stages in Europe has never been clearer across the European Regional Leagues. And that’s v', '19/06/2020', 'news9.jpg', 'https://watch.lolesports.com/article/european-regional-leagues-how-the-prime-league-offers-a-path-to-pro-status-for-more-than-700-teams/blt5a7cd8851e8d3980');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
