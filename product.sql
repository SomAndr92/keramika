-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2024 г., 22:14
-- Версия сервера: 10.4.26-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `keramika`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Наименование` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Категория` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Описание` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Цена` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Страна производства` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ширина, см` int(11) NOT NULL,
  `Длина, см` int(11) NOT NULL,
  `Толщина, мм` int(11) NOT NULL,
  `Коллекция` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Фото главное` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Фото` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`ID`, `Наименование`, `Категория`, `Описание`, `Цена`, `Страна производства`, `Ширина, см`, `Длина, см`, `Толщина, мм`, `Коллекция`, `Фото главное`, `Фото`) VALUES
(1, 'Керамогранит Quadro Decor неполированный цвет серый', 'Напольная плитка', 'Искусственная облицовочная плитка для помещения и улицы, которая отличается прочной, долговечной структурой. Этот материал подходит для пола благодаря повышенной твердости, износостойкости и влагоустойчивости. Морозостойкий керамогранит устойчив к перепадам температуры.', '393₽/м²', 'Россия', 30, 30, 8, 'Соль-Перец', 'фото/Напольная плитка/ Quadro Decor.jpg', 'фото/Напольная плитка/ Quadro Decor1.jpg'),
(2, 'Керамогранит Шахтинская Плитка Гермес 40x40 см 1.6 м² матовый цвет серый', 'Напольная плитка', 'Керамогранит «Гермес» предназначен для пола и стен. Подходит для использования в местах с нормальной проходимостью (стандарт PEI 3 из 5) — как в помещении, так и на улице. Поверхность матовая. Цвет — серый. Плитка создает влагостойкое и морозостойкое покрытие, может применяться в жилых комнатах, в неотапливаемых помещениях и для наружной облицовки. Размер одного элемента — 40х40 см. Количество в упаковке — 10 штук: этого хватит для облицовки поверхности площадью 1,6 м^2^. Плитка изготовлена в России.', '664₽/м²', 'Россия', 40, 40, 8, 'Гермес', 'фото/Напольная плитка/ Шахтинская Плитка.jpg', 'фото/Напольная плитка/ Шахтинская Плитка1.jpg'),
(3, 'Глазурованный керамогранит Cersanit Stockholm 18.5x59.8 см 1.216 м² матовый цвет серый', 'Напольная плитка', 'Керамогранит Stockholm — отделочный материал для внутреннего и внешнего использования. Подходит для мест с повышенной проходимостью (класс износостойкости 4). Поверхность элементов гладкая и матовая, стилизована под дерево. Основной цвет — серый. Размер плиток 18,5x59,8 см (форма прямоугольника), толщина — 7,5 мм. Количество различных рисунков — 8 шт.', '692₽/м²', 'Россия', 18, 59, 8, 'Stockholm', 'фото/Напольная плитка/ Cersanit Stockholm.jpg', 'фото/Напольная плитка/ Cersanit Stockholm1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
