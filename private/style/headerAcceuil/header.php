<header class="header">
    <div>
        <nav class="navigation">
            <span class="logo">Website logo</span>
            <li class="hover"><a href="#">Home</a></li>
            <li><a href="#">Signaler</a></li>
            <li><a href="#">Nous contacter</a></li>
            <li><a href="#">Partenaires</a></li>
        </nav>
        <?php 
            if(est_connecte()){
            ?>
                <a href="http://localhost/sivV2/private/GestionSession/logout.php" style="text-decoration : none;  position: relative; top: 2px;"" class="Connexion">Se déconnecter</a>
            <?php
            }else{
            ?>
                <a href="connexion/connexion.php" style="text-decoration : none; position: relative; top: 2px;" class="Connexion">Se connecter</a>
            <?php
            }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="http://localhost/sivV2/private/javascript/main.js" ></script>
</header>
