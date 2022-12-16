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

$query3 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data3 = $database->read($query3);


foreach($data3 as $dataV2):
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
                Revenir a la page de list
            </button>
        </a>
    </div>
    <div class="formulaire">
        <?php foreach($data as $dataV2):  ?>
        <form method="post" >
            <table style="text-align: left; width : 800px;">
            <h1>Voir l'acheteur</h1>
            <p style="text-align: left;">--------------------Situation---------------------------------</p>
            <div style="text-align: left;">
                <span>Pro auto :</span>
                <span>Oui</span>
                <span><input type="radio" value="0" name="ProAuto"<?php 
                if($dataV2['ProautoAssureur'] == "0"){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
                <span>Non</span>
                <span><input type="radio" value="1" name="ProAuto"<?php 
                if($dataV2['ProautoAssureur'] == "1"){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
            </div>
            <p style="text-align: left;">--------------------Sexe de l'acheteur---------------------------------</p>
        <div style="text-align: left;">
            <span>Sexe :</span>
            <span>F</span>
            <span><input type="radio" name="sexe" value="0" <?php 
                if($dataV2['Sexe'] == 1){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
            <span>M</span>
            <span><input type="radio" name="sexe" value="1" <?php 
                if($dataV2['Sexe'] == 0){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
        </div>
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
                <td><p>--------------------Adresse de l'acheteur---------------------------------</p></td>
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
                <td  style="position: relative; right: 380px;"><?=$NomVille?></td>
            </tr>
            </table>
        </form>
        <?php endforeach; ?>
    </div>
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