<?php 
error_reporting(0);
session_start();
require_once '../../../../../Gestion bdd/connect.php';
$database = new Database; 
$query = "SELECT * FROM operation WHERE IdOperation='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
    $IdVille = $dataV2['IdVille'];
    $IdOperation = $dataV2['IdOperation'];
    $IdVehicule = $dataV2['IdVehicule'];
endforeach;    

$query3 = "SELECT * FROM vehicule WHERE IdVehicule='".$IdVehicule."' ";
$data3 = $database->read($query3);

foreach($data3 as $dataV2):
    $Immatriculation = $dataV2['Immatriculation'];
endforeach;    

$query2 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data2 = $database->read($query2);

foreach($data2 as $dataV2):
    $NomVille = $dataV2['Nom'];
endforeach;   

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regarder</title>
    <link rel="stylesheet" href="see.css" >
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
        <a href="../list.php?id=<?= $_SESSION['id'] ?>">
            <button>
                Revenir a la page list
            </button>
        </a>
     
    </div>
    <?php 
    $i = 0;    
    ?>
    <div class="formulaire">
        <?php foreach($data as $dataV2):  ?>
            <form method="post" style="display: inline; text-align: left;">
                <h1>Regarder l'opération</h1>
                <div>
                    <p>Nom de l'opération :</p>
                    <p><?=$dataV2['Kilometrage']?> <?=$dataV2['DateVente']?></p>
                </div>
                <div>
                    <p>Kilométrage :</p>
                    <p><?=$dataV2['Kilometrage']?></p>
                </div>
                <div>
                    <p>Date Vente :</p>
                    <input type="datetime-local" name="DateVente" value="<?=$dataV2['DateVente']?>">
                </div>
                <div>
                    <p>Date Declaration :</p>
                    <input type="date" name="DateDeclaration" value="<?=$dataV2['DateDeclaration']?>">
                </div>
               <!-- Bouton radio -->
               <br>
                <div>
                    <span>Presence Certificat :</span>
                        <span>Oui</span>
                        <span> <input type="radio" name="PresenceCertificat" value="0" <?php 
                        
                        if($dataV2['PresenceCertificat'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                       
                        <span>Non</span>
                        <span><input type="radio" value="1" name="PresenceCertificat" <?php 
                        
                        if($dataV2['PresenceCertificat'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?>  ></span>
                        
               </div>     
                <!-- Bouton radio -->
                <br>
                <br>
                <div>
                    <span>Information Assurance :</span>
                        <span>Oui</span>
                        <span><input type="radio" name="InformationAssurance" value="0" <?php 
                        
                        if($dataV2['InformationAssurance'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                        
                        <span>Non</span>
                        <span><input type="radio" name="InformationAssurance" value="1" <?php 
                        
                        if($dataV2['InformationAssurance'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?>  ></span>
                        
                </div>
                <!-- Bouton radio -->
                <br>
                <br>
                <div>
                    <span>Certifier Situation Administrative :</span>
                        <span>Oui</span>
                        <span> <input type="radio" name="CertifieSituationAdministrative" value="0" <?php 
                        
                        if($dataV2['CertifieSituationAdministrative'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                       
                        <span>Non</span>
                        <span><input type="radio" name="CertifieSituationAdministrative" value="1" <?php 
                        
                        if($dataV2['CertifieSituationAdministrative'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?>  ></span>
                        
                </div>
                <!-- Bouton radio -->
                <br>
                <br>
                <div>
                    <span>Transformation :</span>
                        <span>Oui</span>
                        <span><input type="radio" name="Transformation" value="0" <?php 
                        
                        if($dataV2['Transformation'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                        
                        <span>Non</span>
                        <span><input type="radio" name="Transformation" value="1"<?php 
                        
                        if($dataV2['Transformation'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?>  ></span>
                        
                </div>
                <br>
                <br>
                  <!-- Bouton radio -->
                  <div>
                  <div>
                    <span>Opposition Utilisation Donnees :</span>
                        <span>Oui</span>
                        <span> <input type="radio" name="OppositionUtilisationDonnees" value="0" <?php 
                        
                        if($dataV2['OppositionUtilisationDonnees'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                       
                        <span>Non</span>
                        <span> <input type="radio" name="OppositionUtilisationDonnees" value="1" <?php 
                        
                        if($dataV2['OppositionUtilisationDonnees'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?>  ></span>
                       
                </div>
                </div>
                <br>
                <br>
                <!-- Bouton radio -->
                <div>
                    <span>Destruction :</span>
                        <span>Oui</span>
                        <span><input type="radio" value="0" name="Destruction" <?php 
                        
                        if($dataV2['Destruction'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                        

                        <span>Non</span>
                        <span><input type="radio" value="1"name="Destruction" <?php 
                        if($dataV2['Destruction'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        ?>  ></span>
                        
                </div>
                <!-- Bouton radio -->
                <br>
                <br>
                <div>
                    <span>Certifie Achat :</span>
                        <span>Oui</span>
                        <span>   <input type="radio"value="0" name="CertifieAchat" <?php 
                        
                        if($dataV2['CertifieAchat'] == 0){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?> ></span>
                     
                        <span>Non</span>
                        <span><input value="1" type="radio" name="CertifieAchat" <?php 
                        if($dataV2['CertifieAchat'] == 1){
                            ?>
                                checked="checked"
                            <?php
                        }
                        
                        ?>  ></span>
                        
                </div>
                <br>
                <br>
                <div>
                    <span>Nom de la ville :</span>
                        <span><?= $NomVille?></span>
                      
                </div>
                <br>
                <br>
                <div>
                    <span>Véhicule lier :</span>
                        <span><?= $Immatriculation?></span>
                      
                </div>
                <div class="envoyer">
                    <input type="button" value="Annuler" id="Annuler" onclick="annuler()">
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    <script>
    function annuler(){
        location.replace("../list.php?id=<?=$_SESSION['id'] ?>")
    }
    </script>
</body>
</html>