-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 21 2022 р., 17:29
-- Версія сервера: 10.4.25-MariaDB
-- Версія PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `car_service`
--

-- --------------------------------------------------------

--
-- Структура таблиці `cars`
--

CREATE TABLE `cars` (
  `cars_id` int(11) NOT NULL,
  `owners_id` int(11) NOT NULL,
  `car_brand` varchar(50) NOT NULL,
  `car_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `cars`
--

INSERT INTO `cars` (`cars_id`, `owners_id`, `car_brand`, `car_number`) VALUES
(3, 3, 'Nissan', 'AC1111BX'),
(4, 5, 'Mercedes Benz', 'AA1290AC'),
(8, 0, 'BMW', 'AC2222KC'),
(9, 2, 'BMW', 'AC2222KC');

-- --------------------------------------------------------

--
-- Структура таблиці `job_category`
--

CREATE TABLE `job_category` (
  `job_id` int(11) NOT NULL,
  `name_job` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `job_category`
--

INSERT INTO `job_category` (`job_id`, `name_job`, `price`) VALUES
(1, 'Загальне СТО', 1000),
(2, 'СТО із кузовного ремонту і відновлення', 3000),
(3, 'СТО із ремонту АКПП', 5000),
(4, 'СТО із ремонту автоелектрики', 6000),
(5, 'Студія автодетейлінгу', 10000),
(6, 'СТО із ремонту вантажних, комерційних авто і автобусів', 9000);

-- --------------------------------------------------------

--
-- Структура таблиці `owners`
--

CREATE TABLE `owners` (
  `owners_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `owners`
--

INSERT INTO `owners` (`owners_id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Артем', 'Бойко', '+380985890582'),
(3, 'Олег', 'Кухарук', '+380763256'),
(4, 'Роман', 'Мороз', '+380654321'),
(5, 'Іван', 'Мельник', '+3806543217'),
(65, 'Вадим', 'Сорока', '+380997388199');

-- --------------------------------------------------------

--
-- Структура таблиці `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `end_date` date NOT NULL,
  `worker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `service`
--

INSERT INTO `service` (`service_id`, `car_id`, `job_id`, `end_date`, `worker_id`) VALUES
(1, 1, 3, '2022-11-30', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `Phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `workers`
--

INSERT INTO `workers` (`worker_id`, `first_name`, `last_name`, `Phone_number`) VALUES
(1, 'Павло', 'Сорока', '+380123220'),
(2, 'Роман', 'Мельник', '+3801343105'),
(3, 'Стас', 'Чайковський', '+380686160354');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cars_id`),
  ADD KEY `owners_id` (`owners_id`);

--
-- Індекси таблиці `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`job_id`);

--
-- Індекси таблиці `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owners_id`);

--
-- Індекси таблиці `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Індекси таблиці `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `cars`
--
ALTER TABLE `cars`
  MODIFY `cars_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `job_category`
--
ALTER TABLE `job_category`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `owners`
--
ALTER TABLE `owners`
  MODIFY `owners_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблиці `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
