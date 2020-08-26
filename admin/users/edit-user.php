<?php
    require_once '../../proccess/config.php';

    if (!empty(isset($_GET['user']))){
        $slug = $_GET['user'];

       $str = 'SELECT idUser,nom,prenom,sexe,dateNaissance, lieuNaissance, adresse,codePostal,ville,telephone,email,telResponsable, numLicence, passeportSportif,nationalite, active FROM user WHERE slug= ?';

        $request = $dataBase->prepare($str);
        $request->execute([$slug]);
        $user = $request->fetch();
    }

    /*(($user['active']== 0) AND)*/
    
      if (isset($_POST['edit-user'])) 
      {
             $nom = htmlspecialchars($_POST['nom']);
             $prenom  = htmlspecialchars($_POST['prenom']);
             $dateNaissance = htmlspecialchars($_POST['dateNaissance']);
             $lieuNaissance = htmlspecialchars($_POST['lieuNaissance']);
             $sexe = htmlspecialchars($_POST['sexe']);
             $adresse = htmlspecialchars($_POST['adresse']);
             $codePostal = htmlspecialchars($_POST['codePostal']);
             $ville = htmlspecialchars($_POST['ville']);
             $nationalite = htmlspecialchars($_POST['nationalite']);
             $telephone = htmlspecialchars($_POST['telephone']);
             $telResponsable = htmlspecialchars($_POST['telResponsable']);
             $email = htmlspecialchars($_POST['email']);
             $numLicence = htmlspecialchars($_POST['numLicence']);
             $passeportSportif = htmlspecialchars($_POST['passeportSportif']);




        if(!empty($nom) and !empty($prenom) and !empty($dateNaissance) and !empty($lieuNaissance) and !empty($sexe) and !empty($adresse) and !empty($codePostal) and !empty($ville) and !empty($nationalite) and !empty($telephone) and !empty($telResponsable) and !empty($email) and !empty($numLicence) and !empty($passeportSportif))
        {
            $str = 'UPDATE user SET nom = ?, prenom =?, dateNaissance = ?,lieuNaissance = ?,sexe = ?,adresse = ?,codePostal = ?,ville = ?, nationalite = ?,telephone = ? ,telResponsable = ?, email = ?, numLicence = ?,passeportSportif =  ?
                    WHERE slug = ? AND idUser = ?';
            $request = $dataBase->prepare($str);
            $res = $request->execute(array($nom,$prenom,$dateNaissance,$lieuNaigssance,$sexe,$adresse,$codePostal,$ville,$nationalite,$telephone,$telResponsable,$email,$numLicence,$passeportSportif, $user['slug'], $user['id']));

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
        <?php include '../includes/menu-admin.php'; ?>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-2">
                    <a role="button" href="list-users.php" class="btn btn-outline-primary" >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-8">
                    <h2>Modification d'un utilisateur</h2>
                    <?php if (isset($msg)){?>
                        <p class="alert alert-<?=key($msg)?>">
                            <?=$msg[key($msg)]?>
                        </p>
                    <?php }?>
                    <form method="post">
                        <?php include 'update-user.php';?>
                        <div class="form-group mt-3">
                            <button class="btn btn-warning" type="submit" name="edit-user">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Modifier l'utilisateur
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