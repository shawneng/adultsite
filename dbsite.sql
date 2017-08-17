-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 17 2017 г., 18:57
-- Версия сервера: 5.5.53
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dbsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(150) NOT NULL,
  `videos` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `posts` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `description`, `title`, `name`, `videos`, `keywords`, `avatar`, `posts`) VALUES
(1, '', '', 'Домашнее порно', 0, '', 'http://jizzcandancex.com/uploads/posts/2013-12/1387457349_ieqvwqenndzgqx06s8d.jpg', ''),
(2, '', '', 'Анал', 0, '', 'http://i1.perdos.me/files/photo/2015/12/P4760/P4760_perdos.ru_14493187770.jpg', ''),
(3, '', '', 'Русское порно', 0, '', 'http://i1.perdos.me/files/video/2016/12/P7039/P7039_perdos.ru_19.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(180) NOT NULL,
  `pre` varchar(50) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `time` varchar(10) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `video` varchar(50) NOT NULL,
  `keywords` text NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `pre`, `descr`, `time`, `views`, `likes`, `video`, `keywords`, `categories`) VALUES
(1, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 15455, 771, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2'),
(2, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12530, 610, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2, 3'),
(3, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 49, 50, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(4, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 49, 57, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(5, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12531, 611, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2, 3'),
(6, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 15455, 772, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2'),
(7, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 48, 50, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(8, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 15455, 772, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2'),
(9, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12529, 614, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2, 3'),
(10, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 15456, 773, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2'),
(11, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12533, 609, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2, 3'),
(12, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12535, 616, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2, 3'),
(13, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 4, 773, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2'),
(14, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 56, 56, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(15, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 57, 60, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(16, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 56, 46, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(17, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 58, 58, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(18, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12532, 619, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2, 3'),
(19, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 12532, 781, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 2'),
(20, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 12532, 58, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3'),
(21, 'Засадил здоровенный член между упругих булочек', 'http://img.mega-porno.me/video/42/2/41114/2.jpg', '', '18:01', 12532, 47, 'http://cdn1.vids69.com/video/42/2/41114/41114.mp4', '', '1, 3'),
(22, 'Русская девушка после секса страстно отсосал', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 12532, 50, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4', '', '1, 3');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name_site` text NOT NULL,
  `descr_site` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name_site`, `descr_site`, `keywords`) VALUES
(1, 'adult2', 'sdfsdf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Структура таблицы `studios`
--

CREATE TABLE `studios` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `videos` text NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `idUsers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `studios`
--

INSERT INTO `studios` (`id`, `name`, `videos`, `avatar`, `idUsers`) VALUES
(1, 'Brazzers', '', '0', '1, 3, 2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `status_user` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `likes_video` varchar(500) NOT NULL,
  `history` text NOT NULL,
  `studios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `status_user`, `avatar`, `likes_video`, `history`, `studios`) VALUES
(1, 'shawn', 'Shawn1Shawn', 'markpetrov1991@gmail.com', 2, 'http://adultsite/uploads/avatars/1.jpg', '21, 12, 17, 20, 10, 18, ', '17, 14, 2, 5, 15, 18, 22, 19, 20, 21', '1, '),
(2, 'predator', '123', '123@gmai.com', 2, '', '', '', ''),
(3, 'bob', 'qwe', 'qwe@gmail.com', 1, '', '', '', ''),
(4, 'bobo', 'qwerty', 'markshysholik@gmail.com', 1, '', '3, ', '', ''),
(5, 'malaxov', '123', 'mark.melnik2017@gmail.com', 1, '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `studios`
--
ALTER TABLE `studios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
