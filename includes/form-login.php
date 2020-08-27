<!-- Formulaire d'authentification -->
<form id="loginform" method="POST" class="form-horizontal" role="form" >
    <div class="container" style="margin:10% 40% 10% 30%;">
        <div class='row' style="margin-bottom: 3%;">
            <div class="col-md-5">
                <div class="form-heading" style="background: #DF3F3F;margin: 20px 0px 20px 0px; padding: 20px;">
                    <span class="prg" style="color: #ffffff;font-size: 23px; ">SE CONNECTER</span>
                </div>
            </div>
        </div>
        <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:40%;">
            <legend style=" color:#DF3F3F;font-weight:bold; text-transform:capitalize;"></legend>
            <div class='row' style="margin-bottom: 3%;">
                <div class="col" style="margin-top:3%;">
                    <label for="login">Identifiant:</label>
                    <input id="login" type="email" class="form-control" name="email" placeholder="Adresse e-mail" autofocus required>
                </div>
            </div>
            <div class="row" style="margin-bottom: 3%;">
                <div class="col">
                    <label for="password">Mot de Passe:</label>
                    <input id="password" type="password" class="form-control"  style="position: relative;" name="password" placeholder="Mot de passe" required>
                </div>
            </div>
             <div style="margin-top:30px;" class="form-group">
                    <!-- Button -->
                <div class="col-sm-12 controls">
                  <button class="btn btn-lg btn-primary" name="connexion" type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 10%;">SE CONNECTER</button>
                  <!--<a id="btn-fblogin" href="index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; ">ANNULER</a>-->

                </div>
            </div>
        </fieldset>
    </div>
</form>