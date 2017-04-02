-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2017 г., 13:44
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `prakt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `variant3`
--

CREATE TABLE `variant3` (
  `id_reg` int(4) NOT NULL,
  `name` text NOT NULL,
  `fam` text NOT NULL,
  `tname` text NOT NULL,
  `email` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `zaved` text NOT NULL,
  `kurs` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `variant3`
--

INSERT INTO `variant3` (`id_reg`, `name`, `fam`, `tname`, `email`, `login`, `password`, `zaved`, `kurs`) VALUES
(1, 'Залихат', 'Уфюфыч', 'УмюйБатылов', 'zalihat666@yandex.ru', 'zalihat', 'qweASD123!@#', 'РКСИ', 3),
(2, 'Вячеслав', 'Дуднаков', 'Витальевич', 'metalmelkiy@gmail.com', 'melkiy', 'qweASD123!@#', 'РКСИ', 3),
(3, 'Июшмиаль', 'Кукукцапль', 'Персастряпыч', 'iyushmial666@yandex.ru', 'iyushmial', 'qweASD123!@#', 'РКСИ', 1),
(4, 'Кирилл', 'Дуднаков', 'Витальевич', 'isdgo@mail.ru', 'isdgo', 'qweASD123!@#', 'ЮФУ', 1),
(5, 'Денис', 'Северинов', 'Алексеевич', 'den.sever@mail.ru', 'den.sever', 'QWEasd123!@#', 'РКСИ', 1),
(6, 'Андрей', 'Цветов', 'Алексеевич', 'cvet15@aaaa', 'cvet', 'qweASD123!@#', 'РКСИ', 4),
(7, 'Максим', 'Антонов', 'Михайлович', 'maxim@gmail.com', 'maxim', 'asdQWE123!@#', 'РКСИ', 5),
(8, 'Барабанище', 'Барабанов', 'Барабаныч', 'kopebara@gmail.com', 'kopebara', 'asdQWE123!@#', 'РКСИ', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `variant3`
--
ALTER TABLE `variant3`
  ADD PRIMARY KEY (`id_reg`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `variant3`
--
ALTER TABLE `variant3`
  MODIFY `id_reg` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
