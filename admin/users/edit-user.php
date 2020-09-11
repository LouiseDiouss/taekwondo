<?php
    session_start();

    // Controle d'accèss...
    if (isset($_SESSION['profil'])){
        if(strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
            header('location: /');
        }
    }else{
        header('location: /');
    }

    require_once '../../proccess/config.php';

    if (isset($_GET['userId']) && !empty($_GET['userId'])){
        $slugUser = $_GET['userId'];

       $str = 'SELECT idUser,slug_user,nom_user,prenom_user,sexe,dateNaissance, lieuNaissance, 
              adresse_user ,code_postal_user ,ville_user ,telephone_user,email_user ,telResponsable, 
              numLicence, passeportSportif,nationalite, est_active_user FROM user WHERE slug_user= ?';

        $request = $dataBase->prepare($str);
        $request->execute([$slugUser]);
        $userToEdit = $request->fetch();

        if (empty($userToEdit)){
            header('location: list-users.php');
        }
    }else{
        header('location: list-users.php');
    }

      if (isset($_POST['demandeInscription'])) {
             $nom = trim(htmlspecialchars($_POST['nom']));
             $prenom  = trim(htmlspecialchars($_POST['prenom']));
             $dateNaissance = trim(htmlspecialchars($_POST['dateNaissance']));
             $lieuNaissance = trim(htmlspecialchars($_POST['lieuNaissance']));
             $sexe = trim(htmlspecialchars($_POST['sexe']));
             $adresse = trim(htmlspecialchars($_POST['adresse']));
             $codePostal = trim(htmlspecialchars($_POST['codePostal']));
             $ville = trim(htmlspecialchars($_POST['ville']));
             $nationalite = trim(htmlspecialchars($_POST['nationalite']));
             $telephone = trim(htmlspecialchars($_POST['telephone']));
             $telResponsable = trim(htmlspecialchars($_POST['telResponsable']));
             $email = trim(htmlspecialchars($_POST['email']));
             $numLicence = trim(htmlspecialchars($_POST['numLicence']));
             $passeportSportif = trim(htmlspecialchars($_POST['pass-sport']));


        if(!empty($nom) and !empty($prenom) and !empty($dateNaissance) and !empty($lieuNaissance) and !empty($sexe)
            and !empty($adresse) and !empty($codePostal) and !empty($ville) and !empty($telephone)
            and !empty($email) and !empty($numLicence) and !empty($passeportSportif))
        {
            $str = 'UPDATE user SET nom_user = ?, prenom_user =?, dateNaissance = ?,lieuNaissance = ?,sexe = ?,
                    adresse_user = ?,code_postal_user = ?,ville_user = ?, nationalite = ?,telephone_user = ? ,telResponsable = ?,
                    email_user = ?, numLicence = ?,passeportSportif =  ?
                    WHERE slug_user = ? AND idUser = ?';
            $request = $dataBase->prepare($str);
            $res = $request->execute(array($nom,$prenom,$dateNaissance,$lieuNaissance,$sexe,
                $adresse,$codePostal,$ville,$nationalite,$telephone,
                $telResponsable,$email,$numLicence,$passeportSportif, $userToEdit['slug_user'], $userToEdit['idUser']));

            if ($res){
                $msg = ['success' => 'Membre modifié avec succès. Vous serez redirigé dans 5s sur la liste des membres'];

                header('refresh:5;url=list-users.php');

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
        <title>Modifier un membre - Taekwondo Challenge</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php include '../includes/css-admin.html'?>
        <link rel="stylesheet" href="../../includes/style.css">
    </head>
    <body>
        <?php include '../includes/menu-admin.php'; ?>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="row mt-3">
                    <div class="col-md-1">
                        <a role="button" href="list-users.php" class="btn btn-outline-primary" >
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col"><h2 class="text-center">Modification d'un membre</h2></div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                    <?php if (isset($msg)){?>
                        <p class="alert alert-<?=key($msg)?>">
                            <?=$msg[key($msg)]?>
                        </p>
                    <?php }?>
                    <form method="post">
                        <?php include '../../includes/form-inscription.php';?>
                    </form>
                </div>
                <!--<div class="col-md-2"></div>-->
            </div>
        </div>
        <?php include '../../includes/footer.php'; ?>
        <?php include '../includes/js-admin.html'; ?>
    </body>
</html>