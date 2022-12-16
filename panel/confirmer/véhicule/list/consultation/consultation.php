<?php 
session_start();
require_once '../../../../../Gestion bdd/connect.php';
$database = new Database();
$query = "SELECT * FROM vehicule WHERE IdVehicule='".$_GET['id']."'";
$data = $database->read($query);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <link href="consultation.css" rel="stylesheet">
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
    <div class="suppression">
        <h1>Consulter un véhicule</h1>
        <br>
        <?php foreach($data as $dataV2): ?>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Immatriculation :</span> 
                <span><?= $dataV2['Immatriculation'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Date Immatriculation :</span> 
                <span><?= $dataV2['DateImmatriculation'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Marque Vehicule :</span> 
                <span><?= $dataV2['MarqueVehicule'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Type Variante Version :</span> 
                <span><?= $dataV2['TypeVarianteVersion'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Denomination Commerciale :</span> 
                <span><?= $dataV2['DenominationCommerciale'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Numero Identification :</span> 
                <span><?= $dataV2['NumeoIdentification'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Genre National :</span> 
                <span><?= $dataV2['GenreNational'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Motif Abscence Certificat :</span> 
                <span><?= $dataV2['MotifAbscenceCertificat'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Numero Formule :</span> 
                <span><?= $dataV2['NumeroFormule'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Puissance Fiscale :</span> 
                <span><?= $dataV2['PuissanceFiscale'] ?></span>
            </div>
            <br>
            <br>
            <div style="text-align: left; position: relative; left: 800px;">
                <span>Puissance Din :</span> 
                <span><?= $dataV2['PuissanceDin'] ?></span>
            </div>
            <br>
            <br>
            <div style="display: inline; position: relative; right: 50px;">
                <span>Opacité :</span>
                <span style=" position:relative; left: 10px;">Clair <span><input  style="text-align: left; position:relative; left: 10px; top: -1px;" type="radio" name="Opacite" value="0" <?php   if ($dataV2['Opacité'] == 0){ 
                    ?>
                        checked="checked">
                    <?php
                        }
                        ?></span>
      
                            <span style="position: relative; left: 20px;">Foncée <span><input type="radio" name="Opacite" style="position:relative; left:20px; top: -1px;" value="1" <?php   if ($dataV2['Opacité'] == 1){ 
                                ?>
                                        checked="checked">
                                <?php
                                }
                                ?></span></span> 
                        
            </div>
            <div class="Bouton" style="position: relative; top: 120px;">
                <a href="../list.php?id=<?= $_SESSION['id']?>">
                    <button >Revenir a la page de list</button>
                </a>
            </div>
        <?php endforeach; ?>               
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
