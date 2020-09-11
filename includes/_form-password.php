<form id="loginform" method="POST">
    <!--<div class="container" style="margin:10% 8% 10% 25%;">
        <div class='row' style="margin-bottom: 3%;">
            <div class="col-md-6">
                <div class="form-heading" style="background: #DF3F3F;margin: 20px 0px 20px 0px; padding: 20px; ">
                    <span class="prg" style="color: #ffffff;font-size: 23px; ">SAISIE MOT DE PASSE</span>
                </div>
            </div>
        </div>

        <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:50%;">
            <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;"></legend>

            <div class="form-group">
                <div class="form-row">

                <!--div class="col"--
                    <label for="password">Mot de passe : </label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                </div>
                <div class="form-row">
                    <label for="pass2"> Confirmer mot de passe :</label>
                    <input id="pass2" type="password" class="form-control" name="confirm-password" placeholder="Confirmer mot de passe" required>
                </div>
            </div>
         </fieldset>

        <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:50%; text-align:center;">
            <div >
                <div style="margin-top:8px" class="form-group">
                    <!-- Button --

                    <div class="col-sm-12 controls">

                      <button class="btn btn-lg btn-primary" name="password-write" type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 5%;">CONFIRMER</button>
                      <!--<a id="btn-fblogin" href="./index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; ">ANNULER</a>--
                    </div>
                </div>
            </div>
        </fieldset>
    </div>-->

    <div class="row">
        <div class="col">
            <label for="password">Mot de passe <abbr title="Obligatoire" style="color: red">*</abbr></label>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" autofocus required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="confirm-password">Ressaisir mot de passe <abbr title="Obligatoire" style="color: red">*</abbr></label>
            <input type="password" class="form-control" name="confirm-password" placeholder="Ressaisir mot de passe" required>
        </div>
    </div>
    <div class="form-group mt-4 text-center">
        <!-- Button -->
        <div class="col-sm-12 controls">
            <button class="btn btn-lg btn-primary" name="create-password" type="submit">Enregistrer</button>
        </div>
    </div>
</form>