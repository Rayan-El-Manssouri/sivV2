<form method="POST">
    <br>
    <p>Nature : <input type="radio" name="nature" value="Achat">
                 <span>Achat</span>
                 <input type="radio" name="nature" value="Vente">
                 <span>Vente</span>
    </p>
    <br>
    <p>Nom de l'Operation : <input type="text" name="NomOperation" placeholder="Nom Operation" required></p>
    <br>
    <div>
                        <br>

                        <p>Kilométrage : <input type="num" name="Kilometrage" placeholder="Kilométrage" required></p>
                        <br>
                        <p>Date Vente : <input type="datetime-local" name="DateVente" required ></p>
                        <br>
                        <p>Date Declaration : <input type="Date" name="DateDeclaration" required></p>
                        <br>
                        <div>
                            <br>
                            <div>
                            <span>Presence Certificat :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="PresenceCertificat" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="PresenceCertificat" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Information Assurance :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="InformationAssurance" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="InformationAssurance" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Ceder Destruction :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="CederDestruction" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CederDestruction" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Certifie Situation Administrative :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="CertifieSituationAdministrative" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieSituationAdministrative" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Transformation :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="Transformation" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Transformation" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Opposition Utilisation Donnees :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="OppositionUtilisationDonnees" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="OppositionUtilisationDonnees" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Certifie Achat :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="CertifieAchat" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="CertifieAchat" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <div>
                            <span>Destruction :</span>
                                <span style="position: relative; left: 10px;">
                                    <span>Oui</span>
                                        <span> <input type="radio" name="Destruction" value="0"></span>
                                        <span>Non</span>
                                        <span><input type="radio" name="Destruction" value="1"></span>
                                </span>
                                   
                            </div>
                            <br>
                        </div>
                        <br>

                        <div>
                            <br>
                            <span>Sélectionner une ville :</span>
                            <select name="ville" required>
                                <option value="">Séléctionner la ville</option>
                                <?php 
                                $SetupVille = "SELECT * FROM `ville`";
                                $ExuctVille = $database->read($SetupVille);
                                
                                ?>
                                <?php foreach($ExuctVille as $dataV2): ?>
                                <option value="<?= $dataV2['IdVille']?> ">
                                    <?= $dataV2['Nom'] ?> 
                                    </option><?php
                                    endforeach?>
                            </select>
                            <br>
                            <br>
                            <span>Sélectionner un véhicule :</span>
                            <select name="vehicule">
                                <option value="">Séléctionner un véhicule</option>
                                <?php 
                                $Setupvehicule = "SELECT * FROM `vehicule`";
                                $Exuctvehicule = $database->read($Setupvehicule);
                                
                                ?>
                                <?php foreach($Exuctvehicule as $dataV2): ?>
                                <option value="<?= $dataV2['IdVehicule']?> ">
                                    <?= $dataV2['Immatriculation'] ?> 
                                    </option><?php
                                    endforeach?>
                            </select>
                            <br>
                            <br>
                            <span>Sélectionne un acheteur :</span>
                            <select name="acheteur">
                                <option value="">Personne Physique</option>
                                <?php foreach($data5 as $dataV2): ?>
                                <option value="1,<?=$dataV2['IdPersonnePhysique']?>">
                                    <?= $dataV2['Nom'] ?>
                                    </option><?php
                                    endforeach?>
                                <option value="">Personne Moral</option>
                                <?php foreach($data6 as $dataV2): ?>
                                <option value="2,<?=$dataV2['IdPersonneMoral'] ?>">
                                <?=$dataV2['RaisonSocial'] ?>
                                    </option><?php
                                    endforeach?>
                            </select>
                            <br>
                            <br>
                            <span>Sélectionne un vendeur :</span>
                            <select name="vendeur">
                                <option value="">Personne Physique</option>
                                <?php foreach($data5 as $dataV2): ?>
                                <option value="1,<?=$dataV2['IdPersonnePhysique']?>">
                                    <?= $dataV2['Nom'] ?>
                                    </option><?php
                                    endforeach?>
                                <option value="">Personne Moral</option>
                                <?php foreach($data6 as $dataV2): ?>
                                <option value="2,<?=$dataV2['IdPersonneMoral'] ?>">
                                <?=$dataV2['RaisonSocial'] ?>
                                    </option><?php
                                    endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="Bouton2">
                        <input type="submit" name="send" id="personne" class="Bouton" ></input>
                        <script>
                            function revenir(){
                                location.replace("http://localhost/siv/public/connexion/confirmer/")
                            }
                        </script>
                        <button class="Bouton" onclick="revenir()">Annuler </button>
                    </div>
</form>