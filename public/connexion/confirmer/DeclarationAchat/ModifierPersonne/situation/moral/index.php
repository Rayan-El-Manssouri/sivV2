<?php 
require_once '../../../../../../../private/bdd/connect.php';
$database = new Database();
error_reporting(0);

$query1 = "SELECT * FROM personnemoral";
$data1 = $database->read($query1);

if (!empty($_GET['q2'])){
    $recherche = htmlentities($_GET['q2']);
    $query1 = "SELECT * FROM `personnemoral` WHERE RaisonSocial LIKE '%".$recherche."%' ";
    $data1 = $database->read($query1);
};


error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moral</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
        <?php require_once '../../../../../../../private/style/headerFormaliter/header.php' ?>
        <div>  
            <table  class="content_table">
                <div class="form">
                    <form method="GET">
                        <input type="search" name="q2" placeholder="Rechercher une personne moral." width="80px">
                        <input type="submit" placeholder="Rechercher une personne physique." width="80px">
                        <input type="button" onclick="revenir()" value="Revenir a la page personne physique." width="80px">
                    </form>
                    <script>
                        function revenir(){
                            location.replace("../../index.php")
                        }
                    </script>
                </div>
                <h3 class="titre">Tableaux coresspendant aux personne moral.</h3>
                <thead>
                    <tr>
                        <th>Raison Social</th>
                        <th>Siret</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data1 as $dataV2): ?>
                    <tr>
                        <td><?= $dataV2['RaisonSocial'] ?></td>
                        <td><?= $dataV2['Siret']  ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</body>
</html>