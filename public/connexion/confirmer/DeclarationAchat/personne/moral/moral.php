<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moral</title>
    <link href="moral.css" rel="stylesheet">
    <link href="../../../../../../private/src/logo2.png" rel="icon">

</head>
<body>
    <?php         
        require_once dirname( __DIR__ ) . '../../../../../../private/style/headerFormaliter/header.php';
        require_once dirname( __DIR__ ) . '../../../../../../private/bdd/connect.php';
        $database = new Database();
       
        ?>
        <div style="position: relative; left: 900px; top: 100px;">
        <h1>Bienvenue sur la page pour rajouter une personne moral.</h1>
        <br>
            <?php  require_once dirname( __DIR__ ) . '../../../../../../private/formulaireMoral/formulairemoral.php'; ?>
        </div>
</body>
</html>