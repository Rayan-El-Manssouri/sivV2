<?php 
require_once '../../../../../../private/bdd/connect.php';
$database = new Database();

$query5 = "SELECT * FROM `personnephysique`";
$data5 = $database->read($query5);

$query8 = "SELECT * FROM `personnemoral`";
$data8 = $database->read($query8);

$query6 = "SELECT * FROM operation WHERE IdOperation='".$_GET['id']."' ";
$data6 = $database->read($query6);



// Récuperation des variable
$Kilometrage = $data6[0]['Kilometrage'];
$NatureOperation = $data6[0]['Nature'];
$NomOperation = $data6[0]['NomOperation'];
$IdVehicule = $data6[0]['IdVehicule'];
$DateVente = $data6[0]['DateVente'];
$DateDeclaration = $data6[0]['DateDeclaration'];
$PresenceCertificat = $data6[0]['PresenceCertificat'];
$InformationAssurance = $data6[0]['InformationAssurance'];
$CederDestruction = $data6[0]['CederDestruction'];
$CertifieSituationAdministrative = $data6[0]['CertifieSituationAdministrative'];
$Transformation = $data6[0]['Transformation'];
$OppositionUtilisationDonnees = $data6[0]['OppositionUtilisationDonnees'];
$CertifieAchat = $data6[0]['CertifieAchat'];
$Destruction = $data6[0]['Destruction'];
$IdVille = $data6[0]['IdVille'];

// Variable de l'acheteur .
$Acheteur = $data6[0]['Acheteur'];
$A = explode(",", $Acheteur);

if($A[0] == '1'){
    $query10 = "SELECT * FROM personnephysique WHERE IdPersonnePhysique='".$A[1]."' ";
    $data10 = $database->read($query10);
    $Personne = $data10[0]['Nom'];
    $Nature = "Peresonne Physique";
}

if($A[0] == '2'){
    $query11 = "SELECT * FROM personnemoral WHERE IdPersonneMoral='".$A[1]."' ";
    $data11 = $database->read($query11);
    $Nature = "Peresonne Moral";
    $Personne = $data11[0]['RaisonSocial'];
};


// Variable du vendeur .
$Vendeur = $data6[0]['Vendeur'];
$V = explode(",", $Vendeur);



// Condition pour connaitre si il provient de la table physique ou moral.
if($V[0] == '2'){
    $query11 = "SELECT * FROM personnemoral WHERE IdPersonneMoral='".$V[1]."' ";
    $data11 = $database->read($query11);
    print_r($query11);

    $PersonneVendeur = $data11[0]['RaisonSocial'];
    $NatureVendeur = "Peresonne moral";
};

if($V[0] == '1'){
    $query11 = "SELECT * FROM personnephysique WHERE IdPersonnePhysique='".$V[1]."' ";
    $data11 = $database->read($query11);
    $NatureVendeur = "Peresonne Physique";
    $PersonneVendeur = $data11[0]['Nom'];
}



$query7 = "SELECT * FROM vehicule WHERE IdVehicule='".$IdVehicule."' ";
$data7 = $database->read($query7);

$query9 = "SELECT * FROM ville WHERE IdVille='".$IdVille."' ";
$data9 = $database->read($query9);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" >
    <link rel="icon" href="../../../../../../private/src/logo2.png" >
    <title>Siv - Modification - Opération</title>
