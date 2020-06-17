-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 18 juin 2020 à 00:49
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sgi`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idcli` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `datenaissance` date NOT NULL,
  `lieunaiss` date NOT NULL,
  `nationalite` varchar(30) NOT NULL,
  `civilite` varchar(30) NOT NULL,
  `nbrenfant` int(2) NOT NULL,
  `nomconjoint` varchar(50) NOT NULL,
  `situationmatrinoniale` varchar(30) NOT NULL,
  `regimematrinomial` varchar(50) NOT NULL,
  `adrpostal` varchar(255) NOT NULL,
  `codepostal` varchar(100) NOT NULL,
  `adrgeo` varchar(255) NOT NULL,
  `adrpro` varchar(255) NOT NULL,
  `tel1` varchar(50) NOT NULL,
  `tel2` varchar(50) NOT NULL,
  `tel3` varchar(50) NOT NULL,
  `telfixe` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `resident` varchar(50) NOT NULL,
  `zoneresidence` varchar(50) NOT NULL,
  `observation` text NOT NULL,
  `signature` varchar(255) NOT NULL,
  `modalite` text NOT NULL,
  `daterelation` date NOT NULL,
  `nomjeunefille` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pays` int(11) NOT NULL,
  `langue` int(11) NOT NULL,
  `piece` int(11) NOT NULL,
  `societe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `idcom` int(11) NOT NULL,
  `libellecom` varchar(50) NOT NULL,
  `ville` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(48, 'plan 1.png', 'public/img/2019.09.01.22.10.20plan 1.png', 'image/png', 1568772),
