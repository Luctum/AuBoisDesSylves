-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 02 Novembre 2016 à 18:36
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `au_bois_des_sylves`
--

CREATE DATABASE IF NOT EXISTS `au_bois_des_sylves` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `au_bois_des_sylves`;

-- --------------------------------------------------------

--
-- Structure de la table `bs_categories`
--

DROP TABLE IF EXISTS `bs_categories`;
CREATE TABLE `bs_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_categories`
--

INSERT INTO `bs_categories` (`id`, `name`) VALUES
(1, 'Statues'),
(2, 'Colliers'),
(3, 'Bagues');

-- --------------------------------------------------------

--
-- Structure de la table `bs_contents`
--

DROP TABLE IF EXISTS `bs_contents`;
CREATE TABLE `bs_contents` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_contents`
--

INSERT INTO `bs_contents` (`id`, `id_product`, `id_order`, `quantity`) VALUES
(1, 1, 1, 5),
(2, 3, 2, 1),
(3, 2, 3, 10),
(4, 3, 4, 3),
(5, 4, 5, 1),
(6, 2, 4, 1),
(7, 5, 2, 1),
(8, 2, 2, 3),
(9, 1, 1, 4),
(10, 3, 2, 3),
(11, 117, 69, 97),
(12, 6, 48, 43),
(13, 76, 153, 40),
(14, 189, 104, 42),
(15, 7, 129, 85),
(16, 188, 13, 46),
(17, 58, 131, 91),
(18, 63, 195, 34),
(19, 135, 10, 31),
(20, 59, 60, 10),
(21, 121, 110, 38),
(22, 62, 63, 23),
(23, 165, 183, 32),
(24, 69, 8, 59),
(25, 41, 41, 57),
(26, 63, 131, 59),
(27, 195, 173, 15),
(28, 143, 188, 97),
(29, 74, 11, 94),
(30, 79, 13, 22),
(31, 172, 81, 98),
(32, 4, 28, 11),
(33, 130, 138, 2),
(34, 195, 177, 27),
(35, 90, 44, 23),
(36, 114, 97, 67),
(37, 15, 191, 5),
(38, 117, 7, 91),
(39, 56, 12, 96),
(40, 74, 68, 37),
(41, 17, 105, 7),
(42, 50, 143, 66),
(43, 10, 158, 46),
(44, 75, 56, 19),
(45, 111, 181, 23),
(46, 61, 179, 52),
(47, 56, 128, 9),
(48, 153, 198, 5),
(49, 35, 181, 70),
(50, 9, 170, 21),
(51, 21, 151, 98),
(52, 146, 106, 47),
(53, 73, 130, 99),
(54, 92, 183, 98),
(55, 106, 165, 24),
(56, 83, 194, 67),
(57, 146, 90, 44),
(58, 162, 141, 57),
(59, 107, 82, 14),
(60, 198, 46, 63),
(61, 16, 23, 86),
(62, 132, 106, 70),
(63, 72, 30, 93),
(64, 196, 102, 14),
(65, 124, 193, 1),
(66, 56, 3, 29),
(67, 28, 136, 80),
(68, 88, 62, 10),
(69, 123, 101, 23),
(70, 52, 172, 98),
(71, 45, 25, 51),
(72, 74, 83, 64),
(73, 42, 150, 97),
(74, 34, 142, 50),
(75, 105, 72, 86),
(76, 90, 129, 37),
(77, 39, 135, 11),
(78, 61, 194, 65),
(79, 109, 133, 77),
(80, 121, 36, 89),
(81, 13, 160, 43),
(82, 17, 6, 29),
(83, 167, 129, 75),
(84, 61, 98, 77),
(85, 89, 48, 86),
(86, 171, 127, 32),
(87, 167, 133, 39),
(88, 134, 125, 61),
(89, 164, 113, 59),
(90, 157, 34, 34),
(91, 70, 22, 16),
(92, 86, 41, 86),
(93, 119, 131, 65),
(94, 166, 23, 81),
(95, 116, 49, 9),
(96, 84, 163, 70),
(97, 170, 73, 56),
(98, 32, 37, 53),
(99, 93, 160, 78),
(100, 78, 24, 35),
(101, 22, 74, 25),
(102, 22, 126, 55),
(103, 71, 100, 11),
(104, 47, 17, 84),
(105, 34, 196, 10),
(106, 151, 174, 40),
(107, 189, 169, 63),
(108, 180, 186, 5),
(109, 62, 65, 76),
(110, 29, 35, 13),
(111, 156, 34, 85),
(112, 200, 73, 82),
(113, 25, 48, 3),
(114, 91, 178, 52),
(115, 138, 27, 2),
(116, 121, 154, 20),
(117, 19, 41, 60),
(118, 48, 105, 86),
(119, 39, 136, 61),
(120, 60, 1, 61),
(121, 139, 194, 80),
(122, 53, 67, 3),
(123, 153, 69, 64),
(124, 72, 173, 47),
(125, 24, 151, 5),
(126, 124, 192, 24),
(127, 78, 150, 50),
(128, 154, 72, 51),
(129, 85, 69, 8),
(130, 70, 53, 12),
(131, 87, 172, 36),
(132, 139, 141, 31),
(133, 34, 113, 87),
(134, 78, 182, 9),
(135, 164, 86, 62),
(136, 84, 5, 9),
(137, 152, 65, 13),
(138, 148, 178, 41),
(139, 171, 65, 55),
(140, 84, 137, 53),
(141, 176, 79, 48),
(142, 197, 27, 49),
(143, 93, 102, 15),
(144, 70, 63, 82),
(145, 83, 171, 39),
(146, 95, 187, 36),
(147, 22, 170, 74),
(148, 26, 8, 65),
(149, 183, 131, 27),
(150, 42, 200, 21),
(151, 31, 190, 89),
(152, 136, 51, 67),
(153, 133, 129, 26),
(154, 115, 163, 38),
(155, 30, 114, 65),
(156, 23, 86, 24),
(157, 91, 36, 24),
(158, 117, 111, 47),
(159, 46, 71, 22),
(160, 21, 73, 14),
(161, 6, 134, 62),
(162, 195, 113, 37),
(163, 163, 188, 76),
(164, 70, 92, 77),
(165, 77, 138, 78),
(166, 142, 34, 13),
(167, 175, 160, 92),
(168, 69, 131, 48),
(169, 163, 171, 22),
(170, 81, 165, 97),
(171, 145, 96, 24),
(172, 71, 59, 48),
(173, 22, 180, 76),
(174, 81, 172, 2),
(175, 11, 172, 46),
(176, 143, 29, 19),
(177, 129, 48, 15),
(178, 62, 153, 77),
(179, 39, 116, 6),
(180, 102, 19, 62),
(181, 44, 34, 48),
(182, 64, 12, 7),
(183, 53, 125, 23),
(184, 124, 89, 78),
(185, 18, 124, 17),
(186, 177, 40, 47),
(187, 38, 35, 41),
(188, 41, 168, 7),
(189, 5, 106, 3),
(190, 190, 189, 66),
(191, 194, 94, 35),
(192, 38, 67, 80),
(193, 164, 183, 75),
(194, 132, 60, 2),
(195, 10, 51, 81),
(196, 65, 108, 88),
(197, 142, 7, 25),
(198, 32, 37, 97),
(199, 188, 43, 22),
(200, 161, 179, 32);

-- --------------------------------------------------------

--
-- Structure de la table `bs_orders`
--

DROP TABLE IF EXISTS `bs_orders`;
CREATE TABLE `bs_orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_edited` datetime DEFAULT NULL,
  `date_cancelled` datetime DEFAULT NULL,
  `id_state` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_orders`
--

