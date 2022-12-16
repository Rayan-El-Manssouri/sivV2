<?php
session_start();
require_once '../../../../Gestion bdd/connect.php';
$database = new Database();


$query = "SELECT * FROM acheteur WHERE Nom= '".$_SESSION['acheteur']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
        $Nom =  $dataV2['Nom'];
        $NomUsage = $dataV2['NomUsage'];
        $PrenomAcheteur = $dataV2['Prenom'];
        $Siret = $dataV2['Siret'];
        $IdAdresse =$dataV2['IdAdresse'];
        if($dataV2['ProautoAssureur']==0){
                $Proauto = 0;
                $Assureur = 1;
        }
        if($dataV2['ProautoAssureur']==1){
                $Proauto = 1;
                $Assureur = 0;
        } 
        if($dataV2['ProautoAssureur']==2){
                $Proauto = 2;
                $Assureur = 2;
        } 



endforeach;

$query2 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
$data2 = $database->read($query2);

foreach($data2 as $dataV2):
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresse = $dataV2['TypeVoieAdresse'];
        $NomVoie = $dataV2['NomVoie'];
        $IdVille = $dataV2['IdVille'];
        $NumeroVoieAdresse = $dataV2['NumeroVoie'];
        $ComplementAdresse1 = $dataV2['ComplementAdresse1'];
        $IdAdresse = $dataV2['IdAdresse'];
endforeach;

$query3 = "SELECT * FROM ville WHERE IdVille ='".$IdVille."' ";
$data3 = $database->read($query3);

foreach($data3 as $dataV2):
        $CodePostalAcheteur = $dataV2['CodePostal'];
        $NomVilleAcheteur = $dataV2['Nom'];

endforeach;

foreach($data3 as $dataV2):
        $CodePostal = $dataV2['CodePostal'];
endforeach;

$query4 = "SELECT * FROM vehicule WHERE Immatriculation= '".$_SESSION['vehicule']."' ";
$data4 = $database->read($query4);

foreach($data4 as $dataV2):
        $NumeoIdentification = $dataV2['NumeoIdentification'];
        $MarqueVehicule = $dataV2['MarqueVehicule'];
        $TypeVarianteVersion = $dataV2['TypeVarianteVersion'];
        $DenominationCommerciale = $dataV2['DenominationCommerciale'];
        $GenreNational = $dataV2['GenreNational'];
        $NumeroFormule = $dataV2['NumeroFormule'];
        $MotifAbscenceCertificat = $dataV2['MotifAbscenceCertificat'];
        $DateCertificat = $dataV2['DateCertificat'];
        list($anneeCertifica,$moisCertifica,$jourCertifica)=explode('-',$DateCertificat);
        $test = date('w',mktime(0,0,0,$anneeCertifica,$moisCertifica,$jourCertifica));
endforeach;

$query5 = "SELECT * FROM vendeur WHERE Nom= '".$_SESSION['vendeur']."' ";
$data5 = $database->read($query5);

foreach($data5 as $dataV2):
        $Siret1 = $dataV2['Siret'];
        $Nom1 = $dataV2['Nom'];
        $idVilleVendeur = $dataV2['IdVille'];
        $idAdresseVendeur = $dataV2['IdAdresse'];
endforeach;
$query7 = "SELECT * FROM adresse WHERE IdAdresse='".$idAdresseVendeur."' ";
$data7 = $database->read($query7);

foreach($data7 as $dataV2):
        $ExtentionVoieVendeur = $dataV2['ExtentionVoie'];
        $TypeVoieAdresseVendeur = $dataV2['TypeVoieAdresse'];
        $NomVoieVendeur = $dataV2['NomVoie'];
        $NomVoieAdresseVendeur = $dataV2['NomVoie'];
        $NumeroVoieAdresseVendeur = $dataV2['NumeroVoie'];
endforeach;        


$query6 = "SELECT * FROM ville WHERE IdVille= '".$idVilleVendeur."' ";
$data6 = $database->read($query6);

foreach($data6 as $dataV2):
        $NomVilleVendeur = $dataV2['Nom'];
        $CodePostalVendeur = $dataV2['CodePostal'];
endforeach;

$query8 = "SELECT * FROM operation WHERE IdOperation='".$_SESSION['operation']."' ";
$data8 = $database->read($query8);

