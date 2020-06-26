-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 mai 2020 à 16:34
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `league_of_friend`
--
CREATE DATABASE IF NOT EXISTS `league_of_friend` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `league_of_friend`;

-- --------------------------------------------------------

--
-- Structure de la table `info_lol`
--

DROP TABLE IF EXISTS `info_lol`;
CREATE TABLE IF NOT EXISTS `info_lol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_lol` varchar(255) NOT NULL,
  `niveaux_lol` int(11) NOT NULL,
  `champion_pref` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `info_lol`
--

INSERT INTO `info_lol` (`id`, `pseudo_lol`, `niveaux_lol`, `champion_pref`) VALUES
(1, 'guenole76', 268, 'teemo'),
(2, 'mukuro', 250, 'azir'),
(3, 'meiklord', 160, 'yumi'),
(4, 'light', 260, 'riven');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_info_lol` int(11) DEFAULT NULL,
  `pseudo_app` varchar(255) NOT NULL,
  `mdp_app` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id`, `id_info_lol`, `pseudo_app`, `mdp_app`, `email`) VALUES
(20, 2, 'mukuro', '$2y$10$ZWzxPhUrlQggiMtbBfeWj.c86W7ig0InXHTKepDuJPti64tkIGnaa', 'cedric2701@hotmail.fr'),
(21, 3, 'meiklord', '$2y$10$Hz.kv9k/cCg.cWyryj9X.uj2Zg0PsdoaSX8bs3ixGYr2tfkQITLvW', 'yoann.courtonne@hotmail.fr'),
(22, NULL, 'sakanade', '$2y$10$8PkO5.MryuWhvhz47XeAiuXlTSbiOsvuxeDjFyzQuGUqTBzHUKpjG', 'cedric.courtonne.n@gmail.com'),
(23, NULL, 'test', '$2y$10$z.vq3TxQwRSn4r49AwZjkeqOq1mcPnUR2AdHcPPrnrAwa5hyizqlK', 'test@gmail.com'),
(24, 1, 'guenole76', '$2y$10$Chmn8eit.rEAaV/BZkVZnuS0IGjlBX07jdehfbRNx7.z.JA1U5UtG', 'guenole76@gmail.com');
--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
