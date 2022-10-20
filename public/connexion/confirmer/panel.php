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
<<<<<<< HEAD
    <?php echo '<link href="http://localhost/sivV2/private/style/headerConnexion/header.css" rel="stylesheet" type="text/css" />';  ?>
</head>
<body>
    <div class="contenu">
    <?php require_once '../../../private/style/headerConnexion/header.php'; ?>
=======
    <?php echo '<link href="http://localhost/sivV2/private/style/headerConnexion/header.css" rel="stylesheet" type="text/css" />';?>
</head>
<body>
    <div class="contenu">
        <?php require_once '../../../private/style/headerConnexion/header.php'; ?>
>>>>>>> main
        <div>
            <h1 style="position: relative; left: 750px; top: 250px; color: #fff;">Choisissez votre formalité :</h1>
            <div class="choix">
                <a href="DeclarationAchat/">
<<<<<<< HEAD
                    <button>Déclaration achat</button>
=======
                    <button>Déclaration d'achat</button>
>>>>>>> main
                </a>
                <a href="">
                    <button>Déclaration de cession</button>
                </a>
                <a href="">
<<<<<<< HEAD
                    <button>Demande d'Immatriculation</button>
=======
                    <button>Demande d'immatriculation</button>
>>>>>>> main
                </a>
            </div>
        </div>
    </div>
</body>
</html>