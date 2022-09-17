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
    <div>
        Situation
        <div>
            <span>Pro auto :</span> 
            <input type="radio"  name="Pro" value="0">
            <label for="Féminin">Oui</label>
            <input type="radio" name="Pro"  value="1">
            <label for="Masculin" > Non</label>
        </div>
        <br>
        <br>
        <span>Assureur :</span>
        <input type="radio"  name="Assureur" value="0">
        <label for="Féminin">Oui</label>
        <input type="radio" name="Assureur"  value="1">
        <label for="Masculin">Nom</label>
        <div>
            Raison sociale : <input type="text" placeholder="Raison social" name="RaisonSocial"> <br> <br>
            Siret : <input type="text" placeholder="Siret" name="Siret"> <br> <br>
            Numéro de téléphone : <input type="text" placeholder="Numéro de téléphone" name="NumeroDeTelephone"> <br> <br>
            Mail : <input type="text" placeholder="Mail" name="Mail"> <br> <br>
        </div>
        Adresse de l'acheteur
        Numéro de voie : <input type="text" name="NumeroDeVoie" placeholder="Numéro de voie"><br><br>
        <span>Sélectionnez une extension de la voie :</span> <select name="ExtensionDeLaVoie">
        <option name="ExtensionDeLaVoie" value="">Sélectionnez une extension de la voie </option>
        <?php foreach($data2 as $dataV2): ?>
            <option  value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        <span>Sélectionnez un type de voie adresse :</span> <select name="TypeDeVoieAdresse">
            <option name="TypeDeVoieAdresse" value="">Sélectionner un type de voie adresse </option>
            <?php foreach($data3 as $dataV2): ?>
            <option value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
        <?php endforeach; ?>
        </select><br><br>
        <span>Nom de la voie : <input type="text" name="NomVoie" placeholder="Nom de la voie"></span><br><br>
        <span>Complement d'adresse 1 : <input type="text" name="ComplementAdresse1" placeholder="Complement d'adresse 1"></span><br><br>
        <span>Complement d'adresse 2 : <input type="text" name="ComplementAdresse2" placeholder="Complement d'adresse 2"></span><br><br>
        <span>Sélectionnez une ville :</span> <select name="ville"  >
            <option name="ville"  value="" >Sélectionner la ville</option>
                <?php foreach($data as $dataV2): ?>
                    <option  value="<?= $dataV2['Nom'] ?>"><?= $dataV2['Nom'] ?></option>
                <?php endforeach; ?>
        </select><br><br>
        <div>
            <input type="submit" name="submit">
            <input type="button" onclick="annuler()" value="Annuler">
        </div>
</form>
<script>
    function annuler(){
        location.replace("http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/personne/")
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
    $siv_sql_id_personne = "SELECT  MAX(IdPersonne) as Id FROM personne";
    $siv_sql_id_result = $database->read($siv_sql_id_personne);
    $siv_sql_id = ++$siv_sql_id_result[0]['Id'];
    $query5 ="INSERT INTO `personne`(`ProAuto`, `Assureur`, `NumeroDeTelephone`, `Mail`, `ComplementAdresse1`, `ComplementAdresse2`, `ExtensionDeLaVoie`) VALUES ('$Pro','$Assureur','$NumeroDeTelephone','$Mail','$ComplementAdresse1','$ComplementAdresse2','$ExtensionDeLaVoie')";
    $data5 = $database->read($query5);
    // Gestion des requêtes + excecutation.
    $query = "INSERT INTO `personnemoral`(`IdVille`, `Idpersonne`,`RaisonSocial`, `Siret`,`NumeroDeVoie`, `TypeDeVoieAdresse`, `NomVoie`, `ComplementAdresse1`, `ComplementAdresse2`) VALUES ('$IdVille','$siv_sql_id','$RaisonSocial','$Siret','$NumeroDeVoie','$TypeDeVoieAdresse','$NomVoie','$ComplementAdresse1','$ComplementAdresse2')";
    $data = $database->read($query);
}
?>
</div>