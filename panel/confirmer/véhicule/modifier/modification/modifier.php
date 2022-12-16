<?php 
error_reporting(0);
session_start();
require_once '../../../../../Gestion bdd/connect.php';
$database = new Database; 
$query = "SELECT * FROM vehicule WHERE IdVehicule='".$_GET['id']."' ";
$data = $database->read($query);


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="modifier.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>

<header>
        <nav>
            <div class="hamburg">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="symbole">
                Website logo
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Se déconnecter</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Forum</a></li>
                </ul>
            </div>
        </nav>


    </header>
    <div class="Bouton">
        <a href="../modifier.php?id=<?= $_SESSION['id'] ?>">
            <button>
                Revenir a la page modification
            </button>
        </a>
     
    </div>
    <?php 
    $i = 0;    
    ?>
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

                <div style="position: relative; right: 135px;">
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
                <div style="position: relative; right: 105px;">
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
                <div class="envoyer">
                    <input type="submit" value="Envoyer" name="send">
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
    <script>
        function annuler(){
            location.replace("../modifier.php?id=<?=$_SESSION['id'] ?>")
        }

</script>


<!-- ------------------------------------------------------- -->
<!-- Footer -->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Partenaire</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                      
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Nos service</h4>
                    <ul>
                        <li><a href="#">Annonce</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Ticket</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>