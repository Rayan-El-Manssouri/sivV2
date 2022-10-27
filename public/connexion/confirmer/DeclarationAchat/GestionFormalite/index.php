<?php 
require_once '../../../../../private/bdd/connect.php';
$database = new Database();

$query1 = "SELECT * FROM `operation`";
$data1 = $database->read($query1);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" >
    <title>Document</title>
</head>
<body>
    <?php require_once '../../../../../private/style/headerFormalitees/header.php'; ?>
    <form action="" target="_blank" method="POST">
        <div class="operation">
        <span>Chosisser votre opération :</span> <select name="">
            <option></option>
            <?php foreach($data1 as $dataV2): ?>
            <option><?=$dataV2['NomOperation']?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Mandat" name="mandat">
        <input type="submit" value="Certificat de cession">
        <input type="submit" value="Déclaration achat">
    </form>

    <?php 
    if(isset($_POST['mandat'])){
        header("Location: Mandat/traitement.php");
    }
    
    
    ?>

    </div>
    
</body>
</html>