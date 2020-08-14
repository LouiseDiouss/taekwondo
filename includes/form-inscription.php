  
        <!--div id="inscription" style="margin-top:50px;margin-bottom: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"-->                    
            <!--div class="panel panel-info" style="margin-top: 100px;" >
                    <div class="panel-heading">
                        <div class="panel-title">Formulaire D'inscription</div-->
                        <!--div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div-->
                    <!--/div-->     

                    <!--div style="padding-top:30px;" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div-->
                            
                     <form id="loginform" method="POST"class="form-horizontal" role="form" >
                        <div class="container" style="margin:10% 8% 10% 8%;">
                            <div class='row' style="margin-bottom: 3%;">
                                <div class="col-md-10">
                                    <div class="form-heading">
                                        <span class="prg">FORMULAIRE D'INSCRIPTION</span>
                                    </div>
                                </div>
                            </div>
                            <fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                <legend style=" color:#DF3F3F;font-weight:bold; text-transform:capitalize;">Vous</legend>
                                <div class='row' style="margin-bottom: 3%;">
                                    <div class="col">        
                                        <!--div class="form-group col-md-4"-->
                                                <label for="nom">Nom:</label>
                                                    <!-- <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span> -->
                                                    <input id="nom" type="text" class="form-control" name="nom" value="" placeholder="" required>
                                    </div>
                                            
                                    <div class="col">
                                                <label for="prenom">Prénom:</label>
                                                    <!-- <span class="input-group-addon" style="position: absolute;"><i class="glyphicon glyphicon-user"></i></span> -->
                                                    <input id="prenom" type="text" class="form-control"  style="position: relative;" name="prenom" value="" placeholder=""required>
                                        <!--/div-->
                                    </div>
                                </div>

                                 <div class="form-row">        
                                    <div class="col"> 
                                        <label for="sexe">Genre:</label>
                                        <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                                        <select name="sexe" class="custom-select" id="inputGroupSelect01" required>
                                            <option selected>Genre</option>
                                            <option value="homme">Homme</option>
                                            <option value="femme">Femme</option>
                                            <!--<option value="autre">Autre</option>-->
                                        </select>
                                    </div>

                                    <div class="col"> 
                                            <label for="dateNaissance">Date de Naissance:</label>
                                            <!--span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span-->
                                            <input id="dateNaissance" type="date" class="form-control" name="dateNaissance"
                                                   placeholder="Date de naissance" required>
                                    </div>
                                    <div class="col"> 
                                            <label for="LieuNaissance">Lieu de naissance:</label>
                                            <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span> -->
                                            <input id="LieuNaissance" type="text" class="form-control" name="lieuNaissance"
                                                   placeholder="Lieu de naissance" required>
                                    </div>
                                     <div class="col">
                                         <label for="nationalite">Nationalité:</label>
                                         <input type="text" class="form-control" name="nationalite" placeholder="Nationalité" />
                                     </div>
                                </div>
                            </fieldset>
                             <fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                 <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Vos Coordonnées</legend>
                                <div class="row">        
                                    <div class="col">
                                            <label for="adresse">Adresse:</label>
                                                <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span> -->
                                                <input id="adresse" type="text" class="form-control" name="adresse" value="" placeholder="" required>
                                    </div>
                                    <div class="col">
                                            <label for="codePostal">Code Postal:</label>
                                               <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span> -->
                                                <input id="codePostal" type="text" minlength="2" maxlength="5"  class="form-control" name="codePostal" value="" placeholder="Code Postal"required>
                                    </div>
                                
                                    <div class="col"> 
                                            <label for="ville">Ville:</label>
                                                <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span> -->
                                                <input id="ville" type="text" class="form-control" name="ville" value="" placeholder= "ville" required>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col">     
                                                <label for="téléphone">Téléphone:</label>
                                                   <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span> -->
                                                    <input id="telephone" type="text" class="form-control" name="telephone" value="+(33)" placeholder="" required>
                                    </div>
                                    <div class="col"> 
                                            <label for="telResponsable">Téléphone Responsable:</label>
                                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span> -->
                                                    <input id="telResponsable" type="tel" class="form-control" name="telResponsable" value="+(33)" placeholder="">
                                    </div>
                                </div> 
                            </fieldset>
                            <fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Identifiants de connexion souhaités</legend>
                                <div class="row"> 
                                   <div class="col"> 
                                        <!--div style="margin-bottom: 25px" class="input-group"-->
                                                <label for="email">Email:</label>
                                                    <!--span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span-->
                                                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="" required>

                                    </div>
                                    <div class="col">  
                                        <label for="password">Mot de Passe: </label> 
                                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="Entrer le mot de passe souhaité" required>
                                    </div> 
                                    <div class="col"> 
                                        <label for="pass2"> confirmer mp:</label> 
                                        <input id="pass2" type="password" class="form-control" name="confirm-password" value="" placeholder="confirmer Mot de passe" required>
                                    </div> 
                                </div>
                             </fieldset>
                              <fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                 <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Infos sportives</legend>
                                <div class="row"> 
                                    <div class="col"> 
                                                <label for="numLicence">Numéro Licence :</label>
                                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span> -->
                                                    <input id="numLicence" type="text" class="form-control" name="numLicence" value="" placeholder="" required>
                                    </div>
                                    <div class="col"> 
                                            <label for="passeportSportif">Passeport Sportif:</label>
                                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span> -->
                                                    <input id="passeportSportif" type="text" class="form-control" name="pass-sport" value="" placeholder="" required>
                                    </div>
                                </div>
                             </fieldset>
                            
                             
                                                              

                            <fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:83%; text-align:center;">    
                                <div >
                                    <div style="margin-top:8px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">

                                          <button class="btn btn-lg btn-primary" name="demandeInscription" type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 5%;">S'inscrire</button>
                                          <a id="btn-fblogin" href="../index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; ">ANNULER</a>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                    </form>     

                        </div>                     
                    <!--/div>  
                </div-->  
   
       