<?php echo '<link href="http://localhost/sivV2/private/style/headerformalitees/header.css" rel="stylesheet" type="text/css" />';  ?>
<?php echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />';  ?>
<?php 


$query = "SELECT COUNT(*) FROM `vehicule`";
$data = $database->read($query);



$personne1 = "SELECT COUNT(*) FROM `personnephysique`";
$echoPersonne1 = $database->read($personne1);

$personne2 = "SELECT COUNT(*) FROM `personnemoral`";
$echoPersonne2 = $database->read($personne2);

$total = $echoPersonne1[0]['COUNT(*)'] + $echoPersonne2[0]['COUNT(*)'];

$operation = "SELECT COUNT(*) FROM `operation`";
$operation1 = $database->read($operation);

$totaloperation = $operation1[0]['COUNT(*)'];

?>
<header class="header">
    <div class="navigation">
        <h1>Website Logo</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/sivV2/public"> <button> <span  class="material-symbols-outlined">home</span>Accueil</button> </a></li>
                <li><a href="http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/GestionPersonne/AjouterPersonne/"> <button> <span class="material-symbols-outlined">groups</span>Personnes <span style="position: relative; left: 15px; top: 0px;  padding: 5px; border-radius: 9px"><?php echo $total?></span></button> </a></li>
                <li><a href="http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/GestionVehicule/"><button> <span class="material-symbols-outlined">directions_car</span>Véhicules <span style="position: relative; left: 15px; top: 0px;  padding: 5px; border-radius: 9px"><?php echo $data[0]['COUNT(*)']?></span></button> </a></li>
                <li><a href="http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/GestionOperation/"><button><span class="material-symbols-outlined">local_shipping</span>Opérations  <span style="position: relative; left: 15px; top: 0px;  padding: 5px; border-radius: 9px"><?php echo $totaloperation?></span></button> </a></li>
                <li><a href=""><button><span class="material-symbols-outlined">picture_as_pdf</span>Générer les PDF</button> </a></li>
                <li><a href="http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/"><button><span class="material-symbols-outlined">chevron_left</span>Revenir au panneau</button> </a></li>
                <li><a style="top: 80px; position: relative" href="http://localhost/sivV2/private/GestionSession/logout.php"><button><span class="material-symbols-outlined">Logout</span>Se déconnecter</button></a></li>
            </ul>
        </nav>
    </div>
</header>