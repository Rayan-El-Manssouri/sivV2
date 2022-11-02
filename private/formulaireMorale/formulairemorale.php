<?php 
$query = "SELECT * FROM ville";
$data = $database->read($query);

$query2 = "SELECT * FROM extentionvoie";
$data2 = $database->read($query2);

$query3 = "SELECT * FROM typevoieadresse";
$data3 = $database->read($query3);

error_reporting(0);
?>

<form method="POST">
 <?php echo '<link href="http://localhost/sivV2/private/style/formulaire/formulaire.css" rel="stylesheet">'; ?>

    <div>
        <h3>Situation :</h3>
            <label>
                <input type="radio" name="Pro" value="0" />
                <span >Oui</span>
            </label>
            <label>
                <input type="radio" name="Pro"  value="1" />
                <span >Non</span>
            </label>
        <div>

        </div>
        <br>
        <br>
        <h3>Assureur :</h3>
            <label>
                <input type="radio" name="Assureur" value="0" />
                <span >Oui</span>
            </label>
            <label>
                <input type="radio" name="Assureur"  value="1" />
                <span >Non</span>
            </label>
        <div>
        <div>
            Raison sociale : <input type="text" placeholder="Raison social" name="RaisonSocial"> <br> <br>
            Siret : <input type="text" placeholder="Siret" name="Siret"> <br> <br>
            Numéro de téléphone : <input type="text" placeholder="Numéro de téléphone" name="NumeroDeTelephone"> <br> <br>
            Mail : <input type="text" placeholder="Mail" name="Mail"> <br> <br>
        </div>
        Adresse de l'acheteur <br> <br>
        Numéro de voie : <input type="text" name="NumeroDeVoie" placeholder="Numéro de voie"><br><br>
        <span>Sélectionnez une extension de la voie :</span> <select name="ExtensionDeLaVoie">
        <option value="">Sélectionnez une extension de la voie </option>
        <?php foreach($data2 as $dataV2): ?>
            <option   name="ExtensionDeLaVoie" value="<?= $dataV2['Id'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        <span>Sélectionnez un type de voie adresse :</span> <select name="TypeDeVoieAdresse">
            <option  value="">Sélectionner un type de voie adresse </option>
            <?php foreach($data3 as $dataV2): ?>
            <option  name="TypeDeVoieAdresse" value="<?= $dataV2['Id'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        <span>Nom de la voie : <input type="text" name="NomVoie" placeholder="Nom de la voie"></span><br><br>
        <span>Complement d'adresse 1 : <input type="text" name="ComplementAdresse1" placeholder="Complement d'adresse 1"></span><br><br>
        <span>Complement d'adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement d'adresse 2"></span><br><br>
        <span>Sélectionnez une ville :</span> <select name="ville" >
            <option   value="" >Sélectionner la ville</option>
                <?php foreach($data as $dataV2): ?>
                    <option name="ville"  value="<?= $dataV2['IdVille'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
        </select><br><br>
        <div>
            <input type="submit" name="submit">
            <input type="button" onclick="annuler()" value="Annuler">
        </div>
</form>
<script>
    function annuler(){
        location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/people/AjouterPersonne/")
    }
</script>
<?php 
if(isset($_POST['submit'])){
    // Ajout des variables
    ////////////// Identiter
    $Pro = htmlentities($_POST['Pro']);
    $Assureur = htmlentities($_POST['Assureur']);
    $RaisonSocial = htmlentities($_POST['RaisonSocial']);
    $Siret = htmlentities($_POST['Siret']);
    $NumeroDeTelephone = htmlentities($_POST['NumeroDeTelephone']);
    $Mail = htmlentities($_POST['Mail']);

    // Gestion Adresse
    $NumeroDeVoie = htmlentities($_POST['NumeroDeVoie']);
    $ville = htmlentities($_POST['ville']);
    $ExtensionDeLaVoie = htmlentities($_POST['ExtensionDeLaVoie']);
    $TypeDeVoieAdresse = htmlentities($_POST['TypeDeVoieAdresse']);
    $NomVoie = htmlentities($_POST['NomVoie']);
    $ComplementAdresse1 = htmlentities($_POST['ComplementAdresse1']);
    $ComplementAdresse2 = htmlentities($_POST['ComplementAdresse2']);

    
    $query_ville = "SELECT * FROM ville WHERE Nom='".$ville."' ";
    $query_result_ville = $database->read($query_ville);
    foreach ($query_result_ville as $dataV2) {
        $IdVille = $dataV2['IdVille'];
    }
    


    // IdAdresse
    $query7 = "INSERT INTO `adresse`(`IdVille`, `NomVoie`, `ComplementAdresse1`, `NumeroVoie`, `ExtentionVoie`, `TypeVoieAdresse`, `ComplementAdresse2`) VALUES ('$ville','$NomVoie','$ComplementAdresse1','$NumeroDeVoie','$ExtensionDeLaVoie','$TypeDeVoieAdresse','$ComplementAdresse2');";
    $data7 = $database->read($query7);
    
    $query6 = "SELECT IdAdresse FROM adresse;";
    $data6 = $database->read($query6);
    $IdAdresse = $data6[0]['IdAdresse'];

    $query5 ="INSERT INTO `personne`(`ProAuto`, `Assureur`, `NumeroDeTelephone`, `Mail`, `IdAdresse`) VALUES ('$Pro','$Assureur','$NumeroDeTelephone','$Mail', '$IdAdresse');";
    $data5 = $database->read($query5);

    $siv_sql_id_personne = "SELECT  MAX(IdPersonne) as Id FROM personne";
    $siv_sql_id_result = $database->read($siv_sql_id_personne);
    $siv_sql_id = $siv_sql_id_result[0]['Id'];
    
    // Gestion des requêtes + excecutation.
    $query = "INSERT INTO `personnemoral`( `Idpersonne`,`RaisonSocial`, `Siret`) VALUES ('$siv_sql_id','$RaisonSocial','$Siret');";
    $data = $database->read($query);
    ?>
    <script>
        alert("Personne morale bien ajoutée !")
        location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/people/AjouterPersonne")
    </script>
    <?php
}
?>
</div>