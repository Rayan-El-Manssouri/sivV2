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

$query4 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data4 = $database->read($query4);

foreach($data4 as $dataV2):
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
    <div class="formulaire">
    <form method="post" >
    <?php foreach($data as $dataV2):  ?>

    <h1>Modification de l'acheteur</h1>
    <p style="text-align : left;">--------------------Situation---------------------------------</p>
        <div style="text-align : left;">
            <span>Pro auto :</span>
            <span><input type="radio"  name="ProautoAssureur" value="0"  <?php 
                if($dataV2['ProautoAssureur'] == 0){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
            <span>Oui</span>
            <span><input type="radio"  name="ProautoAssureur" value="1"  <?php 
                if($dataV2['ProautoAssureur'] == 1){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
            <span>Non</span>
        </div>
        <p style="text-align : left;">--------------------Sexe de l'acheteur---------------------------------</p>
        <div style="text-align : left;">
            <span>Sexe</span>
            <span><input type="radio" value="0" name="sexe" <?php 
                if($dataV2['Sexe'] == 0){
                    ?>
                    checked="checked">
                <?php
                }
                ?> </span>
            <span>F</span>
            <span><input type="radio" value="1" name="sexe" <?php 
                if($dataV2['Sexe'] == 1){
                    ?>
                    checked="checked">
                <?php
                }
                ?></span>
            <span>M</span>
        </div>
            <table style="text-align: left; width : 800px;">
                <tr>
                    <td><p>--------------------Identité de l'acheteur---------------------------------</p></td>
                </tr>
                <tr >
                    <td>Nom de l'acheteur :</td>
                    <td style="position: relative; right: 300px;"><input type="text" name="Nom" value="<?= $dataV2['Nom'] ?>"></td>
                </tr>
                <tr>
                    <td>Nom usage :</td>
                    <td style="position: relative; right: 300px;" ><input type="text" name="NomUsage" value="<?= $dataV2['NomUsage'] ?>"></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td style="position: relative; right: 300px;"> <input type="text" name="Prenom" value="<?= $dataV2['Prenom'] ?>"></td>
                </tr>
            <tr>
                    <td>Date Naissance</td>
                    <td style="position: relative; right: 300px;"><input type="date" name="DateNaissance" value="<?= $dataV2['DateNaissance'] ?>"></td>
            </tr>
            <tr>
                <td>Raison Sociale</td>
                <td style="position: relative; right: 300px;"><input type="text" name="RaisonSociale" value="<?= $dataV2['RaisonSociale'] ?>"></td>
            </tr>
            <tr>
                <td>Telephone Portable</td>
                <td style="position: relative; right: 300px;" ><input type="text" name="TelephonePortable" value="<?= $dataV2['TelephonePortable'] ?>"></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td style="position: relative; right: 300px;" ><input type="text" name="Mail" value="<?=$dataV2['Mail']?>"></td>
            </tr>
            <tr>
                <td>Siret :</td>
                <td style="position: relative; right: 300px;" ><input type="text" name="Siret" value="<?= $dataV2['Siret'] ?>" > </td>
            </tr>
            <tr>
                <td ><p>--------------------Adresse de l'acheteur---------------------------------</p></td>
            </tr>
            <tr>
                <td>Nom Voie :</td>
                <td style="position: relative; right: 300px;" ><input type="text" value="<?= $NomVoie ?>" name="NomVoie"></td>
            </tr>
            <tr>
                <td>Complement Adresse 1 : </td>
                <td style="position: relative; right: 300px;"> <input type="text" value="<?= $ComplementAdresse1 ?>" name="ComplementAdresse1"></td>
            </tr>
            <tr>
                <td>Complement Adresse 2</td>
                <td style="position: relative; right: 300px;"><input type="text" name="ComplementAdresse2" value="<?=$ComplementAdresse2 ?>"></td>
            </tr>
            <tr>
                <td>Numero Voie : </td>
                <td style="position: relative; right: 300px;"><input type="text" value="<?= $NumeroVoie ?>" name="NumeroVoie"></td>
            </tr>
            <tr>
                <td>Extention Voie :</td>
                <td style="position: relative; right: 300px;"> <select name="ExtentionVoie">
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
            <br>
            <tr>
                <td>Type Voie Adresse : 
                <td style="position: relative; right: 300px;"><select name="TypeVoieAdresse">
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
                <td>Sélectionner la ville :</td>
                <td>
                    <select name="ville"  style="position: relative; right: 300px;">
                        <option value="<?= $NomVille?>"><?= $NomVille?></option>
                        <option>--------------------------</option>
                        <?php foreach($data5 as $dataV2): ?>
                            <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td></td>
            </tr>
            </table>
            <div class="envoyer">
                <input type="submit" value="Envoyer" name="send" onclick="return confirm('Etes vous sûre de vourloir modifier ?')">
                <input type="button" value="Annuler" id="Annuler" onclick="annuler()" >
            </div>
            <script>
                function annuler(){
                    location.replace("../modifier.php?id=<?=$_GET['id']?>")
                }
            </script>
        </form>
        <?php endforeach; ?>
    </div>
    <?php 
        if(isset($_POST['send'])){
                $id = $_SESSION['id'];
                $Nom = $_POST['Nom'];

                $ProAuto = $_POST['ProautoAssureur'];

                if($_POST['sexe'] == ""){
                    $sexe = "NULL";
                }else{
                    $s = $_POST['sexe'];
                    $sexe = "'".$s."' " ;
                }
                $NomUsage = $_POST['NomUsage'];
                $Prenom = $_POST['Prenom'];
                if($_POST['DateNaissance'] == ""){
                    $DateNaissance = "NULL";
                }else{
                    $Date = $_POST['DateNaissance'];
                    $DateNaissance = " '".$Date."' ";
                }
                $RaisonSociale = $_POST['RaisonSociale'];
                $TelephonePortable = $_POST['TelephonePortable'];
                $Mail = $_POST['Mail'];
                $Siret = $_POST['Siret'];
                $ville = $_POST['ville'];

                $query6 = "SELECT * FROM ville WHERE Nom='".$ville."' ";
                $data6 = $database->read($query6);

                foreach($data6 as $dataV2):
                    $IdVille = $dataV2['IdVille'];
                endforeach;    


                $query1 = "UPDATE acheteur SET IdVille='$IdVille' , ProautoAssureur='$ProAuto', Sexe=$sexe, Nom='$Nom', NomUsage='$NomUsage' , Prenom='$Prenom' , DateNaissance=$DateNaissance , RaisonSociale='$RaisonSociale', Siret='$Siret', TelephonePortable='$TelephonePortable', Mail='$Mail' WHERE IdAcheteur='".$_GET['id']."'";
                $data1 = $database->read($query1);


                //-------------------------------------------------
                //Parti adresse
                $NomVoie = $_POST['NomVoie'];
                $ComplementAdresse1 = $_POST['ComplementAdresse1'];
                $ComplementAdresse2 = $_POST['ComplementAdresse2'];
                $NumeroVoie = $_POST['NumeroVoie'];
                $ExtentionVoie = $_POST['ExtentionVoie'];
                $TypeVoieAdresse = $_POST['TypeVoieAdresse'];
                $query3 = "UPDATE adresse SET ComplementAdresse1='$ComplementAdresse1',  NumeroVoie='$NumeroVoie', TypeVoieAdresse='$TypeVoieAdresse',  ExtentionVoie='$ExtentionVoie',   ComplementAdresse2='$ComplementAdresse2' WHERE IdAdresse='".$IdAdresse."'   ";
                $data3 = $database->read($query3);
                ?>
                <script>
                    location.replace("")
                </script>
                <?php
                die();

            }
    ?>
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