<?php 
require_once '../../../../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query = "SELECT * FROM personnephysique WHERE IdPersonnePhysique='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2){
    $IdPersonne = $dataV2['Idpersonne'];
}

$query5 = "SELECT * FROM personne WHERE IdPersonne='".$IdPersonne."' ";
$data5 = $database->read($query5);

foreach($data5 as $dataV2 ){
    $Pro = $dataV2['ProAuto'];
    $Assureur = $dataV2['Assureur'];
    $NumeroDeTelephone = $dataV2['NumeroDeTelephone'];
    $Mail = $dataV2['Mail'];
    $IdAdresse = $dataV2['IdAdresse'];
    $IdPersonne = $dataV2['IdPersonne'];

};

$query9 = "SELECT * FROM adresse WHERE IdAdresse='".$IdAdresse."' ";
$data9 = $database->read($query9);

foreach ($data9 as $key) {
    $ExtentionVoie = $key['ExtentionVoie'];
    $NomVoie = $key['NomVoie'];
    $ComplementAdresse1 = $key['ComplementAdresse1'];
    $ComplementAdresse2 = $key['ComplementAdresse2'];
    $NumeroVoie = $key['NumeroVoie'];
    $TypeVoieAdresse = $key['TypeVoieAdresse'];
    $IdVille = $key['IdVille'];
}

$query11 = "SELECT * FROM typeVoieAdresse WHERE Id='".$TypeVoieAdresse ."' ";
$data11 = $database->read($query11);

foreach ($data11 as $dataV2 ) {
    $TypeVoieAdresse_id = $dataV2['Nom'];
    $TypeVoieAdresse_id_2 = $dataV2['Id'];
}

$query10 = "SELECT * FROM extentionvoie WHERE Id='".$ExtentionVoie."' ";
$data10 = $database->read($query10);

foreach ($data10 as $dataV2) {
    $ExtentionVoie2 = $dataV2['Nom'];
    $IDExtensionVoie = $dataV2['Id'];
}

$query6 = "SELECT * FROM ville";
$data6 = $database->read($query6);

$query7 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data7 = $database->read($query7);

foreach($data7 as $dataV2){
    $NomVille = $dataV2['Nom'];
    $IdVille = $dataV2['IdVille'];
}

$query8 = "SELECT * FROM extentionvoie";
$data8 = $database->read($query8);

$query9 = "SELECT * FROM typevoieadresse";
$data9 = $database->read($query9);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifications</title>
    <link href="confirmation.css" rel="stylesheet">
    <link href="../../../../../../../../private/src/logo2.png" rel="icon">
    <link href="http://localhost/sivV2/private/style/footer/footer.css" rel="stylesheet">
</head>
<body>
    <form name="form1" id="form1"  method="post">
    <?php require_once '../../../../../../../../private/style/headerFormalitees/header.php'; ?>
    <div class="modification">
        <div class="Titre">
            Identité
        </div>
        <?php foreach($data as $dataV2): ?>
            <br>
                <p>Nom : <span><?= $dataV2['Nom'] ?></span>
                <p>Nom d'usage : <span><?= $dataV2['Nomdusage'] ?></span>
                <p>Prénom : <span><?= $dataV2['Prenom'] ?></span>
                <p>Date De naissance : <input name="DateDeNaissance" type="date" value="<?= $dataV2['DateDenaissance'] ?>"></p>
                <br>
                <div class="Titre">
                    Parti personne
                </div>
                <p>Pro : <span>Oui</span> <input type="radio" name="Pro" value="0" <?php if($Pro == "0"){ 
                    ?>
                        checked
                    <?php
                } ?>> <span>Non <input type="radio" name="Pro" value="1" <?php if($Pro == "1"){ 
                    ?>
                        checked
                    <?php
                } ?>></span> </p>
                <p>Assureur : <span>Oui</span> <input type="radio" name="Assureur" value="0"  <?php if($Assureur == "0"){ 
                    ?>
                        checked
                    <?php
                } ?>> <span>Non <input type="radio" name="Assureur" value="1" <?php if($Assureur == "1"){ 
                    ?>
                        checked
                    <?php
                } ?>></span> </p>
                <p>Numéro de téléphone : <span><?= $NumeroDeTelephone?> </span>
                <p>Mail : <span> <?= $Mail?></span>
                <div class="Titre">
                    Adresse
                </div>
                <p>Sélectionner la ville :<span> <?php echo $NomVille?></span></p>

                <p>Sélectionner l'extension de voie : <span><?php echo $ExtentionVoie2?></span></p>
                <p>Nom Voie : <span><?= $NomVoie?></span>
                <p>Complement d'adresse 1 : <span><?= $ComplementAdresse1?></span>
                <p>Complement d'adresse 2 : <span><?= $ComplementAdresse2?></spanp>
                <p>Numero Voie : <span><?= $NumeroVoie?></span>
                <p>Sélectionner le type de voie adresse : <span><?php echo $TypeVoieAdresse_id?></span>
                <br>
                <br>
        <?php endforeach; ?>
        <script>
            function retour(){
                location.replace("../../index.php")
            }
        </script>
        <input type="submit" class="input" value="Suprimmer" name="delete">
        <input type="button" class="input" id="send" name="send" value="annuler" onclick="retour()">
    </div>
</form>
<script type="text/javascript" src="../../../../../../../private/javascript/entrer.js"></script>
            <?php 
            if(isset($_POST['delete'])){
                $query12 = "DELETE FROM `adresse` WHERE IdAdresse='".$IdAdresse."' ";
                $data12 = $database->read($query12);
                $query13 = "DELETE FROM `personne` WHERE IdPersonne='".$IdPersonne."' ";
                $data13 = $database->read($query13);
                $query14 = "DELETE FROM `personnephysique` WHERE IdPersonnePhysique='".$_GET['id']."' ";
                $data14 = $database->read($query14);
                header("Location: http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/SuprimmerPersonnne/index.php");
            }
            
            
            ?>
</body>
</html>