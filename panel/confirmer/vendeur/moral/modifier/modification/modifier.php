<?php 
error_reporting(0);
session_start();
require_once '../../../../../../Gestion bdd/connect.php';
$database = new Database; 
$query = "SELECT * FROM vendeur WHERE IdVendeur='".$_GET['id']."' ";
$data = $database->read($query);
foreach($data as $dataV2):
    $IdAdresse = $dataV2['IdAdresse'];
    $IdVille =$dataV2['IdVille'];
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
$query4 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data4 = $database->read($query4);

foreach($data4 as $dataV2):

    $NomVille = $dataV2['Nom'];


endforeach;    

$query5 = "SELECT * FROM ville";
$data5 = $database->read($query5);


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
                <table style="text-align: left;  width: 1000px;">
                <h1 style="position: relative; left: -40px;">Modification du vendeur</h1>
               
                <div style="text-align: left;  width: 1000px;">
                <p>--------------------------------Identité du vendeur-----------------------------------------</p>
                </div>
                <div style="text-align: left;  width: 1000px;">
                    <span>Pro auto :</span>
                    <span style="position: relative; left: 177px;">
                    <span><input type="radio" name="ProautoAssureur" value="0" <?php   if ($dataV2['ProautoAssureur'] == 0){ 
                                            ?>
                                                    checked="checked">
                                            <?php
                                            }
                                            ?></span>
                        <span>Oui</span>
                        <span> <input type="radio" name="ProautoAssureur" value="1" <?php   if ($dataV2['ProautoAssureur'] == 1){ 
                                            ?>
                                                    checked="checked">
                                            <?php
                                            }
                                            ?></span>
                                            <span>Non</span>
                                            
                    </span>
                </div>
                <br>
                <div style="text-align: left;  width: 1000px;">
                    <span>Physique ou Moral :</span>
                    <span style="position: relative; left: 100px;">
                    <span><input type="radio" name="PhysiqueMorale" value="0" <?php   if ($dataV2['PhysiqueMorale'] == 0){ 
                                            ?>
                                                    checked="checked">
                                            <?php
                                            }
                                            ?></span>
                        <span>Physique</span>
                        <span> <input type="radio" name="PhysiqueMorale" value="1" <?php   if ($dataV2['PhysiqueMorale'] == 1){ 
                                            ?>
                                                    checked="checked">
                                            <?php
                                            }
                                            ?></span>
                                            <span>Moral</span>
                                            
                    </span>
                </div>
                <br>
                <div style="text-align: left;  width: 1000px;">
                    <span>Sexe :</span>
                    <span style="position: relative; left: 210px;">
                    <span><input type="radio" name="Sexe" value="0" <?php   if ($dataV2['Sexe'] == 0){ 
                                            ?>
                                                    checked="checked">
                                            <?php
                                            }
                                            ?></span>
                        <span>F</span>
                        <span> <input type="radio" name="Sexe" value="1" <?php   if ($dataV2['Sexe'] == 1){ 
                                            ?>
                                                    checked="checked">
                                            <?php
                                            }
                                            ?></span>
                                            <span>M</span>
                                            
                    </span>
                </div>
                <br>

                
                <tr>
                    <td>Nom :</td>
                    <td style="position: relative; right: 500px;" ><input type="text" name="Nom" value="<?= $dataV2['Nom'] ?>"></td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td style="position: relative; right: 500px;" ><input type="text" name="Prenom" value="<?= $dataV2['Prenom'] ?>"></td>
                </tr>
                <tr>
                    <td>Nom Usage :</td>
                    <td style="position: relative; right: 500px;" ><input type="text" name="NomUsage" value="<?= $dataV2['NomUsage'] ?>"></td>
                </tr>
                <tr>
                    <td>Siret :</td>
                    <td style="position: relative; right: 500px;" ><input type="text" name="Siret" value="<?= $dataV2['Siret'] ?>"></td>
                </tr>
                <tr>
                    <td>Raison Sociale :</td>
                    <td style="position: relative; right: 500px;"><input type="text" value="<?=$dataV2['RaisonSocial']?>" name="RaisonSocial"></td>
                </tr>
                <tr>
                    <td>Num Agrement :</td>
                    <td style="position: relative; right: 500px;" ><input type="text" name="NumAgrement" value="<?= $dataV2['NumAgrement'] ?>"></td>
                </tr>
                <tr>
                    <td><p>--------------------------------Adresse-----------------------------------------</p></td>
                </tr>
                <tr>
                    <td>Nom Voie</td>
                    <td  style="position: relative; right: 500px;" ><input type="text" name="NomVoie" value="<?=$NomVoie?>"></td>
                </tr>
                <tr>
                    <td>Complement Adresse 1</td>
                    <td  style="position: relative; right: 500px;" ><input type="text" name="ComplementAdresse1" value="<?=$ComplementAdresse1?>"></td>
                </tr>
                <tr>
                    <td>Complement Adresse 2</td>
                    <td  style="position: relative; right: 500px;" ><input type="text" name="ComplementAdresse2" value="<?=$ComplementAdresse2?>"></td>
                </tr>
                <tr>
                    <td>Numero Voie</td>
                    <td  style="position: relative; right: 500px;" ><input type="text" name="NumeroVoie" value="<?=$NumeroVoie?>"></td>
                </tr>
                <tr>
                    <td>Extention Voie</td>
                    <td style="position: relative; right: 500px;"> <select name="ExtentionVoie">
                            <option><?=$ExtentionVoie?></option>
                            <option>--------------------------</option>
                            <option>Bis</option>
                            <option>Ter</option>
                            <option>Quater</option>
                            <option>Quinquies</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>  </td> 
                </tr>
                <tr>
                    <td>Type Voie Adresse</td>
                    <td style="position: relative; right: 500px;"><select name="TypeVoieAdresse">
                            <option value="<?=$TypeVoieAdresse?>"><?=$TypeVoieAdresse?></option>
                            <option>--------------------------</option>
                            <option value="Rue">Rue</option>
                            <option value="Avenue">Avenue</option>
                            <option value="Boulevard"> Boulevard</option>
                            <option value="Allée">Allée</option>
                            <option  value="Place">Place</option>
                            <option  value="Route">Route</option>
                            <option value="Centre">Centre</option>
                            <option value="Ctre Cial">Ctre Cial</option>
                            <option value="Immeuble">Immeuble</option>
                            <option value="Impasse">Impasse</option>
                            <option value="Lieu-dit">Lieu-dit</option>
                            <option  value="Lotissement"> Lotissement</option>
                            <option value="Passage">Passage</option>
                            <option  value="Résidence">Résidence</option>
                            <option value="Résidence Privé">Résidence Privé</option>
                            <option value="Rondpoint">Rondpoint</option>
                            <option value="Square">Square</option>
                            <option value="Village">Village</option>
                            <option value="Z.A">Z.A</option>
                            <option value="Z.A.C">Z.A.C</option>
                </select></td></td>
                </tr>
                <tr>
                    <td>Sélectionner la ville</td>
                    <td style="position: relative; right: 500px;"><select name="ville">
                            <option value="<?=$NomVille?>"><?=$NomVille?></option>
                            <option>--------------------------</option>
                            <?php foreach($data5 as $dataV2): ?>
                                <option value="<?= $dataV2['Nom']?>"><?= $dataV2['Nom']?></option>
                            <?php endforeach; ?>
                </select></td></td>
                </tr>
                
                </table>
                <div class="envoyer">
                    <input type="submit" value="Envoyer" name="send">
                    <input type="button" value="Annuler" id="Annuler" onclick="annuler()">
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    <?php 
        if(isset($_POST['send'])){
                    $utilisateur = $_POST['utilisateur'];
                    $Opacite = $_POST['Opacite'];
                    if($_POST['Sexe'] == ""){
                        $Sexe = "NULL";
                    }else{
                        $SE = $_POST['Sexe'];
                        $Sexe = "'".$SE."' ";
                    }
                    if($_POST['Nom'] == ""){
                        $Nom = "NULL";
                    }else{
                        $N = $_POST['Nom'];
                        $Nom = "'".$N."' ";
                    }
                    if($_POST['Prenom'] == ""){
                        $Prenom = "NULL";
                    }else{
                        $P = $_POST['Prenom'];
                        $Prenom = "'".$P."'";
                    }
                    if($_POST['NomUsage'] == ""){
                        $NomUsage = "NULL";
                    }else{
                        $NU = $_POST['NomUsage'];
                        $NomUsage = "'".$NU."'";
                    }

                    if($_POST['Siret'] == ""){
                        $Siret = "NULL";
                    }else{
                        $SR = $_POST['Siret'];
                        $Siret = "'".$SR."'" ;
                    }
                    if($_POST['NumAgrement'] == ""){
                        $NumAgrement = "NULL";
                    }else{
                        $NMU = $_POST['NumAgrement'];
                        $NumAgrement = "'".$NMU."'";
                    }
                    if($_POST['RaisonSocial'] == ""){
                        $RaisonSocial = "NULL";
                    }else{
                        $RS = $_POST['RaisonSocial'];
                        $RaisonSocial = "'".$RS."' ";
                    }


                    $NomVoie = $_POST['NomVoie'];
                    $ComplementAdresse1 = $_POST['ComplementAdresse1'];
                    $ComplementAdresse2 = $_POST['ComplementAdresse2'];
                    $NumeroVoie = $_POST['NumeroVoie'];
                    $ExtentionVoie = $_POST['ExtentionVoie'];
                    $TypeVoieAdresse = $_POST['TypeVoieAdresse'];
                    $PhysiqueMorale = $_POST['PhysiqueMorale'];
                    $ProautoAssureur = $_POST['ProautoAssureur'];
                    
                    $ville = $_POST['ville'];

                    $query6 = "SELECT * FROM ville WHERE Nom='".$ville."' ";
                    $data6 = $database->read($query6);

                    foreach($data6 as $dataV2):
                        $IdVille = $dataV2['IdVille'];
                    endforeach;   



                    $query1 = "UPDATE vendeur SET RaisonSocial=$RaisonSocial, IdVille='$IdVille',  ProautoAssureur='$ProautoAssureur', PhysiqueMorale='$PhysiqueMorale', Sexe=$Sexe,  Nom=$Nom,  Prenom=$Prenom, NomUsage=$NomUsage, Siret=$Siret, NumAgrement=$NumAgrement  WHERE IdVendeur='".$_GET['id']."'";
                    $data1 = $database->read($query1);

                    $query3 = "UPDATE adresse SET NomVoie='$NomVoie', ComplementAdresse1='$ComplementAdresse1', ComplementAdresse2='$ComplementAdresse2', NumeroVoie='$NumeroVoie', ExtentionVoie='$ExtentionVoie', TypeVoieAdresse='$TypeVoieAdresse' WHERE  IdAdresse='".$IdAdresse."' ";
                    $data3 = $database->read($query3);
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