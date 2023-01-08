<?php 
    session_start();
    require_once '../../../../../private/bdd/connect.php';
    $database = new Database();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnes</title>
    <link href="index.css" rel="stylesheet">
    <link href="../../../../../private/src/logo2.png" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body >
    <?php
        require_once dirname( __DIR__ ) . '../../../../../private/style/headerFormalitees/header.php';
    ?>
    <div class="global">
        <h1>Bienvenue sur la page personnes</h1>
        <div class="button">
            <h2>Quel type de personne voulez-vous rajouter ?</h2>
            <div class="BtnPrincipal">
                <button class="personnePhysique" onclick="Physique()"><span>Personne physique</span></button>
                <button class="personneMoral" onclick="moral()"><span>Personne morale</span> </button>
            </div>
        </div>
    </div>
    <script>
        function Physique(){
            location.replace("physique/Ajouter.php")
        }

        function moral(){
            location.replace("morale/morale.php")
        }
    </script>
</body>
</html>