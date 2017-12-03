-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Хост: 10.0.0.134:3306
-- Время создания: Дек 01 2017 г., 13:21
-- Версия сервера: 10.1.29-MariaDB
-- Версия PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `j689232`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url1` varchar(200) DEFAULT 'http://androfile.at.ua/',
  `url2` varchar(200) DEFAULT NULL,
  `url3` varchar(200) DEFAULT NULL,
  `url4` varchar(200) DEFAULT NULL,
  `url5` varchar(200) DEFAULT NULL,
  `login` varchar(25) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `reit` int(11) NOT NULL DEFAULT '0',
  `ru` int(90) NOT NULL,
  `sng` int(90) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `status` varchar(100) DEFAULT ':(',
  `bablo` int(11) DEFAULT '0',
  `bans` int(10) DEFAULT '0',
  `minimalka` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `url1`, `url2`, `url3`, `url4`, `url5`, `login`, `pass`, `email`, `reit`, `ru`, `sng`, `admin`, `status`, `bablo`, `bans`, `minimalka`) VALUES
(5, 'http://androfile.at.ua/', NULL, NULL, NULL, NULL, 'buhoy', '4e1ffaeb1eef97299fe49bbe130ef64b', 'vk.logs@mail.ru', 0, 0, 0, 0, '380685065727', 0, 0, 500),
(6, 'http://androfile.at.ua/', NULL, NULL, NULL, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'vk.logs@mail.ru', 0, 0, 0, 0, 'admin', 0, 0, 500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
