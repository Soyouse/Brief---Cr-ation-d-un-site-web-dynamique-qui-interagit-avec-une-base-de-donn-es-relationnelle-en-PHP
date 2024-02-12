-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 fév. 2024 à 16:05
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

CREATE DATABASE medicament;
USE medicament;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `medicament`
--

-- --------------------------------------------------------

--
-- Structure de la table `descriptions`
--

DROP TABLE IF EXISTS `descriptions`;
CREATE TABLE IF NOT EXISTS `descriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `descriptions`
--

INSERT INTO `descriptions` (`id`, `description`) VALUES
(1, 'Amélioration de la clarté mentale, augmentation de la productivité'),
(2, 'Amélioration de la clarté mentale, augmentation de la productivité.'),
(3, 'Amélioration de la clarté mentale, augmentation de la productivité'),
(4, 'Amélioration de la clarté mentale, augmentation de la productivité'),
(5, 'Amélioration de la clarté mentale, augmentation de la productivité'),
(6, 'Amélioration de la clarté mentale, augmentation de la productivité'),
(7, 'Amélioration de la clarté mentale, augmentation de la productivité'),
(8, 'Amélioration de la clarté mentale, augmentation de la productivité');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `img_name`) VALUES
(1, 'acid'),
(2, 'blanc'),
(3, 'bleu'),
(4, 'blouge'),
(5, 'bronze'),
(6, 'noir'),
(7, 'rose'),
(8, 'vert');

-- --------------------------------------------------------

--
-- Structure de la table `medicaments`
--

DROP TABLE IF EXISTS `medicaments`;
CREATE TABLE IF NOT EXISTS `medicaments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img_id` int NOT NULL,
  `title_id` int NOT NULL,
  `description_id` int NOT NULL,
  `prix_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `img_id` (`img_id`),
  KEY `title_id` (`title_id`),
  KEY `description_id` (`description_id`),
  KEY `prix_id` (`prix_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medicaments`
--

INSERT INTO `medicaments` (`id`, `img_id`, `title_id`, `description_id`, `prix_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2),
(3, 3, 3, 3, 6),
(4, 4, 4, 4, 3),
(5, 5, 5, 5, 2),
(6, 6, 6, 6, 1),
(7, 7, 7, 7, 5),
(8, 8, 8, 8, 4);

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

DROP TABLE IF EXISTS `prix`;
CREATE TABLE IF NOT EXISTS `prix` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prix` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`id`, `prix`) VALUES
(1, 32),
(2, 55),
(3, 82),
(4, 45),
(5, 22),
(6, 38);

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

DROP TABLE IF EXISTS `titres`;
CREATE TABLE IF NOT EXISTS `titres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `title`) VALUES
(1, 'MethaCure'),
(2, 'CrystalClearMind'),
(3, 'BlueHealX'),
(4, 'ChemBalance'),
(5, 'SynthoRelief'),
(6, 'BreakingBoost'),
(7, 'PureXyl'),
(8, 'BlueElixir');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medicaments`
--
ALTER TABLE `medicaments`
  ADD CONSTRAINT `medicaments_ibfk_5` FOREIGN KEY (`img_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `medicaments_ibfk_6` FOREIGN KEY (`title_id`) REFERENCES `titres` (`id`),
  ADD CONSTRAINT `medicaments_ibfk_7` FOREIGN KEY (`description_id`) REFERENCES `descriptions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
