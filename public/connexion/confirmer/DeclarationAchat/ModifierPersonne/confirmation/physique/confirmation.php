<?php 
require_once '../../../../../../../private/bdd/connect.php';
$database = new Database();
$query = "SELECT * FROM personnephysique WHERE IdPersonnePhysique='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2){
    $IdPersonne = $dataV2['Idpersonne'];
    $IdVille = $dataV2['IdVille'];
}

$query5 = "SELECT * FROM personne WHERE IdPersonne='".$IdPersonne."' ";
$data5 = $database->read($query5);

foreach($data5 as $dataV2 ){
    $Pro = $dataV2['ProAuto'];
    $Assureur = $dataV2['Assureur'];
    $NumeroDeTelephone = $dataV2['NumeroDeTelephone'];
    $Mail = $dataV2['Mail'];
    $IdAdresse = $dataV2['IdAdresse'];
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
}

$query11 = "SELECT * FROM typeVoieAdresse WHERE Id='".$TypeVoieAdresse ."' ";
$data11 = $database->read($query11);

foreach ($data11 as $dataV2 ) {
    $TypeVoieAdresse_id = $dataV2['Nom'];
}



$query10 = "SELECT * FROM extentionvoie WHERE Id='".$ExtentionVoie."' ";
$data10 = $database->read($query10);


foreach ($data10 as $dataV2) {
    $ExtentionVoie2 = $dataV2['Nom'];
}





$query6 = "SELECT * FROM ville";
$data6 = $database->read($query6);

$query7 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data7 = $database->read($query7);

foreach($data7 as $dataV2){
    $NomVille = $dataV2['Nom'];
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
    <title>Modification</title>
    <link href="confirmation.css" rel="stylesheet">
    <link href="../../../../../../../private/src/logo2.png" rel="icon">
    <link href="http://localhost/sivV2/private/style/footer/footer.css" rel="stylesheet">
</head>
<body>
    <?php require_once '../../../../../../../private/style/headerFormaliter/header.php'; ?>
    <div class="modification">
        <div class="Titre">
            Identité
        </div>
        <?php foreach($data as $dataV2): ?>
            <br>


                <p>Nom : <input type="text" value="<?= $dataV2['Nom'] ?>"></p>
                <p>Nomd usage : <input type="text" value="<?= $dataV2['Nomdusage'] ?>"></p>
                <p>Prénom : <input type="text" value="<?= $dataV2['Prenom'] ?>"></p>
                <p>Date De naissance : <input type="date" value="<?= $dataV2['DateDenaissance'] ?>"></p>
                <br>
                <div class="Titre">
                    Parti personne
                </div>
                <p>Pro : <span>Oui</span> <input type="radio" name="Pro" <?php if($Pro == "0"){ 
                    ?>
                        checked
                    <?php
                } ?>> <span>Non <input type="radio" name="Pro"<?php if($Pro == "1"){ 
                    ?>
                        checked
                    <?php
                } ?>></span> </p>
                  <p>Assureur : <span>Oui</span> <input type="radio" name="Assureur" <?php if($Assureur == "0"){ 
                    ?>
                        checked
                    <?php
                } ?>> <span>Non <input type="radio" name="Assureur"<?php if($Assureur == "1"){ 
                    ?>
                        checked
                    <?php
                } ?>></span> </p>
                <p>Numéro de téléphone : <input type="text" value="<?= $NumeroDeTelephone?> "></p>
                <p>Mail : <input type="text" value="<?= $Mail?> "></p>
                <div class="Titre">
                    Adresse
                </div>
                <p>Sélectionner la ville :        <select name="">
                    <option value=""><?php echo $NomVille?></option>
                    <option value="">----------------------------------</option>
                    
                   <?php foreach ($data6 as $dataV2): ?>
                     <option value=""><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select></p>

                <p>Sélectionner l'extension de voie : <select name="">
                    <option value=""><?php echo $ExtentionVoie2?></option>
                    <option value="">----------------------------------</option>
                   <?php foreach ($data8 as $dataV2): ?>
                     <option value=""><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select></p>
                <p>Nom Voie : <input type="text" value="<?= $NomVoie?>"></p>
                <p>Complement Adresse 1 : <input type="text" value="<?= $ComplementAdresse1?>"></p>
                <p>Complement Adresse 2 : <input type="text" value="<?= $ComplementAdresse2?>"></p>
                <p>Numero Voie : <input type="text" value="<?= $NumeroVoie?>"></p>
                <p>Sélectionner le type de voie adresse : <select name="">
                    <option value=""><?php echo $TypeVoieAdresse_id?></option>
                    <option value="">----------------------------------</option>
                   <?php foreach ($data9 as $dataV2): ?>
                     <option value=""><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select></p>
        <?php endforeach; ?>
    </div>
</body>
</html>