-- Création de l'utilisateur connecter 
CREATE USER 'test'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'test'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 

-- Creation de la bdd
CREATE DATABASE siv;

-- Utilisation de cette derniére
USE siv;

CREATE TABLE utilisateur(
    IdUtilisateur SMALLINT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR (255),
    password VARCHAR (255)
);

CREATE TABLE  Pays(
    IdPays SMALLINT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(40)
);

CREATE TABLE Departement(
    IdDepartement SMALLINT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(40),
    Numero CHAR(3),
    IdPays SMALLINT,
    FOREIGN KEY(IdPays)
    REFERENCES Pays(IdPays)
);


CREATE TABLE Ville(
    CodePostal CHAR(5),
    Nom VARCHAR(38),
    IdDepartement SMALLINT,
    IdVille SMALLINT PRIMARY KEY AUTO_INCREMENT,
    IdPays SMALLINT,
    FOREIGN KEY(IdPays)
    REFERENCES Pays(IdPays),
    FOREIGN KEY(IdDepartement)
    REFERENCES Departement(IdDepartement)
);

CREATE TABLE Adresse(
    IdVille SMALLINT(9),
    NomVoie VARCHAR(38),
    ComplementAdresse1 VARCHAR(38),
    NumeroVoie SMALLINT,
    ExtentionVoie VARCHAR(10),
    TypeVoieAdresse VARCHAR(10),
    ComplementAdresse2 VARCHAR(38),
    IdAdresse MEDIUMINT PRIMARY KEY AUTO_INCREMENT,
    FOREIGN KEY(IdVille)
    REFERENCES Ville(IdVille)
);

CREATE TABLE Acheteur(
    IdAcheteur INT(10) PRIMARY KEY AUTO_INCREMENT,
    ProautoAssureur BOOLEAN,
    PhysiqueMorale BOOLEAN,
    Sexe BOOLEAN,
    Nom VARCHAR(60),
    NomUsage VARCHAR(60),
    Prenom VARCHAR(60),
    DateNaissance date,
    RaisonSociale VARCHAR(60),
    Siret char(14),
    TelephonePortable char(10),
    Mail VARCHAR(100),
    IdUtilisateur SMALLINT,
    IdVille SMALLINT,
    IdAdresse MEDIUMINT,
    FOREIGN KEY (IdVille)
    REFERENCES ville(IdVille),
    FOREIGN KEY(IdUtilisateur)
    REFERENCES utilisateur(IdUtilisateur),
    FOREIGN KEY (IdAdresse)
    REFERENCES adresse(IdAdresse)
);



CREATE TABLE Vendeur(
    IdVendeur SMALLINT PRIMARY KEY AUTO_INCREMENT,
    IdVille SMALLINT,
    IdUtilisateur SMALLINT,
    ProautoAssureur BOOLEAN,
    PhysiqueMorale BOOLEAN,
    Sexe BOOLEAN,
    Nom VARCHAR(60),
    Prenom VARCHAR(60),
    NomUsage VARCHAR(60),
    Siret CHAR(14),
    NumAgrement VARCHAR(10),
    IdAdresse MEDIUMINT,
    FOREIGN KEY (IdVille)
    REFERENCES ville(IdVille),
    FOREIGN KEY (IdUtilisateur)
    REFERENCES utilisateur(IdUtilisateur),
    FOREIGN KEY (IdAdresse)
    REFERENCES adresse(IdAdresse)
);

CREATE TABLE Vehicule(
    IdVehicule SMALLINT PRIMARY KEY AUTO_INCREMENT,
    Immatriculation VARCHAR(10),
    DateImmatriculation date,
    MarqueVehicule VARCHAR(10),
    TypeVarianteVersion VARCHAR(100),
    DenominationCommerciale VARCHAR(10),
    NumeoIdentification VARCHAR(18),
    GenreNational VARCHAR(4),
    MotifAbscenceCertificat VARCHAR(100),
    PresenceCertificat BOOLEAN,
    DateCertificat date,
    NumeroFormule VARCHAR(11),
    Opacité BOOLEAN,
    PuissanceDin SMALLINT,
    PuissanceFiscale TINYINT,
    IdUtilisateur SMALLINT,
    FOREIGN KEY (IdUtilisateur)
    REFERENCES utilisateur(IdUtilisateur)
);

