<?php 
$query = "SELECT * FROM ville";
$data = $database->read($query);
$query2 = "SELECT * FROM extentionvoie";
$data2 = $database->read($query2);
$query3 = "SELECT * FROM typevoieadresse";
$data3 = $database->read($query3);
$query4 = "SELECT * FROM ville";
$data4 = $database->read($query4);
?>
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
                <label for="Masculin" > Non</label> <br> <br>
                --------------- Identité --------------- <br><br>
                <span>Nom : <input type="text" name="Non" placeholder="Nom"></span><br><br>
                <span>Nom d'usage : <input type="text" name="Nomdusage" placeholder="Nom d'usage"></span><br><br>
                <span>Prénom : <input type="text" name="Prenom" placeholder="Prénom"></span><br><br>
                <span>Date de naissance : <input type="date" name="DateDenaissance" ></span><br><br>
                <span>Sélectionner une ville :</span> <select name="Ville">
                <option value="">Sélectionner la ville</option>
                <?php foreach($data as $dataV2): ?>
                    <option value=""><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
                </select><br><br>
                <span>Numéro de téléphone : <input type="number" name="NumeroDeTelephone"></span><br><br>
                <span>Mail : <input type="number" name="Mail"></span><br><br>
                ---------------Adresse de l'acheteur--------------- <br> <br>
                Numéro de voie : <input type="text" name="NumeroDeVoie" placeholder="Numéro de voie"><br><br>
                <span>Sélectionner une extension de la voie :</span> <select name="Ville">
                <option value="">Sélectionner une extension de la voie </option>
                <?php foreach($data2 as $dataV2): ?>
                    <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
                </select><br><br>
                <span>Sélectionner une Type de voie adresse :</span> <select name="Ville">
                 <option value="">Sélectionner une Type de voie adresse </option>
                 <?php foreach($data3 as $dataV2): ?>
                    <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
                </select><br><br>
                <span>Nom de la voie : <input type="text" name="NomVoie" placeholder="Nom de la voie"></span><br><br>
                <span>Complement Adresse 1 : <input type="text" name="ComplementAdresse1" placeholder="Complement Adresse 1"></span><br><br>
                <span>Complement Adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement Adresse 2"></span><br><br>
                <input type="submit" name="send" value="Envoyer">
                <input type="submit" name="Anuller" value="Anuller">
                </div>                 
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
        $Non = htmlentities($_POST['Non']);
        $Nomdusage = htmlentities($_POST['Nomdusage']);
        $Prenom = htmlentities($_POST['Prenom']);

        ///////////////////////////
        /// Adresse de la personne physique
        $DateDenaissance = htmlentities($_POST['DateDenaissance']);
        $Ville = htmlentities($_POST['Ville']);
        $NumeroDeTelephone = htmlentities($_POST['NumeroDeTelephone']);
        $Mail = htmlentities($_POST['Mail']);
        $NumeroDeVoie = htmlentities($_POST['NumeroDeVoie']);
        $NomVoie = htmlentities($_POST['NomVoie']);
        $ComplementAdresse1 = htmlentities($_POST['ComplementAdresse1']);
        $ComplementAdresse2 = htmlentities($_POST['ComplementAdresse2']);





        
    }

?>