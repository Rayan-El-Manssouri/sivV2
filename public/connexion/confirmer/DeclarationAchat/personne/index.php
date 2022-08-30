<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnes</title>
    <link href="index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php 
     require_once dirname( __DIR__ ) . '../../../../../private/style/headerFormaliter/header.php';
    ?>
        <div class="global">
            <h1>Bienvenue sur la page personnes</h1>
            <div class="button">
                <h2>Quel type de personne voulez-vous rajouter ?</h2>
                <div class="BtnPrincipal">
                    <button class="personnePhysique" onclick="Physique()"><span>Personne physique</span></button>
                    <button class="personneMoral" onclick="moral()"><span>Personne morale</span> </button>
                </div>
            </div>
        </div>
        <script>
            function Physique(){
                location.replace("physique/Ajouter.php")
            }

            function moral(){
                location.replace("moral/moral.php")
            }
        </script>
</body>
</html>