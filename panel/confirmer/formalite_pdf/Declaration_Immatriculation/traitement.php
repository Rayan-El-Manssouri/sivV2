<?php
session_start();
require_once '../../../../Gestion bdd/connect.php';
$database = new Database();
require_once 'vendor/autoload.php';
use mikehaertl\pdftk\Pdf;

$query = "SELECT * FROM vehicule WHERE Immatriculation= '".$_SESSION['vehicule']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
        $NumeoIdentification = $dataV2['NumeoIdentification'];
        $DateImmatriculation = $dataV2['DateImmatriculation'];
        list($anneeImmatriculation,$moisImmatriculation,$jourImmatriculation)=explode('-',$DateImmatriculation);
        date(mktime(0,0,0,$anneeImmatriculation,$moisImmatriculation,$jourImmatriculation));
        $MarqueVehicule = $dataV2['MarqueVehicule'];
        $TypeVarianteVersion = $dataV2['TypeVarianteVersion'];
        $GenreNational = $dataV2['GenreNational'];
        $DenominationCommerciale = $dataV2['DenominationCommerciale'];
        $NumeroFormule = $dataV2['NumeroFormule'];
        $DateCertificat = $dataV2['DateCertificat'];
        list($anneeCertifica,$moisCertifica,$jourCertifica)=explode('-',$DateCertificat);
        $test = date('w',mktime(0,0,0,$anneeCertifica,$moisCertifica,$jourCertifica));
        $MotifAbscenceCertificat = $dataV2['MotifAbscenceCertificat'];
        //-------------------------------------------------------
        //Gestion de la couleur Clair Foncé
        if($dataV2['Opacité']==0){
                $CaseClair = 0;
                $CaseFonce = 1;
        }else{
                $CaseClair = 1;
                $CaseFonce = 0;
        }
        //-------------------------------------------------------
        //Gestion des couleurs en fonction du champs "IdCouleur"
        if($dataV2['IdCouleur']==1){
                $CaseNoir = 0;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==2){
                $CaseNoir = 1;
                $CaseMarron = 0;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==3){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 0;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==4){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 0;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==5){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 0;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==6){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 0;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==7){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 0;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==8){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 0;
                $CaseGris = 1;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==9){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 0;
                $CaseBlanc = 1;
        }
        if($dataV2['IdCouleur']==10){
                $CaseNoir = 1;
                $CaseMarron = 1;
                $CaseRouge = 1;
                $CaseOrange = 1;
                $CaseJaune = 1;
                $CaseVert = 1;
                $CaseBleu = 1;
                $CaseBeige = 1;
                $CaseGris = 1;
                $CaseBlanc = 0;
        }

        //-----------------------------------------------
        //Gestion de la formalité
        if($_SESSION['formalite']=="Certificat"){
                $Certificat = 0;
                $Duplicata = 1;
                $Changement_de_domicile = 1;
                $Changement_d_état_civil_ou_d_état_matrimonial = 1;
                $Changement_des_caractéristiques_techniques_du_véhicule = 1;
                $Déclaration_d_achat = 1;
                $Correction = 1;
        }
        if($_SESSION['formalite']=="Duplicata"){
                $Certificat = 1;
                $Duplicata = 0;
                $Changement_de_domicile = 1;
                $Changement_d_état_civil_ou_d_état_matrimonial = 1;
                $Changement_des_caractéristiques_techniques_du_véhicule = 1;
                $Déclaration_d_achat = 1;
                $Correction = 1;

        }
        if($_SESSION['formalite']=="Changement de domicile"){
                $Certificat = 1;
                $Duplicata = 1;
                $Changement_de_domicile = 0;
                $Changement_d_état_civil_ou_d_état_matrimonial = 1;
                $Changement_des_caractéristiques_techniques_du_véhicule = 1;
                $Déclaration_d_achat = 1;
                $Correction = 1;

        }
        if($_SESSION['formalite']=="Changement d’état civil ou d’état matrimonial"){
                $Certificat = 1;
                $Duplicata = 1;
                $Changement_de_domicile = 1;
                $Changement_d_état_civil_ou_d_état_matrimonial = 0;
                $Changement_des_caractéristiques_techniques_du_véhicule = 1;
                $Déclaration_d_achat = 1;
                $Correction = 1;

        }
        if($_SESSION['formalite']=="Changement des caractéristiques techniques du véhicule"){
                $Certificat = 1;
                $Duplicata = 1;
                $Changement_de_domicile = 1;
                $Changement_d_état_civil_ou_d_état_matrimonial = 1;
                $Changement_des_caractéristiques_techniques_du_véhicule = 0;
                $Déclaration_d_achat = 1;
                $Correction = 1;

        }
        if($_SESSION['formalite']=="Déclaration d'achat"){
                $Certificat = 1;
                $Duplicata = 1;
                $Changement_de_domicile = 1;
                $Changement_d_état_civil_ou_d_état_matrimonial = 1;
                $Changement_des_caractéristiques_techniques_du_véhicule = 1;
                $Déclaration_d_achat = 0;
                $Correction = 1;
        }
        if($_SESSION['formalite']=="Correction"){
                $Certificat = 1;
                $Duplicata = 1;
                $Changement_de_domicile = 1;
                $Changement_d_état_civil_ou_d_état_matrimonial = 1;
                $Changement_des_caractéristiques_techniques_du_véhicule = 1;
                $Déclaration_d_achat = 1;
                $Correction = 0;
        }


