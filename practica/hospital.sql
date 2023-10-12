-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2023 г., 15:04
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hospital`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Administrator`
--

CREATE TABLE `Administrator` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Administrator`
--

INSERT INTO `Administrator` (`Id`, `Surname`, `Name`, `Patronymic`, `Mail`) VALUES
(1, 'Барышников', 'Андрей', 'Евгеньевич', 'andreibarishnikov2004@gmail.com'),
(2, 'Войцеховский', 'Артём', 'Олегович', 'artemvoj@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `Department`
--

CREATE TABLE `Department` (
  `Id` int(11) NOT NULL,
  `Id_Administrator` int(11) NOT NULL,
  `Id_Patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Department`
--

INSERT INTO `Department` (`Id`, `Id_Administrator`, `Id_Patient`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Doctor`
--

CREATE TABLE `Doctor` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Specialization` int(11) NOT NULL,
  `Id_Schedule` int(11) NOT NULL,
  `Id_Department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Doctor`
--

INSERT INTO `Doctor` (`Id`, `Surname`, `Name`, `Patronymic`, `Address`, `Phone`, `Id_Specialization`, `Id_Schedule`, `Id_Department`) VALUES
(1, 'Манаев', 'Евгений', 'Павлович', 'Краснооктябрьская 26', '89194452432', 1, 1, 1),
(2, 'Старов', 'Александр', 'Иванович', 'Заря 3', '89193425124', 2, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Patient`
--

CREATE TABLE `Patient` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Patient`
--

INSERT INTO `Patient` (`Id`, `Surname`, `Name`, `Patronymic`, `Mail`, `Username`, `Password`) VALUES
(1, 'Барышников', 'Андрей', 'Евгеньевич', 'andrei2004g@mail.ru', 'dron', '123456');

-- --------------------------------------------------------

--
-- Структура таблицы `Schedule`
--

CREATE TABLE `Schedule` (
  `Id` int(11) NOT NULL,
  `Day` date NOT NULL,
  `Hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cabinet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Schedule`
--

INSERT INTO `Schedule` (`Id`, `Day`, `Hour`, `Cabinet`) VALUES
(1, '2023-06-15', '8:00 - 15:00', 101),
(2, '2023-06-16', '8:00 - 13:00', 102);

-- --------------------------------------------------------

--
-- Структура таблицы `Specialization`
--

CREATE TABLE `Specialization` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Specialization`
--

INSERT INTO `Specialization` (`Id`, `Name`) VALUES
(1, 'Хирург'),
(2, 'Педиатр');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Administrator` (`Id_Administrator`),
  ADD KEY `Id_Patient` (`Id_Patient`);

--
-- Индексы таблицы `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Schedule` (`Id_Schedule`),
  ADD KEY `Id_Specialization` (`Id_Specialization`),
  ADD KEY `Id_Department` (`Id_Department`);

--
-- Индексы таблицы `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Schedule`
--
ALTER TABLE `Schedule`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Specialization`
--
ALTER TABLE `Specialization`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Administrator`
--
ALTER TABLE `Administrator`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Department`
--
ALTER TABLE `Department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Patient`
--
ALTER TABLE `Patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Schedule`
--
ALTER TABLE `Schedule`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Specialization`
--
ALTER TABLE `Specialization`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Department`
--
ALTER TABLE `Department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Id_Administrator`) REFERENCES `Administrator` (`Id`),
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`Id_Patient`) REFERENCES `Patient` (`Id`);

--
-- Ограничения внешнего ключа таблицы `Doctor`
--
ALTER TABLE `Doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`Id_Schedule`) REFERENCES `Schedule` (`Id`),
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`Id_Specialization`) REFERENCES `Specialization` (`Id`),
  ADD CONSTRAINT `doctor_ibfk_3` FOREIGN KEY (`Id_Department`) REFERENCES `Department` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
