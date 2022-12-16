<?php 
error_reporting(0);
require_once '../Gestion bdd/connect.php';
$database = new Database;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="index.css" rel="stylesheet"> 
</head>
<body>
    <div class="inscription">
        <p>Se connecter</p>
        <form method="POST" >
            <input type="text" placeholder="email" name="email"><br>
            <br>
            <input type="password" placeholder="Mot de passe" name="mdp"><br>
            <br>
            <input type="submit" class="button" name="send" >
        </form>
        <?php 
        if(isset($_POST['send'])){
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $query = "SELECT * FROM utilisateur WHERE BINARY email='$email' AND BINARY password='$mdp' ;";
            $data = $database->read($query);
            if(!empty($data[0])){
                echo "ok";
                session_start();
                $_SESSION['email'] = $data[0]["email"];
                $_SESSION['id'] = $data[0]["IdUtilisateur"];
                header("location:confirmer/panel.php");
                die();
            }else{
                echo "rien";
                ?>
                <script>
                    location.replace("index.php");
                </script>
                <?php
            }
        }
        echo $data;
     

        ?>
    </div>
</body>
</html>