-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 oct. 2022 à 21:29
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sih`
--

-- --------------------------------------------------------

--
-- Structure de la table `declaration`
--

CREATE TABLE `declaration` (
  `N` int(11) NOT NULL,
  `cin` varchar(40) NOT NULL,
  `SIH` varchar(100) NOT NULL,
  `Modules` varchar(40) NOT NULL,
  `Service` varchar(80) NOT NULL,
  `Remarque` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `hur` time NOT NULL,
  `SITUATION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `declaration`
--

INSERT INTO `declaration` (`N`, `cin`, `SIH`, `Modules`, `Service`, `Remarque`, `date`, `hur`, `SITUATION`) VALUES
(14, 'VA35275', 'Centre de Consultations et de Traitements Dentaires', 'Gestion IPP', 'Service Management des Systèmes d’Information', 'Probleme de partage de l\'information entre les différents intervenants', '2022-08-16', '10:00:00', 0),
(15, 'VA35275', 'Centre de Consultations et de Traitements Dentaires', 'Gestion IPP', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme de  la gestion du dossier patient ;', '2022-08-16', '11:00:00', 0),
(16, 'VA35275', 'Centre de Consultations et de Traitements Dentaires', 'Consultations externes', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme de  la gestion du dossier patient ', '2022-08-16', '12:00:00', 1),
(17, 'VA35275', 'Centre de Consultations et de Traitements Dentaires', 'Gestion IPP', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme sur système de recueil de données ', '2022-08-21', '18:15:15', 2),
(18, 'VA35275', 'Centre de Consultations et de Traitements Dentaires', 'Gestion IPP', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme de  la gestion du dossier patient ', '2022-08-21', '18:16:50', 0),
(19, 'VA35275', 'Centre de Consultations et de Traitements Dentaires', 'Dossier medical', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme de partage de l\'information entre les différents intervenants', '2022-08-23', '01:24:39', 1),
(20, 'VA64498', 'Hôpital Ibn Sina', 'Gestion IPP', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme de  la gestion du dossier patient ', '2022-08-24', '00:37:08', 0),
(21, 'VA64498', 'Hôpital Ibn Sina', 'Réanimation', 'Service Gestion des Infrastructures et des Réseaux', 'Probleme de partage de l\'information entre les différents intervenants', '2022-08-24', '00:37:14', 0);

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE `info` (
  `cin` varchar(40) NOT NULL,
  `NOM` varchar(40) NOT NULL,
  `PRENOM` varchar(40) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `TEL` varchar(40) NOT NULL,
  `ADRESS` varchar(40) NOT NULL,
  `HOSPITAUX` varchar(80) NOT NULL,
  `TYPE` varchar(40) NOT NULL,
  `BREAUX` int(40) NOT NULL,
  `SERVICE` varchar(80) NOT NULL,
  `IMG` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`cin`, `NOM`, `PRENOM`, `EMAIL`, `TEL`, `ADRESS`, `HOSPITAUX`, `TYPE`, `BREAUX`, `SERVICE`, `IMG`) VALUES
('VA11111', 'ELCARROUE', 'Lamia', 'lamia.elknoni@gmail.com', '+212679545434', 'AKDAL ', '', 'Admin', 3, 'Service Gestion des Infrastructures et des Réseaux', 'image/1.png'),
('VA21729', 'El assri', 'Younes', 'el.assri@gmail.com', '+212676545434', 'ARFAN CENTRE Ibn cina', '', 'Admin', 124, 'Service Management des Systèmes d’Information', 'image/2.png'),
('VA35275', 'Ansari', 'Smail', 'ansarisamil7@gmail.com', '+212661666666', 'AKDAL ', 'Centre de Consultations et de Traitements Dentaires', 'Utilisateur', 1134, '', 'image/3.png'),
('VA36356', 'Kabri', 'jihane', 'ka.jihane@gmail.com', '+21267654543', 'AKDAL ', '', 'Admin', 1, 'Service Exploitation et Architecture des Systèmes d’Information', 'image/4.png'),
('VA64498', 'Bahri', 'donia', 'Ba.donia@gmail.com', '+21267523411', 'AKDAL ', 'Hôpital Ibn Sina', 'Utilisateur', 1231, '', 'image/5.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `CIN` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`CIN`, `password`, `TYPE`) VALUES
('VA11111', '11111', 'Admin'),
('VA21729', '21729', 'Admin'),
('VA35275', '35275', 'User'),
('VA36356', '36356', 'Admin'),
('VA64498', '64498', 'User');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `declaration`
--
ALTER TABLE `declaration`
  ADD PRIMARY KEY (`N`);

--
-- Index pour la table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`CIN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `declaration`
--
ALTER TABLE `declaration`
  MODIFY `N` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`cin`) REFERENCES `user` (`CIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
