<?php 
session_start();
require_once '../private/GestionSession/auth.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/style/headearAccueil/header.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/style/footer/footer.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/style/FlecheRemonter/fleche.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Siv</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="contenu">
        <!-- Div qui reste en haut de la page. -->
        <div class="container">
            <section class="background">
                <?php  require_once '../private/style/headearAccueil/header.php'; ?>
                <div class="Text_Accueil">
                    <h1 font-weight="bold" >Bienvenue sur le <br> site web siv</h1>
                    <p class="underline">Site simple pour gérer les déclarations.</p>
                        <?php 
                          if(est_connecter()){
                            ?>
                                <a href="connexion/confirmer/panel.php" style="text-decoration : none;" class="button">Aller au panel</a>
                            <?php
                         }else{
                            ?>
                              <a href="connexion/connexion.php" style="text-decoration : none;" class="button">Se connecter</a>
                            <?php
                         }                        
                        ?>
                </div>
            </section>
        </div>
        <!-- Div qui va gérer les forfaits. -->
        <div class="forfait">
           <h1>Nos forfaits</h1>
            <div class="proposition">
                <section>
                    <p class="Pro">Pro</p>
                    <a class="panier">
                        Ajouter au panier
                        <svg class="fleche" fill="currentColor" style="display:inline-block;vertical-align:middle" height="18" width="18" viewBox="0 0 512 512"><g id="Icon_8_"><g><g><path d="M85,277.375h259.704L225.002,397.077L256,427l171-171L256,85l-29.922,29.924l118.626,119.701H85V277.375z"><path d="M85,277.375h259.704L225.002,397.077L256,427l171-171L256,85l-29.922,29.924l118.626,119.701H85V277.375z"></path></path></g></g></g></svg>
                    </a>
                </section>    
            </div>
        </div>
    </div>
    <!-- Flèche fixe pour remonter la page. -->
    <?php require_once '../private/style/FlecheRemonter/fleche.php' ?>
    <!-- Footer. -->
    <?php require_once '../private/style/footer/footer.php' ?>
</body>
</html>