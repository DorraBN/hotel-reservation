-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 mai 2023 à 03:13
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation_hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(4) NOT NULL,
  `type` varchar(20) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `option_chambre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `type`, `statut`, `option_chambre`) VALUES
(6000, 'Single', 'disponible', 'Free Breakfast'),
(6010, 'king', 'disponible', 'All'),
(6020, 'Villa', 'disponible', 'Parking'),
(6045, 'suite', 'disponible', 'Free Wifi\r\n'),
(6050, 'quad', 'occupé', 'Free Breakfast\r\n\r\n'),
(6070, 'double', 'occupé', 'Free Wifi\r\n'),
(6080, 'Double', 'disponible', 'Free Breakfast\r\n\r\n'),
(6085, 'Single', 'disponible', 'Free Wifi\r\n'),
(6090, 'Quad', 'disponible', 'Laundry');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_comment` int(4) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_comment`, `contenu`) VALUES
(1443, 'Thank you for the services');

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

CREATE TABLE `contacter` (
  `email` varchar(40) NOT NULL,
  `id_comment` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacter`
--

INSERT INTO `contacter` (`email`, `id_comment`) VALUES
('hlelomayma95@gmail.com', 1443);

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE `faire` (
  `email` varchar(40) NOT NULL,
  `id_reservation` int(4) NOT NULL,
  `id_chambre` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `faire`
--

INSERT INTO `faire` (`email`, `id_reservation`, `id_chambre`) VALUES
('hlelomayma95@gmail.com', 7000, 6000),
('fayzzhre12@gmail.com', 7010, 6010),
('saharmohamed@gmail.com', 7021, 6020),
('saharmohamed@gmail.com', 7040, 6050),
('hlelomayma95@gmail.com', 7053, 6000),
('rayenbilel@gmail.com', 7064, 6085),
('hlelomayma95@gmail.com', 7471, 6010),
('hlelomayma95@gmail.com', 7634, 6000),
('hlelomayma95@gmail.com', 7724, 6090),
('hlelomayma95@gmail.com', 7967, 6020);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement` int(4) NOT NULL,
  `prix` float NOT NULL,
  `moyen_paiement` varchar(20) NOT NULL,
  `date_paiement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `prix`, `moyen_paiement`, `date_paiement`) VALUES
(5050, 60, 'carte bancaire', '2023-05-17'),
(5200, 50, 'carte bancaire', '2023-05-19'),
(5371, 55, 'd17', '2023-05-16'),
(5390, 75, 'carte bancaire', '2023-05-23'),
(5400, 80, 'carte bancaire', '2023-05-16'),
(5450, 200, 'carte bancaire', '2023-05-19'),
(5555, 40, 'D17', '2023-05-16'),
(5572, 55, 'd17', '2023-05-16'),
(5600, 100, 'D17', '2023-05-18'),
(5690, 30, 'D17', '2023-05-17');

-- --------------------------------------------------------

--
-- Structure de la table `payer`
--

CREATE TABLE `payer` (
  `id_reservation` int(4) NOT NULL,
  `id_paiement` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `payer`
--

INSERT INTO `payer` (`id_reservation`, `id_paiement`) VALUES
(7000, 5690),
(7010, 5450),
(7021, 5600),
(7040, 5400),
(7050, 5390),
(7053, 0),
(7064, 5555),
(7188, 0),
(7471, 0),
(7474, 0),
(7634, 5572),
(7659, 0),
(7724, 0),
(7967, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(4) NOT NULL,
  `validation` varchar(20) NOT NULL,
  `date_arrv` date NOT NULL,
  `date_sortie` date NOT NULL,
  `date_reservation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `validation`, `date_arrv`, `date_sortie`, `date_reservation`) VALUES
(7000, 'Confirmed', '2023-05-30', '2023-06-02', '2023-05-15'),
(7010, 'Confirmed', '2023-06-02', '2023-06-04', '2023-05-30'),
(7021, 'Confirmed', '2023-05-18', '2023-05-21', '2023-05-10'),
(7040, 'cancelled', '2023-05-20', '2023-05-21', '2023-05-08'),
(7050, 'Confirmed', '2023-05-24', '2023-05-27', '2023-05-08'),
(7053, 'Confirmed', '2023-06-20', '2023-06-21', '2023-05-17'),
(7064, 'cancelled', '2023-05-28', '2023-05-30', '2023-05-16'),
(7471, 'Confirmed', '2023-07-15', '2023-07-18', '2023-05-17'),
(7634, 'Confirmed', '2023-08-20', '2023-08-25', '2023-05-16'),
(7724, 'Confirmed', '2023-06-15', '2023-06-20', '2023-05-16'),
(7967, 'Confirmed', '2023-09-15', '2023-09-21', '2023-05-17');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(40) NOT NULL,
  `mpd` varchar(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `telephone` int(8) NOT NULL,
  `role` varchar(20) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `mpd`, `nom`, `telephone`, `role`, `date_inscription`) VALUES
('admin@gmail.com', 'test@123', 'admin', 23456787, 'admin', '2023-03-10'),
('dorransira12@gmail.com', 'TYHUJ765', 'Ben Nsira Dorra', 24543123, 'user', '2023-05-01'),
('fayzzhre12@gmail.com', 'Ed43215', 'Zhre Fayz', 56789908, 'user', '2023-05-08'),
('hlelomayma95@gmail.com', '12345678', 'Ben Hlel Oumayma', 22147753, 'user', '2023-04-18'),
('mohamedsalah@gmail.com', '123POT', 'Salah Mohamed', 54637890, 'user', '2023-04-16'),
('rayenbilel@gmail.com', '432AZS', 'Bilel Rayen', 56432123, 'user', '2023-04-04'),
('saharmohamed@gmail.com', 'AZSQE3', 'Mohamed Sahar', 26789903, 'user', '2023-04-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `contacter`
--
ALTER TABLE `contacter`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `email` (`email`,`id_comment`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `email` (`email`,`id_reservation`),
  ADD KEY `id_chambre` (`id_chambre`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement`);

--
-- Index pour la table `payer`
--
ALTER TABLE `payer`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_reservation` (`id_reservation`,`id_paiement`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faire`
--
ALTER TABLE `faire`
  MODIFY `id_reservation` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7968;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
