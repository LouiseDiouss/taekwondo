
                            
                     <form id="loginform" method="POST"class="form-horizontal" role="form" >
                        <div class="container" style="margin:10% 8% 10% 8%;">
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
                                       
                                                <label for="nom">Nom:</label>
                                                    
                                                    <input id="nom" type="text" class="form-control" name="nom" value="" placeholder="" required>
                                    </div>
                                            
                                    <div class="col">
                                                <label for="prenom">Prénom:</label>
                                                   
                                                    <input id="prenom" type="text" class="form-control"  style="position: relative;" name="prenom" value="" placeholder=""required>
                                        
                                    </div>
                                </div>

                                 <div class="form-row">        
                                    <div class="col"> 
                                        <label for="sexe">Genre:</label>
                                        <select name="sexe" class="custom-select" id="inputGroupSelect01" required>
                                            <option selected>Genre</option>
                                            <option value="homme">Homme</option>
                                            <option value="femme">Femme</option>
                                          
                                        </select>
                                    </div>

                                    <div class="col"> 
                                            <label for="dateNaissance">Date Naissance:</label>
                                            <input id="dateNaissance" type="date" class="form-control" name="dateNaissance"
                                                   placeholder="" required>
                                    </div>
                                </div>
                                <div class=form-row>
                                    <div class="col"> 
                                            <label for="LieuNaissance">Lieu naissance:</label>
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
                                                <input id="adresse" type="text" class="form-control" name="adresse" value="" placeholder="" required>
                                    </div>
                                    <div class="col">
                                            <label for="codePostal">CP:</label>
                                             <input id="codePostal" type="text" minlength="2" maxlength="5"  class="form-control" name="codePostal" value="" placeholder="Code Postal"required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"> 
                                            <label for="ville">Ville:</label>
                                                <input id="ville" type="text" class="form-control" name="ville" value="" placeholder= "ville" required>
                                    </div>
                                </div>
                                <div class="form-row"> 
                                    <div class="col">     
                                                <label for="téléphone">Téléphone:</label>
                                                <input id="telephone" type="text" class="form-control" name="telephone" value="+(33)" placeholder="" required>
                                    </div>
                                    <div class="col"> 
                                            <label for="telResponsable">Téléphone </label>
                                                    <input id="telResponsable" type="tel" class="form-control" name="telResponsable" value="+(33)" placeholder="Téléphone Responsable">
                                    </div>
                                </div> 
                            </fieldset>
                            <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Identifiants de connexion souhaités</legend>
                                <div class="form-row"> 
                                   <div class="col"> 
                                     <label for="email">Email:</label>
                                             <input id="email" type="email" class="form-control" name="email" value="" placeholder="" required>

                                    </div>
                                </div>
                                
                             </fieldset>
                              <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:83%;">
                                 <legend style=" color:#DF3F3F;font-weight:bold;text-transform:capitalize;">Infos sportives</legend>
                                <div class="row"> 
                                    <div class="col"> 
                                                <label for="numLicence">Numéro Licence :</label>
                                                   <input id="numLicence" type="text" class="form-control" name="numLicence" value="" placeholder="" required>
                                    </div>
                                    <div class="col"> 
                                            <label for="passeportSportif">Passeport Sportif:</label>
                                                  <input id="passeportSportif" type="text" class="form-control" name="pass-sport" value="" placeholder="" required>
                                    </div>
                                </div>
                             </fieldset>
                            
                             
                            <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:83%; text-align:center;">    
                                <div >
                                    <div style="margin-top:8px" class="form-group">
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
                   
       