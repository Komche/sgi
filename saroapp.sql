-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 sep. 2019 à 13:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `saroapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

DROP TABLE IF EXISTS `actions`;
CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `action_url` varchar(20) DEFAULT NULL,
  `module` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `module` (`module`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `name`, `description`, `action_url`, `module`) VALUES
(1, 'Rôle', 'Gestion des rôle', 'role', 1),
(2, 'Module', 'Gestion des modules', 'module', 1),
(4, 'Ajouter utilisateur', 'permet d\'Ajouter un utilisateur', 'addUser', 1),
(5, 'Consulter', 'consulter une page', '', 2),
(7, 'Ajout geste de secours', 'Permet d\'ajouter geste de secours', 'addEmergency', 4),
(8, 'Voir geste de secours', 'Permet de voir geste de secours', 'showEmergency', 4),
(9, 'Liste des utilisateurs', 'permet  de voir les utilisateur', 'showUser', 1),
(10, 'Types agents', 'permet d\'ajouter et voirs  les  types d\'agents', 'type', 1),
(11, 'Groupement régionale', 'permet d\'ajouter et voir le groupement régionaele', 'regional_group', 5),
(12, 'Compagnie', 'permet d\'ajouter et voir les compagnie', 'compagnie', 5),
(13, 'Centre de secours', 'permet d\'ajouter et voir les centre de secours', 'rescue', 5),
(14, 'Ville', 'permet d\'ajouter et voir des villes', 'cities', 5),
(15, 'Ajout plan des bâtiment', 'permet d\'ajouter un plan de bâtiment', 'ajout-plan', 6),
(16, 'Voir plan des bâtiments', 'permet de consulter le plan des bâtiments', 'voir-plan', 6);

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `city`
--

INSERT INTO `city` (`id`, `label`) VALUES
(1, 'Niamey'),
(2, 'Tahoua'),
(3, 'Zinder'),
(4, 'Maradi'),
(5, 'Agadez'),
(6, 'Tillabery'),
(7, 'Dosso'),
(8, 'Konni'),
(9, 'Tera'),
(10, 'Matamey'),
(11, 'Tessaoua'),
(12, 'Dogon Doutchi');

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `regional_group` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `regional_group` (`regional_group`),
  KEY `city` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id`, `label`, `regional_group`, `city`) VALUES
