<?php 
session_start();
require_once '../../../Gestion bdd/connect.php';
$database = new Database();
$query = "SELECT * FROM acheteur WHERE IdUtilisateur='".$_GET['id']."'";
$data = $database->read($query);

$query1 = "SELECT * FROM vehicule WHERE IdUtilisateur='".$_GET['id']."'";
$data1 = $database->read($query1);

$query2 = "SELECT * FROM vendeur WHERE IdUtilisateur='".$_GET['id']."'";
$data2 = $database->read($query2);

$query3 = "SELECT * FROM operation WHERE IdUtilisateur='".$_GET['id']."' ";
$data3 = $database->read($query3);

$query4 = "SELECT * FROM fomalite";
$data4 = $database->read($query4);

$query5 = "SELECT * FROM cotitulaire WHERE IdUtilisateur='".$_GET['id']."' ";
$data5 = $database->read($query5);


$query6 = "SELECT * FROM fomalite";
$data6 = $database->read($query6);

$query7 = "SELECT * FROM mandataire";
$data7 = $database->read($query7);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandat</title>
</head>
<body>
    <form method="POST" TARGET="_BLANK">
        <select name="acheteur" id="pet-select">
                <option>--Séléctionner l'acheteur--</option>
                    <?php foreach($data as $dataV2):?>
                        <option  value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?> </option>
                    <?php endforeach; ?>
        </select>
        <select name="vehicule" id="pet-select">
                <option>--Séléctionner le véhicule--</option>
                    <?php foreach($data1 as $dataV2):?>
                        <option  value="<?= $dataV2['Immatriculation'] ?>"><?= $dataV2['Immatriculation'] ?> </option>
                    <?php endforeach; ?>
        </select>  
        <select name="vendeur" id="pet-select">
                <option>--Séléctionner le vendeur--</option>
                    <?php foreach($data2 as $dataV2):?>
                        <option  value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?> </option>
                    <?php endforeach; ?>
        </select>  
        <select name="operation" id="pet-select">
                <option>--Séléctionner l'opération--</option>
                    <?php foreach($data3 as $dataV2):?>
                        <option  value="<?= $dataV2['IdOperation'] ?>"><?= $dataV2['IdOperation'] ?> </option>
                    <?php endforeach; ?>
        </select>  


        <select name="formalite" id="pet-select">
                <option>--Séléctionner la formalité--</option>
                    <?php foreach($data6 as $dataV2):?>
                        <option  value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?> </option>
                    <?php endforeach; ?>
        </select>  

        
        <select name="mandataire" id="pet-select">
                <option>--Séléctionner le mandataire--</option>
                    <?php foreach($data7 as $dataV2):?>
                        <option  value="<?= $dataV2['RaisonSociale'] ?>"><?= $dataV2['RaisonSociale'] ?> </option>
                    <?php endforeach; ?>
        </select>  
        
        <input type="submit" value="Mandat" name= "Mandat">

        <input type="submit" value="Certificat de cession" name="Certificat_de_cession">
                        
        <input type="submit" value="Déclaration Immatriculation" name="Déclaration_Immatriculation">

    </form>
    <?php   

    if(isset($_POST['Mandat'])){
        $_SESSION['acheteur'] = $_POST['acheteur'];
        $_SESSION['vehicule'] = $_POST['vehicule'];
        $_SESSION['vendeur'] = $_POST['vendeur'];
        $_SESSION['operation'] = $_POST['operation'];
        $_SESSION['mandataire'] = $_POST['mandataire'];
        header("location:../formalite_pdf/Mandat/traitement.php?Nature=Déclaration de certificat d'immatriculation");
    }

    if(isset($_POST['Certificat_de_cession'])){
        $_SESSION['acheteur'] = $_POST['acheteur'];
        $_SESSION['vehicule'] = $_POST['vehicule'];
        $_SESSION['vendeur'] = $_POST['vendeur'];
        $_SESSION['operation'] = $_POST['operation'];
        header("location:../formalite_pdf/certificat_de_cession/traitement.php");
    }

    if(isset($_POST['Déclaration_Immatriculation'])){
        $_SESSION['acheteur'] = $_POST['acheteur'];
        $_SESSION['vehicule'] = $_POST['vehicule'];
        $_SESSION['vendeur'] = $_POST['vendeur'];
        $_SESSION['operation'] = $_POST['operation'];
        $_SESSION['formalite'] = $_POST['formalite'];
        header("location:../formalite_pdf/Declaration_Immatriculation/traitement.php");
    }
    ?>
</body>
</html>