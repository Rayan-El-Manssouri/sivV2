<?php 
session_start();
require_once '../../../../../../Gestion bdd/connect.php';
$database = new Database();

$query = "SELECT * FROM vendeur WHERE IdVendeur='".$_GET['id']."' ";
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


$query2 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
    <link href="supression.css" rel="stylesheet">
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
    <div class="formulaire">
        <?php foreach($data as $dataV2):  ?>
            <form method="post" >
            <h1>Supprimer un l'utilisateur</h1>
            <p style="width: 1000px; text-align: left;" >--------------------------------Identité de l'acheteur-----------------------------------------</p>
                <div style="text-align: left;">
                    <span>Nom :</span>
                    <span><?= $dataV2['Nom'] ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Prénom :</span>
                    <span><?= $dataV2['Prenom'] ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Nom Usage :</span>
                    <span><?= $dataV2['NomUsage'] ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Siret :</span>
                    <span><?= $dataV2['Siret'] ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Num Agrement :</span>
                    <span><?= $dataV2['NumAgrement'] ?></span>
                </div>
                <br>
                <br>
                <p>--------------------------------Adresse-----------------------------------------</p>
                <div style="text-align: left;">
                    <span>Nom Voie :</span>
                    <span><?= $NomVoie ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Complement Adresse 1 :</span>
                    <span><?= $ComplementAdresse1 ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Complement Adresse 2 :</span>
                    <span><?= $ComplementAdresse2 ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Complement Adresse 2 :</span>
                    <span><?= $ComplementAdresse2 ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Numero Voie :</span>
                    <span><?= $NumeroVoie ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Extention Voie :</span>
                    <span><?= $ExtentionVoie ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Type Voie Adresse :</span>
                    <span><?= $TypeVoieAdresse ?></span>
                </div>
                <br>
                <br>
                <div style="text-align: left;">
                    <span>Nom Ville :</span>
                    <span><?= $NomVille ?></span>
                </div>

               
                <div style="text-align : left;">
                    <p>--------------------------------Bouton radio-------------------------------</p>
                    <span>Sexe :</span>
                    <span>F</span>
                    <span><input type="radio" style="position: relative; left: 0; top: -1px;" name="sexe" <?php 
                    if($dataV2['Sexe'] == 0){
                        ?>
                        checked="checked"
                        <?php
                    }

                    ?>></span>
                    <span>M</span>
                    <span><input type="radio" style="position: relative; left: 0; top: -1px;" name="sexe" <?php 
                    if($dataV2['Sexe'] == 1){
                        ?>
                        checked="checked"
                        <?php
                    }
                    
                    
                    ?>></span>
                </div>
                <div style="text-align : left; position: relative; top: 50px;">
                    <span>Physique Morale :</span>
                    <span>Physique</span>
                    <span><input type="radio" style="position: relative; left: 0; top: -1px;" name="PhysiqueMorale" <?php 
                    if($dataV2['PhysiqueMorale'] == 0){
                        ?>
                        checked="checked"
                        <?php
                    }

                    ?>></span>
                    <span>Moral</span>
                    <span><input type="radio" style="position: relative; left: 0; top: -1px;" name="PhysiqueMorale" <?php 
                    if($dataV2['PhysiqueMorale'] == 1){
                        ?>
                        checked="checked"
                        <?php
                    }
                    
                    
                    ?>></span>
                </div>
              
                </table>
                <div class="envoyer" style="position: relative; top: 200px; right: 800px;">
                    <input type="submit" value="Supprimer" name="send" onclick="return confirm('Etes vous sûre de vouloir le supprimer ?')">
                    <input type="button" value="Annuler" id="Annuler" onclick="annuler()">
                </div>
            </form>
        <?php endforeach; ?>
    </div>
        <script>
            function annuler(){
                location.replace("../suprimmer.php?id=<?= $_SESSION['id'] ?>")
            }
        </script>
        <?php 
        if(isset($_POST['send'])){
            $query3 = "DELETE FROM `vendeur` WHERE IdVendeur='".$_GET['id']."' ";
            $data3 = $database->read($query3);
            $query4 = "DELETE FROM `adresse` WHERE IdAdresse='".$IdAdresse."' ";
            $data4  = $database->read($query4);
            ?>
                <script>
                    location.replace("../suprimmer.php?id=<?=$_SESSION['id']?>")
                </script>
            <?php
        }else{
        }
        ?>
    </div>

    
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