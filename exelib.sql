-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 déc. 2025 à 11:25
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exelib`
--

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE `exercice` (
  `id` int(6) UNSIGNED NOT NULL,
  `titre` varchar(70) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exercice`
--

INSERT INTO `exercice` (`id`, `titre`, `auteur`, `date_creation`) VALUES
(1, 'Ex1', 'Alami', '2025-11-05'),
(2, 'Ex2', 'Soussi', '2025-11-05'),
(3, 'Ex31', 'Tahiri', '2025-11-13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exercice`
--
ALTER TABLE `exercice`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;