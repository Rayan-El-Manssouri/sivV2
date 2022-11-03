<?php 
error_reporting(0);
session_start();

require_once '../../../../../private/bdd/connect.php';
$database = new Database();

$query4 = "SELECT * FROM `vehicule`";
$data4 = $database->read($query4);

$query5 = "SELECT * FROM personnephysique";
$data5 = $database->read($query5);

$query6 = "SELECT * FROM personnemoral";
$data6 = $database->read($query6);

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
    <title>Opérations</title>
</head>
<body>
    <?php require_once '../../../../../private/php/sidebar.php'; ?>
    <div id="content">
        <header>
            <h1>Gestion des opérations</h1>
            <em>Visualisez les opérations en cours</em>
        </header>
        <section>
            <article class="quick">
                <a href="add_deal.php">
                    <div>
                        <span class="material-symbols-outlined">add</span>
                        <p>Ajouter</p>
                    </div>
                </a>
            </article>
            <p>Info pour Rayan : detail des opérations ici</p>
            <table class="data">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Date</th>
                        <th>Acheteur</th>
                        <th>Ville</th>
                        <th>Kilométrage</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">edit</span></a>
                            <a href=""><span class="material-symbols-outlined">remove</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">edit</span></a>
                            <a href=""><span class="material-symbols-outlined">remove</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">edit</span></a>
                            <a href=""><span class="material-symbols-outlined">remove</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td class="actioncol">
                            <a href=""><span class="material-symbols-outlined">edit</span></a>
                            <a href=""><span class="material-symbols-outlined">remove</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <?php require_once '../../../../../private/php/footer.php'; ?>
    </div>
</body>
</html>