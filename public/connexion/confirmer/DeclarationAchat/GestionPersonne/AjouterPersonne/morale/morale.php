<?php 
      require_once dirname( __DIR__ ) . '../../../../../../../private/bdd/connect.php';
      $database = new Database();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morale</title>
    <link href="morale.css" rel="stylesheet">
    <link href="../../../../../../../private/src/logo2.png" rel="icon">
</head>
<body>
    <?php         
        require_once dirname( __DIR__ ) . '../../../../../../../private/style/headerFormalitees/header.php';
  
    ?>
    <div style="position: relative; left: 900px; top: 100px;">
        <h1>Bienvenue sur la page pour rajouter une personne morale</h1>
        <br>
        <?php  require_once dirname( __DIR__ ) . '../../../../../../../private/formulaireMorale/formulairemorale.php'; ?>
    </div>
</body>
</html>