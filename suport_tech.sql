-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 sep. 2024 à 17:29
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `suport_tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `answerId` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `isCorrect` tinyint(1) DEFAULT NULL,
  `questionId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `classId` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `classeId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` blob DEFAULT NULL,
  `classId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`courseId`, `title`, `description`, `classId`) VALUES
(1, 'exponentiation dans n', NULL, NULL),
(2, 'polynome arithmetique', NULL, NULL),
(3, 'transformation en base 10', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `questionId` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `quizId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `quizId` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `courseId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `classe` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `ecole` varchar(266) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `classe`, `sex`, `ecole`, `password`) VALUES
(2, 'Nganda', 'Tim', 3, 'M', 'saint-esprit', 543);

-- --------------------------------------------------------

--
-- Structure de la table `user_course`
--

CREATE TABLE `user_course` (
  `userId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `classe` int(11) NOT NULL,
  `ecole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`userId`, `username`, `password`, `classId`, `prenom`, `sex`, `classe`, `ecole`) VALUES
(0, 'kudia', '12345', NULL, '', '', 0, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerId`),
  ADD KEY `questionId` (`questionId`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`classeId`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `classId` (`classId`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `quizId` (`quizId`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizId`),
  ADD KEY `courseId` (`courseId`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`userId`,`courseId`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `classId` (`classId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`questionId`) REFERENCES `question` (`questionId`);

--
-- Contraintes pour la table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`);

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`);

--
-- Contraintes pour la table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `utilisateur` (`userId`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