endforeach;

$query2 = "SELECT * FROM operation WHERE IdOperation='".$_SESSION['operation']."' ";
$data2 = $database->read($query2);

foreach($data2 as $dataV2):
        $Kilometrage = $dataV2['Kilometrage'];
        $IdVilleOperation = $dataV2['IdVille'];
        $DateDeclaration = $dataV2['DateDeclaration'];
        list($anneeDeclaration,$moisDeclaration,$jourDeclaration)=explode('-',$DateDeclaration);
        $test = date(mktime(0,0,0,strtotime($anneeDeclaration),strtotime($moisDeclaration),strtotime($jourDeclaration)));

        $DateVente = $dataV2['DateVente'];
        list($anneeVente,$moisVente,$jourVente)=explode('-',$DateVente);
        $test = date(mktime(0,0,0,strtotime($anneeVente),strtotime($moisVente),strtotime($jourVente)));

        $DateVente2 = $dataV2['DateVente'];
        list($heureVente,$minuteVente,$secondeVente)=explode(':',$DateVente2);
        $test = date(mktime(0,0,0,strtotime($heureVente),strtotime($minuteVente),strtotime($secondeVente)));
endforeach;

$query9 = "SELECT * FROM ville WHERE IdVille= '".$IdVilleOperation."' ";
$data9 = $database->read($query9);

foreach($data9 as $dataV2):
        $NomOperation = $dataV2['Nom'];
endforeach;        


$query3 = "SELECT * FROM vendeur WHERE Nom='".$_SESSION['vendeur']."' ";
$data3 = $database->read($query3);

foreach($data3 as $dataV2):
        $BouttonsRadioPhysiqueMoralVendeur = $dataV2['PhysiqueMorale'];
        $NomVendeur = $dataV2['Nom'];
        $NomUsageVendeur = $dataV2['NomUsage'];
        $PrenomVendeur = $dataV2['Prenom'];
        $SiretVendeur = $dataV2['Siret'];
        $IdVille = $dataV2['IdVille'];
        $IdAdresse = $dataV2['IdAdresse'];
        $NumAgrementVendeur = $dataV2['NumAgrement'];
endforeach;        


$query4 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data4 = $database->read($query4);

foreach($data4 as $dataV2):
        $CodePostalVendeur = $dataV2['CodePostal'];
        $NomVille = $dataV2['Nom'];
endforeach;        

