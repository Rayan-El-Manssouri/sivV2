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
    <title>Ajouter une entreprise</title>
</head>
<body>
     <?php require_once '../../../../../private/php/sidebar.php'; ?>
     <div id="content">
          <header>
               <h1>Ajouter une entreprise</h1>
               <em>Référencer une entreprise cliente.</em>
          </header>
          <section>
               <form method="POST" class="form">
                    <fieldset>
                         <legend>Situation de l'entreprise</legend>
                         <div>
                              <label>Statut professionnel ?</label>
                              <div>
                                   <div><input type="radio" name="pro" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="pro" value="1"><label>Non</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Est un assureur ?</label>
                              <div>
                                   <div><input type="radio" name="assureur" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="assureur" value="1"><label>Non</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Raison sociale : </label>
                              <div>
                                   <div><input type="text" name="raison_sociale"></div>
                              </div>
                         </div>
                         <div>
                              <label>Siret : </label>
                              <div>
                                   <div><input type="text" name="siret"></div>
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
                    <input type="submit" value="Référencer l'entreprise">
               </form>
          </section>
          <?php require_once '../../../../../private/php/footer.php'; ?>
     </div>
</body>
</html>