-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 jan. 2023 à 11:54
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siv`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--


CREATE DATABASE siv;

USE siv;

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `IdVille` smallint(9) DEFAULT NULL,
  `NomVoie` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComplementAdresse1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeroVoie` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ExtentionVoie` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeVoieAdresse` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComplementAdresse2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdAdresse` mediumint(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IdAdresse`),
  KEY `IdVille` (`IdVille`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`, `IdAdresse`) VALUES
(2, '456465', '444', '6666', '1', '15', '654', 138),
(4, '4561', '6512', '2365132', '2', '18', '6512', 137),
(2, '4561', '651', '451', '2', '16', '2165', 136),
(2, '456', '6512', '5612', '1', '15', '6512', 135),
(2, '13 Rue Caristie', '6512', '5612', '1', '15', '6512', 134);

-- --------------------------------------------------------

--
-- Structure de la table `carburant`
--

DROP TABLE IF EXISTS `carburant`;
CREATE TABLE IF NOT EXISTS `carburant` (
  `Code` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdCarburant` smallint(6) NOT NULL AUTO_INCREMENT,
  `IdVehicule` smallint(6) DEFAULT NULL,
  `Nom` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdCarburant`),
  KEY `IdVehicule` (`IdVehicule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cotitulaire`
--

DROP TABLE IF EXISTS `cotitulaire`;
CREATE TABLE IF NOT EXISTS `cotitulaire` (
  `Nom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prenom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomUsage` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RaisonSociale` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Siren` char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdUtilisateur` smallint(6) DEFAULT NULL,
  `IdCotitulaire` mediumint(9) NOT NULL AUTO_INCREMENT,
  `IdVehicule` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`IdCotitulaire`),
  KEY `IdVehicule` (`IdVehicule`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `idCouleur` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idCouleur`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`idCouleur`, `Nom`) VALUES
(1, 'Noir'),
(2, 'Marron'),
(3, 'Rouge'),
(4, 'Orange'),
(5, 'Jaune'),
(6, 'Vert'),
(7, 'Bleu'),
(8, 'Beige'),
(9, 'Gris'),
(10, 'Blanc');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `IdDepartement` smallint(6) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Numero` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdPays` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`IdDepartement`),
  KEY `IdPays` (`IdPays`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `extentionvoie`
--

DROP TABLE IF EXISTS `extentionvoie`;
CREATE TABLE IF NOT EXISTS `extentionvoie` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `extentionvoie`
--

INSERT INTO `extentionvoie` (`Id`, `Nom`) VALUES
(1, 'BIS'),
(2, 'TER'),
(3, 'QUINQUIES'),
(4, 'A'),
(5, 'B'),
(6, 'C');

-- --------------------------------------------------------

--
-- Structure de la table `fomalite`
--

DROP TABLE IF EXISTS `fomalite`;
CREATE TABLE IF NOT EXISTS `fomalite` (
  `IdFomalite` int(10) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdFomalite`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fomalite`
--

INSERT INTO `fomalite` (`IdFomalite`, `Nom`) VALUES
(1, 'Certificat'),
(2, 'Duplicata'),
(3, 'Changement de domicile'),
(4, 'Changement d’état civil ou d’état matrimonial'),
(5, 'Changement des caractéristiques techniques du véhicule'),
(6, 'Déclaration d\'achat'),
(7, 'Correction');

-- --------------------------------------------------------

--
-- Structure de la table `mandataire`
--

DROP TABLE IF EXISTS `mandataire`;
CREATE TABLE IF NOT EXISTS `mandataire` (
  `IdMandataire` smallint(6) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomUsage` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prenom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RaisonSociale` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Siret` char(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdUtilisateur` smallint(6) NOT NULL,
  `PhysiqueMoral` smallint(6) NOT NULL,
  PRIMARY KEY (`IdMandataire`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mandataire`
--

INSERT INTO `mandataire` (`IdMandataire`, `Nom`, `NomUsage`, `Prenom`, `RaisonSociale`, `Siret`, `IdUtilisateur`, `PhysiqueMoral`) VALUES
(3, '[value-2]', 'Sinara', '[value-4]', '[value-5]', '49994704200028', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `IdOperation` int(10) NOT NULL AUTO_INCREMENT,
  `Kilometrage` mediumint(9) DEFAULT NULL,
  `DateVente` timestamp NULL DEFAULT NULL,
  `DateDeclaration` date DEFAULT NULL,
  `PresenceCertificat` tinyint(1) DEFAULT NULL,
  `InformationAssurance` tinyint(1) DEFAULT NULL,
  `CederDestruction` tinyint(1) DEFAULT NULL,
  `CertifieSituationAdministrative` tinyint(1) DEFAULT NULL,
  `Transformation` tinyint(1) DEFAULT NULL,
  `OppositionUtilisationDonnees` tinyint(1) DEFAULT NULL,
  `Destruction` tinyint(1) DEFAULT NULL,
  `CertifieAchat` tinyint(1) DEFAULT NULL,
  `IdVille` smallint(6) DEFAULT NULL,
  `Nature` enum('Achat','Vente') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Acheteur` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vendeur` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdVehicule` int(11) NOT NULL,
  `NomOperation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formaliter` int(11) NOT NULL,
  PRIMARY KEY (`IdOperation`),
  KEY `IdVille` (`IdVille`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`IdOperation`, `Kilometrage`, `DateVente`, `DateDeclaration`, `PresenceCertificat`, `InformationAssurance`, `CederDestruction`, `CertifieSituationAdministrative`, `Transformation`, `OppositionUtilisationDonnees`, `Destruction`, `CertifieAchat`, `IdVille`, `Nature`, `Acheteur`, `Vendeur`, `IdVehicule`, `NomOperation`, `formaliter`) VALUES
(22, 561230, '2023-01-18 11:50:00', '2022-12-28', 0, 1, 1, 0, 1, 0, 0, 1, 2, 'Vente', '1,79', '2,78', 22, '465132', 2),
(21, 456123, '2023-01-11 11:50:00', '2023-01-10', 0, 0, 1, 0, 1, 0, 0, 1, 1, 'Achat', '1,79', '1,80', 22, '12345', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `IdPays` smallint(6) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdPays`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`IdPays`, `Nom`) VALUES
(1, 'FRANCE');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `IdPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `ProAuto` tinyint(1) DEFAULT NULL,
  `Assureur` tinyint(1) DEFAULT NULL,
  `NumeroDeTelephone` varchar(60) DEFAULT NULL,
  `Mail` varchar(60) DEFAULT NULL,
  `IdAdresse` int(11) NOT NULL,
  PRIMARY KEY (`IdPersonne`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`IdPersonne`, `ProAuto`, `Assureur`, `NumeroDeTelephone`, `Mail`, `IdAdresse`) VALUES
(107, 0, 1, '654123', '65', 134),
(106, 0, 1, '6541  ', '651  ', 136),
(105, 0, 0, '454564', '4545456', 135),
(104, 0, 0, '454564', '4545456', 134),
(108, 1, 0, '0632523615       ', 'alex@gmail.co   ', 138);

-- --------------------------------------------------------

--
-- Structure de la table `personnemoral`
--

DROP TABLE IF EXISTS `personnemoral`;
CREATE TABLE IF NOT EXISTS `personnemoral` (
  `IdPersonneMoral` int(11) NOT NULL AUTO_INCREMENT,
  `Idpersonne` smallint(9) DEFAULT NULL,
  `RaisonSocial` varchar(100) DEFAULT NULL,
  `Siret` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdPersonneMoral`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnemoral`
--

INSERT INTO `personnemoral` (`IdPersonneMoral`, `Idpersonne`, `RaisonSocial`, `Siret`) VALUES
(78, 107, '4651RaisonSocial', '654123555');

-- --------------------------------------------------------

--
-- Structure de la table `personnephysique`
--

DROP TABLE IF EXISTS `personnephysique`;
CREATE TABLE IF NOT EXISTS `personnephysique` (
  `IdPersonnePhysique` int(11) NOT NULL AUTO_INCREMENT,
  `Sexe` tinyint(1) DEFAULT NULL,
  `Nom` varchar(60) DEFAULT NULL,
  `Nomdusage` varchar(60) DEFAULT NULL,
  `Prenom` varchar(60) DEFAULT NULL,
  `DateDenaissance` date DEFAULT NULL,
  `Idpersonne` smallint(9) DEFAULT NULL,
  PRIMARY KEY (`IdPersonnePhysique`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnephysique`
--

INSERT INTO `personnephysique` (`IdPersonnePhysique`, `Sexe`, `Nom`, `Nomdusage`, `Prenom`, `DateDenaissance`, `Idpersonne`) VALUES
(80, 0, 'Alex', 'Deguy', 'Alex', '2000-03-05', 108),
(79, 0, '5555', '6444', '654123', '2023-06-06', 106);

-- --------------------------------------------------------

--
-- Structure de la table `typevoieadresse`
--

DROP TABLE IF EXISTS `typevoieadresse`;
CREATE TABLE IF NOT EXISTS `typevoieadresse` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typevoieadresse`
--

INSERT INTO `typevoieadresse` (`Id`, `Nom`) VALUES
(1, 'RUE'),
(2, 'AVENUE'),
(3, 'BOULEVARD'),
(4, 'ALLEE'),
(5, 'PLACE'),
(6, 'ROUTE'),
(7, 'CENTRE'),
(8, 'CTRE CIAL'),
(9, 'IMMEUBLE'),
(10, 'IMPASSE'),
(11, 'LIEU-DIT'),
(12, 'LOTISSEMENT'),
(13, 'PASSAGE'),
(14, 'RESIDENCE'),
(15, 'RESIDENCE PRIVE'),
(16, 'RONDPOINT'),
(17, 'SQUARE'),
(18, 'VILLAGE'),
(19, 'Z.A'),
(20, 'Z.A.C');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` smallint(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `email`, `password`) VALUES
(1, 'livi', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `IdVehicule` smallint(6) NOT NULL AUTO_INCREMENT,
  `Immatriculation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateImmatriculation` date DEFAULT NULL,
  `MarqueVehicule` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeVarianteVersion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DenominationCommerciale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeoIdentification` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GenreNational` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotifAbscenceCertificat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PresenceCertificat` tinyint(1) DEFAULT NULL,
  `DateCertificat` date DEFAULT NULL,
  `NumeroFormule` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Opacité` tinyint(1) DEFAULT NULL,
  `PuissanceDin` smallint(6) DEFAULT NULL,
  `PuissanceFiscale` smallint(6) DEFAULT NULL,
  `IdUtilisateur` smallint(6) DEFAULT NULL,
  `IdCouleur` tinyint(4) NOT NULL,
  PRIMARY KEY (`IdVehicule`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`IdVehicule`, `Immatriculation`, `DateImmatriculation`, `MarqueVehicule`, `TypeVarianteVersion`, `DenominationCommerciale`, `NumeoIdentification`, `GenreNational`, `MotifAbscenceCertificat`, `PresenceCertificat`, `DateCertificat`, `NumeroFormule`, `Opacité`, `PuissanceDin`, `PuissanceFiscale`, `IdUtilisateur`, `IdCouleur`) VALUES
(22, 'AA-BB-CC', '2023-04-06', '9845612', '555', '5461', '12345678912345123', '5412', '6857342', 1, '2023-01-03', '87542', 1, 6451, 6513, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `CodePostal` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdDepartement` smallint(6) DEFAULT NULL,
  `IdVille` smallint(6) NOT NULL AUTO_INCREMENT,
  `IdPays` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`IdVille`),
  KEY `IdPays` (`IdPays`),
  KEY `IdDepartement` (`IdDepartement`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`CodePostal`, `Nom`, `IdDepartement`, `IdVille`, `IdPays`) VALUES
('84100', 'Orange', 1, 1, 1),
('34110', 'FRONTIGNAN', 1, 2, 1),
('84130', 'LE PONTET', 1, 3, 1),
('84140', 'Avignon', 1, 4, 1),
('63430', 'Thiers', 2, 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
