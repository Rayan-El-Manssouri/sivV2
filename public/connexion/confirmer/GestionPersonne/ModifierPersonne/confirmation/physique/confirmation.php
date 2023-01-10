<?php 
error_reporting(0);
require_once '../../../../../../../private/bdd/connect.php';
$database = new Database();

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
    <link href="../../../../../../../private/src/logo.png" rel="icon">
    <link href="http://localhost/siv/private/style/footer/footer.css" rel="stylesheet">
</head>
<body>
    <form name="form1" id="form1"  method="post">
    <?php require_once '../../../../../../../private/style/headerFormalitees/header.php'; ?>
    <div class="modification">
        <div class="Titre">
            Identité
        </div>
        <?php foreach($data as $dataV2): ?>
            <br>
                <p>Nom : <input type="text" name="nom" value="<?= $dataV2['Nom'] ?>" onkeypress="validerForm(event);"></p>
                <p>Nom d'usage : <input type="text" name="NomUsage" value="<?= $dataV2['Nomdusage'] ?>" onkeypress="validerForm(event);"></p>
                <p>Prénom : <input type="text" name="Prenom" value="<?= $dataV2['Prenom'] ?>" onkeypress="validerForm(event);"></p>
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
                <p>Numéro de téléphone : <input type="text" name="NumeroDeTelephone" value="<?= $NumeroDeTelephone?> " onkeypress="validerForm(event);"></p>
                <p>Mail : <input name="Mail" type="text" value="<?= $Mail?> " onkeypress="validerForm(event);"></p>
                <div class="Titre">
                    Adresse
                </div>
                <p>Sélectionner la ville :<select name="ville">
                    <option value="<?= $IdVille ?>"><?php echo $NomVille?></option>
                    <option value="">----------------------------------</option>
                <?php foreach ($data6 as $dataV2): ?>
                    <option name="ville" value="<?= $dataV2['IdVille'] ?>"><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select></p>

                <p>Sélectionner l'extension de voie : <select name="ExtentionVoie" >
                    <option value="<?= $IDExtensionVoie ?>"><?php echo $ExtentionVoie2?></option>
                    <option value="">----------------------------------</option>
                <?php foreach ($data8 as $dataV2): ?>
                    <option name="ExtentionVoie" value="<?= $dataV2['Id'] ?>"><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select></p>
                <p>Nom Voie : <input name="NomVoie" type="text" value="<?= $NomVoie?>" onkeypress="validerForm(event);"></p>
                <p>Complement d'adresse 1 : <input name="ComplementAdresse1" type="text" value="<?= $ComplementAdresse1?>" onkeypress="validerForm(event);" ></p>
                <p>Complement d'adresse 2 : <input name="ComplementAdresse2" type="text" value="<?= $ComplementAdresse2?>" onkeypress="validerForm(event);"></p>
                <p>Numero Voie : <input name="NumeroVoie" type="text" value="<?= $NumeroVoie?>" onkeypress="validerForm(event);"></p>
                <p>Sélectionner le type de voie adresse : <select  name="TypeVoieAdresse">
                    <option value="<?= $TypeVoieAdresse_id_2 ?>"><?php echo $TypeVoieAdresse_id?></option>
                    <option value="">----------------------------------</option>
                <?php foreach ($data9 as $dataV2): ?>
                    <option name="TypeVoieAdresse" value="<?= $dataV2['Id'] ?>"><?= $dataV2['Nom'] ?></option>
                    <?php endforeach; ?>
                </select></p>
        <?php endforeach; ?>
        <input type="submit" class="input" id="send" name="send">
        <script>
            function retour(){
                location.replace("../../index.php")
            }
        </script>
        <input type="button" class="input" id="send" name="send" value="annuler" onclick="retour()">
    </div>
</form>
<script type="text/javascript" src="../../../../../../../private/javascript/entrer.js"></script>
<?php 
if(!empty($_POST['send'])){

    $Nom = htmlentities($_POST['nom']);
    $NomUsage = htmlentities($_POST['NomUsage']);
    $Prenom = htmlentities($_POST['Prenom']);
    $DateDeNaissance = htmlentities($_POST['DateDeNaissance']);
    $query = "UPDATE personnephysique SET Nom='$Nom', Nomdusage='$NomUsage', Prenom='$Prenom', DateDeNaissance='$DateDeNaissance' WHERE IdPersonnePhysique='".$_GET['id']."';";
    
    $data1 = $database->read($query);
    $ProV2 = htmlentities($_POST['Pro']);
    $Assureur = htmlentities($_POST['Assureur']);
    $NumeroDeTelephone = htmlentities($_POST['NumeroDeTelephone']);
    $Mail = htmlentities($_POST['Mail']);
    
    $query2 = "UPDATE personne SET ProAuto='$ProV2', Assureur='$Assureur', NumeroDeTelephone='$NumeroDeTelephone', Mail='$Mail' WHERE IdPersonne='".$IdPersonne."';";
    $data2 = $database->read($query2);


    $ville = htmlentities($_POST['ville']);
    $ExtentionVoieV2  = htmlentities($_POST['ExtentionVoie']);
    $NomVoie  = htmlentities($_POST['NomVoie']);
    $ComplementAdresse1  = htmlentities($_POST['ComplementAdresse1']);
    $ComplementAdresse2  = htmlentities($_POST['ComplementAdresse2']);
    $NumeroVoie  = htmlentities($_POST['NumeroVoie']);
    $TypeVoieAdresse  = htmlentities($_POST['TypeVoieAdresse']);
    $query3 = "UPDATE adresse SET IdVille='$ville', ExtentionVoie='$ExtentionVoieV2', NomVoie='$NomVoie', ComplementAdresse1='$ComplementAdresse1', ComplementAdresse2='$ComplementAdresse2', NumeroVoie='$NumeroVoie', TypeVoieAdresse='$TypeVoieAdresse' WHERE IdAdresse='".$IdAdresse."';";
    $data4 = $database->read($query3);
    print_r($query3);
    ?>
    <script>
        location.replace("http://localhost/siv/public/connexion/confirmer/GestionPersonne/ModifierPersonne/confirmation/physique/confirmation.php?id=<?=$_GET['id']?>")
    </script>
    <?php
   
}
?>
</body>
</html>