<?php 
require_once '../../../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query = "SELECT * FROM personnephysique";
$data = $database->read($query);





error_reporting(0);

if (!empty($_GET['q'])){
    $recherche = htmlentities($_GET['q']);
    $query = "SELECT * FROM `personnephysique` WHERE Nom LIKE '%".$recherche."%' ";
    $data = $database->read($query);

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modfier</title>
    <link href="index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php require_once '../../../../../../../private/style/headerFormaliter/header.php'; ?>
    <div class="g_global">
        <h1>Bievenue sur le panel pour modifer une personne.</h1>
        <br>
        <br>
            <span>Sélectionner le type de personne.</span> <select id="personne" name="">
                <option value="null">Sélectionner.</option>
                <option value="moral">personne moral</option>
            </select>
            <br>

        <div id="1">
        <br>

        <p>Tableaux coresspendant aux personne physique.</p>
            <table  class="content_table">
                <br>
                <form method="GET">
                    <input type="search" name="q" placeholder="Rechercher une personne physique." width="80px">
                    <input type="submit" placeholder="Rechercher une personne physique." width="80px">
                </form>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nom usage</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                    </tr>
                </thead>
                <tbody>
               <?php  foreach ($data as $dataV2): ?>
                    <tr>
                        <td><?=  $dataV2['Nom'] ?></td>
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
            window.location.href = "http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/ModifierPersonne/situation/" + $(this).val();
        })
    </script>
</body>
</html>