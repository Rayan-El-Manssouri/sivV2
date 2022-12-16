<?php 
session_start();
require_once '../../../Gestion bdd/connect.php';
$database = new Database();

// Récupérer tout les adresses
$query1 = "SELECT * FROM adresse";
$data1 = $database->read($query1);

// Récupérer tout les villes
$query4 = "SELECT * FROM ville";
$data4 = $database->read($query4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheteur</title>
    <link href="acheteur.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>

<!-- ------------------------------------------------------- -->
<!-- Header -->
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

    <!-- ------------------------------------------------------- -->
    <!--Choix si l'acheteur est une personne physique ou moral-->
    <div class="perssone">
       <h1 style="position: relative; top: 150px; left: 50px;" >Ajouter un acheteur</h1>
        <button id="personne" name="personne">Personne physique</button>
        <button id="moral" name="">Personne morale</button>
        <a href="../panel.php?id=<?= $_SESSION['id']?>">
            <button  class="principal">Revenir a la page principal</button>
        </a>
        </div>
    <div>
                <!-- ------------------------------------------------------- -->
                <!-- Formulaire pour une personne physique -->
                <form method="POST" id="personne2">
                    <div class="form">
                        <br>
                        Formulaire pour une personne physique
                        <br>
                        <br>
                        <br>

                        <!-- ------------------------------------------------------- -->
                        <!-- Si la personne est F ou M -->
                        <p>---------------Sexe---------------</p>
                        <div class="sexe">
                        <span>Féminin</span>
                            <span><input type="radio" name="sexe" value="0"></span>
                            <span> Masculin</span>
                            <span><input type="radio" name="sexe"value="1"></span>     

                        </div> 
                        <br>    
                        <div class="Situation">
                            <!-- ------------------------------------------------------- -->
                            <!-- Situation si la perssone est Pro auto ou Assureur -->
                            <p>---------------Situation---------------</p>
                            <div class="Situation">
                            <span>Pro auto </span>
                            <span>  <input type="radio" name="situation" value="0"></span>
                            <span>Oui</span>
                            <span> <input type="radio" name="situation" value="1"></span>
                            <span>Non</span>
                        </div>
                        <br>
                        <br>
                        <!-- --------------------------------------------------------------------------------------------------- -->
                        <!-- Parti pour gérer l'identité" de l'acheteur -->
                        <p>---------------Identité de l'acheteur---------------</p>
                            <br>
                            Nom : <input type="text" placeholder="Nom" name="nom">
                            <br>
                            <br>
                            Nom d'usage : <input type="text" placeholder="Nom d'usage" name="NomUsage">
                            <br>
                            <br>
                            Prénom : <input type="text" placeholder="Prenom" name="Prenom">
                            <br>
                            <br>
                            <p>Date de naissance : <input type="date" placeholder="Date de naissance" name="DateNaissance"></p>
                            <br>
                            <p> Sélectionner une Commune de naissance :
                            <select name="CommuneDenaissance">
                                <option>Sélectionner une Commune de naissance </option>
                                <?php foreach($data4 as $dataV2): ?>
                                <option value="<?=$dataV2['Nom']?>">
                                    <p><?= $dataV2['Nom'] ?> </p>
                                </option>
                                <?php endforeach; ?>
                            </select></p>
                            <br>
                            <input type="hidden" value="0" name="PhysiqueMoral">
                            <p>Numéro de téléphone : <input type="text" placeholder="téléphone" name="TelephonePortable"></p>
                            <br>
                            Numéro d’agrément(VHU) : <input type="text" name="VHU" placeholder="VHU">
                            <br>
                            <br>
                            <p>Mail : <input type="text" placeholder="Mail" name="Mail"></p>
                            <br>

                           <!-- ------------------------------------------------------- -->
                        <!-- Parti pour gérer l'adresse" de l'acheteur -->
                        <p>---------------Adresse de l'acheteur---------------</p>
                        <p>Numero Voie : <input type="text" name="NumeroVoie" placeholder="Numero Voie"></p>
                        <br>
                        <p>Extention Voie : <select name="ExtentionVoie">
                            <option></option>
                            <option>BIS</option>
                            <option>TER</option>
                            <option>QUATER</option>
                            <option>QUINQUIES</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>  </p>
                        <span>Type de voie adresse :</span>
                        <select name="TypeVoieAdresse">
                            <option></option>
                            <option>RUE</option>
                            <option>AVENUE</option>
                            <option>BOULEVARD</option>
                            <option>ALLEE</option>
                            <option>PLACE</option>
                            <option>ROUTE</option>
                            <option>CENTRE</option>
                            <option>CTRE CIAL</option>
                            <option>IMMEUBLE</option>
                            <option>IMPASSE</option>
                            <option>LIEU-DIT</option>
                            <option>LOTISSEMENT</option>
                            <option>PASSAGE</option>
                            <option>RESIDENCE</option>
                            <option>RESIDENCE PRIVE</option>
                            <option>RONDPOINT</option>
                            <option>SQUARE</option>
                            <option>VILLAGE</option>
                            <option>Z.A</option>
                            <option>Z.A.C</option>
                        </select>
                        <p>Nom Voie : <input type="text" name="NomVoie" placeholder="Nom Voie"></p>
                        <br>
                        <p>Complement Adresse 1 <input type="text" name="ComplementAdresse1" placeholder="Complement Adresse 1"></p>
                        <br>
                        <br>
                        
                        <br>
                      
                        <br>
                        <br>

                        <p>Complement Adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement Adresse 2"></p>
                        <br>
                        <!-- ------------------------------------------------------- -->
                        <!-- On mais toute les villes dans une selection -->
                        <p> Sélectionner une ville :
                        <select name="ville" id="" required>
                            <option value="">Sélectionner une ville </option>
                            <?php foreach($data4 as $dataV2): ?>
                            <option>
                                <p><?= $dataV2['Nom'] ?> </p>
                            </option>
                            <?php endforeach; ?>
                        </select></p>
                       
                    </div>
                    <br>

                    <!-- Bouton de redirection -->
                    <input type="submit" name="personne" id="personne" class="Bouton" ></input>
                    <input type="hidden" name="personne" value="0">
                    <button class="Bouton">Annuler</button>
                </form>
            </div>
            </div>
            <div class="form">
                <form method="POST" id="moral1">  
                        <!-- ------------------------------------------------------- -->
                        <!-- class pour gérer le style de la situation -->
                        <br>
                        Formulaire pour une personne moral
                        <br>
                        <br>
                        <br>
                        <div class="Situation">
                            <!-- ------------------------------------------------------- -->
                            <!-- Situation si la perssone est Pro auto ou Assureur -->
                            <p>---------------Situation---------------</p>
                            <div class="Situation">
                            <span>Pro auto </span>
                            <span>  <input type="radio" name="situation" value="0"></span>
                            <span>Oui</span>
                            <span> <input type="radio" name="situation" value="1"></span>
                            <span>Non</span>
                        </div>
                        <!-- ------------------------------------------------------- -->
                        <!-- Parti pour gérer l'identité" de l'acheteur -->
                        <p>---------------Identité de l'acheteur---------------</p>
                        <br>
                        <p>Raison social : <input type="text" placeholder="RaisonSocial" name="RaisonSocial"></p>
                        <br>
                        <p>Siret : <input type="text" placeholder="Siret" name="Siret"></p>
                        <br>
                        <p>Numéro de téléphone : <input type="text" placeholder="téléphone" name="TelephonePortable"></p>
                        <br>
                        <br>
                        <p>Mail : <input type="text" placeholder="Mail" name="Mail"></p>
                        <br>
                        <input type="hidden" value="" name="CommuneDenaissance"></input>
                        <br>
                        <!-- ------------------------------------------------------- -->
                        <!-- Parti pour gérer l'adresse" de l'acheteur -->
                        <p>---------------Adresse de l'acheteur---------------</p>
                        <p>Numero Voie : <input type="text" name="NumeroVoie" placeholder="Numero Voie"></p>
                        <br>
                        <p>Nom Voie : <input type="text" name="NomVoie" placeholder="Nom Voie"></p>
                        <br>
                        <p>Complement Adresse 1 <input type="text" name="ComplementAdresse1" placeholder="Complement Adresse 1"></p>
                        <br>
                        <br>
                        <p>Extention Voie : <select name="ExtentionVoie">
                            <option></option>
                            <option>BIS</option>
                            <option>TER</option>
                            <option>QUATER</option>
                            <option>QUINQUIES</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>  </p>
                        <br>
                        <span>Type de voie adresse :</span>
                        <select name="TypeVoieAdresse">
                            <option></option>
                            <option>RUE</option>
                            <option>AVENUE</option>
                            <option>BOULEVARD</option>
                            <option>ALLEE</option>
                            <option>PLACE</option>
                            <option>ROUTE</option>
                            <option>CENTRE</option>
                            <option>CTRE CIAL</option>
                            <option>IMMEUBLE</option>
                            <option>IMPASSE</option>
                            <option>LIEU-DIT</option>
                            <option>LOTISSEMENT</option>
                            <option>PASSAGE</option>
                            <option>RESIDENCE</option>
                            <option>RESIDENCE PRIVE</option>
                            <option>RONDPOINT</option>
                            <option>SQUARE</option>
                            <option>VILLAGE</option>
                            <option>Z.A</option>
                            <option>Z.A.C</option>
                        </select>
                        <br>
                        <br>

                        <p>Complement Adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement Adresse 2"></p>
                        <br>
                        <!-- ------------------------------------------------------- -->
                        <!-- On mais toute les villes dans une selection -->
                        <p> Sélectionner une ville :
                        <select name="ville" id="" required>
                            <option value="">Sélectionner une ville </option>
                            <?php foreach($data4 as $dataV2): ?>
                            <option>
                                <p><?= $dataV2['Nom'] ?> </p>
                            </option>
                            <?php endforeach; ?>
                        </select></p>
                        <!-- ------------------------------------------------------- -->
                        <!-- Bouton de redirection -->
                        <input type="submit" name="personne" id="personne" class="Bouton" ></input>
                        <input type="hidden" name="personne" value="1">
                        <button class="Bouton">Annuler</button>
                </form>
            </div>

    <!-- ------------------------------------------------------- -->
    <!-- Script pour afficher les formulaires en fonction du bouton qu'on choisit -->
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
if (isset($_POST['personne'])) {
    //-----------------------------------------------------------------
    //Gestion de l'identité de la personne
    $id = $_GET['id'];
    $situation = $_POST['situation'];
    if($_POST['situation'] == ""){
        $situation = "NULL";
    }else{
        $ST = $_POST['situation'];
        $situation = "'".$ST."' ";
    }
    if($_POST['sexe'] == ""){
        $sexe =  "NULL";
    }else{
        $sexe = $_POST['sexe'];
        $SX = $_POST['sexe'];
        $sexe = "'".$SX."'";
    }   

    $nom = $_POST['nom'];
    
    
    if($_POST['NomUsage']== ""){
        $NomUsage = "NULL";
    }else{
        $NUS = $_POST['NomUsage'];
        $NomUsage = "'".$NUS."' ";
    }


    if($_POST['Prenom'] == ""){
        $Prenom = "NULL";
    }else{
        
        $PRN = $_POST['Prenom'];
        $Prenom = "'".$PRN."' " ;
    }


    if($_POST['DateNaissance'] == ""){
        $DateNaissance = "NULL";
    }else{
        $DN =  $_POST['DateNaissance'];
        $DateNaissance = " '".$DN."' ";
    }

    if($_POST['TelephonePortable'] == ""){
        $TelephonePortable = "NULL";
    }else{
        $TL = $_POST['TelephonePortable'];
        $TelephonePortable = " '".$TL."' ";

    }
    if($_POST['Mail'] == ""){
        $Mail = "NULL";
    }else{
        $ML =  $_POST['Mail'];
        $Mail = " '".$ML."' ";
    }
    $PhysiqueMoral = $_POST['PhysiqueMoral'];
    $personne = $_POST['personne'];
    if($_POST['CommuneDenaissance'] == ""){
        $CommuneDenaissance = NULL;
        $IdCommune = "NULL";
    }else{
        $CommuneDenaissance = $_POST['CommuneDenaissance'];
        $query6 = "SELECT * FROM ville WHERE Nom='".$CommuneDenaissance."' ";
        $data6 = $database->read($query6);
        foreach($data6 as $dataV2):
            $IdCommune = $dataV2['IdVille'];
        endforeach;
    }

    if($_POST['Siret'] == ""){
        $Siret = "NULL";
    }else{
        $SR = $_POST['Siret'];
        $Siret = "'".$SR."'  ";
    }
    if($_POST['RaisonSocial'] == ""){
        $RaisonSocial = "NULL";
    }else{
        $RSA = $_POST['RaisonSocial'];
        $RaisonSocial = "'".$RSA."' ";
    }

    //-----------------------------------------------------------------
    //Gestion de l'adresse
    $NomVoie = $_POST['NomVoie'];
    $ComplementAdresse1 = $_POST['ComplementAdresse1'];
    $NumeroVoie = $_POST['NumeroVoie'];
    $ExtentionVoie = $_POST['ExtentionVoie'];
    $TypeVoieAdresse = $_POST['TypeVoieAdresse'];
    $ComplementAdresse2 = $_POST['ComplementAdresse2'];

    //-------------------------------------------------------------------
    // Recuperation de l'id de l'adresse
    $query2 = "SELECT MAX(IdAdresse) as Id FROM adresse";
    $data2 = $database->read($query2);
    $IdAdresse = $data2[0]["Id"];
    $IdAdresseV2 = ++$IdAdresse;
    $ville = $_POST['ville'];

    //-----------------------------------------------------------------
    //Recuperation de la ville
    $query5 = "SELECT * FROM ville WHERE Nom='".$ville."' ";
    $data5 = $database->read($query5);

    foreach($data5 as $dataV2):
        $IdVille = $dataV2['IdVille'];
    endforeach;
    ?>
    <script>
        location.replace("")
    </script>
    <?php
   //-----------------------------------------------------------------
   //Insertion de l'acheteur 
   $query = "INSERT INTO `acheteur`( `ProautoAssureur`, `RaisonSociale`, `PhysiqueMorale`, `Sexe`, `Nom`, `NomUsage`, `Prenom`, `DateNaissance`, `TelephonePortable`, `Mail`, `Siret`, `IdUtilisateur`, `IdVille`,`IdAdresse`, `CommuneDeNaissance`) VALUES ($situation, $RaisonSocial,'$personne', $sexe,'$nom', $NomUsage, $Prenom, $DateNaissance, $TelephonePortable, $Mail, $Siret, '$id', '$IdVille', '$IdAdresseV2', $IdCommune)";
   $data = $database->read($query);
    //-----------------------------------------------------------------
    //Insertion de l'adresse
    $query3 = "INSERT INTO `adresse`(`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`, `IdAdresse`) VALUES ('$IdVille','$NomVoie','$ComplementAdresse1','$NumeroVoie','$ExtentionVoie','$TypeVoieAdresse','$ComplementAdresse2','$IdAdresseV2')";
    $data3 = $database->read($query3);
   
    die();
};
?>

<!-- ------------------------------------------------------- -->
<!-- Footer -->
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