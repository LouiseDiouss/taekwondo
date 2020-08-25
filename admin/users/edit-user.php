<?php
    require_once '../../proccess/config.php';

    if (!empty(isset($_GET['user']))){
        $slug = $_GET['user'];

       $str = 'SELECT idUser, slug, nom, prenom, dateNaissance,lieuNaissance,sexe,adresse,codePostal,ville, nationalite,telephone,telResponsable, email, numLicence,passeportSportif FROM user WHERE slug = ?';
        $request = $dataBase->prepare($str);
        $request->execute([$slug]);

        $user = $request->fetch();
    }

    
      if(isset($_POST['edit-user']))
      {
        $prest = htmlspecialchars($_POST['nom-prestation']);
        $cat = htmlspecialchars($_POST['categorie']);
        $jour = htmlspecialchars($_POST['jour']);
        $deb = htmlspecialchars($_POST['debut']);
        $end = htmlspecialchars($_POST['fin']);
  

        if(!empty($prest) and !empty($cat) and !empty($jour) and !empty($deb) and !empty($end))
        {
            $str = 'UPDATE user SET nom = ?, prenom =?, dateNaissance = ?,lieuNaissance = ?,sexe = ?,adresse = ?,codePostal = ?,ville = ?, nationalite = ?,telephone = ? ,telResponsable = ?, email = ?, numLicence = ?,passeportSportif ?
                    WHERE slug = ? AND idUser = ?';
            $request = $dataBase->prepare($str);
            $res = $request->execute(array($prest, $cat, $jour, $deb, $end, $user['slug'], $user['idCours']));

            if ($res){
                $msg = ['success' => 'user modifiée avec succès.'];
            }else{
                $msg = ['danger' => 'Une erreur s\'est produite.'];
            }
        }else{
            $msg = ['warning' => 'Veuillez renseigner tous les champs.'];
        } 
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Modifier une user</title>
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
                    <h2>Modification d'une user</h2>
                    <?php if (isset($msg)){?>
                        <p class="alert alert-<?=key($msg)?>">
                            <?=$msg[key($msg)]?>
                        </p>
                    <?php }?>
                    <form method="post">
                        <?php include '../includes/_form-user.php';?>
                        <div class="form-group mt-3">
                            <button class="btn btn-warning" type="submit" name="edit-user">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Modifier la user
                            </button>
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

<?php //print $user['slug'].'et id = '.$user['idCours'];?>
<?php //print_r($user['slug']);?>