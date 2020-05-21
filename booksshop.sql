-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 21, 2020 at 11:39 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `sort_order` int(3) NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `top_menu` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `descriptions`, `sort_order`, `status`, `top_menu`) VALUES
(14, 'Художественная литература', 'hudozhestvennaya_literatura', 0, 'Художественная литература', 'Художественная литература', 0, '1', 1),
(15, 'Книги для детей', 'knigi-dlya-detei', 0, 'Книги для детей', 'Книги для детей', 0, '1', 1),
(16, 'Образование', 'obrazovanie', 0, 'Образование', 'Образование', 0, '1', 1),
(17, 'Наука и техника', 'nauka-i-tehnika', 0, 'Наука и техника', 'Наука и техника', 0, '1', 1),
(18, 'Увлечения', 'uvlecheniya', 0, 'Увлечения', 'Увлечения', 0, '1', 1),
(19, 'Подарочные издания', '', 0, 'Подарочные издания', 'Подарочные издания', 0, '1', 0),
(20, 'Книги на иностранных языках\r\n', '', 0, 'Книги на иностранных языках\r\n', 'Книги на иностранных языках\r\n', 0, '1', 0),
(22, 'Красота. Здоровье. Спорт', '', 0, 'Красота. Здоровье. Спорт', 'Красота. Здоровье. Спорт', 0, '1', 0),
(23, 'Психология', 'psihologiya', 0, 'Психология', 'Психология', 0, '1', 1),
(24, 'Фантастика. Фэнтези', 'fantastika_fentezi', 14, 'Фантастика. Фэнтези', 'Фантастика. Фэнтези', 0, '1', 0),
(25, 'Мистика. Ужасы', 'mistika_uzhasy', 24, 'Мистика. Ужасы', 'Мистика. Ужасы', 0, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cover_type`
--

CREATE TABLE `cover_type` (
  `cover_type_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `note`) VALUES
