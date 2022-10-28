<?php
//On prend le module mikehaertl pour pouvoir compléter les pdf
require_once 'vendor/autoload.php';
use mikehaertl\pdftk\Pdf;

//On récupere tous les id de nos champs pour les affichier (dans un tableaux)
$data = array(
        "pdfjs_internal_id_43R" => "1",
        "IdentiteMandant" => "2", 
        "SIRETMandant" => "3", 
        "ExtentionAdresse" => "4",
        "TypeVoieAdresse" => "5", 
        "NomVoieAdresse" => "6",
        "CodePostalAdresse" => "7",
        "CommuneAdresse" => "8",
        "PaysAdresse" => "9",
        "IdentiteMandataire" => "10",
        "SIRETMandataire" => "11",
        "NatureOperation" => "12",
        "MarqueV&#233;hicule" => "13",
        "NumVinVehicule" => "14", 
        "NumeroImmatriculation" => "15", 
        "LieuDeclaration" => "16", 
        "DateJourDeclaration" => "17", 
        "DateMoisDeclaration" => "18", 
        "DateAnneeDeclaration" => "19",
        "InformationAssurance" => "20",
        "OppositionUtilisationDonnees" => "21",
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

var_dump($data);
?>