$query5 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
$data5 = $database->read($query5);

foreach($data5 as $dataV2):
        $NumeroVoieAdresseVendeur = $dataV2['NumeroVoie'];
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresseVendeur = $dataV2['TypeVoieAdresse'];
        $NomVoieAdresseVendeur = $dataV2['NomVoie'];
endforeach;



$query6 = "SELECT * FROM acheteur WHERE Nom='".$_SESSION['acheteur']."' ";
$data6 = $database->read($query6);


foreach($data6 as $dataV2):
        $CommuneDeNaissanceAcheteur = $dataV2['CommuneDeNaissance'];
        $NomUsageAcheteur = $dataV2['NomUsage'];
        $PrenomAcheteur = $dataV2['Prenom'];
        $SiretAcheteur = $dataV2['Siret'];
        $DateNaissance = $dataV2['DateNaissance'];
        list($anneeNaissance,$moisNaissance,$jourNaissance)=explode('-',$DateNaissance);
        date('w',mktime(0,0,0,$anneeNaissance,$moisNaissance,$jourNaissance));
        $idVilleAcheteur = $dataV2['IdVille'];
        $IdAdresseAcheteur = $dataV2['IdAdresse'];
        $TelephonePortableAcheteur = $dataV2['TelephonePortable'];
        $MailAcheteur = $dataV2['Mail'];
        $CommuneDeNaissance = $dataV2['CommuneDeNaissance'];
        if($dataV2['PhysiqueMorale']==0){
                $PhysiqueAcheteur = 0;
                $MoraleAcheteur = 1;
        }else{
                $PhysiqueAcheteur = 1;
                $MoraleAcheteur = 0;
        }
        if($dataV2['Sexe']==0){
                $SexeAcheteurM = 0;
                $SexeAcheteurF = 1;
        }else{
                $SexeAcheteurM = 1;
                $SexeAcheteurF = 0;
        }
endforeach;

$query14 = "SELECT * FROM ville WHERE IdVille='".$CommuneDeNaissanceAcheteur."' ";
$data14 = $database->read($query14);

foreach($data14 as $dataV2):
        $IdDepartementAcheteur = $dataV2['IdDepartement'];
endforeach;        

$query15 = "SELECT * FROM departement WHERE IdDepartement='".$IdDepartementAcheteur."' ";
$data15 = $database->read($query15);

foreach($data15 as $dataV2):
        $NumeroDepartementAcheteur = $dataV2['Numero'];
endforeach;



$query13 = "SELECT * FROM ville WHERE idVille='".$CommuneDeNaissance."' ";
$data13 = $database->read($query13);

foreach($data13 as $dataV2):
                $CommuneDeNaissanceAcheteur = $dataV2['Nom'];
endforeach;        


$query7 = "SELECT * FROM ville WHERE idVille='".$idVilleAcheteur."' ";
$data7  = $database->read($query7);

foreach($data7 as $dataV2):
        $NomVilleAcheteur = $dataV2['Nom'];
        $CodePostalAcheteur = $dataV2['CodePostal'];
        $CommuneAdresseAcheteur = $dataV2['Nom'];
        $IdPaysAcheteur = $dataV2['IdPays'];
endforeach;

$query11 = "SELECT * FROM pays WHERE IdPays='".$IdPaysAcheteur."' ";
$data11 = $database->read($query11);

foreach($data11 as $dataV2):
        $PaysAcheteur = $dataV2['Nom'];
endforeach;        


$query12 = "SELECT * FROM departement where IdPays='".$IdPaysAcheteur."' ";
$data12 = $database->read($query12);

foreach($data12 as $dataV2):
        $DepartementNaissanceAcheteur = $dataV2['Numero'];
endforeach;        



$query8 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresseAcheteur."'";
$data8 = $database->read($query8);

