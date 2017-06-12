-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 12 Juin 2017 à 18:47
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `deeveadee`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id` int(11) NOT NULL,
  `nomA` varchar(100) NOT NULL,
  `prenomA` varchar(60) NOT NULL,
  `ageA` varchar(255) NOT NULL,
  `sexeA` set('Homme','Femme','Autre','') NOT NULL,
  `FK_casting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id`, `nomA`, `prenomA`, `ageA`, `sexeA`, `FK_casting`) VALUES
(1, 'Claude', 'Jean', '25', 'Homme', 1);

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `dvdC` int(11) NOT NULL,
  `acteurC` int(11) NOT NULL,
  `roleC` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `casting`
--

INSERT INTO `casting` (`dvdC`, `acteurC`, `roleC`, `id`) VALUES
(1, 1, 'Principal', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dvd`
--

CREATE TABLE `dvd` (
  `id` int(11) NOT NULL,
  `titreD` varchar(255) NOT NULL,
  `auteurD` varchar(255) NOT NULL,
  `anneeD` varchar(255) NOT NULL,
  `categorieD` varchar(255) NOT NULL,
  `dateAchatD` date NOT NULL,
  `nombreD` tinyint(4) NOT NULL,
  `societeD` int(11) UNSIGNED NOT NULL,
  `castingD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dvd`
--

INSERT INTO `dvd` (`id`, `titreD`, `auteurD`, `anneeD`, `categorieD`, `dateAchatD`, `nombreD`, `societeD`, `castingD`) VALUES
(1, 'sa dépasserait l\'entendement', 'Benzai', '2017', 'Génial', '2017-06-02', 42, 119, 1);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `numSecu` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `id` int(10) UNSIGNED NOT NULL,
  `dvdE` int(11) NOT NULL,
  `dateE` date NOT NULL,
  `clientE` int(10) UNSIGNED NOT NULL,
  `dureeE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gerant`
--

CREATE TABLE `gerant` (
  `id` int(11) NOT NULL,
  `nomG` varchar(255) NOT NULL,
  `prenomG` varchar(255) NOT NULL,
  `adresseG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(2, 'What isirbvrkc', 'what-isirbvrkc', 'Lorem Ireiuvhrkevn'),
(3, 'virehvie', 'virehvie', 'fejhvbekh'),
(4, 'hgdfvydhvb', 'hgdfvydhvb', 'vfkjvbkerhf'),
(5, 'mes balls', 'mes-balls', 'egcugeb');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomS` varchar(255) NOT NULL,
  `rueS` varchar(255) NOT NULL,
  `villeS` int(11) NOT NULL,
  `directeurS` int(11) NOT NULL,
  `num_rue` tinyint(4) NOT NULL,
  `employe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`id`, `nomS`, `rueS`, `villeS`, `directeurS`, `num_rue`, `employe`) VALUES
(150, 'rveuviyervbbbbbbbbbbbbbbbbb', 'bfdbv', 0, 0, 0, 0),
(151, 'VirtualDVD', 'nvtiubn', 0, 0, 0, 0),
(152, 'dvdstore_dvd', 'rtviuthn', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `USER`
--

INSERT INTO `USER` (`id`, `fullname`, `username`, `password`) VALUES
(4, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` tinyint(4) NOT NULL,
  `nomV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nomV`) VALUES
(2, 'Béziers'),
(1, 'Nantes');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_casting` (`FK_casting`),
  ADD KEY `FK_casting_2` (`FK_casting`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dvdC` (`dvdC`),
  ADD KEY `dvdC_2` (`dvdC`),
  ADD KEY `acteurC` (`acteurC`);

--
-- Index pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `societeD` (`societeD`),
  ADD KEY `societeD_2` (`societeD`),
  ADD KEY `societeD_3` (`societeD`),
  ADD KEY `societeD_4` (`societeD`),
  ADD KEY `castingD` (`castingD`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dvdE` (`dvdE`);

--
-- Index pour la table `gerant`
--
ALTER TABLE `gerant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `villeS` (`villeS`),
  ADD KEY `directeurS` (`directeurS`),
  ADD KEY `employe` (`employe`);

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nomV` (`nomV`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `casting`
--
ALTER TABLE `casting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gerant`
--
ALTER TABLE `gerant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD CONSTRAINT `acteur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `casting` (`acteurC`);

--
-- Contraintes pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD CONSTRAINT `FK_casting` FOREIGN KEY (`castingD`) REFERENCES `casting` (`id`),
  ADD CONSTRAINT `FK_societe` FOREIGN KEY (`societeD`) REFERENCES `societe` (`id`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`id`) REFERENCES `societe` (`employe`);

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `FK_emprunt` FOREIGN KEY (`dvdE`) REFERENCES `dvd` (`id`);

--
-- Contraintes pour la table `gerant`
--
ALTER TABLE `gerant`
  ADD CONSTRAINT `gerant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `societe` (`directeurS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
