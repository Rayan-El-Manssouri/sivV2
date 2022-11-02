<?php 
    require_once '../../private/bdd/connect.php';
    $database = new Database();
    require_once '../../private/GestionSession/auth.php';
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="http://localhost/sivV2/private/style/common.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/src/logo2.png" rel="icon">
    <title>Connexion</title>
</head>
<body>
    <div id="side_background">
        <div></div>
    </div>
    <div id="content">
        <div class="form">
            <header>
                <img src="http://localhost/sivV2/private/src/logo2.png">
                <h1>Connectez-vous</h1>
            </header>
            <section>
                <form method="post">
                    <input type="text" name="email" required placeholder="Identifiant">
                    <input type="password" name="password" required placeholder="Mot de passe">
                    <p class="error_message"><?=$_GET['error']?></p>
                    <input type="submit" name="send" value="Se connecter">
                </form>
            </section>
        </div>
    </div>

    <?php 
            if(!empty($_POST['send'])){
                $email = htmlentities($_POST['email']);
                $password = htmlentities($_POST['password']);
                $query = "SELECT * FROM utilisateur WHERE BINARY email='".$email."' AND BINARY password='".$password."' ";
                $data = $database->read($query);
                if(!empty($data[0])){

                    $_SESSION['email'] = $data[0]["email"];
                    $_SESSION['id'] = $data[0]["IdUtilisateur"];
                    $_SESSION['message'] = 1;
                    $_SESSION['connecte'] = 1;
                    ?>
                    <script>
                        location.replace("confirmer/panel.php");
                    </script>
                    <?php
                    die();
                }else{
                    ?>
                    <script>
                        location.replace("http://localhost/sivV2/public/connexion/login.php?error=Mot de passe ou email incorrect Veuillez réessayer.")
                    </script>
                    <?php
                }
            }
        ?>
</body>
</html>