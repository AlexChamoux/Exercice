-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 mars 2023 à 15:12
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
-- Base de données : `aironline`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NumMobile` int NOT NULL,
  `Email` varchar(75) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Id`, `Nom`, `Password`, `NumMobile`, `Email`) VALUES
(1, 'Administrateur', '$2y$10$WoJIEn1wzxv2ocT9T7nAi.Win0rctSxaGahXCA8PSDt', 706070607, 'alex@gmail.com'),
(2, 'Admin', '$2y$10$O/qSgt5ID/Rqbci6JcRMpOMSikIhwK79y2PBfKSuscg', 706070607, 'a@g');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Age` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `CatDistance` int NOT NULL,
  `CatTemps` int NOT NULL,
  `CatVoltige` int NOT NULL,
  `Rappel` int NOT NULL,
  `Conditions` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `Nom`, `Prenom`, `Age`, `email`, `CatDistance`, `CatTemps`, `CatVoltige`, `Rappel`, `Conditions`) VALUES
(19, 'viking', 'hfghfhf', 32, 'wikiny@gmail.com', 0, 0, 0, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
