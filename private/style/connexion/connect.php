<style>
    .formulaire h1{
        position: absolute;
        top: -100px;
    }

    .formulaire span{
        font-size: 20px;
    }

    .formulaire{
        position: relative;
        top: -600px;
        right: 50px;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        
        

    }

    .formulaire input{
        padding: 10px;
        position: relative;
    }

    .formulaire .email{
        position: relative;
        left: 93px;
    }


    .formulaire .btn_envoyer{
        background-color: #fff;
        border: none;
        border-radius: 30px;
        padding: 20px;
        position: relative;
        top: 20px;
        left: 100px;
        width: 110px;
        cursor: pointer;
        transition: all 0.35s ease-in-out;
    }
    .formulaire .btn_envoyer:hover{
        background-color: black;
        color: #fff;
    }
    .formulaire .password{
        position: relative;
        left: 20px;
    }
    .formulaire .form .input{
        position: relative;
        top: 0;
        width: 100%;
        height: 100%;
        font-size: 1rem;
        border-radius: .5rem;
        border: 1px solid #ccc;
        outline: none;
        background-color: none;
        padding: 1rem;
    }
    .formulaire .form{
        position: relative;
        top: 100px;
    }
</style>

<div class="formulaire">
        <h1>Connectez-vous</h1>
        <form method="POST">
            <div>
               <span>Email : <input type="text" class="email" name="email" placeholder="Email" required> </span><br> <br>
               <span>Mot de passe : <input type="text" class="password" name="password" placeholder="Mot de passe" required></span>
                 <br> <br>
                 <?php echo $_GET['status']; ?>
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
                        location.replace("http://localhost/sivV2/public/connexion/connexion.php?status=ok");
                       
                    </script>
                    <?php
                    die();
                }else{
                    ?>
                    <script>
                        alert("Email ou le mot de passe est incorect.")
                        location.replace("")
                    </script>
                    
                    <?php
            }
            }
        ?>

                        <?php 
                        if($_GET['status'] == "ok"){
                            ?>
                            <script>
                                location.replace("http://localhost/sivV2/public/connexion/confirmer/panel.php");
                            </script>
                            <?php
                        }
                        ?>
</div>
