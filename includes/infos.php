
                            
                     <form id="loginform" method="POST"class="form-horizontal" role="form" >
                        <div class="container" style="margin:5% 8% 10% 8%;">
                            <div class='row' style="margin-bottom: 3%;">
                                <div class="col-md-10">
                                    <div class="form-heading" style="background: #DF3F3F;margin: 20px 0px 20px 0px; padding: 20px; ">
                                        <span class="prg" style="color: #ffffff;font-size: 23px; ">MES INFORMATIONS</span>
                                    </div>
                                </div>
                            </div>
                           

                            <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                <legend style=" color:#DF3F3F;font-weight:bold; text-transform:capitalize;margin-top: 35px">Vous</legend>
                                <div class='form-row' style="margin-bottom: 3%;">
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
                                            <label for="dateNaissance">Date Naissance:</label>
                                            <!--span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span-->
                                            <input id="dateNaissance" type="date" class="form-control" name="dateNaissance"
                                                   placeholder="" required>
                                    </div>
                                </div>
                                <div class=form-row>
                                    <div class="col"> 
                                            <label for="LieuNaissance">Lieu naissance:</label>
                                            <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span> -->
                                            <input id="LieuNaissance" type="text" class="form-control" name="lieuNaissance"
                                                   placeholder="" required>
                                    </div>
                                     <div class="col">
                                         <label for="nationalite">Nationalité:</label>
                                         <input type="text" class="form-control" name="nationalite" placeholder="" />
                                     </div>
                                </div>
                            </fieldset>
                             <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                 <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Vos Coordonnées</legend>
                                <div class="form-row">        
                                    <div class="col">
                                            <label for="adresse">Adresse:</label>
                                                <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span> -->
                                                <input id="adresse" type="text" class="form-control" name="adresse" value="" placeholder="" required>
                                    </div>
                                    <div class="col">
                                            <label for="codePostal">CP:</label>
                                               <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span> -->
                                                <input id="codePostal" type="text" minlength="2" maxlength="5"  class="form-control" name="codePostal" value="" placeholder="Code Postal"required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"> 
                                            <label for="ville">Ville:</label>
                                                <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span> -->
                                                <input id="ville" type="text" class="form-control" name="ville" value="" placeholder= "ville" required>
                                    </div>
                                </div>
                                <div class="form-row"> 
                                    <div class="col">     
                                                <label for="téléphone">Téléphone:</label>
                                                   <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span> -->
                                                    <input id="telephone" type="text" class="form-control" name="telephone" value="" placeholder="" required>
                                    </div>
                                    <div class="col"> 
                                            <label for="telResponsable">Téléphone </label>
                                                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span> -->
                                                    <input id="telResponsable" type="tel" class="form-control" name="telResponsable"  placeholder="Téléphone Responsable">
                                    </div>
                                </div> 
                            </fieldset>
                            <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Identifiants de connexion souhaités</legend>
                                <div class="form-row"> 
                                   <div class="col"> 
                                        <!--div style="margin-bottom: 25px" class="input-group"-->
                                                <label for="email">Email:</label>
                                                    <!--span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span-->
                                                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="" required>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">  
                                        <label for="password">MP: </label> 
                                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="mot de passe souhaité" required>
                                    </div> 
                                    <div class="col"> 
                                        <label for="pass2"> confirmer mp:</label> 
                                        <input id="pass2" type="password" class="form-control" name="confirm-password" value="" placeholder="confirmer Mp" required>
                                    </div> 
                                </div>
                             </fieldset>
                              <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
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
                            
                             
                                                              

                            <!--fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:83%; text-align:center;">    
                                <div >
                                    <div style="margin-top:8px" class="form-group">
                                      

                                        <div class="col-sm-12 controls">

                                        
                                          <a id="btn-fblogin" href="../index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; ">MODIFIER</a>

                                        </div>
                                    </div>
                                </div>
                            </fieldset-->

                        </div>
                    </form>     

                        </div>                     
                    <!--/div>  
                </div-->  
   
       