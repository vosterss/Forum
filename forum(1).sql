-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 26 fév. 2021 à 09:13
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

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
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `id` bigint(20) NOT NULL,
  `privilege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `droit`
--

INSERT INTO `droit` (`id`, `privilege`) VALUES
(0, 'user'),
(1, 'ban'),
(2, 'adminstrateur');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `id_post` bigint(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `id_utilisateur` bigint(20) NOT NULL,
  `date_reponse` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_post`, `message`, `id_utilisateur`, `date_reponse`) VALUES
(1, 1, 'voici mon message ', 10, '2021-02-24 20:26:42'),
(2, 2, 'dsqdflksqn,nfd,n  dks,qkdkjQLKSJDLKQSJLDKJ SKQDLKJlksjdlklqsk', 4, '2021-02-24 20:26:42'),
(3, 5, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 5, '2021-02-24 20:26:42'),
(4, 2, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 1, '2021-02-24 20:26:42'),
(5, 1, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 3, '2021-02-24 20:26:42'),
(6, 2, 'dsqdflksqn,nfd,n  dks,qkdkjQLKSJDLKQSJLDKJ SKQDLKJlksjdlklqsk', 4, '2021-02-24 20:26:42'),
(7, 5, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 5, '2021-02-24 20:26:42'),
(8, 2, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 1, '2021-02-24 20:26:42'),
(9, 1, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 3, '2021-02-24 20:26:42'),
(10, 2, 'JE SUIS BIEN L4AUTEUR DE CETTE R2PONSE', 13, '2021-02-24 20:39:15'),
(11, 2, 'je trouve se post pas tres pertinent lol', 13, '2021-02-24 20:44:05'),
(12, 2, '', 14, '2021-02-24 21:04:33'),
(13, 2, '', 14, '2021-02-24 21:06:07'),
(14, 2, 'htrzhzthzthtrvfqgfdg', 14, '2021-02-24 21:07:38'),
(15, 2, 'Cette fois cela va marcher, enfin jespere ahah', 14, '2021-02-24 21:15:26'),
(16, 2, 'gedbgrengjrengrargagraaaa', 14, '2021-02-25 08:10:35'),
(17, 2, '', 14, '2021-02-25 08:13:44'),
(18, 1, 'htrrzhtjtrjztzjrrjzthztrzh', 14, '2021-02-25 09:20:37'),
(19, 1, 'rhehrheherherhrehrebhrthtr', 14, '2021-02-25 09:21:54'),
(20, 2, 'hzeufeifjiejfoizfjzeiofze', 13, '2021-02-26 07:31:40'),
(21, 1, 'je suis trop fort mdrrrrrrrrrrrrrrr', 13, '2021-02-26 07:57:05'),
(22, 1, 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 13, '2021-02-26 07:57:27');

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
  `nb_like` int(255) DEFAULT NULL,
  `nb_mess` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `contenu`, `id_utilisateur`, `date_publication`, `isclosed`, `categorie`, `nb_like`, `nb_mess`) VALUES
(1, 'Je partage ici la classe Warzone la plus cheater ', 'la MAC 10 !!!!!!!!!!!!!!!', 13, '2024-02-21 08:31:04', 0, 0, NULL, 0),
(2, 'edgvagreaga', 'garegreagreagaregaer', 13, '2024-02-21 09:34:07', 0, 0, NULL, 0),
(3, '(yg\'arhétrh', 'htzhthzrthrtzhtrzhzr', 13, '2024-02-21 03:10:31', 0, 0, NULL, 0),
(4, '', '[b]LOLOLOLOLOLOLOLOLOLOLOLOLOLOLOL[/b]', 13, '2026-02-21 08:07:23', 0, 0, NULL, 0);

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
  `ban` int(11) NOT NULL,
  `id_droit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `surname`, `name`, `username`, `mail`, `password`, `birthday`, `avatar`, `ban`, `id_droit`) VALUES
(10, 'atmo', 'atmokk', 'assos1', 'gael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7agezgzegze', '2021-01-26', 'images/avatar1.jpg', 0, 0),
(11, 'lkklk', 'hyghghgh', 'hjhjh', 'gaael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-01-21', 'images/avatar1.jpg', 0, 0),
(12, 'admin', 'admin', 'giraudet', 'gael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2031-01-19', 'images/avatar1.jpg', 0, 0),
(13, 'Loris', 'Terry', 'LorisTrr', 'loristerry63430@gmail.com', 'a8d2436eb1e79db3aabb4d46e814d4f34436cb03', '2001-08-09', 'images/fortnite.png', 0, 2),
(14, 'Thomas', 'Veira', 'Vosters', 'thomasvieira@gmail.com', '5a10593e262f95659897db18592f1bcfe3aa0bc9', '2001-08-09', 'images/avatar1.jpg', 0, 2),
(15, 'Ken', 'Kanecki', 'kenkaneck', 'minefragpe@gmail.com', '85e124a2a62b64553de5bf4b49695a85fab92f9c', '2001-08-09', 'images/avatar1.jpg', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `pht_profil`
--
ALTER TABLE `pht_profil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
