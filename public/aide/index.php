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
    <link href="index.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/src/logo2.png" rel="icon">
    <title>Aide - Siv</title>
</head>
<body>
    <?php require_once '../../private/php/headerbar.php'; ?>
    <section>
        <header>
            <h1>Centre d'aide</h1>
            <em>Décrivez votre problème, vous aurez certainement une solution dans notre documentation.</em>
        </header>
        <div class="list">
            <h2>Questions fréquentes</h2>
            <ul>
                <li><a href="">Comment faire çi ?</a></li>
                <li><a href="">Comment faire ça ?</a></li>
                <li><a href="">Comment faire mi ?</a></li>
            </ul>
        </div>
        <form method="POST" class="form">
            <fieldset>
                <legend>Recherchez une page d'aide</legend>
                <div>
                    <label>Décrivez-nous votre problème : </label>
                    <div>
                        <div><input type="search" name="request"></input></div>
                    </div>
                </div>
                <input type="submit" value="Rechercher">
            </fieldset>
        </form>
        <div class="large_container">
            <h2>Toujours pas trouvé ?</h2>
            <p>Pas d'inquiétude ! Vous pouvez toujours nous contacter.</p>
            <a href="../contact/">
                Contactez-nous
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
    </section>
    <?php require_once '../../private/php/footer.php'; ?>
</body>
</html>