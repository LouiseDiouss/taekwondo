<!--<form method="post">-->
   
    <div class="form-group" style="margin-top: 25px;">
        <label for="nom">Nom</label>
        <input type="nom" class="form-control" placeholder="" name="nom" id="nom" required
                value="<?php if(isset($user)) echo $user['nom_user'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <label for="prenom">Prénom</label>
        <input type="prenom" class="form-control" placeholder="" name="prenom" id="prenom" required
                value="<?php if(isset($user)) echo $user['prenom_user'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
    <div class="form-group" style="margin-top: 25px;">
        <label for="dateEtLieu">Date et Lieu de Naissance</label>
        <input type="dateEtLieu" class="form-control" placeholder="" name="dateEtLieu" id="dateEtLieu" required
                value="<?php if(isset($user)) echo $user['dateNaissance'] . '  à '.$user['lieuNaissance'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <label for="sexe">Sexe</label>
        <input type="sexe" class="form-control" placeholder="" name="sexe" id="sexe" required
                value="<?php if(isset($user)) echo $user['sexe'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
    <div class="form-group" style="margin-top: 25px;">
        <label for="adresse">Adresse</label>
        <input type="adresse" class="form-control" placeholder="" name="adresse" id="adresse" required
                value="<?php if(isset($user)) echo $user['adresse_user']. ' '.$user['code_postal_user'].' '.$user['ville_user'];  ?>">
        <div class="invalid-feedback">oups!!!! adresse pas chargée</div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="" name="email" id="email" required
                value="<?php if(isset($user)) echo $user['email_user'];?>">
        <div class="invalid-feedback">
            oups!!!! verifiez l'adresse
        </div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <div class="form-row" >
            <label for="telephone">Téléphone</label>
            <input type="telephone" class="form-control" placeholder="" name="telephone" id="telephone" required
                    value="<?php if(isset($user)) echo $user['telephone_user'];  ?>">
         </div>
         <div class="form-row" >
            <label for="telResponsable" style="margin-top: 15px;">Téléphone Responsable</label>
            <input type="telResponsable" class="form-control" placeholder="" name="telResponsable" id="telResponsable" required
                    value="<?php if(isset($user)) echo $user['telResponsable']; ?>">
         </div>
        <div class="invalid-feedback">
            oups!!!! </div>
    </div>
    
     <div class="form-group" style="margin-top: 25px;">
        <label for="numLicence">Licence Sportive</label>
        <input type="numLicence" class="form-control" placeholder="" name="numLicence" id="numLicence" required
                value="<?php if(isset($user)) echo $user['numLicence'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>

     <div class="form-group" style="margin-top: 25px;">
        <label for="passeportSportif">Passeport Sportif</label>
        <input type="passeportSportif" class="form-control" placeholder="" name="passeportSportif" id="passeportSportif" required
                value="<?php if(isset($user)) echo $user['passeportSportif'];?>">
        <div class="invalid-feedback">
            oups!!!! verifiez l'adresse
        </div>
    </div>
   
    
 
