<?php
//On démarre la session
session_start();

//Connexion a la bdd
require_once '../../../../Gestion bdd/connect.php';
$database = new Database();

//On prend notre module
require_once 'vendor/autoload.php';
use mikehaertl\pdftk\Pdf;

//On select le véhicule pour reprendre les informations
$query = "SELECT * FROM vehicule WHERE Immatriculation= '".$_SESSION['vehicule']."' ";
$data = $database->read($query);

//On traite
foreach($data as $dataV2):
        $NumeoIdentification = $dataV2['NumeoIdentification'];
        $DateImmatriculation = $dataV2['DateImmatriculation'];

        //On explose la date 2022-05-02
        $datetime1 = date($DateImmatriculation);
        $DateImmatriculation1 = date("dmY",strtotime($datetime1));
        $timeImmatriculation = date("H i",strtotime($datetime1));


        $MarqueVehicule = $dataV2['MarqueVehicule'];
        $TypeVarianteVersion = $dataV2['TypeVarianteVersion'];
        $GenreNational = $dataV2['GenreNational'];
        $DenominationCommerciale = $dataV2['DenominationCommerciale'];
        $NumeroFormule = $dataV2['NumeroFormule'];
        $DateCertificat = $dataV2['DateCertificat'];
      

        $datetime2 = date($DateCertificat);
        $DateCertificat = date("dmY",strtotime($datetime2));
        $timeCertificat = date("H i",strtotime($datetime2));

        $MotifAbscenceCertificat = $dataV2['MotifAbscenceCertificat'];
endforeach;        

//On récupere l'opération
$query2 = "SELECT * FROM operation WHERE IdOperation='".$_SESSION['operation']."' ";
$data2 = $database->read($query2);

//On traite
foreach($data2 as $dataV2):
        $Kilometrage = $dataV2['Kilometrage'];
        $IdVilleOperation = $dataV2['IdVille'];


        $DateDeclaration = $dataV2['DateDeclaration'];
        list($anneeDeclaration,$moisDeclaration,$jourDeclaration)=explode('-',$DateDeclaration);
        $test = date(mktime(0,0,0,strtotime($anneeDeclaration),strtotime($moisDeclaration),strtotime($jourDeclaration)));



        $DateVente = $dataV2['DateVente'];

        $datetime = date($DateVente);
        $date = date("dmY",strtotime($datetime));
        $time = date("H i",strtotime($datetime));

        $CaseOppositionUtilisationDonnees = $dataV2['OppositionUtilisationDonnees'];
        //On explose la date de vente 12:12:12
        $DateVente2 = $dataV2['DateVente'];
        list($HeureVente,$minuteVente,$secondeVente)= explode(':',$DateVente2);
        date('H:i:s',mktime(0,0,0,strtotime($HeureVente),strtotime($minuteVente),strtotime($secondeVente)));

        $CaseCertifieAchat = $dataV2['CertifieAchat'];
        $PresenceCertificat = $dataV2['PresenceCertificat'];
        // 1 pour ce cocher , 0 pour ce décocher
        $CederDestruction = $dataV2['CederDestruction'];
        $CaseCocherTransformation = $dataV2['Transformation'];
        $CaseCertifieSituationAdministrative = $dataV2['CertifieSituationAdministrative'];
endforeach;

//On récupere la ville
$query9 = "SELECT * FROM ville WHERE IdVille= '".$IdVilleOperation."' ";
$data9 = $database->read($query9);

foreach($data9 as $dataV2):
        $NomOperation = $dataV2['Nom'];
endforeach;        

//On récupere le vendeur
$query3 = "SELECT * FROM vendeur WHERE Nom='".$_SESSION['vendeur']."' ";
$data3 = $database->read($query3);