(1, 'Compagine du Grand marché', 1, 1),
(2, 'Compagnie de Bobiel', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city` (`city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emergency_geste`
--

DROP TABLE IF EXISTS `emergency_geste`;
CREATE TABLE IF NOT EXISTS `emergency_geste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `files` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `files` (`files`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emergency_geste`
--

INSERT INTO `emergency_geste` (`id`, `title`, `description`, `youtube_url`, `files`) VALUES
(1, 'Les 4 étapes pour porter secours', '<h3 style=\"color:#e3001b; font-style:normal\">1. S&Eacute;CURISEZ LE LIEU DE L&#39;ACCIDENT ET LES PERSONNES IMPLIQU&Eacute;ES</h3>\r\n\r\n<p><img alt=\"1\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/1/83553-1-fre-FR/1_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Evaluez les conditions de s&eacute;curit&eacute; et v&eacute;rifiez qu&#39;il n&#39;existe aucun danger suppl&eacute;mentaire (circulation, incendie, &eacute;lectricit&eacute;...).</p>\r\n\r\n<p>N&#39;approchez le lieu de l&#39;accident que si cela ne pr&eacute;sente aucun risque pour vous. Dans la mesure du possible, assurez la s&eacute;curit&eacute; des victimes et des autres personnes pr&eacute;sentes.</p>\r\n\r\n<p>Si la situation est dangereuse et si vous ne pouvez agir sans prendre de risque, alertez les services d&#39;urgence. Etablissez un p&eacute;rim&egrave;tre de s&eacute;curit&eacute; autour du lieu de l&#39;accident en attendant l&#39;arriv&eacute;e des secours.</p>\r\n\r\n<p><a id=\"eztoc83521_0_2\" name=\"eztoc83521_0_2\"></a></p>\r\n\r\n<h3 style=\"color:#e3001b; font-style:normal\">2. APPR&Eacute;CIEZ L&#39;&Eacute;TAT DE LA VICTIME</h3>\r\n\r\n<p><img alt=\"2\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/2/83568-1-fre-FR/2_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Pr&eacute;sentez-vous et expliquez &agrave; la victime ce que vous allez faire afin de la rassurer. V&eacute;rifiez qu&#39;elle est consciente et respire normalement (cf. partie sur&nbsp;<a href=\"https://www.croix-rouge.fr/Je-me-forme/Particuliers/Les-6-gestes-de-base/L-inconscience\" target=\"_self\">l&#39;inconscience</a>). Le pronostic vital est souvent en jeu en cas d&#39;alt&eacute;ration de la conscience ou de la respiration. Ces &eacute;l&eacute;ments seront &agrave; transmettre aux secours.</p>\r\n\r\n<p><a id=\"eztoc83521_0_3\" name=\"eztoc83521_0_3\"></a></p>\r\n\r\n<h3 style=\"color:#e3001b; font-style:normal\">3. DEMANDEZ DE L&#39;AIDE</h3>\r\n\r\n<p><img alt=\"3\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/3/83572-1-fre-FR/3_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Si vous avez besoin d&#39;aide, alertez les services d&#39;urgence :</p>\r\n\r\n<p><strong>Le 18</strong>&nbsp;: les sapeurs-pompiers pour tout probl&egrave;me de secours, notamment accident, incendie.</p>\r\n\r\n<p><strong>Le 15</strong>&nbsp;: le Samu pour tout probl&egrave;me urgent de sant&eacute;, c&#39;est un secours m&eacute;dicalis&eacute;.</p>\r\n\r\n<p><strong>Le 17</strong>&nbsp;: la police ou la gendarmerie pour tout probl&egrave;me de s&eacute;curit&eacute; ou d&#39;ordre public.</p>\r\n\r\n<p><strong>Le 112</strong>&nbsp;: num&eacute;ro d&#39;appel unique des urgences sur le territoire europ&eacute;en, recommand&eacute; aux &eacute;trangers circulant en France et aux Fran&ccedil;ais circulant &agrave; l&#39;&eacute;tranger.</p>\r\n\r\n<p><strong>Le 115</strong>&nbsp;: le Samu social pour toute personne qui pr&eacute;sente une d&eacute;tresse sociale comme les personnes sans domicile ou sans abri et expos&eacute;es aux intemp&eacute;ries.</p>\r\n\r\n<p><a id=\"eztoc83521_0_3_1\" name=\"eztoc83521_0_3_1\"></a></p>\r\n\r\n<p>VOUS DEVEZ POUVOIR FOURNIR AUX SERVICES D&#39;URGENCE</p>\r\n\r\n<ul>\r\n	<li>le num&eacute;ro de t&eacute;l&eacute;phone ou de la borne d&#39;o&ugrave; vous appelez,</li>\r\n	<li>si n&eacute;cessaire, votre nom,</li>\r\n	<li>la nature du probl&egrave;me (maladie ou accident),</li>\r\n	<li>les risques &eacute;ventuels (incendie, explosion, effondrement...),</li>\r\n	<li>la localisation pr&eacute;cise de l&#39;&eacute;v&eacute;nement,</li>\r\n	<li>le nombre de personnes concern&eacute;es,</li>\r\n	<li>l&#39;&eacute;tat de chaque victime,</li>\r\n	<li>les premi&egrave;res mesures prises,</li>\r\n</ul>\r\n\r\n<p>Vous devez &eacute;galement r&eacute;pondre aux questions qui vous seront pos&eacute;es par les secours ou par le m&eacute;decin.</p>\r\n\r\n<p><a id=\"eztoc83521_0_4\" name=\"eztoc83521_0_4\"></a></p>\r\n\r\n<h3 style=\"color:#e3001b; font-style:normal\">4. EFFECTUEZ LES GESTES DE PREMIERS SECOURS</h3>\r\n\r\n<p><img alt=\"4\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/4/83576-1-fre-FR/4_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Dispensez les gestes de premiers secours de fa&ccedil;on calme et non pr&eacute;cipit&eacute;e.</p>\r\n\r\n<p><em>&nbsp;Ces contenus sont extraits du guide des gestes qui sauvent de la Croix-Rouge fran&ccedil;aise, remis &agrave; chaque participant &agrave; une formation PSC 1. Textes : Dr Pascal Cassan, Dr Daniel Meyran, Dr Vincent Hubert - Photo : Val&eacute;rie Archeno - Illustrations : Philippe Diemunch - Pictogrammes : Yann Brien.</em></p>\r\n', NULL, 44),
(2, 'Les 4 étapes pour porter secours', '<h3 style=\"color:#e3001b; font-style:normal\">1. S&Eacute;CURISEZ LE LIEU DE L&#39;ACCIDENT ET LES PERSONNES IMPLIQU&Eacute;ES</h3>\r\n\r\n<p><img alt=\"1\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/1/83553-1-fre-FR/1_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Evaluez les conditions de s&eacute;curit&eacute; et v&eacute;rifiez qu&#39;il n&#39;existe aucun danger suppl&eacute;mentaire (circulation, incendie, &eacute;lectricit&eacute;...).</p>\r\n\r\n<p>N&#39;approchez le lieu de l&#39;accident que si cela ne pr&eacute;sente aucun risque pour vous. Dans la mesure du possible, assurez la s&eacute;curit&eacute; des victimes et des autres personnes pr&eacute;sentes.</p>\r\n\r\n<p>Si la situation est dangereuse et si vous ne pouvez agir sans prendre de risque, alertez les services d&#39;urgence. Etablissez un p&eacute;rim&egrave;tre de s&eacute;curit&eacute; autour du lieu de l&#39;accident en attendant l&#39;arriv&eacute;e des secours.</p>\r\n\r\n<p><a id=\"eztoc83521_0_2\" name=\"eztoc83521_0_2\"></a></p>\r\n\r\n<h3 style=\"color:#e3001b; font-style:normal\">2. APPR&Eacute;CIEZ L&#39;&Eacute;TAT DE LA VICTIME</h3>\r\n\r\n<p><img alt=\"2\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/2/83568-1-fre-FR/2_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Pr&eacute;sentez-vous et expliquez &agrave; la victime ce que vous allez faire afin de la rassurer. V&eacute;rifiez qu&#39;elle est consciente et respire normalement (cf. partie sur&nbsp;<a href=\"https://www.croix-rouge.fr/Je-me-forme/Particuliers/Les-6-gestes-de-base/L-inconscience\" target=\"_self\">l&#39;inconscience</a>). Le pronostic vital est souvent en jeu en cas d&#39;alt&eacute;ration de la conscience ou de la respiration. Ces &eacute;l&eacute;ments seront &agrave; transmettre aux secours.</p>\r\n\r\n<p><a id=\"eztoc83521_0_3\" name=\"eztoc83521_0_3\"></a></p>\r\n\r\n<h3 style=\"color:#e3001b; font-style:normal\">3. DEMANDEZ DE L&#39;AIDE</h3>\r\n\r\n<p><img alt=\"3\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/3/83572-1-fre-FR/3_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Si vous avez besoin d&#39;aide, alertez les services d&#39;urgence :</p>\r\n\r\n<p><strong>Le 18</strong>&nbsp;: les sapeurs-pompiers pour tout probl&egrave;me de secours, notamment accident, incendie.</p>\r\n\r\n<p><strong>Le 15</strong>&nbsp;: le Samu pour tout probl&egrave;me urgent de sant&eacute;, c&#39;est un secours m&eacute;dicalis&eacute;.</p>\r\n\r\n<p><strong>Le 17</strong>&nbsp;: la police ou la gendarmerie pour tout probl&egrave;me de s&eacute;curit&eacute; ou d&#39;ordre public.</p>\r\n\r\n<p><strong>Le 112</strong>&nbsp;: num&eacute;ro d&#39;appel unique des urgences sur le territoire europ&eacute;en, recommand&eacute; aux &eacute;trangers circulant en France et aux Fran&ccedil;ais circulant &agrave; l&#39;&eacute;tranger.</p>\r\n\r\n<p><strong>Le 115</strong>&nbsp;: le Samu social pour toute personne qui pr&eacute;sente une d&eacute;tresse sociale comme les personnes sans domicile ou sans abri et expos&eacute;es aux intemp&eacute;ries.</p>\r\n\r\n<p><a id=\"eztoc83521_0_3_1\" name=\"eztoc83521_0_3_1\"></a></p>\r\n\r\n<p>VOUS DEVEZ POUVOIR FOURNIR AUX SERVICES D&#39;URGENCE</p>\r\n\r\n<ul>\r\n	<li>le num&eacute;ro de t&eacute;l&eacute;phone ou de la borne d&#39;o&ugrave; vous appelez,</li>\r\n	<li>si n&eacute;cessaire, votre nom,</li>\r\n	<li>la nature du probl&egrave;me (maladie ou accident),</li>\r\n	<li>les risques &eacute;ventuels (incendie, explosion, effondrement...),</li>\r\n	<li>la localisation pr&eacute;cise de l&#39;&eacute;v&eacute;nement,</li>\r\n	<li>le nombre de personnes concern&eacute;es,</li>\r\n	<li>l&#39;&eacute;tat de chaque victime,</li>\r\n	<li>les premi&egrave;res mesures prises,</li>\r\n</ul>\r\n\r\n<p>Vous devez &eacute;galement r&eacute;pondre aux questions qui vous seront pos&eacute;es par les secours ou par le m&eacute;decin.</p>\r\n\r\n<p><a id=\"eztoc83521_0_4\" name=\"eztoc83521_0_4\"></a></p>\r\n\r\n<h3 style=\"color:#e3001b; font-style:normal\">4. EFFECTUEZ LES GESTES DE PREMIERS SECOURS</h3>\r\n\r\n<p><img alt=\"4\" class=\"right\" src=\"https://www.croix-rouge.fr/var/crf_internet/storage/images/media/images/4/83576-1-fre-FR/4_medium-187.gif\" style=\"float:left; margin:0px 7px 3px 0px; width:auto\" /></p>\r\n\r\n<p>Dispensez les gestes de premiers secours de fa&ccedil;on calme et non pr&eacute;cipit&eacute;e.</p>\r\n\r\n<p><em>&nbsp;Ces contenus sont extraits du guide des gestes qui sauvent de la Croix-Rouge fran&ccedil;aise, remis &agrave; chaque participant &agrave; une formation PSC 1. Textes : Dr Pascal Cassan, Dr Daniel Meyran, Dr Vincent Hubert - Photo : Val&eacute;rie Archeno - Illustrations : Philippe Diemunch - Pictogrammes : Yann Brien.</em></p>\r\n', NULL, 45);

-- --------------------------------------------------------

--
-- Structure de la table `engin`
--

DROP TABLE IF EXISTS `engin`;
CREATE TABLE IF NOT EXISTS `engin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(20) NOT NULL,
  `registration_number` varchar(20) NOT NULL,
  `status` varchar(13) NOT NULL,
  `have_field` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `engin_tools`
--

DROP TABLE IF EXISTS `engin_tools`;
CREATE TABLE IF NOT EXISTS `engin_tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(20) NOT NULL,
  `engin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `engin` (`engin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_url`, `file_type`, `file_size`) VALUES
(0, 'Admin', 'public/vendor/dist/img/avatar.png', 'sss', 50),
(35, 'Komche.jpg', 'public/img/2019.08.27.07.20.55Komche.jpg', 'image/jpeg', 371995),
(36, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.52.49migration-3129340_1920.jpg', 'image/jpeg', 698965),
(37, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.54.10migration-3129340_1920.jpg', 'image/jpeg', 698965),
(38, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.55.05migration-3129340_1920.jpg', 'image/jpeg', 698965),
(39, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.55.43migration-3129340_1920.jpg', 'image/jpeg', 698965),
(40, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.56.06migration-3129340_1920.jpg', 'image/jpeg', 698965),
(41, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.57.18migration-3129340_1920.jpg', 'image/jpeg', 698965),
(42, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.58.58migration-3129340_1920.jpg', 'image/jpeg', 698965),
(43, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.59.23migration-3129340_1920.jpg', 'image/jpeg', 698965),
(44, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.06.59.42migration-3129340_1920.jpg', 'image/jpeg', 698965),
(45, 'migration-3129340_1920.jpg', 'public/img/2019.08.28.07.00.31migration-3129340_1920.jpg', 'image/jpeg', 698965),
(46, 'ajout gs.png', 'public/img/2019.09.01.22.06.29ajout gs.png', 'image/png', 22695),
(47, 'plan.png', 'public/img/2019.09.01.22.08.40plan.png', 'image/png', 1830923),
(48, 'plan 1.png', 'public/img/2019.09.01.22.10.20plan 1.png', 'image/png', 1568772);

-- --------------------------------------------------------

--
-- Structure de la table `history_data`
--

DROP TABLE IF EXISTS `history_data`;
CREATE TABLE IF NOT EXISTS `history_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(10) NOT NULL,
  `table_name` varchar(20) NOT NULL,
  `table_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `created_at` (`created_at`),
  KEY `table_id` (`table_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `history_data`
--

INSERT INTO `history_data` (`id`, `created_by`, `created_at`, `action`, `table_name`, `table_id`) VALUES
(1, 8, '2019-08-27 00:52:44', 'ajout', 'type_agent', 22),
(2, 8, '2019-08-27 00:52:52', 'ajout', 'type_agent', 23),
(3, 9, '2019-08-28 23:34:50', 'ajout', 'module', 5),
(4, 8, '2019-09-01 21:44:25', 'ajout', 'module', 6);

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

DROP TABLE IF EXISTS `incident`;
CREATE TABLE IF NOT EXISTS `incident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nature` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `object` varchar(20) NOT NULL,
  `district` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `district` (`district`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`) VALUES
(1, 'Administration', NULL, 'le module d\'administration'),
(2, 'Visiteur', NULL, 'Le visiteur du site'),
(3, 'Visite', NULL, 'une viste'),
(4, 'Geste de secours', 'fa-hand-paper-o', 'Gestion de geste de secours'),
(5, 'Configuration', 'fa-gears', 'Configuration de l\'application'),
(6, 'Plan des Bâtiments', 'fa-bank', 'Permet d\'ajouter et de consulter le plan d\'un bâtiment');

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

DROP TABLE IF EXISTS `module_role`;
CREATE TABLE IF NOT EXISTS `module_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `permission_id` (`module`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(8, 1, 1),
(12, 1, 4),
(13, 1, 5),
(14, 6, 4),
(15, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `national_group`
--

DROP TABLE IF EXISTS `national_group`;
CREATE TABLE IF NOT EXISTS `national_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `national_group`
--

INSERT INTO `national_group` (`id`, `label`) VALUES
(1, 'Groupement national');

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `file` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `file` (`file`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plan`
--

INSERT INTO `plan` (`id`, `title`, `file`) VALUES
(1, 'Plan Orange Niger', 46),
(2, 'Plan Ministère de la santé', 47),
(3, 'Plan Nigelec', 48);

-- --------------------------------------------------------

--
-- Structure de la table `regional_group`
--

DROP TABLE IF EXISTS `regional_group`;
CREATE TABLE IF NOT EXISTS `regional_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(80) NOT NULL,
  `national_group` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `national_group` (`national_group`),
  KEY `city` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regional_group`
--

INSERT INTO `regional_group` (`id`, `label`, `national_group`, `city`) VALUES
(1, 'Groupement régional de Niamey', 1, 1),
(2, 'Groupement régional de Tillabery', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `rescue_center`
--

DROP TABLE IF EXISTS `rescue_center`;
CREATE TABLE IF NOT EXISTS `rescue_center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(80) NOT NULL,
  `company` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city` (`company`),
  KEY `city_2` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rescue_center`
--

INSERT INTO `rescue_center` (`id`, `label`, `company`, `city`) VALUES
(1, 'Centre de sécour 1', 1, 1),
(2, 'Centre de secours 2', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Administrateur', 'Il a tout les droits'),
(5, 'Visiteur', 'Le visiteur site'),
(6, 'Secouriste', 'il a le droit de secouriste'),
(7, 'Configuration', 'Configuration du site');

-- --------------------------------------------------------

--
-- Structure de la table `type_agent`
--

DROP TABLE IF EXISTS `type_agent`;
CREATE TABLE IF NOT EXISTS `type_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_agent`
--

INSERT INTO `type_agent` (`id`, `label`) VALUES
(0, 'Administrateur'),
(2, 'Sergent'),
(3, 'Secouriste'),
(4, 'Garde'),
(5, 'Sergent chef'),
(6, 'Officier'),
(7, 'sous-officier'),
(8, 'Général');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `casern` int(11) NOT NULL,
  `type_agent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) DEFAULT '0',
  `password_` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_agent` (`type_agent`),
  KEY `role` (`role`),
  KEY `photo` (`photo`),
  KEY `casern` (`casern`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `matricule`, `phone_number`, `casern`, `type_agent`, `created_at`, `updated_at`, `photo`, `role`, `status`, `password_`) VALUES
(8, 'admin', 'Komche', 'AA00', '+22798960382', 1, 6, '2019-08-26 20:05:41', NULL, 0, 1, 0, '$2y$10$0vEFPAFKcqo9GwDcqZOUeOpcpTY/hwtFuf3DoYT.NH6FgT79oF71e'),
(9, 'Abdoul Razak', 'Adamou', '5LMH55', '+22792470763', 2, 4, '2019-08-27 07:20:55', '2019-08-27 09:07:42', 35, 6, 1, '$2y$10$iUQXq6gqIhPBwjdFMadDVu3uWrxXWUVXxIxPPEdhzPT9ISzUUyTKW');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`regional_group`) REFERENCES `regional_group` (`id`),
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Contraintes pour la table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Contraintes pour la table `emergency_geste`
--
ALTER TABLE `emergency_geste`
  ADD CONSTRAINT `emergency_geste_ibfk_1` FOREIGN KEY (`files`) REFERENCES `files` (`id`);

--
-- Contraintes pour la table `engin_tools`
--
ALTER TABLE `engin_tools`
  ADD CONSTRAINT `engin_tools_ibfk_1` FOREIGN KEY (`engin`) REFERENCES `engin` (`id`);

--
-- Contraintes pour la table `history_data`
--
ALTER TABLE `history_data`
  ADD CONSTRAINT `history_data_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `incident_ibfk_1` FOREIGN KEY (`district`) REFERENCES `district` (`id`);

--
-- Contraintes pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD CONSTRAINT `module_role_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_role_ibfk_2` FOREIGN KEY (`module`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `regional_group`
--
ALTER TABLE `regional_group`
  ADD CONSTRAINT `regional_group_ibfk_1` FOREIGN KEY (`national_group`) REFERENCES `national_group` (`id`),
  ADD CONSTRAINT `regional_group_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Contraintes pour la table `rescue_center`
--
ALTER TABLE `rescue_center`
  ADD CONSTRAINT `rescue_center_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `rescue_center_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type_agent`) REFERENCES `type_agent` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`role`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`photo`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `users_ibfk_5` FOREIGN KEY (`casern`) REFERENCES `rescue_center` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
