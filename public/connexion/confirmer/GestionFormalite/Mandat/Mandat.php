<?php 
        require_once '../../../../../private/bdd/connect.php';
        $database = new Database();
        require_once '../../../../../private/GestionSession/auth.php';
        session_start();
        error_reporting(0);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../../../../private/src/logo2.png" >
    <link rel="stylesheet" href="./Mandat.css" >
    <title>Siv - Formaliter - Mandat</title>
</head>
<body>
        <?php 
            require_once '../../../../../private/style/headerFormalitees/header.php';
        ?>
</body>
</html>