<!-- Formulaire d'authentification -->
<form method="POST" class="form-horizontal">
        <div class="row">
            <div class="col">
                <label for="login">Identifiant</label>
                <input id="login" type="email" class="form-control" name="email" placeholder="Adresse e-mail" autofocus required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" required>
            </div>
        </div>
         <div class="form-group mt-4 text-center">
                <!-- Button -->
            <div class="col-sm-12 controls">
              <button class="btn btn-lg btn-primary" name="connexion" type="submit">Connexion</button>
            </div>
        </div>
</form>