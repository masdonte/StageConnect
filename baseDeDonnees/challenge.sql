-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mars 2025 à 10:39
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `identifiant_id` int(11) NOT NULL,
  `Mail` text NOT NULL,
  `Date` date NOT NULL,
  `Avis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `id` int(11) NOT NULL,
  `Offre_id` int(11) NOT NULL,
  `Statut` varchar(50) NOT NULL,
  `Offre_id_est_relie` int(11) NOT NULL,
  `Identifiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `droit_des_utilisateurs`
--

CREATE TABLE `droit_des_utilisateurs` (
  `Identifiant_id` int(11) NOT NULL,
  `Type_de_droit` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `interagit`
--

CREATE TABLE `interagit` (
  `Identifiant` int(11) NOT NULL,
  `Offre_id` int(11) NOT NULL,
  `identifiant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `Date_envoi` time NOT NULL,
  `Recu` text NOT NULL,
  `Envoi` text NOT NULL,
  `Contenu` text NOT NULL,
  `Lu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `Offre_id` int(11) NOT NULL,
  `Lieu_de_Stage` text NOT NULL,
  `Nom_de_l_entreprise` text NOT NULL,
  `Adresse` text NOT NULL,
  `Mail` text NOT NULL,
  `Numero_de_telephone` int(11) NOT NULL,
  `Date_de_Stage` int(11) NOT NULL,
  `Horaire_de_Stage` date NOT NULL,
  `Type_d_option_vise` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `peut_avoir`
--

CREATE TABLE `peut_avoir` (
  `Identifiant_id` int(11) NOT NULL,
  `Type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `peut_ecrire`
--

CREATE TABLE `peut_ecrire` (
  `message_id` int(11) NOT NULL,
  `Identifiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_utilisateur`
--

CREATE TABLE `type_utilisateur` (
  `Type_id` int(11) NOT NULL,
  `Nom_type` varchar(50) NOT NULL,
  `Identifiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Identifiant` int(11) NOT NULL,
  `Mot_de_Passe` text NOT NULL,
  `Mail` text NOT NULL,
  `Nom` text DEFAULT NULL,
  `Prenom` text DEFAULT NULL,
  `Specialite` text DEFAULT NULL,
  `Ecole` text DEFAULT NULL,
  `Numero_de_Telephone` int(11) DEFAULT NULL,
  `Nom_de_l_organisation` text DEFAULT NULL,
  `Descriptif_du_stage` text DEFAULT NULL,
  `Competence_Utile` text DEFAULT NULL,
  `Option_demande` text DEFAULT NULL,
  `Adresse` text DEFAULT NULL,
  `Nombre_de_Stagiaire` int(11) DEFAULT NULL,
  `Actif` tinyint(1) DEFAULT NULL,
  `Classe` text DEFAULT NULL,
  `CV` text DEFAULT NULL,
  `Lettre_de_Motivation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`identifiant_id`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id`,`Offre_id`),
  ADD KEY `Candidature_Offre_FK` (`Offre_id_est_relie`),
  ADD KEY `Candidature_Utilisateur0_FK` (`Identifiant`);

--
-- Index pour la table `droit_des_utilisateurs`
--
ALTER TABLE `droit_des_utilisateurs`
  ADD PRIMARY KEY (`Identifiant_id`);

--
-- Index pour la table `interagit`
--
ALTER TABLE `interagit`
  ADD PRIMARY KEY (`Identifiant`,`Offre_id`,`identifiant_id`),
  ADD KEY `Interagit_Offre0_FK` (`Offre_id`),
  ADD KEY `Interagit_Avis1_FK` (`identifiant_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`Offre_id`);

--
-- Index pour la table `peut_avoir`
--
ALTER TABLE `peut_avoir`
  ADD PRIMARY KEY (`Identifiant_id`,`Type_id`),
  ADD KEY `peut_avoir_Type_utilisateur0_FK` (`Type_id`);

--
-- Index pour la table `peut_ecrire`
--
ALTER TABLE `peut_ecrire`
  ADD PRIMARY KEY (`message_id`,`Identifiant`),
  ADD KEY `peut_ecrire_Utilisateur0_FK` (`Identifiant`);

--
-- Index pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  ADD PRIMARY KEY (`Type_id`),
  ADD KEY `Type_utilisateur_Utilisateur_FK` (`Identifiant`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `identifiant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `droit_des_utilisateurs`
--
ALTER TABLE `droit_des_utilisateurs`
  MODIFY `Identifiant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `Offre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  MODIFY `Type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `Candidature_Offre_FK` FOREIGN KEY (`Offre_id_est_relie`) REFERENCES `offre` (`Offre_id`),
  ADD CONSTRAINT `Candidature_Utilisateur0_FK` FOREIGN KEY (`Identifiant`) REFERENCES `utilisateur` (`Identifiant`);

--
-- Contraintes pour la table `interagit`
--
ALTER TABLE `interagit`
  ADD CONSTRAINT `Interagit_Avis1_FK` FOREIGN KEY (`identifiant_id`) REFERENCES `avis` (`identifiant_id`),
  ADD CONSTRAINT `Interagit_Offre0_FK` FOREIGN KEY (`Offre_id`) REFERENCES `offre` (`Offre_id`),
  ADD CONSTRAINT `Interagit_Utilisateur_FK` FOREIGN KEY (`Identifiant`) REFERENCES `utilisateur` (`Identifiant`);

--
-- Contraintes pour la table `peut_avoir`
--
ALTER TABLE `peut_avoir`
  ADD CONSTRAINT `peut_avoir_Droit_des_utilisateurs_FK` FOREIGN KEY (`Identifiant_id`) REFERENCES `droit_des_utilisateurs` (`Identifiant_id`),
  ADD CONSTRAINT `peut_avoir_Type_utilisateur0_FK` FOREIGN KEY (`Type_id`) REFERENCES `type_utilisateur` (`Type_id`);

--
-- Contraintes pour la table `peut_ecrire`
--
ALTER TABLE `peut_ecrire`
  ADD CONSTRAINT `peut_ecrire_Message_FK` FOREIGN KEY (`message_id`) REFERENCES `message` (`message_id`),
  ADD CONSTRAINT `peut_ecrire_Utilisateur0_FK` FOREIGN KEY (`Identifiant`) REFERENCES `utilisateur` (`Identifiant`);

--
-- Contraintes pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  ADD CONSTRAINT `Type_utilisateur_Utilisateur_FK` FOREIGN KEY (`Identifiant`) REFERENCES `utilisateur` (`Identifiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
