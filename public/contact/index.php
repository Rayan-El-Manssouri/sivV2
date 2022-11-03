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
    <title>Contact - Siv</title>
</head>
<body>
    <?php require_once '../../private/php/headerbar.php'; ?>
    <section>
        <header>
            <h1>Contactez-nous</h1>
            <em>Pour quoi que ce soit, contactez-nous et nous vous répondrons à vos attentes.</em>
        </header>
        <article class="quick">
            <a href="tel:0620031522">
                <div>
                    <span class="material-symbols-outlined">call</span>
                    <p>06.20.03.15.22</p>
                </div>
            </a>
            <a href="mailto:siv@gmail.com">
                <div>
                    <span class="material-symbols-outlined">mail</span>
                    <p>siv@gmail.com</p>
                </div>
            </a>
        </article>
        <form method="POST" class="form">
            <fieldset>
                    <legend>Message</legend>
                    <div>
                        <label>Email de contact : </label>
                        <div>
                            <div><input type="email" name="mail"></div>
                        </div>
                    </div>
                    <div>
                        <label>Message : </label>
                        <div>
                            <div><textarea name="message"></textarea></div>
                        </div>
                    </div>
                    <input type="submit" value="Envoyer le message">
            </fieldset>
        </form>
    </section>
    <?php require_once '../../private/php/footer.php'; ?>
</body>
</html>