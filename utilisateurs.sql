-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db5006773312.hosting-data.io
-- Généré le : mar. 26 avr. 2022 à 15:38
-- Version du serveur :  5.7.36-log
-- Version de PHP : 7.3.33

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs5603904`
--

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nom_roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_roles`, `nom_roles`) VALUES
(1, 'client'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `prenom_utilisateurs` varchar(255) NOT NULL,
  `nom_utilisateurs` varchar(255) NOT NULL,
  `civilite_utilisateurs` varchar(255) NOT NULL,
  `password_utilisateurs` varchar(255) NOT NULL,
  `mail_utilisateurs` varchar(255) NOT NULL,
  `datenaissance_utilisateurs` date NOT NULL,
  `tel_utilisateurs` int(11) NOT NULL,
  `rue_utilisateurs` varchar(255) NOT NULL,
  `ville_utilisateurs` varchar(255) NOT NULL,
  `cp_utilisateurs` int(11) NOT NULL,
  `pays_utilisateurs` varchar(255) NOT NULL,
  `token_utilisateurs` varchar(255) NOT NULL,
  `token_mdp_utilisateurs` varchar(255) NOT NULL,
  `activation_utilisateurs` int(2) NOT NULL,
  `id_roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `prenom_utilisateurs`, `nom_utilisateurs`, `civilite_utilisateurs`, `password_utilisateurs`, `mail_utilisateurs`, `datenaissance_utilisateurs`, `tel_utilisateurs`, `rue_utilisateurs`, `ville_utilisateurs`, `cp_utilisateurs`, `pays_utilisateurs`, `token_utilisateurs`, `token_mdp_utilisateurs`, `activation_utilisateurs`, `id_roles`) VALUES
(2, 'Yanis', 'Pirlt', '', '$2y$10$0B2/3MOxOPARnV/ifRTJZOf1xtzsEvEu5EUVSS.sCykub1O4p5YzO', 'yanis.pirlet@gmail.com', '2001-01-01', 0, '48 e rue bourbon', 'Charleville Mézières', 8000, 'france', '850a7b61e9170b30147501f210ea39e5c8605b4297de1db7f8353332333033323332326433303334326433323330323033313333336133333336336133353337', 'f0d422cd6f6e64dde56d5382ef9c5006ddd35af4c1c1d0d742063332333033323332326433303334326433323336323033313331336133343332336133333335', 0, 2),
(8, 'teddy', 'hemonet', '', '$2y$10$AdOyTjXX88BH.Jy3hzgFK.dzocD1MQhjbmoueiW16fxMuNBQFqX8i', 'teddy@hemonet.fr', '2022-04-15', 0, 'czeczz ', 'Charleville Mézières', 8000, 'france', 'a9ab4062dc394916482b26d87ab742789dc1a382adf0b568ba743332333033323332326433303334326433323331323033313336336133323335336133333336', '', 0, 1),
(9, 'Yanis', 'Pirlet', '', '$2y$10$AdOyTjXX88BH.Jy3hzgFK.dzocD1MQhjbmoueiW16fxMuNBQFqX8i', 'yayap08@gmail.com', '2022-04-14', 0, '48 e rue bourbon', 'Charleville Mézières', 8000, 'france', '13e19be7da30ca930e3c5e1c67c405704b306b19342f83ddb9143332333033323332326433303334326433323335323033303339336133343336336133343333', '', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`),
  ADD KEY `utilisateurs_roles_FK` (`id_roles`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_roles_FK` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
