<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mon espace membre - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
    <link rel="stylesheet" href="includes/styleMembre.css">
</head>
<body>

    <?php include 'includes/menuMembre.php';?>
    <section style="background:pink;background-size:100%;color:black;text-transform: capitalize;position:relative;width:1116px;left:250px;padding:10px 5px 10px 10px;">
    	<!--?php include 'includes/infos.php';?-->
        <form method="post">
            <?php include 'includes/infos.php';?>
                        <!--div class="form-group mt-5">
                             <a role="button" href="list-users.php" class="btn btn-primary" >
                             <i class="fa fa-home" aria-hidden="true">RETOUR</i> </a>
.                        </div-->

            <fieldset style="padding:0px 20px 20px 20px;margin-bottom:30px; border:0px solid #DF3F3F; width:83%; text-align:center;">    
                    <div style="margin-top:8px" class="form-group">
                                        <!-- Button -->

                        <div class="col-sm-12 controls">

                             <!--button class="btn btn-lg btn-primary" name="demandeInscription" type="submit" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F;margin-right: 5%;">MODIFIER</button-->
                            <a id="btn-fblogin" href="../index.php" class="btn btn-lg  btn-primary" style="background-color:transparent;color:#DF3F3F;font-weight: 600;border-color:#DF3F3F; "><i class="fa fa-home" aria-hidden="true">MOFIFIER</i></a>

                        </div>
                    </div>
                            
            </fieldset>
        </form>
    </section>
    <!-- Pieds de page -->
    <!--?php include 'includes/footer.php'; ?>
    <php include 'includes/js-links.html';?-->
</body>
</html>