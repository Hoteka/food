-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 02 2022 г., 22:36
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `food`
--

-- --------------------------------------------------------

--
-- Структура таблицы `checkeat`
--

CREATE TABLE `checkeat` (
  `idCheckEat` int NOT NULL,
  `eat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `checkeat`
--

INSERT INTO `checkeat` (`idCheckEat`, `eat`) VALUES
(1, 'кушаю'),
(2, 'не кушаю');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `idRole` int NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `typefoods`
--

CREATE TABLE `typefoods` (
  `idFood` int NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `typefoods`
--

INSERT INTO `typefoods` (`idFood`, `type`) VALUES
(1, 'Завтрак'),
(2, 'Поздний завтрак'),
(3, 'Обед'),
(4, 'Ужин'),
(5, 'Поздний ужин');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idUser` int NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idRole` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idUser`, `lastName`, `firstName`, `login`, `password`, `idRole`) VALUES
(2, '1', '1', '1', '$2y$10$q/VHN83MoxpEolGtjA5czOm02IUCBj4zBLRXaaQQ/KQNOlPqthVae', 2),
(25, 'admin', 'admin', 'admin', '$2y$10$OkDL8srmsWu9w/W.WDH5Ree4T2ntq5VphDj/T5uwVVbOB08mnSOxe', 1),
(26, '321', '321', '321', '$2y$10$BPP0QsaxG1zkeP2yVGOzUuwgEPM.ZI9Uxt3P94YRHxPeP1aKPrLta', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `usersform`
--

CREATE TABLE `usersform` (
  `idForm` int NOT NULL,
  `typeFood` json DEFAULT NULL,
  `dateEat` date DEFAULT NULL,
  `idCheckEat` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `usersform`
--

INSERT INTO `usersform` (`idForm`, `typeFood`, `dateEat`, `idCheckEat`) VALUES
(163, '[\"Завтрак\", \"Поздний завтрак\", \"Обед\", \"Ужин\", \"Поздний ужин\"]', '2022-03-03', 1),
(165, '[\"Завтрак\", \"Поздний завтрак\"]', '2022-03-03', 1),
(166, '[\"Завтрак\", \"Поздний завтрак\"]', '2022-03-03', 1),
(167, '[\"Завтрак\", \"Поздний завтрак\", \"Обед\", \"Ужин\", \"Поздний ужин\"]', '2022-03-04', 1),
(168, '[\"Завтрак\", \"Поздний завтрак\", \"Обед\", \"Ужин\", \"Поздний ужин\"]', '2022-03-04', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `checkeat`
--
ALTER TABLE `checkeat`
  ADD PRIMARY KEY (`idCheckEat`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Индексы таблицы `typefoods`
--
ALTER TABLE `typefoods`
  ADD PRIMARY KEY (`idFood`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRole` (`idRole`);

--
-- Индексы таблицы `usersform`
--
ALTER TABLE `usersform`
  ADD PRIMARY KEY (`idForm`),
  ADD KEY `idCheckEat` (`idCheckEat`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `checkeat`
--
ALTER TABLE `checkeat`
  MODIFY `idCheckEat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `typefoods`
--
ALTER TABLE `typefoods`
  MODIFY `idFood` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `usersform`
--
ALTER TABLE `usersform`
  MODIFY `idForm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `users` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `usersform`
--
ALTER TABLE `usersform`
  ADD CONSTRAINT `usersform_ibfk_1` FOREIGN KEY (`idCheckEat`) REFERENCES `checkeat` (`idCheckEat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
