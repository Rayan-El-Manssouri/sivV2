<?php 
require_once '../../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query = "SELECT * FROM vehicule WHERE IdVehicule='".$_GET['id']."' ";
$data = $database->read($query);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet" >
    <link href="../../../../../../private/src/logo.png" rel="icon" >
    <title>Siv - confirmer - Modifier</title>
</head>
<body>
<div>
        <?php require_once '../../../../../../private/style/headerFormalitees/header.php' ?>
    </div>
<div class="formulaire">
 
        <?php foreach($data as $dataV2):  ?>
            <form method="post" >
                <table style="text-align: left;">
                <h1>Modification du véhicule</h1>
                <tr>
                    <td>Immatriculation <span style="color: red;">(A)</span> :</td>
                    <td><input type="text" name="Immatriculation" value="<?=$dataV2['Immatriculation']?>"></td>
                </tr>
                <tr>
                        <td>DateImmatriculation <span style="color: red;">(B)</span> :</td>
                        <td><input type="date" name="DateImmatriculation" value="<?= $dataV2['DateImmatriculation'] ?>"></td>
                </tr>
                <tr>
                    <td>Marque du Véhicule <span style="color: red;">(D.1)</span> :</td>
                    <td><input type="text" name="MarqueVehicule" value="<?= $dataV2['MarqueVehicule'] ?>"></td>
                </tr>
                <tr>
                    <td>Type Variante Version  <span style="color: red;">(D.2)</span> :</td>
                    <td><input type="text" name="TypeVarianteVersion" value="<?=$dataV2['TypeVarianteVersion'] ?>"></td>
                </tr>
                <tr>
                    <td>Denomination Commerciale <span style="color: red;">(D.3)</span> :</td>
                    <td><input type="text" name="DenominationCommerciale" value="<?= $dataV2['DenominationCommerciale'] ?>"></td>
                </tr>
                <tr>
                    <td>Numero Identification <span style="color: red;">(A)</span> :</td>
                    <td><input type="text" name="NumeoIdentification" value="<?= $dataV2['NumeoIdentification'] ?>"></td>
                </tr>
                <tr>
                    <td>Genre National <span style="color: red;">(J.1)</span> :</td>
                    <td><input type="text" name="GenreNational" value="<?= $dataV2['GenreNational'] ?>"></td>
                </tr>
                <tr>
                    <td>Motif Absence Certificat :</td>
                    <td><input type="text" name="MotifAbscenceCertificat" value="<?= $dataV2['MotifAbscenceCertificat'] ?>"></td>
                </tr>
                <tr>
                    <td>Puissance Din :</td>
                    <td><input type="text" name="PuissanceDin" value="<?= $dataV2['PuissanceDin'] ?>"></td>
                </tr>
                <tr>
                    <td>Puissance Fiscale :</td>
                    <td><input type="text" name="PuissanceFiscale" value="<?= $dataV2['PuissanceFiscale'] ?>"></td>
                </tr>
                
               
                <tr>
                    <td>Date Certificat :</td>
                    <td><input type="date" name="DateCertificat" value="<?= $dataV2['DateCertificat'] ?>" ></td>
                </tr>
                <tr>
                    <td>Numero Formule :</td>
                    <td><input type="text" name="NumeroFormule" value="<?=$dataV2['NumeroFormule']?>"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                </table>
                <br>

                <div>
                    <span>Opcaité :</span>
                    <span style="position: relative; left: 165px;">
                        <span>Claire</span>
                        <span><input type="radio" value="0" name="Opacite" <?php 
                        
                        if($dataV2['Opacité'] ==0){
                            ?>
                            checked="checked"
                            <?php
                        }

                        
                        ?>></span>
                        <span>Foncé</span>
                        <span><input type="radio" value="1" name="Opacite" <?php 
                        
                        if($dataV2['Opacité'] ==1){
                            ?>
                            checked="checked"
                            <?php
                        }
                        ?>></span>
                    </span>
                </div>
                <br>
                <div>
                    <span>Presence Certificat :</span>
                    <span style="position: relative; left: 75px;">
                        <span>Oui</span>
                        <span><input type="radio"  value="0" name="PresenceCertificat" <?php 
                        if($dataV2['PresenceCertificat'] ==0){
                            ?>
                            checked="checked"
                            <?php
                        }
                        ?>></span>
                        <span>Non</span>
                        <span><input type="radio"  value="1" name="PresenceCertificat" <?php 

                        if($dataV2['PresenceCertificat'] ==1){
                            ?>
                            checked="checked"
                            <?php
                        }
                        ?>></span>
                    </span>
                    
                </div>
                <br>
                <div class="envoyer">
                    <input type="submit" value="Envoyer" name="send">
                    <script>
                        function annuler(){
                            location.replace("http://localhost/siv/public/connexion/confirmer/GestionVehicule/ModifierVehicule/");
                        }
                    </script>
                    <input type="button" value="Annuler" id="Annuler" onclick="annuler()">
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <?php 
        if(isset($_POST['send'])){
                    $Immatriculation = $_POST['Immatriculation'];
                    $id = $_GET['id'];
                    $DateImmatriculation = $_POST['DateImmatriculation'];
                    $MarqueVehicule = $_POST['MarqueVehicule'];
                    $TypeVarianteVersion = $_POST['TypeVarianteVersion'];
                    $DenominationCommerciale = $_POST['DenominationCommerciale'];
                    $NumeoIdentification = $_POST['NumeoIdentification'];
                    $GenreNational = $_POST['GenreNational'];
                    $MotifAbscenceCertificat = $_POST['MotifAbscenceCertificat'];
                    $PresenceCertificat = $_POST['PresenceCertificat'];
                    $DateCertificat = $_POST['DateCertificat'];
                    $NumeroFormule = $_POST['NumeroFormule'];
                    $Opacite = $_POST['Opacite'];

                    if($_POST['PuissanceDin'] == ""){
                        $PuissanceDin = "NULL";
                    }else{
                        $P = " ".$_POST['PuissanceDin']." ";
                        $PuissanceDin = " '".$P."' ";
                    }

                    if($_POST['PuissanceFiscale'] == ""){
                        $PuissanceFiscale = "NULL";
                    }else{
                        $f = " ".$_POST['PuissanceFiscale']." ";
                        $PuissanceFiscale = " '".$f."' ";
                    }

                   
                    $query1 = "UPDATE vehicule SET Opacité='$Opacite', Immatriculation='$Immatriculation' , DateImmatriculation='$DateImmatriculation',  MarqueVehicule='$MarqueVehicule',  TypeVarianteVersion='$TypeVarianteVersion' , DenominationCommerciale='$DenominationCommerciale' , GenreNational='$GenreNational' , MotifAbscenceCertificat='$MotifAbscenceCertificat' , PresenceCertificat='$PresenceCertificat' , DateCertificat='$DateCertificat',  NumeroFormule='$NumeroFormule',  PuissanceDin=$PuissanceDin , PuissanceFiscale=$PuissanceFiscale, NumeoIdentification='$NumeoIdentification' WHERE IdVehicule='".$_GET['id']."'";
                    $data1 = $database->read($query1);
                    ?>
                            <script>
                                location.replace("")
                            </script>
                    <?php

        }?>
</body>
</html>