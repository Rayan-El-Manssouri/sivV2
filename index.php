<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Siv</title>
</head>
<body>


    <div class="contenu">

        <div class="container">
            <section class="background">
    
                <header class="header">
                    <div>
                        <nav class="navigation">
                            <span class="logo">Website logo</span>
                            <li class="hover"><a href="#">Home</a></li>
                            <li><a href="#">Signaler</a></li>
                            <li><a href="#">Nous contacter</a></li>
                            <li><a href="#">Partenaire</a></li>
                        </nav>
                        <a href="connexion/connect" style="text-decoration : none;" class="Connection">
                            Se connecter
                        </a>
                    </div>
                </header>
                <div class="Text_Acceuille">
                    <h1 font-weight="bold" >Bienvenue sur le <br> site web siv</h1>
                    <p class="unederline">Site simple pour gérer les déclarations.</p>
                    <a href="connexion/connect" class="button">
                        se connecter !
                        <svg class="fleche" fill="currentColor" style="display:inline-block;vertical-align:middle" height="18" width="18" viewBox="0 0 512 512"><g id="Icon_8_"><g><g><path d="M85,277.375h259.704L225.002,397.077L256,427l171-171L256,85l-29.922,29.924l118.626,119.701H85V277.375z"><path d="M85,277.375h259.704L225.002,397.077L256,427l171-171L256,85l-29.922,29.924l118.626,119.701H85V277.375z"></path></path></g></g></g></svg>
                    </a>
                </div>
            </section>
    
        </div>
        <div class="forfait">
           <h1>Nos fofait</h1>
            <div class="proposition">
                <section>
                    <p class="Pro">Pro</p>
                    <a class="panier">
                        Ajouter aux panier
                        <svg class="fleche" fill="currentColor" style="display:inline-block;vertical-align:middle" height="18" width="18" viewBox="0 0 512 512"><g id="Icon_8_"><g><g><path d="M85,277.375h259.704L225.002,397.077L256,427l171-171L256,85l-29.922,29.924l118.626,119.701H85V277.375z"><path d="M85,277.375h259.704L225.002,397.077L256,427l171-171L256,85l-29.922,29.924l118.626,119.701H85V277.375z"></path></path></g></g></g></svg>
                    </a>
                </section>    
            </div>
        </div>




    </div>
    <script>
        $(document).ready(function(){
                window.addEventListener("scroll" , function(){
                    var header = document.querySelector(".header")
                    var text = document.querySelector(".navigation")
                    var hover = document.querySelector(".hover")
                    var logo = document.querySelector(".logo")
                    header.classList.toggle("sticky", window.scrollY > 0)
                    text.classList.toggle("text", window.scrollY > 0)
                    hover.classList.toggle("active", window.scrollY > 0)
                    logo.classList.toggle("active", window.scrollY > 0)
                })
        });
    </script>
  <!-- Footer -->
    <footer>
       <div class="contenu-footer">
            <div class="bloc footer-services">
                 <h3>Nos services</h3>
                 <ul class="listes-services">
                    <li><a href="">Annonce </a></li>
                    <li><a href="">Gestion pdf </a></li>
                    <li><a href="">Affichette </a></li>
                 </ul>
            </div>

            <div class="bloc footer-contact">
                <h3>Restons on contact</h3>
                <p>55-55-55-55-55</p>
                <p>support@contact.com</p>
           </div>

           
         

           <div class="bloc footer-reseaux">
                <h3>Nos réseaux</h3>
                <ul class="listes-services">
                <li><a href="">Facebook </a></li>
                <li><a href="">Instagram </a></li>
                <li><a href="">Youtube </a></li>
                </ul>
            </div>

            <div class="bloc footer-reseaux">
                <h3>Signaler</h3>
                <form method="post">
                    <input type="text"  placeholder="Message">
                    <input type="submit" name="send">
                </form>
                <p>Signaler un bug.</p>
                </ul>
            </div>
            <?php 
            
            if(isset($_POST['send'])){
                ?>
                <script>
                    location.replace("")
                </script>
                <?php
            }
            
            ?>
       </div>
       </div>
       <div class="copyright" style="text-align: center;">
        <p>© Copyright 2022 sinara</p>
    </div>

    </footer>

   


</body>
</html>