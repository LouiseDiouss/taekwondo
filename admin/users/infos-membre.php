<?php
    require_once '../../proccess/config.php';

   if (!empty(isset($_GET['user'])))
   {
        $slug = $_GET['user'];
            
            $str = 'SELECT idUser,nom_user,prenom_user,sexe,dateNaissance, lieuNaissance, adresse_user,code_postal_user,ville_user,telephone_user,email_user,telResponsable, numLicence, passeportSportif FROM user WHERE slug_user= ?';

            $request = $dataBase->prepare($str);
            $request->execute([$slug]);
            $user = $request->fetch();
   
        
    }        

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>information d'un membre</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php include '../../includes/css-links.html'?>
        <link rel="stylesheet" href="../../includes/style.css">

    </head>
    <body>
        <?php include '../../includes/menu.php'; ?>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-2">
                    <a role="button" href="list-users.php" class="btn btn-outline-primary" >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>  
                <div class="col-md-8">
                    <h2 >INFOS MEMBRE</h2>
                    <?php if (isset($msg)){?>
                        <p class="alert alert-<?=key($msg)?>">
                            <?=$msg[key($msg)]?>
                        </p>
                    <?php }?>
                    <form method="post">
                        <?php include '../includes/_form-infos-membre.php';?>
                        <div class="form-group mt-5">
                            <!--button class="btn btn-warning" href="" name="edit-contact">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                retour
                            </button-->
                             <a role="button" href="list-users.php" class="btn btn-primary" >
                             <i class="fa fa-home" aria-hidden="true">RETOUR</i>
                    </a>
.                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <?php include '../../includes/footer.php'; ?>
        <?php include '../../includes/js-links.html'; ?>
    </body>
</html>

<?php //print $contact['slug'].'et id = '.$contact['idContact'];?>
<?php //print_r($contact['slug']);?>