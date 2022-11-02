<?php 
require_once '../../../../../../private/bdd/connect.php';
$database = new Database();

$query2 = "SELECT * FROM `operation`";
$data2 = $database->read($query2);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php require_once '../../../../../../private/style/headerFormalitees/header.php' ?>
    <div class="modification">
        <h1>Bienvenu sur la page modifier une opération</h1>
        <thead>
            <tr>
                <td>Nom de l'opération</td>
            </tr>
        </thead>
        <tbody>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <?php foreach($data2 as $dataV2): ?>
                <td><a href="confirmer/index.php?id=<?=$dataV2['IdOperation']?>"><?= $dataV2['NomOperation'] ?></a></td> <br> <br> <br>
                <?php endforeach; ?>

            </tr>
        </tbody>
    </div>
</body>
</html>