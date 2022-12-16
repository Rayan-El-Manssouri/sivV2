-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 août 2022 à 16:35
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
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `IdAcheteur` int(10) NOT NULL AUTO_INCREMENT,
  `ProautoAssureur` tinyint(1) DEFAULT NULL,
  `PhysiqueMorale` tinyint(1) DEFAULT NULL,
  `Sexe` tinyint(1) DEFAULT NULL,
  `Nom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomUsage` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prenom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `RaisonSociale` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Siret` char(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelephonePortable` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdUtilisateur` smallint(6) DEFAULT NULL,
  `IdVille` smallint(6) DEFAULT NULL,
  `IdAdresse` mediumint(9) DEFAULT NULL,
  `CommuneDeNaissance` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`IdAcheteur`),
  KEY `IdVille` (`IdVille`),
  KEY `IdUtilisateur` (`IdUtilisateur`),
  KEY `IdAdresse` (`IdAdresse`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`IdAcheteur`, `ProautoAssureur`, `PhysiqueMorale`, `Sexe`, `Nom`, `NomUsage`, `Prenom`, `DateNaissance`, `RaisonSociale`, `Siret`, `TelephonePortable`, `Mail`, `IdUtilisateur`, `IdVille`, `IdAdresse`, `CommuneDeNaissance`) VALUES
(24, 0, 1, NULL, '', NULL, NULL, NULL, NULL, '5456231', '654123', '564123', 1, 1, 14, NULL),
(23, 0, 0, 0, '8974561', '894561', '89456', '2022-02-02', NULL, NULL, '303', '561', 1, 1, 13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `IdVille` smallint(9) DEFAULT NULL,
  `NomVoie` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComplementAdresse1` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeroVoie` smallint(6) DEFAULT NULL,
  `ExtentionVoie` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeVoieAdresse` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComplementAdresse2` varchar(38) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdAdresse` mediumint(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IdAdresse`),
  KEY `IdVille` (`IdVille`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`, `IdAdresse`) VALUES
(1, '6', '456', 4, 'Ter', 'Ctre Cial', '654', 1),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 2),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 3),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 4),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 5),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 6),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 7),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 8),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 9),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 10),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 11),
(1, '54', '5', 45, 'Bis', 'Lotissement', '4', 12),
(1, '654', '56', 56, 'Ter', 'Impasse', '5465', 13);

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

--
-- Déchargement des données de la table `cotitulaire`
--

INSERT INTO `cotitulaire` (`Nom`, `Prenom`, `NomUsage`, `RaisonSociale`, `Siren`, `IdUtilisateur`, `IdCotitulaire`, `IdVehicule`) VALUES
('Sinara', 'Prenom', NULL, 'Raison Social', 'Siren', 1, 1, 1);

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

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`IdDepartement`, `Nom`, `Numero`, `IdPays`) VALUES
(1, 'Vaucluse', '84', 1),
(2, 'Puy-de-Dôme', '63', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `IdOperation` int(10) NOT NULL AUTO_INCREMENT,
  `IdUtilisateur` smallint(6) DEFAULT NULL,
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
  PRIMARY KEY (`IdOperation`),
  KEY `IdUtilisateur` (`IdUtilisateur`),
  KEY `IdVille` (`IdVille`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`IdOperation`, `IdUtilisateur`, `Kilometrage`, `DateVente`, `DateDeclaration`, `PresenceCertificat`, `InformationAssurance`, `CederDestruction`, `CertifieSituationAdministrative`, `Transformation`, `OppositionUtilisationDonnees`, `Destruction`, `CertifieAchat`, `IdVille`, `Nature`) VALUES
(2, 1, 45, '2022-08-03 10:35:00', '2022-08-03', 0, 0, 1, 0, 0, 0, 0, 0, 1, 'Achat');

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
(1, 'root', 'root');

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
  `PuissanceFiscale` tinyint(4) DEFAULT NULL,
  `IdUtilisateur` smallint(6) DEFAULT NULL,
  `IdCouleur` tinyint(4) NOT NULL,
  PRIMARY KEY (`IdVehicule`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`IdVehicule`, `Immatriculation`, `DateImmatriculation`, `MarqueVehicule`, `TypeVarianteVersion`, `DenominationCommerciale`, `NumeoIdentification`, `GenreNational`, `MotifAbscenceCertificat`, `PresenceCertificat`, `DateCertificat`, `NumeroFormule`, `Opacité`, `PuissanceDin`, `PuissanceFiscale`, `IdUtilisateur`, `IdCouleur`) VALUES
(10, '54654654', '2022-06-05', '54', '54', '564', '4', '564', '654', 1, '2000-04-05', '52', 0, 5415, 54, 1, 1),
(9, 'AA-895-77', '2022-08-12', 'Audi', 'A3', 'Vp', '4564', '444', '44', 1, '2022-08-12', '12', 1, 1, 44, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `IdVendeur` smallint(6) NOT NULL AUTO_INCREMENT,
  `IdVille` smallint(6) DEFAULT NULL,
  `IdUtilisateur` smallint(6) DEFAULT NULL,
  `ProautoAssureur` tinyint(1) DEFAULT NULL,
  `PhysiqueMorale` tinyint(1) DEFAULT NULL,
  `Sexe` tinyint(1) DEFAULT NULL,
  `Nom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prenom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomUsage` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Siret` char(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumAgrement` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdAdresse` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`IdVendeur`),
  KEY `IdVille` (`IdVille`),
  KEY `IdUtilisateur` (`IdUtilisateur`),
  KEY `IdAdresse` (`IdAdresse`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
