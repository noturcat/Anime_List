-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 06:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animelist`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime_lists`
--

CREATE TABLE `anime_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `is_watched` int(11) NOT NULL,
  `display_photo` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anime_lists`
--

INSERT INTO `anime_lists` (`id`, `title`, `is_watched`, `display_photo`, `genre`, `details`, `created_at`, `updated_at`) VALUES
(6, '91 days', 0, '', 'Drama', '', '2023-03-20 04:51:06', '2023-04-02 06:32:38'),
(7, 'Ahiru no sora', 1, '', 'Sports', '', '2023-03-20 04:51:32', '2023-03-20 04:52:35'),
(8, 'Afro Samurai', 1, '', 'Action', 'Samurai', '2023-03-20 04:52:18', '2023-03-20 04:58:54'),
(9, 'Air Gear', 0, '', 'Comedy', '', '2023-03-20 04:52:48', '2023-03-20 04:52:48'),
(10, 'A couple of cuckoos', 0, '', 'Romcom', '', '2023-03-20 04:54:21', '2023-03-20 04:54:21'),
(11, '86', 0, '1680613125.jpg', 'Action', '', '2023-03-20 04:56:25', '2023-04-04 04:58:45'),
(12, 'Aharen-san Wa Hakarenai', 1, '1679987013.jpg', 'Romcom', '', '2023-03-20 04:56:39', '2023-03-27 23:03:33'),
(13, 'Amaama to inazuma', 0, '', '?', '', '2023-03-20 05:00:17', '2023-03-20 05:09:25'),
(14, 'Amaga brilliant park', 0, '', 'comedy', '', '2023-03-20 05:00:42', '2023-03-20 05:00:42'),
(15, 'Ame to kisari', 0, '', 'drama', '', '2023-03-20 05:00:57', '2023-03-20 05:00:57'),
(17, 'Anne Happy', 0, '', 'Comedy', '', '2023-03-20 05:16:58', '2023-03-20 05:16:58'),
(18, 'Akame Ga Kill', 1, '', 'Action', '', '2023-03-20 05:17:32', '2023-03-20 05:17:35'),
(19, 'Angel Beats', 1, '', 'Drama', '', '2023-03-20 05:18:54', '2023-03-20 05:20:28'),
(20, 'Anohana', 1, '', 'Drama', '', '2023-03-20 05:19:06', '2023-03-20 05:20:20'),
(21, 'Another', 1, '', 'Horror', '', '2023-03-20 05:19:38', '2023-03-20 05:20:23'),
(22, 'Aoashi', 1, '', 'Sports', '', '2023-03-20 05:19:51', '2023-03-28 08:18:48'),
(23, 'Ao No Exorcist', 1, '', 'Action', '', '2023-03-20 05:20:07', '2023-03-20 05:20:33'),
(24, 'Akashi Records', 0, '', 'Comedy', '', '2023-03-20 05:21:03', '2023-03-20 05:21:03'),
(25, 'Akatsuki No Yona', 0, '', '?', '', '2023-03-20 05:21:18', '2023-03-20 05:21:18'),
(26, 'Akudama Drive', 1, '', 'Action', '', '2023-03-20 05:21:30', '2023-03-20 05:22:33'),
(27, 'Akkin To Kanojo', 0, '', 'Romcom', '', '2023-03-20 05:21:41', '2023-03-20 05:21:41'),
(28, 'Armed Girls', 0, '', 'Comedy', '', '2023-03-20 05:22:04', '2023-03-20 05:22:04'),
(29, 'Amagamis Little Bear Chan', 0, '', 'Comedy', '', '2023-03-20 05:33:35', '2023-03-20 05:33:35'),
(31, 'Araiya San Ore To Aitsu', 0, '', '?', '', '2023-03-20 05:34:37', '2023-03-20 05:34:37'),
(32, 'Arakawa Under The Bridge', 0, '', 'Drama', '', '2023-03-20 05:34:52', '2023-03-20 05:34:52'),
(33, 'Arifureta', 1, '', 'Action', '', '2023-03-20 05:35:04', '2023-03-22 04:30:59'),
(34, 'Ascendance Of A Bookworm', 0, '', 'Slice Of Life', '', '2023-03-22 03:12:28', '2023-03-22 03:12:28'),
(35, 'Assasination Classroom', 1, '', 'Drama', '', '2023-03-22 04:23:45', '2023-03-22 04:24:17'),
(36, 'Assassins Pride', 0, '', 'Action', '', '2023-03-22 04:23:57', '2023-03-22 04:24:11'),
(37, 'Asobi Asobase', 1, '', 'Slice Of Life', '', '2023-03-22 04:24:27', '2023-03-22 04:31:33'),
(38, 'Aura:Koga Maryuin\'s Last War', 0, '', '?', '', '2023-03-22 04:24:35', '2023-03-22 04:24:35'),
(39, 'Azure Lane', 0, '', 'Action', '', '2023-03-22 04:24:43', '2023-03-22 04:24:43'),
(40, 'Babylon', 0, '', 'Action', '', '2023-03-22 04:24:54', '2023-03-22 04:25:02'),
(41, 'Baccano', 1, '', 'Mystery', '', '2023-03-22 04:25:19', '2023-03-22 04:31:46'),
(42, 'Baki The Grappler', 1, '', 'Action', '', '2023-03-22 04:25:28', '2023-03-22 04:30:52'),
(43, 'Bakuman', 0, '', 'Comedy', '', '2023-03-22 04:25:35', '2023-03-22 04:25:35'),
(44, 'Bakuten', 0, '', '?', '', '2023-03-22 04:25:41', '2023-03-22 04:25:41'),
(45, 'Battle In 5 Seconds', 1, '', 'Isekai', '', '2023-03-22 04:25:48', '2023-03-22 04:31:56'),
(46, 'Beastars', 0, '', 'Sci-fi', '', '2023-03-22 04:25:54', '2023-03-22 04:25:54'),
(47, 'Bem', 1, '', 'Action', 'monsters', '2023-03-22 04:26:13', '2023-03-22 04:31:22'),
(48, 'Ben-to', 1, '', 'Comedy', 'fight on a discounted ben-to', '2023-03-22 04:26:43', '2023-03-22 04:32:21'),
(49, 'Beelzebub', 1, '', 'Comedy', 'baby demon lord', '2023-03-22 04:26:58', '2023-03-22 04:32:01'),
(50, 'Beyond The Boundary', 1, '', 'Action', '', '2023-03-22 04:27:07', '2023-03-22 04:32:10'),
(51, 'Black And White Warrior', 0, '', '?', '', '2023-03-22 04:27:14', '2023-03-22 04:27:14'),
(52, 'Black Bullet', 1, '', 'Drama', '', '2023-03-22 04:27:26', '2023-03-22 04:32:05'),
(53, 'Black Cat', 0, '', '?', '', '2023-03-22 04:27:32', '2023-03-22 04:27:32'),
(54, 'Black Clover', 1, '', 'Action', '', '2023-03-22 04:27:38', '2023-03-22 04:32:31'),
(55, 'Bleach', 1, '', 'Action', '', '2023-03-22 04:27:47', '2023-03-22 04:32:39'),
(56, 'Blood Lad', 1, '', 'Action', 'vampire', '2023-03-22 04:28:12', '2023-03-22 04:31:10'),
(57, 'Blue Lock', 1, '', 'Sports', 'soccer', '2023-03-22 04:28:26', '2023-03-28 08:19:03'),
(58, 'Blue Period', 1, '', 'Slice Of Life', 'arts', '2023-03-22 04:28:50', '2023-03-22 04:32:35'),
(59, 'Boarding School Juliet', 0, '', '?', '', '2023-03-22 04:28:57', '2023-03-22 04:28:57'),
(60, 'Bofuri: I Dont Want To Get Hurt So Ill Max Out My Defense', 0, '', 'Isekai', '', '2023-03-22 04:29:07', '2023-03-28 09:16:01'),
(61, 'Boku No Hero Academia', 1, '', 'Action', '', '2023-03-22 04:29:15', '2023-03-22 04:32:46'),
(62, 'Boogiepop Phantom', 0, '', '?', '', '2023-03-22 04:29:25', '2023-03-22 04:29:25'),
(63, 'Rokka Braves Of The Six Flowers', 1, '', 'Action', 'strongest man', '2023-03-22 04:30:02', '2023-03-28 08:23:19'),
(64, 'Brotherhood: Final Fantasy Xv', 0, '', '?', '', '2023-03-22 04:30:13', '2023-03-22 04:30:13'),
(65, 'B The Beginning', 0, '', '?', '', '2023-03-22 04:30:20', '2023-03-22 04:30:20'),
(67, 'BTOOOM!', 1, '', 'Action', '', '2023-03-22 04:30:43', '2023-03-22 04:31:50'),
(72, 'Build Divide', 0, '', 'Slice Of Life', '', '2023-03-28 05:41:22', '2023-03-28 05:41:22'),
(73, 'Bungo Stray Dogs', 1, '', 'Action', '', '2023-03-28 05:41:29', '2023-03-28 08:19:27'),
(74, 'Bungo Stray Dogs', 1, '', 'Sports', '', '2023-03-28 05:41:35', '2023-03-28 08:20:00'),
(75, 'Cannon Buster', 0, '', 'Action', '', '2023-03-28 05:41:43', '2023-03-28 05:41:43'),
(76, 'Castlevania', 0, '', 'Scifi', '', '2023-03-28 05:41:55', '2023-03-28 05:41:55'),
(77, 'Cautious Hero', 1, '', 'Isekai', '', '2023-03-28 05:42:04', '2023-03-28 08:20:11'),
(78, 'Charlotte', 1, '', 'Action', '', '2023-03-28 05:42:19', '2023-03-28 08:23:47'),
(79, 'Children Of The Sea', 0, '', '?', '', '2023-03-28 05:42:26', '2023-03-28 05:42:26'),
(80, 'Chivalry Of Failed Knight', 0, '', '?', '', '2023-03-28 05:42:38', '2023-03-28 05:42:38'),
(81, 'Code Breaker', 0, '', '?', '', '2023-03-28 05:42:44', '2023-03-28 05:42:44'),
(82, 'Code Geass', 0, '', 'Action', '', '2023-03-28 05:42:53', '2023-03-28 05:42:53'),
(83, 'Corpse Party', 1, '', 'Gore', '', '2023-03-28 05:42:59', '2023-03-28 08:27:09'),
(84, 'Cyborg 009', 0, '', '?', '', '2023-03-28 06:01:11', '2023-03-28 06:01:11'),
(85, 'Daily Life Of The Immortal King', 1, '', 'Shounen', '', '2023-03-28 06:01:19', '2023-03-28 08:27:35'),
(86, 'Danganronpa', 1, '', 'Mystery', '', '2023-03-28 06:01:47', '2023-03-28 08:26:10'),
(87, 'Danmachi', 1, '', 'Adventure', '', '2023-03-28 06:02:05', '2023-03-28 08:28:16'),
(88, 'Darker Than Black', 0, '', 'Action', '', '2023-03-28 06:02:14', '2023-03-28 06:02:14'),
(89, 'Darling In The FranXX', 1, '', 'Romcom', '', '2023-03-28 06:02:39', '2023-03-28 08:26:27'),
(90, 'D Gray Man', 1, '', 'Adventure', '', '2023-03-28 06:04:36', '2023-03-28 08:29:31'),
(91, 'Darwins Game', 1, '', 'Action', '', '2023-03-28 06:04:41', '2023-03-28 08:28:37'),
(92, 'Deaimon', 0, '', 'Comedy', '', '2023-03-28 06:04:48', '2023-03-28 06:04:48'),
(93, 'Deadman Wonderland', 1, '', 'Mystery', '', '2023-03-28 06:05:01', '2023-03-28 08:45:06'),
(94, 'Death March', 0, '', '?', '', '2023-03-28 06:05:08', '2023-03-28 06:05:08'),
(95, 'Death Note', 1, '', 'Mystery', '', '2023-03-28 06:05:18', '2023-03-28 08:29:22'),
(96, 'Death Parade', 1, '', 'Mystery', '', '2023-03-28 06:05:59', '2023-03-28 08:20:23'),
(98, 'Demi-chan Wa Kataritai', 0, '', '?', '', '2023-03-28 06:25:07', '2023-03-28 06:25:07'),
(99, 'Demon King Daimao', 0, '', 'Comedy', '', '2023-03-28 06:25:18', '2023-03-28 06:25:18'),
(100, 'Demon Slayer', 1, '', 'Action', '', '2023-03-28 06:25:25', '2023-03-28 08:30:07'),
(101, 'Devil May Cry', 1, '', 'Action', '', '2023-03-28 06:25:39', '2023-03-28 08:28:23'),
(102, 'Devilman Crybaby', 0, '', 'Horror', '', '2023-03-28 06:26:39', '2023-03-28 06:26:39'),
(103, 'Devils Line', 1, '', 'Romance', '', '2023-03-28 06:27:35', '2023-03-28 08:35:23'),
(104, 'Domestic Kanojo', 1, '', 'Romance', '', '2023-03-28 06:27:46', '2023-03-28 08:30:36'),
(105, 'Dont Hurt Me, My Healer', 0, '', 'Adventure', '', '2023-03-28 06:27:55', '2023-03-28 06:27:55'),
(106, 'Dont Toy With Me Miss Nagatoro', 1, '', 'Romcom', '', '2023-03-28 06:28:02', '2023-03-28 08:30:46'),
(107, 'Dorohedoro', 1, '', 'Mystery', '', '2023-03-28 06:28:40', '2023-03-28 08:34:22'),
(108, 'Dororo', 1, '', 'Demon', '', '2023-03-28 06:28:46', '2023-03-28 08:19:17'),
(109, 'Dragon Ball', 0, '', 'Shounen', '', '2023-03-28 06:28:54', '2023-03-28 06:28:54'),
(110, 'Dragon Quest', 0, '', '?', '', '2023-03-28 06:28:59', '2023-03-28 06:28:59'),
(111, 'Dr Ramune', 1, '', 'Mystery', '', '2023-03-28 06:29:17', '2023-03-28 08:24:28'),
(112, 'Dr Stone', 1, '', 'Mystery', '', '2023-03-28 06:38:26', '2023-03-28 08:24:03'),
(113, 'Duke Of Death And His Maid', 0, '', 'Romcom', '', '2023-03-28 06:38:33', '2023-03-28 06:38:33'),
(114, 'Dumbell Nan Kilo Moteru?', 1, '', 'Sports', '', '2023-03-28 06:42:24', '2023-03-28 08:30:22'),
(115, 'Durarara', 1, '', 'Mystery', '', '2023-03-28 06:43:05', '2023-03-28 08:25:10'),
(116, 'Eminence In The Shadow', 1, '', 'Action', '', '2023-03-28 06:44:05', '2023-03-28 08:39:31'),
(117, 'Encouragement Of The Climb ‌engage Kiss', 0, '', 'Romcom', '', '2023-03-28 06:44:12', '2023-03-28 06:44:12'),
(118, 'Engaged To The Unidentified', 0, '', 'Romance', '', '2023-03-28 06:44:24', '2023-03-28 06:44:24'),
(119, 'Erased', 1, '', 'Mystery', '', '2023-03-28 06:44:33', '2023-03-28 08:36:34'),
(120, 'Eromanga Sensei', 0, '', 'Comedy', '', '2023-03-28 06:44:44', '2023-03-28 06:44:44'),
(121, 'Extraordinary Ones', 0, '', '?', '', '2023-03-28 06:44:51', '2023-03-28 08:41:04'),
(122, 'Eyeshield 21', 1, '', 'Sports', '', '2023-03-28 06:45:00', '2023-03-28 08:35:33'),
(123, 'Fabiniku', 0, '', '?', '', '2023-03-28 06:45:06', '2023-03-28 06:45:06'),
(124, 'Fairy Tail', 1, '', 'Shounen', '', '2023-03-28 06:45:12', '2023-03-28 08:27:49'),
(125, 'Fire Force', 1, '', 'Action', '', '2023-03-28 06:45:21', '2023-03-28 08:27:58'),
(126, 'Fireworks', 1, '', 'Romance', '', '2023-03-28 06:45:52', '2023-03-28 08:35:49'),
(127, 'Fullmetal Alchemist', 1, '', 'Shounen', '', '2023-03-28 06:45:59', '2023-03-28 08:36:51'),
(128, 'Flame Of Recca', 1, '', 'Action', '', '2023-03-28 06:46:12', '2023-03-28 08:28:06'),
(129, 'Fly Me To The Moon', 0, '', '?', '', '2023-03-28 06:46:26', '2023-03-28 06:46:26'),
(130, 'Full Dive', 0, '', '?', '', '2023-03-28 06:46:32', '2023-03-28 06:46:32'),
(131, 'Gabriel Dropout', 0, '', '?', '', '2023-03-28 06:46:50', '2023-03-28 06:46:50'),
(132, 'Gandare Doukichan', 0, '', '?', '', '2023-03-28 06:46:56', '2023-03-28 06:46:56'),
(133, 'Gakuen Babysitters', 1, '', 'Comedy', '', '2023-03-28 06:47:09', '2023-03-28 08:37:02'),
(134, 'Galko Chan', 0, '', '?', '', '2023-03-28 06:47:33', '2023-03-28 06:47:33'),
(135, 'Gamers!', 1, '', 'Comedy', '', '2023-03-28 06:47:49', '2023-03-28 08:38:11'),
(136, 'Gangsta', 1, '', 'Action', '', '2023-03-28 06:47:57', '2023-03-28 08:37:25'),
(137, 'Garden Of Sinners', 0, '', 'Drama', '', '2023-03-28 06:48:08', '2023-03-28 06:48:08'),
(138, 'Genius Prince', 0, '', '?', '', '2023-03-28 06:48:21', '2023-03-28 06:48:21'),
(139, 'Get Backers', 0, '', 'Comedy', '', '2023-03-28 06:48:36', '2023-03-28 06:48:36'),
(140, 'Gintama', 1, '', 'Comedy', '', '2023-03-28 06:48:42', '2023-03-28 08:27:42'),
(141, 'Grand Blue', 1, '', 'Comedy', '', '2023-03-28 06:48:52', '2023-03-28 08:38:02'),
(142, 'Grave Of Fireflies', 1, '', 'Drama', '', '2023-03-28 06:49:03', '2023-03-28 08:45:20'),
(143, 'Grimgar', 1, '', 'Adventure', '', '2023-03-28 06:49:13', '2023-03-28 08:34:56'),
(144, 'Guilty Crown', 1, '', 'Drama', '', '2023-03-28 06:49:23', '2023-03-28 08:23:52'),
(145, 'Guilty Crown', 1, '', 'Monste', '', '2023-03-28 07:05:04', '2023-03-28 08:41:12'),
(146, 'Golden Boy', 1, '', 'Comedy', '', '2023-03-28 07:05:14', '2023-03-28 08:37:12'),
(147, 'Golden Time', 1, '', 'Drama', '', '2023-03-28 07:05:22', '2023-03-28 08:39:59'),
(148, 'Gurren Lagann', 1, '', 'Scifi', '', '2023-03-28 07:05:43', '2023-03-28 08:37:48'),
(149, 'Hachi-nan Tte, Sore Wa Nai Deshou! Or The 8th Son? Are You Kidding Me?', 0, '', 'Action', '', '2023-03-28 07:06:21', '2023-03-28 07:06:21'),
(150, 'Haikyuu!', 1, '', 'Sports', '', '2023-03-28 07:06:32', '2023-03-28 08:39:40'),
(151, 'Hajime No Ippo', 1, '', 'Sports', '', '2023-03-28 07:06:50', '2023-03-28 08:39:50'),
(152, 'Hajimete No Gal', 1, '', 'Romance', '', '2023-03-28 07:06:57', '2023-03-28 08:41:34'),
(153, 'Hakata Tonkotso Ramen', 0, '', '?', '', '2023-03-28 07:07:07', '2023-03-28 08:25:32'),
(154, 'Handa Kun', 0, '', '?', '', '2023-03-28 07:07:18', '2023-03-28 07:07:18'),
(155, 'Hand Shakers', 0, '', '?', '', '2023-03-28 07:07:43', '2023-03-28 07:07:43'),
(156, 'Hell Girl', 0, '', 'Horror', '', '2023-03-28 07:07:52', '2023-03-28 07:07:52'),
(157, 'Hello World', 0, '', '?', '', '2023-03-28 07:08:02', '2023-03-28 07:08:02'),
(158, 'Heroman', 1, '', 'Drama', '', '2023-03-28 07:08:56', '2023-03-28 08:30:52'),
(159, 'Hero Return', 0, '', '?', '', '2023-03-28 07:09:09', '2023-03-28 07:09:09'),
(160, 'Hibike Ephonium', 0, '', '?', '', '2023-03-28 07:09:16', '2023-03-28 07:09:16'),
(161, 'High Rise Invasion', 0, '', 'Horror', '', '2023-03-28 07:09:23', '2023-03-28 07:09:23'),
(162, 'Hinamaru Kindergarten', 0, '', 'Comedy', '', '2023-03-28 07:24:10', '2023-03-28 07:24:10'),
(163, 'Hinomaruzumou', 1, '', 'Sports', '', '2023-03-28 07:24:18', '2023-03-28 08:34:46'),
(165, 'Hinamatsuri', 1, '', 'Comedy', '', '2023-03-28 07:24:38', '2023-03-28 08:34:37'),
(166, 'Higehiro', 0, '', 'Romcom', '', '2023-03-28 07:24:47', '2023-03-28 08:33:51'),
(167, 'Highschool Of The Dead', 1, '', 'Horror', '', '2023-03-28 07:25:04', '2023-03-28 08:31:09'),
(168, 'Horimiya', 1, '', 'Romance', '', '2023-03-28 07:25:14', '2023-03-28 08:37:38'),
(169, 'House Of Terror', 0, '', '?', '', '2023-03-28 07:25:47', '2023-03-28 07:25:47'),
(170, 'Housing Complex C', 0, '', 'Comedy', '', '2023-03-28 07:26:01', '2023-03-28 08:25:22'),
(171, 'How Not To Summon A Demon Lord', 0, '', 'Romcom', '', '2023-03-28 07:26:14', '2023-03-28 07:26:14'),
(172, 'How To Raise A Boring Gf', 0, '', 'Romcom', '', '2023-03-28 07:26:24', '2023-03-28 07:26:24'),
(173, 'Hunter X Hunter', 1, '', 'Shounen', '', '2023-03-28 07:26:35', '2023-03-28 08:38:29'),
(174, 'Hyouka', 1, '', 'Mystery', '', '2023-03-28 07:26:41', '2023-03-28 08:30:59'),
(175, 'Ikebukuro West Gate Park', 0, '', 'Slice Of Life', '', '2023-03-28 07:26:49', '2023-03-28 07:26:49'),
(176, 'Ikebukuro West Gate Park', 1, '', 'Horror', '', '2023-03-28 07:27:01', '2023-03-28 08:41:23'),
(177, 'Interviewing With Monster Girls', 0, '', 'Romcom', '', '2023-03-28 07:27:22', '2023-03-28 07:27:22'),
(178, 'Inuyasha', 0, '', 'Shounen', '', '2023-03-28 07:27:33', '2023-03-28 07:27:33'),
(179, 'Inuyashiki', 1, '', 'Scifi', '', '2023-03-28 07:27:43', '2023-03-28 08:32:53'),
(180, 'ID: Invaded', 0, '', 'Mystery', '', '2023-03-28 07:27:50', '2023-03-28 07:27:50'),
(181, 'Idoly Pride', 0, '', 'Comedy', '', '2023-03-28 07:28:21', '2023-03-28 07:28:21'),
(182, 'I Dont Like My Big Brother At All', 0, '', 'Comedy', '', '2023-03-28 07:28:29', '2023-03-28 07:28:29'),
(183, 'If It\'s For My Daughter, I\'d Even Defeat A Demon Lord', 1, '', 'Adventure', '', '2023-03-28 07:28:37', '2023-03-28 08:45:33'),
(184, 'Im Standing On A Million Lives', 0, '', 'Action', '', '2023-03-28 07:28:48', '2023-03-28 07:28:48'),
(185, 'Im Quitting Heroing', 1, '', 'Adventure', '', '2023-03-28 07:28:54', '2023-03-28 08:43:03'),
(186, 'Irregular At Magic Highschool', 1, '', 'Shounen', '', '2023-03-28 07:29:20', '2023-03-28 08:41:50'),
(187, 'Isekai Ojisan', 1, '', 'Comedy', '', '2023-03-28 07:29:26', '2023-03-28 08:42:01'),
(188, 'Ive Been Killing Slimes For 300 Yrs And Maxed Out My Level', 0, '', 'Adventure', '', '2023-03-28 07:29:35', '2023-03-28 07:29:35'),
(189, 'Iwa Kakeeu Sports Climbing', 0, '', 'Sports', '', '2023-03-28 07:29:45', '2023-03-28 07:29:45'),
(190, 'Jaku Chara Tomozaki Kun', 0, '', '?', '', '2023-03-28 07:29:52', '2023-03-28 07:29:52'),
(191, 'Jojo\'s Bizzare', 1, '', 'Action', '', '2023-03-28 07:29:58', '2023-03-28 08:43:23'),
(192, 'Joker Game', 0, '', '?', '', '2023-03-28 07:30:09', '2023-03-28 08:25:49'),
(193, 'Josee, Tiger And The Fish', 1, '', 'Romcom', '', '2023-03-28 07:46:03', '2023-03-28 08:42:09'),
(194, 'Jujutsu Kaisen', 1, '', 'Mystery', '', '2023-03-28 07:47:39', '2023-03-28 08:33:00'),
(195, 'Juni Taisen', 0, '', '?', '', '2023-03-28 07:49:08', '2023-03-28 07:49:08'),
(196, 'Junji Ito Collection', 0, '', 'Horror', '', '2023-03-28 07:49:17', '2023-03-28 07:49:17'),
(197, 'Just Because', 0, '', '?', '', '2023-03-28 07:49:25', '2023-03-28 07:49:25'),
(198, 'Kageki Shoujo', 0, '', '?', '', '2023-03-28 07:49:33', '2023-03-28 07:49:33'),
(199, 'Kage No Jitsuryokusha Ni Naritakute', 0, '', '?', '', '2023-03-28 07:49:43', '2023-03-28 07:49:43'),
(200, 'Kaichou Wa Maid Sama', 0, '', 'Comedy', '', '2023-03-28 07:50:02', '2023-03-28 07:50:02'),
(201, 'Kaifuku Jutsushi No Yarinaoshi', 0, '', '?', '', '2023-03-28 07:50:11', '2023-03-28 07:50:11'),
(202, 'Kaizoku', 0, '', '?', '', '2023-03-28 07:50:16', '2023-03-28 07:50:16'),
(203, 'Kaizoku Oujo', 0, '', '?', '', '2023-03-28 08:09:22', '2023-03-28 08:09:22'),
(204, 'Kaguya Sama Love Is War', 1, '', 'Romcom', '', '2023-03-28 08:09:31', '2023-03-28 08:42:52'),
(205, 'Kanojo To Kanojo No Neko', 1, '', 'Pet', '', '2023-03-28 08:09:44', '2023-03-28 08:34:09'),
(206, 'Katekyo Hitman Reborn!', 1, '', 'Shounen', '', '2023-03-28 08:09:57', '2023-03-28 08:42:36'),
(207, 'Katsugeki Touken Ranbu', 0, '', '?', '', '2023-03-28 08:10:05', '2023-03-28 08:10:05'),
(208, 'Kakegurui', 1, '', 'Gamble', '', '2023-03-28 08:10:28', '2023-03-28 08:42:21'),
(209, 'Kakushigoto', 0, '', '?', '', '2023-03-28 08:10:34', '2023-03-28 08:10:34'),
(210, 'Karakuri Circus', 0, '', 'Mystery', '', '2023-03-28 08:10:40', '2023-03-28 08:10:40'),
(211, 'Keep Your Hands Off Eizouken', 0, '', 'Comedy', '', '2023-03-28 08:11:24', '2023-03-28 08:11:24'),
(212, 'Kemono Jihen', 1, '', 'Horror', '', '2023-03-28 08:11:36', '2023-03-28 08:38:51'),
(213, 'Kekkai Sensen', 1, '', 'Shounen', '', '2023-03-28 08:11:45', '2023-03-28 08:42:41'),
(214, 'Kekkaishi', 1, '', 'Mystery', '', '2023-03-28 08:12:03', '2023-03-28 08:42:29'),
(215, 'Kenichi: The Mightiest Disciple', 0, '', '?', '', '2023-03-28 08:12:11', '2023-03-28 08:12:11'),
(216, 'Kengan Ashura', 1, '', 'Martial Arts', '', '2023-03-28 08:12:22', '2023-03-28 08:43:16'),
(217, 'Killing Bites', 0, '', 'Action', '', '2023-03-28 08:12:32', '2023-03-28 08:12:32'),
(218, 'Kill Me Baby', 0, '', '?', '', '2023-03-28 08:12:46', '2023-03-28 08:12:46'),
(219, 'Kiniro Mosaic‌', 0, '', '?', '', '2023-03-28 08:12:54', '2023-03-28 08:12:54'),
(220, 'Kino\'s Journey The Beautiful World', 0, '', 'Adventure', '', '2023-03-28 08:13:02', '2023-03-28 22:57:29'),
(221, 'Parasyte', 1, '', 'Scifi', '', '2023-03-28 08:13:24', '2023-03-28 08:23:15'),
(222, 'Kimi No Na Wa', 1, '', 'Drama', '', '2023-03-28 08:13:37', '2023-03-28 08:26:03'),
(223, 'Kimisen', 0, '', '?', '', '2023-03-28 08:13:44', '2023-03-28 08:13:44'),
(224, 'Kimi Wa Kanata Over The Sky', 0, '', '?', '', '2023-03-28 08:13:54', '2023-03-28 08:13:54'),
(225, 'Kimi To Boku', 0, '', '?', '', '2023-03-28 08:14:05', '2023-03-28 08:14:05'),
(226, 'Kimono Jihen', 1, '', 'Horror', '', '2023-03-28 08:14:42', '2023-03-28 08:38:37'),
(227, 'Knights And Magic', 0, '', '?', '', '2023-03-28 08:14:49', '2023-03-28 08:14:49'),
(228, 'Kiss Him Not Me', 0, '', 'Romcom', '', '2023-03-28 08:15:01', '2023-03-28 08:15:01'),
(229, 'Kiznaiver', 0, '', '?', '', '2023-03-28 08:15:06', '2023-03-28 08:15:06'),
(230, 'Kobayashi Maid Sama', 1, '', 'Comedy', '', '2023-03-28 08:15:16', '2023-03-28 08:31:22'),
(231, 'Koi To Uso', 1, '', 'Romcom', '', '2023-03-28 08:15:39', '2023-03-28 08:24:16'),
(232, 'Kokkoku', 0, '', '?', '', '2023-03-28 08:15:44', '2023-03-28 08:15:44'),
(233, 'Komi Cant Communicate', 1, '', 'Romcom', '', '2023-03-28 08:15:58', '2023-03-28 08:23:32'),
(234, 'Kono Oto Tomare', 0, '', '?', '', '2023-03-28 08:16:08', '2023-03-28 08:16:08'),
(235, 'Kono Sekai No Katasumini', 0, '', '?', '', '2023-03-28 08:16:17', '2023-03-28 08:16:17'),
(236, 'Kono Suba', 1, '', 'Comedy', '', '2023-03-28 08:16:31', '2023-03-28 08:23:27'),
(237, 'Kotaro Lives Alone', 0, '', 'Drama', '', '2023-03-28 08:16:40', '2023-03-28 08:16:40'),
(238, 'K Project', 0, '', '?', '', '2023-03-28 08:16:52', '2023-03-28 08:16:52'),
(239, 'K Return Of Kings', 0, '', '?', '', '2023-03-28 08:17:01', '2023-03-28 08:17:01'),
(240, 'Kurokami', 0, '', '?', '', '2023-03-28 08:17:08', '2023-03-28 08:17:08'),
(241, 'Kuroko No Basket', 1, '', 'Sports', '', '2023-03-28 08:17:15', '2023-03-28 08:21:18'),
(242, 'Kuzu No Honkai', 0, '', '?', '', '2023-03-28 08:17:22', '2023-03-28 08:17:22'),
(244, 'Deca Dence', 0, '', 'Action', '', '2023-03-28 08:21:11', '2023-03-28 08:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_12_115924_create_anime_lists_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chezter', 'catneko69@gmail.com', NULL, '$2y$10$Xti1ueNKq./qyU4EoxZdYOVV7K4hIc.b5cwOX9yZBVdU9YdkTKCTy', NULL, '2023-04-01 06:12:11', '2023-04-01 06:12:11'),
(2, 'chez', 'cheztercustodio@gmail.com', NULL, '$2y$10$PBfFciIf2hL.x1Z0Gg1RIu.TDFypIzpwC8RfS4655MEBJxK/CGP76', NULL, '2023-04-01 07:55:29', '2023-04-01 07:55:29'),
(3, 'cat', 'catdio@gmail.com', NULL, '$2y$10$T9lqbT.VFT5xrFNpBiyN/OJLJpzAUD3qgJwW594WuGjiKiC8.uBrO', NULL, '2023-04-01 08:02:46', '2023-04-01 08:02:46'),
(4, 'meow', 'maw@gmail.com', NULL, '$2y$10$Og02ZA14o81xhIdgIrgsyeOV5gPrzFmc1nwV93wMCe9fM72HCXX2q', NULL, '2023-04-01 08:09:17', '2023-04-01 08:09:17'),
(5, 'meow', 'massssw@gmail.com', NULL, '$2y$10$TeJKLXMPzfhxresflalz4esFyzX3YZVLsUbCnoW9aReNUkXMeCAJW', NULL, '2023-04-01 08:09:56', '2023-04-01 08:09:56'),
(6, 'mirei', 'mirei@gmail.com', NULL, '$2y$10$sy7XUVXsnFlDboKEkTVjvOOzmMZnrkVHbcC4lvmSW2THyt1UCPdAC', NULL, '2023-04-02 06:52:43', '2023-04-02 06:52:43'),
(7, 'michie', 'michie@gmail.com', NULL, '$2y$10$OcUZ8WJGmLcMqNhprV7LDeR.JHT2a4f833OH5oUS3Q.VYFycPBkx.', NULL, '2023-04-02 06:55:07', '2023-04-02 06:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime_lists`
--
ALTER TABLE `anime_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime_lists`
--
ALTER TABLE `anime_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