foreach($data8 as $dataV2):
        $NomVoieAcheteur = $dataV2['NomVoie'];
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresseAcheteur = $dataV2['TypeVoieAdresse'];
        $NomVoieAdresse = $dataV2['NomVoie'];
        $NumeroVoieAdresseAcheteur = $dataV2['NumeroVoie'];
        $ImmeubleResidenceBatimentAcheteur = $dataV2['ComplementAdresse1'];
        $LieuDitBPAcheteur = $dataV2['ComplementAdresse2'];
endforeach;
    /*    $query10 = "SELECT * FROM cotitulaire WHERE Nom='".$_SESSION['cotitulaire']."' ";
        $data10 = $database->read($query10);

        foreach($data10 as $dataV2):
                $PrenomCoTitulaire = $dataV2['Prenom'];
                $RaisonSocialeCoTitulaire = $dataV2['RaisonSociale'];
                $NomUsageCoTitulaire = $dataV2['NomUsage'];
                $SirenCoTitulaire = $dataV2['Siren'];

        endforeach;        
        */


$data = array(
      //----------------------------------------------------------  
      //Identité du véhicule
      "Immatriculation" => "".$_SESSION['vehicule']."",
      "NumeoIdentification" => "".$NumeoIdentification."",    
      "TypeVarianteVersion" => "".$TypeVarianteVersion."",
      "GenreNational" => "".$GenreNational."",
      "MarqueVehicule" => "".$MarqueVehicule."",
      "DenominationCommerciale" => "".$DenominationCommerciale."",
      "NumeroFormule" => "".$NumeroFormule."",
      "NumeroFormule" => "".$NumeroFormule."",
      "DateImmatriculationJour" => "".$jourImmatriculation."",
      "DateImmatriculationMois" => "".$moisImmatriculation."",
      "DateImmatriculationAnnee" => "".$anneeImmatriculation."",


      //-------------------------------------------------------------
      //Opération du véhicule
      "DateCertificatJour" => "".$jourCertifica."",
      "DateCertificatMois" => "".$moisCertifica."",
      "DateCertificatAnnee" => "".$anneeCertifica."",
      "MotifAbscenceCertificat" => "".$MotifAbscenceCertificat."",
      "KilometrageCompteur" => "".$Kilometrage."",

      //-------------------------------------------------------------
      //Identité du vendeur
      "IdentiteVendeur" => "".$NomVendeur." ".$NomUsageVendeur." ".$PrenomVendeur." ",
      "SiretVendeur" => "".$SiretVendeur." ",
      "IdentiteAcheteur" => "".$_SESSION['acheteur']." ".$PrenomAcheteur."   ",
      "SirenAcheteur" => "".$SiretAcheteur."",
      "NumAgrementVendeur" => "".$NumAgrementVendeur."",
      
      //-------------------------------------------------------------
      //Adresse du vendeur
      "CodePostalAdresseVendeur" => "".$CodePostalVendeur." ",
      "NumeroVoieAdresseVendeur" => "".$NumeroVoieAdresseVendeur." ",
      "ExtensionAdresseVendeur" => "".$ExtentionVoie." ",
      "TypeVoieAdresseVendeur" => "".$TypeVoieAdresseVendeur." ",
      "NomVoieAdresseVendeur" => "".$NomVoieAdresseVendeur." ",
      "CommuneAdresseVendeur" => "".$NomVille." ",

      //-------------------------------------------------------------
      //Identité de l'acheteur
      "NomUsageAcheteur" => "".$NomUsageAcheteur."",
      "TelephonePortableAcheteur" => "$TelephonePortableAcheteur",
      "MailAcheteur" => "$MailAcheteur",
      "DepartementNaissanceAcheteur" => "".$NumeroDepartementAcheteur."",
      "LieuDitBPAcheteur" => "$LieuDitBPAcheteur",
      "ImmeubleResidenceBatimentAcheteur" => "$ImmeubleResidenceBatimentAcheteur",
      "DateNaissanceAcheteurJour" => "".$jourNaissance."",
      "DateNaissanceAcheteurMois" => "".$moisNaissance."",
      "DateNaissanceAcheteurAnnee" => "".$anneeNaissance."",
      "CasePersonnePysique" => "".$PhysiqueAcheteur."",
      "CasePersonneMorale" => "".$MoraleAcheteur."",
      "CaseSexeM" => "".$SexeAcheteurM."",
      "CaseSexeF" => "".$SexeAcheteurF."",


      //-------------------------------------------------------------
      //Adresse  de l'acheteur
      "PaysNaissanceAcheteur" => "".$PaysAcheteur."",
      "NumeroVoieAdresseAcheteur" => "".$NumeroVoieAdresseAcheteur."",
      "ExtensionAdresseAcheteur" => "".$ExtentionVoie."",
      "TypeVoieAdresseAcheteur" => "".$TypeVoieAdresseAcheteur."",
      "NomVoieAdresseAcheteur" => "".$NomVoieAdresse."",
      "CodePostalAdresseAcheteur" => "".$CodePostalAcheteur."",
      "CommuneAdresseAcheteur" => "".$CommuneAdresseAcheteur."",
      "CommuneNaissanceAcheteur" => "".$CommuneDeNaissanceAcheteur."",

      //-------------------------------------------------------------
      //Identité du co titulaire
    /* "NomUsageCoTitulaire" => "$NomUsageCoTitulaire",
      "SirenCoTitulaire" => "$SirenCoTitulaire",
      "IdentiteCoTitulaire" => "".$_SESSION['cotitulaire']." ".$PrenomCoTitulaire." ".$RaisonSocialeCoTitulaire." ",
    */ 

      //-------------------------------------------------------------
      //Opération 
      "DateVenteAnnee" => "".$anneeVente."",
      "DateVenteJour" => "".$jourVente."",
      "DateVenteMois" => "".$moisVente."",
      "HeureVente" => "".$heureVente."",
      "MinuteVente" => "".$minuteVente."",
      "DateDeclaration" => " ".$moisDeclaration." ".$jourDeclaration." ".$anneeDeclaration."",
      "CommuneDeclarationOperation" => "".$NomOperation."",
       

      //-------------------------------------------------------------
      //Gestion formalité
      "CaseCertificat" => "".$Certificat."",
      "CaseDuplicata" => "".$Duplicata."",
      "CaseCorrection" => "".$Correction."",
      "CaseChangementDomicile" => "".$Changement_de_domicile."",
      "ChangementEtatCivil" => "".$Changement_d_état_civil_ou_d_état_matrimonial."",
      "CaseCaracteristiquesTechniques" => "".$Changement_des_caractéristiques_techniques_du_véhicule."",


      //-------------------------------------------------------------
      //Couleur Clair foncé
      "CaseClair" => "".$CaseClair."",
      "CaseFonce" => "".$CaseFonce."",

      //-------------------------------------------------------------
      //Couleur principale
      "CaseNoir" => "".$CaseNoir."",
      "CaseMarron" => "".$CaseMarron."",
      "CaseRouge" => "".$CaseRouge."",
      "CaseOrange" => "".$CaseOrange."",
      "CaseJaune" => "".$CaseJaune."",
      "CaseVert" => "".$CaseVert."",
      "CaseBleu" => "".$CaseBleu."",
      "CaseBeige" => "".$CaseBeige."",
      "CaseGris" => "".$CaseGris."",
      "CaseBlanc" => "".$CaseBlanc."",


        //---------------------------------------------------------------
        //titulaire
        "CaseOppositionUtilisationDonnees" => "0",

);
$pdf = new Pdf('pdf/declaration_Immatriculation.pdf', []);
$pdf->fillForm($data);
$pdf->needAppearances();
$pdf->saveAs('pdf/pdf_fill/fill.pdf');
$file = "pdf/pdf_fill/fill.pdf";
header("Content-type: application.pdf");
header("Content-Length: " . filesize($file));
readfile($file);
?>