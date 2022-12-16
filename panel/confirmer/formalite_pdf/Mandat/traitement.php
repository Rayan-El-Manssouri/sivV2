<?php
//Démarrage de la session
session_start();

//Connexion a la bdd
require_once '../../../../Gestion bdd/connect.php';
$database = new Database();

//On sélectionne tous dans la table acheteur pour récupérer les information.
$query = "SELECT * FROM `acheteur` WHERE Nom='".$_SESSION['acheteur']."'";
$data = $database->read($query);

//On traie/Recuperation des champs.
foreach($data as $dataV2):
        $Nom =  $dataV2['Nom'];
        $NomUsage = $dataV2['NomUsage'];
        $Siret = $dataV2['Siret'];
        $PrenomAcheteur = $dataV2['Prenom'];
        //On récupere l'ID de l'adresse pour pouvoir séléctionner la ligne dans la table adresse.
        $IdAdresse = $dataV2['IdAdresse'];
endforeach;    
    
//On sélectionne tous dans la table vehicule pour récupérer les information.
$query1 = "SELECT * FROM `vehicule` WHERE Immatriculation='".$_SESSION['vehicule']."'";
$data1 = $database->read($query1);

//On traie/Recuperation des champs.
foreach($data1 as $dataV2):
        $Marque = $dataV2['MarqueVehicule'];
        $NumeoIdentification = $dataV2['NumeoIdentification'];
        $Immatriculation = $dataV2['Immatriculation'];
endforeach;


//On sélectionne tous dans la table vendeur pour récupérer les information.
$query3 = "SELECT * FROM `vendeur` WHERE Nom='".$_SESSION['vendeur']."'";
$data3 = $database->read($query3);

//On traie/Recuperation des champs.
foreach($data3 as $dataV2):
        $Nom1 = $dataV2['Nom'];
        $NomUsage1 = $dataV2['NomUsage'];
        $Siret1 = $dataV2['Siret'];
endforeach;

//On récupere la ligne de la table adresse grâce a l'id de l'acheteur (renseigner)
$query2 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
$data2 = $database->read($query2);

//On récupere les information lier aux acheteur
foreach($data2 as $dataV2):
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresse = $dataV2['TypeVoieAdresse'];
        $NomVoie = $dataV2['NomVoie'];
        //On récupere la ville grâce a son ID renseigner dans le champs IdVille
        $IdVille = $dataV2['IdVille'];
        $NumeroVoie = $dataV2['NumeroVoie'];
        $ComplementAdresse1 = $dataV2['ComplementAdresse1'];
endforeach;

//On sélectionne la ville qui correspond a l'i renseignée
$query7 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data7 = $database->read($query7);

//On récupere toute les information
foreach($data7 as $dataV2):
        $CodePostal = $dataV2['CodePostal'];
        //On récupere IdPays Pour savoir dans qu'elle pays ce trouve la ville.
        $IdPays = $dataV2['IdPays'];
        $IdVille1 = $dataV2['IdVille'];
        $Nom3 = $dataV2['Nom'];
endforeach; 

//On sélectionner le pays en fonction de l'idVille renseigner.
$query6 = "SELECT * FROM pays WHERE IdPays='".$IdPays."' ";
$data6 = $database->read($query6);

//On récupere le nom du pays
foreach($data6 as $dataV2):
        $Pays = $dataV2['Nom'];
endforeach;

//On sélectionner l'opération choisi
$query4 = "SELECT * FROM operation WHERE IdOperation='".$_SESSION['operation']."' ";
$data4 = $database->read($query4);

$query8 = "SELECT * FROM mandataire WHERE RaisonSociale='".$_SESSION['mandataire']."' ";
$data8 = $database->read($query8);


foreach($data8 as $dataV2):
        $RaisonSociale = $dataV2['RaisonSociale'];
        $Siret2 = $dataV2['Siret'];

endforeach;        

//On récupere les informations
foreach($data4 as $dataV2):
        $DateJourDeclaration1 = $dataV2['DateDeclaration'];
        list($annee,$mois,$jour)=explode('-',$DateJourDeclaration1);
        $test = date('d',mktime(0,0,0,$mois,$jour,$annee));
        $IdVilleOperation = $dataV2['IdVille'];
endforeach;

$query9 = "SELECT * FROM ville WHERE IdVille='".$IdVilleOperation."'";
$data9 = $database->read($query9);

foreach($data9 as $dataV2):
        $NomVilleOperation = $dataV2['Nom'];
endforeach;        



//On prend le module mikehaertl pour pouvoir compléter les pdf
require_once 'vendor/autoload.php';
use mikehaertl\pdftk\Pdf;

//On récupere tous les id de nos champs pour les affichier (dans un tableaux)
$data = array(
        "VoieAdresse" => "".$NumeroVoie."", 
        "IdentiteMandant" => "".$Nom."  ".$NomUsage." ".$PrenomAcheteur."", 
        "SIRETMandant" => "".$Siret." ", 
        "ExtentionAdresse" => "".$ExtentionVoie." ",
        "TypeVoieAdresse" => "".$TypeVoieAdresse."", 
        "NomVoieAdresse" => "".$NomVoie." ", 
        "CodePostalAdresse" => "".$CodePostal." ", 
        "CommuneAdresse" => "".$Nom3."  ", 
        "PaysAdresse" => " ".$Pays."  ", 
        "IdentiteMandataire" => "".$_SESSION['mandataire']."",
        "SiretMandataire" => "".$Siret2."", 
        "NatureOperation" => " ".$_GET['Nature']." ", 
        "MarqueVehicule" => "".$Marque."  ", 
        "NumVinVehicule" => "".$NumeoIdentification."", 
        "NumeroImmatriculation" => "".$Immatriculation."  ", 
        "LieuDeclaration" => "".$NomVilleOperation." ", 
        "DateJourDeclaration" => "".$jour."  ", 
        "DateMoisDeclaration" => "".$mois."", 
        "DateAnneeDeclaration" => "".$annee."",
        "InformationAssurance" => "0",
        "OppositionUtilisationDonnees" => "0",
);

//On lui donne le modéle
$pdf = new Pdf('pdf/mandat.pdf', []);
$pdf->fillForm($data);
$pdf->needAppearances();
//Ils va nous renvoyer le formulaire rempli sur le filled.pdf
$pdf->saveAs('pdf/pdf_fill/filled.pdf');
$file = "pdf/pdf_fill/filled.pdf";
//Qu'elle que paramètre supplémentaire
header("Content-type: application.pdf");
header("Content-Length: " . filesize($file));
//On lis le pdf
readfile($file);
?>