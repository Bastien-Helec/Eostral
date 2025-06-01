-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : dim. 01 juin 2025 à 07:59
-- Version du serveur : 11.7.2-MariaDB-ubu2404
-- Version de PHP : 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Eostral_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `Produits`
--

CREATE TABLE `Produits` (
  `ID` smallint(6) NOT NULL,
  `isdispo` tinyint(1) DEFAULT NULL,
  `IDType` smallint(6) DEFAULT NULL,
  `IDCatégories` smallint(6) DEFAULT NULL,
  `Nom` varchar(30) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Qte` smallint(6) NOT NULL,
  `Description` text DEFAULT NULL,
  `MotsCles` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Produits`
--

INSERT INTO `Produits` (`ID`, `isdispo`, `IDType`, `IDCatégories`, `Nom`, `Model`, `Prix`, `Qte`, `Description`, `MotsCles`) VALUES
(1, 1, 1, 1, 'Orion', 'OR-1000', 2499, 5, 'Serveur rackable performant pour entreprises de taille moyenne.', 'rack, entreprise, performant'),
(2, 1, 1, 3, 'Titan', 'TT-2000', 2999, 3, 'Haute capacité de traitement, idéal pour virtualisation.', 'haute performance, virtualisation, entreprise'),
(3, 1, 1, 3, 'Ares', 'AR-3000', 3499, 2, 'Optimisé pour IA et calculs scientifiques.', 'IA, calcul, haute performance'),
(4, 0, 1, 1, 'Atlas', 'AT-1500', 2799, 0, 'Modèle robuste mais en rupture de stock.', 'rupture, robuste'),
(5, 1, 1, 3, 'Hélios', 'HL-5000', 3999, 4, 'Haut de gamme avec redondance complète.', 'redondance, haut de gamme'),
(6, 1, 2, 2, 'Hermes', 'MB-100', 1999, 7, 'Serveur portable pour déploiement rapide sur site.', 'portable, mobile, déploiement'),
(7, 1, 2, 2, 'Apollo', 'MB-200', 2199, 6, 'Conçu pour interventions nomades en milieux critiques.', 'nomade, critique, mobile'),
(8, 0, 2, 2, 'Artemis', 'MB-300', 2299, 0, 'Apprécié pour sa compacité, actuellement indisponible.', 'compact, indisponible'),
(9, 1, 2, 2, 'Chronos', 'MB-400', 2499, 3, 'Performances mobiles accrues, autonomie prolongée.', 'autonomie, performance, mobile'),
(10, 1, 2, 2, 'Vulcain', 'MB-500', 2699, 5, 'Robuste, résistant aux environnements industriels.', 'robuste, industriel, mobile'),
(13, NULL, NULL, NULL, 'Polio', 'Po-2552', 800, 6, 'Robuste pour particulier', 'Robuste, Particulier, pas Cher');

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `ID` smallint(6) NOT NULL,
  `libelle` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Role`
--

INSERT INTO `Role` (`ID`, `libelle`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `Type`
--

CREATE TABLE `Type` (
  `ID` smallint(6) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `Type`
--

INSERT INTO `Type` (`ID`, `libelle`) VALUES
(1, 'Serveur'),
(2, 'Serveur mobile');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `ID` smallint(6) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `IDRoles` smallint(6) NOT NULL,
  `MDP` varchar(255) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`ID`, `Nom`, `Prenom`, `IDRoles`, `MDP`, `Email`) VALUES
(1, 'Helec', 'Bastien', 2, '$2y$10$3gAqmAmcg50erqhP1iXn8OLJfwlLCdV6BJdl1qqijVLrzskE83iWu', 'bastienh34720@gmail.com'),
(3, 'Super', 'admin', 1, '$2y$10$cDkRZw7k2fYM6lrLuRDROObKuNUPaiADLUnAt2FtCMaQQC2B/HTOG', 'admin@admin.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `IDType` (`IDType`),
  ADD KEY `IDCatégories` (`IDCatégories`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `IDRoles` (`IDRoles`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Type`
--
ALTER TABLE `Type`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Produits`
--
ALTER TABLE `Produits`
  ADD CONSTRAINT `Produits_ibfk_1` FOREIGN KEY (`IDType`) REFERENCES `Type` (`ID`),
  ADD CONSTRAINT `Produits_ibfk_2` FOREIGN KEY (`IDCatégories`) REFERENCES `Catégories` (`ID`);

--
-- Contraintes pour la table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_ibfk_1` FOREIGN KEY (`IDRoles`) REFERENCES `Role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
