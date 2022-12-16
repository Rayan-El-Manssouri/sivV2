<?php 
error_reporting(0);
session_start();
require_once '../../../Gestion bdd/connect.php';
$database = new Database();
$query = "SELECT * FROM ville";
$data = $database->read($query);

$query4 = "SELECT * FROM vehicule WHERE IdUtilisateur='".$_SESSION['id']."' ";
$data4 = $database->read($query4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendeur</title>
    <link href="operation.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
      <nav>
            <div class="hamburg">
                            <i class="fa fa-bars fa-2x" ></i>
                    </div>
                    <div class="symbole">
                    Website logo
                    </div>
                    <div class="menu">
                    <ul>
                        <li><a href="#">Se déconnecter</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
            </div>
      </nav>
</header> 
<div class="perssone">
    <button id="personne" name="personne">Achat</button>
    <button id="moral" name="">Vente</button>
    <a class="revenir" href="../panel.php?id=<?= $_SESSION['id']?>">
        <button>Revenir a la page principal</button>
    </a>
    </div>
<div>
                <form method="POST" id="personne2">
                <div class="form">
                    <br>
                        Formulaire pour une opération d'achat <br>
                    <br>
                    <p>Nom de l'Operation : <input type="text" name="NomOperation" placeholder="NomOperation"></p>
                    <div>
                        <div>
                            <br>
                            <span>Sélectionner un véhicule :</span>
                            <select name="vehicule" required>
                                <option value="">Séléctionner la véhicule</option>
                                <?php foreach($data4 as $dataV2): ?>
                                <option value="<?= $dataV2['Immatriculation'] ?>">
                                    <p><?= $dataV2['Immatriculation'] ?></p>
                                    </option><?php
                                    endforeach?>
                            </select>
                        </div>
                        <p>Kilométrage : <input type="text" name="Kilometrage" placeholder="Kilométrage"></p>
                        <br>
                        <p>Date Vente : <input type="datetime-local" name="DateVente"></p>
                        <br>
                        <p>Date Declaration : <input type="Date" name="DateDeclaration"></p>
                        <br>
                        <div>
                            <br>
                            <div>
                            <span>Presence Certificat :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="PresenceCertificat" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="PresenceCertificat" value="1"></span>
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
                                        <span> <input type="radio" name="InformationAssurance" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="InformationAssurance" value="1"></span>
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
                                        <span> <input type="radio" name="CederDestruction" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CederDestruction" value="1"></span>
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
                                        <span> <input type="radio" name="CertifieSituationAdministrative" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieSituationAdministrative" value="1"></span>
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
                                        <span> <input type="radio" name="Transformation" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Transformation" value="1"></span>
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
                                        <span> <input type="radio" name="OppositionUtilisationDonnees" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="OppositionUtilisationDonnees" value="1"></span>
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
                                        <span> <input type="radio" name="CertifieAchat" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieAchat" value="1"></span>
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
                                        <span> <input type="radio" name="Destruction" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Destruction" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <span>Sélectionner une ville :</span>
                            <select name="ville">
                                <option>Séléctionner la ville</option>
                                <?php foreach($data as $dataV2): ?>
                                <option>
                                    <p><?= $dataV2['Nom'] ?></p>
                                    </option><?php
                                    endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="Bouton2">
                        <input type="submit" name="Achat" id="personne" class="Bouton" ></input>
                        <button class="Bouton">Annuler</button>
                    </div>
                </form>
            </div>
            </div>
            <div class="form">
                <form method="POST" id="moral1" style="position : relative; ">
                <br>
                    <div class="Situation">
                    <div class="form" style="position: relative; left: 150px; top: -19px; right: 100px;">
                    <br>
                        <div class="titreAchat">
                            <p>Formulaire pour une opération de vente</p>  <br>
                        </div>
                    <br>
                            <br>
                            
                    <div class="operation" >
                        <p>Nom de l'Operation : <input type="text" name="NomOperation" placeholder="NomOperation" required></p>
                        <br>
                        <p>Kilométrage : <input type="text" name="Kilometrage" placeholder="Kilométrage"></p>
                        <br>
                        <span>Sélectionner un véhicule :</span>
                            <select name="vehicule" required>
                                <option value="">Séléctionner la véhicule</option>
                                <?php foreach($data4 as $dataV2): ?>
                                <option value="<?= $dataV2['Immatriculation'] ?>">
                                    <p><?= $dataV2['Immatriculation'] ?></p>
                                    </option><?php
                                    endforeach?>
                            </select>
                        <br>
                        <p>Date Vente : <input type="datetime-local" name="DateVente"></p>
                        <br>
                        <p>Date Declaration : <input type="Date" name="DateDeclaration"></p>
                        <br>
                        <div>
                            <br>
                            <div>
                            <span>Presence Certificat :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="PresenceCertificat" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="PresenceCertificat" value="1"></span>
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
                                        <span> <input type="radio" name="InformationAssurance" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="InformationAssurance" value="1"></span>
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
                                        <span> <input type="radio" name="CederDestruction" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CederDestruction" value="1"></span>
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
                                        <span> <input type="radio" name="CertifieSituationAdministrative" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieSituationAdministrative" value="1"></span>
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
                                        <span> <input type="radio" name="Transformation" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Transformation" value="1"></span>
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
                                        <span> <input type="radio" name="OppositionUtilisationDonnees" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="OppositionUtilisationDonnees" value="1"></span>
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
                                        <span> <input type="radio" name="CertifieAchat" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieAchat" value="1"></span>
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
                                        <span> <input type="radio" name="Destruction" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Destruction" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <span>Sélectionner une ville :</span>
                            <select name="ville">
                                <option>Séléctionner la ville</option>
                                <?php foreach($data as $dataV2): ?>
                                <option>
                                    <p><?= $dataV2['Nom'] ?></p>
                                    </option><?php
                                    endforeach?>
                            </select>
                        </div>
                    </div>
                    </div class="Validation">
                        <input type="submit" name="Vente" id="personne" class="Validation2" ></input>
                        <button class="Validation2" >Annuler</button>
                        <input type="hidden" value="1"  name="PhysiqueMoral">
                    </div>
                </div>
            </form>
        </div>
    <script>
        $(document).ready(function() {
            $("#personne2").hide();
            $("#moral1").hide();
        });

        $("#personne").click(function() {
            $("#personne2").show();
            $("#moral1").hide();
        });

        $("#moral").click(function() {
            $("#moral1").show();
            $("#personne2").hide();

        });
    </script>
<?php
if (isset($_POST['Achat'])) {
    $id = $_GET['id'];
    $Kilometrage = $_POST['Kilometrage'];
    $DateVente = $_POST['DateVente'];
    $DateDeclaration = $_POST['DateDeclaration'];
    $PresenceCertificat = $_POST['PresenceCertificat'];
    $InformationAssurance = $_POST['InformationAssurance'];
    $CederDestruction = $_POST['CederDestruction'];
    $CertifieSituationAdministrative = $_POST['CertifieSituationAdministrative'];
    $Transformation = $_POST['Transformation'];
    $OppositionUtilisationDonnees = $_POST['OppositionUtilisationDonnees'];
    $CertifieAchat = $_POST['CertifieAchat'];
    $Destruction = $_POST['Destruction'];
    $ville = $_POST['ville'];
    $query2 = "SELECT * FROM ville WHERE Nom='".$ville."' ";
    $data2 = $database->read($query2);
    $NomOperation = $_POST['NomOperation'];
    foreach($data2 as $dataV2):
            $IdVille = $dataV2['IdVille'];
    endforeach;
    $vehicule = $_POST['vehicule'];
    $query5 = "SELECT * FROM vehicule WHERE Immatriculation='".$vehicule."' ";
    $data5 = $database->read($query5);
    foreach($data5 as $dataV2):
        $IdVehicule = $dataV2['IdVehicule'];
    endforeach;    
    
    $query3 = "INSERT INTO `operation`(`IdUtilisateur`, `Kilometrage`, `DateVente`, `DateDeclaration`, `PresenceCertificat`, `InformationAssurance`, `CederDestruction`, `CertifieSituationAdministrative`, `Transformation`, `OppositionUtilisationDonnees`, `Destruction`, `CertifieAchat`, `IdVille`, `Nature`, `IdVehicule`, `NomOperation`) VALUES ('$id','$Kilometrage','$DateVente','$DateDeclaration','$PresenceCertificat','$InformationAssurance','$CederDestruction','$CertifieSituationAdministrative','$Transformation','$OppositionUtilisationDonnees','$Destruction','$CertifieAchat','$IdVille', 'Achat', '$IdVehicule', '$NomOperation')";
    $data3 = $database->read($query3);
    ?>
        <script>
            location.replace("")
        </script>
    <?php

    die();
};


if (isset($_POST['Vente'])) {
    $id = $_GET['id'];
    $Kilometrage = $_POST['Kilometrage'];
    $DateVente = $_POST['DateVente'];
    $DateDeclaration = $_POST['DateDeclaration'];
    $PresenceCertificat = $_POST['PresenceCertificat'];
    $InformationAssurance = $_POST['InformationAssurance'];
    $CederDestruction = $_POST['CederDestruction'];
    $CertifieSituationAdministrative = $_POST['CertifieSituationAdministrative'];
    $Transformation = $_POST['Transformation'];
    $OppositionUtilisationDonnees = $_POST['OppositionUtilisationDonnees'];
    $CertifieAchat = $_POST['CertifieAchat'];
    $Destruction = $_POST['Destruction'];
    $ville = $_POST['ville'];
    $query2 = "SELECT * FROM ville WHERE Nom='".$ville."' ";
    $data2 = $database->read($query2);
    foreach($data2 as $dataV2):
            $IdVille = $dataV2['IdVille'];
    endforeach;  
    ?>
    <script>
        location.replace("operation.php?id=<?=$id ?>")
    </script>
    <?php
    $query3 = "INSERT INTO `operation`(`IdUtilisateur`, `Kilometrage`, `DateVente`, `DateDeclaration`, `PresenceCertificat`, `InformationAssurance`, `CederDestruction`, `CertifieSituationAdministrative`, `Transformation`, `OppositionUtilisationDonnees`, `Destruction`, `CertifieAchat`, `IdVille`, `Nature`) VALUES ('$id','$Kilometrage','$DateVente','$DateDeclaration','$PresenceCertificat','$InformationAssurance','$CederDestruction','$CertifieSituationAdministrative','$Transformation','$OppositionUtilisationDonnees','$Destruction','$CertifieAchat','$IdVille','Vente')";
    $data3 = $database->read($query3);
    die();
};

?>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Partenaire</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                      
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Nos service</h4>
                    <ul>
                        <li><a href="#">Annonce</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Ticket</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>