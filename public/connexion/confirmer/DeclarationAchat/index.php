<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Panel Achat</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="contenue">
    <?php 
        require_once '../../../../private/style/headerFormaliter/header.php';
    ?>
        <div class="global">
            <span style="position: relative; left: -300px; text-align: left; color: #fff;">Bievenue sur le panel de la déclaration d'achat !</span>
            <div class="acheteur">
                <p style="color: #fff;">Gestion de personnes</p>
                <a href="personne/" class="Ajouter"><p>Ajouter</p></a>
                <a href="" class="Modifier" ><p>Modifier</p> </a>
                <a href="" class="Detail"><p>Détail</p> </a>
                <a href="" class="Suprimmer" ><p>Suprimmer</p> </a>
            </div>
            <br>
            <br>
            <br>
            <div class="acheteur">
                <p style="color: #fff;">Gestion du véhicules</p>
                <a href="" class="Ajouter"><p>Ajouter</p></a>
                <a href="" class="Modifier"><p>Modifier</p></a>
                <a href="" class="Detail"><p>Détail</p></a>
                <a href=""  class="Suprimmer"><p>Suprimmer</p></a>
            </div>
            <br>
            <br>
            <br>
            <div class="acheteur">
                <p style="color: #fff;">Gestion d'opérations</p>
                <a href=""  class="Ajouter"><p >Ajouter</p></a>
                <a href="" class="Modifier"><p>Modifier</p></a>
                <a href="" class="Detail"><p>Détail</p></a>
                <a href="" class="Suprimmer"><p>Suprimmer</p></a>
            </div>
        </div>
    </div>
</body>
</html>