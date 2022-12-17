-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2022 г., 02:26
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` char(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `categorie_id`, `pubdate`, `views`) VALUES
(1, 'Как создать БД в mySQL', 'Здравствуй, дорогой читатель. Каждый разработчик сталкивался с задачей, в которой необходимо создать БД в mySQL..', 4, '2022-12-17 01:22:24', 25),
(2, 'RecyclerView для начинающего Android-разработчика', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 4, '2022-12-17 01:24:15', 18),
(3, 'Новости \"Железа\" за 2022 год', 'Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 2, '2022-12-17 01:25:00', 150),
(4, 'Новости \"IT\" за 2022 год', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 1, '2022-12-17 01:26:33', 85),
(5, 'Выбор процессора за 2022 год', 'Psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 2, '2022-12-17 01:44:01', 35),
(6, 'Выбор лучшей видеокарты за 2022 год', 'Сonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 2, '2022-12-17 01:44:43', 41),
(7, 'Какой язык программирования учить в 2022 году?', 'Sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 4, '2022-12-17 01:45:50', 63),
(8, 'Актуален ли сегодня Java Script', 'Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 1, '2022-12-17 01:46:50', 32),
(9, 'Модный стек технологий в 2022 году', 'Aamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 1, '2022-12-17 01:47:24', 45),
(10, 'Несколько готовых решений для работс с VSCode', 'Lor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 5, '2022-12-17 01:48:56', 14),
(11, 'Несколько готовых решений для создания БД', 'Wum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 5, '2022-12-17 01:49:14', 132),
(12, 'Учимся писать на \"ванильном\" JS', 'Java Script amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 4, '2022-12-17 01:55:30', 184),
(13, 'Учимся писать на React.JS', 'React.JS amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', 4, '2022-12-17 01:55:40', 232);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'Новости IT'),
(2, 'Новости железа'),
(3, 'Проекты'),
(4, 'Программирование'),
(5, 'Вкусняшки'),
(6, 'Новинки');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` char(100) DEFAULT NULL,
  `text` text NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`, `pubdate`, `articles_id`) VALUES
(1, 'Димасик', 'Теперь я точно знаю как создать БД на mySQL!!! Спасибо!', '2022-12-17 02:07:10', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
