-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 mars 2021 à 23:45
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

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(0, 'Warzone'),
(1, 'Fortnite'),
(2, 'Apex Legends'),
(3, 'PUBG');

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
(1, 3, '&lt;p&gt;&lt;em&gt;&lt;strong&gt;Merci d\'avoir partager ta classe, cest l\'arme du moment ahah !&lt;/strong&gt;&lt;/em&gt;&lt;/p&gt;', 1, '2021-03-01 23:02:17'),
(2, 3, '&lt;p&gt;&lt;span style=&quot;background-color: #f90606;&quot;&gt;J\'avoue c\'est horrible perso j\'espere qu\'il vont la patcher !&lt;/span&gt;&lt;/p&gt;', 2, '2021-03-01 23:07:08'),
(3, 4, '&lt;p&gt;j\'attends vos r&amp;eacute;ponse joueurs de BR !&lt;/p&gt;', 2, '2021-03-01 23:10:35'),
(4, 4, '&lt;p&gt;je crois bien que c\'etait une fake news&lt;/p&gt;', 1, '2021-03-01 23:11:22'),
(5, 4, '&lt;p&gt;ah non peut pas enfaite !xD&lt;/p&gt;', 1, '2021-03-01 23:13:06'),
(6, 5, '&lt;p&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;La &lt;strong&gt;XM4&lt;/strong&gt; et la&lt;strong&gt; FFAR&lt;/strong&gt; sont redevenu tendance alors fait tooi plaisir ! &lt;/span&gt;&lt;/p&gt;', 1, '2021-03-01 23:18:30'),
(7, 5, '&lt;p&gt;Merci bien je vais la tester&lt;/p&gt;', 1, '2021-03-01 23:18:48'),
(8, 6, '&lt;p&gt;&lt;strong&gt;Ui ge pence bi1 ke tu a r&amp;eacute;son&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;C\'est faute d\'orthographe sont impardonable corriger les en appuyant sur le bouton &quot;modifier&quot; ^^\'&lt;/p&gt;', 1, '2021-03-01 23:25:45'),
(9, 7, '&lt;p&gt;Oui je suis bien d\'accord avec toi vivement qu\'il la patch&lt;/p&gt;', 1, '2021-03-01 23:29:18'),
(10, 8, '&lt;p&gt;tu m\'&amp;eacute;tonne ca n\'arrive pas tout les jours&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 2, '2021-03-01 23:32:24'),
(11, 9, '&lt;p&gt;Je ne vois pas trop le rapport avec PUBG mais d\'accord&lt;/p&gt;', 2, '2021-03-01 23:38:40');

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
(3, 'Voici ma classe dmr ', '&lt;p&gt;&lt;span style=&quot;background-color: #f90606;&quot;&gt;&lt;strong&gt;1.Silencieux Agency&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #34495e;&quot;&gt;&lt;strong&gt;2.Canon blind&amp;eacute;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #f1c40f;&quot;&gt;&lt;strong&gt;3.viseur arial X3&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #843fa1;&quot;&gt;&lt;strong&gt;4.Chargeur agrandit&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', 1, '2021-03-01 21:54:22', 0, 0, 2, 1),
(4, 'Nouvelle map bientot', '&lt;p&gt;&lt;span style=&quot;color: #236fa1;&quot;&gt;J\'ai cru comprendre qu\'il y allait avoir une nouvelle map sur Warzone,&lt;/span&gt;&lt;strong&gt; quelqun a plus d\'info la dessus ?&lt;/strong&gt;&lt;/p&gt;', 2, '2021-03-01 22:08:48', 0, 0, 3, 0),
(5, 'Je cherche la classe forte du moment ', '&lt;h1&gt;&lt;strong&gt;Quelqun a une classe a me proposer svp &lt;/strong&gt;&lt;/h1&gt;', 1, '2021-03-01 22:16:59', 0, 0, 0, 0),
(6, 'Evenement prochain', '&lt;p&gt;&lt;strong&gt;C\'est bient&amp;ocirc;t les 3 ans de fortnite se qui veut dire qu\'un gros evenemt se pr&amp;eacute;pare des id&amp;eacute;es ?&lt;/strong&gt;&lt;/p&gt;', 1, '2021-03-01 22:22:42', 0, 1, 0, 1),
(7, 'Nouvelle arme trop forte', '&lt;p style=&quot;text-align: left;&quot;&gt;La nouvelle qu\'il ont ajout&amp;eacute; est juste trop forte c\'est chiant et lassant&lt;/p&gt;', 1, '2021-03-01 22:28:42', 0, 1, 0, 0),
(8, 'TOP 1 a la Poéle', '&lt;p&gt;Je viens de faire ma premiere victoire a la poele je suis plutot satisf&lt;/p&gt;', 1, '2021-03-01 22:31:19', 0, 3, 0, 0),
(9, 'Texte aléatoire', '&lt;div id=&quot;TheTexte&quot; class=&quot;Texte&quot; lang=&quot;zxx&quot;&gt;\r\n&lt;p&gt;&lt;strong&gt;Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;em&gt;Has autem provincias, quas Orontes ambiens amnis imosque pedes Cassii montis illius celsi praetermeans funditur in Parthenium mare, Gnaeus Pompeius superato Tigrane regnis Armeniorum abstractas dicioni Romanae coniunxit.&lt;/em&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;text-decoration: line-through;&quot;&gt;Has autem provincias, quas Orontes ambiens amnis imosque pedes Cassii montis illius celsi praetermeans funditur in Parthenium mare, Gnaeus Pompeius superato Tigrane regnis Armeniorum abstractas dicioni Romanae coniunxit.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-family: impact, sans-serif;&quot;&gt;Homines enim eruditos et sobrios ut infaustos et inutiles vitant, eo quoque accedente quod et nomenclatores adsueti haec et talia venditare, mercede accepta lucris quosdam et prandiis inserunt subditicios ignobiles et obscuros.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.&lt;/p&gt;\r\n&lt;/div&gt;', 2, '2021-03-01 22:35:46', 0, 3, 0, 0),
(10, 'Nouvelle Maj', '&lt;p&gt;La nouvelle mise&amp;nbsp; a jour de Apex n\'est pas tr&amp;eacute;s appr&amp;eacute;cie, jaimerais avoir votre avis&lt;/p&gt;', 2, '2021-03-01 22:41:56', 0, 2, 0, 0),
(12, 'Caustic le perso cancer', '&lt;p&gt;J\'en ai marre de voir des Caustic dans mes ranked, merci pour mon classement ...&lt;/p&gt;', 2, '2021-03-01 22:44:09', 0, 2, 0, 0),
(13, 'Monter Diamant ', '&lt;p&gt;Quelqu\'un est dispo pour me PL je suis stuck &lt;strong&gt;Bronze , je paye bien &lt;/strong&gt;&lt;/p&gt;', 2, '2021-03-01 22:45:27', 0, 0, 0, 0);

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
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2001-08-09', 'images/avatar1.jpg', 2, '2021-03-01 21:51:23'),
(2, 'Loris', 'Terry', 'user', 'loristerry63430@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2001-08-09', 'images/avatar1.jpg', 0, '2021-03-01 22:05:00');

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `pht_profil`
--
ALTER TABLE `pht_profil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
