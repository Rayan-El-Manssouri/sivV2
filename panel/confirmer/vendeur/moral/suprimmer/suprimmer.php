<?php 
error_reporting(0);
session_start();
require_once '../../../../../Gestion bdd/connect.php';
$database = new Database;

$query = "SELECT * FROM vendeur WHERE PhysiqueMorale=1 AND IdUtilisateur='".$_SESSION['id']."'";
$data = $database->read($query);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link href="suprimmer.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet">
    <?php 
        $query = "SELECT * FROM `vendeur` WHERE  PhysiqueMorale=1 AND IdUtilisateur='".$_SESSION['id']."' ";
        if (!empty($_GET['q'])){
            $recherche = htmlentities($_GET['q']);
            $query = "SELECT * FROM `vendeur` WHERE  PhysiqueMorale=1 AND IdUtilisateur='".$_SESSION['id']."' AND RaisonSocial LIKE '%".$recherche."%' ";
        };
        $data = $database->read($query);
        $i = 0;
        ?>
</head>
<body>
    <header>
        <nav>
            <div class="hamburg">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="symbole">
                Website logo
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Se déconnecter</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Forum</a></li>
                </ul>
            </div>
        </nav>
    </header>
        <form method="GET" class="search">
            <div>
                <input type="text" name="q"  class="form-control" placeholder="Rechercher avec le nom de l'utilisateur !" autocomplete="off" />
                <input type="submit" class="Bouton"/>
            </div>
        </form>
        <a class="Bouton_renvoyer" href="../../../panel.php?id=<?= $_SESSION['id'];  ?>">
            <button onclick="revenir()">Revenir a la page principale</button>
        </a>
    <div class="affichage">
        <?php foreach($data as $dataV2): ?>
                <br>
                <table>
                    <td>Nom :</td>
                    <td><?= $dataV2['RaisonSocial'] ?></td>
                    <td><a href="confirmation_suprimmer/supression.php?id=<?=$dataV2['IdVendeur']?>">supprimer</a></td>
                </table>
                <br>
        <?php endforeach;?>
    </div>
    <script>
        function revenir(){
            location.replace("../panel.php?id=<?= $_SESSION['id']?>")
        }
    </script>
</body>
</html>