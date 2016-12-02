-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 02 2016 г., 19:23
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `students`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gr`
--

CREATE TABLE IF NOT EXISTS `gr` (
  `id_gr` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_gr`),
  KEY `id_gr` (`id_gr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=900 ;

--
-- Дамп данных таблицы `gr`
--

INSERT INTO `gr` (`id_gr`) VALUES
(22),
(899);

-- --------------------------------------------------------

--
-- Структура таблицы `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `id_stud` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Surname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Second_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_gr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_stud`),
  KEY `id_gr` (`id_gr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=43 ;

--
-- Дамп данных таблицы `stud`
--

INSERT INTO `stud` (`id_stud`, `Name`, `Surname`, `Second_name`, `id_gr`) VALUES
(42, 'DD', 'XX', 'ZZ', 22);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `stud`
--
ALTER TABLE `stud`
  ADD CONSTRAINT `stud_ibfk_1` FOREIGN KEY (`id_gr`) REFERENCES `gr` (`id_gr`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
