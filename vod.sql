-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Décembre 2014 à 14:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vod`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_acteur` varchar(50) DEFAULT NULL,
  `prenom_acteur` varchar(50) DEFAULT NULL,
  `date_acteur` date DEFAULT NULL,
  `photo_acteur` varchar(100) DEFAULT NULL,
  `biographie_acteur` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `acteur_video`
--

CREATE TABLE IF NOT EXISTS `acteur_video` (
  `id_video` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  PRIMARY KEY (`id_video`,`id_acteur`),
  KEY `id_acteur` (`id_acteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) DEFAULT NULL,
  `id_compte` int(11) DEFAULT NULL,
  `commentaire` varchar(5000) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_avis`),
  KEY `id_compte` (`id_compte`),
  KEY `id_video` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomcategorie` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_video`
--

CREATE TABLE IF NOT EXISTS `categorie_video` (
  `id_video` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_video`,`id_categorie`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `info_paiement`
--

CREATE TABLE IF NOT EXISTS `info_paiement` (
  `id_infpaiement` int(11) NOT NULL AUTO_INCREMENT,
  `num_carte` varchar(16) DEFAULT NULL,
  `code_carte` varchar(3) DEFAULT NULL,
  `date_carte` date DEFAULT NULL,
  `adr_fac` varchar(100) DEFAULT NULL,
  `id_compte` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_infpaiement`),
  KEY `id_compte` (`id_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) DEFAULT NULL,
  `id_compte` int(11) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_paiement`),
  KEY `id_compte` (`id_compte`),
  KEY `id_video` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_real` int(11) NOT NULL AUTO_INCREMENT,
  `nom_real` varchar(50) DEFAULT NULL,
  `prenom_real` varchar(50) DEFAULT NULL,
  `date_real` date DEFAULT NULL,
  `photo_real` varchar(100) DEFAULT NULL,
  `biographie_real` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id_real`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `real_video`
--

CREATE TABLE IF NOT EXISTS `real_video` (
  `id_video` int(11) NOT NULL,
  `id_real` int(11) NOT NULL,
  PRIMARY KEY (`id_video`,`id_real`),
  KEY `id_real` (`id_real`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `sortie` datetime DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  `ba` varchar(200) DEFAULT NULL,
  `resume` varchar(5000) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `affiche` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id_video`, `titre`, `sortie`, `video`, `ba`, `resume`, `prix`, `affiche`) VALUES
(1, 'test', '2014-12-21 00:00:00', NULL, NULL, 'test', 9, 'C:\\Users\\valen_000\\Pictures\\Capture.png');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acteur_video`
--
ALTER TABLE `acteur_video`
  ADD CONSTRAINT `acteur_video_ibfk_1` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  ADD CONSTRAINT `acteur_video_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

--
-- Contraintes pour la table `categorie_video`
--
ALTER TABLE `categorie_video`
  ADD CONSTRAINT `categorie_video_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `categorie_video_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

--
-- Contraintes pour la table `info_paiement`
--
ALTER TABLE `info_paiement`
  ADD CONSTRAINT `info_paiement_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`),
  ADD CONSTRAINT `paiement_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

--
-- Contraintes pour la table `real_video`
--
ALTER TABLE `real_video`
  ADD CONSTRAINT `real_video_ibfk_1` FOREIGN KEY (`id_real`) REFERENCES `realisateur` (`id_real`),
  ADD CONSTRAINT `real_video_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
