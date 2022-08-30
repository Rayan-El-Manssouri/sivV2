<div class="formulaire">
        <h1>Connectez-vous.</h1>
        <form method="POST">
            <div>
               <span>Email : <input type="text" class="email" name="email" placeholder="Email" required> </span><br> <br>
               <span>Mot de passe : <input type="text" class="password" name="password" placeholder="Mot de passe" required></span>
                 <br> <br>
                    <br>
                <input type="submit"  name="send" class="btn_envoyer"> <br>
            </div>
        </form>
        <?php 
            if(!empty($_POST['send'])){
                $email = htmlentities($_POST['email']);
                $password = htmlentities($_POST['password']);
                $query = "SELECT * FROM utilisateur WHERE BINARY email='".$email."' AND BINARY password='".$password."' ";
                $data = $database->read($query);
                if(!empty($data[0])){
                    $_SESSION['email'] = $data[0]["email"];
                    $_SESSION['id'] = $data[0]["IdUtilisateur"];
                    $_SESSION['connecte'] = 1;
                    ?>
                    <script>
                        location.replace("http://localhost/sivV2/public/connexion/connexion.php");
                    </script>
                    <?php
                    die();
                }else{
                    ?>
                    <script>
                        alert("L'email ou le mot de passe est incorrect.")
                        location.replace("")
                    </script>
                    <?php
                }
            }
        ?>
</div>
