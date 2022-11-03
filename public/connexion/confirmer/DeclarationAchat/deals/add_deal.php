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
    <title>Ajouter une opération</title>
</head>
<body>
     <?php require_once '../../../../../private/php/sidebar.php'; ?>
     <div id="content">
          <header>
               <h1>Ajouter une opération</h1>
               <em>Créez une opération.</em>
          </header>
          <section>
               <form method="POST" class="form">
                    <fieldset>
                         <legend>Informations générales</legend>
                         <div>
                              <label>Nature : </label>
                              <div>
                                   <div><input type="radio" name="nature" value="achat"><label>Achat</label></div>
                                   <div><input type="radio" name="nature" value="vente"><label>Vente</label></div>
                                   <div><input type="radio" name="nature" value="destruction"><label>Destruction</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Kilométrage : </label>
                              <div>
                                   <div><input type="number" name="kilometrage"></div>
                              </div>
                         </div>
                         <div>
                              <label>Date de déclaration : </label>
                              <div>
                                   <div><input type="date" name="date_declaration"></div>
                              </div>
                         </div>
                         <div>
                              <label>Date de vente : </label>
                              <div>
                                   <div><input type="date" name="date_vente"></div>
                              </div>
                         </div>
                         <div>
                              <label>Opposition à l'utilisation des données : </label>
                              <div>
                                   <div><input type="radio" name="utilisation_donnees" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="utilisation_donnees" value="1"><label>Non</label></div>
                              </div>
                         </div>
                    </fieldset>
                    <fieldset>
                         <legend>Liaisons</legend>
                         <div>
                              <label>Ville : </label>
                              <div>
                                   <div><select name="ville"></select></div>
                              </div>
                         </div>
                         <div>
                              <label>Véhicule : </label>
                              <div>
                                   <div><select name="vehicule"></select></div>
                              </div>
                         </div>
                         <div>
                              <label>Acheteur : </label>
                              <div>
                                   <div><select name="acheteur"></select></div>
                              </div>
                         </div>
                         <div>
                              <label>Vendeur : </label>
                              <div>
                                   <div><select name="vendeur"></select></div>
                              </div>
                         </div>
                    </fieldset>
                    <fieldset>
                         <legend>Certifications</legend>
                         <div>
                              <label>Assurance : </label>
                              <div>
                                   <div><input type="radio" name="assurance" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="assurance" value="1"><label>Non</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Situation administrative : </label>
                              <div>
                                   <div><input type="radio" name="situation_administrative" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="situation_administrative" value="1"><label>Non</label></div>
                              </div>
                         </div>
                         <div>
                              <label>Achat : </label>
                              <div>
                                   <div><input type="radio" name="achat" value="0"><label>Oui</label></div>
                                   <div><input type="radio" name="achat" value="1"><label>Non</label></div>
                              </div>
                         </div>
                    </fieldset>
                    <input type="submit" value="Enregistrer l'opération">
               </form>
          </section>
          <?php require_once '../../../../../private/php/footer.php'; ?>
     </div>
</body>
</html>