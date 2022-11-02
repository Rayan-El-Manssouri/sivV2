<?php 
require_once '../../../../../private/bdd/connect.php';
$database = new Database();

$query1 = "SELECT * FROM `operation`";
$data1 = $database->read($query1);

?>
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
    <link href="http://localhost/sivV2/private/src/logo2.png" rel="icon">
    <title>PDF</title>
</head>
<body>
    <?php require_once '../../../../../private/php/sidebar.php'; ?>
    <div id="content">
        <header>
            <h1>Gestion des PDF</h1>
            <em>Générer des PDF pour prouver des actions.</em>
        </header>
        <section>
            <article class="quick">
                <a href="">
                    <div>
                        <span class="material-symbols-outlined">shopping_cart</span>
                        <p>Déclaration d'achat</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <span class="material-symbols-outlined">waving_hand</span>
                        <p>Déclaration de cession</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <span class="material-symbols-outlined">badge</span>
                        <p>Déclaration d'immatriculation</p>
                    </div>
                </a>
            </article>
            <table class="data">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">file_download</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">file_download</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">file_download</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">file_download</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <?php require_once '../../../../../private/php/footer.php'; ?>
    </div>
</body>
</html>