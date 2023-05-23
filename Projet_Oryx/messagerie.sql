-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mai 2023 à 11:43
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `messagerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `msg_text` text NOT NULL,
  `msg_user_id` int NOT NULL,
  `msg_date` datetime NOT NULL,
  `msg_room_id` int NOT NULL,
  `msg_color` varchar(8) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_text`, `msg_user_id`, `msg_date`, `msg_room_id`, `msg_color`) VALUES
(119, 'coucou', 17, '2023-05-22 07:26:42', 1, 'rgb(0, 0'),
(118, 'coucou', 17, '2023-05-22 07:25:56', 1, 'rgb(0, 0'),
(117, 'hello', 17, '2023-05-18 15:02:21', 1, 'rgb(0, 0'),
(116, 'hello', 15, '2023-05-18 14:49:31', 1, 'rgb(0, 0'),
(115, 'salut', 15, '2023-05-18 14:45:55', 1, 'rgb(0, 0'),
(114, 'hello', 17, '2023-05-18 14:41:35', 1, 'rgb(0, 0'),
(113, 'aze', 9, '2023-05-18 13:43:50', 1, '#CFC700'),
(112, 'aze ornage clair ', 9, '2023-05-18 13:43:40', 3, '#CFC700'),
(111, 'aze', 9, '2023-05-18 13:43:26', 3, '#CFC700'),
(110, 'aze orange', 9, '2023-05-18 13:43:18', 2, '#FF7000'),
(109, 'aze', 9, '2023-05-18 13:43:01', 2, '#FF7000'),
(108, 'aze rouge ', 9, '2023-05-18 13:42:52', 1, '#CF1100'),
(107, 'aze', 9, '2023-05-18 13:42:46', 1, '#CF1100'),
(106, 'hello', 13, '2023-05-18 13:42:21', 1, '#CF00BE'),
(105, 'wikiny viloet', 13, '2023-05-18 13:42:12', 1, '#CF00BE'),
(104, 'hello', 13, '2023-05-18 13:42:04', 1, '#CF00BE'),
(103, 'wikiny 13h37', 13, '2023-05-18 13:37:36', 1, '#15E25F'),
(102, 'aze 13h37', 13, '2023-05-18 13:37:07', 1, '#007AFF'),
(101, 'wikiny 13h36', 13, '2023-05-18 13:36:06', 4, '#CF00BE'),
(100, 'aze 13h35', 13, '2023-05-18 13:35:51', 1, '#007AFF'),
(99, 'aze 11h46', 9, '2023-05-18 11:46:41', 5, '#CFC700'),
(98, 'y a quelqu\'un ?', 9, '2023-05-18 11:45:10', 1, '#CF1100'),
(97, 'quoi de neuf?', 9, '2023-05-18 11:44:55', 5, '#15E25F'),
(96, 'ok', 13, '2023-05-18 11:43:22', 1, '#CF1100'),
(95, 'rien de nouveau', 13, '2023-05-18 11:43:02', 4, '#007AFF'),
(94, 'quoi de neuf ?', 13, '2023-05-18 11:42:37', 1, '#CF1100'),
(55, '1', 9, '2023-05-17 09:27:11', 1, '#007AFF'),
(56, '2', 9, '2023-05-17 09:27:11', 1, '#007AFF'),
(57, '3', 9, '2023-05-17 09:27:13', 1, '#007AFF'),
(58, '4', 9, '2023-05-17 09:27:14', 1, '#007AFF'),
(59, '5', 9, '2023-05-17 09:27:14', 1, '#007AFF'),
(60, '6', 9, '2023-05-17 09:27:16', 1, '#007AFF'),
(61, '7', 9, '2023-05-17 09:27:17', 1, '#007AFF'),
(62, '8', 9, '2023-05-17 09:27:17', 1, '#007AFF'),
(63, '9', 9, '2023-05-17 09:27:18', 1, '#007AFF'),
(64, '10', 9, '2023-05-17 09:27:21', 1, '#007AFF'),
(65, 'a', 9, '2023-05-17 09:50:46', 4, '#CF1100'),
(66, 'b', 9, '2023-05-17 09:50:47', 4, '#CF1100'),
(67, 'c', 9, '2023-05-17 09:50:48', 4, '#CF1100'),
(68, 'd', 9, '2023-05-17 09:50:49', 4, '#CF1100'),
(69, 'e', 9, '2023-05-17 09:50:49', 4, '#CF1100'),
(70, 'f', 9, '2023-05-17 09:50:50', 4, '#CF1100'),
(71, 'g', 9, '2023-05-17 09:50:50', 4, '#CF1100'),
(72, 'h', 9, '2023-05-17 09:50:51', 4, '#CF1100'),
(73, 'i', 9, '2023-05-17 09:51:02', 4, '#CF1100'),
(74, 'j', 9, '2023-05-17 09:51:04', 4, '#CF1100'),
(75, 'z', 9, '2023-05-17 09:51:20', 5, '#CF1100'),
(76, 'y', 9, '2023-05-17 09:51:21', 5, '#CF1100'),
(77, 'x', 9, '2023-05-17 09:51:22', 5, '#CF1100'),
(78, 'w', 9, '2023-05-17 09:51:33', 5, '#CF1100'),
(79, 'v', 9, '2023-05-17 09:51:34', 5, '#CF1100'),
(80, 'u', 9, '2023-05-17 09:51:35', 5, '#CF1100'),
(81, 't', 9, '2023-05-17 09:51:39', 5, '#CF1100'),
(82, 's', 9, '2023-05-17 09:51:42', 5, '#CF1100'),
(83, 'r', 9, '2023-05-17 09:51:45', 5, '#CF1100'),
(84, 'q', 9, '2023-05-17 09:51:51', 5, '#CF1100'),
(85, 'p', 9, '2023-05-17 09:51:53', 5, '#CF1100'),
(86, 'salut', 13, '2023-05-17 11:18:54', 3, '#CFC700'),
(87, 'hello', 13, '2023-05-17 11:19:02', 3, '#15E25F'),
(88, 'comment ca va ?', 13, '2023-05-17 11:19:11', 3, '#CFC700'),
(89, 'salut', 13, '2023-05-17 11:21:51', 3, '#CFC700'),
(90, 'ola', 9, '2023-05-17 12:06:50', 4, '#CFC700'),
(91, 'coucou', 9, '2023-05-17 12:02:27', 1, '#007AFF'),
(92, 'hello', 9, '2023-05-17 12:28:00', 1, '#15E25F'),
(93, 'what\'s up', 9, '2023-05-17 12:02:28', 1, '#FF7000'),
(120, 'salut', 17, '2023-05-22 08:47:06', 1, 'rgb(0, 0'),
(121, 'hello', 17, '2023-05-22 08:50:14', 1, 'rgb(0, 0'),
(122, 'wesh', 17, '2023-05-22 08:56:54', 1, 'rgb(0, 0'),
(123, 'hello', 17, '2023-05-22 09:08:04', 1, 'rgb(207,'),
(124, 'hgcghc', 17, '2023-05-22 09:10:00', 1, 'rgb(207,'),
(125, 'wesh', 17, '2023-05-22 09:11:04', 1, 'rgb(207,'),
(126, 'hello', 17, '2023-05-22 09:13:54', 1, 'rgb(207,'),
(127, 'hello', 17, '2023-05-22 09:17:11', 1, 'rgb(0, 0'),
(128, 'salut', 15, '2023-05-22 09:21:43', 1, 'rgb(207,'),
(129, 'bonjour', 15, '2023-05-22 09:21:52', 1, 'rgb(207,'),
(130, 'ola!', 17, '2023-05-22 10:14:16', 1, 'rgb(207,'),
(131, 'Hi', 17, '2023-05-22 10:14:22', 2, 'rgb(207,'),
(132, 'Salut', 17, '2023-05-22 10:14:29', 3, 'rgb(207,'),
(133, 'Wesh', 17, '2023-05-22 10:14:37', 4, 'rgb(207,'),
(134, 'Bien ma gueule ?', 17, '2023-05-22 10:14:45', 5, 'rgb(207,'),
(135, 'Bonjour', 16, '2023-05-22 10:15:09', 1, 'rgb(0, 1'),
(136, 'Coucou', 16, '2023-05-22 10:15:18', 2, 'rgb(0, 1'),
(137, 'Welcome', 16, '2023-05-22 10:15:28', 3, 'rgb(0, 1'),
(138, 'Guten Morgen', 16, '2023-05-22 10:15:55', 4, 'rgb(0, 1'),
(139, 'Buenos dias', 16, '2023-05-22 10:16:14', 5, 'rgb(0, 1');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`) VALUES
(1, 'Bienvenue'),
(2, 'Veille technologique'),
(3, 'Divers'),
(4, 'Room 1'),
(5, 'Room 2');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_color` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_color`) VALUES
(17, 'aze', '$2y$10$U4azYnTFylQny7OrxTESaOEtsTkKG1i69acn1VA8maQE/.mn65XXu', 'aze@aze.fr', '#CF1100'),
(15, 'wikiny', '$2y$10$WKWQ0uZLlfhBb7Jg8VBppewTvXPO91vDXwlxDKMHzlTSXQUt1vxeO', 'wikiny@gmail.com', '#CFC700'),
(16, 'alex', '$2y$10$v3bj8chcIoyVjUc2P3SjdOHSqWxRB4dyVnM2HDZrnLS6Icy.h3u5q', 'alex@alex.fr', '#007AFF');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages` ADD FULLTEXT KEY `msg_text` (`msg_text`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
