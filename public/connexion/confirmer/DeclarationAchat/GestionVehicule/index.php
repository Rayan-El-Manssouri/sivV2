<?php 
require_once '../../../../../private/bdd/connect.php';
$database = new Database();

session_start();
$query1 = "SELECT * FROM couleur";
$data1 = $database->read($query1);



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet" >
    <link href="../../../../../private/src/logo2.png" rel="icon" >
</head>
<body>
    <?php 
    require_once '../../../../../private/style/headerFormalitees/header.php'
    
    ?>
    <form action="" method="POST">
        <div class="véhicule">
            <h1>Bienvenue sur la partie ajouter un véhciule.</h1>
            <br>
            <div>
            <div >
                                <p>Immatriculation <span style="color: red;"> (A) </span>: <input type="text" name="Immatriculation" placeholder="Immatriculation"></p>
                            </div>
                            <p>Date Immatriculation <span style="color: red;">(B)</span>: <input type="date" name="DateImmatriculation" placeholder="Date Immatriculation" ></p>
                            <p>Marque Véhicule <span style="color: red;">(D.1)</span>: <input type="text" name="MarqueVehicule" placeholder="Marque Véhicule"></p>
                            <p> Type Variante Version  <span style="color: red;">(D.2)</span>: <input type="text" name="TypeVarianteVersion" placeholder="Type Variante Version" > </p>
                            <p>Denomination Commerciale<span style="color: red;">(D.3)</span>: <input type="text" name="DenominationCommerciale" placeholder="Denomination Commerciale"></p>
                            <p>Numero Identification <span style="color: red;">(A)</span> : <input type="text" name="NumeoIdentification" placeholder="Numero Identification"></p>
                            <p>Genre National <span style="color: red;">(J.1)</span> : <input type="text" name="GenreNational" placeholder="GenreNational" maxlength="4" minlength="0" maxlength="8" size="20" required> <span style="color : red; ">* Limiter a 4 caractère</span></p>
                            <br>
                            <div>
                            <p>Presence Certificat : </p>
                            <br>
                            <div>
                                <div>
                                    <div style="position: relative; left: 170px; top: -20px;">
                                            <input type="radio" name="PresenceCertificat" value="1">
                                            <label>Oui</label>
                                    </div>
                                    <div style="position: relative; left: 250px; top: -40px;">
                                            <input type="radio" name="PresenceCertificat" value="0">
                                            <label>Non</label>
                                    </div>
                                </div>
                            </div>
                            <p>Motif Absence Certificat : <input type="text" name="MotifAbscenceCertificat" placeholder="Motif Absence Certificat"> </p>
                            <br>
                            <div style="position: relative; top: -35px;">
                                <br>
                                <p>Date Certificat <span style="color: red;">(I)</span> : <input type="date" name="DateCertificat" placeholder="Date Certificat" required></p>
                                <br>
                                <p>Numero Formule : <input type="text" name="NumeroFormule" placeholder="Numero Formule"></p>
                                <br>
                                <div>
                                <p> Opacité :</p> 
                                        <div style="position: relative">
                                                <br>
                                                <br>
                                                <div style="position: relative; left: 80px; top: -38px;">
                                                    <input type="radio" name="Opacité" placeholder="Opacité" value="0">
                                                    <span>Clair</span>
                                                </div>
                                                <br>
                                                <div style="position: relative; left: 160px; top: -75px;">
                                                    <input type="radio" name="Opacité" placeholder="Opacité" value="1">
                                                    <span>Foncée</span>
                                                </div>  
                                        </div>
                                </div>
                                <div style="position: relative; top: -30px;">
                                    <p>Puissance Din <span style="color: red;">(P.2)</span> : <input type="num" name="PuissanceDin" placeholder="Puissance Din"></p>
                                </div>
                                <br>
                            
                                <p>Puissance Fiscale  <span style="color: red;">(P.6)</span>: <input type="num" name="PuissanceFiscale" placeholder="Puissance Fiscale"></p>
                                <br>
                                <div>
                                <p>Sélectionner la couleur : <select name="couleur">
                                    <?php foreach($data1 as $dataV2): ?>
                                    <option value="<?=$dataV2['idCouleur']?>"><?=$dataV2['Nom']?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="submit" name="send">
                                <button><a href="../">Retour</a></button>
            </div>
        </div>
    </form>

    <?php 
    if(!empty($_POST['send'])){
        $id = $_SESSION['id'];
        $Immatriculation = $_POST['Immatriculation'];
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
        $Opacité = $_POST['Opacité'];
        if($_POST['PuissanceDin'] == ""){
            $PuissanceDin = "NULL";
        }else{
            $PuissanceDin = "'".$_POST['PuissanceDin']."' ";
        }
        if($_POST['PuissanceFiscale'] == ""){
            $PuissanceFiscale = "NULL";
        }else{
            $PuissanceFiscale = " '".$_POST['PuissanceFiscale']."' ";
        }
        $couleur = $_POST['couleur'];
 
    
        $query8 = "INSERT INTO `vehicule`( `Immatriculation`, `DateImmatriculation`, `MarqueVehicule`, `TypeVarianteVersion`, `DenominationCommerciale`, `NumeoIdentification`, `GenreNational`, `MotifAbscenceCertificat`, `PresenceCertificat`, `DateCertificat`, `NumeroFormule`, `Opacité`, `PuissanceDin`, `PuissanceFiscale` , `IdUtilisateur`, `IdCouleur`) VALUES ('$Immatriculation','$DateImmatriculation','$MarqueVehicule','$TypeVarianteVersion','$DenominationCommerciale','$NumeoIdentification','$GenreNational','$MotifAbscenceCertificat','$PresenceCertificat','$DateCertificat','$NumeroFormule','$Opacité',$PuissanceDin,$PuissanceFiscale, '$id', '$couleur');";
        $data = $database->read($query8);
        ?>
        <script>
            alert("Véhicule bien ajouté !")
            location.replace("")
        </script>
        <?php
    }
    
    
    ?>

</body>
</html>