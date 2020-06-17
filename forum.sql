-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 10 mai 2020 à 00:07
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `SGI`
--

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `candidat` int(11) DEFAULT NULL,
  `coach` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `candidat` (`candidat`),
  ADD KEY `coach` (`coach`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`candidat`) REFERENCES `candidat` (`id_candidat`),
  ADD CONSTRAINT `forum_ibfk_2` FOREIGN KEY (`coach`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
