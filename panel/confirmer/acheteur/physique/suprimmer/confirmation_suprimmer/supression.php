<?php 
error_reporting(0);
session_start();
require_once '../../../../../../Gestion bdd/connect.php';
$database = new Database; 
$query = "SELECT * FROM acheteur WHERE IdAcheteur='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
    $IdAdresse = $dataV2['IdAdresse'];
    $IdVille = $dataV2['IdVille'];
endforeach;    


$query5 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data5 = $database->read($query5);


foreach($data5 as $dataV2):
    $NomVille = $dataV2['Nom'];

endforeach;    



$query2 = "SELECT * FROM adresse WHERE IdAdresse = '".$IdAdresse."' ";
$data2 = $database->read($query2);

foreach($data2 as $dataV2):
        $NomVoie = $dataV2['NomVoie'];
        $ComplementAdresse1 = $dataV2['ComplementAdresse1'];
        $NumeroVoie = $dataV2['NumeroVoie'];
        $ExtentionVoie = $dataV2['ExtentionVoie'];
        $TypeVoieAdresse = $dataV2['TypeVoieAdresse'];
        $ComplementAdresse2 = $dataV2['ComplementAdresse2'];
endforeach;    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="supression.css" >
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
        <a href="../suprimmer.php?id=<?= $_SESSION['id'] ?>">
            <button>
                Revenir a la page de supression
            </button>
        </a>
    </div>
    <div class="formulaire">
        <?php foreach($data as $dataV2):  ?>
        <form method="post" >
        <h1>Supression de l'acheteur</h1>

            <div style="text-align : left;">
                <p>--------------------Situation---------------------------------</p>
                <br>
            <br>
                    <span>Pro auto :</span>
                    <span>Oui</span>
                    <span><input type="radio" name="ProAuto" <?php 
                    if($dataV2['ProautoAssureur'] == "0"){
                        ?>
                        checked="checked">
                    <?php
                    }
                    ?></span>
                    <span>Non</span>
                    <span><input type="radio" name="ProAuto" <?php 
                    if($dataV2['ProautoAssureur'] == "1"){
                        ?>
                        checked="checked">
                    <?php
                    }
                    ?></span>
                       <br>
            <br>
            </div>
            <div style="text-align : left;">
                <p>--------------------Sexe de l'acheteur---------------------------------</p>
                <br>
            <br>
                        <span>Sexe :</span>
                        <span>Masculin</span>
                        <span><input type="radio" name="sexe" <?php 
                            if($dataV2['Sexe'] == "0"){
                                ?>
                                checked="checked">
                            <?php
                            }
                        ?></span>
                        <span>Féminin</span>
                        <span><input type="radio" name="sexe" <?php 
                        if($dataV2['Sexe'] == "1"){
                            ?>
                            checked="checked">
                        <?php
                        }
                        ?></span>
            </div>
            <br>
            <br>
            <div style="text-align : left;">
            <div>
                 <p>--------------------Sexe de l'acheteur---------------------------------</p>
            </div>
            <br>
            <br>
                
                        <span>Personne physique ou moral :</span>
                        <span>Physique</span>
                        <span><input type="radio" name="PhysiqueMorale" <?php 
                            if($dataV2['PhysiqueMorale'] == "0"){
                                ?>
                                checked="checked">
                            <?php
                            }
                        ?></span>
                        <span>Moral</span>
                        <span><input type="radio" name="PhysiqueMorale" <?php 
                        if($dataV2['PhysiqueMorale'] == "1"){
                            ?>
                            checked="checked">
                        <?php
                        }
                        ?></span>
            </div>
            <table style="text-align: left; width : 800px;">
                <tr>
                    <td> <p>--------------------Identité de l'acheteur---------------------------------</p></td>
                </tr>
                <tr >
                    <td>Nom de l'acheteur :</td>
                    <td style="position: relative; right: 380px;"><p><?= $dataV2['Nom'] ?></p></td>
                </tr>
                <tr>
                    <td>Nom usage :</td>
                    <td style="position: relative; right: 380px;" ><p><?= $dataV2['NomUsage'] ?></p></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td style="position: relative; right: 380px;"> <p><?= $dataV2['Prenom'] ?></p></td>
                </tr>
            <tr>
                    <td>Date Naissance</td>
                    <td style="position: relative; right: 380px;"><p><?= $dataV2['DateNaissance'] ?></p></td>
            </tr>
            <tr>
                <td>Raison Sociale</td>
                <td style="position: relative; right: 380px;"><p><?= $dataV2['RaisonSociale'] ?></p></td>
            </tr>
            <tr>
                <td>Telephone Portable</td>
                <td style="position: relative; right: 380px;" ><p><?= $dataV2['TelephonePortable'] ?></p></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td style="position: relative; right: 380px;" ><p> <?=$dataV2['Mail']?></p></td>
            </tr>
            <tr>
                <td>Siret :</td>
                <td style="position: relative; right: 380px;" ><p><?= $dataV2['Siret'] ?></p> </td>
            </tr>
            <tr>
                <td>Raison social :</td>
                <td style="position: relative; right: 380px;" ><p><?= $dataV2['RaisonSociale'] ?></p> </td>
            </tr>
            <tr>
                <td ><p>--------------------Adresse de l'acheteur---------------------------------</p></td>
            </tr>
            <tr>
                <td>Nom Voie :</td>
                <td style="position: relative; right: 380px;" ><p name="NomVoie"><?= $NomVoie ?></p></td>
            </tr>
            <tr>
                <td>Complement Adresse 1 : </td>
                <td style="position: relative; right: 380px;"> <p><?= $ComplementAdresse1 ?></p></td>
            </tr>
            <tr>
                <td>Complement Adresse 2</td>
                <td style="position: relative; right: 380px;"><p><?=$ComplementAdresse2 ?></td>
            </tr>
            <tr>
                <td>Numero Voie : </td>
                <td style="position: relative; right: 380px;"><p><?= $NumeroVoie ?></p></td>
            </tr>
            <tr>
                <td>Extention Voie :</td>
                <td style="position: relative; right: 380px;"><p><?= $ExtentionVoie ?></p></td> 
            </tr>
            <br>
            <tr>
                <td>Type Voie Adresse : 
                <td style="position: relative; right: 380px;"><p><?= $TypeVoieAdresse ?></p></td></td>
            </tr>
            <tr>
                <td>Ville :</td>
                <td  style="position: relative; right: 380px;"><p><?= $NomVille ?></p></td>
            </tr>
            </table>
            <div class="envoyer">
                <input type="submit" name="send" value="Suprimmer" onclick="return confirm('Etes vous sûre de vouloir suprimmer cette acheteur ?')" >
                <input type="button" value="Annuler" id="Annuler" onclick="annuler()" />
            </div>
            <script>
                function annuler(){
                    location.replace("../suprimmer.php?id=<?=$_SESSION['id']?>")
                }
            </script>
        </form>
        <?php endforeach; ?>
    </div>
    <?php 
        if(isset($_POST['send'])){
                $query3 = "DELETE FROM `acheteur` WHERE IdAcheteur='".$_GET['id']."' ";
                $data3 = $database->read($query3);
                $query4 = "DELETE FROM `adresse` WHERE IdAdresse='".$IdAdresse."' ";
                ?>
                    <script>
                        location.replace("../suprimmer.php?id=<?=$_SESSION['id']?>");
                    </script>
                <?php
            }?>
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