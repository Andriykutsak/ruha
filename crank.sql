-- phpMyAdmin SQL Dump
-- version 4.3.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 20 2015 г., 12:14
-- Версия сервера: 5.5.41-37.0-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cra679_zz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat_bes`
--

CREATE TABLE IF NOT EXISTS `chat_bes` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `chat_no`
--

CREATE TABLE IF NOT EXISTS `chat_no` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `chat_se`
--

CREATE TABLE IF NOT EXISTS `chat_se` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `chat_sex`
--

CREATE TABLE IF NOT EXISTS `chat_sex` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `chat_za`
--

CREATE TABLE IF NOT EXISTS `chat_za` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `text`, `name`) VALUES
(1, 'PtCMS ver 0.3 успешно установлен!', 'ADMIN');

-- --------------------------------------------------------

--
-- Структура таблицы `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `copyr` varchar(1024) DEFAULT NULL,
  `title` varchar(1024) DEFAULT NULL,
  `kosh` varchar(13) DEFAULT 'КОШ СОЗДАТЕЛЯ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `site`
--

INSERT INTO `site` (`copyr`, `title`, `kosh`) VALUES
('(c) Crank 2o15', 'PatrickCMS', 'КОШ СОЗДАТЕЛЯ');

-- --------------------------------------------------------

--
-- Структура таблицы `smile`
--

CREATE TABLE IF NOT EXISTS `smile` (
  `id` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `icon` varchar(244) NOT NULL,
  `papka` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `smile`
--

INSERT INTO `smile` (`id`, `name`, `icon`, `papka`) VALUES
(1, ':)', '1.gif', '1'),
(2, ':(', '2.gif', '2'),
(3, ';(', '3.gif', '3'),
(4, ':D', '4.gif', '4'),
(5, ':P', '5.gif', '5'),
(6, ':bad:', '6.gif', '6'),
(7, '8)', '7.gif', '7'),
(8, ':happy:', '8.gif', '8'),
(9, '%)', '9.gif', '9'),
(10, '%P', '10.gif', '10'),
(11, ':music:', '11.gif', '11'),
(12, ':@', '12.gif', '12'),
(13, ':crazy:', '13.gif', '13'),
(14, 'xD', '14.gif', '14'),
(15, ':diablo:', '15.gif', '15'),
(16, ':lol:', '16.gif', '16'),
(17, ':rofl:', '17.gif', '17'),
(18, ':blush:', '18.gif', '18'),
(19, ':bye:', '19.gif', '19'),
(20, ':hi:', '20.gif', '20'),
(21, ':dance:', '21.gif', '21'),
(22, ':dash:', '22.gif', '22'),
(23, ':beer:', '23.gif', '23'),
(24, ':gamer:', '24.gif', '24'),
(25, ':angel:', '25.gif', '25'),
(26, ':heart:', '26.gif', '26'),
(27, ':good:', '27.gif', '27'),
(28, ':hang:', '28.gif', '28'),
(29, 'ireful:', '29.gif', '29'),
(30, ':mad:', '30.gif', '30'),
(31, ':mail:', '31.gif', '31'),
(32, ':love:', '32.gif', '32'),
(33, ':mocking:', '33.gif', '33'),
(34, ':no:', '34.gif', '34'),
(35, ':pardon:', '35.gif', '35'),
(36, ':head:', '36.gif', '36'),
(37, 'o_O', '37.gif', '37'),
(38, ':sorry:', '38.gif', '38'),
(39, ':unknown:', '39.gif', '39'),
(40, ':yes:', '40.gif', '40'),
(41, ':kiss:', '41.gif', '41'),
(42, ':kiss2:', '42.gif', '42');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `login` varchar(25) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `name` varchar(15) DEFAULT '---',
  `famil` varchar(15) DEFAULT '---',
  `gorod` varchar(20) DEFAULT '---',
  `infos` varchar(200) DEFAULT '---',
  `interest` varchar(50) DEFAULT '---',
  `reit` int(11) NOT NULL DEFAULT '0',
  `strana` varchar(20) DEFAULT '---',
  `admin` int(11) NOT NULL DEFAULT '0',
  `pol` varchar(3) DEFAULT NULL,
  `xstatus` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17') NOT NULL DEFAULT '1',
  `status` varchar(100) DEFAULT ':(',
  `post` int(11) NOT NULL DEFAULT '0',
  `patik` int(11) NOT NULL DEFAULT '0',
  `izgnali` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  `berds` int(11) NOT NULL DEFAULT '0',
  `egg` text,
  `bablo` int(11) DEFAULT '0',
  `bans` int(10) DEFAULT '0',
  `avatar` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat_bes`
--
ALTER TABLE `chat_bes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat_no`
--
ALTER TABLE `chat_no`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat_se`
--
ALTER TABLE `chat_se`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat_sex`
--
ALTER TABLE `chat_sex`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat_za`
--
ALTER TABLE `chat_za`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat_bes`
--
ALTER TABLE `chat_bes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `chat_no`
--
ALTER TABLE `chat_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `chat_se`
--
ALTER TABLE `chat_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `chat_sex`
--
ALTER TABLE `chat_sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `chat_za`
--
ALTER TABLE `chat_za`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
