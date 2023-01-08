<?php 
    require_once '../../../../../private/bdd/connect.php';
    $database = new Database();
    error_reporting(0);

    $query = "SELECT * FROM personnephysique";
    $data = $database->read($query);

    if (!empty($_GET['q'])){
        $recherche = htmlentities($_GET['q']);
        $query = "SELECT * FROM `personnephysique` WHERE Nom LIKE '%".$recherche."%' ";
        $data = $database->read($query);
    };
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siv - Modifier</title>
    <link href="index.css" rel="stylesheet">
    <link href="../../../../../private/src/logo2.png" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php require_once '../../../../../private/style/headerformalitees/header.php'; ?>
    <div class="g_global">
        <h1>Bienvenue sur le panneau pour modifier une personne</h1>
        <br>
        <br>
        <a href="situation/morale/"><button> Aller aux personne morale.</button></a>
        <br>
        <div id="1">
            <br>
            <p>Tableaux correspondant aux personnes physiques :</p>
            <table  class="content_table">
                <br>
                <form method="GET">
                    <input type="search" name="q" placeholder="Rechercher une personne physique." width="80px">
                    <input type="submit" width="80px">
                    <script>
                        function revenir(){
                            location.replace("http://localhost/sivV2/public/connexion/confirmer/")
                        }
                    </script>
                    <input type="button" value="Revenir en arriére" width="80px" onclick="revenir()">
                </form>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nom d'usage</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                    </tr>
                </thead>
                <tbody>
               <?php  foreach ($data as $dataV2): ?>
                    <tr>
                        <td><a href="confirmation/physique/confirmation.php?id=<?=$dataV2['IdPersonnePhysique']?>"><?=  $dataV2['Nom'] ?></a> </td>
                        <td><?= $dataV2['Nomdusage'] ?></td>
                        <td><?= $dataV2['Prenom'] ?></td>
                        <td><?=  $dataV2['DateDenaissance']?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $("#personne")
            .on("change", function(e){
                e.preventDefault();
                window.location.href = "http://localhost/sivV2/public/connexion/confirmer/ModifierPersonne/situation/" + $(this).val();
        })
    </script>
</body>
</html>