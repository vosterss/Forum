-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 jan. 2021 à 15:45
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
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_post`, `message`) VALUES
(1, 1, 'voici mon message ');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `catégorie` bigint(3) NOT NULL,
  `titre` varchar(70) NOT NULL,
  `contenu` longtext NOT NULL,
  `id_utilisateur` bigint(20) NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_fermer_ouvert` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `catégorie`, `titre`, `contenu`, `id_utilisateur`, `date_publication`, `post_fermer_ouvert`) VALUES
(1, 0, 'Titre', 'Bonjour, voici mon post ', 10, '2015-01-21 09:07:08', 0),
(2, 1, 'rtttttttttttttttttttttttttttttttttttttttyyyyyyyyyyyyyyyyyyyyy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(3, 3, 'hggggjjjjjjjjjjjjjjjjjjjjjjjjjjjjjytutyutyuty', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(4, 1, 'fdggfgfdgsdfgdssssssssssssssssss', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 0, '2021-01-17 18:26:19', 0),
(5, 2, 'sdffffffffffffffffffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(6, 3, 'gsdgfffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(7, 0, 'Titre', 'Bonjour, voici mon post ', 10, '2015-01-21 09:07:08', 0),
(8, 1, 'rtttttttttttttttttttttttttttttttttttttttyyyyyyyyyyyyyyyyyyyyy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(9, 3, 'hggggjjjjjjjjjjjjjjjjjjjjjjjjjjjjjytutyutyuty', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(10, 1, 'fdggfgfdgsdfgdssssssssssssssssss', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 0, '2021-01-17 18:26:19', 0),
(11, 2, 'sdffffffffffffffffffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0),
(12, 3, 'gsdgfffffffffffffffffffffffffffffffffffff', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Repudiandae molestias, quia quasi, repellendus \r\n				qui ipsum quaerat ut velit quos aut porro soluta doloremque unde aperiamdignissimos placeat dolor odio \r\n				perferendis tenetur aspernaturquidem non explicabo. Quasi expedita enim odio vitae, commodrem accusantium \r\n				obcaecati voluptatibus odit magni qui nihil ab nam reprehenderit minima saepe', 10, '2021-01-17 18:26:19', 0);

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
(11, 'lkklk', 'hyghghgh', 'hjhjh', 'gaael.giraudet@laposte.net', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-01-21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