</head>
<body>
    <?php require_once '../../../../../../private/style/headerFormalitees/header.php'; ?>
    <div class="modification_confirmation">
    <script>
                            function revenir(){
                                location.replace("http://localhost/sivV2/public/connexion/confirmer/")
                            }
                        </script>
                        <button class="Bouton" onclick="revenir()">Annuler</button>
        <h1>modification d'une opération.</h1>
        <form method="POST">
                        <br>
                        <p>Nature : <input type="radio" name="nature" value="Achat" <?php 
                            if($NatureOperation == 'Achat'){
                                ?>
                                checked
                                <?php
                            }
                        
                        ?>>
                                    <span>Achat</span>
                                    <input type="radio" name="nature" value="Vente" <?php 
                            if($NatureOperation == 'Vente'){
                                ?>
                                checked
                                <?php
                            }
                        
                        ?>>
                        <span>Vente</span>
                        </p>
                        <br>
                        <p>Nom de l'Operation : <input type="text" name="NomOperation" value="<?= $NomOperation ?>" placeholder="NomOperation"></p>
                        <br>
                        <div>
                        <br>
                        <p>Kilométrage : <input type="text" name="Kilometrage" value="<?=$Kilometrage?>" placeholder="Kilométrage"></p>
                        <br>
                        <p>Date Vente : <input type="datetime-local" name="DateVente" value="<?=$DateVente?>"></p>
                        <br>
                        <p>Date Declaration : <input type="Date" name="DateDeclaration" value="<?= $DateDeclaration ?>" ></p>
                        <br>
                        <div>
                            <br>
                            <div>
                            <span>Presence Certificat :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="PresenceCertificat" value="0" <?php 
                                        if($PresenceCertificat == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="PresenceCertificat" value="1"  <?php 
                                        if($PresenceCertificat == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        ?>></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Information Assurance :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="InformationAssurance" value="0" <?php 
                                        if($InformationAssurance == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="InformationAssurance" value="1" <?php 
                                        if($InformationAssurance == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Ceder Destruction :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="CederDestruction" value="0" <?php 
                                        if($CederDestruction == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                        <span>Non</span> 
                                        <span><input type="radio" name="CederDestruction" value="1" <?php
                                        if($CederDestruction == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Certifie Situation Administrative :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="CertifieSituationAdministrative" value="0"  <?php 
                                        if($CertifieSituationAdministrative == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieSituationAdministrative" value="1" <?php 
                                        if($CertifieSituationAdministrative == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Transformation :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="Transformation" value="0" <?php 
                                        if($Transformation == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Transformation" value="1" <?php 
                                    
                                        if($Transformation == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Opposition Utilisation Donnees :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="OppositionUtilisationDonnees" value="0" <?php 
                                        if($OppositionUtilisationDonnees == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="OppositionUtilisationDonnees" value="1" <?php 
                                        if($OppositionUtilisationDonnees == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        
                                        ?>></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>
                        <div>
                            <br>
                            <div>
                            <span>Certifie Achat :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="CertifieAchat" value="0" <?php 
                                        if($CertifieAchat == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieAchat" value="1"  <?php 
                                        if($CertifieAchat == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        ?>></span>
                                </span>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div>
                            <br>
                            <div>
                            <span>Destruction :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="Destruction" value="0" <?php 
                                        if($Destruction == '0'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        ?>></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Destruction" value="1" <?php 
                                        if($Destruction == '1'){
                                            ?>
                                            checked
                                            <?php
                                        }
                                        ?>></span>
                                </span>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div>
                            <br>
                            <span>Sélectionner une ville :</span>
                            <select name="ville">
                                <?php 
                                $variable = $data9[0]['IdVille'];
                                ?>
                                <option  value="<?= $variable ?>"><?= $data9[0]['Nom'] ?></option>
                                <option  value="">----------</option>
                                <?php 
                                $SetupVille = "SELECT * FROM `ville`";
                                $ExuctVille = $database->read($SetupVille);
                                
                                ?>
                                <?php foreach($ExuctVille as $dataV2): ?>
                                <option  value="<?= $dataV2['IdVille']?> ">
                                    <?= $dataV2['Nom'] ?> 
                                    </option><?php
                                    endforeach?>
                            </select>
                            <br>
                            <br>
                            <span>Sélectionner un véhicule :</span>
                            <select name="vehicule">
                                <option value="<?= $data7[0]['IdVehicule'] ?>"><?= $data7[0]['Immatriculation'] ?></option>
                                <option value="">------------</option>
                                <?php 
                                $Setupvehicule = "SELECT * FROM `vehicule`";
                                $Exuctvehicule = $database->read($Setupvehicule);  
                                ?>
                                <?php foreach($Exuctvehicule as $dataV2): ?>
                                <option value="<?= $dataV2['IdVehicule']?> ">
                                    <?= $dataV2['Immatriculation'] ?> 
                                    </option><?php
                                    endforeach?>
                            </select>
                            <br>
                            <br>
                            <span>Sélectionne un acheteur :</span>
                            <select name="acheteur">
                            <option value="<?= $A[0] ?>,<?=$A[1]?>"><?= $Personne ?> <?= $Nature ?></option>
                            <option value="">--------</option>
                                <option value="">Personne Physique</option>
                                <?php foreach($data5 as $dataV2): ?>
                                <option value="1,<?=$dataV2['IdPersonnePhysique']?>">
                                    <?= $dataV2['Nom'] ?>
                                    </option><?php
                                    endforeach?>
                                <option value="">Personne Moral</option>
                                <?php foreach($data8 as $dataV2): ?>
                                <option value="2,<?=$dataV2['IdPersonneMoral'] ?>">
                                <?=$dataV2['RaisonSocial'] ?>
                                    </option><?php
                                    endforeach?>
                            </select>
                            <br>
                            <br>
                            <span>Sélectionne un vendeur :</span>
                            <select name="vendeur">
                                <option value="<?=$V[0]?>, <?=$V[1]?>"><?= $PersonneVendeur ?> <?= $NatureVendeur ?></option>
                                <option value="">--------</option>
                                <option value="">Personne Physique</option>
                                <?php foreach($data5 as $dataV2): ?>
                                <option value="1,<?=$dataV2['IdPersonnePhysique']?>">
                                    <?= $dataV2['Nom'] ?>
                                    </option><?php
                                    endforeach?>
                                <option value="">Personne Moral</option>
                                <?php foreach($data8 as $dataV2): ?>
                                <option value="2,<?=$dataV2['IdPersonneMoral'] ?>">
                                <?=$dataV2['RaisonSocial'] ?>
                                    </option><?php
                                    endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="Bouton2">
                        <input type="submit" name="send" id="personne" class="Bouton" ></input>

                    </div>
</form>
    </div>
    <?php
    if(!empty($_POST['send'])){
        $Kilometrage2 = htmlentities($_POST['Kilometrage']);
        $NomOperation = htmlentities($_POST['NomOperation']);
        $nature2 = htmlentities($_POST['nature']);
        $DateVente = htmlentities($_POST['DateVente']);
        $DateDeclaration = htmlentities($_POST['DateDeclaration']);
        $PresenceCertificat = htmlentities($_POST['PresenceCertificat']);
        $InformationAssurance = htmlentities($_POST['InformationAssurance']);
        $CederDestruction = htmlentities($_POST['CederDestruction']);
        $CertifieSituationAdministrative = htmlentities($_POST['CertifieSituationAdministrative']);
        $Transformation = htmlentities($_POST['Transformation']);
        $OppositionUtilisationDonnees = htmlentities($_POST['OppositionUtilisationDonnees']);
        $CertifieAchat = htmlentities($_POST['CertifieAchat']);
        $Destruction = htmlentities($_POST['Destruction']);
        $ville = htmlentities($_POST['ville']);
        $vehicule = htmlentities($_POST['vehicule']);
        $acheteur = htmlentities($_POST['acheteur']);
        $vendeur = htmlentities($_POST['vendeur']);
        $query12 = "UPDATE operation SET `Kilometrage`='$Kilometrage2', `NomOperation`='$NomOperation', `nature`='$nature2', `DateVente`='$DateVente', `DateDeclaration`='$DateDeclaration', `PresenceCertificat`='$PresenceCertificat', `InformationAssurance`='$InformationAssurance', `CederDestruction`='$CederDestruction', `CertifieSituationAdministrative`='$CertifieSituationAdministrative', `Transformation`='$Transformation', `OppositionUtilisationDonnees`='$OppositionUtilisationDonnees', `CertifieAchat`='$CertifieAchat', `Destruction`='$Destruction',  `IdVille`='$ville', `IdVehicule`='$vehicule', `acheteur`='$acheteur', `vendeur`='$vendeur' WHERE IdOperation='".$_GET['id']."'";
        $data12 = $database->read($query12);
        ?>
        <script>
            alert("Bien modifié !")
            location.replace("")
        </script>
        <?php
    }
    
    ?>
</body>
</html>