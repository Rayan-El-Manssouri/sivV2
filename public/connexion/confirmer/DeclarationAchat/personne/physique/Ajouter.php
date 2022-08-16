<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link href="Ajouter.css" rel="stylesheet">
</head>
<body>

        <?php 
            require_once(realpath(dirname(__FILE__) . '../../../../../../connexion/auth.php'));
            require_once(realpath(dirname(__FILE__) . '../../../../../../style/header.php'));
        ?>
                
        
        
        <div class="personnePhysique">
            <h1>Bievenue sur la page pour rajouter une personne physique. </h1>
            <br>
            <br>
            <br>
            <br>
            <p style="position: relative; left: -10px; top: -10px; font-size: 22px;">--------------- Sexe ---------------</p>
            <div class="form">
                <span>Sexe : <label for="M" style="position: relative; left: 10px;" >F</label> <input type="radio" style="position: relative; top: -4px; left: 20px;"  name="Sexe" value="1" ></span>
                <span style="position : relative; left : 30px;"><label for="M">M</label> <input  style="position: relative; top: -4px; left: 10px;" type="radio" name="Sexe" value="0"></span>
            </div>
        </div>
        <div class="deconnecter">
                    <?php 

                    if(!est_connecter()){
                        header("Location: ../../../../../ ");
                    }else{
                        ?>
                            <a href="../../../../../connexion/logout.php">Se déconnecter</a>
                        <?php
                    }
                    
                    ?>

            </div>
        </div>
</body>
</html>