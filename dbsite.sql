-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 08 2017 г., 17:21
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
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `pre`, `descr`, `time`, `views`, `likes`, `video`) VALUES
(1, 'Парень ебет девушку и кончает внутрь', 'http://adultsite/uploads/post_images/pre.jpg', '', '15:35', 15441, 759, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4'),
(2, 'Дед выебал внучку и кончил ей на лицо', 'http://adultsite/uploads/post_images/pre2.jpg', '', '43:12', 12510, 433, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4'),
(3, 'Русская девушка после секса страстно отсосала', 'http://adultsite/uploads/post_images/pre3.jpg', '', '18:01', 9, 11, 'http://cdn2.vids69.com/video/47/1/46077/46077.mp4');

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
  `likes_video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `status_user`, `avatar`, `likes_video`) VALUES
(1, 'shawn', 'Shawn1Shawn', 'markpetrov1991@gmail.com', 2, 'http://adultsite/uploads/avatars/1.jpg', ', 33, 1, '),
(2, 'predator', '123', '123@gmai.com', 2, '', ''),
(3, 'bob', 'qwe', 'qwe@gmail.com', 1, '', ''),
(4, 'bobo', 'qwerty', 'markshysholik@gmail.com', 1, '', '3, '),
(5, 'malaxov', '123', 'mark.melnik2017@gmail.com', 1, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
