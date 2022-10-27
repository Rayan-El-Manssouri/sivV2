<?php
session_start();
require_once '../../../../Gestion bdd/connect.php';
$database = new Database();
require_once 'vendor/autoload.php';
use mikehaertl\pdftk\Pdf;

$data = array(
      //----------------------------------------------------------  
      //Identité du véhicule
      "Immatriculation" => "",
      "NumeoIdentification" => "",    
      "TypeVarianteVersion" => "",
      "GenreNational" => "",
      "MarqueVehicule" => "",
      "DenominationCommerciale" => "",
      "NumeroFormule" => "",
      "NumeroFormule" => "",
      "DateImmatriculationJour" => "",
      "DateImmatriculationMois" => "",
      "DateImmatriculationAnnee" => "",


      //-------------------------------------------------------------
      //Opération du véhicule
      "DateCertificatJour" => "",
      "DateCertificatMois" => "",
      "DateCertificatAnnee" => "",
      "MotifAbscenceCertificat" => "",
      "KilometrageCompteur" => "",

      //-------------------------------------------------------------
      //Identité du vendeur
      "IdentiteVendeur" => "",
      "SiretVendeur" => "",
      "IdentiteAcheteur" => "",
      "SirenAcheteur" => "",
      "NumAgrementVendeur" => "",
      
      //-------------------------------------------------------------
      //Adresse du vendeur
      "CodePostalAdresseVendeur" => "",
      "NumeroVoieAdresseVendeur" => "",
      "ExtensionAdresseVendeur" => "",
      "TypeVoieAdresseVendeur" => "",
      "NomVoieAdresseVendeur" => "",
      "CommuneAdresseVendeur" => "",

      //-------------------------------------------------------------
      //Identité de l'acheteur
      "NomUsageAcheteur" => "",
      "TelephonePortableAcheteur" => "",
      "MailAcheteur" => "",
      "DepartementNaissanceAcheteur" => "",
      "LieuDitBPAcheteur" => "",
      "ImmeubleResidenceBatimentAcheteur" => "",
      "DateNaissanceAcheteurJour" => "",
      "DateNaissanceAcheteurMois" => "",
      "DateNaissanceAcheteurAnnee" => "",
      "CasePersonnePysique" => "",
      "CasePersonneMorale" => "",
      "CaseSexeM" => "",
      "CaseSexeF" => "",


      //-------------------------------------------------------------
      //Adresse  de l'acheteur
      "PaysNaissanceAcheteur" => "",
      "NumeroVoieAdresseAcheteur" => "",
      "ExtensionAdresseAcheteur" => "",
      "TypeVoieAdresseAcheteur" => "",
      "NomVoieAdresseAcheteur" => "",
      "CodePostalAdresseAcheteur" => "",
      "CommuneAdresseAcheteur" => "",
      "CommuneNaissanceAcheteur" => "",


      //-------------------------------------------------------------
      //Opération 
      "DateVenteAnnee" => "",
      "DateVenteJour" => "",
      "DateVenteMois" => "",
      "HeureVente" => "",
      "MinuteVente" => "",
      "DateDeclaration" => "",
      "CommuneDeclarationOperation" => "",
       

      //-------------------------------------------------------------
      //Gestion formalité
      "CaseCertificat" => "",
      "CaseDuplicata" => "",
      "CaseCorrection" => "",
      "CaseChangementDomicile" => "",
      "ChangementEtatCivil" => "",
      "CaseCaracteristiquesTechniques" => "",


      //-------------------------------------------------------------
      //Couleur Clair foncé
      "CaseClair" => "",
      "CaseFonce" => "",

      //-------------------------------------------------------------
      //Couleur principale
      "CaseNoir" => "",
      "CaseMarron" => "",
      "CaseRouge" => "",
      "CaseOrange" => "",
      "CaseJaune" => "",
      "CaseVert" => "",
      "CaseBleu" => "",
      "CaseBeige" => "",
      "CaseGris" => "",
      "CaseBlanc" => "",


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