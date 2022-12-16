<?php 
error_reporting(0);
session_start();
require_once '../../../../../Gestion bdd/connect.php';
$database = new Database; 
$query = "SELECT * FROM operation WHERE IdOperation='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
        $IdVille = $dataV2['IdVille'];
        $IdVehicule = $dataV2['IdVehicule'];
endforeach;    

$query6 = "SELECT * FROM vehicule WHERE IdVehicule='".$IdVehicule."' ";
$data6 = $database->read($query6);

foreach($data6 as $dataV2):
    $Immatriculation = $dataV2['Immatriculation'];
endforeach;   


$query8 = "SELECT * FROM vehicule WHERE IdUtilisateur='".$_SESSION['id']."' ";
$data8 = $database->read($query8);


$query2 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data2 = $database->read($query2);

foreach($data2 as $dataV2):
        $NomVille = $dataV2['Nom'];
endforeach;   

$query4 = "SELECT * FROM ville";
$data4 = $database->read($query4);

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
            <form method="post" style="display: inline; text-align: left;">
                <h1>Modification de l'opération</h1>
                <div>
                    <p>Nom de l'opération :</p>
                    <input type="text" name="" value="<?=$dataV2['Kilometrage']?> <?=$dataV2['DateVente']?>">
                </div>
                <div>
                    <p>Kilométrage :</p>
                    <input type="text" name="Kilometrage" value="<?=$dataV2['Kilometrage']?>">
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
                    <select name="Ville">
                        <option><?= $NomVille?></option>
                        <option>-----------------------</option>
                        <?php foreach($data4 as $dataV2): ?>
                            <option value="<?=$dataV2['Nom']?>"><?= $dataV2['Nom']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <br>
                <div>
                    <span>Sélectionner un vehciule :</span>
                    <select name="vehicule">
                        <option><?= $Immatriculation?></option>
                        <option>-----------------------</option>
                        <?php foreach($data8 as $dataV2): ?>
                            <option value="<?=$dataV2['Immatriculation']?>"><?= $dataV2['Immatriculation']?></option>
                        <?php endforeach ?>
                    </select>
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
                    $Kilometrage = $_POST['Kilometrage'];
                    $DateVente = $_POST['DateVente'];
                    $DateDeclaration = $_POST['DateDeclaration'];
                    $PresenceCertificat = $_POST['PresenceCertificat'];
                    $InformationAssurance = $_POST['InformationAssurance'];
                    $CertifieSituationAdministrative = $_POST['CertifieSituationAdministrative'];
                    $Transformation = $_POST['Transformation'];
                    $OppositionUtilisationDonnees = $_POST['OppositionUtilisationDonnees'];
                    $Destruction = $_POST['Destruction'];
                    $CertifieAchat = $_POST['CertifieAchat'];
                    $Ville = $_POST['Ville'];
                    $query5 = "SELECT * FROM ville WHERE Nom='".$Ville."' ";
                    $data5 = $database->read($query5);
                    $vehicule = $_POST['vehicule'];

                    $query7 = "SELECT * FROM vehicule WHERE Immatriculation='".$vehicule."' ";
                    $data7 = $database->read($query7);

                    foreach($data7 as $dataV2):
                        $IdVehicule = $dataV2['IdVehicule'];
                    endforeach;    

                    foreach($data5 as $dataV2):
                            $IdVille = $dataV2['IdVille'];
                    endforeach;    
                    $query1 = "UPDATE operation SET Kilometrage='$Kilometrage', DateVente='$DateVente', DateDeclaration='$DateDeclaration',  PresenceCertificat='$PresenceCertificat',InformationAssurance='$InformationAssurance',CertifieSituationAdministrative='$CertifieSituationAdministrative',  Transformation='$Transformation',  OppositionUtilisationDonnees='$OppositionUtilisationDonnees',  Destruction='$Destruction', CertifieAchat='$CertifieAchat', IdVille='$IdVille', IdVehicule='$IdVehicule' WHERE IdOperation='".$_GET['id']."'";
                    $data1 = $database->read($query1);
                    ?>
                    <script>
                        location.replace("")
                    </script>
                    <?php
                }
    ?>
    <script>
    function annuler(){
        location.replace("../modifier.php?id=<?=$_SESSION['id'] ?>")
    }
</script>
</body>
</html>