//On récupere les informations
foreach($data3 as $dataV2):
        $BouttonsRadioPhysiqueMoralVendeur = $dataV2['PhysiqueMorale'];
        $NomVendeur = $dataV2['Nom'];
        $NomUsageVendeur = $dataV2['NomUsage'];
        $PrenomVendeur = $dataV2['Prenom'];
        $SiretVendeur = $dataV2['Siret'];
        $IdVille = $dataV2['IdVille'];
        $IdAdresse = $dataV2['IdAdresse'];
        $NumAgrementVendeur = $dataV2['NumAgrement'];
        $PhysiqueMoraleVendeur = $dataV2['PhysiqueMorale'];
        $SexeVendeur = $dataV2['Sexe'];
endforeach;        

//On prend la ville du vendeur grâce a l'id renseigner
$query4 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data4 = $database->read($query4);

//On traite
foreach($data4 as $dataV2):
        $CodePostalVendeur = $dataV2['CodePostal'];
        $NomVille = $dataV2['Nom'];
endforeach;        

//On récupere l'adresse
$query5 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
$data5 = $database->read($query5);

//On traite
foreach($data5 as $dataV2):
        $NumeroVoieAdresseVendeur = $dataV2['NumeroVoie'];
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresseVendeur = $dataV2['TypeVoieAdresse'];
        $NomVoieAdresseVendeur = $dataV2['NomVoie'];
endforeach;

//On récupere l'acheteur
$query6 = "SELECT * FROM acheteur WHERE Nom='".$_SESSION['acheteur']."' ";
$data6 = $database->read($query6);


//On traite les information
foreach($data6 as $dataV2):
        $NomUsageAcheteur = $dataV2['NomUsage'];
        $PrenomAcheteur = $dataV2['Prenom'];
        $SiretAcheteur = $dataV2['Siret'];
        $PhysiqueMoraleAcheteur = $dataV2['PhysiqueMorale'];
        $DateNaissance = $dataV2['DateNaissance'];
        list($anneeNaissance,$moisNaissance,$jourNaissance)=explode('-',$DateNaissance);
        date('w',mktime(0,0,0,$anneeNaissance,$moisNaissance,$jourNaissance));
        //On explose la date de naisssance : 2022-20-26
       
        //On récupere l'id de la ville

        $idVilleAcheteur = $dataV2['IdVille'];
        $IdAdresseAcheteur = $dataV2['IdAdresse'];
        $PhysiqueMorale = $dataV2['PhysiqueMorale'];
        $SexeAcheteur = $dataV2['Sexe'];
        $CommuneDeNaissanceAcheteur = $dataV2['CommuneDeNaissance'];
endforeach;

$query10 = "SELECT * FROM ville WHERE IdVille='".$CommuneDeNaissanceAcheteur."' ";
$data10 = $database->read($query10);

foreach($data10 as $dataV2):
        $CommuneDeNaissanceAcheteurLieux = $dataV2['Nom'];
endforeach;        



//On select pour reprendre les information de la ville
$query7 = "SELECT * FROM ville WHERE IdVille='".$idVilleAcheteur."' ";
$data7  = $database->read($query7);

//On traite
foreach($data7 as $dataV2):
        $NomVilleAcheteur = $dataV2['Nom'];
        $CodePostalAcheteur = $dataV2['CodePostal'];
        $CommuneAdresseAcheteur = $dataV2['Nom'];
endforeach;

//On récupere l'adresse de l'acheteur
$query8 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresseAcheteur."'";
$data8 = $database->read($query8);

//On traite
foreach($data8 as $dataV2):
        $NomVoieAcheteur = $dataV2['NomVoie'];
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresseAcheteur = $dataV2['TypeVoieAdresse'];
        $NomVoieAdresse = $dataV2['NomVoie'];
        $NumeroVoieAdresseAcheteur = $dataV2['NumeroVoie'];
endforeach;

