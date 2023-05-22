-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 mai 2023 à 13:31
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_text`, `msg_user_id`, `msg_date`, `msg_room_id`, `msg_color`) VALUES
(19, 'hello', 9, '2023-05-16 12:33:57', 1, '#FF7000'),
(10, 'wesh', 9, '2023-05-16 09:13:41', 1, '#CF00BE'),
(18, 'hello', 9, '2023-05-16 12:33:06', 1, '#007AFF'),
(12, 'come on ', 9, '2023-05-16 09:20:13', 1, '#CF00BE'),
(17, 'hello', 9, '2023-05-16 12:30:00', 1, '#007AFF'),
(14, 'wesh wesh wesh', 9, '2023-05-16 09:28:08', 1, '#007AFF'),
(15, 'coucou', 9, '2023-05-16 11:33:44', 1, '#FF7000'),
(16, 'toto', 9, '2023-05-16 11:33:52', 1, '#FF7000');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(9, 'aze', '$2y$10$/Z33Fs77uj91fseLh519DOc5bAm2PiLOW8uMG5RL49onh4ZY1xU2m', 'aze@aze.fr');

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
