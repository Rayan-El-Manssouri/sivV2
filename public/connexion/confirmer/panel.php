<?php 
    require_once '../../../private/GestionSession/auth.php';
    session_start();
    if(!est_connecte()){
        header("Location: ../connexion.php");
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="http://localhost/sivV2/private/style/common.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/src/logo2.png" rel="icon">
    <title>Panneau</title>
</head>
<body>
    <?php require_once '../../../private/php/sidebar.php'; ?>
    <div id="content">
        <header>
            <h1>Panneau</h1>
            <em>Bienvenue dans l'espace central de gestion.</em>
        </header>
        <section>
            <p>Message pour Rayan : il faudra voir quelles données mettre ici. :/</p>
            <p>Dans tout le projet : penser à finir de relier le back et le front & supprimer les anciens fichiers devenus inutiles que j'ai voulu garder pour toi.</p>
        </section>
        <?php require_once '../../../private/php/footer.php'; ?>
    </div>
</body>
</html>