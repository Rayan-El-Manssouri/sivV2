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


    <h1>Bievenue sur la page pour rajouter une personne physique. </h1>
    <div class="Formulaire">
        <form method="POST">
            <div>
                <!-- Sexe -->
                --------------- Sexe---------------<br><br>
                <span>Sexe :</span> 
                    <input type="radio"  name="Sexe" value="0">
                    <label for="Féminin">Féminin</label>
                    <input type="radio" name="Sexe">
                    <label for="Masculin"  value="1" > Masculin</label>
                <br>
                <br>
            </div>
            <div>
                --------------- Situation--------------- <br><br>
                <div>
                    <!-- Pro auto -->
                    <span>Pro auto :</span> 
                    <input type="radio"  name="Pro" value="0">
                    <label for="Féminin">Oui</label>
                    <input type="radio" name="Pro"  value="1">
                    <label for="Masculin" > Non</label>
                </div>
                <br>
                <br>
                <!-- Pro auto -->
                <span>Assureur :</span> 
                <input type="radio"  name="Assureur" value="0">
                <label for="Féminin">Oui</label>
                <input type="radio" name="Assureur"  value="1">
                <label for="Masculin" > Nom</label> <br> <br>
                --------------- Identité --------------- <br><br>
                <span>Nom : <input type="text" name="Nom" placeholder="Nom"></span><br><br>
                <span>Nom d'usage : <input type="text" name="Nomdusage" placeholder="Nom d'usage"></span><br><br>
                <span>Prénom : <input type="text" name="Prenom" placeholder="Prénom"></span><br><br>
                <span>Date de naissance : <input type="date" name="DateDenaissance" ></span><br><br>
        
                <span>Numéro de téléphone : <input type="number" placeholder="Numéro de téléphone" name="NumeroDeTelephone"></span><br><br>
                <span>Mail : <input type="mail" name="Mail" placeholder="Mail"></span><br><br>
                ---------------Adresse de l'acheteur--------------- <br> <br>
                <span>Sélectionner une ville :</span> <select name="ville">
                <option value="" >Sélectionner la ville</option>
                <?php foreach($data as $dataV2): ?>
                    <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
                </select><br><br>
                Numéro de voie : <input type="text" name="NumeroDeVoie" placeholder="Numéro de voie"><br><br>
                <span>Sélectionner une extension de la voie :</span> <select name="ExtentionVoie">
                <option value="">Sélectionner une extension de la voie </option>
                <?php foreach($data2 as $dataV2): ?>
                    <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
                </select><br><br>
                <span>Sélectionner une Type de voie adresse :</span> <select name="TypeVoieAdresse">
                 <option value="">Sélectionner une Type de voie adresse </option>
                 <?php foreach($data3 as $dataV2): ?>
                    <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
                </select><br><br>
                <span>Nom de la voie : <input type="text" name="NomVoie" placeholder="Nom de la voie"></span><br><br>
                <span>Complement Adresse 1 : <input type="text" name="ComplementAdresse1" placeholder="Complement Adresse 1"></span><br><br>
                <span>Complement Adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement Adresse 2"></span><br><br>
                <input type="submit" name="send" value="Envoyer">
                <script>
                    function revenir(){
                        location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/personne/")
                    }
                </script>
                <input type="button" name="Anuller" onclick="revenir()" value="Anuller">
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
        $siv_sql_ville = "SELECT * FROM ville WHERE Nom='".$ville."' ";
        $siv_sql_resultat_ville = $database->read($siv_sql_ville);
        foreach ($siv_sql_resultat_ville as $sivV2) {
            $IdVille = $sivV2['IdVille'];
        }


        $NumeroDeTelephone = htmlentities($_POST['NumeroDeTelephone']);
        $Mail = htmlentities($_POST['Mail']);
        $NumeroDeVoie = htmlentities($_POST['NumeroDeVoie']);
        $NomVoie = htmlentities($_POST['NomVoie']);
        $ComplementAdresse1 = htmlentities($_POST['ComplementAdresse1']);
        $ComplementAdresse2 = htmlentities($_POST['ComplementAdresse2']);

             // ID Extention Voie
             $ExtentionVoie = htmlentities($_POST['ExtentionVoie']);
             $siv_sql_id_ExtentionVoie = "SELECT * FROM extentionVoie WHERE Nom='".$ExtentionVoie."' ";
             $siv_sql_id_ExtentionVoie_result = $database->read($siv_sql_id_ExtentionVoie);
     
             foreach($siv_sql_id_ExtentionVoie_result as $sivV2){
                 $idExtentionVoie = $sivV2['Id'];
             }

            // ID Extention Voie
            $TypeVoieAdresse = htmlentities($_POST['TypeVoieAdresse']);
            $siv_sql_id_TypeVoieAdresse = "SELECT * FROM typevoieadresse WHERE Nom='".$TypeVoieAdresse."' ";
            $siv_sql_id_TypeVoieAdresse_result = $database->read($siv_sql_id_TypeVoieAdresse);
                
            foreach($siv_sql_id_TypeVoieAdresse_result as $sivV2){
                $idTypeVoieAdresse = $sivV2['Id'];
            }
     


        // INSERT INTO pour la table adresse
        $siv_insert_adresse = "INSERT INTO `adresse`(`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`) VALUES ('$IdVille','$NomVoie','$ComplementAdresse1','$NumeroDeVoie','$idExtentionVoie','$idTypeVoieAdresse','$ComplementAdresse2')";
        $data6 = $database->read($siv_insert_adresse);


        // IdAdresse de la table ADresse
        $siv_sql_id_personne = "SELECT  MAX(IdAdresse) as Id FROM adresse";
        $siv_sql_id_result_adresse = $database->read($siv_sql_id_personne);
        

        $siv_sql_id_adresse = $siv_sql_id_result_adresse[0]['Id'];



        // INSERT INTO pour la table personne.
        $siv_sql_personne = "INSERT INTO `personne`(`ProAuto`, `Assureur`, `NumeroDeTelephone`, `Mail`, `IdAdresse`) VALUES ('$Pro','$Assureur','$NumeroDeTelephone','$Mail','$siv_sql_id_adresse')";
        $siv_sql_personne_result = $database->read($siv_sql_personne);
        echo $siv_sql_personne;



        // IDpersonne
        $siv_sql_id_personne = "SELECT  MAX(IdPersonne) as Id FROM personne";
        $siv_sql_id_result = $database->read($siv_sql_id_personne);

        $siv_sql_id = $siv_sql_id_result[0]['Id'];

        // INSERT INTO pour la table personne Acheteur.
        $siv_sql_acheteur_personne_physique = "INSERT INTO `personnephysique`( `Nom`, `Nomdusage`, `Prenom`, `DateDenaissance`, `IdVille`, `Idpersonne`) VALUES ('$Nom','$Nomdusage','$Prenom','$DateDenaissance','$IdVille','$siv_sql_id')";
        $siv_result = $database->read($siv_sql_acheteur_personne_physique);
        ?>
        <script>
            location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/personne/physique/Ajouter.php?status=Tous est correct !")
        </script>
        <?php

    }


?>