<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="http://localhost/sivV2/private/style/common.css" rel="stylesheet">
    <link href="http://localhost/sivV2/private/src/logo2.png" rel="icon">
    <title>Ajouter une personne</title>
</head>
<body>
     <?php require_once '../../../../../private/php/sidebar.php'; ?>
     <div id="content">
          <header>
               <h1>Ajouter une personne</h1>
               <em>Enregistrer une personne.</em>
          </header>
          <section>
               <form method="POST" class="form">
                    <fieldset>
                         <legend>Identité</legend>
                         <div>
                              <label>Nom : </label>
                              <div>
                                   <div><input type="text" name="nom"></div>
                              </div>
                         </div>
                         <div>
                              <label>Prénom : </label>
                              <div>
                                   <div><input type="text" name="prenom"></div>
                              </div>
                         </div>
                         <div>
                              <label>Sexe : </label>
                              <div>
                                   <div><input type="radio" name="sexe" value="1"><label>Homme</label></div>
                                   <div><input type="radio" name="sexe" value="0"><label>Femme</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Date de naissance : </label>
                              <div>
                                   <div><input type="date" name="naissance"></div>
                              </div>
                         </div>
                    </fieldset>
                    <fieldset>
                         <legend>Situation</legend>
                         <div>
                              <label>Statut professionnel ?</label>
                              <div>
                                   <div><input type="radio" name="pro" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="pro" value="1"><label>Non</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Est conducteur ?</label>
                              <div>
                                   <div><input type="radio" name="conducteur" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="conducteur" value="1"><label>Non</label></div>
                              </div>
                         </div>
                    </fieldset>
                    <fieldset>
                         <legend>Contacts</legend>
                         <div>
                              <label>Téléphone : </label>
                              <div>
                                   <div><input type="tel" name="telephone"></div>
                              </div>
                         </div>
                         <div>
                              <label>Mail : </label>
                              <div>
                                   <div><input type="email" name="mail"></div>
                              </div>
                         </div>
                    </fieldset>
                    <fieldset>
                         <legend>Adresse</legend>
                         <div>
                              <label>Numéro : </label>
                              <div>
                                   <div><input type="text" name="numero_adresse"></div>
                              </div>
                         </div>
                         <div>
                              <label>Voie : </label>
                              <div>
                                   <div><input type="text" name="voie_adresse"></div>
                              </div>
                         </div>
                         <div>
                              <label>Compléments : </label>
                              <div>
                                   <div><textarea name="complement_adresse"></textarea></div>
                              </div>
                         </div>
                         <div>
                              <label>Ville : </label>
                              <div>
                                   <div><input type="text" name="ville_adresse"></div>
                              </div>
                         </div>
                    </fieldset>
                    <input type="submit" value="Enregistrer la personne">
               </form>
          </section>
          <?php require_once '../../../../../private/php/footer.php'; ?>
     </div>
</body>
</html>