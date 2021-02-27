-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 27 fév. 2021 à 20:58
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `id_post` bigint(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `id_utilisateur` bigint(20) NOT NULL,
  `date_reponse` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_post`, `message`, `id_utilisateur`, `date_reponse`) VALUES
(1, 1, 'voici mon message ', 10, '2021-02-27 19:42:21'),
(2, 2, 'dsqdflksqn,nfd,n  dks,qkdkjQLKSJDLKQSJLDKJ SKQDLKJlksjdlklqsk', 4, '2021-02-27 19:42:21'),
(3, 5, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 5, '2021-02-27 19:42:21'),
(4, 2, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 1, '2021-02-27 19:42:21'),
(5, 1, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 3, '2021-02-27 19:42:21'),
(6, 2, 'dsqdflksqn,nfd,n  dks,qkdkjQLKSJDLKQSJLDKJ SKQDLKJlksjdlklqsk', 4, '2021-02-27 19:42:21'),
(7, 5, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 5, '2021-02-27 19:42:21'),
(8, 2, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 1, '2021-02-27 19:42:21'),
(9, 1, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 3, '2021-02-27 19:42:21'),
(10, 2, 'JE SUIS BIEN L4AUTEUR DE CETTE R2PONSE', 13, '2021-02-27 19:42:21'),
(11, 2, 'je trouve se post pas tres pertinent lol', 13, '2021-02-27 19:42:21'),
(12, 2, '', 14, '2021-02-27 19:42:21'),
(13, 2, '', 14, '2021-02-27 19:42:21'),
(14, 2, 'htrzhzthzthtrvfqgfdg', 14, '2021-02-27 19:42:21'),
(15, 2, 'Cette fois cela va marcher, enfin jespere ahah', 14, '2021-02-27 19:42:21'),
(16, 2, 'gedbgrengjrengrargagraaaa', 14, '2021-02-27 19:42:21'),
(17, 2, '', 14, '2021-02-27 19:42:21'),
(18, 1, 'htrrzhtjtrjztzjrrjzthztrzh', 14, '2021-02-27 19:42:21'),
(19, 1, 'rhehrheherherhrehrebhrthtr', 14, '2021-02-27 19:42:21'),
(20, 6, '            fdgdfgfdgfdgfd', 10, '2021-02-27 19:42:21'),
(21, 6, '            jdhksjdfhksjhdsfkjdh\r\n', 10, '2021-02-27 19:42:21'),
(23, 3, 'je te modif sans changer date', 10, '2021-02-27 19:43:02'),
(24, 3, 'je tes modifier sans changer la date ?\r\n', 10, '2021-02-27 19:42:21'),
(25, 3, 'je te modifi mais la date reste', 10, '2021-02-27 19:42:21'),
(26, 3, '				la sa vas pas fonctionner', 10, '2021-02-27 19:45:04');

-- --------------------------------------------------------

--
-- Structure de la table `pht_profil`
--

CREATE TABLE `pht_profil` (
  `id` bigint(20) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pht_profil`
--

INSERT INTO `pht_profil` (`id`, `avatar`) VALUES
(0, 'images/avatar1.jpg'),
(1, 'images/avatar2.jpg'),
(2, 'images/avatar3.jpg'),
(3, 'images/avatar4.jpg'),
(4, 'images/avatar5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `titre` varchar(70) NOT NULL,
  `contenu` longtext NOT NULL,
  `id_utilisateur` bigint(20) NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT current_timestamp(),
  `isclosed` int(1) NOT NULL,
  `categorie` int(4) NOT NULL,
  `nb_mess` int(255) NOT NULL,
  `nb_like` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `contenu`, `id_utilisateur`, `date_publication`, `isclosed`, `categorie`, `nb_mess`, `nb_like`) VALUES
(3, '(yg\'arhétrh', 'htzhthzrthrtzhtrzhzr', 13, '2024-02-21 03:10:31', 0, 0, 0, 30),
(4, 'je fais plein ', 'dfsdfsdfsdfsdfsdfsd', 10, '2026-02-21 10:55:18', 0, 0, 0, 0),
(5, 'bvhfghgh', 'gfhfghgfhfghfghgf', 12, '2026-02-21 10:57:42', 0, 0, 0, 4),
(7, 'je fais plein', 'dfssdfgfdfgfdgfdg', 10, '2026-02-21 02:52:24', 0, 0, 0, 0),
(8, 'fdgfdgfdgfdg', 'dfgdfgfdgfdgfdgdfdgfdg', 10, '2026-02-21 02:52:38', 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` bigint(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `avatar` text NOT NULL,
  `id_droit` int(11) NOT NULL,
  `date_deban` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `surname`, `name`, `username`, `mail`, `password`, `birthday`, `avatar`, `id_droit`, `date_deban`) VALUES
(10, 'atmo', 'atmokk', 'assos1', 'gael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-01-26', 'images/avatar5.jpg', 2, '2021-02-27 19:20:23'),
(11, 'lkklk', 'hyghghgh', 'hjhjh', 'gaael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-01-21', 'images/avatar1.jpg', 0, '2021-02-27 17:39:21'),
(12, 'admin', 'admin', 'giraudet', 'gael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2031-01-19', 'images/avatar1.jpg', 0, '2021-02-27 19:17:23'),
(13, 'Loris', 'Terry', 'LorisTrr', 'loristerry63430@gmail.com', 'a8d2436eb1e79db3aabb4d46e814d4f34436cb03', '2001-08-09', 'images/avatar4.jpg', 2, '2021-02-27 17:16:28'),
(14, 'Thomas', 'Veira', 'Vosters', 'thomasvieira@gmail.com', '5a10593e262f95659897db18592f1bcfe3aa0bc9', '2001-08-09', 'images/avatar1.jpg', 2, '2021-02-25 23:00:00'),
(15, 'Ken', 'Kanecki', 'kenkaneck', 'minefragpe@gmail.com', '85e124a2a62b64553de5bf4b49695a85fab92f9c', '2001-08-09', 'images/avatar1.jpg', 0, '2021-02-25 23:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_utilisateur`);

--
-- Index pour la table `pht_profil`
--
ALTER TABLE `pht_profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `pht_profil`
--
ALTER TABLE `pht_profil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
