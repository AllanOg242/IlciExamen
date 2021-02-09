-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 15 déc. 2020 à 22:53
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ilci_examen`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` int(30) NOT NULL,
  `dateEnregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `idMembre`, `nom`, `model`, `description`, `prix`, `dateEnregistrement`) VALUES
(1, 1, 'telephone', 'Android', 'couleur noir', 150000, '2020-12-08 00:00:00'),
(3, 2, 'ordinateur', 'apple', 'couler rose', 250000, '2020-12-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `dateEnregistrement` datetime NOT NULL DEFAULT current_timestamp(),
  `statut` enum('admin','vendeur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `mdp`, `civilite`, `dateEnregistrement`, `statut`) VALUES
(1, 'OGOUNCHI', 'Allan', 'allan@gmail.fr', 'passer', 'm', '2020-12-14 14:42:47', 'admin'),
(2, 'adja', 'sem', 'sem@gmail.fr', 'passer', 'f', '2020-12-14 14:44:40', 'vendeur'),
(3, 'og', 'all', 'allan@isi.fr', 'passer', '', '2020-12-14 14:12:42', ''),
(4, 'oggo', 'alla', 'oggo@gmail.fr', 'passer', '', '2020-12-14 19:12:23', ''),
(5, '', 'ala', 'mail@isi.sn', 'passser', '', '2020-12-15 01:12:50', ''),
(6, 'zaaa', 'aaaa', '', 'passser', '', '2020-12-15 11:12:44', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMembre` (`idMembre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
