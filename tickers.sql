-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 23 2021 г., 15:37
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tickers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lifetime` int(11) NOT NULL,
  `publ_data` int(11) DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `title` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `syntax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `pasta`, `access`, `lifetime`, `publ_data`, `hash`, `updated_at`, `created_at`, `title`, `syntax`, `autor`, `autor_name`) VALUES
(51, 'Паста 1Паста 1Паста 1Паста 1Паста 1Паста 1Паста 1Паста 1Паста 1', 'public', 2147483647, 1640070048, '5565f08b55192522c76349f7ac65d859', '2021-12-21 00:00:48', '2021-12-21 00:00:48', 'Паста 1', '', '', ''),
(52, 'Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2Паста 2 Паста 2', 'public', 1642662064, 1640070064, '5ef223687dbf51b40b17f23fdc32109d', '2021-12-21 00:01:04', '2021-12-21 00:01:04', 'Паста 2', '', '', ''),
(53, 'в', 'unlisted', 1642662078, 1640070078, '7419038b8787a2ab2d596b5c7e51b33e', '2021-12-21 00:01:18', '2021-12-21 00:01:18', 'Паста 3', '', '', ''),
(54, 'Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4Паста 4', 'public', 1642662088, 1640070088, '145239005eef2bf9b687be88b7081391', '2021-12-21 00:01:28', '2021-12-21 00:01:28', 'Паста 4', '', '', ''),
(55, 'Паста 5 Паста 5Паста 5Паста 5Паста 5Паста 5Паста 5Паста 5Паста 5', 'unlisted', 2147483647, 1640070117, 'ebc2190449725300b2db8ca38ddfd285', '2021-12-21 00:01:57', '2021-12-21 00:01:57', 'Паста 5', '', '', ''),
(56, 'Привет, я молодец', 'public', 1642665389, 1640073389, 'bdbfa62d7ad6c46f2a4a68c8cd8d8329', '2021-12-21 00:56:29', '2021-12-21 00:56:29', 'Паста 5', '', '', ''),
(57, 'пилю тестовое задание', 'public', 1642666875, 1640074875, 'f9849f11cef35bd0c654775ec18c6860', '2021-12-21 01:21:15', '2021-12-21 01:21:15', 'Паста 6', '', '', ''),
(58, 'для поиска', 'public', 2147483647, 1640076687, '037445e86619c0a577801209d0ea43f5', '2021-12-21 01:51:27', '2021-12-21 01:51:27', 'Паста 6', '', '', ''),
(59, 'выва', 'unlisted', 2147483647, 1640077251, '1a0f7968c1304dc23b375cfb596dae86', '2021-12-21 02:00:51', '2021-12-21 02:00:51', 'Паста приват', '', '', ''),
(60, '<p>привет</p>', 'public', 1642670420, 1640078420, 'f7418b1ebbfb6d4548df3239f392c565', '2021-12-21 02:20:20', '2021-12-21 02:20:20', 'HTML', 'html', '', ''),
(61, '<h1> top <h1>', 'public', 1642671693, 1640079693, 'dfee911deb2a9f5703f099e98cf1bbce', '2021-12-21 02:41:33', '2021-12-21 02:41:33', 'HTML 2', 'html', '', ''),
(62, 'if(isset($_POST[\'add_past\'])){\r\n        echo \'нажата кнопка\';\r\n\r\n        $publ_data = time();\r\n        $hash = md5(time());\r\n}', 'public', 2147483647, 1640080159, '5723bd726812f05a928c0a7efe765d1c', '2021-12-21 02:49:19', '2021-12-21 02:49:19', 'PHP', 'php', '', ''),
(66, 'function slideLogo(from, to) {\r\n            if (from < to) {\r\n                company.top = (from += 10);\r\n                setTimeout(\'slideLogo(\' + from + \',\' + to + \')\', 75);\r\n            }\r\n            else initObjects();\r\n    }', 'public', 1640081918, 1640081318, '903db54d65b05d7b8dcfd834e023f02e', '2021-12-21 03:08:38', '2021-12-21 03:08:38', 'JS', 'javascript', '', ''),
(67, '1', 'unlisted', 1640082099, 1640081499, '388f33fb938daeba67ab3c6acc887845', '2021-12-21 03:11:39', '2021-12-21 03:11:39', 's', NULL, '', ''),
(68, 'вкусно ем', 'public', 2147483647, 1640096003, '4496aebb0035ce48b80dcff8dc7adf84', '2021-12-21 07:13:23', '2021-12-21 07:13:23', 'Вечерняя паста', NULL, '', ''),
(69, 'Поел', 'unlisted', 1640096619, 1640096019, '773e56cd2a398724b5361f433d11f546', '2021-12-21 07:13:39', '2021-12-21 07:13:39', 'Вечерняя паста 2', NULL, '', ''),
(70, 'поел и подрочил =)', 'public', 1640101615, 1640098015, '3870066fc50f23f37e3b984a02db144b', '2021-12-21 07:46:55', '2021-12-21 07:46:55', 'Вечерний чил', NULL, '', ''),
(71, 'выап ыва', 'unlisted', 1640098692, 1640098092, 'd7c72ab08db9fc81fe2cfc8e21124b2e', '2021-12-21 07:48:12', '2021-12-21 07:48:12', 'выфа', NULL, '', ''),
(72, 'dfg df', 'public', 1640098977, 1640098377, '6ecae9b43bd83d032133ccb45ee75302', '2021-12-21 07:52:57', '2021-12-21 07:52:57', 'sdf asdf', NULL, '', ''),
(73, 'Сижу, кодю', 'unlisted', 1642745144, 1640153144, 'e21383e3524b5f2cca11f9983203be61', '2021-12-21 23:05:44', '2021-12-21 23:05:44', 'День третий', NULL, '3', 'Dmitry'),
(74, 'вапв', 'public', 1640153924, 1640153324, '97a67feaf94bbcf3bc3f65ff94d0ba47', '2021-12-21 23:08:44', '2021-12-21 23:08:44', 'День третий', NULL, '3', 'Dmitry'),
(75, 'df', 'public', 1640154019, 1640153419, '044392762f215679c3ecc6e21ebf06a9', '2021-12-21 23:10:19', '2021-12-21 23:10:19', 'dfgd', NULL, '3', 'Dmitry'),
(77, 'Паста 100500Паста 100500Паста 100500Паста 100500Паста 100500', 'unlisted', 1642828835, 1640236835, 'f0e3becae25bad270cca123ed472107d', '2021-12-22 22:20:35', '2021-12-22 22:20:35', 'Паста 100500', NULL, '3', 'Dmitry'),
(78, 'Чак Норрис может засунуть 2 пальца в розетку и её ударит Чаком', 'public', 2147483647, 1640244558, '08633c4c315d6dd545cd84f06dd1d014', '2021-12-23 00:29:18', '2021-12-23 00:29:18', 'Факт обо мне', NULL, '3', 'Чак Норрис'),
(79, 'Приват', 'unlisted', 1640255757, 1640244957, 'cd97b2c82ac93b2361e8332cccf9b183', '2021-12-23 00:35:57', '2021-12-23 00:35:57', 'Приват', NULL, '3', 'Чак Норрис'),
(80, 'Улицу им. Чака Норриса пришлось переименовать т. к. никто не хотел переходить дорогу.', 'public', 2147483647, 1640246795, 'da126bf7c0abc8b9e9a7b442763b1bf7', '2021-12-23 01:06:35', '2021-12-23 01:06:35', 'Про мою улицу', NULL, '3', 'Чак Норрис'),
(81, 'Таксист, подвозивший Чака Норриса, всё таки намазал спасибо на хлеб!', 'public', 2147483647, 1640246896, '0a9357df01c6bfc2307dd346161ef2b4', '2021-12-23 01:08:16', '2021-12-23 01:08:16', 'ЯндексТакси', NULL, '3', 'Чак Норрис'),
(82, 'function addEvent(elm, evType, fn, useCapture) {\r\n        if (elm.addEventListener) {\r\n                elm.addEventListener(evType, fn, useCapture);\r\n        return true;\r\n        }\r\n        else if (elm.attachEvent) {\r\n                var r = elm.attachEvent(\'on\' + evType, fn);\r\n                return r;\r\n        }\r\n        else {\r\n                elm[\'on\' + evType] = fn;\r\n        }\r\n}', 'public', 2147483647, 1640248679, '14c9ac7838e5332643907001bba00cd6', '2021-12-23 01:37:59', '2021-12-23 01:37:59', 'JS функция addEvent() от Скота Эндрю', 'javascript', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_20_132857_create_contacts_table', 1),
(6, '2021_12_21_030501_add_publ_data_table', 2),
(7, '2021_12_21_032028_add_hash_table', 3),
(8, '2021_12_21_064424_add_title_table', 4),
(9, '2021_12_21_064622_add_hash_table2', 5),
(10, '2021_12_21_093525_add_syntax_table', 6),
(11, '2021_12_22_060332_add_autor_table', 7),
(12, '2021_12_23_051648_add_autor_name', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pasts`
--

CREATE TABLE `pasts` (
  `id` int(11) NOT NULL,
  `pasta` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `publ_data` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `access` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `hash` char(250) DEFAULT NULL,
  `lifetime` text CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pasts`
--

INSERT INTO `pasts` (`id`, `pasta`, `publ_data`, `access`, `hash`, `lifetime`) VALUES
(70, 'e f', '1639978443', 'public', '80b0914fb81d04429f42657c78091b9b', '600'),
(71, 'e f', '1639978484', 'public', '87d92b9f192afc90c4f3bff54aefcc79', '600'),
(72, 'df gdfg ', '1639978487', 'public', 'fd46e6b3bf98ede2999f28c8835db53e', '600'),
(73, 'df gdfg ', '1639978556', 'public', 'c4942658d5bc5c524c224641dd8dcd70', '600'),
(74, 'df gdfg ', '1639978557', 'public', '86a45f0d062d04917ca0547564add5c2', '600'),
(75, 'df gdfg ', '1639978558', 'public', '8e390b7252e29528f85c34e6157c4268', '600'),
(76, 'df gdfg ', '1639978558', 'public', '8e390b7252e29528f85c34e6157c4268', '600'),
(77, 'df gdfg ', '1639978559', 'public', '1c51a7e069ae482cf2eda8dfb95d3267', '600'),
(78, 'df gdfg ', '1639978560', 'public', 'cabb50a67132cd66d69ec78ecf78578d', '600'),
(79, 'df gdfg ', '1639978561', 'public', 'a30e12a445858838a58377e0049024ce', '600'),
(80, 'df gdfg ', '1639978592', 'public', 'f8ead3672905cb6b56bbe939b2373d40', '600'),
(81, 'df gdfg ', '1639978632', 'public', 'd25b10e9d26db0f0caa00f7845253715', '600'),
(82, 'fg sdf', '1639978635', 'public', 'ea0695b47e6120c2cbc9449c2f5853ce', '600'),
(83, 'fg sdf', '1639978648', 'public', '351c01fab325fd66115043022486d123', '600'),
(84, 'fg sdf', '1639978651', 'public', '69c39ea284b005ae8da7d2b6d5520fc3', '600'),
(85, 'jkl;kjhgf', '1639978653', 'public', 'b46e3483da5257fe9ee25762e275f6a7', '600'),
(86, 'jkl;kjhgf', '1639978679', 'public', 'd28816ec035f21da43a739ad17c8782b', '600'),
(87, 'jkl;kjhgf', '1639978692', 'public', 'b0ee121769adc6bd8d6e8901635e5e7f', '600'),
(88, 'jkl;kjhgf', '1639978852', 'public', '5eb5e05a0f9610dc23ae49c527d1a153', '600'),
(89, 'jkl;kjhgf', '1639978863', 'public', '050c66dd5438e2ff820c2fe3b2682419', '600'),
(90, 'jkl;kjhgf', '1639979076', 'public', '551d00d7de862569216bcbb89f7a7da9', '600'),
(91, 'jkl;kjhgf', '1639979088', 'public', '916a96dbc66152c4608ee1533f0eb610', '600'),
(92, 'jkl;kjhgf', '1639979090', 'public', '0070a68345d19e8f64af335236e6244c', '600'),
(93, 'jkl;kjhgf', '1639979090', 'public', '0070a68345d19e8f64af335236e6244c', '600'),
(94, 'jkl;kjhgf', '1639979092', 'public', 'a237717210510185134824b10ba87901', '600'),
(95, 'jkl;kjhgf', '1639979092', 'public', 'a237717210510185134824b10ba87901', '600'),
(96, 'jkl;kjhgf', '1639979093', 'public', '28090a21c2bc9e5134d55b6f5e64db7b', '600'),
(97, 'jkl;kjhgf', '1639979094', 'public', 'c4598ef5eb759e6813704db0882009e5', '600'),
(98, 'fgh dfgh34567', '1639979291', 'public', '5f9cb0fa2e5104d04333ffcef94f3cc7', '600');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tickers`
--

CREATE TABLE `tickers` (
  `id` int(11) NOT NULL,
  `tema` text NOT NULL,
  `data` date NOT NULL,
  `status` text NOT NULL,
  `text` longtext NOT NULL,
  `telefon` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tickers`
--

INSERT INTO `tickers` (`id`, `tema`, `data`, `status`, `text`, `telefon`) VALUES
(1, 'темаfg fg', '2020-08-17', 'закрыто', 'Текст темы 1', '894561132'),
(2, 'тема 2', '2020-08-27', 'открыто', 'Текст темы 2', '815165156'),
(3, 'тема 3', '2020-08-26', 'открыто', 'Текст темы 3', '894561132'),
(4, 'тема 4', '2020-08-27', 'открыто', 'Текст темы 4', '815165156'),
(94, 'ТЕма5', '2020-08-26', 'открыто', 'текст темы 5', '19159251231'),
(95, 'Тема 6', '2020-08-26', 'Открыто', 'текст Темы 6', '48948489'),
(96, 'Тема 7', '2020-08-26', 'Открыто', 'Текст Тема 7', '4524567'),
(97, 'Тема 8', '2020-08-26', 'Открыто', 'текст Тема 8', '546787685'),
(98, 'Тема 9', '2020-08-26', 'Открыто', 'вапывап', '123к456'),
(99, 'Тема 10', '2020-08-26', 'Открыто', 'текст Тема 10', '3456780987654'),
(100, 'Тема 11', '2020-08-26', 'Открыто', 'текст Тема 11', '23456789'),
(101, 'Тема 12', '2020-08-26', 'Открыто', 'текст  Тема 12', '3454567'),
(102, 'Тема 13', '2020-08-26', 'Открыто', 'текст Тема 13', '234567'),
(103, 'Тема 14', '2020-08-26', 'Открыто', 'текст Тема 14', '23456734567'),
(104, 'Тема 15', '2020-08-26', 'Открыто', 'текст Тема 15', '45687434356'),
(105, 'Тема 16', '2020-08-26', 'Открыто', 'текст Тема 16', '12345656'),
(106, 'Тема 17', '2020-08-26', 'Открыто', 'Тема 16Тема 16Тема 16Тема 16', '345678'),
(107, 'Тема 18', '2020-08-26', 'Открыто', 'Тема 18Тема 18Тема 18', '2345678654'),
(108, 'Тема 19', '2020-08-26', 'Открыто', 'Тема 19Тема 19Тема 19', '3456787654'),
(109, 'Тема 20', '2020-08-26', 'Открыто', 'Тема 20Тема 20Тема 20', '787654');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Чак Норрис', 'kleshnevdmitry@rambler.ru', NULL, '$2y$10$63QSIID3sERgmJz0GAZjp.1aS6jdMmk645Ek/gQQaGzuWqBHS5UyC', NULL, '2021-12-21 21:49:08', '2021-12-21 21:49:08'),
(4, 'Vasya', 'gowotmods@gmail.com', NULL, '$2y$10$/jXVBswUj.KElgKyHF11zO.poIyYDLkhZkFMVk26tDL7d95ZI25E6', NULL, '2021-12-22 00:55:47', '2021-12-22 00:55:47');

-- --------------------------------------------------------

--
-- Структура таблицы `vse42`
--

CREATE TABLE `vse42` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `data` date NOT NULL,
  `info` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vse42`
--

INSERT INTO `vse42` (`id`, `text`, `data`, `info`) VALUES
(1, 'тема 1', '2020-08-17', ''),
(2, 'тема 2', '2020-08-27', ''),
(3, 'тема 3', '2020-08-26', ''),
(4, 'тема 4', '2020-08-27', ''),
(94, 'ТЕма5', '2020-08-26', ''),
(95, 'Тема 6', '2020-08-26', ''),
(96, 'Тема 7', '2020-08-26', ''),
(97, 'Тема 8', '2020-08-26', ''),
(98, 'Тема 9', '2020-08-26', ''),
(99, 'Тема 10', '2020-08-26', ''),
(100, 'Тема 11', '2020-08-26', ''),
(101, 'Тема 12', '2020-08-26', ''),
(102, 'Тема 13', '2020-08-26', ''),
(103, 'Тема 14', '2020-08-26', ''),
(104, 'Тема 15', '2020-08-26', ''),
(105, 'Тема 16', '2020-08-26', ''),
(106, 'Тема 17', '2020-08-26', ''),
(107, 'Тема 18', '2020-08-26', ''),
(108, 'Тема 19', '2020-08-26', ''),
(109, 'Тема 20', '2020-08-26', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `pasts`
--
ALTER TABLE `pasts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `tickers`
--
ALTER TABLE `tickers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `vse42`
--
ALTER TABLE `vse42`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `pasts`
--
ALTER TABLE `pasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tickers`
--
ALTER TABLE `tickers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vse42`
--
ALTER TABLE `vse42`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
