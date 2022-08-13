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
                <input type="text" class="input" placeholder="Email"><br><br>
                <input type="text" class="input" placeholder="Mot de passe"><br><br>
            </div>
            <input class="valider" type="submit" value="Continuer">
            <a href="#" class="lien">
                Inscription
            </a>
            <div class="reseaux">
                <a href="">
                    <button>Se connecter avec google</button>
                </a>
                
                
            </div>
        </form>
    </div>
</body>
</html>