//On récupere les id des champs du pdf est en affiche nos variable
$data = array(
      //-------------------------------------------------
      //Identité véhicule
      "Immatriculation" => "".$_SESSION['vehicule']."",
      "NumeoIdentification" => "".$NumeoIdentification."",
      "DateImmatriculation" => "".$DateImmatriculation1."",
      "TypeVarianteVersion" => "".$TypeVarianteVersion."",
      "GenreNational" => "".$GenreNational."",
      "MarqueVehicule" => "".$MarqueVehicule."",
      "DenominationCommerciale" => "".$DenominationCommerciale."",
      "KilometrageCompteur" => "".$Kilometrage."",
      "NumeroFormule" => "".$NumeroFormule."",
      "MotifAbscenceCertificat" => "".$MotifAbscenceCertificat."",
      "DateCertificatImmatriculation" => "".$DateCertificat."",
      "DateVente" =>  "".$date."",

      //-------------------------------------------------------
      //Identité vendeur
      "IdentiteVendeur" => "".$NomVendeur." ".$NomUsageVendeur." ".$PrenomVendeur." ",
      "SiretVendeur" => "".$SiretVendeur." ",
      "CodePostalAdresseVendeur" => "".$CodePostalVendeur." ",
      "NumeroVoieAdresseVendeur" => "".$NumeroVoieAdresseVendeur." ",
      "ExtensionAdresseVendeur" => "".$ExtentionVoie." ",
      "TypeVoieAdresseVendeur" => "".$TypeVoieAdresseVendeur." ",
      "NomVoieAdresseVendeur" => "".$NomVoieAdresseVendeur." ",
      "CommuneAdresseVendeur" => "".$NomVille." ",
      "DateNaissanceAcheteurJour" => "".$jourNaissance."",
      "DateNaissanceAcheteurMois" => "".$moisNaissance."",
      "DateNaissanceAcheteurAnnee" => "".$anneeNaissance."",
      "CasePersonnePhysiqueMoraleVendeur" => "".$PhysiqueMoraleVendeur."",
      "CaseSexeVendeur" => "".$SexeVendeur."",
      "NumAgrementVendeur" => "".$NumAgrementVendeur."",

      //-----------------------------------------------------------
      //Identité Acheteur
      "CommuneNaissanceAcheteur" => "".$CommuneDeNaissanceAcheteurLieux."",
      "NumeroVoieAdresseAcheteur" => "".$NumeroVoieAdresseAcheteur."",
      "ExtensionAdresseAcheteur" => "".$ExtentionVoie."",
      "TypeVoieAdresseAcheteur" => "".$TypeVoieAdresseAcheteur."",
      "NomVoieAdresseAcheteur" => "".$NomVoieAdresse."",
      "CodePostalAdresseAcheteur" => "".$CodePostalAcheteur."",
      "CommuneAdresseAcheteur" => "".$CommuneAdresseAcheteur."",
      "IdentiteAcheteur" => "".$_SESSION['acheteur']." ".$NomUsageAcheteur." ".$PrenomAcheteur."  ",
      "SiretAcheteur" => "".$SiretAcheteur."",
      "CasePersonnePhysiqueMoraleAcheteur" => "".$PhysiqueMoraleAcheteur."",
      "CaseSexeAcheteur" => "".$SexeAcheteur."",


      //------------------------------------------------------------
      //Parti Opération
      "CommuneDeclarationOperation" => "".$NomOperation."",
      "DateDeclaration" => "".$jourDeclaration." ".$moisDeclaration." ".$anneeDeclaration."",
      "HeureVente" => "".$time."",
      "MinuteVente" => "".$minuteVente."",
      "CaseCertifieAchat" => "".$CaseCertifieAchat."",
      "CasePresenceCertificat" => "".$PresenceCertificat."",
      "CaseCertifieSituationAdministrative" => "".$CaseCertifieSituationAdministrative."",
      "CaseCocherTransformation" => "".$CaseCocherTransformation."",
      "CaseCederDestruction" => "".$CederDestruction."",
      "CaseOppositionUtilisationDonnees" => "".$CaseOppositionUtilisationDonnees."",
      
);
//On récupere le modéle
$pdf = new Pdf('pdf/Certificat_de_cession.pdf', []);
$pdf->fillForm($data);
$pdf->needAppearances();
//On affiche le pdf rempli qui sera :
$pdf->saveAs('pdf/pdf_fill/fill.pdf');
$file = "pdf/pdf_fill/fill.pdf";
//Type de l'application
header("Content-type: application.pdf");
header("Content-Length: " . filesize($file));
//Lecture
readfile($file);


?>