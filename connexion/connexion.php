<?php 
require_once '../bdd/connect.php';
$database = new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="connexion.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Connection</title>
</head>
<body>
    <div class="contenu">
        <section class="background">
            <header class="header">
                <div>
                    <nav class="navigation">
                        <span class="logo">Website logo</span>
                        <li class="hover"><a href="../Home">Home</a></li>
                        <li><a href="#">Signaler</a></li>
                        <li><a href="#">Nous contacter</a></li>
                        <li><a href="#">Partenaire</a></li>
                    </nav>
                </div>
            </header>
        </section>
    </div>
    <div class="formulaire">
        <form method="POST" class="form">
            <h1>Se connecter</h1>
            <div>
                <input type="text" class="input" placeholder="Email" name="email"><br><br>
                <input type="text" class="input" placeholder="Mot de passe" name="password"><br><br>
            </div>
            <input class="valider" name="send" type="submit" value="Continuer">
            <a href="#" class="lien">
                Inscription
            </a>
            <div class="reseaux">
                <a href="">
                    <button>Se connecter avec google</button>
                </a>
            </div>
        </form>

        <?php 
        
        if(!empty($_POST['send'])){
            $email = htmlentities($_POST['email']);
            $password = htmlentities($_POST['password']);
            $query = "SELECT * FROM utilisateur WHERE BINARY email='".$email."' AND BINARY password='".$password."' ";
            $data = $database->read($query);
            if(!empty($data[0])){
                echo "ok";
                session_start();
                $_SESSION['email'] = $data[0]["email"];
                $_SESSION['id'] = $data[0]["IdUtilisateur"];
                header("location:confirmer/panel.php");
                die();
            }else{
                ?>
                <script>
                    alert("Email ou le mot de passe est incorect.")
                    location.replace("connexion");
                </script>
                <?php
            }
        }
        ?>
    </div>
</body>
</html>