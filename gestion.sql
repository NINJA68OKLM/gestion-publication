-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 juin 2023 à 15:04
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion-publication`
--

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `conference` varchar(255) DEFAULT NULL,
  `book` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `title`, `authors`, `publication_date`, `type_id`, `journal`, `volume`, `number`, `pages`, `editor`, `conference`, `book`) VALUES
(1, 'Les chevaliers d\'Emeraude', 'Anne Schreiber', '2023-05-29', 1, 'OUI', 2, 2, '2', 'OUI', 'OUI', 'OUI'),
(2, 'Eragon', 'Christopher Paolini', '2023-06-23', 2, 'Non', 3, 8, '10', 'Non', 'Non', 'Non'),
(3, 'Naruto', 'Masashi Kishimoto', '2023-07-09', 3, 'Yes', 9, 98, '90', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Structure de la table `publication_types`
--

DROP TABLE IF EXISTS `publication_types`;
CREATE TABLE IF NOT EXISTS `publication_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publication_types`
--

INSERT INTO `publication_types` (`id`, `type_name`) VALUES
(1, 'Article dans une revue'),
(2, 'Article dans une conference'),
(3, 'Chapitre dans un livre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'mustafa', 'mustafa.ekiz@uha.fr', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
