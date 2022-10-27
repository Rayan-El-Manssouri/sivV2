<?php 
error_reporting(0);
require_once '../../../../../private/bdd/connect.php';
$database = new Database();

$query4 = "SELECT * FROM `vehicule`";
$data4 = $database->read($query4);

$query5 = "SELECT * FROM personnephysique";
$data5 = $database->read($query5);

$query6 = "SELECT * FROM personnemoral";
$data6 = $database->read($query6);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css" >
    <link rel="icon" href="../../../../../private/src/logo2.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once '../../../../../private/style/headerFormalitees/header.php'; ?>
    <div class="operation">
        <h1>Ajout d'une nouvelle opération.</h1>
        <?php require_once '../../../../../private/formulaireOperation/index.php' ?>
    </div>

    <?php 
    if(!empty($_POST['send'])){
        $id = $_GET['id'];
        $Kilometrage = $_POST['Kilometrage'];
        $DateVente = $_POST['DateVente'];
        $DateDeclaration = $_POST['DateDeclaration'];
        $PresenceCertificat = $_POST['PresenceCertificat'];
        $InformationAssurance = $_POST['InformationAssurance'];
        $CederDestruction = $_POST['CederDestruction'];
        $CertifieSituationAdministrative = $_POST['CertifieSituationAdministrative'];
        $Transformation = $_POST['Transformation'];
        $OppositionUtilisationDonnees = $_POST['OppositionUtilisationDonnees'];
        $CertifieAchat = $_POST['CertifieAchat'];
        $Destruction = $_POST['Destruction'];
        $ville = $_POST['ville'];
        $query2 = "SELECT * FROM ville WHERE Nom='".$ville."' ";
        $data2 = $database->read($query2);
        $NomOperation = $_POST['NomOperation'];
        $vehicule = $_POST['vehicule'];
        $nature = $_POST['nature'];
        $vendeur = $_POST['vendeur'];
        $acheteur = $_POST['acheteur'];
        $NomOperation = $_POST['NomOperation'];
        $query3 = "INSERT INTO `operation` ( `Kilometrage`, `DateVente`, `DateDeclaration`, `PresenceCertificat`, `InformationAssurance`, `CederDestruction`, `CertifieSituationAdministrative`, `Transformation`, `OppositionUtilisationDonnees`, `Destruction`, `CertifieAchat`, `IdVille`, `Nature`, `IdVehicule` ,`Acheteur`, `Vendeur`, `NomOperation`) VALUES ('$Kilometrage', '$DateVente', '$DateDeclaration', '$PresenceCertificat', '$InformationAssurance', '$CederDestruction', '$CertifieSituationAdministrative', '$Transformation', '$OppositionUtilisationDonnees', '$Destruction', '$CertifieAchat', '$ville', '$nature', '$vehicule', '$acheteur', '$vendeur', '$NomOperation');";
        $data3 = $database->read($query3);
        ?>
        <script>
            alert("Bien rajoutée !")
            location.replace("")
        </script>
        <?php
    };
    
    
    ?>


</body>
</html>