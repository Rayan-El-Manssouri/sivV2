<?php

//cd C:\wamp64\www\public_html\fillable-pdf

//pdftk mandat.pdf output mandat1.pdf // répare le fichier

//pdftk mandat.pdf dump_data_fields // affiche tout les champ d'un formulaire

//pdftk mandat.pdf generate_fdf output data.fdf    // créer un DFF fichier à partir d'un PDF

require_once 'vendor/autoload.php';

use mikehaertl\pdftk\Pdf;

$fields = array(
                'IdentiteMandant'    => 'NAIL AUTO',

                'SIRETMandant' => '49994704200060',

                'VoieAdresse' => '13',

                'ExtentionAdresse'    => 'BIS',

                'TypeVoieAdresse' => 'RUE',

                'NomVoieAdresse'   => 'CARISTIE',

                'CodePostalAdresse'   => '84100',

                'CommuneAdresse'   => 'ORANGE',

                'PaysAdresse'   => 'FRANCE',

                'IdentiteMandataire'   => 'SINARA',

                'SiretMandataire'   => '49994704800028',

                'NatureOperation'   => 'DEMANDE IMMATRICULATION',

                'MarqueVehicule'   => 'MERCEDES',

                'NumVinVehicule'   => 'SKLFHDKLFG454DFDFDF',

                'NumeroImmatriculation'   => 'TE-243-FG',

                'InformationAssurance'   => 'Off',            

                'LieuDeclaration'   => 'ORANGE',

                'DateJourDeclaration'   => '18',

                'DateMoisDeclaration'   => '02',

                'DateAnneeDeclaration'   => '2022',

                'OppositionUtilisationDonnees'   => 'Oui',

);

$pdf = new Pdf('mandat.pdf', [

]);

$pdf->fillForm($fields); // Remplissage du des champs du formulaire PDF

$pdf->needAppearances(); //garantit qu'un lecteur PDF prend en charge le rendu du contenu du champ de formulaire

$pdf->saveAs('filled.pdf');

 

$file = "filled.pdf"; // préparation pour affichage à l'écran

header("Content-type: application/pdf"); // Type de contenu d'en-tête

header("Content-Length: " . filesize($file));

readfile($file); // Envoyez le fichier au navigateur.

?>