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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="panel.css" rel="stylesheet">
    <link href="../../../private/src/logo2.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panneau</title>
    <?php echo '<link href="http://localhost/sivV2/private/style/headerConnexion/header.css" rel="stylesheet" type="text/css" />';?>
</head>
<body>
    <div class="contenu">
        <?php require_once '../../../private/style/headerConnexion/header.php'; ?>
        <div>
            <h1 style="position: relative; left: 750px; top: 250px; color: #fff;">Choisissez votre formalité :</h1>
            <div class="choix">
                <a href="DeclarationAchat/">
                    <button>Déclaration d'achat</button>
                </a>
                <a href="">
                    <button>Déclaration de cession</button>
                </a>
                <a href="">
                    <button>Demande d'immatriculation</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>