<?php 
        require_once '../../../../../private/bdd/connect.php';
        $database = new Database();
        require_once '../../../../../private/GestionSession/auth.php';
        session_start();
        error_reporting(0);
        $query5 = "SELECT * FROM operation ";
        $data5 = $database->read($query5);

        $query6 = "SELECT * FROM fomalite";
        $data6 = $database->read($query6);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../../../../private/src/logo.png" >
    <link rel="stylesheet" href="./Formalites.css" >
    <title>Siv - Formaliter </title>
</head>
<body>
        <?php 
            require_once '../../../../../private/style/headerFormalitees/header.php';
        ?>
        <div class="formaliter">
            <h1>Choisiser une opération</h1>
                <?php foreach($data5 as $dataV2): ?>
                    <div class="td_operation">
                        <p><?= $dataV2['NomOperation'] ?></p>
                            <a href="Mandat/Mandat.php?id=<?=$dataV2['IdOperation']?>&formaliter=<?=$dataV2['formaliter']?>" target="_blank">mandat</a>
                            <a href="./Declaration_de_immatriculation/Declaration_de_immatriculation.php" target="_blank">Déclaration d'immatriculation</a>
                            <a href="./Declaration_de_cession/Declaration_de_cession.php" target="_blank">Déclaration de cession</a>
                            <a href="Mandat/Mandat.php?id=<?=$dataV2['IdOperation']?>&formaliter=<?=$dataV2['formaliter']?>" target="_blank">Déclaration d'achat</a>
                    </div>
                <?php endforeach; ?>

</body>
</html>