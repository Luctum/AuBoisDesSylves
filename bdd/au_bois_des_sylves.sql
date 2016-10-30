-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 30 Octobre 2016 à 14:28
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

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
(10, 3, 2, 3);

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
(1, 1, '2016-10-18 00:00:00', '2016-10-19 00:00:00', NULL, 3),
(2, 2, '2016-10-01 00:00:00', NULL, NULL, 2),
(3, 1, '2016-10-04 00:00:00', '2016-10-05 00:00:00', '2016-10-12 00:00:00', 1),
(4, 4, '2016-10-30 14:20:40', NULL, NULL, 1),
(5, 5, '2016-10-30 14:20:40', '2016-10-14 00:00:00', NULL, 1);

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
--

INSERT INTO `bs_products` (`id`, `name`, `description`, `id_category`, `price`, `availability`, `icon`) VALUES
(1, 'Statue Belle', 'Une bien belle statue qui saura satisfaire tous les amateurs de statues !', 1, 99999, 1, ''),
(2, 'Statue Moche', 'Une statue hideuse mais peu chère, tous le monde se l''arrache !', 1, 10, 0, ''),
(3, 'Collier de pâtes', 'Un collier fait des mains d''un artisan aguerri qui vous rappellera les plus beaux moments passés en compagnie de vos chérubins.', 2, 15, 1, ''),
(4, 'Bracelet en fil de saucisson', 'Un collier, en plus petit, et en moins cher !', 2, 1, 0, ''),
(5, 'L''unique', 'Y''en a qu''un seul.', 3, 45, 1, '');

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
  `adress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `suspensionDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bs_users`
--

INSERT INTO `bs_users` (`id`, `name`, `surname`, `mail`, `password`, `rank`, `adress`, `city`, `postal_code`, `suspensionDate`) VALUES
(1, 'Rémi', 'Senfamiy', 'remi@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 1, '3 rue du flan', 'Rennes', 35000, NULL),
(2, 'Chuck', 'Norris', 'admin@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 0, '666 boulevard du poing', 'Dentaface', 66666, NULL),
(3, 'Lor''themar', 'Theron', 'bob@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 0, '1 rue de bob', 'Lune d''argent', 46800, NULL),
(4, 'Jean-Michel', 'Banni', 'ban@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 1, '356 impasse de la prison', 'Rennes', 35000, '2016-10-09 00:00:00'),
(5, 'Jean-User', 'Dupont', 'user@mail.com', '$2y$10$DvtZJE2/1s3kP9shdpBhXODU30SCFz829EjbNaAeddrC8agiJomXO', 1, '7 quartier des oiseaux qui font cucuicui', 'Caen', 14000, NULL);

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
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bs_orders`
--
ALTER TABLE `bs_orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bs_products`
--
ALTER TABLE `bs_products`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
