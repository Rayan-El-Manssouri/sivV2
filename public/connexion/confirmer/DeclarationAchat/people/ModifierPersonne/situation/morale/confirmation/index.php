<?php 
require_once '../../../../../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query = "SELECT * FROM personnemoral WHERE IdPersonneMoral='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
    $RaisonSocial = $dataV2['RaisonSocial'];
    $Siret = $dataV2['Siret'];
    $Idpersonne = $dataV2['Idpersonne'];
endforeach;

$query2 = "SELECT * FROM personne WHERE IdPersonne='".$Idpersonne."' ";
$data2 = $database->read($query2);

// Récuperation des champs de la table personne.
foreach($data2 as $dataV2):
    $ProAuto = $dataV2['ProAuto'];
    $Assureur = $dataV2['Assureur'];
    $NumeroDeTelephone = $dataV2['NumeroDeTelephone'];
    $Mail = $dataV2['Mail'];
    $IdAdresse = $dataV2['IdAdresse'];
endforeach;

$query3 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
$data3 = $database->read($query3);

foreach($data3 as $dataV2):
    $NomVoie = $dataV2['NomVoie'];
    $ComplementAdresse1 = $dataV2['ComplementAdresse1'];
    $ComplementAdresse2 = $dataV2['ComplementAdresse2'];
    $NumeroVoie = $dataV2['NumeroVoie'];
    $ExtentionVoie = $dataV2['ExtentionVoie'];
    $TypeVoieAdresse = $dataV2['TypeVoieAdresse'];
    $IdVille = $dataV2['IdVille'];
endforeach;

// Extension de voie
$query4 = "SELECT * FROM extentionvoie WHERE Id='".$ExtentionVoie."' ";
$data4 = $database->read($query4);

foreach($data4 as $dataV2):
    $Nom = $dataV2['Nom'];
    $Id = $dataV2['Id'];
endforeach;

$query5 = "SELECT * FROM extentionvoie";
$data5 = $database->read($query5);

//Type de voie adresse
$query6 = "SELECT * FROM typevoieadresse WHERE Id='".$TypeVoieAdresse."' ";
$data6 = $database->read($query6);

foreach($data6 as $dataV2):
    $Nomtypevoieadresse = $dataV2['Nom'];
    $Idtypevoieadresse = $dataV2['Id'];
endforeach; 


$query7 ="SELECT * FROM typevoieadresse ";
$data7 = $database->read($query7);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siv - confirmation - modif</title>
    <link rel="stylesheet" href="index.css" >
    <link href="../../../../../../../../../private/src/logo2.png" rel="icon">

</head>
<body>
    <?php require_once '../../../../../../../../../private/style/headerFormalitees/header.php'?>
    <div class="contenaire">
        <h1>Bienvenue sur la page de modification d'une personne moral</h1>
        <form method="POST">
            <div class="contenu">
                <br>
                <br>
                <br>
                <h3>Identitée de l'entreprise </h3>
                <br>
                <div>
                    <span>Raison social : <input name="RaisonSocial" type="text" value="<?= $RaisonSocial ?>" ></span> <br> <br>
                    <span>Siret : <input name="Siret" type="text" value="<?= $Siret ?>" ></span>
                </div>
                <br>
                <p>Pro : <span>Oui</span> <input type="radio" name="Pro" value="0" <?php if($ProAuto == "0"){ 
                    ?>
                        checked
                    <?php
                } ?>> <span>Non <input type="radio" name="Pro" value="1" <?php if($ProAuto == "1"){ 
                    ?>
                        checked
                    <?php
                } ?>></span> </p>
                <br>
                <p>Assureur : <span>Oui</span> <input type="radio" name="Assureur" value="0"  <?php if($Assureur == "0"){ 
                    ?>
                        checked
                    <?php
                } ?>> <span>Non <input type="radio" name="Assureur" value="1" <?php if($Assureur == "1"){ 
                    ?>
                        checked
                    <?php
                } ?>></span> </p>
                <br>
                <p>Numero De Telephone : <input type="text" name="NumeroDeTelephone" value="<?= $NumeroDeTelephone?>"></p>
                <br>
                <p>Mail : <input type="text" name="Mail" value="<?= $Mail?>"></p>
                <br>
                <h3>Adresse</h3>
                <br>
                <p>Nom Voie : <input type="text" name="NomVoie" value="<?= $NomVoie?>"></p>
                <br>
                <p>Numero Voie : <input type="text" name="NumeroVoie" value="<?= $NumeroVoie?>"></p>
                <br>
                <p>ComplementAdresse1 : <input type="text" name="ComplementAdresse1" value="<?= $ComplementAdresse1?>"></p>
                <br>
                <p>ComplementAdresse2 : <input type="text" name="ComplementAdresse2" value="<?= $ComplementAdresse2?>"></p>
                <br>
                Extention Voie : <select name="ExtentionVoie">
                    <option value="<?= $Id?>"><?= $Nom ?></option>
                    <option value="">---------------------</option>
                    <?php foreach($data5 as $dataV2): ?>
                    <option name="ExtentionVoie" value="<?=$dataV2['Id']?>"><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                typevoieadresse : <select name="typevoieadresse">
                    <option value="<?= $Idtypevoieadresse?>"><?= $Nomtypevoieadresse ?></option>
                    <option value="">---------------------</option>
                    <?php foreach($data7 as $dataV2): ?>
                    <option  name="typevoieadresse" value="<?=$dataV2['Id']?>"><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <div class="button">
                    <input type="submit" name="send">
                    <button><a href="../../morale/">Retour</a></button>
                </div>
            </div>
        </form>

        <?php 
        if(isset($_POST['send'])){
            $RaisonSocial = htmlentities($_POST['RaisonSocial']);
            $Siret = htmlentities($_POST['Siret']);
            $query8 = "UPDATE personnemoral SET RaisonSocial='$RaisonSocial', Siret='$Siret' ";
            $data8 = $database->read($query8);

            $Pro = htmlentities($_POST['Pro']);
            $Assureur = htmlentities($_POST['Assureur']);
            $NumeroDeTelephone = htmlentities($_POST['NumeroDeTelephone']);
            $Mail = htmlentities($_POST['Mail']);

            $query9 = "UPDATE personne SET ProAuto='$Pro', Assureur='$Assureur', NumeroDeTelephone='$NumeroDeTelephone', Mail='$Mail' ";
            $data9 = $database->read($query9);

            $NomVoie = htmlentities($_POST['NomVoie']);
            $NumeroVoie = htmlentities($_POST['NumeroVoie']);
            $ComplementAdresse1  = htmlentities($_POST['ComplementAdresse1']);
            $ComplementAdresse2  = htmlentities($_POST['ComplementAdresse2']);
            $ExtentionVoie  = htmlentities($_POST['ExtentionVoie']);
            $typevoieadresse  = htmlentities($_POST['typevoieadresse']);

            $query10 = "UPDATE adresse SET NomVoie='$NomVoie', NumeroVoie='$NumeroVoie', ComplementAdresse1='$ComplementAdresse1', ComplementAdresse2='$ComplementAdresse2', ExtentionVoie='$ExtentionVoie', typevoieadresse='$typevoieadresse' ";
            $data10 = $database->read($query10);
            ?>
            <script>
                location.replace("")
            </script>
            <?php
        }
        
        ?>

    </div>
</body>
</html>