INSERT INTO `bs_orders` (`id`, `id_user`, `date_created`, `date_edited`, `date_cancelled`, `id_state`) VALUES
(1, 1, '2016-10-18 00:00:00', '2016-10-19 00:00:00', NULL, 2),
(2, 2, '2016-10-01 00:00:00', NULL, NULL, 2),
(3, 1, '2016-10-04 00:00:00', '2016-10-05 00:00:00', '2016-10-12 00:00:00', 1),
(4, 4, '2016-10-30 14:20:40', NULL, NULL, 1),
(5, 5, '2016-10-30 14:20:40', '2016-10-14 00:00:00', NULL, 1),
(6, 148, '2016-02-23 21:32:52', '2016-05-13 12:32:48', null, 1),
(7, 178, '2016-03-30 15:15:01', '2016-03-15 22:07:25', null, 1),
(8, 100, '2016-04-21 13:25:02', '2016-03-09 11:15:08', null, 2),
(9, 165, '2016-09-18 20:56:00', null, null, 2),
(10, 102, '2016-02-27 01:36:59', null, null, 1),
(11, 156, '2016-03-15 11:08:42', null, null, 1),
(12, 59, '2016-07-24 11:08:57', '2016-04-21 17:37:42', '2016-10-13 17:01:20', 2),
(13, 157, '2016-01-27 03:23:57', '2016-08-02 10:20:23', null, 2),
(14, 153, '2016-06-10 04:37:03', '2016-07-14 16:03:02', null, 2),
(15, 86, '2015-11-14 17:15:27', null, '2016-03-21 16:19:40', 1),
(16, 140, '2016-01-27 14:12:49', '2016-04-02 17:34:12', null, 1),
(17, 93, '2016-09-13 06:27:36', '2016-02-01 21:26:26', null, 1),
(18, 3, '2016-09-02 15:29:09', '2016-04-09 19:16:19', null, 2),
(19, 142, '2016-09-03 10:51:49', '2016-10-12 04:50:24', null, 2),
(20, 58, '2016-06-27 17:03:01', null, null, 1),
(21, 70, '2016-09-07 13:28:56', '2015-12-04 11:47:02', null, 1),
(22, 87, '2015-11-27 12:44:21', '2016-08-01 16:59:34', '2015-11-09 18:31:00', 2),
(23, 164, '2016-03-27 05:42:38', '2016-06-13 10:32:03', '2015-12-05 19:53:07', 1),
(24, 92, '2016-09-10 19:00:05', '2016-08-28 04:35:48', null, 1),
(25, 64, '2015-12-13 19:20:28', '2016-09-30 21:42:18', null, 2),
(26, 53, '2016-04-10 09:37:16', '2015-11-18 01:06:33', '2016-05-08 05:11:22', 1),
(27, 5, '2016-08-28 06:18:30', '2016-03-24 02:14:21', null, 2),
(28, 33, '2016-09-18 09:51:17', '2016-08-07 17:08:56', null, 2),
(29, 42, '2015-11-20 06:01:59', '2016-02-24 07:40:33', null, 1),
(30, 157, '2016-05-09 15:23:15', '2016-06-14 08:42:49', null, 1),
(31, 157, '2016-10-22 22:30:44', '2016-08-12 14:22:58', '2016-10-05 10:11:29', 2),
(32, 46, '2016-03-25 05:54:01', '2016-05-06 08:51:54', null, 2),
(33, 116, '2016-04-07 17:12:59', '2015-12-04 21:32:17', null, 1),
(34, 18, '2016-05-02 11:06:07', '2016-09-21 01:46:41', null, 2),
(35, 90, '2016-04-23 02:26:46', null, null, 1),
(36, 110, '2015-12-24 17:02:49', '2015-11-07 15:14:34', null, 1),
(37, 107, '2016-08-16 13:03:48', '2016-07-20 01:59:32', null, 2),
(38, 127, '2016-07-19 20:35:16', '2016-01-31 07:38:01', null, 1),
(39, 78, '2016-04-17 01:11:11', '2016-06-16 12:42:00', null, 2),
(40, 190, '2016-10-01 16:29:43', '2016-03-22 02:22:32', '2016-10-15 09:27:15', 2),
(41, 139, '2016-10-08 08:11:29', '2016-08-03 11:28:54', null, 1),
(42, 33, '2016-09-03 01:33:21', '2016-05-19 10:45:25', null, 1),
(43, 189, '2016-05-19 16:06:45', '2016-09-23 02:47:29', '2016-05-12 19:33:46', 1),
(44, 147, '2015-12-26 15:45:41', '2016-05-16 00:35:58', null, 1),
(45, 28, '2016-07-05 21:36:47', '2016-05-30 07:37:24', '2015-12-20 10:01:05', 1),
(46, 179, '2016-09-05 11:46:53', null, '2016-08-01 23:29:18', 2),
(47, 129, '2016-08-21 17:03:04', null, null, 1),
(48, 179, '2016-04-26 08:31:24', '2015-12-25 08:25:39', null, 1),
(49, 188, '2016-08-29 22:48:00', '2016-02-23 08:56:31', null, 2),
(50, 187, '2016-07-07 21:33:45', '2016-08-16 17:34:45', '2016-04-05 00:34:18', 2),
(51, 29, '2016-07-13 12:42:35', '2015-12-11 23:27:06', null, 1),
(52, 45, '2016-01-08 02:52:59', '2016-01-23 17:30:35', null, 1),
(53, 174, '2016-02-23 15:33:27', '2016-02-01 14:37:08', '2016-04-20 17:42:43', 2),
(54, 59, '2016-08-22 13:31:17', '2016-09-15 14:10:43', '2016-01-07 00:59:57', 2),
(55, 3, '2015-11-07 23:34:17', '2016-03-27 06:28:12', null, 2),
(56, 23, '2015-11-16 14:09:13', null, '2016-03-26 20:06:26', 2),
(57, 153, '2016-01-17 18:16:48', '2016-02-15 06:38:46', null, 2),
(58, 192, '2016-09-15 01:52:34', '2016-02-13 21:17:34', null, 1),
(59, 152, '2016-02-07 13:57:44', '2015-11-29 19:12:11', null, 1),
(60, 176, '2015-11-17 04:11:19', '2016-07-09 04:54:58', '2016-10-02 18:11:43', 1),
(61, 34, '2016-05-29 02:26:03', '2016-02-14 13:57:12', '2016-08-26 00:46:16', 1),
(62, 20, '2016-03-05 20:57:54', '2016-10-28 00:39:34', '2016-09-29 14:30:45', 1),
(63, 193, '2016-03-20 07:04:31', '2016-08-05 00:57:40', null, 2),
(64, 196, '2016-03-13 09:15:08', '2016-06-06 17:25:55', null, 2),
(65, 152, '2015-12-09 23:05:02', null, null, 2),
(66, 62, '2016-06-19 10:22:38', '2016-06-18 16:05:43', null, 2),
(67, 127, '2016-01-19 21:08:01', '2016-06-19 20:21:58', null, 2),
(68, 147, '2016-05-31 23:23:09', '2016-07-26 15:03:44', null, 1),
(69, 173, '2016-02-17 17:57:29', '2016-02-28 12:36:04', null, 2),
(70, 200, '2016-01-11 20:43:26', null, null, 2),
(71, 158, '2016-06-12 21:00:30', '2016-07-18 06:33:56', null, 2),
(72, 71, '2016-05-12 09:12:19', '2016-08-16 03:02:33', null, 1),
(73, 97, '2015-11-04 06:28:42', '2016-04-08 09:42:44', null, 2),
(74, 172, '2016-07-26 19:10:11', null, null, 2),
(75, 51, '2016-10-25 05:02:02', null, null, 2),
(76, 56, '2016-09-24 19:36:39', '2016-09-30 17:57:10', '2016-06-04 12:35:13', 2),
(77, 170, '2016-01-10 17:39:12', '2016-07-10 03:41:36', null, 2),
(78, 133, '2016-11-01 00:25:09', '2016-05-16 15:51:48', '2016-03-09 11:00:48', 2),
(79, 103, '2015-11-28 19:13:28', '2016-10-31 08:51:11', null, 2),
(80, 20, '2015-11-20 20:58:44', '2016-10-08 01:47:16', null, 1),
(81, 16, '2016-05-21 15:06:45', null, null, 2),
(82, 90, '2016-02-10 06:07:28', '2016-03-31 23:05:20', '2015-12-31 12:32:15', 1),
(83, 8, '2016-09-10 13:22:01', '2016-02-11 14:19:37', null, 2),
(84, 114, '2016-09-16 23:45:15', '2016-02-12 04:42:57', null, 1),
(85, 135, '2016-07-16 12:19:59', '2016-07-28 12:27:13', null, 2),
(86, 81, '2016-10-08 21:52:43', '2016-01-31 02:09:01', null, 2),
(87, 63, '2016-05-06 17:13:15', null, null, 1),
(88, 105, '2016-06-14 16:31:58', '2016-02-11 15:19:52', null, 1),
(89, 81, '2016-08-12 23:27:42', null, null, 2),
(90, 152, '2016-01-25 18:48:08', '2016-05-24 06:22:10', null, 1),
(91, 12, '2016-08-09 06:39:05', null, null, 2),
(92, 85, '2016-10-30 16:13:06', '2016-06-10 18:49:05', null, 1),
(93, 186, '2016-03-25 08:37:20', null, '2016-04-15 00:53:24', 1),
(94, 137, '2016-01-27 15:04:59', '2016-08-16 06:07:47', null, 1),
(95, 66, '2016-02-23 11:49:04', '2016-06-22 00:11:47', null, 2),
(96, 64, '2016-05-01 22:04:15', null, null, 2),
(97, 88, '2016-03-02 17:26:37', '2016-02-13 15:45:20', null, 2),
(98, 102, '2016-05-08 01:33:23', '2016-08-12 10:43:30', null, 2),
(99, 62, '2016-11-01 08:24:13', '2016-01-30 21:27:48', '2016-10-28 05:14:00', 1),
(100, 17, '2016-04-30 04:19:58', '2016-05-30 07:28:01', null, 2),
(101, 136, '2015-12-30 15:39:44', '2016-09-04 09:45:35', null, 2),
(102, 105, '2016-06-11 01:19:55', '2015-12-24 22:02:44', null, 2),
(103, 45, '2016-01-09 00:47:41', '2016-05-12 05:08:02', null, 1),
(104, 37, '2016-06-10 09:51:26', '2016-08-23 11:55:18', null, 2),
(105, 155, '2016-10-06 21:43:38', '2016-10-10 07:52:48', '2016-08-09 13:43:21', 1),
(106, 53, '2016-07-31 16:40:59', '2016-09-16 17:18:02', null, 2),
(107, 133, '2016-01-29 17:20:00', '2016-01-31 08:57:31', null, 1),
(108, 26, '2015-11-14 13:40:05', '2016-03-13 13:40:58', null, 2),
(109, 168, '2016-04-21 05:24:47', '2015-11-30 05:44:20', null, 1),
(110, 105, '2016-09-03 15:59:42', '2016-09-28 03:11:31', null, 1),
(111, 53, '2016-02-16 09:07:15', '2015-11-13 20:22:20', null, 1),
(112, 159, '2015-12-03 12:25:20', '2016-05-02 16:34:01', null, 1),
(113, 21, '2016-01-11 18:26:06', '2016-05-18 08:41:49', null, 2),
(114, 174, '2016-07-01 11:14:16', '2016-08-24 11:15:23', null, 1),
(115, 74, '2016-06-28 17:40:25', null, null, 1),
(116, 131, '2015-11-20 10:58:21', '2016-08-15 09:10:03', null, 2),
(117, 43, '2016-08-10 13:13:22', '2016-10-26 12:02:15', null, 1),
(118, 163, '2016-07-24 16:53:51', null, null, 2),
(119, 84, '2016-05-03 23:39:39', null, null, 2),
(120, 21, '2016-05-15 19:27:17', null, null, 1),
(121, 137, '2016-06-23 14:17:17', '2015-11-14 03:27:35', null, 1),
(122, 93, '2016-01-24 21:09:37', null, null, 1),
(123, 88, '2016-10-14 07:26:00', '2015-12-22 04:33:36', null, 1),
(124, 48, '2015-12-14 12:39:11', '2016-01-29 12:21:48', null, 2),
(125, 132, '2016-01-20 18:49:41', null, '2015-11-03 14:06:54', 2),
(126, 161, '2016-05-27 15:21:18', '2016-01-28 11:42:50', null, 2),
(127, 107, '2016-06-03 04:37:08', '2016-08-24 08:12:11', null, 2),
(128, 16, '2016-03-06 09:29:48', null, null, 1),
(129, 27, '2016-05-24 18:33:31', '2016-02-28 06:27:28', null, 1),
(130, 30, '2016-07-08 11:26:16', '2016-02-05 12:40:10', null, 2),
(131, 157, '2015-12-15 01:50:33', '2016-05-07 14:40:25', null, 1),
(132, 96, '2016-04-17 19:58:15', '2015-12-31 03:20:53', null, 1),
(133, 184, '2016-07-20 12:38:05', null, null, 2),
(134, 92, '2016-01-03 20:27:18', '2016-05-21 09:25:29', null, 2),
(135, 105, '2016-10-22 13:38:45', '2015-11-16 09:01:49', null, 1),
(136, 8, '2016-04-24 05:00:50', '2016-08-02 00:33:25', null, 2),
(137, 141, '2016-09-22 14:11:58', null, null, 1),
(138, 51, '2016-07-03 13:25:16', '2016-07-21 06:28:09', '2015-11-16 04:19:50', 1),
(139, 99, '2016-10-25 06:40:00', '2015-11-08 20:36:46', '2016-09-28 00:50:23', 1),
(140, 74, '2016-05-28 03:31:22', '2016-08-19 14:40:07', null, 1),
(141, 145, '2016-02-12 03:25:31', '2016-04-04 15:11:01', '2016-02-10 16:40:00', 2),
(142, 68, '2015-11-16 23:34:55', '2015-11-26 21:30:01', '2016-01-14 08:57:57', 2),
(143, 115, '2016-04-09 13:45:32', '2016-08-25 10:06:39', null, 2),
(144, 155, '2016-05-23 04:40:41', null, null, 2),
(145, 46, '2016-07-02 01:22:57', '2016-05-30 08:16:19', '2015-11-16 08:18:06', 1),
(146, 182, '2016-05-17 01:45:36', null, null, 2),
(147, 9, '2015-11-11 23:36:50', '2016-03-25 11:57:25', null, 2),
(148, 76, '2016-08-07 11:15:33', '2016-06-13 05:49:09', null, 2),
(149, 87, '2016-05-02 22:26:50', '2016-02-21 05:19:28', null, 2),
(150, 65, '2016-02-02 08:33:05', '2016-09-01 08:38:39', null, 1),
(151, 189, '2016-09-14 22:06:24', '2015-12-25 18:37:39', null, 1),
(152, 49, '2016-02-29 17:57:15', '2016-03-22 19:36:27', '2016-05-23 19:14:46', 2),
(153, 163, '2016-10-12 20:42:22', '2016-08-23 19:36:15', null, 1),
(154, 24, '2016-05-22 06:59:46', null, null, 1),
(155, 83, '2016-03-07 09:31:01', '2016-02-16 06:05:14', '2016-08-21 12:52:33', 1),
(156, 165, '2016-01-30 07:25:31', '2016-09-10 06:49:20', null, 2),
(157, 195, '2015-12-24 00:14:23', '2016-09-26 19:19:11', null, 2),
(158, 118, '2016-09-24 03:55:12', null, null, 1),
(159, 53, '2016-09-29 13:54:58', '2015-11-17 05:57:06', null, 2),
(160, 138, '2016-08-26 15:59:30', '2016-09-07 16:39:26', '2016-01-10 02:29:04', 1),
(161, 105, '2016-04-15 01:52:50', '2016-07-26 02:53:41', null, 2),
(162, 199, '2015-12-04 06:50:56', '2016-09-19 15:04:21', '2016-09-14 04:55:35', 1),
(163, 178, '2015-12-27 16:46:06', null, '2016-06-04 17:38:37', 1),
(164, 111, '2016-05-01 04:40:18', '2016-09-25 22:10:01', null, 1),
(165, 155, '2016-08-09 21:52:18', '2015-11-16 22:41:24', null, 2),
(166, 148, '2015-11-13 11:39:42', '2016-07-23 18:14:06', null, 2),
(167, 39, '2015-11-22 23:32:11', '2016-07-29 19:52:00', null, 2),
(168, 190, '2016-02-23 14:41:38', null, null, 1),
(169, 135, '2016-07-11 18:34:30', '2016-03-30 15:54:10', null, 2),
(170, 99, '2016-03-11 02:04:30', null, null, 1),
(171, 118, '2016-05-23 16:39:59', null, null, 1),
(172, 156, '2016-08-21 15:22:31', '2016-09-12 18:20:01', null, 1),
(173, 76, '2015-11-17 13:18:22', '2016-07-17 11:08:00', null, 2),
(174, 111, '2016-02-05 02:55:44', '2016-05-11 13:58:25', '2016-03-13 05:16:06', 2),
(175, 187, '2016-02-15 01:14:50', '2016-02-12 07:29:07', null, 2),
(176, 131, '2015-12-23 12:33:43', '2016-01-15 07:09:38', null, 1),
(177, 182, '2015-11-04 15:47:53', '2016-09-06 14:25:18', null, 1),
(178, 18, '2016-02-12 00:13:37', '2016-05-31 10:34:32', null, 1),
(179, 78, '2016-02-12 00:55:37', '2016-10-30 03:51:38', null, 2),
(180, 148, '2016-08-08 16:01:04', null, null, 2),
(181, 72, '2016-09-08 00:37:31', null, null, 1),
(182, 165, '2016-02-01 18:07:46', '2016-09-25 01:13:19', null, 1),
(183, 5, '2016-09-21 13:29:51', '2016-01-01 14:39:31', null, 2),
(184, 191, '2016-06-10 12:42:26', '2016-10-03 19:07:47', '2016-03-08 13:01:18', 1),
(185, 117, '2016-09-22 09:06:26', '2016-10-11 21:55:15', null, 1),
(186, 34, '2016-02-08 10:35:21', '2016-01-15 04:33:28', null, 1),
(187, 124, '2016-05-24 17:52:52', null, null, 2),
(188, 52, '2016-08-29 12:59:11', '2015-11-05 04:42:43', null, 2),
(189, 112, '2015-11-11 09:04:36', '2015-12-06 20:46:53', null, 1),
(190, 15, '2015-12-10 03:27:21', '2016-09-24 09:02:17', '2016-06-11 01:31:52', 1),
(191, 91, '2016-01-28 07:39:56', '2016-02-15 12:53:52', null, 2),
(192, 147, '2016-06-21 00:19:53', '2016-06-18 15:33:24', '2015-12-16 17:51:02', 2),
(193, 2, '2016-05-20 06:52:39', '2016-02-06 05:04:34', null, 1),
(194, 120, '2016-07-20 03:57:42', '2016-10-02 19:00:29', null, 1),
(195, 112, '2016-01-28 17:48:56', '2016-04-30 10:11:31', null, 1),
(196, 142, '2016-02-05 16:41:56', '2016-04-02 03:07:45', null, 1),
(197, 25, '2016-09-01 02:47:28', null, null, 2),
(198, 183, '2016-08-23 13:29:19', '2016-09-15 10:45:21', null, 1),
(199, 72, '2016-10-16 19:43:10', '2016-01-21 22:18:25', null, 1),
(200, 149, '2015-11-04 05:17:35', '2016-06-12 12:53:41', '2016-10-18 01:01:03', 2);


