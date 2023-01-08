<?php 
  require_once dirname( __DIR__ ) . '../../../../../../private/bdd/connect.php';
  $database = new Database();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siv - Personne - Ajouter - Physique</title>
    <link href="Ajouter.css" rel="stylesheet" />
    <link href="../../../../../../private/src/logo2.png" rel="icon" />
    <link href="../../../../../../private/style/footer/footer.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../../../../private/javascript/sticky.js"></script>
</head>   
<body>
    <?php 
        require_once dirname( __DIR__ ) . '../../../../../../private/GestionSession/auth.php';
        require_once dirname( __DIR__ ) . '../../../../../../private/style/headerformalitees/header.php';
      
    ?>
    <div class="personnePhysique">
        <?php require_once dirname( __DIR__ ) . '../../../../../../private/formulairePersonne/physique.php'; ?>
    </div>
    <div>
    </div>
</body>
</html>

