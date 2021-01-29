-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 jan. 2021 à 15:40
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
  `id_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_post`, `message`, `id_user`) VALUES
(1, 1, 'voici mon message ', 10),
(2, 2, 'dsqdflksqn,nfd,n  dks,qkdkjQLKSJDLKQSJLDKJ SKQDLKJlksjdlklqsk', 4),
(3, 5, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 5),
(4, 2, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 1),
(5, 1, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 3),
(6, 2, 'dsqdflksqn,nfd,n  dks,qkdkjQLKSJDLKQSJLDKJ SKQDLKJlksjdlklqsk', 4),
(7, 5, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 5),
(8, 2, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 1),
(9, 1, 'SQDqsdsqDSQdsqDSQDSQdsqDSQDQSdsqdsqdqsdqsdqsdqsdqDQSDqdssdsqdsqdqSDDSQdqsDQSDQDdsqdQDqsdqsdqsdsqDD', 3);

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
  `post_fermer_ouvert` int(1) NOT NULL,
  `catégorie` int(4) NOT NULL,
  `nb_like` int(255) DEFAULT NULL,
  `nb_mess` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `contenu`, `id_utilisateur`, `date_publication`, `post_fermer_ouvert`, `catégorie`, `nb_like`, `nb_mess`) VALUES
(1, 'Titre', 'Bonjour, voici mon post ', 10, '2015-01-21 09:07:08', 0, 0, 3, 0),
(2, 'rtttttttttttttttttttttttttttttttttttttttyyyyyyyyyyyyyyyyyyyyy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 0, NULL, 0),
(3, 'hggggjjjjjjjjjjjjjjjjjjjjjjjjjjjjjytutyutyuty', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 0, NULL, 0),
(4, 'fdggfgfdgsdfgdssssssssssssssssss', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 0, '2021-01-17 18:26:19', 0, 1, NULL, 0),
(5, 'sdffffffffffffffffffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 1, NULL, 0),
(6, 'gsdgfffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 2, NULL, 0),
(7, 'Titre', 'Bonjour, voici mon post ', 10, '2015-01-21 09:07:08', 0, 2, NULL, 0),
(8, 'rtttttttttttttttttttttttttttttttttttttttyyyyyyyyyyyyyyyyyyyyy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 3, NULL, 0),
(9, 'hggggjjjjjjjjjjjjjjjjjjjjjjjjjjjjjytutyutyuty', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 3, NULL, 0),
(10, 'fdggfgfdgsdfgdssssssssssssssssss', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 0, '2021-01-17 18:26:19', 0, 4, NULL, 0),
(11, 'sdffffffffffffffffffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 4, NULL, 0),
(12, 'gsdgfffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0, 1, 255, 100);

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
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `surname`, `name`, `username`, `mail`, `password`, `birthday`) VALUES
(10, 'atmo', 'atmokk', 'assos1', 'gael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-01-26'),
(11, 'lkklk', 'hyghghgh', 'hjhjh', 'gaael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-01-21'),
(12, 'admin', 'admin', 'giraudet', 'gael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2031-01-19');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
