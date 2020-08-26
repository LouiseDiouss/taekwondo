<!--<form method="post">-->
   
    <div class="form-group" style="margin-top: 25px;">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" placeholder="" name="nom" id="nom" required
                value="<?php if(isset($user)) echo $user['nom'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" placeholder="" name="prenom" id="prenom" required
                value="<?php if(isset($user)) echo $user['prenom'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <label for="nationalite">Nationalité</label>
        <input type="text" class="form-control" placeholder="" name="nationalite" id="nationalite" required
                value="<?php if(isset($user)) echo $user['nationalite'];?>">
        <div class="invalid-feedback">
            oups!!!! la nationalité existante n'a pas été chargée
        </div>
    </div>
    <div class="form-group" style="margin-top: 25px;">
        <label for="dateNaissance">Date de Naissance</label>
        <input type="date" class="form-control" placeholder="" name="dateNaissance" id="dateNaissance" required
                value="<?php if(isset($user)) echo $user['dateNaissance'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
    <div class="form-group" style="margin-top: 25px;">
        <label for="lieuNaissance"> Lieu de Naissance</label>
        <input type="text" class="form-control" placeholder="" name="lieuNaissance" id="lieuNaissance" required
                value="<?php if(isset($user)) echo $user['lieuNaissance'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>
    
     <div class="form-group" style="margin-top: 25px;">
        <label for="sexe">Genre</label>
        <!--input type="sexe" class="form-control" placeholder="" name="sexe" id="sexe" required value="<?php if(isset($user)) echo $user['sexe'];?>"-->
        <select class="form-control custom-select" name="sexe" id="sexe" required>
            <option value="">le sexe </option>
            <option value="homme" <?php if(isset($user) && $user['sexe'] =='homme'){?>  selected <?php } ?> >Homme</option>
            <option value="femme" <?php if(isset($user) && $user['sexe'] == 'femme'){?>selected <?php }?>>Femme</option>
        </select>
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>

    <div class="form-group" style="margin-top: 25px;">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" placeholder="" name="adresse" id="adresse" required
                value="<?php if(isset($user)) echo $user['adresse']; ?>">
        <div class="invalid-feedback">oups!!!! adresse pas chargée</div>
    </div>
    <div class="form-group" style="margin-top: 25px;">
        <label for="codePostal">Code Postal</label>
        <input type="text" class="form-control" placeholder="" name="codePostal" id="codePostal" required
                value="<?php if(isset($user)) echo $user['codePostal'];  ?>">
        <div class="invalid-feedback">oups!!!! Code Postal pas chargée</div>
    </div>
    <div class="form-group" style="margin-top: 25px;">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" placeholder="" name="ville" id="ville" required
                value="<?php if(isset($user)) echo $user['ville'];  ?>">
        <div class="invalid-feedback">oups!!!! ville pas chargée</div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="" name="email" id="email" required
                value="<?php if(isset($user)) echo $user['email'];?>">
        <div class="invalid-feedback">
            oups!!!! verifiez l'adresse
        </div>
    </div>
     <div class="form-group" style="margin-top: 25px;">
        <div class="form-row" >
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" placeholder="" name="telephone" id="telephone" required
                    value="<?php if(isset($user)) echo $user['telephone'];  ?>">
         </div>
         <div class="form-row" >
            <label for="telResponsable" style="margin-top: 15px;">Téléphone Responsable</label>
            <input type="text" class="form-control" placeholder="" name="telResponsable" id="telResponsable" required
                    value="<?php if(isset($user)) echo $user['telResponsable']; ?>">
         </div>
        <div class="invalid-feedback">
            oups!!!! </div>
    </div>
    
     <div class="form-group" style="margin-top: 25px;">
        <label for="numLicence">Licence Sportive</label>
        <input type="text" class="form-control" placeholder="" name="numLicence" id="numLicence" required
                value="<?php if(isset($user)) echo $user['numLicence'];?>">
        <div class="invalid-feedback">
            oups!!!! 
        </div>
    </div>

     <div class="form-group" style="margin-top: 25px;">
        <label for="passeportSportif">Passeport Sportif</label>
        <input type="text" class="form-control" placeholder="" name="passeportSportif" id="passeportSportif" required
                value="<?php if(isset($user)) echo $user['passeportSportif'];?>">
        <div class="invalid-feedback">
            oups!!!! verifiez l'adresse
        </div>
    </div>
   
    
 
