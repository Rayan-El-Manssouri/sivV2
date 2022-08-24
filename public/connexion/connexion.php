<?php 
require_once '../../private/bdd/connect.php';
$database = new Database();
require_once '../../private/GestionSession/auth.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="connexion.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Connexion</title>
</head>
<body>
    <?php require_once '../../private/style/headerConnexion/header.php'; ?>
    <?php require_once '../../private/style/connexion/connect.php'; ?>
</body>
</html>