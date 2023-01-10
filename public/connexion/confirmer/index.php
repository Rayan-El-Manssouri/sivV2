<?php 
    require_once '../../../private/bdd/connect.php';
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
    <link href="index.css" rel="stylesheet">
    <link href="../../../private/src/logo.png" rel="icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Siv - Panneau</title>
</head>
<body>
    <div class="contenu">
        <?php require_once '../../../private/style/headerformalitees/header.php';?>
        <div class="global" >
            <p>Bienvenue sur le panneau de la déclaration d'achat</p>
            <div>
                <h1>Géré les personnes</h1>
                <ul>
                    <li><a href="./GestionPersonne/AjouterPersonne">Ajouter</a></li>
                    <li><a href="./GestionPersonne/ModifierPersonne/">Modifier</a></li>
                    <li><a href="./GestionPersonne/DétailPersonne/">Détail</a></li>
                    <li><a href="./GestionOperation/SupressionOperation/">Suprimmer</a></li>
                </ul>
            </div>
            <div>
                <h1>Géré les véhicules</h1>
                <ul>
                    <li><a href="./GestionVehicule/">Ajouter</a></li>
                    <li><a href="./GestionVehicule/ModifierVehicule/">Modifier</a></li>
                    <li><a href="./GestionVehicule/DetailVehicule/">Détail</a></li>
                    <li><a href="./GestionVehicule/SuprimmerVehicule/">Suprimmer</a></li>
                </ul>
            </div>
            <div>
                <h1>Géré les opérations</h1>
                <ul>
                    <li><a href="./GestionOperation/">Ajouter</a></li>
                    <li><a href="./GestionOperation/ModifierOperation">Modifier</a></li>
                    <li><a href="./GestionOperation/DetailOperation/">Détail</a></li>
                    <li><a href="./GestionOperation/SupressionOperation/">Suprimmer</a></li>
                </ul>
            </div>
            <div>
                <h1>Générer les pdf</h1>
                <ul>
                    <li><a href="./GestionFormalite/Formalites/Formalites.php">Générer pdf Formalites</a></li>

                </ul>
            </div>

        
        </div>
    </div>
</body>
</html>