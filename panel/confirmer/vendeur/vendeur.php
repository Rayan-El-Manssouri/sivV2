<?php 
error_reporting(0);
session_start();
require_once '../../../Gestion bdd/connect.php';
$database = new Database();

// Récuperation de toute les adresse
$query1 = "SELECT * FROM adresse";
$data1 = $database->read($query1);

//Récuperation de toute les ville
$query2 = "SELECT * FROM ville";
$data2 = $database->read($query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendeur</title>
    <link href="vendeur.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>

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

<!-- ------------------------------------------------------------------------------------ -->
<!-- Titre pour savoir ou en n'est -->
<h1 style="position:relative; text-align:center; top: 180px;" >Ajouter un vendeur</h1>

<div class="perssone">
        <!-- ------------------------------------------------------------------------------------ -->
        <!-- Bouton pour savoir si le vendeur est une personne physique ou moral-->
        <button id="personne" name="personne">Personne physique</button>
        <button id="moral" name="moral">Personne morale</button>
        <a class="revenir" href="../panel.php?id=<?= $_SESSION['id']?>">
            <button>Revenir a la page principal</button>
        </a>
        </div>
<div>

                <form method="POST" id="personne2">
                    <div class="form">
                        <br> 
                    <!-- ------------------------------------------------------- -->
                    <!-- Identitication visuel de ou on n'a clicker -->
                        Formulaire pour un vendeur considérer comme personne physique <br>
                    <br>
                    <div>

                        <!-- ------------------------------------------------------- -->
                        <!-- Sexe -->
                        <br>
                        <p>---------Sexe-------------</p>
                        <br>
                        <div class="sexe">
                            <span> Féminin</span>
                            <span><input type="radio" name="sexe" value="1"></span>
                            <span> Masculin</span>
                            <span> <input type="radio" name="sexe"value="0"></span>
                        </div>
                        <br>
                        <br>
                        <!-- ------------------------------------------------------- -->
                        <!-- Situation -->
                        <div class="Situation">

                        <!-- ------------------------------------------------------- -->
                        <!-- Situation si la perssone est Pro auto ou Assureur -->
                        <p>---------------Situation---------------</p>
                        <div class="Situation">
                            <!-- ------------------------------------------------------- -->
                            <!-- Situation si la perssone est Pro auto ou Assureur -->
                            <div class="Situation">
                            <span>Pro auto : </span>
                            <span><input type="radio" name="situation" value="0"></span>
                            <span>Oui</span>
                            <span> <input type="radio" name="situation" value="1"></span>
                            <span>Non</span>
                        </div>
                        <br>
                        <br>

                        <!-- ------------------------------------------------------- -->
                        <!-- Identité du vendeur -->
                        <p>---------Identité du vendeur -------------</p>
                            <br>
                            <br>
                            <br>
                            Nom : <input type="text" placeholder="Nom" name="nom">
                            <br>
                            <br>
                            <br>
                            Nom d'usage : <input type="text" placeholder="Nom d'usage" name="NomUsage">
                            <br>
                            <br>
                            <br>
                            Prenom : <input type="text" placeholder="Prenom" name="Prenom">
                            <br>
                            <br>

                       
                        <!-- ------------------------------------------------------- -->
                        <!-- Parti pour gérer l'adresse" de l'acheteur -->
                        <p>---------------Adresse de l'acheteur---------------</p>
                        <br>
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
                        <p>Nom Voie : <input type="text" name="NomVoie" placeholder="Nom Voie"></p>
                        <br>
                        <p>Complement Adresse 1 <input type="text" name="ComplementAdresse1" placeholder="Complement Adresse 1"></p>
                        <br>
                        <p>Complement Adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement Adresse 2"></p>
                        <div>
                        <br>

                        <!-- ------------------------------------------------------- -->
                        <!-- On mais toute les villes dans une selection -->
                        Sélectionner une ville : 
                        <select name="ville" id="">
                            <option>Sélectionner une ville</option>
                            <?php foreach($data2 as $dataV2): ?>
                            <option>
                                <p><?= $dataV2['Nom'] ?> </p>
                            </option>
                            <?php endforeach; ?>
                        </select></p>
                    </div>

                    <!-- ------------------------------------------------------------------------------------ --->
                    <!-- Bouton cacher pour savoir si c'est une personne physique ou moral -->
                    <input type="hidden" value="0" name="PhysiqueMoral">
                    </div>
                    <input type="submit" name="personne" id="personne" class="Bouton" ></input>
                    <button class="Bouton">Annuler</button>
                </form>
            </div>
            </div>
                                    
                   
               </div>

        </div>
            </div>

            <form method="POST" id="moral1">
                        <div class="form">
                            Formulaire pour un acheteur considérer comme personne moral
                        <div>
                                    <br>
                                    <br>
                                    <!-- ------------------------------------------------------- -->
                                    <!-- Situation -->
                                    <div class="Situation">
                                            <!-- ------------------------------------------------------- -->
                                            <!-- Situation si la perssone est Pro auto ou Assureur -->
                                            <p>---------------Situation---------------</p>
                                        </div>
                                        <div class="Situation">
                                            <!-- ------------------------------------------------------- -->
                                            <!-- Situation si la perssone est Pro auto ou Assureur -->
                                            <div class="Situation">
                                            <span>Pro auto : </span>
                                            <span>  <input type="radio" name="situation" value="0"></span>
                                            <span>Oui</span>
                                            <span> <input type="radio" name="situation" value="1"></span>
                                            <span>Non</span>
                                        </div>
                                        <br>
                                        <br>
                                        <!-- Identité du vendeur considérer comme moral -->
                                        <p>---------------Identité---------------</p>
                                        <div>
                                            <br>
                                            <br>
                                            <p>Numéro d'àgremment(VHU) : <input type="text" name="VHU" placeholder="VHU"></p>
                                            <br>
                                            <br>
                                            <p>Siret : <input type="text" name="siret" placeholder="Siret"></p>
                                            <br>
                                            <p>Raison Sociale : <input type="text" name="RaisonSociale" placeholder="Raison Sociale"></p>
                                        </div>

                                        <!-- ------------------------------------------------------- -->
                                        <!-- Parti pour gérer l'adresse" de l'acheteur -->>
                                        <p>---------------Adresse de l'acheteur---------------</p>
                                        <br>
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
                                        <p>Nom Voie : <input type="text" name="NomVoie" placeholder="Nom Voie"></p>
                                        <br>
                                        <p>Complement Adresse 1 <input type="text" name="ComplementAdresse1" placeholder="Complement Adresse 1"></p>
                                        <br>
                                        <p>Complement Adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement Adresse 2"></p>
                                        <div>
                                        <br>

                                        <!-- ------------------------------------------------------- -->
                                        <!-- On mais toute les villes dans une selection -->
                                        Sélectionner une ville : 
                                        <select name="ville" id="">
                                            <option>Sélectionner une ville</option>
                                            <?php foreach($data2 as $dataV2): ?>
                                            <option>
                                                <p><?= $dataV2['Nom'] ?> </p>
                                            </option>
                                            <?php endforeach; ?>
                                        </select></p>
                                            <br>
                                    </div>
                            </div>     
                        </div>
                        <div>
                            <input type="submit" name="personne" id="personne" class="Bouton" ></input>
                            <input type="hidden" value="1" name="PhysiqueMoral">
                            <button class="Bouton">Annuler</button>
                        </div>
                    </form>     
            
           

    <!-- ------------------------------------------------------- -->
    <!-- Script permettant de gérer l’affichage des formulaires en jquery -->    
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
    // Traitement de l'identité du vendeur
    $id = $_GET['id'];
    $ProautoAssureur = $_POST['situation']; 

    if($_POST['situation'] == ""){
        $ProautoAssureur = "NULL";
    }else{
        $PASS = $_POST['situation'];
        $ProautoAssureur = "'".$PASS."' ";
    }


    $sexe = $_POST['sexe'];
    if($_POST['sexe'] == ""){
        $sexe = "NULL";
    }else{
        $s = $_POST['sexe'];
        $sexe = "'".$s."'";
    }
   
    if($_POST['nom'] == ""){
        $nom = "NULL";
    }else{
        $nm = $_POST['nom'];
        $nom = "'".$nm."' ";
    }


    if($_POST['Prenom'] == ""){
        $Prenom = "NULL";
    }else{
        $P = $_POST['Prenom'];
        $Prenom = "'".$P."' ";
    }
    $PhysiqueMoral = $_POST['PhysiqueMoral'];
    if($_POST['NomUsage'] == ""){
        $NomUsage = "NULL";
    }else{
       $NU = $_POST['NomUsage'];
       $NomUsage = "'".$NU."' ";
    }
    if($_POST['RaisonSociale'] == ""){
        $RaisonSociale = "NULL";
    }else{
        $RSE = $_POST['RaisonSociale'];
        $RaisonSociale = "'".$RSE."' " ;
    }

    if($_POST['VHU'] == ""){
        $VHU = "NULL";
    }else{
        $VHU = $_POST['VHU'];
        $VHU = " '".$VHU."'";
    }
    $adresse = $_POST['adresse'];
    $query5 = "SELECT * FROM adresse WHERE NomVoie='".$adresse."' ";
    $data5 = $database->read($query5); 
    $IdAdresse = $data5[0]['IdAdresse'];

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

    //-----------------------------------------------------------------
    //Insertion du vendeur
    $query = "INSERT INTO `vendeur`( `ProautoAssureur`, `PhysiqueMorale`, `Sexe`, `Nom`, `Prenom`, `NomUsage`,`NumAgrement`, `IdUtilisateur`, `IdAdresse`, `IdVille`, `RaisonSocial`) VALUES ($ProautoAssureur,'$PhysiqueMoral', $sexe, $nom, $Prenom, $NomUsage,$VHU,'$id', '$IdAdresseV2', '$IdVille', $RaisonSociale)";
    $data = $database->read($query);

    //-----------------------------------------------------------------
    //Insertion de l'adresse
    $query3 = "INSERT INTO `adresse`(`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`, `IdAdresse`) VALUES ('$IdVille','$NomVoie','$ComplementAdresse1','$NumeroVoie','$ExtentionVoie','$TypeVoieAdresse','$ComplementAdresse2','$IdAdresseV2')";
    $data3 = $database->read($query3);


    //-----------------------------------------------------------------
    //replacement pour éviter de renvoyer le formulaire aux rafraîchissement
    ?>
    <script>
        location.replace("")
    </script>
    <?php
    exit();
};

?>



</body>
</html>