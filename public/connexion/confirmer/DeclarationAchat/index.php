<?php 
    require_once '../../../../private/bdd/connect.php';
    $database = new Database();
    session_start();

    $query = "SELECT * FROM utilisateur WHERE email='".$_SESSION['email']."' ";
    $data = $database->read($query);

    foreach ($data as $dataV2) {
        $email = $dataV2['email'];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <link href="../../../../private/src/logo2.png" rel="icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Panneau d'achat</title>
</head>
<body>
    <div class="contenu">
        <?php require_once '../../../../private/style/headerformalitees/header.php';?>
        <div class="global" style="color: #fff;">
            <p class="Connexion">Connecté en tant que : <?php echo  $email ?></p>
            <span style="position: relative; left: -300px; text-align: left; ">Bienvenue sur le panneau de la déclaration d'achat</span>
            <div class="acheteur">
                <p style="color: #fff;">Gestion des personnes</p>
                <a href="personne/" class="Ajouter"><p>Ajouter</p></a>
                <a href="ModifierPersonne" class="Modifier"><p>Modifier</p> </a>
                <a href="DétailPersonne/index.php" class="Detail"><p>Détails</p></a>
                <a href="" class="Supprimer"><p>Supprimer</p></a>
            </div>
            <div class="acheteur">
                <p style="color: #fff;">Gestion des véhicules</p>
                <a href="" class="Ajouter"><p>Ajouter</p></a>
                <a href="" class="Modifier"><p>Modifier</p></a>
                <a href="" class="Detail"><p>Détail</p></a>
                <a href=""  class="Supprimer"><p>Supprimer</p></a>
            </div>
            <div class="acheteur">
                <p style="color: #fff;">Gestion des opérations</p>
                <a href=""  class="Ajouter"><p>Ajouter</p></a>
                <a href="" class="Modifier"><p>Modifier</p></a>
                <a href="" class="Detail"><p>Détail</p></a>
                <a href="" class="Supprimer"><p>Supprimer</p></a>
            </div>
        </div>
    </div>
</body>
</html>