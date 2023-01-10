<?php 

require_once '../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query1 = "SELECT * FROM vehicule";

if (!empty($_GET['q'])){
    $recherche = htmlentities($_GET['q']);
    $query1 = "SELECT * FROM `vehicule` WHERE Immatriculation LIKE '%".$recherche."%' ";
};
$data1 = $database->read($query1);

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
        <button ><a style="color: black;" href="http://localhost/siv/public/connexion/confirmer/">Retour</a></button>
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
                <?php foreach($data1 as $dataV2): ?>
                <tr><a href="confirmer/index.php?id=<?= $dataV2['IdVehicule']?>"><?= $dataV2['Immatriculation'] ?></a></tr> <br> <br>
                <?php endforeach; ?>
            </tbody>

        </div>
    </div>
</body>
</html>