<?php 
$query = "SELECT * FROM ville";
$data = $database->read($query);

$query2 = "SELECT * FROM extentionvoie";
$data2 = $database->read($query2);

$query3 = "SELECT * FROM typevoieadresse";
$data3 = $database->read($query3);

$query4 = "SELECT * FROM ville";
$data4 = $database->read($query4);

error_reporting(0);
?>
<h1>Bienvenue sur la page pour rajouter une personne physique. </h1>
<div class="Formulaire">
    
<form method="POST" class="formulaire">
    <?php 
    echo '<link href="http://localhost/sivV2/private/style/formulaire/formulaire.css" rel="stylesheet">';
    ?>    
<div>

            <p>Sexe :</p>
            <label>
                <input type="radio" name="Sexe" value="0" />
                <span   >Féminin</span>
            </label>
            <label>
                <input type="radio" name="Sexe"  value="1" />
                <span >Masculin</span>
            </label>
        

    </div>
    <div>
            <span>Pro :</span> 
            <label>
                <input type="radio"  name="Pro" value="0" />
                <span>Oui</span>
            </label>
            <label>
                <input type="radio"  name="Pro" value="1" />
                <span>Non</span>
            </label>


            <span>Auto :</span> 
            <label>
                <input type="radio"  name="Assureur" value="0" />
                <span>Oui</span>
            </label>
            <label>
                <input type="radio" name="Assureur" value="1" />
                <span>Non</span>
            </label>

            

        <p style="padding : 20px; font-size: 30px; border-bottom: 1px solid white; width: 50px;">Identité</p> <br> <br>
        <p>Nom : <input type="text" name="Nom" placeholder="Nom"></p> <br> <br>
        <p>Nom d'usage : <input type="text" name="Nomdusage" placeholder="Nom d'usage"></p> <br> <br>
        <p>Prénom : <input type="text" name="Prenom" placeholder="Prénom"></p> <br> <br>
        <span>Date de naissance : <input type="date" name="DateDenaissance" ></span> <br> <br>

        <span>Numéro de téléphone : <input type="number" placeholder="Numéro de téléphone" name="NumeroDeTelephone"></span> <br> <br>
        <span>Mail : <input type="mail" name="Mail" placeholder="Mail"></span><br><br>
        <p style="padding : 20px; font-size: 30px; border-bottom: 1px solid white; width: 200px;">Adresse</p> <br> <br>

        <span>Sélectionnez une ville :</span> <select name="ville">
        <option value="" >Sélectionnez une ville</option>
        <?php foreach($data as $dataV2): ?>
            <option name="ville" value="<?= $dataV2['IdVille'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        Numéro de voie : <input type="text" name="NumeroDeVoie" placeholder="Numéro de voie"><br><br>
        <span>Sélectionnez une extension de la voie :</span><select name="ExtentionVoie">
        <option value="">Sélectionnez une extension de la voie </option>
        <?php foreach($data2 as $dataV2): ?>
            <option  name="ExtentionVoie" value="<?= $dataV2['Id'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        <span>Sélectionnez un type de voie adresse :</span><select name="TypeVoieAdresse">
            <option value="">Sélectionnez un type de voie adresse</option>
            <?php foreach($data3 as $dataV2): ?>
            <option name="TypeVoieAdresse" value="<?= $dataV2['Id'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        <span>Nom de la voie : <input type="text" name="NomVoie" placeholder="Nom de la voie"></span><br><br>
        <span>Complement d'adresse 1 : <input type="text" name="ComplementAdresse1" placeholder="Complement d'adresse 1"></span><br><br>
        <span>Complement d'adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement d'adresse 2"></span><br><br>
        <input type="submit" name="send" value="Envoyer">
        <script>
            function revenir(){
                location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/personne/")
            }
        </script>
        <input type="button" name="Annuler" onclick="revenir()" value="Annuler">
        </div>    
        <p><?=$_GET['status']?></p>   
                    
</form>
</div>                    
    <?php 
    if(isset($_POST['send'])){
        ///////////////////////////
        // Sexe
        $sexe = htmlentities($_POST['Sexe']);

        //////////////////////////
        /// Pro ou Assureur
        $Pro = htmlentities($_POST['Pro']);
        $Assureur = htmlentities($_POST['Assureur']);

        ///////////////////////////
        /// Identité de la personne physique
        $sexe = htmlentities($_POST['Sexe']);


        ///////////////////////////
        /// Identité de la personne physique
        $Nom = htmlentities($_POST['Nom']);
        $Nomdusage = htmlentities($_POST['Nomdusage']);
        $Prenom = htmlentities($_POST['Prenom']);
        $Nom = htmlentities($_POST['Nom']);
        $Nomdusage = htmlentities($_POST['Nomdusage']);
        $Prenom = htmlentities($_POST['Prenom']);

        ///////////////////////////
        /// Adresse de la personne physique
        $DateDenaissance = htmlentities($_POST['DateDenaissance']);
        $ville = htmlentities($_POST['ville']);

        $NumeroDeTelephone = htmlentities($_POST['NumeroDeTelephone']);
        $Mail = htmlentities($_POST['Mail']);
        $NumeroDeVoie = htmlentities($_POST['NumeroDeVoie']);
        $NomVoie = htmlentities($_POST['NomVoie']);
        $ComplementAdresse1 = htmlentities($_POST['ComplementAdresse1']);
        $ComplementAdresse2 = htmlentities($_POST['ComplementAdresse2']);

        // ID Extention Voie
        $ExtentionVoie = htmlentities($_POST['ExtentionVoie']);
        // ID TypeVoieAdresse Voie
        $TypeVoieAdresse = htmlentities($_POST['TypeVoieAdresse']);



        // INSERT INTO pour la table adresse
        $siv_insert_adresse = "INSERT INTO `adresse`(`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`) VALUES ('$ville','$NomVoie','$ComplementAdresse1','$NumeroDeVoie','$ExtentionVoie','$TypeVoieAdresse','$ComplementAdresse2');";
        $data6 = $database->read($siv_insert_adresse);
        // IdAdresse de la table ADresse
        $siv_sql_id_personne = "SELECT  MAX(IdAdresse) as Id FROM adresse";
        $siv_sql_id_result_adresse = $database->read($siv_sql_id_personne);
        $siv_sql_id_adresse = $siv_sql_id_result_adresse[0]['Id'];
        // INSERT INTO pour la table personne.
        $siv_sql_personne = "INSERT INTO `personne`(`ProAuto`, `Assureur`, `NumeroDeTelephone`, `Mail`, `IdAdresse`) VALUES ('$Pro','$Assureur','$NumeroDeTelephone','$Mail','$siv_sql_id_adresse');";
        $siv_sql_personne_result = $database->read($siv_sql_personne);

        // IDpersonne
        $siv_sql_id_personne = "SELECT  MAX(IdPersonne) as Id FROM personne";
        $siv_sql_id_result = $database->read($siv_sql_id_personne);

        $siv_sql_id = $siv_sql_id_result[0]['Id'];

        // INSERT INTO pour la table personne Acheteur.
        $siv_sql_acheteur_personne_physique = "INSERT INTO `personnephysique`( `Nom`, `Nomdusage`, `Prenom`, `DateDenaissance`, `Idpersonne`, `Sexe`) VALUES ('$Nom','$Nomdusage','$Prenom','$DateDenaissance','$siv_sql_id', '$sexe');";
        $siv_result = $database->read($siv_sql_acheteur_personne_physique);
        ?>

        <script>
            location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/personne/physique/Ajouter.php")
        </script>
        <?php
        
    }    
    ?>
