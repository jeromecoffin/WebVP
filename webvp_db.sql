-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 16 Mai 2019 à 12:55
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webvp_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(255) NOT NULL,
  `cat_del` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_nom`, `cat_del`) VALUES
(1, 'Sport', 0),
(2, 'Voiture', 0),
(3, 'Maison', 0),
(4, 'Informatique', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `msg_usr_exp_id` int(11) NOT NULL,
  `msg_usr_dest_id` int(11) NOT NULL,
  `msg_prd_id` int(11) NOT NULL,
  `msg_message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `prd_id` int(11) NOT NULL,
  `prd_sct_id` int(11) NOT NULL,
  `prd_usr_id` int(11) NOT NULL,
  `prd_nom` varchar(255) NOT NULL,
  `prd_desc` varchar(255) NOT NULL,
  `prd_prix` decimal(10,2) NOT NULL,
  `prd_img` blob NOT NULL,
  `prd_tag` varchar(1000) NOT NULL,
  `prd_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prd_del` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`prd_id`, `prd_sct_id`, `prd_usr_id`, `prd_nom`, `prd_desc`, `prd_prix`, `prd_img`, `prd_tag`, `prd_date`, `prd_del`) VALUES
(1, 1, 1, 'FIFA', 'Ballon FIFA 2019', '20.00', '', 'Ballon fifa', '2019-05-16 10:25:33', 0),
(2, 3, 1, 'DDR 3', 'Ram Type DDR3 bon etat', '30.00', '', '', '2019-05-16 10:30:30', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE `sous_categorie` (
  `sct_id` int(11) NOT NULL,
  `sct_cat_id` int(11) NOT NULL,
  `sct_nom` varchar(255) NOT NULL,
  `sct_del` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`sct_id`, `sct_cat_id`, `sct_nom`, `sct_del`) VALUES
(1, 1, 'Ballon', 0),
(2, 1, 'Chaussure', 0),
(3, 4, 'RAM', 0),
(4, 4, 'PC Portable', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `usr_id` int(11) NOT NULL,
  `usr_nom` varchar(255) NOT NULL,
  `usr_prenom` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_login` varchar(255) NOT NULL,
  `usr_pass` varchar(255) NOT NULL,
  `usr_dep` int(2) NOT NULL,
  `usr_ville` varchar(255) NOT NULL,
  `usr_tel` varchar(50) NOT NULL,
  `usr_del` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`usr_id`, `usr_nom`, `usr_prenom`, `usr_email`, `usr_login`, `usr_pass`, `usr_dep`, `usr_ville`, `usr_tel`, `usr_del`) VALUES
(1, 'DJERROUD', 'Halim', 'hdd@ai.univ-paris8.fr', 'hdd', 'pass', 75, 'paris', '0606060606', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD KEY `msg_usr_exp_id` (`msg_usr_exp_id`),
  ADD KEY `msg_usr_dest_id` (`msg_usr_dest_id`),
  ADD KEY `msg_prd_id` (`msg_prd_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `prd_sct_id` (`prd_sct_id`),
  ADD KEY `prd_usr_id` (`prd_usr_id`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD PRIMARY KEY (`sct_id`),
  ADD KEY `sct_cat_id` (`sct_cat_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `sct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`msg_usr_exp_id`) REFERENCES `utilisateur` (`usr_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`msg_usr_dest_id`) REFERENCES `utilisateur` (`usr_id`),
  ADD CONSTRAINT `message_ibfk_3` FOREIGN KEY (`msg_prd_id`) REFERENCES `produit` (`prd_id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`prd_sct_id`) REFERENCES `sous_categorie` (`sct_id`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`prd_usr_id`) REFERENCES `utilisateur` (`usr_id`);

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `sous_categorie_ibfk_1` FOREIGN KEY (`sct_cat_id`) REFERENCES `categorie` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