CREATE TABLE Mandataire(
    IdMandataire SMALLINT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(60),
    NomUsage VARCHAR(60),
    Prenom VARCHAR(60),
    RaisonSociale VARCHAR(60),
    Siret char(14)
    PhysiqueMoral SMALLINT,
    IdUtilisateur SMALLINT,
    FOREIGN KEY (IdUtilisateur)
    REFERENCES utilisateur(IdUtilisateur)
);
CREATE TABLE Carburant(
    Code CHAR(2),
    IdCarburant SMALLINT PRIMARY KEY AUTO_INCREMENT,
    IdVehicule SMALLINT,
    Nom VARCHAR(160),
    FOREIGN KEY(IdVehicule)
    REFERENCES Vehicule(IdVehicule)
);
CREATE TABLE CoTitulaire(
    Nom VARCHAR(60),
    Prenom VARCHAR(60),
    NomUsage VARCHAR(60),
    RaisonSociale VARCHAR(60),
    Siren char(60),
    IdUtilisateur SMALLINT,
    IdCotitulaire MEDIUMINT PRIMARY KEY AUTO_INCREMENT,
    IdVehicule SMALLINT, 
    FOREIGN KEY(IdVehicule)
    REFERENCES Vehicule(IdVehicule),
    FOREIGN KEY (IdUtilisateur)
    REFERENCES utilisateur(IdUtilisateur)
);

CREATE TABLE Couleur(
    idCouleur TINYINT PRIMARY KEY AUTO_INCREMENT,
    IdVehicule SMALLINT,
    Nom VARCHAR(10),
    FOREIGN KEY(IdVehicule)
    REFERENCES Vehicule(IdVehicule)
);


CREATE TABLE Operation(
    IdOperation INT(10) PRIMARY KEY AUTO_INCREMENT,
    IdUtilisateur SMALLINT,
    Kilometrage MEDIUMINT,
    DateVente TIMESTAMP,
    DateDeclaration DATE,
    PresenceCertificat BOOLEAN,
    InformationAssurance BOOLEAN,
    CederDestruction BOOLEAN,
    CertifieSituationAdministrative BOOLEAN,
    Transformation BOOLEAN,
    OppositionUtilisationDonnees BOOLEAN,
    Destruction BOOLEAN,
    CertifieAchat BOOLEAN,
    IdVille SMALLINT,
    Nature ENUM('Achat', 'Vente'),
    FOREIGN KEY(IdUtilisateur)
    REFERENCES utilisateur(IdUtilisateur),
    FOREIGN KEY(IdVille)
    REFERENCES ville(IdVille)
);

CREATE TABLE Fomalite(
    IdFomalite INT(10) PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(100),
);

INSERT INTO `fomalite` (`Nom`) VALUES ("Certificat");
INSERT INTO `fomalite` (`Nom`) VALUES ("Duplicata");
INSERT INTO `fomalite` (`Nom`) VALUES ("Changement de domicile");
INSERT INTO `fomalite` (`Nom`) VALUES ("Changement d’état civil ou d’état matrimonial");
INSERT INTO `fomalite` (`Nom`) VALUES ("Changement des caractéristiques techniques du véhicule");
INSERT INTO `fomalite` (`Nom`) VALUES ("Déclaration d'achat");

INSERT INTO `utilisateur` (`email`, `password`) VALUES ("root", "root");


INSERT INTO `couleur`(`Nom`) VALUES ('Noir');
INSERT INTO `couleur`(`Nom`) VALUES ('Marron');
INSERT INTO `couleur`(`Nom`) VALUES ('Rouge');
INSERT INTO `couleur`(`Nom`) VALUES ('Orange');
INSERT INTO `couleur`(`Nom`) VALUES ('Jaune');
INSERT INTO `couleur`(`Nom`) VALUES ('Vert');
INSERT INTO `couleur`(`Nom`) VALUES ('Bleu');
INSERT INTO `couleur`(`Nom`) VALUES ('Beige');
INSERT INTO `couleur`(`Nom`) VALUES ('Gris');
INSERT INTO `couleur`(`Nom`) VALUES ('Blanc');