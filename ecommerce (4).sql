-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 avr. 2022 à 07:50
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_articles` int(11) NOT NULL AUTO_INCREMENT,
  `nom_articles` varchar(255) NOT NULL,
  `description_articles` varchar(255) NOT NULL,
  `prix_articles` float NOT NULL,
  `image1_articles` varchar(255) NOT NULL,
  `image2_articles` varchar(255) NOT NULL,
  `image3_articles` varchar(255) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `id_sous_categories` int(11) NOT NULL,
  `id_genres` int(11) NOT NULL,
  `id_marques` int(11) NOT NULL,
  PRIMARY KEY (`id_articles`),
  KEY `articles_categories_FK` (`id_categories`),
  KEY `articles_sous_categories0_FK` (`id_sous_categories`),
  KEY `articles_genres1_FK` (`id_genres`),
  KEY `articles_marques2_FK` (`id_marques`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `nom_articles`, `description_articles`, `prix_articles`, `image1_articles`, `image2_articles`, `image3_articles`, `id_categories`, `id_sous_categories`, `id_genres`, `id_marques`) VALUES
(1, 'T-shirt à pois rouge femme', 'T-shirt à pois rouge en polyester biodégrafable', 20, 'haut_morgan_pois_ro.jpg', 'haut_morgan_pois_2.jpg', 'haut_morgan_pois_3.jpg', 1, 1, 2, 1),
(2, 'T-shirt sans manche bleu femme', 'T-shirt sans manche bleu biopasdégradable en coton sans animaux', 30, 't-shirt-sansmanche-bleu.jpg', 't-shirt-sansmanche-bleu2.jpg', 't-shirt-sansmanche-bleu3.jpg', 1, 1, 2, 1),
(3, 'T-shirt jaune femme', 'T-shirt jaune bio degradable lorem ipsum', 24, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 1, 2, 1),
(4, 'Jean Levi\'s noir homme', 'Jean noir biodégradable en polyester coton 100% naturel', 60, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 5, 1, 1),
(5, 'T-shirt lacoste homme', 'T shirt lacoste made in france 100% coton', 45, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 1, 1, 1),
(6, 'Pull eden park homme', 'Pull eden park bleu 100% coton bio', 90, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 2, 1, 1),
(7, 'Veste tommy rouge et bleu homme', 'Veste en polyester 100% rouge et bleu ', 80, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 3, 1, 1),
(8, 'Jogging lacoste vert homme', 'Jogging lacoste vert 100% polyester', 60, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 4, 1, 1),
(9, 'Cargo zara jaune homme', 'Cargo zara 98% coton et 2% polyester', 45, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 6, 1, 1),
(10, 'Pull jennyfer bleu femme', 'Pull bleu 100% coton', 12, 'pull_jennyfer_bleu.jpg', 'pull_jennyfer_bleu.jpg', 'pull_jennyfer_bleu.jpg', 1, 2, 2, 1),
(11, 'Veste en jean zara femme', 'Veste 100% coton en jean bio', 55, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 3, 2, 1),
(12, 'Joggings femme bleu', 'Joggings 100% coton bio', 43, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 4, 2, 1),
(13, 'Jean bleu levis femme', 'Jean bleu levis femme 100% coton', 98, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 5, 2, 1),
(14, 'Cargo femme jaune', 'Cargo femme jaune 100% polyester et 200% coton', 45, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 6, 2, 1),
(15, 'Chaussure femme basket', 'Chaussure basse noire 100% cuir pure chat', 230, 'femmesportchassure.jpg', 'femmesportchassure.jpg', 'femmesportchassure.jpg', 3, 7, 2, 1),
(16, 'Boots marron femme ', 'Boots marron femme 100% cuir de chienchilla', 45, 'chaussurefemme.jpg', 'chaussurefemme.jpg', 'chaussurefemme.jpg', 3, 8, 2, 1),
(17, 'Chaussure talon sans talon de ville', 'Chaussure à talon sans talon pour la ville 100% je sais pas quoi', 54, 'femmechassureville.jpg', 'femmechassureville.jpg', 'femmechassureville.jpg', 3, 9, 2, 1),
(18, 'T shirt lacoste bleu enfant', 'T shirt lacoste bleu 100% coton ', 54, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 1, 3, 1),
(19, 'Pull enfant park ', 'pull spécial anti matthieu', 99, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 2, 3, 1),
(20, 'Veste en carton enfant', 'Veste 100% carton', 44, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 1, 3, 3, 1),
(21, 'Jogging enfant portable', 'Jogging 100% décapotable', 22, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 4, 3, 1),
(22, 'Jean pour enfant demie teinte', 'jean 100% jean pour gosse', 34, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 5, 3, 1),
(23, 'Cargo pour enfant', 'cargo bleu 100% étanche', 44, 'pantalon-noir.jpg', 'pantalon-noir.jpg', 'pantalon-noir.jpg', 2, 6, 3, 1),
(24, 'Basket enfant sport', 'Basket pour courir plus vite 100% vent', 33, 'chaussurenfantsport.jpg', 'chaussurenfantsport.jpg', 'chaussurenfantsport.jpg', 3, 7, 3, 1),
(25, 'Boots pour enfant', 'Boots 100% étanche', 23, 'chaussureenfantboots.jpg', 'chaussureenfantboots.jpg', 'chaussureenfantboots.jpg', 3, 8, 3, 1),
(26, 'Chaussure de ville enfant ', 'Chassure pour ne pas se perdre en ville', 33, 'chaussureenfantville.jpg', 'chaussureenfantville.jpg', 'chaussureenfantville.jpg', 3, 9, 3, 1),
(27, 'Basket pour homme sport', 'basket pour courir un peu plus vite ', 33, 'baskethomme.jpg', 'baskethomme.jpg', 'baskethomme.jpg', 3, 7, 1, 1),
(28, 'Boots pour homme', 'Boots 100% cuir de chaton', 55, 'bootshomme_1.jpg', 'bootshomme_1.jpg', 'bootshomme_1.jpg', 3, 8, 1, 1),
(29, 'Chaussure ville homme', 'Chaussure pour avoir la classe a dallas ', 21, 'chassurehomme.jpg', 'chassurehomme.jpg', 'chassurehomme.jpg', 3, 9, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categories` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `nom_categories`) VALUES
(1, 'Hauts'),
(2, 'Pantalons'),
(3, 'Chaussures');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id_commandes` int(11) NOT NULL AUTO_INCREMENT,
  `reference_commande` int(11) NOT NULL,
  `id_stocks` int(11) NOT NULL,
  `quantite_panier` int(11) NOT NULL,
  `prix_commandes` float NOT NULL,
  PRIMARY KEY (`id_commandes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaires` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire_commentaires` varchar(255) NOT NULL,
  `date_commentaires` datetime NOT NULL,
  `id_articles` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaires`),
  KEY `commentaires_articles_FK` (`id_articles`),
  KEY `commentaires_utilisateurs0_FK` (`id_utilisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaires`, `commentaire_commentaires`, `date_commentaires`, `id_articles`, `id_utilisateurs`) VALUES
(6, 'super article', '2022-04-21 12:59:16', 1, 2),
(7, 'test', '2022-04-26 09:41:45', 24, 2),
(8, 'test dtegareugper gherag', '2022-04-26 09:42:16', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

DROP TABLE IF EXISTS `couleurs`;
CREATE TABLE IF NOT EXISTS `couleurs` (
  `id_couleurs` int(11) NOT NULL AUTO_INCREMENT,
  `couleur_couleurs` varchar(255) NOT NULL,
  PRIMARY KEY (`id_couleurs`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `couleurs`
--

INSERT INTO `couleurs` (`id_couleurs`, `couleur_couleurs`) VALUES
(1, 'Noir'),
(2, 'Rouge'),
(3, 'Bleu');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_favoris` int(11) NOT NULL AUTO_INCREMENT,
  `id_articles` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id_favoris`),
  KEY `favoris_articles_FK` (`id_articles`),
  KEY `favoris_utilisateurs0_FK` (`id_utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genres` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genres` varchar(255) NOT NULL,
  PRIMARY KEY (`id_genres`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genres`, `nom_genres`) VALUES
(1, 'Hommes'),
(2, 'Femmes'),
(3, 'Enfants'),
(4, 'Sports');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE IF NOT EXISTS `marques` (
  `id_marques` int(11) NOT NULL AUTO_INCREMENT,
  `nom_marques` varchar(255) NOT NULL,
  PRIMARY KEY (`id_marques`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id_marques`, `nom_marques`) VALUES
