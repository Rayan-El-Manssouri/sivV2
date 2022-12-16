<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link href="panel.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet"> 
</head>

<header>
      <nav>
                    <div class="hamburg">
                            <i class="fa fa-bars fa-2x" ></i>
                    </div>
                    <div class="symbole">
                    Website logo
                    </div>
                    <div class="menu">
                    <ul>
                        <li><a href="#">Se déconnecter</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                    </div>
      </nav>
</header> 

      <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })

    </script>
<body>
    <div class="globale">
        <div class="véhicule">
            <div class="véhicule2">
            <h1>--------------Véhicule--------------</h1>
                <a href="véhicule/véhicule.php?id=<?= $_SESSION['id'] ?>">
                    <button>Ajouter</button>
                </a>
                <a href="véhicule/modifier/modifier.php?id=<?= $_SESSION['id'] ?>">
                    <button>Modifier</button>
                </a>
                <a href="véhicule/suprimmer/suprimmer.php?id=<?= $_SESSION['id'] ?>">
                    <button>Supprimer</button>
                </a>
                <a href="véhicule/list/list.php?id=<?= $_SESSION['id']?>">
                    <button>Détail</button>
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="véhicule">
            <div class="véhicule2">
            <h1>--------------Acheteur--------------</h1>
                
                <div  style="display: flex; flex-direction: row; position: relative; left : 550px;">
                <a href="acheteur/acheteur.php?id=<?= $_SESSION['id']; ?>">
                    <button>Ajouter</button>
                </a>
                    <div>
                        <a style="position: relative; top: 115px;" href="acheteur/physique/modifier/modifier.php?id=<?= $_SESSION['id']; ?>">
                            <button>Modifier une personne physique</button>
                        </a>
                        <br>
                        <br>
                        <a style="position: relative; top: 115px; " href="acheteur/moral/modifier/modifier.php?id=<?= $_SESSION['id']; ?>">
                            <button>Modifier une personne moral</button>
                        </a>
                    </div>
                    <div>
                        <a style="position: relative; top: 108px; " class="supressionPhysique" href="acheteur/physique/suprimmer/suprimmer.php?id=<?=$_SESSION['id'] ?>">
                            <button>Supprimer une personne physique</button>
                        </a>
                        <br>
                        <br>
                        <a style="position: relative; top: 108px; " class="supresionMoral" href="acheteur/moral/suprimmer/suprimmer.php?id=<?=$_SESSION['id'] ?>">
                            <button>Supprimer une personne moral</button>
                        </a>
                    </div>
                    <div>
                        <a style="position: relative; top: 108px;" href="acheteur/physique/list/list.php?id=<?= $_SESSION['id']?>">
                            <button>Liste physique</button>
                        </a>
                        <br>
                        <br>
                        <a style="position: relative; top: 100px;" href="acheteur/moral/list/list.php?id=<?= $_SESSION['id']?>">
                            <button>Liste Moral</button>
                        </a>
                    </div>
                </div>
               
               
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="véhicule">
            <div class="véhicule2">
            <h1>--------------Vendeur--------------</h1>
                
                <div  style="display: flex; flex-direction: row; position: relative; left : 550px;">
                <a href="vendeur/vendeur.php?id=<?= $_SESSION['id']; ?>">
                    <button>Vendeur</button>
                </a>
                    <div>
                        <a style="position: relative; top: 115px;" href="vendeur/physique/modifier/modifier.php?id=<?= $_SESSION['id']; ?>">
                            <button>Modifier une personne physique</button>
                        </a>
                        <br>
                        <br>
                        <a style="position: relative; top: 115px; " href="vendeur/moral/modifier/modifier.php?id=<?= $_SESSION['id']; ?>">
                            <button>Modifier une personne moral</button>
                        </a>
                    </div>
                    <div>
                        <a style="position: relative; top: 108px; " class="supressionPhysique" href="vendeur/physique/suprimmer/suprimmer.php?id=<?=$_SESSION['id'] ?>">
                            <button>Supprimer une personne physique</button>
                        </a>
                        <br>
                        <br>
                        <a style="position: relative; top: 108px; " class="supresionMoral" href="vendeur/moral/suprimmer/suprimmer.php?id=<?=$_SESSION['id'] ?>">
                            <button>Supprimer une personne moral</button>
                        </a>
                    </div>
                    <div>
                        <a style="position: relative; top: 108px;" href="vendeur/physique/list/list.php?id=<?= $_SESSION['id']?>">
                            <button>Liste physique</button>
                        </a>
                        <br>
                        <br>
                        <a style="position: relative; top: 100px;" href="vendeur/moral/list/list.php?id=<?= $_SESSION['id']?>">
                            <button>Liste Moral</button>
                        </a>
                    </div>
                </div>
               
               
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="véhicule">
            <div class="véhicule2">
            <h1>--------------Operation--------------</h1>
                <a href="operation/operation.php?id=<?= $_SESSION['id']; ?>">
                    <button>Ajouter</button>
                </a>
                <a href="operation/modifier/modifier.php?id=<?= $_SESSION['id']; ?>">
                    <button>Modifier</button>
                </a>
                <a href="operation/suprimmer/suprimmer.php?id=<?= $_SESSION['id']; ?>">
                    <button>Supprimer</button>
                </a>
                <a href="operation/list/list.php?id=<?= $_SESSION['id']; ?>">
                    <button>Liste </button>
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="véhicule">
            <div class="véhicule2" >
            <h1>--------------Formalités--------------</h1>
                <a href="declaration_achat/achat.php?id=<?= $_SESSION['id']; ?>">
                    <button>Déclaration d'achat</button>
                </a>
                <a href="declaration_de_cession/achat.php?id=<?= $_SESSION['id']; ?>">
                    <button>Déclaration de cession</button>
                </a>
                <a   href="declaration_immatriculation/achat.php?id=<?= $_SESSION['id']; ?>">
                    <button style="width: 120px;" >Demande immatriculation</button>
                </a>
               
            </div>
        </div>
    </div>
    <br>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Partenaire</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                      
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nos service</h4>
                    <ul>
                        <li><a href="#">Annonce</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Ticket</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>