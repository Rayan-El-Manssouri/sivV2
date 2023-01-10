<?php 

require_once '../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query = "SELECT * FROM vehicule";

if (!empty($_GET['q'])){
    $recherche = htmlentities($_GET['q']);
    $query = "SELECT * FROM `vehicule` WHERE Immatriculation LIKE '%".$recherche."%' ";
};
$data = $database->read($query);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Siv - Modifier</title>
    <link href="index.css" rel="stylesheet">
    <link href="../../../../../private/src/logo.png" rel="icon">
</head>
<body>
    <?php require_once '../../../../../private/style/headerFormalitees/header.php';?>
    <div class="form">
        <h1>Bienvenue sur la page modifier un véhicule</h1>
        <span>Rechercher un véhicule</span>
        <form method="GET">
            <input type="text" name="q" placeholder="rechercher un véhicule">
            <input type="submit">
        </form>
        <button ><a style="color: black;" href="http://localhost/sivV2/public/connexion/confirmer/">Retour</a></button>
        <br>
        <br>
        <div class="vehicule">
            <thead>
                <tr>
                    <td>Immatriculation</td>
                </tr>
            </thead>
            <br>
            <br>
            <tbody>
                <?php foreach($data as $dataV2): ?>
                <tr><a href="confirmer/index.php?id=<?= $dataV2['IdVehicule']?>"><?= $dataV2['Immatriculation'] ?></a></tr> <br> <br>
                <?php endforeach; ?>
            </tbody>
            <?php 
            if($_GET['message'] == 'ok'){
                ?>
                <script>
                    alert("Véhicule bien suprimmer !")
                </script>
                <?php
            }
            
            
            ?>
        </div>
    </div>
</body>
</html>