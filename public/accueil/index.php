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
    <title>Bienvenue sur Siv</title>
</head>
<body>
    <?php require_once '../../private/php/headerbar.php'; ?>
    <section>
        <div class="presentation">
            <div>
                <h1>Bienvenue sur Siv</h1>
                <p>Le gestionnaire pour les loueurs de véhicules qui change la vie.</p>
                <p>
                    Pourquoi nous choisir ?
                    <span class="material-symbols-outlined">arrow_downward</span>
                </p>
            </div>
        </div>
        <div class="grid_feat">
            <img src="http://localhost/sivV2/private/src/complete.jpg">
            <div>
                <h2>Avec Siv, vous pouvez tout faire</h2>
                <p>En nous choisissant, vous n'avez pas besoin d'autres logiciels de gestions.<br>
                Vous pouvez générer des PDF ; mais aussi gérer vos commandes, vos clients et vos voitures.</p>
            </div>
        </div>
        <div class="grid_feat">
            <div>
                <h2>Avec Siv, vous ne perdez pas de temps</h2>
                <p>Siv a été conçu pour être simple et intuitifs pour les utilisateurs.<br>
                Avec Siv, vous n'avez pas perdre du temps à comprendre comment utiliser votre outil de travail.</p>
            </div>
            <img src="http://localhost/sivV2/private/src/intuitive.jpg">
        </div>
        <div class="grid_feat">
            <img src="http://localhost/sivV2/private/src/assistance.jpg">
            <div>
                <h2>Avec Siv, vous n'êtes jamais laissé seul</h2>
                <p>En choisissant Siv, vous bénéficier d'une assistance afin de vous aider dans tous vos problèmes. </p>
            </div>
        </div>
        <div class="large_container">
            <h2>Vous êtes convaincu ?</h2>
            <p>Alors contactez-nous pour signer un contrat !</p>
            <a href="../contact">
                Contactez-nous
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
    </section>
    <?php require_once '../../private/php/footer.php'; ?>
</body>
</html>