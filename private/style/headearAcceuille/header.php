<header class="header">
    <style>
        .header{
            position: fixed;
            top: -20px;
            left: 0px;
            width: 100%;
            transition: all 0.35s ease-in-out 0s;
            padding: 30px 0px;
            height: 80px;
            z-index: 1000000;
        }
        .header .navigation.text{
            position: relative;
            top: 50px;
        }
        .header .navigation.text li a{
            color: black;
        }
        .header .navigation .hover.active li{
            color: rgb(16, 137, 255);
        }
        .header .navigation{
            display: flex;
            list-style: none;   
            width: 100%;
            position: relative;
            left: 360px;
            top: 40px;
        }
        .header .navigation li a{
            text-decoration: none;
        }
        .header .navigation li a{
            text-align: right;
            padding: 20px;
            color: aliceblue;
            position: relative;
            left: 100px;
        }
        .header .navigation span{
            color: aliceblue;
            font-size: 20px;
        }
        .header.sticky{
            background-color: #fff;
            position: fixed;
            padding: 5px 10px;
            height: 90px;
        }

        .Connection:hover{
            color: #fff;
            background-color: black;
        }

    </style>


    <div>
        <nav class="navigation">
            <span class="logo">Website logo</span>
            <li class="hover"><a href="#">Home</a></li>
            <li><a href="#">Signaler</a></li>
            <li><a href="#">Nous contacter</a></li>
            <li><a href="#">Partenaire</a></li>
        </nav>
                             <?php 
                             if(est_connecter()){
                                ?>
                                    <a href="connexion/logout.php" style="text-decoration : none;" class="Connection">Se déconnecter</a>
                                <?php
                             }else{
                                ?>
                                  <a href="connexion/connexion.php" style="text-decoration : none;" class="Connection">Se connecter</a>
                                <?php
                             }
                             ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="http://localhost/sivV2/private/javascript/main.js" ></script>
</header>