(1, 2, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ewrqew fadsf dsf sf'),
(2, 2, '0', '2020-05-14 16:43:49', NULL, 'fdsg dfg dsfg sdfg '),
(3, 2, '0', '2020-05-14 16:47:14', NULL, ''),
(4, 2, '0', '2020-05-14 16:47:52', NULL, ''),
(5, 2, '0', '2020-05-14 16:49:22', NULL, 'wer'),
(6, 2, '0', '2020-05-14 16:50:44', NULL, 'ert'),
(7, 2, '0', '2020-05-14 16:50:59', NULL, 'asd'),
(8, 2, '0', '2020-05-14 16:52:27', NULL, 'asd'),
(9, 2, '0', '2020-05-14 16:56:06', NULL, 'tyytyrt'),
(10, 2, '0', '2020-05-14 16:57:19', NULL, 'tyytyrt'),
(11, 2, '0', '2020-05-14 16:59:29', NULL, 'tyytyrt'),
(12, 2, '0', '2020-05-14 17:00:15', NULL, 'tyytyrt'),
(13, 2, '0', '2020-05-14 17:00:51', NULL, 'tyytyrt'),
(14, 2, '0', '2020-05-14 17:01:06', NULL, 'tyytyrt'),
(15, 2, '0', '2020-05-14 17:31:11', NULL, 'тестовый заказ'),
(16, 2, '0', '2020-05-14 17:32:04', NULL, 'тестовый заказ'),
(17, 4, '0', '2020-05-14 17:44:04', NULL, 'тестовый заказ'),
(18, 5, '0', '2020-05-14 17:47:21', NULL, 'sdafasdfdsafsdfasdf'),
(19, 6, '0', '2020-05-21 20:37:25', NULL, 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_count` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_create` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quentity` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quentity`, `title`, `price`) VALUES
(1, 14, 1, 1, 'Институт', 752),
(2, 15, 1, 1, 'Институт', 752),
(3, 16, 1, 1, 'Институт', 752),
(4, 17, 1, 1, 'Институт', 752),
(5, 18, 1, 1, 'Институт', 752),
(6, 19, 1, 1, 'Институт', 752),
(7, 19, 9, 1, 'Сердитая рыба', 29);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_count` int(10) NOT NULL,
  `special_offer` tinyint(1) DEFAULT NULL,
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `used` enum('0','1') NOT NULL DEFAULT '0',
  `alias` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no-image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `category_id`, `product_count`, `special_offer`, `hit`, `used`, `alias`, `img`) VALUES
(1, 'Институт', 752, 25, 10, NULL, '1', '0', 'institut', 'stiven_king_institut.jpg'),
(2, 'Ведьмин день', 320, 25, 10, NULL, '0', '1', 'vedmin-den', 'vedmin_den.jpg'),
(3, 'Чужак', 469, 25, 10, NULL, '1', '0', 'chuzhak', 'chuzhak.jpg'),
(4, 'Мертвое море', 1119, 25, 10, NULL, '0', '0', 'mertvoe_more', 'mertvoe_more.jpg'),
(5, 'Мастер слова. Секреты эффективных коммуникаций от ведущего спикера Америки', 508, 23, 10, NULL, '0', '0', 'master_slova_sekrety_effektivnyh_kommunikacij_ot_vedushchego_spikera_ameriki', 'master_slova_sekrety_effektivnyh_kommunikacij_ot_vedushchego_spikera_ameriki.jpg'),
(6, 'С возрастом только лучше. Технологии успешного старения', 736, 23, 10, NULL, '0', '0', 's_vozrastom_tolko_luchshe_tekhnologii_uspeshnogo_stareniya', 's_vozrastom_tolko_luchshe_tekhnologii_uspeshnogo_stareniya.jpg'),
(8, 'Мыслящие животные', 322, 23, 10, NULL, '0', '1', 'myslyashchie_zhivotnye', 'myslyashchie_zhivotnye.jpg'),
(9, 'Сердитая рыба', 29, 15, 10, NULL, '0', '0', 'serditaya_ryba', 'serditaya_ryba.jpg'),
(10, 'Разговоры о камне', 288, 18, 10, NULL, '0', '0', 'razgovory_o_kamne', 'razgovory_o_kamne.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(10) NOT NULL,
  `author` varchar(255) NOT NULL,
  `count_page` int(10) NOT NULL,
  `year` timestamp NOT NULL,
  `year_writing` timestamp NOT NULL,
  `cover_type_id` int(10) NOT NULL,
  `part` int(10) DEFAULT NULL,
  `weight` float NOT NULL,
  `age_restrictions` int(2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `edition_count` int(10) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `author`, `count_page`, `year`, `year_writing`, `cover_type_id`, `part`, `weight`, `age_restrictions`, `image`, `edition_count`, `description`, `keywords`) VALUES
(1, 'Стивен Кинг', 608, '2020-05-08 20:00:00', '2020-05-06 20:00:00', 1, NULL, 540, 16, NULL, 30000, 'Еще недавно у двенадцатилетнего Люка Эллиса была вполне привычная жизнь: школа, обеды с родителями в любимой пиццерии, вечера в компании лучшего друга... Пока одним июньским утром он не просыпается в собственной комнате, вот только в ней нет окон и находится она в тщательно укрытом от всего мира месте под названием «Институт». Здесь над похищенными из разных городов детьми, обладающими даром телепатии или телекинеза, проводят жестокие эксперименты с целью максимально развить их паранормальные способности. Бежать невозможно. Будущее предопределено, и это будущее — загадочная Дальняя половина Института, откуда не возвращался еще никто... Однако Люк не намерен сдаваться. Он уверен: в любой системе есть слабое место и он дождется часа, когда сможет вновь оказаться на свободе... ', '222'),
(2, 'Веркин Э.', 416, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 2, NULL, 400, 16, NULL, 3000, 'Ведьмин день:\r\n\"Зачем вы поселились в этом доме? – спросил меня тогда парень по кличке Горох. – Немедленно уезжайте! Будет беда!\" Но я не послушал его и не рассказал о предупреждении родителям. Однако вскоре выяснилось: этот самый Горох умер много лет назад! Значит, я разговаривал с привидением?.. Но это меня ничуть не испугало. Ведь пугать начало совсем другое: шорох, стук когтей по полу, ощущение присутствия в доме чего-то неведомого... Одного не могу понять: она мне только видится или существует на самом деле – эта призрачная белая кошка с кошмарной улыбкой?.. Пятно кровавой луны Холодея от ужаса, ступают по темным подземным коридорам Валя и ее друзья. Несколько дней назад девочка подзадорила одноклассника Володьку \"на слабо\" переночевать в этом подземелье, где, по слухам, поселился призрак, – и с тех пор о Володьке ни слуху ни духу. Неужели осталось лишь горько раскаиваться? Или все-таки Володьку еще можно спасти? Но как? Ведь все знают, что из этого ужасного подвала еще никто и никогда не возвращался... Ребята продолжают свой опасный поход. И вот перед ними возникает ухмыляющийся череп, а затем стрелка, указывающая путь в неведомое…', 'Ведьмин день, Веркин'),
(3, 'Кинг С.', 576, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 2, NULL, 330, 16, NULL, 16000, 'В парке маленького городка Флинт-Сити найден труп жестоко убитого одиннадцатилетнего мальчика. Все улики, показания свидетелей указывают на одного человека - Терри Мейтленда. Тренер молодежной бейсбольной команды, преподаватель английского, муж и отец двух дочерей - неужели он был способен на такое?\r\nК тому же у Терри есть неопровержимое алиби: на момент совершения преступления он был в другом городе.\r\nНо как мог один и тот же человек оказаться в двух местах одновременно? Или в городе появилось НЕЧТО, способное принимать обличие любого человека?..\r\nДетектив полиции Флинт-Сити Ральф Андерсон и частный сыщик агентства \"Найдем и сохраним\" Холли Гибни намерены выяснить правду, чего бы им это ни стоило…', 'Чужак, Кинг С.'),
(4, 'Каррэн Т.', 500, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 2, NULL, 780, 18, NULL, 5000, 'Загадки Саргассова моря, или Моря Потерянных Кораблей, не одно десятилетие будоражат умы людей. Команде и пассажирам судна \"Мара Кордэй\", направлявшегося во Французскую Гвиану, изменила удача, и они оказались пленниками загадочного тумана, что перенес их в края, где бунтуют законы физики и представители местной экзотической фауны не прочь полакомиться человеческим мясом. Неудачливым мореплавателям предстоит столкнуться не только с морскими чудовищами и природными аномалиями: в тумане их ждет нечто гораздо более страшное, противное человеческой логике. Отдавшись борьбе со враждебной действительностью и собственными страхами, движимые одной лишь надеждой на возвращение домой, герои плывут навстречу неизведанному, стараясь не утратить самого главного - человечности.', 'Мертвое море, Каррэн Т.'),
(5, 'Галло К.', 304, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 2, NULL, 540, 16, NULL, 2000, 'Дар убеждения — ресурс, который едва ли не на 100% определяет успех в жизни. Тот, кто умеет договариваться, в разы быстрее продвигается по службе, заключает выгодные контракты, разруливает проблемные ситуации.\r\nКнига знаменитого спикера TED Кармина Галло — практикум по превращению дара в технологию. Она предлагает набор инструментов по развитию у себя способностей к убеждению и прокачке коммуникационных навыков.', 'Мастер слова. Секреты эффективных коммуникаций от ведущего спикера Америки, Галло К.'),
(6, 'Кастел А.', 319, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 2, NULL, 410, 16, NULL, 5000, 'Каждый из нас связывает со старостью разные ожидания, зачастую думая об этом периоде жизни весьма в негативных тонах. Американский ученый Алан Д. Кастел, занимающийся вопросами старения в Калифорнийском университете, убедительно доказывает, что старость вполне может стать самым счастливым временем. Опираясь на современные научные исследования и разработки, он дает набор достаточно простых, но действенных инструментов, позволяющих создать в голове правильный образ преклонного возраста, отнюдь не исключающего оптимизм, физическую и социальную активность, яркую и насыщенную жизнь. Поскольку, как свидетельствует Алан Д. Кастел, готовиться к старости нужно начинать загодя, книга будет интересна читателям самого разного возраста.', 'С возрастом только лучше. Технологии успешного старения, Кастел А.'),
(8, 'Кралль К.', 216, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 2, NULL, 350, 0, NULL, 1000, 'Загадка души один из самых волнующих вопросов человечества. Проводя сравнительные психологические исследования способностей, происхождения и назначения души, человек всегда стремился уяснить, обладают ли душой, подобной нашей, и другие существа.', 'Мыслящие животные, Кралль К.'),
(9, 'Коваль Т.', 20, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 1, NULL, 40, 0, NULL, 10000, 'Сказка для детей младшего дошкольного возраста.', 'Сердитая рыба, Коваль Т.'),
(10, 'Никулина М.', 136, '2019-12-31 20:00:00', '2019-12-31 20:00:00', 1, NULL, 130, 0, NULL, 5, 'Язык отражает наше особое отношение к камню: мы говорим «краеугольный камень», «камень преткновения», «камень на сердце», «как камень с плеч», «как камень в воду», «нашла коса на камень», «камни возопиют», «время разбрасывать камни и время собирать камни»… Названия камней, поставленные в ряд, сияют, как гвардия на параде: яхонт, смарагд, адамант, изумруд; яспис, берилл, кахолонг, лазурит; оникс, гранат, падпараджа, топаз; мрамор, сапфир, родонит, малахит; сардер, кремень, турмалин…', 'Разговоры о камне, Никулина М.');

-- --------------------------------------------------------

--
-- Table structure for table `special_offer`
--

CREATE TABLE `special_offer` (
  `product_id` int(10) NOT NULL,
  `special_type_id` int(10) NOT NULL,
  `summ` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `special_type`
--

CREATE TABLE `special_type` (
  `special_type_id` int(10) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `second_name`, `phone`, `address`, `email`, `login`, `password`, `role`) VALUES
(1, 'name1', NULL, 0, 'adsdas', '123@mail.ru', 'user1', '123123', 'user'),
(2, 'name2', NULL, 0, 'adsdas', '1234@mail.ru', 'user2', '$2y$10$P9HJFh9lkJli4c1jZ6cEKe6U3t8d1Lr.V2AKonVrSS8b3liMoXZUe', 'user'),
(4, 'tony', NULL, 0, 'ульяновск', 'tony201994@mail.ru', 'tony', '$2y$10$OeUUG.Y2ciNeHlwYxa6TSOVkw5CfBJUnM6WqOEEj/Anf45qxLnTni', 'user'),
(5, 'tony23', NULL, 0, '22sdafsdfsdf', 'tony23201994@mail.ru', 'tony213', '$2y$10$AZaTNKHKgwq99fr4fFdKqui2igXsDNOep6vYlziDIibrTPSyJDRs.', 'user'),
(6, 'tony', NULL, 0, 'Ленина 1', 'tony201994111@mail.ru', 'tony123', '$2y$10$AuVvBaBvwylqiCNFgRFptuyHCHcrrAPCAYHVPCyBSxhq4ZVJqUmE2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_type`
--
ALTER TABLE `cover_type`
  ADD PRIMARY KEY (`cover_type_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_offer`
--
ALTER TABLE `special_offer`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `special_type`
--
ALTER TABLE `special_type`
  ADD PRIMARY KEY (`special_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cover_type`
--
ALTER TABLE `cover_type`
  MODIFY `cover_type_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `special_offer`
--
ALTER TABLE `special_offer`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `special_type`
--
ALTER TABLE `special_type`
  MODIFY `special_type_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
