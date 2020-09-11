<!-- Form d'inscription -->
 <form id="loginform" method="POST" class="form-horizontal" role="form" >
    <div class="container" style="margin:5% 8% 3% 8%;">
        <div class='row' style="margin-bottom: 3%;">
            <div class="col-md-10">
                <div class="form-heading" style="background: #DF3F3F;margin: 20px 0px 20px 0px; padding: 20px; ">
                    <span class="prg" style="color: #ffffff;font-size: 23px; ">FORMULAIRE D'INSCRIPTION</span>
                </div>
            </div>
        </div>


        <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
            <legend style=" color:#DF3F3F;font-weight:bold; text-transform:capitalize;margin-top: 35px">Vous</legend>
            <div class='form-row' style="margin-bottom: 3%;">
                <div class="col">
                    <label for="nom">Nom <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="nom" type="text" class="form-control" name="nom" placeholder="Nom"
                           value="<?= (isset($userToEdit))? $userToEdit['nom_user']:''?>" required>
                </div>

                <div class="col">
                    <label for="prenom">Prénom <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="prenom" type="text" class="form-control"  style="position: relative;" name="prenom" placeholder="Prénom"
                           value="<?= (isset($userToEdit))? $userToEdit['prenom_user']:''?>" required>
                </div>
            </div>

             <div class="form-row">
                <div class="col">
                    <label for="sexe">Genre <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <select name="sexe" class="custom-select" id="sexe" required>
                        <option selected>Genre</option>
                        <option value="homme"
                            <?php if(isset($userToEdit) && strcmp($userToEdit['sexe'], 'homme') == 0){?>
                        selected <?php } ?>>Homme</option>
                        <option value="femme"
                            <?php if(isset($userToEdit) && strcmp($userToEdit['sexe'], 'femme') == 0){?>
                                selected <?php } ?>>Femme</option>
                    </select>
                </div>

                <div class="col">
                        <label for="dateNaissance">Date Naissance <abbr title="Obligatoire" style="color: red">*</abbr></label>
                        <input id="dateNaissance" type="date" class="form-control" name="dateNaissance"
                               placeholder="Date de naissance" required
                               value="<?= (isset($userToEdit))? $userToEdit['dateNaissance']:''?>" >
                </div>
            </div>
            <div class=form-row>
                <div class="col">
                        <label for="LieuNaissance">Lieu naissance <abbr title="Obligatoire" style="color: red">*</abbr></label>
                        <input id="LieuNaissance" type="text" class="form-control" name="lieuNaissance"
                               placeholder="Lieu de naissance" required
                               value="<?= (isset($userToEdit))? $userToEdit['lieuNaissance']:''?>" >
                </div>
                 <div class="col">
                     <label for="nationalite">Nationalité</label>
                     <input type="text" class="form-control" name="nationalite" placeholder="Nationalité"
                            value="<?= (isset($userToEdit))? $userToEdit['nationalite']:''?>" />
                 </div>
            </div>
        </fieldset>
         <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
             <legend style=" color:#DF3F3F;font-weight:bold;text-transform:;">Vos coordonnées</legend>
            <div class="form-row">
                <div class="col">
                        <label for="adresse">Adresse <abbr title="Obligatoire" style="color: red">*</abbr></label>
                            <input id="adresse" type="text" class="form-control" name="adresse" placeholder="Adresse"
                                   value="<?= (isset($userToEdit))? $userToEdit['adresse_user']:''?>" required>
                </div>
                <div class="col">
                    <label for="codePostal">Code postal <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="codePostal" type="text" minlength="2" maxlength="5"  class="form-control"
                           name="codePostal" placeholder="Code postal"
                           value="<?= (isset($userToEdit))? $userToEdit['code_postal_user']:''?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="ville">Ville <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="ville" type="text" class="form-control" name="ville" placeholder="Ville"
                           value="<?= (isset($userToEdit))? $userToEdit['ville_user']:''?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="téléphone">Téléphone <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="telephone" type="text" class="form-control" name="telephone" placeholder="Téléphone"
                           value="<?= (isset($userToEdit))? $userToEdit['telephone_user']:''?>" required>
                </div>
                <div class="col">
                    <label for="telResponsable">Téléphone responsable</label>
                    <input id="telResponsable" type="tel" class="form-control" name="telResponsable"
                           placeholder="Téléphone responsable" value="<?= (isset($userToEdit))? $userToEdit['telResponsable']:''?>">
                </div>
            </div>
        </fieldset>
        <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
            <legend style=" color:#DF3F3F;font-weight:bold;text-transform:;">Identifiants de connexion</legend>
            <div class="form-row">
               <div class="col">
                    <label for="email">Email <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                           value="<?= (isset($userToEdit))? $userToEdit['email_user']:''?>" required>
                </div>
            </div>

            <?php if (!isset($_SESSION['profil'])){ ?>
                <div class="form-row">
                    <div class="col">
                        <label for="password">Mot de passe <abbr title="Obligatoire"
                                                                 style="color: red">*</abbr></label>
                        <input id="password" type="password" class="form-control" name="password"
                               placeholder="Mot de passe" required>
                    </div>
                    <div class="col">
                        <label for="pass2"> Confirmer mot de passe <abbr title="Obligatoire"
                                                                         style="color: red">*</abbr></label>
                        <input id="pass2" type="password" class="form-control"
                               name="confirm-password" placeholder="Confirmation de mot de passe"
                               required>
                    </div>
                </div>
            <?php } ?>
         </fieldset>
          <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
             <legend style=" color:#DF3F3F;font-weight:bold;text-transform:;">Infos sportives</legend>
            <div class="row">
                <div class="col">
                    <label for="numLicence">Numéro Licence <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="numLicence" type="text" class="form-control" name="numLicence" placeholder="Numéro de licence"
                           value="<?= (isset($userToEdit))? $userToEdit['numLicence']:''?>" required>
                </div>
                <div class="col">
                    <label for="passeportSportif">Passeport Sportif <abbr title="Obligatoire" style="color: red">*</abbr></label>
                    <input id="passeportSportif" type="text" class="form-control" name="pass-sport" placeholder="Passeport sportif"
                           value="<?= (isset($userToEdit))? $userToEdit['passeportSportif']:''?>" required>
                </div>
            </div>
         </fieldset>
        <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:83%; text-align:center;">
            <div >
                <div style="margin-top:8px" class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                      <button class="btn btn-lg btn-primary" name="demandeInscription" type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 5%;">Enregistrer</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</form>
   
       