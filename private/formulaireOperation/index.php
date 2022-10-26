<form method="POST">
    <br>
    <p>Nature : <input type="radio" name="nature" value="Achat">
                 <span>Achat</span>
                 <input type="radio" name="nature" value="Vente">
                 <span>Vente</span>
    </p>
    <br>
    <p>Nom de l'Operation : <input type="text" name="NomOperation" placeholder="NomOperation"></p>
    <br>
    <div>
                        <div>
                            <br>
                            <span>Sélectionner un véhicule :</span>
                            <select name="vehicule" required>
                                <option value="">Séléctionner la véhicule</option>
                                <?php foreach($data4 as $dataV2): ?>
                                <option value="<?= $dataV2['Immatriculation'] ?>">
                                    <p><?= $dataV2['Immatriculation'] ?></p>
                                    </option><?php
                                    endforeach?>
                            </select>
                        </div>
                        <br>

                        <p>Kilométrage : <input type="text" name="Kilometrage" placeholder="Kilométrage"></p>
                        <br>
                        <p>Date Vente : <input type="datetime-local" name="DateVente"></p>
                        <br>
                        <p>Date Declaration : <input type="Date" name="DateDeclaration"></p>
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
                            <select name="ville">
                                <option>Séléctionner la ville</option>
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
                            <select name="ville">
                                <option>Séléctionner  un véhicule</option>
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
                                <option value="1, <?=$dataV2['IdPersonnePhysique']?>">
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
                                <option value="1, <?=$dataV2['IdPersonnePhysique']?>">
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
                        <button class="Bouton"><a href="http://localhost/sivV2/public/connexion/confirmer/DeclarationAchat/">Annuler</a> </button>
                    </div>
</form>