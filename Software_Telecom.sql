-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Octobre 2017 à 10:09
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Software&Telecom`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `ID` int(11) NOT NULL,
  `name_project` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_project` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`ID`, `name_project`, `manager_project`, `city`, `description`, `start_date`, `end_date`) VALUES
(51, '', '', '', '', '', ''),
(52, 'blalal', '', '', '', '', ''),
(53, 'blalal', '', '', '', '', ''),
(54, 'blalal', '', '', '', '', ''),
(55, 'blalal', '', '', '', '', ''),
(56, 'blalal', '', '', '', '', ''),
(57, 'tcr', 'y rcv', 'kytv', 'yt', 'yt', 'yt'),
(58, 'tcr', 'y rcv', 'kytv', 'yt', 'yt', 'yt'),
(59, 'fgfdg', 'dsfggd', 'dfgfdg', 'fdfgfd', 'dfgfg', 'dffg');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deadline` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id`, `task_description`, `deadline`, `id_project`) VALUES
(67, '', '', 2),
(68, 'LKDS FS', 'O UFEza', 2),
(69, '', '', 2),
(70, '', '', 2),
(71, '', '', 2),
(72, 'S GFR', 'ER ZER', 2),
(73, 'S GFR', 'ER ZER', 2),
(74, '', '', 2),
(75, '', '', 2),
(76, '', '', 2),
(77, '', '', 2),
(78, '', '', 2),
(79, '', '', 2),
(80, '', '', 2),
(81, '', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name_user`, `password`) VALUES
(1, 'amelie', 'amelie'),
(2, 'mathieu', 'mathieu'),
(3, 'thomas', 'thomas'),
(4, 'crispy', 'crispy'),
(5, 'thierry', 'thierry');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