(1, 'Amaplon');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id_notes` int(11) NOT NULL AUTO_INCREMENT,
  `id_articles` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id_notes`),
  KEY `notes_articles_FK` (`id_articles`),
  KEY `notes_utilisateurs0_FK` (`id_utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(11) NOT NULL AUTO_INCREMENT,
  `quantite_panier` int(11) NOT NULL,
  `token_panier` varchar(50) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `id_stocks` int(11) NOT NULL,
  PRIMARY KEY (`id_panier`),
  KEY `panier_utilisateurs_FK` (`id_utilisateurs`),
  KEY `panier_stocks0_FK` (`id_stocks`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `quantite_panier`, `token_panier`, `id_utilisateurs`, `id_stocks`) VALUES
(3, 1, '1', 2, 5),
(4, 1, '1', 2, 4),
(5, 1, '1', 2, 1),
(6, 1, '1', 2, 4),
(7, 1, '1', 2, 4),
(8, 1, '1', 2, 1),
(9, 1, '1', 2, 1),
(10, 1, '1', 2, 1),
(11, 1, '1', 2, 4),
(12, 1, '1', 2, 5),
(13, 1, '1', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `pointures`
--

DROP TABLE IF EXISTS `pointures`;
CREATE TABLE IF NOT EXISTS `pointures` (
  `id_pointures` int(11) NOT NULL AUTO_INCREMENT,
  `pointure_pointures` int(11) NOT NULL,
  PRIMARY KEY (`id_pointures`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pointures`
--

INSERT INTO `pointures` (`id_pointures`, `pointure_pointures`) VALUES
(1, 10),
(2, 36);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `nom_roles` varchar(50) NOT NULL,
  PRIMARY KEY (`id_roles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

DROP TABLE IF EXISTS `sous_categories`;
CREATE TABLE IF NOT EXISTS `sous_categories` (
  `id_sous_categories` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sous_categories` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sous_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id_sous_categories`, `nom_sous_categories`) VALUES
(1, 'T-shirts'),
(2, 'Pulls'),
(3, 'Vestes'),
(4, 'Joggings'),
(5, 'Jeans'),
(6, 'Cargos'),
(7, 'Baskets'),
(8, 'Boots'),
(9, 'Villes');

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id_stocks` int(11) NOT NULL AUTO_INCREMENT,
  `quantite_stock` int(11) NOT NULL,
  `id_articles` int(11) NOT NULL,
  `id_tailles` int(11) NOT NULL,
  `id_couleurs` int(11) NOT NULL,
  `id_pointures` int(11) NOT NULL,
  PRIMARY KEY (`id_stocks`),
  KEY `stocks_articles_FK` (`id_articles`),
  KEY `stocks_tailles0_FK` (`id_tailles`),
  KEY `stocks_couleurs1_FK` (`id_couleurs`),
  KEY `stocks_pointures2_FK` (`id_pointures`)
) ENGINE=InnoDB AUTO_INCREMENT=555 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stocks`
--

INSERT INTO `stocks` (`id_stocks`, `quantite_stock`, `id_articles`, `id_tailles`, `id_couleurs`, `id_pointures`) VALUES
(33, 100, 1, 2, 1, 1),
(34, 100, 1, 2, 2, 1),
(35, 100, 1, 2, 3, 1),
(36, 100, 1, 3, 1, 1),
(37, 100, 1, 3, 2, 1),
(38, 100, 1, 3, 4, 1),
(39, 100, 1, 4, 1, 1),
(40, 100, 1, 4, 2, 1),
(41, 100, 1, 4, 5, 1),
(42, 100, 2, 2, 1, 1),
(43, 100, 2, 2, 2, 1),
(44, 100, 2, 2, 3, 1),
(45, 100, 2, 3, 1, 1),
(46, 100, 2, 3, 2, 1),
(47, 100, 2, 3, 4, 1),
(48, 100, 2, 4, 1, 1),
(49, 100, 2, 4, 2, 1),
(50, 100, 2, 4, 5, 1),
(51, 100, 3, 2, 1, 1),
(52, 100, 3, 2, 2, 1),
(53, 100, 3, 2, 3, 1),
(54, 100, 3, 3, 1, 1),
(55, 100, 3, 3, 2, 1),
(56, 100, 3, 3, 4, 1),
(57, 100, 3, 4, 1, 1),
(58, 100, 3, 4, 2, 1),
(59, 100, 3, 4, 5, 1),
(60, 100, 4, 2, 1, 1),
(61, 100, 4, 2, 2, 1),
(62, 100, 4, 2, 3, 1),
(63, 100, 4, 3, 1, 1),
(64, 100, 4, 3, 2, 1),
(65, 100, 4, 3, 4, 1),
(66, 100, 4, 4, 1, 1),
(67, 100, 4, 4, 2, 1),
(68, 100, 4, 4, 5, 1),
(69, 100, 5, 2, 1, 1),
(70, 100, 5, 2, 2, 1),
(71, 100, 5, 2, 3, 1),
(72, 100, 5, 3, 1, 1),
(73, 100, 5, 3, 2, 1),
(74, 100, 5, 3, 4, 1),
(75, 100, 5, 4, 1, 1),
(76, 100, 5, 4, 2, 1),
(77, 100, 5, 4, 5, 1),
(78, 100, 6, 2, 1, 1),
(79, 100, 6, 2, 2, 1),
(80, 100, 6, 2, 3, 1),
(81, 100, 6, 3, 1, 1),
(82, 100, 6, 3, 2, 1),
(83, 100, 6, 3, 4, 1),
(84, 100, 6, 4, 1, 1),
(85, 100, 6, 4, 2, 1),
(86, 100, 6, 4, 5, 1),
(87, 100, 7, 2, 1, 1),
(88, 100, 7, 2, 2, 1),
(89, 100, 7, 2, 3, 1),
(90, 100, 7, 3, 1, 1),
(91, 100, 7, 3, 2, 1),
(92, 100, 7, 3, 4, 1),
(93, 100, 7, 4, 1, 1),
(94, 100, 7, 4, 2, 1),
(95, 100, 7, 4, 5, 1),
(96, 100, 8, 2, 1, 1),
(97, 100, 8, 2, 2, 1),
(98, 100, 8, 2, 3, 1),
(99, 100, 8, 3, 1, 1),
(100, 100, 8, 3, 2, 1),
(101, 100, 8, 3, 4, 1),
(102, 100, 8, 4, 1, 1),
(103, 100, 8, 4, 2, 1),
(104, 100, 8, 4, 5, 1),
(105, 100, 9, 2, 1, 1),
(106, 100, 9, 2, 2, 1),
(107, 100, 9, 2, 3, 1),
(108, 100, 9, 3, 1, 1),
(109, 100, 9, 3, 2, 1),
(110, 100, 9, 3, 4, 1),
(111, 100, 9, 4, 1, 1),
(112, 100, 9, 4, 2, 1),
(113, 100, 9, 4, 5, 1),
(114, 100, 10, 2, 1, 1),
(115, 100, 10, 2, 2, 1),
(116, 100, 10, 2, 3, 1),
(117, 100, 10, 3, 1, 1),
(118, 100, 10, 3, 2, 1),
(119, 100, 10, 3, 4, 1),
(120, 100, 10, 4, 1, 1),
(121, 100, 10, 4, 2, 1),
(122, 100, 10, 4, 5, 1),
(123, 100, 11, 2, 1, 1),
(124, 100, 11, 2, 2, 1),
(125, 100, 11, 2, 3, 1),
(126, 100, 11, 3, 1, 1),
(127, 100, 11, 3, 2, 1),
(128, 100, 11, 3, 4, 1),
(129, 100, 11, 4, 1, 1),
(130, 100, 11, 4, 2, 1),
(131, 100, 11, 4, 5, 1),
(132, 100, 12, 2, 1, 1),
(133, 100, 12, 2, 2, 1),
(134, 100, 12, 2, 3, 1),
(135, 100, 12, 3, 1, 1),
(136, 100, 12, 3, 2, 1),
(137, 100, 12, 3, 4, 1),
(138, 100, 12, 4, 1, 1),
(139, 100, 12, 4, 2, 1),
(140, 100, 12, 4, 5, 1),
(141, 100, 13, 2, 1, 1),
(142, 100, 13, 2, 2, 1),
(143, 100, 13, 2, 3, 1),
(144, 100, 13, 3, 1, 1),
(145, 100, 13, 3, 2, 1),
(146, 100, 13, 3, 4, 1),
(147, 100, 13, 4, 1, 1),
(148, 100, 13, 4, 2, 1),
(149, 100, 13, 4, 5, 1),
(150, 100, 14, 2, 1, 1),
(151, 100, 14, 2, 2, 1),
(152, 100, 14, 2, 3, 1),
(153, 100, 14, 3, 1, 1),
(154, 100, 14, 3, 2, 1),
(155, 100, 14, 3, 4, 1),
(156, 100, 14, 4, 1, 1),
(157, 100, 14, 4, 2, 1),
(158, 100, 14, 4, 5, 1),
(159, 100, 15, 2, 1, 1),
(160, 100, 15, 2, 2, 1),
(161, 100, 15, 2, 3, 1),
(162, 100, 15, 3, 1, 1),
(163, 100, 15, 3, 2, 1),
(164, 100, 15, 3, 4, 1),
(165, 100, 15, 4, 1, 1),
(166, 100, 15, 4, 2, 1),
(167, 100, 15, 4, 5, 1),
(168, 100, 16, 2, 1, 1),
(169, 100, 16, 2, 2, 1),
(170, 100, 16, 2, 3, 1),
(171, 100, 16, 3, 1, 1),
(172, 100, 16, 3, 2, 1),
(173, 100, 16, 3, 4, 1),
(174, 100, 16, 4, 1, 1),
(175, 100, 16, 4, 2, 1),
(176, 100, 16, 4, 5, 1),
(177, 100, 17, 2, 1, 1),
(178, 100, 17, 2, 2, 1),
(179, 100, 17, 2, 3, 1),
(180, 100, 17, 3, 1, 1),
(181, 100, 17, 3, 2, 1),
(182, 100, 17, 3, 4, 1),
(183, 100, 17, 4, 1, 1),
(184, 100, 17, 4, 2, 1),
(185, 100, 17, 4, 5, 1),
(186, 100, 18, 2, 1, 1),
(187, 100, 18, 2, 2, 1),
(188, 100, 18, 2, 3, 1),
(189, 100, 18, 3, 1, 1),
(190, 100, 18, 3, 2, 1),
(191, 100, 18, 3, 4, 1),
(192, 100, 18, 4, 1, 1),
(193, 100, 18, 4, 2, 1),
(194, 100, 18, 4, 5, 1),
(195, 100, 19, 2, 1, 1),
(196, 100, 19, 2, 2, 1),
(197, 100, 19, 2, 3, 1),
(198, 100, 19, 3, 1, 1),
(199, 100, 19, 3, 2, 1),
(200, 100, 19, 3, 4, 1),
(201, 100, 19, 4, 1, 1),
(202, 100, 19, 4, 2, 1),
(203, 100, 19, 4, 5, 1),
(204, 100, 20, 2, 1, 1),
(205, 100, 20, 2, 2, 1),
(206, 100, 20, 2, 3, 1),
(207, 100, 20, 3, 1, 1),
(208, 100, 20, 3, 2, 1),
(209, 100, 20, 3, 4, 1),
(210, 100, 20, 4, 1, 1),
(211, 100, 20, 4, 2, 1),
(212, 100, 20, 4, 5, 1),
(213, 100, 21, 2, 1, 1),
(214, 100, 21, 2, 2, 1),
(215, 100, 21, 2, 3, 1),
(216, 100, 21, 3, 1, 1),
(217, 100, 21, 3, 2, 1),
(218, 100, 21, 3, 4, 1),
(219, 100, 21, 4, 1, 1),
(220, 100, 21, 4, 2, 1),
(221, 100, 21, 4, 5, 1),
(222, 100, 22, 2, 1, 1),
(223, 100, 22, 2, 2, 1),
(224, 100, 22, 2, 3, 1),
(225, 100, 22, 3, 1, 1),
(226, 100, 22, 3, 2, 1),
(227, 100, 22, 3, 4, 1),
(228, 100, 22, 4, 1, 1),
(229, 100, 22, 4, 2, 1),
(230, 100, 22, 4, 5, 1),
(231, 100, 23, 2, 1, 1),
(232, 100, 23, 2, 2, 1),
(233, 100, 23, 2, 3, 1),
(234, 100, 23, 3, 1, 1),
(235, 100, 23, 3, 2, 1),
(236, 100, 23, 3, 4, 1),
(237, 100, 23, 4, 1, 1),
(238, 100, 23, 4, 2, 1),
(239, 100, 23, 4, 5, 1),
(240, 100, 24, 2, 1, 1),
(241, 100, 24, 2, 2, 1),
(242, 100, 24, 2, 3, 1),
(243, 100, 24, 3, 1, 1),
(244, 100, 24, 3, 2, 1),
(245, 100, 24, 3, 4, 1),
(246, 100, 24, 4, 1, 1),
(247, 100, 24, 4, 2, 1),
(248, 100, 24, 4, 5, 1),
(249, 100, 25, 2, 1, 1),
(250, 100, 25, 2, 2, 1),
(251, 100, 25, 2, 3, 1),
(252, 100, 25, 3, 1, 1),
(253, 100, 25, 3, 2, 1),
(254, 100, 25, 3, 4, 1),
(255, 100, 25, 4, 1, 1),
(256, 100, 25, 4, 2, 1),
(257, 100, 25, 4, 5, 1),
(258, 100, 26, 2, 1, 1),
(259, 100, 26, 2, 2, 1),
(260, 100, 26, 2, 3, 1),
(261, 100, 26, 3, 1, 1),
(262, 100, 26, 3, 2, 1),
(263, 100, 26, 3, 4, 1),
(264, 100, 26, 4, 1, 1),
(265, 100, 26, 4, 2, 1),
(266, 100, 26, 4, 5, 1),
(267, 100, 27, 2, 1, 1),
(268, 100, 27, 2, 2, 1),
(269, 100, 27, 2, 3, 1),
(270, 100, 27, 3, 1, 1),
(271, 100, 27, 3, 2, 1),
(272, 100, 27, 3, 4, 1),
(273, 100, 27, 4, 1, 1),
(274, 100, 27, 4, 2, 1),
(275, 100, 27, 4, 5, 1),
(276, 100, 28, 2, 1, 1),
(277, 100, 28, 2, 2, 1),
(278, 100, 28, 2, 3, 1),
(279, 100, 28, 3, 1, 1),
(280, 100, 28, 3, 2, 1),
(281, 100, 28, 3, 4, 1),
(282, 100, 28, 4, 1, 1),
(283, 100, 28, 4, 2, 1),
(284, 100, 28, 4, 5, 1),
(285, 100, 29, 2, 1, 1),
(286, 100, 29, 2, 2, 1),
(287, 100, 29, 2, 3, 1),
(288, 100, 29, 3, 1, 1),
(289, 100, 29, 3, 2, 1),
(290, 100, 29, 3, 4, 1),
(291, 100, 29, 4, 1, 1),
(292, 100, 29, 4, 2, 1),
(293, 100, 29, 4, 5, 1),
(294, 100, 1, 2, 1, 1),
(295, 100, 1, 2, 2, 1),
(296, 100, 1, 2, 3, 1),
(297, 100, 1, 3, 1, 1),
(298, 100, 1, 3, 2, 1),
(299, 100, 1, 3, 4, 1),
(300, 100, 1, 4, 1, 1),
(301, 100, 1, 4, 2, 1),
(302, 100, 1, 4, 5, 1),
(303, 100, 2, 2, 1, 1),
(304, 100, 2, 2, 2, 1),
(305, 100, 2, 2, 3, 1),
(306, 100, 2, 3, 1, 1),
(307, 100, 2, 3, 2, 1),
(308, 100, 2, 3, 4, 1),
(309, 100, 2, 4, 1, 1),
(310, 100, 2, 4, 2, 1),
(311, 100, 2, 4, 5, 1),
(312, 100, 3, 2, 1, 1),
(313, 100, 3, 2, 2, 1),
(314, 100, 3, 2, 3, 1),
(315, 100, 3, 3, 1, 1),
(316, 100, 3, 3, 2, 1),
(317, 100, 3, 3, 4, 1),
(318, 100, 3, 4, 1, 1),
(319, 100, 3, 4, 2, 1),
(320, 100, 3, 4, 5, 1),
(321, 100, 4, 2, 1, 1),
(322, 100, 4, 2, 2, 1),
(323, 100, 4, 2, 3, 1),
(324, 100, 4, 3, 1, 1),
(325, 100, 4, 3, 2, 1),
(326, 100, 4, 3, 4, 1),
(327, 100, 4, 4, 1, 1),
(328, 100, 4, 4, 2, 1),
(329, 100, 4, 4, 5, 1),
(330, 100, 5, 2, 1, 1),
(331, 100, 5, 2, 2, 1),
(332, 100, 5, 2, 3, 1),
(333, 100, 5, 3, 1, 1),
(334, 100, 5, 3, 2, 1),
(335, 100, 5, 3, 4, 1),
(336, 100, 5, 4, 1, 1),
(337, 100, 5, 4, 2, 1),
(338, 100, 5, 4, 5, 1),
(339, 100, 6, 2, 1, 1),
(340, 100, 6, 2, 2, 1),
(341, 100, 6, 2, 3, 1),
(342, 100, 6, 3, 1, 1),
(343, 100, 6, 3, 2, 1),
(344, 100, 6, 3, 4, 1),
(345, 100, 6, 4, 1, 1),
(346, 100, 6, 4, 2, 1),
(347, 100, 6, 4, 5, 1),
(348, 100, 7, 2, 1, 1),
(349, 100, 7, 2, 2, 1),
(350, 100, 7, 2, 3, 1),
(351, 100, 7, 3, 1, 1),
(352, 100, 7, 3, 2, 1),
(353, 100, 7, 3, 4, 1),
(354, 100, 7, 4, 1, 1),
(355, 100, 7, 4, 2, 1),
(356, 100, 7, 4, 5, 1),
(357, 100, 8, 2, 1, 1),
(358, 100, 8, 2, 2, 1),
(359, 100, 8, 2, 3, 1),
(360, 100, 8, 3, 1, 1),
(361, 100, 8, 3, 2, 1),
(362, 100, 8, 3, 4, 1),
(363, 100, 8, 4, 1, 1),
(364, 100, 8, 4, 2, 1),
(365, 100, 8, 4, 5, 1),
(366, 100, 9, 2, 1, 1),
(367, 100, 9, 2, 2, 1),
(368, 100, 9, 2, 3, 1),
(369, 100, 9, 3, 1, 1),
(370, 100, 9, 3, 2, 1),
(371, 100, 9, 3, 4, 1),
(372, 100, 9, 4, 1, 1),
(373, 100, 9, 4, 2, 1),
(374, 100, 9, 4, 5, 1),
(375, 100, 10, 2, 1, 1),
(376, 100, 10, 2, 2, 1),
(377, 100, 10, 2, 3, 1),
(378, 100, 10, 3, 1, 1),
(379, 100, 10, 3, 2, 1),
(380, 100, 10, 3, 4, 1),
(381, 100, 10, 4, 1, 1),
(382, 100, 10, 4, 2, 1),
(383, 100, 10, 4, 5, 1),
(384, 100, 11, 2, 1, 1),
(385, 100, 11, 2, 2, 1),
(386, 100, 11, 2, 3, 1),
(387, 100, 11, 3, 1, 1),
(388, 100, 11, 3, 2, 1),
(389, 100, 11, 3, 4, 1),
(390, 100, 11, 4, 1, 1),
(391, 100, 11, 4, 2, 1),
(392, 100, 11, 4, 5, 1),
(393, 100, 12, 2, 1, 1),
(394, 100, 12, 2, 2, 1),
(395, 100, 12, 2, 3, 1),
(396, 100, 12, 3, 1, 1),
(397, 100, 12, 3, 2, 1),
(398, 100, 12, 3, 4, 1),
(399, 100, 12, 4, 1, 1),
(400, 100, 12, 4, 2, 1),
(401, 100, 12, 4, 5, 1),
(402, 100, 13, 2, 1, 1),
(403, 100, 13, 2, 2, 1),
(404, 100, 13, 2, 3, 1),
(405, 100, 13, 3, 1, 1),
(406, 100, 13, 3, 2, 1),
(407, 100, 13, 3, 4, 1),
(408, 100, 13, 4, 1, 1),
(409, 100, 13, 4, 2, 1),
(410, 100, 13, 4, 5, 1),
(411, 100, 14, 2, 1, 1),
(412, 100, 14, 2, 2, 1),
(413, 100, 14, 2, 3, 1),
(414, 100, 14, 3, 1, 1),
(415, 100, 14, 3, 2, 1),
(416, 100, 14, 3, 4, 1),
(417, 100, 14, 4, 1, 1),
(418, 100, 14, 4, 2, 1),
(419, 100, 14, 4, 5, 1),
(420, 100, 15, 2, 1, 1),
(421, 100, 15, 2, 2, 1),
(422, 100, 15, 2, 3, 1),
(423, 100, 15, 3, 1, 1),
(424, 100, 15, 3, 2, 1),
(425, 100, 15, 3, 4, 1),
(426, 100, 15, 4, 1, 1),
(427, 100, 15, 4, 2, 1),
(428, 100, 15, 4, 5, 1),
(429, 100, 16, 2, 1, 1),
(430, 100, 16, 2, 2, 1),
(431, 100, 16, 2, 3, 1),
(432, 100, 16, 3, 1, 1),
(433, 100, 16, 3, 2, 1),
(434, 100, 16, 3, 4, 1),
(435, 100, 16, 4, 1, 1),
(436, 100, 16, 4, 2, 1),
(437, 100, 16, 4, 5, 1),
(438, 100, 17, 2, 1, 1),
(439, 100, 17, 2, 2, 1),
(440, 100, 17, 2, 3, 1),
(441, 100, 17, 3, 1, 1),
(442, 100, 17, 3, 2, 1),
(443, 100, 17, 3, 4, 1),
(444, 100, 17, 4, 1, 1),
(445, 100, 17, 4, 2, 1),
(446, 100, 17, 4, 5, 1),
(447, 100, 18, 2, 1, 1),
(448, 100, 18, 2, 2, 1),
(449, 100, 18, 2, 3, 1),
(450, 100, 18, 3, 1, 1),
(451, 100, 18, 3, 2, 1),
(452, 100, 18, 3, 4, 1),
(453, 100, 18, 4, 1, 1),
(454, 100, 18, 4, 2, 1),
(455, 100, 18, 4, 5, 1),
(456, 100, 19, 2, 1, 1),
(457, 100, 19, 2, 2, 1),
(458, 100, 19, 2, 3, 1),
(459, 100, 19, 3, 1, 1),
(460, 100, 19, 3, 2, 1),
(461, 100, 19, 3, 4, 1),
(462, 100, 19, 4, 1, 1),
(463, 100, 19, 4, 2, 1),
(464, 100, 19, 4, 5, 1),
(465, 100, 20, 2, 1, 1),
(466, 100, 20, 2, 2, 1),
(467, 100, 20, 2, 3, 1),
(468, 100, 20, 3, 1, 1),
(469, 100, 20, 3, 2, 1),
(470, 100, 20, 3, 4, 1),
(471, 100, 20, 4, 1, 1),
(472, 100, 20, 4, 2, 1),
(473, 100, 20, 4, 5, 1),
(474, 100, 21, 2, 1, 1),
(475, 100, 21, 2, 2, 1),
(476, 100, 21, 2, 3, 1),
(477, 100, 21, 3, 1, 1),
(478, 100, 21, 3, 2, 1),
(479, 100, 21, 3, 4, 1),
(480, 100, 21, 4, 1, 1),
(481, 100, 21, 4, 2, 1),
(482, 100, 21, 4, 5, 1),
(483, 100, 22, 2, 1, 1),
(484, 100, 22, 2, 2, 1),
(485, 100, 22, 2, 3, 1),
(486, 100, 22, 3, 1, 1),
(487, 100, 22, 3, 2, 1),
(488, 100, 22, 3, 4, 1),
(489, 100, 22, 4, 1, 1),
(490, 100, 22, 4, 2, 1),
(491, 100, 22, 4, 5, 1),
(492, 100, 23, 2, 1, 1),
(493, 100, 23, 2, 2, 1),
(494, 100, 23, 2, 3, 1),
(495, 100, 23, 3, 1, 1),
(496, 100, 23, 3, 2, 1),
(497, 100, 23, 3, 4, 1),
(498, 100, 23, 4, 1, 1),
(499, 100, 23, 4, 2, 1),
(500, 100, 23, 4, 5, 1),
(501, 100, 24, 2, 1, 1),
(502, 100, 24, 2, 2, 1),
(503, 100, 24, 2, 3, 1),
(504, 100, 24, 3, 1, 1),
(505, 100, 24, 3, 2, 1),
(506, 100, 24, 3, 4, 1),
(507, 100, 24, 4, 1, 1),
(508, 100, 24, 4, 2, 1),
(509, 100, 24, 4, 5, 1),
(510, 100, 25, 2, 1, 1),
(511, 100, 25, 2, 2, 1),
(512, 100, 25, 2, 3, 1),
(513, 100, 25, 3, 1, 1),
(514, 100, 25, 3, 2, 1),
(515, 100, 25, 3, 4, 1),
(516, 100, 25, 4, 1, 1),
(517, 100, 25, 4, 2, 1),
(518, 100, 25, 4, 5, 1),
(519, 100, 26, 2, 1, 1),
(520, 100, 26, 2, 2, 1),
(521, 100, 26, 2, 3, 1),
(522, 100, 26, 3, 1, 1),
(523, 100, 26, 3, 2, 1),
(524, 100, 26, 3, 4, 1),
(525, 100, 26, 4, 1, 1),
(526, 100, 26, 4, 2, 1),
(527, 100, 26, 4, 5, 1),
(528, 100, 27, 2, 1, 1),
(529, 100, 27, 2, 2, 1),
(530, 100, 27, 2, 3, 1),
(531, 100, 27, 3, 1, 1),
(532, 100, 27, 3, 2, 1),
(533, 100, 27, 3, 4, 1),
(534, 100, 27, 4, 1, 1),
(535, 100, 27, 4, 2, 1),
(536, 100, 27, 4, 5, 1),
(537, 100, 28, 2, 1, 1),
(538, 100, 28, 2, 2, 1),
(539, 100, 28, 2, 3, 1),
(540, 100, 28, 3, 1, 1),
(541, 100, 28, 3, 2, 1),
(542, 100, 28, 3, 4, 1),
(543, 100, 28, 4, 1, 1),
(544, 100, 28, 4, 2, 1),
(545, 100, 28, 4, 5, 1),
(546, 100, 29, 2, 1, 1),
(547, 100, 29, 2, 2, 1),
(548, 100, 29, 2, 3, 1),
(549, 100, 29, 3, 1, 1),
(550, 100, 29, 3, 2, 1),
(551, 100, 29, 3, 4, 1),
(552, 100, 29, 4, 1, 1),
(553, 100, 29, 4, 2, 1),
(554, 100, 29, 4, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tailles`
--

DROP TABLE IF EXISTS `tailles`;
CREATE TABLE IF NOT EXISTS `tailles` (
  `id_tailles` int(11) NOT NULL AUTO_INCREMENT,
  `taille_tailles` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tailles`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tailles`
--

INSERT INTO `tailles` (`id_tailles`, `taille_tailles`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `prenom_utilisateurs` varchar(255) NOT NULL,
  `nom_utilisateurs` varchar(255) NOT NULL,
  `civilite_utilisateurs` varchar(255) NOT NULL,
  `password_utilisateurs` varchar(255) NOT NULL,
  `mail_utilisateurs` varchar(255) NOT NULL,
  `datenaissance_utilisateurs` date NOT NULL,
  `tel_utilisateurs` int(11) NOT NULL,
  `rue_utilisateurs` varchar(255) NOT NULL,
  `cp_utilisateurs` int(11) NOT NULL,
  `pays_utilisateurs` varchar(255) NOT NULL,
  `token_utilisateurs` varchar(255) NOT NULL,
  `token_mdp_utilisateurs` varchar(255) NOT NULL,
  `id_roles` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateurs`),
  KEY `utilisateurs_roles_FK` (`id_roles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categories_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`),
  ADD CONSTRAINT `articles_genres1_FK` FOREIGN KEY (`id_genres`) REFERENCES `genres` (`id_genres`),
  ADD CONSTRAINT `articles_marques2_FK` FOREIGN KEY (`id_marques`) REFERENCES `marques` (`id_marques`),
  ADD CONSTRAINT `articles_sous_categories0_FK` FOREIGN KEY (`id_sous_categories`) REFERENCES `sous_categories` (`id_sous_categories`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_articles_FK` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`),
  ADD CONSTRAINT `favoris_utilisateurs0_FK` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id_utilisateurs`);

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_articles_FK` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`),
  ADD CONSTRAINT `notes_utilisateurs0_FK` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id_utilisateurs`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_roles_FK` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
