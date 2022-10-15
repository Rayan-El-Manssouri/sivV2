<?php 
require_once '../../../../../../../../private/bdd/connect.php';
$database = new Database();

$query = "SELECT * FROM personnemoral WHERE IdPersonneMoral='".$_GET['id']."' ";
$data = $database->read($query);

foreach($data as $dataV2):
    $RaisonSocial = $dataV2['RaisonSocial'];
    $Siret = $dataV2['Siret'];
endforeach;    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siv - confirmation - modif</title>
    <link rel="stylesheet" href="index.css" >
</head>
<body>
    <?php require_once '../../../../../../../../private/style/headerFormalitees/header.php'?>
    <div class="contenaire">
        <h1>Bienvenue sur la page de modification d'une personne moral</h1>
        <form method="POST">
            <div class="contenu">
                <br>
                <br>
                <br>
                <h3>Identitée de l'entreprise </h3>
                <br>
                <div>
                    <span>Raison social : <input type="text" value="<?= $RaisonSocial ?>" ></span> <br> <br>
                    <span>Siret : <input type="text" value="<?= $Siret ?>" ></span>
                </div>

            </div>
        </form>
    </div>
</body>
</html>