-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лис 23 2017 р., 21:12
-- Версія сервера: 10.0.32-MariaDB-0+deb8u1
-- Версія PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `lukass`
--

-- --------------------------------------------------------

--
-- Структура таблиці `bots`
--

CREATE TABLE `bots` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `provider` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lati` decimal(10,2) NOT NULL,
  `longi` decimal(10,2) NOT NULL,
  `device` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `random` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blocked` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_bes`
--

CREATE TABLE `chat_bes` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `chat_bes`
--

INSERT INTO `chat_bes` (`id`, `msg`, `name`, `id_us`, `pol`) VALUES
(1, 'ghbdtn', 'admin', 1, 'm');

-- --------------------------------------------------------

--
-- Структура таблиці `chat_no`
--

CREATE TABLE `chat_no` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_se`
--

CREATE TABLE `chat_se` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_sex`
--

CREATE TABLE `chat_sex` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_za`
--

CREATE TABLE `chat_za` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_us` int(11) NOT NULL,
  `pol` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `commands`
--

CREATE TABLE `commands` (
  `uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `command` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `arg1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `arg2` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `arg3` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `files`
--

CREATE TABLE `files` (
  `id` int(10) NOT NULL,
  `namefile` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `messages`
--

CREATE TABLE `messages` (
  `uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1800) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `text`, `name`) VALUES
(1, 'Старт 09.11.2017 проект стартовал.', 'ADMIN'),
(5, 'Добавлен прямой эфир с возможностью отправлять,Аудио сообщения и фото.\r\nПлатная услуга.Доработанная система пополнения баланса через QIWI.', 'admin');

-- --------------------------------------------------------

--
-- Структура таблиці `site`
--

CREATE TABLE `site` (
  `copyr` varchar(1024) DEFAULT NULL,
  `title` varchar(1024) DEFAULT NULL,
  `kosh` varchar(13) DEFAULT 'КОШ СОЗДАТЕЛЯ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `smile`
--

CREATE TABLE `smile` (
  `id` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `icon` varchar(244) NOT NULL,
  `papka` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `smile`
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
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `reff` varchar(200) DEFAULT 'http://ruslan41khaven.myjino.ru/#',
  `url1` varchar(200) DEFAULT 'http://androfile.at.ua/',
  `url2` varchar(200) DEFAULT NULL,
  `url3` varchar(200) DEFAULT NULL,
  `url4` varchar(200) DEFAULT NULL,
  `url5` varchar(200) DEFAULT NULL,
  `login` varchar(25) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `name` varchar(15) DEFAULT '10',
  `famil` varchar(15) DEFAULT '3',
  `gorod` varchar(20) DEFAULT '---',
  `infos` varchar(200) DEFAULT 'Новичок',
  `interest` varchar(50) DEFAULT '---',
  `reit` int(11) NOT NULL DEFAULT '0',
  `ru` int(90) NOT NULL,
  `sng` int(90) NOT NULL,
  `strana` varchar(20) DEFAULT '---',
  `admin` int(11) NOT NULL DEFAULT '0',
  `pol` varchar(3) DEFAULT NULL,
  `xstatus` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17') NOT NULL DEFAULT '1',
  `status` varchar(100) DEFAULT ':(',
  `post` int(11) NOT NULL DEFAULT '0',
  `patik` int(11) NOT NULL DEFAULT '13843',
  `izgnali` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  `berds` int(11) NOT NULL DEFAULT '0',
  `egg` text,
  `bablo` int(11) DEFAULT '0',
  `bans` int(10) DEFAULT '0',
  `avatar` text,
  `minimalka` int(11) NOT NULL DEFAULT '500'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `reff`, `url1`, `url2`, `url3`, `url4`, `url5`, `login`, `pass`, `email`, `name`, `famil`, `gorod`, `infos`, `interest`, `reit`, `ru`, `sng`, `strana`, `admin`, `pol`, `xstatus`, `status`, `post`, `patik`, `izgnali`, `time`, `berds`, `egg`, `bablo`, `bans`, `avatar`, `minimalka`) VALUES
(3, 'http://ruslan41khaven.myjino.ru/#', 'http://androfile.at.ua/', NULL, NULL, NULL, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hjf@ya.ru', '10', '3', '---', 'Новичок', '---', 0, 0, 0, '---', 0, NULL, '1', '380979918681', 0, 13843, 0, 0, 0, NULL, 0, 0, NULL, 500),
(4, 'http://ruslan41khaven.myjino.ru/#', 'http://androfile.at.ua/', NULL, NULL, NULL, NULL, 'android', 'c31b32364ce19ca8fcd150a417ecce58', 'andriykutsak.ak@gmail.com', '10', '3', '---', 'Новичок', '---', 0, 0, 0, '---', 0, NULL, '1', 'andr@gmail.com', 0, 13843, 0, 0, 0, NULL, 0, 0, NULL, 500);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `chat_bes`
--
ALTER TABLE `chat_bes`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `chat_no`
--
ALTER TABLE `chat_no`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `chat_se`
--
ALTER TABLE `chat_se`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `chat_sex`
--
ALTER TABLE `chat_sex`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `chat_za`
--
ALTER TABLE `chat_za`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `bots`
--
ALTER TABLE `bots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблиці `chat_bes`
--
ALTER TABLE `chat_bes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `chat_no`
--
ALTER TABLE `chat_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `chat_se`
--
ALTER TABLE `chat_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `chat_sex`
--
ALTER TABLE `chat_sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `chat_za`
--
ALTER TABLE `chat_za`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