-- --------------------------------------------------------

--
-- Structure de la table `bs_products`
--

DROP TABLE IF EXISTS `bs_products`;
CREATE TABLE `bs_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `availability` tinyint(4) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_products`
-- availability > boolean ?

INSERT INTO `bs_products` (`id`, `name`, `description`, `id_category`, `price`, `availability`, `icon`) VALUES
(1, 'Statue Belle', 'Une bien belle statue qui saura satisfaire tous les amateurs de statues !', 1, 99999, 1, ''),
(2, 'Statue Moche', 'Une statue hideuse mais peu chère, tous le monde se l''arrache !', 1, 10, 0, ''),
(3, 'Collier de pâtes', 'Un collier fait des mains d''un artisan aguerri qui vous rappellera les plus beaux moments passés en compagnie de vos chérubins.', 2, 15, 1, ''),
(4, 'Bracelet en fil de saucisson', 'Un collier, en plus petit, et en moins cher !', 2, 1, 0, ''),
(5, 'L''unique', 'Y''en a qu''un seul.', 3, 45, 1, ''),
(6, 'Hatity', 'lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum', 1, 94, 0, ''),
(7, 'Prodder', 'hac habitasse platea dictumst etiam', 2, 89, 1, ''),
(8, 'Zamit', 'convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo', 1, 59, 0, ''),
(9, 'Otcom', 'rutrum neque aenean auctor gravida sem praesent id', 3, 30, 1, ''),
(10, 'Stronghold', 'libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet', 2, 36, 1, ''),
(11, 'Zathin', 'habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla', 2, 87, 1, ''),
(12, 'Lotstring', 'praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum', 3, 47, 0, ''),
(13, 'Voltsillam', 'turpis adipiscing lorem vitae mattis nibh ligula', 3, 76, 0, ''),
(14, 'Duobam', 'vel sem sed sagittis nam congue risus semper porta', 2, 79, 0, ''),
(15, 'Kanlam', 'sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui', 1, 88, 0, ''),
(16, 'Subin', 'diam vitae quam suspendisse potenti', 1, 83, 0, ''),
(17, 'Tempsoft', 'ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing', 2, 72, 0, ''),
(18, 'Bigtax', 'semper interdum mauris ullamcorper purus sit amet nulla quisque', 2, 93, 0, ''),
(19, 'Flowdesk', 'imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue', 3, 99, 1, ''),
(20, 'Gembucket', 'interdum eu tincidunt in leo maecenas pulvinar lobortis est', 3, 21, 0, ''),
(21, 'Temp', 'eget semper rutrum nulla nunc purus phasellus in', 3, 59, 0, ''),
(22, 'Andalax', 'in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis', 2, 44, 1, ''),
(23, 'Asoka', 'rutrum nulla tellus in sagittis dui vel nisl duis ac', 1, 70, 0, ''),
(24, 'Fixflex', 'rutrum nulla nunc purus phasellus in felis donec semper sapien', 3, 41, 1, ''),
(25, 'Namfix', 'nulla justo aliquam quis turpis eget elit sodales', 1, 91, 1, ''),
(26, 'Pannier', 'blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci', 1, 14, 1, ''),
(27, 'Pannier', 'cras pellentesque volutpat dui maecenas tristique est et', 2, 89, 0, ''),
(28, 'Konklab', 'pellentesque quisque porta volutpat erat', 2, 39, 1, ''),
(29, 'Aerified', 'ac lobortis vel dapibus at diam nam tristique tortor eu', 1, 62, 1, ''),
(30, 'Span', 'vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra', 2, 48, 0, ''),
(31, 'Solarbreeze', 'bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede', 2, 56, 0, ''),
(32, 'Stringtough', 'lectus pellentesque at nulla suspendisse potenti cras in purus', 3, 7, 0, ''),
(33, 'Job', 'justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing', 2, 62, 0, ''),
(34, 'Duobam', 'sed vestibulum sit amet cursus id turpis integer aliquet massa id', 1, 96, 0, ''),
(35, 'Bitwolf', 'venenatis turpis enim blandit mi in porttitor pede justo', 2, 45, 0, ''),
(36, 'Konklab', 'cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus', 3, 21, 1, ''),
(37, 'Sonair', 'nisl ut volutpat sapien arcu sed augue', 1, 50, 0, ''),
(38, 'Flexidy', 'id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam', 3, 32, 1, ''),
(39, 'Fintone', 'erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac', 1, 64, 0, ''),
(40, 'Voyatouch', 'arcu adipiscing molestie hendrerit at vulputate', 3, 23, 1, ''),
(41, 'Home Ing', 'eleifend luctus ultricies eu nibh quisque id justo sit amet', 3, 7, 1, ''),
(42, 'Ventosanzap', 'ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et', 1, 78, 1, ''),
(43, 'Flexidy', 'vestibulum ante ipsum primis in faucibus orci luctus', 2, 61, 0, ''),
(44, 'Rank', 'proin eu mi nulla ac enim', 1, 18, 1, ''),
(45, 'Fix San', 'donec semper sapien a libero nam dui proin leo odio porttitor id consequat in', 2, 90, 0, ''),
(46, 'Tresom', 'nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque', 3, 80, 1, ''),
(47, 'Bitwolf', 'cubilia curae donec pharetra magna vestibulum aliquet', 3, 35, 1, ''),
(48, 'Subin', 'felis fusce posuere felis sed lacus', 2, 72, 0, ''),
(49, 'Zontrax', 'ante ipsum primis in faucibus orci luctus', 1, 27, 1, ''),
(50, 'Keylex', 'congue eget semper rutrum nulla', 2, 65, 1, ''),
(51, 'Konklab', 'cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius', 1, 31, 1, ''),
(52, 'Kanlam', 'risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl', 2, 44, 1, ''),
(53, 'Overhold', 'ipsum ac tellus semper interdum mauris ullamcorper', 1, 56, 1, ''),
(54, 'Tampflex', 'in faucibus orci luctus et ultrices', 1, 97, 1, ''),
(55, 'Biodex', 'ultricies eu nibh quisque id', 1, 94, 1, ''),
(56, 'Ronstring', 'duis bibendum felis sed interdum venenatis turpis enim blandit', 3, 51, 1, ''),
(57, 'Pannier', 'suscipit ligula in lacus curabitur at ipsum', 3, 92, 0, ''),
(58, 'Fixflex', 'nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur', 1, 54, 1, ''),
(59, 'Flowdesk', 'magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non', 2, 99, 1, ''),
(60, 'Home Ing', 'eget eleifend luctus ultricies eu nibh quisque id justo', 2, 90, 0, ''),
(61, 'Temp', 'ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing', 2, 12, 1, ''),
(62, 'Zontrax', 'et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet', 3, 87, 0, ''),
(63, 'Transcof', 'nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et', 1, 54, 0, ''),
(64, 'Subin', 'convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel', 3, 49, 0, ''),
(65, 'It', 'mauris sit amet eros suspendisse accumsan tortor quis turpis', 3, 36, 1, ''),
(66, 'It', 'neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque', 2, 40, 0, ''),
(67, 'Trippledex', 'vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis', 2, 99, 0, ''),
(68, 'Subin', 'augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis', 1, 73, 0, ''),
(69, 'Bitchip', 'id massa id nisl venenatis lacinia', 3, 66, 0, ''),
(70, 'Voltsillam', 'platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget', 3, 15, 1, ''),
(71, 'Sonair', 'ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel', 1, 51, 0, ''),
(72, 'Bitwolf', 'posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis', 1, 86, 0, ''),
(73, 'Stringtough', 'nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis', 3, 11, 0, ''),
(74, 'Zaam-Dox', 'viverra eget congue eget semper rutrum nulla nunc purus', 1, 17, 1, ''),
(75, 'Fintone', 'consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius', 1, 86, 0, ''),
(76, 'Bytecard', 'tempus semper est quam pharetra magna ac', 1, 54, 1, ''),
(77, 'Zontrax', 'enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit', 2, 87, 0, ''),
(78, 'Zaam-Dox', 'ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo', 3, 22, 1, ''),
(79, 'Zathin', 'natoque penatibus et magnis dis parturient', 3, 60, 0, ''),
(80, 'Konklux', 'elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum', 2, 35, 0, ''),
(81, 'Zamit', 'quis odio consequat varius integer ac leo pellentesque ultrices mattis odio', 3, 71, 1, ''),
(82, 'Vagram', 'rhoncus sed vestibulum sit amet cursus id turpis integer', 1, 8, 1, ''),
(83, 'Fix San', 'et ultrices posuere cubilia curae duis faucibus', 3, 92, 1, ''),
(84, 'Mat Lam Tam', 'ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu', 1, 52, 0, ''),
(85, 'Stim', 'convallis nunc proin at turpis a pede', 1, 73, 1, ''),
(86, 'Home Ing', 'ac nulla sed vel enim sit amet nunc viverra dapibus nulla', 1, 10, 0, ''),
(87, 'Lotlux', 'nisl duis bibendum felis sed interdum venenatis turpis enim blandit', 2, 19, 0, ''),
(88, 'Ventosanzap', 'diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt', 3, 32, 0, ''),
(89, 'Namfix', 'vestibulum ante ipsum primis in faucibus orci luctus', 1, 99, 1, ''),
(90, 'Keylex', 'duis bibendum morbi non quam nec dui luctus rutrum nulla tellus', 1, 40, 1, ''),
(91, 'Bitchip', 'duis bibendum felis sed interdum venenatis turpis', 3, 52, 1, ''),
(92, 'Fixflex', 'elit proin interdum mauris non ligula pellentesque ultrices phasellus id', 2, 45, 1, ''),
(93, 'Stim', 'quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis', 1, 2, 1, ''),
(94, 'Redhold', 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi', 1, 73, 0, ''),
(95, 'Greenlam', 'ultrices erat tortor sollicitudin mi sit amet lobortis', 3, 22, 1, ''),
(96, 'Home Ing', 'ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue', 3, 23, 1, ''),
(97, 'Tin', 'cras in purus eu magna vulputate luctus cum sociis natoque penatibus', 1, 48, 0, ''),
(98, 'Asoka', 'velit donec diam neque vestibulum eget vulputate', 1, 25, 0, ''),
(99, 'Stronghold', 'eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue', 3, 53, 0, ''),
(100, 'Flexidy', 'natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum', 2, 39, 0, ''),
(101, 'Duobam', 'id nisl venenatis lacinia aenean', 1, 33, 1, ''),
(102, 'Aerified', 'vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas', 3, 87, 1, ''),
(103, 'Pannier', 'et commodo vulputate justo in', 2, 44, 0, ''),
(104, 'Domainer', 'sit amet turpis elementum ligula vehicula consequat morbi', 3, 65, 1, ''),
(105, 'Zaam-Dox', 'ornare consequat lectus in est risus auctor sed', 1, 71, 1, ''),
(106, 'Fix San', 'amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit', 1, 19, 0, ''),
(107, 'Regrant', 'ullamcorper augue a suscipit nulla', 2, 25, 0, ''),
(108, 'Zoolab', 'ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit', 3, 35, 0, ''),
(109, 'Zathin', 'consequat varius integer ac leo pellentesque', 2, 75, 1, ''),
(110, 'Home Ing', 'curabitur at ipsum ac tellus semper interdum', 2, 99, 0, ''),
(111, 'It', 'enim leo rhoncus sed vestibulum sit amet', 1, 50, 1, ''),
(112, 'Bigtax', 'morbi a ipsum integer a nibh in quis justo maecenas rhoncus', 2, 76, 1, ''),
(113, 'Wrapsafe', 'duis at velit eu est congue elementum', 2, 15, 1, ''),
(114, 'Home Ing', 'neque libero convallis eget eleifend luctus ultricies', 3, 86, 1, ''),
(115, 'Tempsoft', 'vitae nisl aenean lectus pellentesque eget nunc', 2, 80, 1, ''),
(116, 'Konklab', 'et tempus semper est quam pharetra magna ac consequat metus sapien', 2, 95, 1, ''),
(117, 'Flexidy', 'at nunc commodo placerat praesent', 1, 59, 0, ''),
(118, 'Viva', 'neque sapien placerat ante nulla justo aliquam quis turpis eget', 2, 35, 0, ''),
(119, 'Konklab', 'risus dapibus augue vel accumsan tellus nisi eu orci mauris', 3, 36, 1, ''),
(120, 'Domainer', 'molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget', 2, 28, 1, ''),
(121, 'Overhold', 'sed vestibulum sit amet cursus id', 1, 93, 1, ''),
(122, 'Ventosanzap', 'urna pretium nisl ut volutpat sapien arcu sed augue aliquam', 2, 44, 1, ''),
(123, 'Temp', 'tincidunt lacus at velit vivamus vel nulla', 2, 56, 0, ''),
(124, 'Kanlam', 'id luctus nec molestie sed justo pellentesque viverra', 3, 40, 1, ''),
(125, 'Domainer', 'turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas', 3, 46, 0, ''),
(126, 'Sub-Ex', 'orci luctus et ultrices posuere cubilia curae duis faucibus', 1, 52, 1, ''),
(127, 'Pannier', 'vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas', 1, 87, 0, ''),
(128, 'Fintone', 'vestibulum ante ipsum primis in faucibus orci luctus et', 2, 10, 1, ''),
(129, 'Wrapsafe', 'elit proin risus praesent lectus vestibulum quam', 1, 77, 1, ''),
(130, 'Trippledex', 'turpis adipiscing lorem vitae mattis nibh ligula', 2, 79, 0, ''),
(131, 'Sub-Ex', 'facilisi cras non velit nec', 2, 79, 0, ''),
(132, 'Redhold', 'imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam', 1, 68, 1, ''),
(133, 'Konklux', 'id luctus nec molestie sed justo', 3, 32, 1, ''),
(134, 'Subin', 'potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis', 2, 45, 1, ''),
(135, 'Fix San', 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus', 2, 25, 1, ''),
(136, 'Flowdesk', 'id ornare imperdiet sapien urna pretium nisl ut volutpat sapien', 1, 45, 1, ''),
(137, 'Stim', 'pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue', 1, 71, 0, ''),
(138, 'Fintone', 'sit amet eros suspendisse accumsan tortor quis', 1, 7, 1, ''),
(139, 'Andalax', 'accumsan tellus nisi eu orci', 3, 92, 0, ''),
(140, 'Bitchip', 'leo maecenas pulvinar lobortis est phasellus sit amet erat nulla', 2, 39, 1, ''),
(141, 'Stim', 'tincidunt ante vel ipsum praesent blandit lacinia', 2, 72, 1, ''),
(142, 'Redhold', 'metus vitae ipsum aliquam non mauris morbi non lectus', 3, 26, 0, ''),
(143, 'Voyatouch', 'vitae ipsum aliquam non mauris morbi', 3, 71, 1, ''),
(144, 'Pannier', 'nunc purus phasellus in felis donec semper sapien a libero', 1, 82, 0, ''),
(145, 'Viva', 'in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non', 3, 1, 1, ''),
(146, 'Tres-Zap', 'nunc rhoncus dui vel sem sed sagittis nam congue risus', 2, 82, 1, ''),
(147, 'Bigtax', 'ante nulla justo aliquam quis turpis eget', 3, 54, 1, ''),
(148, 'Bamity', 'ut ultrices vel augue vestibulum ante ipsum primis', 2, 2, 0, ''),
(149, 'Mat Lam Tam', 'eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien', 1, 5, 0, ''),
(150, 'It', 'nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie', 1, 48, 0, ''),
(151, 'Konklux', 'elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat', 3, 67, 0, ''),
(152, 'Viva', 'nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id', 2, 55, 0, ''),
(153, 'Alphazap', 'malesuada in imperdiet et commodo vulputate', 2, 2, 1, ''),
(154, 'Bamity', 'at vulputate vitae nisl aenean', 3, 89, 0, ''),
(155, 'Opela', 'amet cursus id turpis integer aliquet massa id lobortis', 3, 100, 1, ''),
(156, 'Transcof', 'orci eget orci vehicula condimentum curabitur in libero ut', 2, 15, 0, ''),
(157, 'Hatity', 'maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque', 1, 88, 1, ''),
(158, 'Sonair', 'viverra pede ac diam cras pellentesque', 3, 91, 1, ''),
(159, 'Zoolab', 'suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus', 2, 3, 1, ''),
(160, 'Sonsing', 'sit amet nulla quisque arcu libero rutrum ac lobortis', 3, 38, 0, ''),
(161, 'Duobam', 'consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius', 2, 50, 0, ''),
(162, 'Subin', 'blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est', 2, 84, 0, ''),
(163, 'Otcom', 'eros vestibulum ac est lacinia nisi venenatis', 2, 37, 0, ''),
(164, 'Overhold', 'sapien arcu sed augue aliquam erat', 3, 11, 1, ''),
(165, 'Zontrax', 'lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc', 2, 86, 1, ''),
(166, 'Flexidy', 'condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu', 2, 52, 1, ''),
(167, 'Holdlamis', 'quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum', 2, 84, 0, ''),
(168, 'Bigtax', 'duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel', 3, 94, 0, ''),
(169, 'Voyatouch', 'eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue', 1, 83, 1, ''),
(170, 'Ronstring', 'suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis', 3, 26, 0, ''),
(171, 'Alphazap', 'accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas', 1, 9, 1, ''),
(172, 'Andalax', 'porttitor lacus at turpis donec posuere', 3, 70, 0, ''),
(173, 'Temp', 'duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo', 3, 12, 1, ''),
(174, 'Viva', 'lacus curabitur at ipsum ac tellus semper', 3, 1, 0, ''),
(175, 'Transcof', 'ante vestibulum ante ipsum primis in', 1, 2, 0, ''),
(176, 'Alphazap', 'est congue elementum in hac habitasse platea dictumst morbi', 3, 16, 1, ''),
(177, 'Hatity', 'quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum', 3, 31, 0, ''),
(178, 'Ventosanzap', 'curabitur convallis duis consequat dui nec nisi', 3, 14, 0, ''),
(179, 'Asoka', 'est donec odio justo sollicitudin ut', 1, 35, 0, ''),
(180, 'Domainer', 'gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet', 1, 66, 0, ''),
(181, 'Biodex', 'arcu adipiscing molestie hendrerit at', 1, 89, 1, ''),
(182, 'Cookley', 'phasellus in felis donec semper sapien', 3, 57, 0, ''),
(183, 'Flexidy', 'aliquam lacus morbi quis tortor id', 2, 80, 1, ''),
(184, 'Transcof', 'at nulla suspendisse potenti cras in purus eu magna vulputate luctus', 1, 36, 1, ''),
(185, 'It', 'adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci', 1, 2, 0, ''),
(186, 'Ventosanzap', 'blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est', 3, 89, 1, ''),
(187, 'Lotstring', 'mattis egestas metus aenean fermentum donec ut mauris eget', 1, 84, 1, ''),
(188, 'Biodex', 'amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id', 3, 24, 0, ''),
(189, 'Bitwolf', 'nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam', 2, 65, 0, ''),
(190, 'Stronghold', 'est phasellus sit amet erat nulla tempus vivamus in', 2, 99, 0, ''),
(191, 'Cardguard', 'montes nascetur ridiculus mus etiam vel augue vestibulum', 2, 7, 0, ''),
(192, 'Quo Lux', 'ut nulla sed accumsan felis ut at dolor quis odio consequat varius', 3, 81, 0, ''),
(193, 'Tampflex', 'rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit', 3, 20, 1, ''),
(194, 'Toughjoyfax', 'volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam', 1, 73, 0, ''),
(195, 'Tampflex', 'praesent id massa id nisl', 1, 84, 0, ''),
(196, 'Fix San', 'nascetur ridiculus mus vivamus vestibulum sagittis', 1, 64, 0, ''),
(197, 'Job', 'est phasellus sit amet erat nulla tempus vivamus in felis eu', 3, 3, 1, ''),
(198, 'Sub-Ex', 'donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante', 3, 5, 1, ''),
(199, 'Quo Lux', 'nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros', 1, 87, 1, ''),
(200, 'Cookley', 'eu est congue elementum in hac habitasse platea dictumst morbi', 3, 1, 0, '');


-- --------------------------------------------------------

--
-- Structure de la table `bs_states`
--

DROP TABLE IF EXISTS `bs_states`;
CREATE TABLE `bs_states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_states`
--

INSERT INTO `bs_states` (`id`, `name`) VALUES
(1, 'En préparation'),
(2, 'Envoyé');

-- --------------------------------------------------------

--
-- Structure de la table `bs_users`
--

DROP TABLE IF EXISTS `bs_users`;
CREATE TABLE `bs_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` tinyint(4) NOT NULL DEFAULT '1',
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `suspensionDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_users`
--

INSERT INTO `bs_users` (`id`, `name`, `surname`, `mail`, `password`, `rank`, `address`, `city`, `postal_code`, `suspensionDate`) VALUES
(1, 'Rémi', 'Senfamiy', 'remi@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 1, '3 rue du flan', 'Rennes', 35000, NULL),
(2, 'Chuck', 'Norris', 'admin@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 0, '666 boulevard du poing', 'Dentaface', 66666, NULL),
(3, 'Lor''themar', 'Theron', 'bob@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 0, '1 rue de bob', 'Lune d''argent', 46800, NULL),
(4, 'Jean-Michel', 'Banni', 'ban@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 1, '356 impasse de la prison', 'Rennes', 35000, '2016-10-09 00:00:00'),
(5, 'Jean-User', 'Dupont', 'user@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 1, '7 quartier des oiseaux qui font cucuicui', 'Caen', 14000, NULL),
(6, 'Frédérique', 'Richards', 'nrichards5@mac.com', 'EUKCvPhAP', 0, '005 Prairieview Drive', 'Jūrat ash Sham‘ah', null, null),
(7, 'Joséphine', 'Rivera', 'krivera6@shinystat.com', 'aIJqoyHGCg', 0, '910 Monica Drive', 'Dajianchang', null, null),
(8, 'Dù', 'Sanders', 'psanders7@trellian.com', 'jPbrNTX0', 1, '89 Oakridge Point', 'Kario', null, '2016-03-23 16:58:26'),
(9, 'Marie-hélène', 'Ortiz', 'cortiz8@google.com.au', 'HHnGrsrf9RE', 1, '98072 Tennessee Hill', 'Moguqi', null, null),
(10, 'Gwenaëlle', 'Richardson', 'jrichardson9@unc.edu', 'q9DwPmEtFO', 1, '10014 Steensland Trail', 'Lübeck', '23568', null),
(11, 'Solène', 'Graham', 'mgrahama@xrea.com', 'TNMwfZ', 0, '9 Macpherson Alley', 'Huangmei', null, null),
(12, 'Åke', 'Jordan', 'ajordanb@sfgate.com', 'YEqZHpbxU', 1, '743 Waywood Drive', 'Kunwi', null, '2016-03-04 23:09:00'),
(13, 'Lóng', 'Wallace', 'gwallacec@domainmarket.com', 'DlFbcktuT6', 1, '3563 Ridge Oak Trail', 'Cijengkol', null, null),
(14, 'Eugénie', 'Miller', 'smillerd@cpanel.net', 'Xv63JODYi', 1, '6993 Claremont Hill', 'Ranchuelo', null, null),
(15, 'Maëlle', 'Lee', 'jleee@cocolog-nifty.com', 'YidjwyU', 0, '93 Grayhawk Point', 'Skara', '532 24', null),
(16, 'Håkan', 'Pierce', 'dpiercef@csmonitor.com', 's87Q0uj8', 0, '5634 Elgar Center', 'Sandefjord', '3249', null),
(17, 'Estève', 'Medina', 'emedinag@wikimedia.org', 'ymqJ1dG', 1, '268 Redwing Lane', 'Seulimeum', null, null),
(18, 'Nélie', 'Harvey', 'eharveyh@themeforest.net', 'd0TMV4XHkz50', 0, '7 Heath Road', 'Voyinka', null, null),
(19, 'Marie-thérèse', 'Kelly', 'lkellyi@arstechnica.com', 'YI2fOSUc0', 1, '42 Bellgrove Point', 'Gazanjyk', null, null),
(20, 'Kù', 'Cooper', 'hcooperj@deliciousdays.com', 'sH7UgwiKF', 1, '537 Tennyson Junction', 'Quito', null, null),
(21, 'Léana', 'Warren', 'cwarrenk@people.com.cn', 'Ut0NwT7ie', 1, '65223 Dapin Avenue', 'Huddinge', '141 48', null),
(22, 'Gisèle', 'Perez', 'nperezl@merriam-webster.com', 'kj8td2eXVT', 1, '669 Grover Crossing', 'Yelyzavethradka', null, null),
(23, 'Frédérique', 'Davis', 'tdavism@desdev.cn', 'DV8YYamS7SM', 1, '11926 Walton Drive', 'Marseille', '13298 CEDEX 20', null),
(24, 'Zoé', 'Tucker', 'atuckern@comsenz.com', 'QDaoFNz0i45', 0, '3719 Rigney Street', 'Canmang', null, null),
(25, 'Noëlla', 'Schmidt', 'gschmidto@weather.com', '7zfkWDSa', 1, '61162 Kropf Way', 'Piduhe', null, null),
(26, 'Björn', 'Schmidt', 'jschmidtp@etsy.com', 'wNcKUHLe', 1, '25159 Petterle Park', 'Colatina', null, null),
(27, 'Dà', 'Shaw', 'kshawq@printfriendly.com', 'k34IzJ0', 1, '75 Thackeray Alley', 'Arsen’yev', null, null),
(28, 'Loïs', 'Burton', 'wburtonr@google.es', 'XEeKcM', 1, '9438 Porter Parkway', 'Chebba', null, null),
(29, 'Anaïs', 'Williams', 'jwilliamss@meetup.com', 'AVDm32b4jF2', 0, '01 Pawling Lane', 'Songbo', null, null),
(30, 'Mylène', 'Richardson', 'crichardsont@time.com', 'J56fOQxU5n', 1, '41408 Tomscot Court', 'Nueva Italia', null, null),
(31, 'Thérèsa', 'Gutierrez', 'tgutierrezu@cdc.gov', 'uOoi2ws4bF', 0, '806 Goodland Place', 'Gambo', null, null),
(32, 'Loïc', 'Lee', 'jleev@dot.gov', 'pGGfrCdY6', 0, '9 Hollow Ridge Plaza', 'Pingdingbu', null, null),
(33, 'Maéna', 'Pierce', 'apiercew@examiner.com', 'fZJYANPdj8', 1, '4257 Blaine Drive', 'Sorocaba', null, null),
(34, 'Dorothée', 'Martin', 'vmartinx@lycos.com', 'BlN4sFRQEbF4', 1, '4 Little Fleur Point', 'Ciomas', null, null),
(35, 'Loïs', 'Hayes', 'jhayesy@comcast.net', 'x5bzwNn41dln', 1, '70767 Lien Terrace', 'Mamonit', null, null),
(36, 'Noëlla', 'Roberts', 'arobertsz@dagondesign.com', '3gZPRZAuNi', 0, '07566 Thierer Street', 'Santiago Puringla', null, null),
(37, 'Célestine', 'Long', 'along10@vinaora.com', '8NKuWaZVdEEP', 0, '939 Butterfield Alley', 'Phan Thong', null, null),
(38, 'Bécassine', 'Marshall', 'pmarshall11@utexas.edu', 'zYOUTEaC', 0, '15 Dovetail Street', 'Polzela', null, '2016-02-08 10:47:59'),
(39, 'Agnès', 'Stanley', 'sstanley12@de.vu', 'wS4gVzMxsd', 0, '04206 Sommers Street', 'Arapongas', null, null),
(40, 'Clémence', 'Alvarez', 'malvarez13@newsvine.com', 'h1hLVpNI3O', 0, '76 Spenser Center', 'Waihibar', null, null),
(41, 'Ruò', 'Mitchell', 'bmitchell14@abc.net.au', '9NpUt1wL', 0, '74617 Roxbury Lane', 'Soure', '3130-199', null),
(42, 'Lèi', 'James', 'djames15@is.gd', 'YmNe2gZb', 1, '322 Grim Way', 'Offenbach', '63073', null),
(43, 'Régine', 'Roberts', 'droberts16@macromedia.com', '4kQ3k3', 1, '45101 Merrick Terrace', 'Vale Mourão', '2635-466', null),
(44, 'Hélèna', 'Hall', 'ehall17@latimes.com', 'DN228z', 0, '6469 4th Point', 'Temizhbekskaya', null, null),
(45, 'Göran', 'Allen', 'pallen18@jigsy.com', 'Q03pl3EXN1NQ', 1, '1877 Sugar Alley', 'Paris 14', '75693 CEDEX 14', '2016-07-03 22:28:57'),
(46, 'Séréna', 'Green', 'pgreen19@xinhuanet.com', '3EOPNx9BFe', 1, '4793 Superior Pass', 'Jabon', null, '2016-01-31 03:13:12'),
(47, 'Marie-thérèse', 'Lane', 'alane1a@paginegialle.it', 'F4YKFO4vbfL', 1, '466 Logan Road', 'Bobadela', '3405-006', null),
(48, 'Faîtes', 'Dixon', 'tdixon1b@wisc.edu', 'Bju4frc2hpH', 1, '687 Longview Alley', 'Saint-Denis', '97417', null),
(49, 'Andréanne', 'Jackson', 'mjackson1c@github.io', 'sMbXbpl6xR', 1, '7 Parkside Crossing', 'Bagorejo', null, null),
(50, 'Méng', 'Dunn', 'rdunn1d@bizjournals.com', 'YS0nf7d', 1, '556 Carberry Park', 'Barbudo', '4730-068', null),
(51, 'Clélia', 'Webb', 'jwebb1e@mail.ru', 'Pd2wneFDTC', 0, '5 Armistice Trail', 'Vostryakovo', null, null),
(52, 'Géraldine', 'Banks', 'ebanks1f@ezinearticles.com', 'vr47r3eNaD3', 1, '1779 Brickson Park Drive', 'Malalag', null, null),
(53, 'Yénora', 'Hawkins', 'whawkins1g@facebook.com', 'CCi1Y4Kx', 1, '32 Del Mar Center', 'La Rochelle', '17073 CEDEX 9', null),
(54, 'André', 'Scott', 'mscott1h@blinklist.com', '6dumpAjkk', 0, '33 Scoville Drive', 'Balgatay', null, null),
(55, 'Athéna', 'Wilson', 'jwilson1i@who.int', 'GsdCNP7C1UqS', 0, '566 Schlimgen Point', 'Porto Feliz', null, null),
(56, 'Ophélie', 'Jones', 'rjones1j@miitbeian.gov.cn', 'ymw5YihR', 0, '6 Hovde Court', 'Yunluo', null, '2016-05-16 08:46:41'),
(57, 'Chloé', 'Richardson', 'srichardson1k@addthis.com', 'b2YEHJAGP', 0, '57 Canary Terrace', 'Comé', null, null),
(58, 'Loïs', 'Knight', 'jknight1l@weather.com', 'QilqKlcT', 0, '94 Lindbergh Circle', 'El Sauce', null, null),
(59, 'Solène', 'Chapman', 'hchapman1m@rakuten.co.jp', '80wtKchDLsEQ', 0, '52051 Logan Place', 'Kushk', null, null),
(60, 'Léone', 'Phillips', 'jphillips1n@dot.gov', 'c9qh0lXe', 1, '129 Florence Pass', 'Panyingkiran', null, null),
(61, 'Estève', 'Morrison', 'tmorrison1o@harvard.edu', 'LGNoOv5', 0, '551 North Lane', 'Kaka', null, null),
(62, 'Maëly', 'Myers', 'nmyers1p@prlog.org', 'MX69RRJ', 1, '745 Jenifer Street', 'Mueang Nonthaburi', null, null),
(63, 'Björn', 'Burke', 'dburke1q@marketwatch.com', 'n2QkZ5VZR0V', 1, '9 Arkansas Road', 'Auriflama', null, null),
(64, 'Estève', 'Johnson', 'ajohnson1r@artisteer.com', 'IYNxoGnK', 1, '1 Old Shore Terrace', 'Tembeling', null, null),
(65, 'Joséphine', 'Boyd', 'jboyd1s@hexun.com', 'sWsCKc', 0, '306 Nova Crossing', 'Komysh-Zorya', null, null),
(66, 'Agnès', 'Lane', 'blane1t@linkedin.com', 'WtMr0UntbEDB', 0, '852 Fairfield Road', 'Huiwen', null, null),
(67, 'Alizée', 'Henry', 'jhenry1u@statcounter.com', 'IHBDLu', 1, '551 Ramsey Pass', 'Nova Lima', null, null),
(68, 'Vérane', 'Wheeler', 'mwheeler1v@reference.com', '0HWQCTEAao', 1, '31857 Di Loreto Center', 'Santiago', '54784', '2016-01-26 14:33:19'),
(69, 'Illustrée', 'Mccoy', 'jmccoy1w@arizona.edu', 'gR7bKz', 1, '79 Tennessee Park', 'Langsa', null, null),
(70, 'Fèi', 'Wilson', 'rwilson1x@a8.net', 'ltlnfHzPa', 1, '74 Shasta Junction', 'Xiamayu', null, null),
(71, 'Estève', 'Bailey', 'cbailey1y@mit.edu', 'dpMpyaHXvWdi', 1, '6 Springview Park', 'Xiaohekou', null, null),
(72, 'Liè', 'Jenkins', 'njenkins1z@google.cn', 'dhLp4eAQ3ku9', 1, '5544 Straubel Place', 'Qinjiang', null, null),
(73, 'Ophélie', 'Hernandez', 'jhernandez20@pinterest.com', 'sTLHG9EH', 1, '748 Pepper Wood Park', 'Qintang', null, null),
(74, 'Personnalisée', 'Elliott', 'relliott21@cnbc.com', 'PbpmqhIt', 0, '638 Mosinee Way', 'Kozlovice', null, null),
(75, 'Crééz', 'Hayes', 'thayes22@de.vu', 'cWFJhagHJo', 1, '49 Pierstorff Junction', 'Botigues', null, null),
(76, 'Joséphine', 'Vasquez', 'rvasquez23@cnn.com', 'XQB1Szd', 1, '83785 Service Way', 'Terara', null, null),
(77, 'Camélia', 'Banks', 'jbanks24@usa.gov', 'Law84V', 1, '24794 Prentice Point', 'Jiujie', null, '2015-12-06 15:46:15'),
(78, 'Wá', 'Ellis', 'mellis25@ehow.com', 'UPQmncNexN', 1, '4 Golf Course Avenue', 'Domartang', null, null),
(79, 'Stévina', 'Wood', 'lwood26@github.com', 'Ng5s0S4JidNZ', 1, '0900 Little Fleur Street', 'Pedraza La Vieja', null, null),
(80, 'Kévina', 'Torres', 'jtorres27@utexas.edu', '0IRzNcz4qlV', 1, '14 Donald Court', 'Kalian', null, null),
(81, 'Yóu', 'Hunt', 'ahunt28@cyberchimps.com', 'va3jULV', 0, '32 Tennyson Avenue', 'Kertabumi', null, '2016-03-23 07:24:16'),
(82, 'Ruò', 'Hawkins', 'bhawkins29@whitehouse.gov', '5o1LUT6FflB', 0, '1 Bonner Plaza', 'Kerva', null, null),
(83, 'Marie-hélène', 'Morales', 'smorales2a@zdnet.com', 'kRGJi9BH19S', 1, '538 Bunker Hill Park', 'Oslo', '0968', null),
(84, 'Crééz', 'Davis', 'cdavis2b@nba.com', 'fpmAUuTCly', 1, '35 Hansons Pass', 'Novokuybyshevsk', null, '2015-12-22 09:23:19'),
(85, 'Vénus', 'Morgan', 'pmorgan2c@skyrock.com', 'qdMHZ9cFFu', 0, '0180 Sunnyside Street', 'São Domingos do Maranhão', null, null),
(86, 'Cécilia', 'Watson', 'rwatson2d@telegraph.co.uk', 'TI4IT73xWHYR', 0, '99791 Almo Point', 'Ngrambitan', null, null),
(87, 'Eléonore', 'Schmidt', 'hschmidt2e@issuu.com', 'y7UgjowFD4', 1, '13 Division Way', 'Licheń Stary', null, null),
(88, 'Eliès', 'Anderson', 'tanderson2f@thetimes.co.uk', 'xDatBEinuN', 1, '25182 Almo Place', 'Kokop', null, null),
(89, 'Maéna', 'Matthews', 'cmatthews2g@youtube.com', 'fiND7tRUPU', 0, '8177 Dovetail Drive', 'Freixo de Numão', '5155-205', null),
(90, 'Táng', 'Montgomery', 'kmontgomery2h@qq.com', '0xiGk5PxGg', 1, '00 Debs Circle', 'Ciepielów', null, null),
(91, 'Océanne', 'Mills', 'emills2i@ibm.com', 'gwarkjN', 1, '5906 Evergreen Junction', 'Kenamoen', null, null),
(92, 'Ruò', 'Crawford', 'dcrawford2j@npr.org', '48kuJRgq', 0, '987 Riverside Lane', 'Boskovice', null, null),
(93, 'Géraldine', 'Castillo', 'bcastillo2k@nps.gov', 'EzJpNN8', 0, '1499 Park Meadow Point', 'Pilar', null, null),
(94, 'Mårten', 'Hawkins', 'khawkins2l@php.net', 'J6C0JUw', 1, '57 Londonderry Circle', 'Kaduengang', null, '2016-07-07 00:20:16'),
(95, 'Irène', 'Webb', 'dwebb2m@elpais.com', '9qyliig', 1, '86139 David Point', 'Zarumilla', null, null),
(96, 'Cécile', 'Bishop', 'cbishop2n@patch.com', '01gd928pI', 1, '02 Calypso Point', 'Ágios Týchon', null, null),
(97, 'Eléonore', 'Martinez', 'pmartinez2o@economist.com', 'wd0101exs', 0, '81191 Bartelt Terrace', 'Besah', null, null),
(98, 'Lucrèce', 'Scott', 'rscott2p@feedburner.com', 'hGdVckPh', 0, '11783 Eagan Point', 'Hujiaying', null, null),
(99, 'Zhì', 'Ramirez', 'tramirez2q@yellowpages.com', 'HENyZ0GRBYK', 1, '024 Kropf Crossing', 'Clarines', null, null),
(100, 'Mélys', 'Marshall', 'smarshall2r@oracle.com', '2gVXGWbcf', 1, '93671 Washington Avenue', 'Bella Vista', null, null),
(101, 'Alizée', 'Taylor', 'ataylor2s@cdc.gov', 'N8SyZwtbTV', 0, '9 Southridge Alley', 'Köln', '51149', null),
(102, 'Mélodie', 'Stephens', 'cstephens2t@independent.co.uk', 'sQMrGDN', 0, '3225 Leroy Street', 'Qiucun', null, '2016-10-05 11:22:27'),
(103, 'Lén', 'Martinez', 'amartinez2u@4shared.com', 'wEhTpDG', 1, '0828 Sachtjen Court', 'Carvalhal', '4650-454', null),
(104, 'Josée', 'Dixon', 'jdixon2v@indiatimes.com', 'jMLv3rbsnA', 1, '2 Northport Way', 'Sartana', null, null),
(105, 'Yú', 'Porter', 'lporter2w@loc.gov', 'yNKt5RfNZi9', 1, '800 Sloan Alley', 'Masaki-chō', null, null),
(106, 'Ophélie', 'Brown', 'jbrown2x@adobe.com', 'h04vpVTXbC', 1, '2 Grayhawk Avenue', 'Kakuda', null, '2016-01-13 00:56:43'),
(107, 'Miléna', 'Weaver', 'eweaver2y@who.int', 'OuJ4YA', 0, '19 Fallview Park', 'Velyka Bahachka', null, null),
(108, 'Bécassine', 'Romero', 'mromero2z@google.com.hk', 'uuRdLERPUix', 0, '681 Morning Point', 'Gradec', null, null),
(109, 'Ráo', 'Hernandez', 'dhernandez30@house.gov', 'wdjfvTZo', 0, '890 6th Parkway', 'Phủ Thông', null, '2016-06-02 13:23:07'),
(110, 'Personnalisée', 'Young', 'nyoung31@networkadvertising.org', 'fmpz0m2dux', 0, '4514 Jay Avenue', 'San Pedro Jocopilas', null, null),
(111, 'Gérald', 'Cox', 'rcox32@fema.gov', 'UT44ESZcsCyT', 1, '81 Crest Line Lane', 'Kotabaru Hilir', null, null),
(112, 'Mégane', 'Wilson', 'cwilson33@princeton.edu', '3WQTKx5btUH', 1, '7695 Fairview Avenue', 'Bužim', null, null),
(113, 'Lèi', 'Wilson', 'twilson34@ning.com', 'OYeyktBY', 1, '57 Loftsgordon Plaza', 'Morez', '39409 CEDEX', null),
(114, 'Gaïa', 'Cook', 'icook35@mail.ru', 'ASNC7jZrMFuD', 0, '84 Ilene Center', 'Novozavedennoye', null, null),
(115, 'Marylène', 'Hall', 'jhall36@cisco.com', 'CiSDsgN', 1, '06 Mallory Circle', 'Pujijie', null, null),
(116, 'Danièle', 'Porter', 'cporter37@hexun.com', '4ArEPo', 1, '51 Corben Hill', 'Saint-Denis', '97471 CEDEX', null),
(117, 'Märta', 'Ross', 'mross38@qq.com', 'Uxdv4yVwdtM', 1, '199 Sage Junction', 'Šentilj v Slov. Goricah', null, null),
(118, 'Uò', 'Hall', 'mhall39@t.co', 'OuyMAdGExmJ', 0, '2 Stang Street', 'Zbiroh', null, null),
(119, 'Jú', 'Gomez', 'pgomez3a@oracle.com', 'gGLlzMVAqxc', 0, '55 Bellgrove Point', 'Metchosin', null, null),
(120, 'Marie-françoise', 'Lopez', 'slopez3b@walmart.com', 'H2jWgnffWG6', 1, '6940 5th Junction', 'Ubajami', null, null),
(121, 'Séverine', 'Nichols', 'dnichols3c@hatena.ne.jp', 'Tz6eZAnJyzYn', 0, '709 Marquette Parkway', 'Timbulsari', null, null),
(122, 'Personnalisée', 'Fisher', 'jfisher3d@wikia.com', 'p7cfLFa', 1, '6862 Sachtjen Park', 'Mosfilotí', null, '2016-07-17 13:07:36'),
(123, 'Garçon', 'Reid', 'creid3e@wordpress.com', '0XbGf8H8J', 0, '72 Clarendon Plaza', 'Néa Flogitá', null, null),
(124, 'Méthode', 'Fox', 'lfox3f@etsy.com', 'vV4iZkw', 1, '1438 Barnett Place', 'San Juan', '00928', null),
(125, 'Léonie', 'Romero', 'sromero3g@usa.gov', 'cGA9Pu1VmHP', 1, '1 Vera Lane', 'Manuel Antonio Mesones Muro', null, null),
(126, 'Anaïs', 'Diaz', 'pdiaz3h@wikia.com', 'cFSjYQ95', 1, '92 Arrowood Lane', 'Jiangmen', null, null),
(127, 'Crééz', 'Wilson', 'swilson3i@tmall.com', 'oCoKXHpQ', 1, '99267 Elmside Trail', 'Ystad', '271 22', null),
(128, 'Noémie', 'Wagner', 'twagner3j@upenn.edu', 'phu948FGC', 0, '18 Oak Valley Center', 'Buriti Alegre', null, null),
(129, 'Clémence', 'Howard', 'fhoward3k@sakura.ne.jp', 'p13PZDn', 0, '9 Carey Center', 'Lunas', null, null),
(130, 'Ruò', 'Grant', 'ggrant3l@domainmarket.com', 'wgUCFQLIkTA', 1, '92 Westport Junction', 'Atabayan', null, null),
(131, 'Aloïs', 'Peterson', 'apeterson3m@flickr.com', 'xb6DRr2', 0, '5 Barby Avenue', 'Nentón', null, null),
(132, 'Solène', 'Matthews', 'mmatthews3n@thetimes.co.uk', 'oQcoTYf', 1, '61 Schurz Drive', 'Castanheiro do Sul', '5130-025', null),
(133, 'Maëlann', 'Harrison', 'jharrison3o@hud.gov', 'gSzwo0GA', 1, '708 Express Street', 'Jiaoshi', null, null),
(134, 'Eugénie', 'Cruz', 'scruz3p@zdnet.com', 'UXwbnW', 1, '813 Burning Wood Point', 'Rubirizi', null, null),
(135, 'Kù', 'Gordon', 'sgordon3q@reuters.com', 'mE8a6OaDd', 1, '683 Morningstar Circle', 'Xinjiezhen', null, null),
(136, 'Lucrèce', 'Lopez', 'mlopez3r@usgs.gov', 'aOK1ogKGqKF', 1, '22209 Westend Way', 'Lishui', null, null),
(137, 'Gaïa', 'Evans', 'bevans3s@ft.com', '8nV407gYqBOF', 1, '60299 Jenna Crossing', 'Ostružnica', null, null),
(138, 'Bérengère', 'Stephens', 'pstephens3t@taobao.com', 'Pqmwecesfvc', 1, '073 Kenwood Trail', 'Malim', null, null),
(139, 'Aimée', 'Smith', 'asmith3u@globo.com', 'WPf5YmSFukH', 0, '5999 Luster Avenue', 'Pengjia Zhaizi', null, null),
(140, 'Märta', 'Rodriguez', 'drodriguez3v@toplist.cz', 'TYRd2NUD', 0, '70042 Talisman Terrace', 'San Isidro', '94723', null),
(141, 'Aurélie', 'Washington', 'awashington3w@sohu.com', 'ZpdrMwyN', 0, '03 Washington Park', 'Tongqing', null, null),
(142, 'Faîtes', 'Mitchell', 'wmitchell3x@mashable.com', 'SZ0c6ids', 0, '9513 Lukken Circle', 'Chociwel', null, null),
(143, 'André', 'Washington', 'jwashington3y@geocities.com', 'WhA0UerY0', 0, '9170 Valley Edge Alley', 'Al Buq‘ah', null, null),
(144, 'Fèi', 'Jones', 'sjones3z@altervista.org', 'OIuWwYkteZ', 1, '9115 Hovde Street', 'Malārd', null, null),
(145, 'Táng', 'Ramos', 'pramos40@taobao.com', 'xUROz23Kyyf', 1, '47381 Cardinal Point', 'Santo Domingo Oeste', null, null),
(146, 'Bénédicte', 'Carpenter', 'bcarpenter41@fda.gov', 'StFVao6D5kD', 1, '95 Clemons Point', 'Mandōl', null, null),
(147, 'Nélie', 'Torres', 'atorres42@a8.net', 'gKNnQZic', 1, '8 3rd Park', 'Xin’an', null, null),
(148, 'Andrée', 'Lynch', 'clynch43@odnoklassniki.ru', '0Ul2k3RSUl', 0, '26 Nancy Court', 'Sanjwāl', null, null),
(149, 'Angèle', 'Romero', 'tromero44@nyu.edu', 'm7zX4JIE', 1, '185 Bowman Alley', 'Xinsheng', null, null),
(150, 'Maëlys', 'Carter', 'jcarter45@so-net.ne.jp', 'fpdIBT00al5', 1, '861 Sherman Court', 'Hepo', null, null),
(151, 'Marlène', 'Clark', 'sclark46@japanpost.jp', 'vHJUZHKM7dWR', 1, '2 Clove Court', 'Zhaoyuan', null, null),
(152, 'Marie-françoise', 'Stewart', 'rstewart47@vimeo.com', 'FrJYI8TtliP', 1, '71 Shoshone Alley', 'Selizharovo', null, null),
(153, 'Cléa', 'Lynch', 'jlynch48@virginia.edu', 'jBh3qyqZ', 1, '8590 Fisk Junction', 'Raciąż', null, null),
(154, 'Mélia', 'Burns', 'nburns49@illinois.edu', 'n0U2kLFNnmXs', 1, '74 Pennsylvania Terrace', 'North Cowichan', null, null),
(155, 'Mélys', 'Green', 'bgreen4a@networksolutions.com', '4ZtebMEEwbwK', 1, '5993 Knutson Lane', 'Banepa', null, null),
(156, 'Estève', 'Willis', 'dwillis4b@usda.gov', 'sNpGQfG', 0, '1252 Schlimgen Court', 'Rabaul', null, null),
(157, 'Dafnée', 'Pierce', 'jpierce4c@lycos.com', 'DhLLotmcOI', 1, '95 Derek Parkway', 'Houxi', null, null),
(158, 'Lóng', 'Green', 'ggreen4d@nationalgeographic.com', 'rI6UXmMBqxg', 0, '3011 Atwood Lane', 'Malanday', null, '2016-06-08 11:53:34'),
(159, 'Eléonore', 'Mccoy', 'jmccoy4e@forbes.com', 't0yvN7', 0, '1813 Anhalt Place', 'Roissy Charles-de-Gaulle', '95959 CEDEX 2', null),
(160, 'Noémie', 'Smith', 'tsmith4f@oaic.gov.au', 'YW11MjIID', 0, '474 Merchant Plaza', 'Markaz-e Woluswalī-ye Āchīn', null, null),
(161, 'Estée', 'Turner', 'bturner4g@example.com', 'SyWv0r', 0, '20 Florence Place', 'Feikeng', null, null),
(162, 'Noémie', 'Carr', 'jcarr4h@ed.gov', 'bctwYGTuo1', 1, '1972 Heffernan Junction', 'Amirdzhan', null, null),
(163, 'Irène', 'Ellis', 'kellis4i@biglobe.ne.jp', 'nUe8TCKZ0fG5', 1, '3 Waxwing Park', 'Imbituva', null, null),
(164, 'Gisèle', 'Anderson', 'canderson4j@weather.com', 'xIbJaSZ', 0, '786 Huxley Hill', 'Canedo', '4525-013', null),
(165, 'Géraldine', 'Turner', 'lturner4k@w3.org', 'G55ycj8HhzL', 0, '9962 Red Cloud Junction', 'Pyinmana', null, null),
(166, 'Geneviève', 'Daniels', 'ddaniels4l@seattletimes.com', 'zQ7RuIA1x', 1, '62 Debra Drive', 'Železná Ruda', null, null),
(167, 'Erwéi', 'Kelly', 'akelly4m@jiathis.com', 'xgJSch713', 0, '065 Northland Court', 'Jurovski Dol', null, null),
(168, 'Séréna', 'Larson', 'dlarson4n@ucla.edu', '98IiJS54CG', 1, '88 Dottie Center', 'Penha Longa', '4625-347', null),
(169, 'Maëlys', 'Jordan', 'kjordan4o@dmoz.org', 'vY5lFreumh', 0, '21 Iowa Place', 'Kuningan', null, null),
(170, 'Táng', 'Mason', 'rmason4p@yahoo.com', 'YFoPGW', 1, '8 Parkside Court', 'Nova Praha', null, null),
(171, 'Agnès', 'Stanley', 'mstanley4q@eepurl.com', 'WTwAARYD', 0, '118 Pawling Lane', 'Smolenka', null, null),
(172, 'Garçon', 'Hill', 'mhill4r@answers.com', 'Maa0dB8YB7H7', 1, '13842 Esker Street', 'Brondong', null, null),
(173, 'Estée', 'Montgomery', 'pmontgomery4s@qq.com', '2YLAO99SLMO', 0, '0 Hazelcrest Street', 'Xanxerê', null, null),
(174, 'Gaétane', 'Bradley', 'bbradley4t@soup.io', 'WYMkilfzDg', 0, '2807 Mallory Crossing', 'San Esteban', null, '2016-10-15 12:45:53'),
(175, 'Naéva', 'Pierce', 'hpierce4u@purevolume.com', 'llrQtsEuK5f', 1, '40729 Burning Wood Junction', 'Shengtang', null, null),
(176, 'Nadège', 'Alvarez', 'palvarez4v@zimbio.com', 'aCx3nEAoJ', 0, '60 Lawn Court', 'Pital', null, null),
(177, 'Rébecca', 'Hudson', 'phudson4w@blogger.com', 'LYzqEH1Pg4', 0, '6385 Rowland Court', 'Kebonkalapa', null, null),
(178, 'Åslög', 'Sullivan', 'ksullivan4x@photobucket.com', 'zUpaQUPk2Iw', 1, '3 Delaware Point', 'Songshu', null, null),
(179, 'Mélys', 'Sanders', 'msanders4y@nydailynews.com', 'Ft9IPUeMn', 0, '2 Ridgeway Center', 'Yezhu', null, '2016-06-20 21:41:20'),
(180, 'Eloïse', 'Hughes', 'lhughes4z@fotki.com', 'Qs5GTax', 0, '9111 Sutteridge Pass', 'Kang-neung', null, null),
(181, 'Nadège', 'Diaz', 'vdiaz50@cocolog-nifty.com', '7Ub43EUjqm', 0, '1098 Harper Avenue', 'Matumadua', null, null),
(182, 'Anaïs', 'Medina', 'smedina51@ted.com', 'vD6GRIfu', 0, '89125 Lillian Terrace', 'Yanqi', null, '2016-01-10 23:58:09'),
(183, 'Dù', 'Cruz', 'jcruz52@earthlink.net', 'e7dAgpo', 1, '5229 Welch Circle', 'Лабуништа', null, null),
(184, 'Agnès', 'Greene', 'dgreene53@ow.ly', 'WPyzmHx', 1, '8083 Claremont Avenue', 'Santa Clara', null, null),
(185, 'Célia', 'Taylor', 'ktaylor54@addthis.com', 'nHhBsM', 1, '78953 Nevada Terrace', 'Ostrov', null, null),
(186, 'Maïté', 'Montgomery', 'gmontgomery55@skyrock.com', 'A1unYvVVYIfw', 1, '4 Pepper Wood Center', 'Huamali', null, null),
(187, 'Léa', 'Berry', 'cberry56@twitpic.com', '2KLjvMtW', 1, '38035 Mcbride Road', 'Bāglung', null, null),
(188, 'Renée', 'Evans', 'kevans57@independent.co.uk', 'QOeOkKnfkGu', 1, '82 Anhalt Crossing', 'Riverton', null, null),
(189, 'Mårten', 'Davis', 'rdavis58@imdb.com', 'Yf6SKJ0sQs', 1, '6 Pierstorff Alley', 'Damai', null, null),
(190, 'Ruì', 'Hayes', 'jhayes59@virginia.edu', 'EhkMvkqeIg', 0, '6 Eggendart Drive', 'Talisay', null, null),
(191, 'Ophélie', 'Edwards', 'kedwards5a@goo.gl', 'tmjFI5keK', 0, '17 Mcguire Drive', 'Bengga', null, null),
(192, 'Nélie', 'Murray', 'wmurray5b@vistaprint.com', '7SGbGHOT', 0, '1 Cambridge Avenue', 'San Juan', null, null),
(193, 'Daphnée', 'Fowler', 'hfowler5c@xinhuanet.com', 'QmDdOhbZg', 0, '73 Dexter Alley', 'Pagangan', null, null),
(194, 'Miléna', 'Jenkins', 'ljenkins5d@dagondesign.com', 'yvu97D3Lxlp', 1, '984 Haas Road', 'Derbur', null, null),
(195, 'Naéva', 'Reed', 'areed5e@theglobeandmail.com', 'mHJrGrsm', 1, '9 Debs Circle', 'Fubei', null, null),
(196, 'Gaétane', 'Johnson', 'jjohnson5f@cisco.com', 'hF4JbJSfWf5', 0, '990 Sachtjen Avenue', 'Kalatongke', null, null),
(197, 'Maëline', 'Marshall', 'rmarshall5g@yelp.com', 'fR8otJZzP5', 0, '1 Beilfuss Way', 'Mandōl', null, null),
(198, 'Måns', 'Lopez', 'jlopez5h@soup.io', 'aTkv9O', 1, '0761 Sunnyside Street', 'Pechenga', null, '2015-12-01 03:50:26'),
(199, 'Marylène', 'Ryan', 'mryan5i@rambler.ru', 'MupSWH', 0, '0 Transport Trail', 'Pećigrad', null, '2016-06-15 11:19:39'),
(200, 'Anaïs', 'Torres', 'rtorres5j@europa.eu', 'OvWZIA4Q8', 1, '1549 Summerview Street', 'Staffanstorp', '245 41', null);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bs_categories`
--
ALTER TABLE `bs_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bs_contents`
--
ALTER TABLE `bs_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_order` (`id_order`);

--
-- Index pour la table `bs_orders`
--
ALTER TABLE `bs_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_state` (`id_state`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `bs_products`
--
ALTER TABLE `bs_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `bs_states`
--
ALTER TABLE `bs_states`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bs_users`
--
ALTER TABLE `bs_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bs_categories`
--
ALTER TABLE `bs_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `bs_contents`
--
ALTER TABLE `bs_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `bs_orders`
--
ALTER TABLE `bs_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `bs_products`
--
ALTER TABLE `bs_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `bs_states`
--
ALTER TABLE `bs_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `bs_users`
--
ALTER TABLE `bs_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bs_contents`
--
ALTER TABLE `bs_contents`
  ADD CONSTRAINT `bs_contents_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `bs_products` (`id`),
  ADD CONSTRAINT `bs_contents_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `bs_orders` (`id`);

--
-- Contraintes pour la table `bs_orders`
--
ALTER TABLE `bs_orders`
  ADD CONSTRAINT `bs_orders_ibfk_1` FOREIGN KEY (`id_state`) REFERENCES `bs_states` (`id`),
  ADD CONSTRAINT `bs_orders_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `bs_users` (`id`);

--
-- Contraintes pour la table `bs_products`
--
ALTER TABLE `bs_products`
  ADD CONSTRAINT `bs_products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `bs_categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
