<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Accueil - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
    <!--?php include 'includes/style.css';?-->
</head>
<body>
    <?php include 'includes/menu.php';?>

<form id="loginform" method="POST" action="controleur.php?action=inscription" class="form-horizontal" role="form" >
                        <div class="container" style="margin:10% 40% 10% 30%;">

                            <div class='row' style="margin-bottom: 3%;">
                                <div class="col-md-5">
                                    <div class="form-heading">
                                        <span class="prg">SE CONNECTER</span>
                                    </div>
                                </div>
                            </div>
                            <fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:1px solid #DF3F3F; width:40%;">
                                <legend style=" color:#DF3F3F;font-weight:bold; text-transform:capitalize;"></legend>
                                <div class='row' style="margin-bottom: 3%;">
                                    <div class="col" style="margin-top:3%;">        
                                        <!--div class="form-group col-md-4"-->
                                                <label for="login">Identifiant:</label>
                                                    <!-- <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span> -->
                                                    <input id="login" type="email" class="form-control" name="login" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 3%;">           
                                    <div class="col">
                                                <label for="password">Mot de Passe:</label>
                                                    <!-- <span class="input-group-addon" style="position: absolute;"><i class="glyphicon glyphicon-user"></i></span> -->
                                                    <input id="password" type="password" class="form-control"  style="position: relative;"name="password" value="" placeholder=""required>
                                        <!--/div-->
                                    </div>
                                </div>
                                 <div style="margin-top:30px;" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">

                                          <button class="btn btn-lg btn-primary" name="connexion"type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 10%;">SE CONNECTER</button>  
                                          <a id="btn-fblogin" href="index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; ">ANNULER</a>

                                        </div>
                                    </div>
                            </fieldset>

                            <!--fieldset style="padding:0px 0px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:40%; text-align:center;">    
                                <div >
                                    <div style="margin-top:8px" class="form-group">
                                        <!-- Button -->

                                        <!--div class="col-sm-12 controls">

                                          <button class="btn btn-lg btn-primary" name="demandeInscription"type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 5%;">S'inscrire</button>  
                                          <a id="btn-fblogin" href="index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; ">ANNULER</a>

                                        </div>
                                    </div>
                                </div>
                            </fieldset--->
                        </div>
</form>

    <!-- Pieds de page -->
    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/js-links.html';?>
</body>
</html>

      