(49, 'aliment 2.png', 'public/img/2020.02.10.22.31.30aliment 2.png', 'image/png', 31762),
(50, 'aliment 5.png', 'public/img/2020.02.11.00.09.27aliment 5.png', 'image/png', 29132),
(51, 'aliment 5.png', 'public/img/2020.02.11.00.09.50aliment 5.png', 'image/png', 29132),
(52, 'aliment 5.png', 'public/img/2020.02.11.00.16.43aliment 5.png', 'image/png', 29132),
(53, 'aliment 5.png', 'public/img/2020.02.11.00.17.16aliment 5.png', 'image/png', 29132),
(54, 'aliment 5.png', 'public/img/2020.02.11.00.18.21aliment 5.png', 'image/png', 29132),
(55, 'aliment 5.png', 'public/img/2020.02.11.00.19.36aliment 5.png', 'image/png', 29132),
(56, 'aliment 5.png', 'public/img/2020.02.11.00.23.44aliment 5.png', 'image/png', 29132),
(57, 'aliment 5.png', 'public/img/2020.02.11.00.38.33aliment 5.png', 'image/png', 29132),
(58, 'pp.jpeg', 'public/img/2020.04.21.08.50.45pp.jpeg', 'image/jpeg', 29833),
(59, 'pp.jpeg', 'public/img/2020.04.21.08.51.04pp.jpeg', 'image/jpeg', 29833),
(60, 'pp.jpeg', 'public/img/2020.04.21.08.51.11pp.jpeg', 'image/jpeg', 29833),
(61, 'pp.jpeg', 'public/img/2020.04.21.08.51.28pp.jpeg', 'image/jpeg', 29833),
(62, 'pp.jpeg', 'public/img/2020.04.21.08.53.52pp.jpeg', 'image/jpeg', 29833),
(63, 'pp.jpeg', 'public/img/2020.04.21.08.54.39pp.jpeg', 'image/jpeg', 29833),
(64, 'pp.jpeg', 'public/img/2020.04.21.08.55.25pp.jpeg', 'image/jpeg', 29833),
(65, '20190312_101137 - Gaëlle Déborah Ouedraogo.jpg', 'public/img/2020.04.26.13.50.3920190312_101137 - Gaëlle Déborah Ouedraogo.jpg', 'image/jpeg', 477732),
(66, 'FIEVRE.png', 'public/img/2020.04.26.19.30.02FIEVRE.png', 'image/png', 31582),
(67, 'logo project', 'public/img/logo_project.svg', 'svg', 7),
(68, 'FIEVRE.png', 'public/img/2020.05.03.14.12.24FIEVRE.png', 'image/png', 31582),
(69, 'Claire .jpg', 'public/img/2020.05.03.16.43.28Claire .jpg', 'image/jpeg', 46973),
(70, 'Ollivier.jpg', 'public/img/2020.05.03.16.44.21Ollivier.jpg', 'image/jpeg', 5559760),
(71, 'almoctar avec fond.jpg', 'public/img/2020.05.03.16.45.19almoctar avec fond.jpg', 'image/jpeg', 1385933),
(72, 'Gaëlle Déborah Ouedraogo.jpg', 'public/img/2020.05.09.14.51.14Gaëlle Déborah Ouedraogo.jpg', 'image/jpeg', 80903),
(73, 'Claire_.jpg', 'public/img/2020.05.09.14.51.27Claire_.jpg', 'image/jpeg', 71874),
(74, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.08.35Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008),
(75, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.09.42Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008),
(76, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.10.38Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008),
(77, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.11.01Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008),
(78, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.12.28Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008),
(79, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.16.11Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008),
(80, 'Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'public/img/2020.05.10.14.16.42Daouda_Hamadou_HD_2 - Daouda Hamadou.jpg', 'image/jpeg', 85008);

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `idlang` int(11) NOT NULL,
  `libellelang` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `description` text,
  `action_url` varchar(100) DEFAULT NULL,
  `sub_module` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES
(1, 'Administration', NULL, 'le module d\'administration', NULL, NULL),
(5, 'Configuration', 'fa-gears', 'Configuration de l\'application', NULL, NULL),
(8, 'Rôle', NULL, 'Gestion des rôle', 'role', 1),
(9, 'Module', NULL, 'Gestion des modules', 'module', 1),
(10, 'Ajouter utilisateur', NULL, 'permet d\'Ajouter un utilisateur', 'addUser', 1),
(14, 'Liste des utilisateurs', NULL, 'permet  de voir les utilisateur', 'showUser', 1),
(15, 'Types agents', NULL, 'permet d\'ajouter et voirs  les  types d\'agents', 'type', 1),
(27, 'Ville', NULL, 'Gestion des villes', 'ville', 5),
(28, 'Liste des projets', NULL, 'qui organisent le concours', 'listeProjet', 1),
(29, 'Utilisateur du site', NULL, 'Différent intervenants', 'users', 1),
(30, 'Coronackathon', 'fa-thumbs-o-up', 'organisation du concours', NULL, NULL),
(32, 'Noter les projets', NULL, 'Attribuer des note aux projets', 'noteProjet', 30),
(33, 'Attaher', 'fa-smile-o', 'juste pour tester', NULL, NULL),
(34, 'fils', NULL, 'une simple visite', 'fils', 33),
(43, 'Inscription', NULL, 'Lancer et fermer les incriptions', 'inscription', 1),
(44, 'Attribution de coach', NULL, 'Attribuer des coachs aux projets', 'attributionCoach', 30),
(45, 'Compte client', 'fa-smile-o', 'Permet de gérer les différents compte clients', NULL, NULL),
(46, 'Personne physique', NULL, 'une Personne physique', 'personne-physique', 45),
(47, 'List des clients', NULL, 'list des clients', 'listClient', 45),
(48, 'Personne morale', NULL, 'ajout de personne morale', 'personne-morale', 45);

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES
(8, 1, 1),
(14, 6, 4),
(16, 6, 3),
(17, 8, 7),
(18, 8, 1),
(22, 1, 8),
(23, 1, 9),
(24, 1, 10),
(25, 1, 15),
(26, 1, 5),
(30, 1, 29),
(33, 6, 30),
(34, 6, 32),
(41, 1, 14),
(42, 1, 27),
(43, 1, 45),
(44, 1, 46),
(45, 1, 47),
(46, 1, 48);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idPays` int(11) NOT NULL,
  `libellePays` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idPays`, `libellePays`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALBANIA'),
(3, 'ALGERIA'),
(4, 'AMERICAN SAMOA'),
(5, 'ANDORRA'),
(6, 'ANGOLA'),
(7, 'ANGUILLA'),
(8, 'ANTARCTICA'),
(9, 'ANTIGUA AND BARBUDA'),
(10, 'ARGENTINA'),
(11, 'ARMENIA'),
(12, 'ARUBA'),
(13, 'AUSTRALIA'),
(14, 'AUSTRIA'),
(15, 'AZERBAIJAN'),
(16, 'BAHAMAS'),
(17, 'BAHRAIN'),
(18, 'BANGLADESH'),
(19, 'BARBADOS'),
(20, 'BELARUS'),
(21, 'BELGIUM'),
(22, 'BELIZE'),
(23, 'BENIN'),
(24, 'BERMUDA'),
(25, 'BHUTAN'),
(26, 'BOLIVIA'),
(27, 'BOSNIA AND HERZEGOVINA'),
(28, 'BOTSWANA'),
(29, 'BOUVET ISLAND'),
(30, 'BRAZIL'),
(31, 'BRITISH INDIAN OCEAN TERRITORY'),
(32, 'BRUNEI DARUSSALAM'),
(33, 'BULGARIA'),
(34, 'BURKINA FASO'),
(35, 'BURUNDI'),
(36, 'CAMBODIA'),
(37, 'CAMEROON'),
(38, 'CANADA'),
(39, 'CAPE VERDE'),
(40, 'CAYMAN ISLANDS'),
(41, 'CENTRAL AFRICAN REPUBLIC'),
(42, 'CHAD'),
(43, 'CHILE'),
(44, 'CHINA'),
(45, 'CHRISTMAS ISLAND'),
(46, 'COCOS (KEELING) ISLANDS'),
(47, 'COLOMBIA'),
(48, 'COMOROS'),
(49, 'CONGO'),
(50, 'CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
(51, 'COOK ISLANDS'),
(52, 'COSTA RICA'),
(53, 'COTE D\'IVOIRE'),
(54, 'CROATIA'),
(55, 'CUBA'),
(56, 'CYPRUS'),
(57, 'CZECH REPUBLIC'),
(58, 'DENMARK'),
(59, 'DJIBOUTI'),
(60, 'DOMINICA'),
(61, 'DOMINICAN REPUBLIC'),
(62, 'ECUADOR'),
(63, 'EGYPT'),
(64, 'EL SALVADOR'),
(65, 'EQUATORIAL GUINEA'),
(66, 'ERITREA'),
(67, 'ESTONIA'),
(68, 'ETHIOPIA'),
(69, 'FALKLAND ISLANDS (MALVINAS)'),
(70, 'FAROE ISLANDS'),
(71, 'FIJI'),
(72, 'FINLAND'),
(73, 'FRANCE'),
(74, 'FRENCH GUIANA'),
(75, 'FRENCH POLYNESIA'),
(76, 'FRENCH SOUTHERN TERRITORIES'),
(77, 'GABON'),
(78, 'GAMBIA'),
(79, 'GEORGIA'),
(80, 'GERMANY'),
(81, 'GHANA'),
(82, 'GIBRALTAR'),
(83, 'GREECE'),
(84, 'GREENLAND'),
(85, 'GRENADA'),
(86, 'GUADELOUPE'),
(87, 'GUAM'),
(88, 'GUATEMALA'),
(89, 'GUINEA'),
(90, 'GUINEA-BISSAU'),
(91, 'GUYANA'),
(92, 'HAITI'),
(93, 'HEARD ISLAND AND MCDONALD ISLANDS'),
(94, 'HOLY SEE (VATICAN CITY STATE)'),
(95, 'HONDURAS'),
(96, 'HONG KONG'),
(97, 'HUNGARY'),
(98, 'ICELAND'),
(99, 'INDIA'),
(100, 'INDONESIA'),
(101, 'IRAN, ISLAMIC REPUBLIC OF'),
(102, 'IRAQ'),
(103, 'IRELAND'),
(104, 'ISRAEL'),
(105, 'ITALY'),
(106, 'JAMAICA'),
(107, 'JAPAN'),
(108, 'JORDAN'),
(109, 'KAZAKHSTAN'),
(110, 'KENYA'),
(111, 'KIRIBATI'),
(112, 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF'),
(113, 'KOREA, REPUBLIC OF'),
(114, 'KUWAIT'),
(115, 'KYRGYZSTAN'),
(116, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC'),
(117, 'LATVIA'),
(118, 'LEBANON'),
(119, 'LESOTHO'),
(120, 'LIBERIA'),
(121, 'LIBYAN ARAB JAMAHIRIYA'),
(122, 'LIECHTENSTEIN'),
(123, 'LITHUANIA'),
(124, 'LUXEMBOURG'),
(125, 'MACAO'),
(126, 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF'),
(127, 'MADAGASCAR'),
(128, 'MALAWI'),
(129, 'MALAYSIA'),
(130, 'MALDIVES'),
(131, 'MALI'),
(132, 'MALTA'),
(133, 'MARSHALL ISLANDS'),
(134, 'MARTINIQUE'),
(135, 'MAURITANIA'),
(136, 'MAURITIUS'),
(137, 'MAYOTTE'),
(138, 'MEXICO'),
(139, 'MICRONESIA, FEDERATED STATES OF'),
(140, 'MOLDOVA, REPUBLIC OF'),
(141, 'MONACO'),
(142, 'MONGOLIA'),
(143, 'MONTSERRAT'),
(144, 'MOROCCO'),
(145, 'MOZAMBIQUE'),
(146, 'MYANMAR'),
(147, 'NAMIBIA'),
(148, 'NAURU'),
(149, 'NEPAL'),
(150, 'NETHERLANDS'),
(151, 'NETHERLANDS ANTILLES'),
(152, 'NEW CALEDONIA'),
(153, 'NEW ZEALAND'),
(154, 'NICARAGUA'),
(155, 'NIGER'),
(156, 'NIGERIA'),
(157, 'NIUE'),
(158, 'NORFOLK ISLAND'),
(159, 'NORTHERN MARIANA ISLANDS'),
(160, 'NORWAY'),
(161, 'OMAN'),
(162, 'PAKISTAN'),
(163, 'PALAU'),
(164, 'PALESTINIAN TERRITORY, OCCUPIED'),
(165, 'PANAMA'),
(166, 'PAPUA NEW GUINEA'),
(167, 'PARAGUAY'),
(168, 'PERU'),
(169, 'PHILIPPINES'),
(170, 'PITCAIRN'),
(171, 'POLAND'),
(172, 'PORTUGAL'),
(173, 'PUERTO RICO'),
(174, 'QATAR'),
(175, 'REUNION'),
(176, 'ROMANIA'),
(177, 'RUSSIAN FEDERATION'),
(178, 'RWANDA'),
(179, 'SAINT HELENA'),
(180, 'SAINT KITTS AND NEVIS'),
(181, 'SAINT LUCIA'),
(182, 'SAINT PIERRE AND MIQUELON'),
(183, 'SAINT VINCENT AND THE GRENADINES'),
(184, 'SAMOA'),
(185, 'SAN MARINO'),
(186, 'SAO TOME AND PRINCIPE'),
(187, 'SAUDI ARABIA'),
(188, 'SENEGAL'),
(189, 'SERBIA AND MONTENEGRO'),
(190, 'SEYCHELLES'),
(191, 'SIERRA LEONE'),
(192, 'SINGAPORE'),
(193, 'SLOVAKIA'),
(194, 'SLOVENIA'),
(195, 'SOLOMON ISLANDS'),
(196, 'SOMALIA'),
(197, 'SOUTH AFRICA'),
(198, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
(199, 'SPAIN'),
(200, 'SRI LANKA'),
(201, 'SUDAN'),
(202, 'SURINAME'),
(203, 'SVALBARD AND JAN MAYEN'),
(204, 'SWAZILAND'),
(205, 'SWEDEN'),
(206, 'SWITZERLAND'),
(207, 'SYRIAN ARAB REPUBLIC'),
(208, 'TAIWAN, PROVINCE OF CHINA'),
(209, 'TAJIKISTAN'),
(210, 'TANZANIA, UNITED REPUBLIC OF'),
(211, 'THAILAND'),
(212, 'TIMOR-LESTE'),
(213, 'TOGO'),
(214, 'TOKELAU'),
(215, 'TONGA'),
(216, 'TRINIDAD AND TOBAGO'),
(217, 'TUNISIA'),
(218, 'TURKEY'),
(219, 'TURKMENISTAN'),
(220, 'TURKS AND CAICOS ISLANDS'),
(221, 'TUVALU'),
(222, 'UGANDA'),
(223, 'UKRAINE'),
(224, 'UNITED ARAB EMIRATES'),
(225, 'UNITED KINGDOM'),
(226, 'UNITED STATES'),
(227, 'UNITED STATES MINOR OUTLYING ISLANDS'),
(228, 'URUGUAY'),
(229, 'UZBEKISTAN'),
(230, 'VANUATU'),
(231, 'VENEZUELA'),
(232, 'VIET NAM'),
(233, 'VIRGIN ISLANDS, BRITISH'),
(234, 'VIRGIN ISLANDS, U.S.'),
(235, 'WALLIS AND FUTUNA'),
(236, 'WESTERN SAHARA'),
(237, 'YEMEN'),
(238, 'ZAMBIA'),
(239, 'ZIMBABWE'),
(240, 'ACBAD'),
(300, 'ACBAD'),
(301, 'ACBAD');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `idpiece` int(11) NOT NULL,
  `libellepiece` varchar(50) NOT NULL,
  `datedelivrance` date NOT NULL,
  `datevalidite` date NOT NULL,
  `etablipar` varchar(30) NOT NULL,
  `lieuetabli` varchar(50) NOT NULL,
  `idtypep` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `idquart` int(11) NOT NULL,
  `libellequart` varchar(50) NOT NULL,
  `commune` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Administration', 'Il a tout les droits'),
(6, 'Client', 'Client'),
(7, 'Comptabilité', 'Qui gère la partie comptabilité'),
(8, 'Gestionnaire de compte', 'Un gestionnaire de compte');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `idsoc` int(11) NOT NULL,
  `raisonsociale` varchar(50) NOT NULL,
  `formejuridique` varchar(50) NOT NULL,
  `secteuractivite` varchar(30) NOT NULL,
  `registrecommerce` varchar(50) NOT NULL,
  `comptecontri` varchar(50) NOT NULL,
  `ninea` varchar(50) NOT NULL,
  `datecreation` date NOT NULL,
  `idtypesoc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typepiece`
--

CREATE TABLE `typepiece` (
  `idtypep` int(11) NOT NULL,
  `libelletypep` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typesociete`
--

CREATE TABLE `typesociete` (
  `idtypesoc` int(11) NOT NULL,
  `libelletypesoc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_agent`
--

CREATE TABLE `type_agent` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_agent`
--

INSERT INTO `type_agent` (`id`, `label`) VALUES
(6, 'DG'),
(7, 'SG'),
(8, 'Comptable'),
(12, 'CEO Ely Consulting');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type_agent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) DEFAULT '0',
  `domaine` varchar(100) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `password_` varchar(80) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `matricule`, `phone_number`, `email`, `type_agent`, `created_at`, `updated_at`, `photo`, `role`, `status`, `domaine`, `region`, `password_`, `profil`) VALUES
(8, 'admin', 'Komche', 'AA00', '+22798960382', 'Adamoukomcheabdoulrazak@gmail.com', 6, '2019-08-26 20:05:41', '2020-04-27 01:15:45', 0, 1, 1, NULL, NULL, '$2y$10$4UsRb84VI5wbovp7bPqZyu6qrOaUngyONyeGy5hHs.c.RXQSE8e8O', NULL),
(9, 'Abdoul Razak', 'Adamou', '5LMH55', '+22792470763', '', 12, '2019-08-27 07:20:55', '2020-01-24 06:50:42', 35, 6, 1, NULL, NULL, '$2y$10$SDiLRVTa9E2ZOGLqq2jvseTszEL9ZjTYy.vsPUMbs0.JYpbLa4TT6', NULL),
(10, 'Almoctar', 'Seyni', '4488PP', '+22788609241', 'seynim6@gmail.com', 12, '2020-04-21 06:55:25', '2020-04-21 07:59:57', 64, 1, 1, NULL, NULL, '$2y$10$eP7PDl0lnH4pvJzMjolGn.ItAg58MjvJmhjyv74t97C65osRbp86i', NULL),
(11, 'Moustapha', 'Wahidi', NULL, '', '', 8, '2020-04-25 13:40:26', NULL, 0, 8, 0, NULL, NULL, NULL, NULL),
(12, 'Abdoul Razak', 'Adamou', NULL, '98960382', 'Adamoukomcheabdoulrazak@gmail.com', 8, '2020-04-26 11:47:50', NULL, 0, 1, 0, NULL, NULL, NULL, NULL),
(13, 'Abdoul Razak', 'Adamou', NULL, '98960382', 'Adamoukomcheabdoulrazak@gmail.com', 8, '2020-04-26 11:50:39', NULL, 65, 1, 0, NULL, NULL, NULL, NULL),
(14, 'LAVIELLE', 'Claire', NULL, '', '', 7, '2020-05-03 14:43:28', NULL, 73, 8, 0, NULL, NULL, NULL, NULL),
(15, 'Assogbavi', 'Olivier', NULL, '', '', 11, '2020-05-03 14:44:21', NULL, 70, 8, 0, NULL, NULL, NULL, NULL),
(16, 'Almoctar', 'Seyni Mouss', NULL, '', '', 12, '2020-05-03 14:45:20', NULL, 71, 8, 0, NULL, NULL, NULL, NULL),
(17, 'Rajikou', 'Amadou', NULL, '92470763', 'rajikou@gmail.com', 6, '2020-05-10 17:31:24', NULL, 0, 7, 0, 'E gouvernement/ Administration', 1, NULL, 'Ing'),
(18, 'Abdoul Razak', 'Adamou', NULL, '98960383', 'Adamoukomcheabdoulrazak@gmail.co', 0, '2020-05-15 06:03:05', NULL, 0, 7, 0, 'E gouvernement/ Administration', 1, NULL, 'Ing');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL,
  `libelleVille` varchar(255) NOT NULL,
  `pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `libelleVille`, `pays`) VALUES
(1, 'Tahoua', 155),
(2, 'Zinder', 155),
(3, 'Niamey', 155),
(4, 'Maradi', 155),
(5, 'Dosso', 155),
(6, 'Tillabery', 155),
(7, 'Agadez', 155),
(8, 'Diffa', 155);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idcli`),
  ADD KEY `idlang` (`langue`),
  ADD KEY `idpays` (`pays`),
  ADD KEY `idsoc` (`societe`),
  ADD KEY `idpiece` (`piece`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`idcom`),
  ADD KEY `idville` (`ville`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`idlang`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `sub_module` (`sub_module`);

--
-- Index pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`module`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`idpiece`),
  ADD KEY `idtypep` (`idtypep`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`idquart`),
  ADD KEY `idcom` (`commune`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`idsoc`),
  ADD KEY `idtypesoc` (`idtypesoc`);

--
-- Index pour la table `typepiece`
--
ALTER TABLE `typepiece`
  ADD PRIMARY KEY (`idtypep`);

--
-- Index pour la table `typesociete`
--
ALTER TABLE `typesociete`
  ADD PRIMARY KEY (`idtypesoc`);

--
-- Index pour la table `type_agent`
--
ALTER TABLE `type_agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_agent` (`type_agent`),
  ADD KEY `role` (`role`),
  ADD KEY `photo` (`photo`),
  ADD KEY `region` (`region`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idVille`),
  ADD KEY `pays` (`pays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idcli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `idlang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `idpiece` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `idquart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `idsoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typepiece`
--
ALTER TABLE `typepiece`
  MODIFY `idtypep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typesociete`
--
ALTER TABLE `typesociete`
  MODIFY `idtypesoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_agent`
--
ALTER TABLE `type_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idVille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`sub_module`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`region`) REFERENCES `ville` (`idVille`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`pays`) REFERENCES `pays` (`idPays`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;