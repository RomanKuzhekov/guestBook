-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 11 2022 г., 10:45
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test-marketing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `active` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guestbook`
--

INSERT INTO `guestbook` (`id`, `date_created`, `name`, `text`, `active`) VALUES
(41, '2022-10-11 10:42:19', 'Роман', 'Приятно, граждане, наблюдать, как независимые государства разоблачены. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности позволяет выполнить важные задания по разработке поставленных обществом задач.', 1),
(42, '2022-10-11 10:42:33', 'Саша', 'Также как перспективное планирование позволяет оценить значение дальнейших направлений развития. А ещё предприниматели в сети интернет представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.', 0),
(43, '2022-10-11 10:42:48', 'Вова Петров', 'Имеется спорная точка зрения, гласящая примерно следующее: интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, понимание сути ресурсосберегающих технологий обеспечивает актуальность дальнейших направлений развития.', 1),
(44, '2022-10-11 10:43:03', 'Иванов Иван', 'А также многие известные личности могут быть подвергнуты целой серии независимых исследований. Каждый из нас понимает очевидную вещь: дальнейшее развитие различных форм деятельности обеспечивает актуальность прогресса профессионального сообщества.', 0),
(45, '2022-10-11 10:43:59', 'Семен', 'Противоположная точка зрения подразумевает, что независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут своевременно верифицированы. С другой стороны, дальнейшее развитие различных форм деятельности однозначно определяет каждого участника как способного принимать собственные решения касаемо форм воздействия.', 0),
(46, '2022-10-11 10:44:09', 'Ольга', 'Кстати, диаграммы связей освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, ассоциативно распределены по отраслям. Принимая во внимание показатели успешности, реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации первоочередных требований!', 1),
(47, '2022-10-11 10:44:20', 'Аноним', 'Но глубокий уровень погружения, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для переосмысления внешнеэкономических политик. Сложно сказать, почему явные признаки победы институционализации, вне зависимости от их уровня, должны быть обнародованы.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1665412735),
('m221010_123017_guestbook', 1665412851),
('m221010_183017_init', 1665426683);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(8, 'admin', '$2y$13$R7iN0rEGlUozySmIYULGluZqkxtJzdmq9sVVlGeE.EXwGk/PrAaQe', 'admin', 10, 1665474028, 1665474028),
(9, 'user1', '$2y$13$f5Z5pHxooiNVVUmHjTjAdeCkFgsOe98djMM2yW4hzp.j.o5JZ07WK', 'user', 10, 1665474042, 1665474042),
(10, 'moderator1', '$2y$13$4HGgqjHD8.olPsKMsgC0lOB36pM8qVCOW1idnBfKdYU.UQ7gXQEha', 'moderator', 10, 1665474066, 1665474066);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