foreach($data8 as $dataV2):
        $IdVilleOperation = $dataV2['IdVille'];
        $DateVente = $dataV2['DateVente'];
        list($anneeVente,$moisVente,$jourVente)=explode('-',$DateVente);
        $test = date(mktime(0,0,0,strtotime($anneeVente),strtotime($moisVente),strtotime($jourVente)));
        $DateDeclaration = $dataV2['DateDeclaration'];
        list($anneeDeclaration,$moisDeclaration,$jourDeclaration)=explode('-',$DateDeclaration);
        date(mktime(0,0,0,strtotime($anneeDeclaration),strtotime($moisDeclaration),strtotime($jourDeclaration)));
        if($dataV2['PresenceCertificat']==0){
                $PresenceCertificatOui = 0;
                $PresenceCertificatNon = 1;
        }
        if($dataV2['PresenceCertificat']==1){
                $PresenceCertificatOui = 1;
                $PresenceCertificatNon = 0;
        }
endforeach;

$query9 = "SELECT * FROM ville WHERE IdVille='".$IdVilleOperation."' ";
$data9 = $database->read($query9);

foreach($data9 as $dataV2):
        $NomOperation = $dataV2['Nom'];
endforeach;      

require_once 'vendor/autoload.php';
use mikehaertl\pdftk\Pdf;
$data = array(
        "IdentiteAcheteur" => "".$Nom." ".$NomUsage."   ", 
        "CodePostalAdresseVendeur" => "".$CodePostalVendeur."",
        "CommuneAdresseVendeur" => "".$NomVilleVendeur."",
        "SirenAcheteur" => "".$Siret."",
        "ExtensionAdresseAcheteur" => "".$ExtentionVoie." ",
        "NomVoieAdresseAcheteur" => "".$NomVoie."  ",
        "NumeroVoieAdresseAcheteur" => "".$NumeroVoieAdresse."",
        "CodePostalAdresseAcheteur" => "".$CodePostal."  ",
        "TypeVoieAdresseAcheteur" => "".$TypeVoieAdresse." ",
        "CommuneAdresseAcheteur" => "".$NomVilleAcheteur."",
        "HeureVente" => "".date("H", strtotime($DateVente))."".date("i", strtotime($DateVente))." ",
        "Immatriculation" => " ".$_SESSION['vehicule']." ",
        "NumeoIdentification" => "".$NumeoIdentification." ",
        "MarqueVehicule" => "".$MarqueVehicule." ",
        "TypeVarianteVersion" => "".$TypeVarianteVersion."  ",
        "DenominationCommerciale" => "".$DenominationCommerciale." ",
        "GenreNational" => " ".$GenreNational." ",
        "DateCertificatJour" => "".$jourCertifica." ",
        "DateCertificatMois" => "".$moisCertifica." ",
        "NumeroFormule" => " ".$NumeroFormule." ",
        "MotifAbscenceCertificat" => "".$MotifAbscenceCertificat." ",
        "DateDeclarationAnnee" => "".$anneeDeclaration."",
        "IdentiteVendeur" => "".$Nom1." ",
        "SiretVendeur" => "".$Siret1." ",
        "ExtensionAdresseVendeur" => "".$ExtentionVoieVendeur." ",
        "TypeVoieAdresseVendeur" => "".$TypeVoieAdresseVendeur."",
        "NomVoieAdresseVendeur" => "".$NomVoieAdresseVendeur."",
        "NumeroVoieAdresseVendeur" => "".$NumeroVoieAdresseVendeur."",
        "DateVenteJour" => "".$jourVente."",
        "DateVenteAnnee" => "".$anneeVente." ",
        "DateCertificatAnnee" => "".$anneeCertifica." ",
        "DateVenteMois" => "".$moisVente." ",
        "DateDeclarationJour" => "".$jourDeclaration."",
        "DateDeclarationMois" => "".$moisDeclaration."",
        "CommuneDeclarationOperation" => "".$NomOperation." ",
        "CommuneDeclarationOperation" => "".$NomOperation." ",
        "CaseProautoAcheteur" => "".$Proauto."",
        "CaseAssureurAcheteur" => "".$Assureur."",
        "CasePresenceCertificatOui" => "".$PresenceCertificatOui."",
        "CasePresenceCertificatNon" => "".$PresenceCertificatNon."",
);

$pdf = new Pdf('pdf/declaration_achat.pdf', []);
$pdf->fillForm($data);
$pdf->needAppearances();
$pdf->saveAs('pdf/pdf_fill/filled.pdf');
$file = "pdf/pdf_fill/filled.pdf";
header("Content-type: application.pdf");
header("Content-Length: " . filesize($file));
readfile($file);
?>