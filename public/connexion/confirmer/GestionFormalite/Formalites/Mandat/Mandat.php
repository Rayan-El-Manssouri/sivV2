<?php 
require '../../../../../../vendor/autoload.php';
require_once '../../../../../../private/bdd/connect.php';
$database = new Database();


$query = "SELECT * FROM operation WHERE IdOperation='".$_GET['id']."' ";
$data = $database->read($query);


// Recuperation des valeurs

// Personne physique : 1
// Personne moral : 2



$vendeur2  = $data[0]['Vendeur'];
$vendeur = explode(",", $vendeur2);

$query10 = "SELECT * FROM mandataire";
$data10 = $database->read($query10);
$Siret = str_split($data10[0]['Siret']);


if($vendeur[0] == "1"){
    $query1 = "SELECT * FROM personnephysique WHERE IdPersonnePhysique='".$vendeur[1]."' ";
    $data1 = $database->read($query1);
    $NomUsage = $data1[0]['Nomdusage'];
    $Nom = $data1[0]['Nom'];
    $Prenom = $data1[0]['Prenom'];
    $NumeroVoie = NULL;
    $data4 = "";

    $query1 = "SELECT * FROM personnephysique WHERE IdPersonnePhysique='".$vendeur[1]."' ";
    $data1 = $database->read($query1);
    $query2 = "SELECT * FROM personne WHERE IdPersonne='".$data1[0]['Idpersonne']."' ";
    $data2 = $database->read($query2);

    $query3 = "SELECT * FROM adresse WHERE IdAdresse='".$data2[0]['IdAdresse']."' ";
    $data3 = $database->read($query3);

    $NumeroVoie = $data3[0]['NumeroVoie'];


    $query4 = "SELECT * FROM extentionvoie WHERE Id='".$data3[0]['ExtentionVoie']."' ";
    $data4 = $database->read($query4);


    $query5 = "SELECT * FROM TypeVoieAdresse WHERE Id='".$data3[0]['TypeVoieAdresse']."' ";
    $data5 = $database->read($query5);

    $query6 = "SELECT * FROM ville WHERE IdVille='".$data3[0]['IdVille']."' ";
    $data6 = $database->read($query6);

    $CodePostal = str_split($data6[0]['CodePostal']);
    
    $query7 = "SELECT * FROM pays WHERE IdPays='".$data6[0]['IdPays']."' ";
    $data7 = $database->read($query7);
    $Nsiret1 = NULL;
    if(!isset($Nsiret1[0])){
        $Nsiret1[0]  = NULL;
    }
    if(!isset($Nsiret1[1])){
        $Nsiret1[1]  = NULL;
    }
    if(!isset($Nsiret1[2])){
        $Nsiret1[2]  = NULL;
    }
    if(!isset($Nsiret1[3])){
        $Nsiret1[3]  = NULL;
    }
    if(!isset($Nsiret1[4])){
        $Nsiret1[4]  = NULL;
    }
    if(!isset($Nsiret1[5])){
        $Nsiret1[5]  = NULL;
    }
    if(!isset($Nsiret1[6])){
        $Nsiret1[6]  = NULL;
    }
    if(!isset($Nsiret1[7])){
        $Nsiret1[7]  = NULL;
    }
    if(!isset($Nsiret1[8])){
        $Nsiret1[8]  = NULL;
    }
    if(!isset($Nsiret1[9])){
        $Nsiret1[9]  = NULL;
    }
    if(!isset($Nsiret1[10])){
        $Nsiret1[10]  = NULL;
    }
    if(!isset($Nsiret1[11])){
        $Nsiret1[11]  = NULL;
    }
    if(!isset($Nsiret1[12])){
        $Nsiret1[12]  = NULL;
    }
    if(!isset($Nsiret1[13])){
        $Nsiret1[13]  = NULL;
    }

    $query8 = "SELECT * FROM vehicule WHERE IdVehicule='".$data[0]['IdVehicule']."' ";
    $data8 = $database->read($query8);



    $DateDeclaration[8] = NULL;
    $DateDeclaration[9] = NULL;
    $DateDeclaration[5] = NULL;
    $DateDeclaration[6] = NULL;
    $DateDeclaration[0] = NULL;
    $DateDeclaration[1] = NULL;
    $DateDeclaration[2] = NULL;
    $DateDeclaration[3] = NULL;
    $query9 = "SELECT * FROM ville WHERE IdVille='".$data[0]['IdVille']."' ";
    $data9 = $database->read($query9);

    $NumeoIdentification = str_split($data8[0]['NumeoIdentification']);


    if(!isset($NumeoIdentification[0])){
        $NumeoIdentification[0]  = NULL;
    }
    if(!isset($NumeoIdentification[1])){
        $NumeoIdentification[1]  = NULL;
    }
    if(!isset($NumeoIdentification[2])){
        $NumeoIdentification[2]  = NULL;
    }
    if(!isset($NumeoIdentification[3])){
        $NumeoIdentification[3]  = NULL;
    }
    if(!isset($NumeoIdentification[4])){
        $NumeoIdentification[4]  = NULL;
    }
    if(!isset($NumeoIdentification[5])){
        $NumeoIdentification[5]  = NULL;
    }
    if(!isset($NumeoIdentification[6])){
        $NumeoIdentification[6]  = NULL;
    }
    if(!isset($NumeoIdentification[7])){
        $NumeoIdentification[7]  = NULL;
    }
    if(!isset($NumeoIdentification[8])){
        $NumeoIdentification[8]  = NULL;
    }
    if(!isset($NumeoIdentification[9])){
        $NumeoIdentification[9]  = NULL;
    }
    if(!isset($NumeoIdentification[10])){
        $NumeoIdentification[10]  = NULL;
    }
    if(!isset($NumeoIdentification[11])){
        $NumeoIdentification[11]  = NULL;
    }
    if(!isset($NumeoIdentification[12])){
        $NumeoIdentification[12]  = NULL;
    }
    if(!isset($NumeoIdentification[13])){
        $NumeoIdentification[13]  = NULL;
    }
    $DateDeclaration = str_split($data[0]['DateDeclaration']);

    $query11 = "SELECT * FROM fomalite WHERE IdFomalite='".$_GET['formaliter']."' ";
    $data11 = $database->read($query11);

}else{
    $query1 = "SELECT * FROM personnemoral WHERE IdPersonneMoral='".$vendeur[1]."' ";
    $data1 = $database->read($query1);
    $query8 = "SELECT * FROM vehicule WHERE IdVehicule='".$data[0]['IdVehicule']."' ";
    $data8 = $database->read($query8);
    $DateDeclaration = str_split($data[0]['DateDeclaration']);
    $query9 = "SELECT * FROM ville WHERE IdVille='".$data[0]['IdVille']."' ";
    $data9 = $database->read($query9);
    $NomUsage = $data1[0]['RaisonSocial'];
    $Nom = NULL;
    $Prenom = NULL;
    $NSiret  = $data1[0]['Siret'];
    $Nsiret1 = str_split($NSiret);
    if(!isset($Nsiret1[0])){
        $Nsiret1[0]  = NULL;
    }
    if(!isset($Nsiret1[1])){
        $Nsiret1[1]  = NULL;
    }
    if(!isset($Nsiret1[2])){
        $Nsiret1[2]  = NULL;
    }
    if(!isset($Nsiret1[3])){
        $Nsiret1[3]  = NULL;
    }
    if(!isset($Nsiret1[4])){
        $Nsiret1[4]  = NULL;
    }
    if(!isset($Nsiret1[5])){
        $Nsiret1[5]  = NULL;
    }
    if(!isset($Nsiret1[6])){
        $Nsiret1[6]  = NULL;
    }
    if(!isset($Nsiret1[7])){
        $Nsiret1[7]  = NULL;
    }
    if(!isset($Nsiret1[8])){
        $Nsiret1[8]  = NULL;
    }
    if(!isset($Nsiret1[9])){
        $Nsiret1[9]  = NULL;
    }
    if(!isset($Nsiret1[10])){
        $Nsiret1[10]  = NULL;
    }
    if(!isset($Nsiret1[11])){
        $Nsiret1[11]  = NULL;
    }
    if(!isset($Nsiret1[12])){
        $Nsiret1[12]  = NULL;
    }
    if(!isset($Nsiret1[13])){
        $Nsiret1[13]  = NULL;
    }

    $NumeoIdentification = str_split($data8[0]['NumeoIdentification']);



    if(!isset($NumeoIdentification[0])){
        $NumeoIdentification[0]  = NULL;
    }
    if(!isset($NumeoIdentification[1])){
        $NumeoIdentification[1]  = NULL;
    }
    if(!isset($NumeoIdentification[2])){
        $NumeoIdentification[2]  = NULL;
    }
    if(!isset($NumeoIdentification[3])){
        $NumeoIdentification[3]  = NULL;
    }
    if(!isset($NumeoIdentification[4])){
        $NumeoIdentification[4]  = NULL;
    }
    if(!isset($NumeoIdentification[5])){
        $NumeoIdentification[5]  = NULL;
    }
    if(!isset($NumeoIdentification[6])){
        $NumeoIdentification[6]  = NULL;
    }
    if(!isset($NumeoIdentification[7])){
        $NumeoIdentification[7]  = NULL;
    }
    if(!isset($NumeoIdentification[8])){
        $NumeoIdentification[8]  = NULL;
    }
    if(!isset($NumeoIdentification[9])){
        $NumeoIdentification[9]  = NULL;
    }
    if(!isset($NumeoIdentification[10])){
        $NumeoIdentification[10]  = NULL;
    }
    if(!isset($NumeoIdentification[11])){
        $NumeoIdentification[11]  = NULL;
    }
    if(!isset($NumeoIdentification[12])){
        $NumeoIdentification[12]  = NULL;
    }
    if(!isset($NumeoIdentification[13])){
        $NumeoIdentification[13]  = NULL;
    }
    if(!isset($NumeoIdentification[14])){
        $NumeoIdentification[14]  = NULL;
    }
    if(!isset($NumeoIdentification[15])){
        $NumeoIdentification[15]  = NULL;
    }
    if(!isset($NumeoIdentification[16])){
        $NumeoIdentification[16]  = NULL;
    }
    $query2 = "SELECT * FROM personne WHERE IdPersonne='".$data1[0]['Idpersonne']."' ";
    $data2 = $database->read($query2);

    $query3 = "SELECT * FROM adresse WHERE IdAdresse='".$data2[0]['IdAdresse']."' ";
    $data3 = $database->read($query3);

    $NumeroVoie = $data3[0]['NumeroVoie'];


    $query4 = "SELECT * FROM extentionvoie WHERE Id='".$data3[0]['ExtentionVoie']."' ";
    $data4 = $database->read($query4);


    $query5 = "SELECT * FROM TypeVoieAdresse WHERE Id='".$data3[0]['TypeVoieAdresse']."' ";
    $data5 = $database->read($query5);

    $query6 = "SELECT * FROM ville WHERE IdVille='".$data3[0]['IdVille']."' ";
    $data6 = $database->read($query6);

    $CodePostal = str_split($data6[0]['CodePostal']);

    $query7 = "SELECT * FROM pays WHERE IdPays='".$data6[0]['IdPays']."' ";
    $data7 = $database->read($query7);

    $query11 = "SELECT * FROM fomalite WHERE IdFomalite='".$_GET['formaliter']."' ";
    $data11 = $database->read($query11);

}
use Spipu\Html2Pdf\Html2Pdf;



