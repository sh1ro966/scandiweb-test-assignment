-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 21 2022 г., 20:07
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `scandiweb-assigment`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `SKU` varchar(20) NOT NULL,
  `NAME` varchar(30) DEFAULT NULL,
  `PRICE` varchar(10) DEFAULT NULL,
  `INFO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`SKU`, `NAME`, `PRICE`, `INFO`) VALUES
('AAC100124', 'CPU', '3.00 $', 'Dimension: 5 x  5 x 1'),
('AAC200121', 'CPU', '3.00 $', 'Dimension: 5 x  5 x 1'),
('AAC200124', 'CPU', '3.00 $', 'Dimension: 5 x  5 x 1'),
('AAC200134', 'CPU', '3.00 $', 'Dimension: 5 x  5 x 1'),
('AAC210124', 'CPU', '3.00 $', 'Dimension: 5 x  5 x 1'),
('BCD111555', 'Acme DISC', '2.00 $', 'Size: 700 MB'),
('BCD211215', 'Acme DISC', '2.00 $', 'Size: 700 MB'),
('BCD212555', 'Acme DISC', '2.00 $', 'Size: 700 MB'),
('JVC200123', 'Acme DISC', '1.00 $', 'Size: 700 MB');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
