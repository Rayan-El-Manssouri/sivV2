<?php
session_start();

if(est_connecte()){
    header("Location: ../index.php");
}
?>
<div class="formulaire">
        <h1>Connectez-vous.</h1>
        <form method="POST">
            <div>
               <span>Email : <input type="text" class="email" name="email" placeholder="email" required> </span>
               <span>Mot de passe : <input type="text" class="password" name="password" placeholder="password" required></span>
                <input type="submit"  name="send" class="btn_envoyer"> <br>
                <span style="position: relative; top: -75px;"> <?php echo  $_GET['status'] ?></span>
            </div>
        </form>
        <?php 
            if(!empty($_POST['send'])){
                $email = htmlentities($_POST['email']);
                $password = htmlentities($_POST['password']);
                $query = "SELECT * FROM utilisateur WHERE BINARY email='".$email."' AND BINARY password='".$password."' ";
                $data = $database->read($query);
                if(!empty($data[0])){
                    ?>
                    <div class="alert">
                        <script>
                            alert("Tous est bon !")
                        </script>
                    </div>
                    <?php
                    $_SESSION['email'] = $data[0]["email"];
                    $_SESSION['id'] = $data[0]["IdUtilisateur"];
                    $_SESSION['message'] = 1;
                    $_SESSION['connecte'] = 1;
                    ?>
                    <script>
                        location.replace("http://localhost/sivV2/public/index.php?status=ok");
                    </script>
                    <?php
                    die();
                }
            }
        ?>
</div>
