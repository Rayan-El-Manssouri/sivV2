<?php 
error_reporting(0);
session_start();
require_once '../../../Gestion bdd/connect.php';
$database = new Database();
$query1 = "SELECT * FROM couleur";
$data1 = $database->read($query1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicule</title>
    <link href="véhicule.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
      <nav>
            <div class="hamburg">
                            <i class="fa fa-bars fa-2x" ></i>
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
                       
                        <a href="../panel.php?id=<?=$_SESSION['id']?>" class="redirection">
                            <button >Revenir a la page principal</button>    
                        </a> 
    <form method="POST" id="personne2">
                <div class="form">
                       
                    <br>
                    <br>
                        Formulaire pour ajouter un véhicule <br>
                    <br>
                    <div>
                        <div >
                            <p>Immatriculation <span style="color: red;"> (A) </span>: <input type="text" name="Immatriculation" placeholder="Immatriculation"></p>
                        </div>
                        <br>
                         <p>Date Immatriculation <span style="color: red;">(B)</span>: <input type="date" name="DateImmatriculation" placeholder="Date Immatriculation" ></p>
                        <br>
                        <p>Marque Véhicule <span style="color: red;">(D.1)</span>: <input type="text" name="MarqueVehicule" placeholder="Marque Véhicule"></p>
                        <br>
                        <p> Type Variante Version  <span style="color: red;">(D.2)</span>: <input type="text" name="TypeVarianteVersion" placeholder="Type Variante Version" > </p>
                        <br>
                        <p>Denomination Commerciale<span style="color: red;">(D.3)</span>: <input type="text" name="DenominationCommerciale" placeholder="Denomination Commerciale"></p>
                        <br>
                        <p>Numero Identification <span style="color: red;">(A)</span> : <input type="text" name="NumeoIdentification" placeholder="Numero Identification"></p>
                        <br>
                        <p>Genre National <span style="color: red;">(J.1)</span> : <input type="text" name="GenreNational" placeholder="GenreNational" maxlength="4" minlength="0" maxlength="8" size="20" required> <span style="color : red; ">* Limiter a 4 caractère</span></p>
                       
                        <br>
                        <div>
                        Presence Certificat : 
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
                                Opacité : 
                                    <div style="position: relative">
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
                            <p>Sélectionner la couleur :
                            <select name="couleur" required>
                                    <option value="">Sélectionner la couleur</option>
                                    <?php foreach($data1 as $dataV2): ?>
                                        <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                                    <?php endforeach; ?>
                            </select></p>
                        </div>
                    </div>
                        </div>
                        
                    <div class="bouton">
                        <input type="submit" name="personne" id="personne" class="Bouton" ></input>
                    </div> 
    </form>
    </div><?php


if (isset($_POST['personne'])) {
    $id = $_GET['id'];
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
    $query9 = "SELECT * FROM couleur WHERE Nom='".$couleur."' ";
    $data9 = $database->read($query9);
    foreach($data9 as $dataV2):
            $idCouleur = $dataV2['idCouleur'];
    endforeach;    

    $query8 = "INSERT INTO `vehicule`( `Immatriculation`, `DateImmatriculation`, `MarqueVehicule`, `TypeVarianteVersion`, `DenominationCommerciale`, `NumeoIdentification`, `GenreNational`, `MotifAbscenceCertificat`, `PresenceCertificat`, `DateCertificat`, `NumeroFormule`, `Opacité`, `PuissanceDin`, `PuissanceFiscale` , `IdUtilisateur`, `IdCouleur`) VALUES ('$Immatriculation','$DateImmatriculation','$MarqueVehicule','$TypeVarianteVersion','$DenominationCommerciale','$NumeoIdentification','$GenreNational','$MotifAbscenceCertificat','$PresenceCertificat','$DateCertificat','$NumeroFormule','$Opacité',$PuissanceDin,$PuissanceFiscale, '$id', '$idCouleur');";
    $data = $database->read($query8);
    $id = $_SESSION['id'];
    echo "<script type='text/javascript'>";
    echo "alert('Le véhicule est correctement ajouté !');";
    echo 'location.replace("")';
    echo "</script>";
    exit();

};


?>
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