$html = "
<style>
    /* Hashage */
   *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
   }

   /* Style header */
   .header{
        position: absolute;
        font-size: 40px;
        top: 0;
        width: 100%;
    }

    /* Header - logo */
    .header img{
        width: 81px;
    }

    /* Header - Titre */
    .header h1{
        text-align: center;
        position: absolute;
        top: 20px;
        line-height: 0.5px;
        color: #0B368C;
    }

    .header span{
        font-size: 15px;
        line-height: 1px;
        position: absolute;
        top: 30px;
        left: 10px;
        
    }

    .header .logo_cerfa img{
        position: absolute;
        right: 0;
    }

    .cerfa_logo{
        position: absolute;
        right: 0;
    }

    .cerfa_logo span{
        top: 4px;
    }

    .cerfa_logo img{
        width: 60px;
        position: absolute;
        left: 30px;
    }

    .central{
        position: absolute;
        top: 150px;
        left: 50px;
    }

    .domicilie{
        position: absolute;
        font-weight: bold;
        top: 220px;
        left: 20px;
    }




</style>
<page>
    <link rel='icon' href='./src/fleche.png' >
    <!-- Haut de page -->
    <div class='header'>
        <!-- Logo du ministerer de l'intérieur -->
        <img src='../asset/pdf/logo.jpg'>
        <img src='../asset/title.png' style='width: 85px; position: absolute; left: 336px; top: 20px;' >
        <span style=''>
            <br>
            <span style='left: 40.5%; font-size: 13px; font-weight: bold;'>POUR EFFECTUER <br> </span>
            <span style='left: 15%; font-size: 13px; font-weight: bold; top: 50px;'>LES FORMALITÉS D'IMMATRICULATION AUPRÈS DU MINISTRE DE L'INTÉRIEUR</span>
        </span>
        <!-- Parti cerfa logo -->
        <div class='cerfa_logo'>
            <img src='../asset/pdf/logo_cerfa.png' >
            <span>N° 13757*03</span>
        </div>
    </div>
    <!-- Parti central -->
    <div style='position: absolute; top: 20px;'>
        <div class='central'>
            <div style='position: absolute; left: -28px;'>
                <span style='font-weight: bold;'>Je soussigné(e),</span>
                |<div style='border-bottom: 1px solid black; width: 400px; position: absolute; top: 14px; left: 109.7px; '></div>
                <span style='position: absolute; left: 508px; top: 0.44px;'>|</span> <br>
                <span style='font-size: 10px; top: 20px; left: 110px; position: absolute;'>NOM, NOM D’USAGE le cas échéant et PRÉNOM ou RAISON SOCIALE</span>
                <span style='font-size: 10px; top: 20px; left: 514px; position: absolute;'>N° SIREN, le cas échéant</span>
                </div>
                <div style='position: absolute; top: -149.9px; left: -80px;'>
                    <span style='position: absolute; top: 151px; left: 765px;'>|</span>
                    <div style='width: 210px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                    <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 580px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 596px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 610px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 625px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 640px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 655px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 670px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 686px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 702px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 717px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 730px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 745px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 775px;'>|</span>
                </div>
            </div>
            <div class='domicilie'>
                <p>domicilié(e) à : </p>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 70px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 177px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>N° de la voie</span>   
            </div>
            <div style=' position: absolute; font-weight: bold; top: 220px; left: 100px;'>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 90px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 198px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>Extension (bis, ter, .)</span>   
            </div>
            <div style=' position: absolute; font-weight: bold; top: 220px; left: 200px;'>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 140px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 248px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>Type de voie (avenue, etc.)</span>   
            </div>
            <div style=' position: absolute; font-weight: bold; top: 220px; left: 350px;'>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 290px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 398px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>Nom de la voie</span>   
            </div>

            <!-- Deuxiéme parti -->
            <div style='position: absolute; left: -438px; top: 120px;'>
                <div style='width: 104px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                <span style='position: absolute; top: 151px; left: 588px;'>|</span>
                <span style='position: absolute; top: 151px; left: 608px;'>|</span>
                <span style='position: absolute; top: 151px; left: 628px;'>|</span>
                <span style='position: absolute; top: 151px; left: 648px;'>|</span>
                <span style='position: absolute; top: 151px; left: 668px;'>|</span>
            </div>
            <div style='position: absolute; left: -320px; top: 120px;'>
                <div style='width: 238px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                <span style='position: absolute; top: 151px; left: 802px;'>|</span>
            </div>
            <div style='position: absolute; left: -75px; top: 120px;'>
                <div style='width: 254px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                <span style='position: absolute; top: 151px; left: 819px;'>|</span>
            </div> 
            <!-- Text adresse -->
            <div style='font-size: 10px;position: absolute; top: 290px; left: 130px;'>
                <span>Code postal</span>
                <span style='position: absolute; left: 120px;'>Nom de la commune</span>
                <span style='position: absolute; left: 370px;'>Pays</span>
            </div>
            <div style='position: absolute; top: 330px; left: 20px;'>
                <h5>donne mandat à :</h5>
                <div >
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                    <div style='border-bottom: 1px solid black; width: 330px; position: absolute; top: 14px; left: 109.7px; '></div>
                    <span style='position: absolute; left: 438px; top: 0.44px;'>|</span> <br>
                    <span style='font-size: 10px; top: 20px; left: 110px; position: absolute;'>NOM, NOM D’USAGE le cas échéant et PRÉNOM ou RAISON SOCIALE </span>
                </div>
                <div style='position: absolute; left: -12px;'>
                    <span style='position: absolute; width: 250px; left: 458.5px; top: 1.7px;'>|</span>
                    <div style='border-bottom: 1px solid black; position: absolute; width: 283px; left: 460px; top: 15px;' ></div>
                    <span style='position: absolute; width: 210px; left: 478px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 498px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 518px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 538px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 558px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 578px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 598px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 618px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 638px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 658px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 678px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 698px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 718px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 738px; top: 1.7px;'>|</span>
                </div> 
                <span style='position: absolute; left: 458.5px; top: 20px; font-size: 10px;'>N° SIRET, le cas échéant</span>
            </div>
            <div style='position: absolute; top: 370px; left: 20px;'>
                <h5> pour effectuer pour mon compte les formalités administratives liées à l’opération d’immatriculation suivante :</h5>
                <div style=' position: absolute; top: 28px;'>
                    <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                    <div style='border-bottom: 1px solid black; width: 440px; position: absolute; left: 109.2px; top: 14px;' ></div>
                    <span style='position: absolute; left: 548px; top: 0.4px;'>|</span> 
                </div>
            </div>
            <div style='position: absolute; top: 430px; left: 20px;' >
                <div style='border-bottom: 1px solid black; width: 115px; padding: 2px;'>
                    <h5  >Véhicule concerné :</h5>
                </div>
                <div style='position: absolute; top: 50px;'>
                    <img src='../asset/pdf/fleche.png' style='width: 20px;' >
                    <span>Marque :</span>
                    <div style='position: absolute; width: 450px; left: 100px; top: 20px;'>
                        <div style='border-bottom: 1px solid black; ' ></div>
                    </div>
                    <span style='position: absolute; top: -13px; left: 98px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 545px; top: 6.7px;' >|</span>
                </div>
                <div style='position: absolute; top: 120px;'>
                    <img src='../asset/pdf/fleche.png' style='width: 20px;' >
                    <span>Numéro VIN :</span>
                    <div style='position: absolute; width: 340px; left: 120px; top: 20px;'>
                        <div style='border-bottom: 1px solid black;' ></div>
                    </div>
                    <span style='position: absolute; top: -13px; left: 118px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 135px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 155px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 175px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 195px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 215px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 235px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 255px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 275px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 295px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 315px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 335px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 355px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 375px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 395px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 415px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 435px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 455px; top: 6.7px;' >|</span>
                </div>
                <div style='position: absolute; top: 190px;'>
                    <img src='../asset/pdf/fleche.png' style='width: 20px;' >
                    <span>Numéro d’immatriculation (le cas échéant) :</span>
                    <div>
                    
                    </div>
                    <div style='position: absolute; width: 340px; left: 290px; top: 20px;'>
                        <div style='border-bottom: 1px solid black;' ></div>
                    </div>
                    <span style='position: absolute; top: -13px; left: 288px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 625px; top: 6.7px;' >|</span> 
                </div>
                <div style='position : absolute; top: 250px;'>
                    <input type='checkbox' checked='checked'>
                    <span>Je suis informé (e) que pour circuler avec ce véhicule je suis dans l’obligation de l’assurer préalablement (articles L. <br> <span style='position: absolute; top: 20px; left: 20px;' >324-2 du code de la route).</span>
                    </span>
                    <br>
                    <br>
                    <br>
                    <span style='font-style: italic;'>Important : Si vous circuliez avec un véhicule non assuré, en cas d’accident, vos dommages ne seraient pas couverts  <br> et, en cas
                    d’éventuelles victimes, vous pourriez être amené (e) à rembourser des sommes considérables. De plus, <br> vous vous exposeriez à des
                    sanctions pénales.</span>
                </div>
            </div>
            <div style='position: absolute; top: 800px; left: 20px;'>
                <span>Fait à</span>
                <div style='border-bottom: 1px solid black;  width: 300px; position: absolute; left: 50px; top: 10px;' ></div>
                <div style='position: absolute; border-bottom: 1px solid black; width: 43.8px; left: 400px; top: 10px;'></div>
                <div style='position: absolute; border-bottom: 1px solid black; width: 41px; left: 450px; top: 10px;'></div>
                <div style='position: absolute; border-bottom: 1px solid black; width: 80px; left: 500px; top: 10px;'></div>
                <span style='position: absolute; left: 398px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 418px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 438px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 445px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 465px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 485px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 495px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 515px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 535px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 555px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 575px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 370px;'>, le</span>
                <span style='position: absolute; left: 410px; top: 15px; font-size: 10px;'>Jour</span>
                <span style='position: absolute; left: 460px; top: 15px; font-size: 10px;'>Mois</span>
                <span style='position: absolute; left: 510px; top: 15px; font-size: 10px;'>Année</span>
            </div>
        <div style='border: 1px solid #0B368C; padding: 376px; position: absolute; top: 120px; height: 80px;'></div
        
        
        >
        <div style='border: 1px solid #0B368C; padding: 30px; position: absolute; top: 990px;  width: 690px; background-color: #CFE6F5;'></div>
        <span style='position: absolute; top: 1000px; font-weight: bold; font-size: 10px; left: 13px; '> La loi n° 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, garantit un droit d'accès et de rectification des données auprès d'une</span>
        <span style='position: absolute; top: 1010px; font-weight: bold; font-size: 10px; left: 13px; '>préfecture de son choix.</span>
        <span style='position: absolute; top: 1030px; font-weight: bold; font-size: 10px; left: 13px; '>Je m'oppose à la réutilisation de mes données personnelles à des fins de prospection commerciale <input type='checkbox' class='checkbox'   checked='checked' ></span>
    </div>



    <!-- Parti full php  -->
    <span style='position: absolute; top: 169px; left: 145px; font-size: 15px;'> ".$Nom." ".$NomUsage." ".$Prenom."</span>
    <span style='position: absolute; top: 239px; left: 145px; font-size: 15px;'>$NumeroVoie</span>
    <span style='position: absolute; top: 239px; left: 235px; font-size: 15px;'>".$data4[0]['Nom']."</span>
    <span style='position: absolute; top: 239px; left: 315px; font-size: 14px;'>".$data5[0]['Nom']."</span>
    <div style='position: absolute; top: 239px; left: 525px; font-size: 14px; text-align: center; width: 150px;'>
        <span >".$data3[0]['NomVoie']."</span>
    </div>
    <div style='position: absolute; top: 289px; left: 70px; font-size: 14px; text-align: center; width: 180px;'>
        <span style='position: absolute; left: 70px;'>".$CodePostal[0]."</span>
        <span style='position: absolute; left: 85px;'>".$CodePostal[1]."</span>
        <span style='position: absolute; left: 105px;'>".$CodePostal[2]."</span>
        <span style='position: absolute; left: 125px;'>".$CodePostal[3]."</span>
        <span style='position: absolute; left: 145px;'>".$CodePostal[4]."</span>
    </div>

    <div style='position: absolute; top: 289px; left: 520px; font-size: 14px; text-align: center; width: 180px;'>
        <span>".$data7[0]['Nom']."</span>
    </div>

    <!--Numéro de siret  -->
    <span style='position: absolute; top: 170px; left: 544px; font-size: 15px;'>".$Nsiret1[0]."</span>
    <span style='position: absolute; top: 170px; left: 555px; font-size: 15px;'>".$Nsiret1[1]."</span>
    <span style='position: absolute; top: 170px; left: 570px; font-size: 15px;'>".$Nsiret1[2]."</span>
    <span style='position: absolute; top: 170px; left: 585px; font-size: 15px;'>".$Nsiret1[3]."</span>
    <span style='position: absolute; top: 170px; left: 600px; font-size: 15px;'>".$Nsiret1[4]."</span>
    <span style='position: absolute; top: 170px; left: 615px; font-size: 15px;'>".$Nsiret1[5]."</span>
    <span style='position: absolute; top: 170px; left: 630px; font-size: 15px;'>".$Nsiret1[6]."</span>
    <span style='position: absolute; top: 170px; left: 645px; font-size: 15px;'>".$Nsiret1[7]."</span>
    <span style='position: absolute; top: 170px; left: 660px; font-size: 15px;'>".$Nsiret1[8]."</span>
    <span style='position: absolute; top: 170px; left: 675px; font-size: 15px;'>".$Nsiret1[9]."</span>
    <span style='position: absolute; top: 170px; left: 690px; font-size: 15px;'>".$Nsiret1[10]."</span>
    <span style='position: absolute; top: 170px; left: 705px; font-size: 15px;'>".$Nsiret1[11]."</span>
    <span style='position: absolute; top: 170px; left: 720px; font-size: 15px;'>".$Nsiret1[12]."</span>
    <span style='position: absolute; top: 170px; left: 735px; font-size: 15px;'>".$Nsiret1[13]."</span>


    <!-- véhicule  -->
    <div  style='position: absolute; top: 505px; left: 270px; text-align: center; width: 150px; '>
        <span>".$data8[0]['MarqueVehicule']."</span>
    </div>

    <div  style='position: absolute; top: 646px; left: 400px; text-align: center; width: 150px; '>
        <span>".$data8[0]['Immatriculation']."</span>
    </div>

    <div  style='position: absolute; top: 817px; left: 355px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[8]."</span>
    </div>
    <div  style='position: absolute; top: 817px; left: 380px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[9]."</span>
    </div>
    <div  style='position: absolute; top: 817px; left: 405px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[5]."</span>
    </div>
    <div  style='position: absolute; top: 817px; left: 425px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[6]."</span>
    </div>

    <div  style='position: absolute; top: 817px; left: 454px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[0]."</span>
    </div>

    <div  style='position: absolute; top: 817px; left: 474px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[1]."</span>
    </div>
    <div  style='position: absolute; top: 817px; left: 494px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[2]."</span>
    </div>

        
    <div  style='position: absolute; top: 817px; left: 517px; text-align: center; width: 150px; '>
        <span>". $DateDeclaration[3]."</span>
    </div>

    <div  style='position: absolute; top: 815px; left: 155px; text-align: center; width: 150px; '>
        <span>".$data9[0]['Nom']."</span>
    </div>

    <div  style='position: absolute; top: 577px; left: 127px; text-align: center; width: 150px; '>
         <span style='position: absolute; left: 20px;'>".$NumeoIdentification[0]."</span>
         <span style='position: absolute; left: 35px;'>".$NumeoIdentification[1]."</span>
         <span style='position: absolute; left: 55px;'>".$NumeoIdentification[2]."</span>
         <span style='position: absolute; left: 75px;'>".$NumeoIdentification[3]."</span>
         <span style='position: absolute; left: 95px;'>".$NumeoIdentification[4]."</span>
        <span style='position: absolute; left: 115px;'>".$NumeoIdentification[5]."</span>
        <span style='position: absolute; left: 135px;'>".$NumeoIdentification[6]."</span>
        <span style='position: absolute; left: 155px;'>".$NumeoIdentification[7]."</span>
        <span style='position: absolute; left: 175px;'>".$NumeoIdentification[8]."</span>
        <span style='position: absolute; left: 195px;'>".$NumeoIdentification[9]."</span>
        <span style='position: absolute; left: 215px;'>".$NumeoIdentification[10]."</span>
        <span style='position: absolute; left: 235px;'>".$NumeoIdentification[11]."</span>
        <span style='position: absolute; left: 255px;'>".$NumeoIdentification[12]."</span>
        <span style='position: absolute; left: 275px;'>".$NumeoIdentification[13]."</span>
        <span style='position: absolute; left: 295px;'>".$NumeoIdentification[14]."</span>
        <span style='position: absolute; left: 315px;'>".$NumeoIdentification[15]."</span>
        <span style='position: absolute; left: 335px;'>".$NumeoIdentification[16]."</span>
    </div>
   <span style='position: absolute; top: 349px; left: 280px;' >SINARA</span>
   <div style='position: absolute; top: 349px; left: 455px;'>
        <span style='position: absolute; left: 18px;'>".$Siret[0]."</span>
        <span style='position: absolute; left: 36px;'>".$Siret[1]."</span>
        <span style='position: absolute; left: 60px;'>".$Siret[2]."</span>
        <span style='position: absolute; left: 80px;'>".$Siret[3]."</span>
        <span style='position: absolute; left: 100px;'>".$Siret[4]."</span>
        <span style='position: absolute; left: 120px;'>".$Siret[5]."</span>
        <span style='position: absolute; left: 140px;'>".$Siret[6]."</span>
        <span style='position: absolute; left: 160px;'>".$Siret[7]."</span>
        <span style='position: absolute; left: 180px;'>".$Siret[8]."</span>
        <span style='position: absolute; left: 200px;'>".$Siret[9]."</span>
        <span style='position: absolute; left: 220px;'>".$Siret[10]."</span>
        <span style='position: absolute; left: 240px;'>".$Siret[11]."</span>
        <span style='position: absolute; left: 260px;'>".$Siret[12]."</span>
        <span style='position: absolute; left: 280px;'>".$Siret[13]."</span>
   </div> 

   <div style='position: absolute; top: 289px; left: 310px;'>
        <span style='position: absolute; left: 18px;'>".$data9[0]['Nom']."</span>
    </div>

    <div style='position: absolute; top: 415px; left: 310px;'>
        <span style='position: absolute; left: 18px;'>".$data11[0]['Nom']."</span>
    </div>


    <span style='font-weight: bold; position: absolute; top: 840px; left: 620px; font-size: 13px;'>Signature</span>
    <span style=' position: absolute; top: 850px; left: 618px; font-size: 8px;'>Pour les sociétés, nom et qualité</span>
    <span style=' position: absolute; top: 860px; left: 618px; font-size: 8px;'>du signataire et cachet</span>
</page>
";

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();

?>
