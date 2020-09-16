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

    require '../../../proccess/config.php';
    require_once '../../../proccess/mailer.php';

    //$host = $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'];

    if (isset($_POST['demandeInscription'])){
        $nom = trim(htmlspecialchars($_POST['nom']));
        $prenom = trim(htmlspecialchars($_POST['prenom']));
        $sexe = trim(htmlspecialchars($_POST['sexe']));
        $birthday = trim(htmlspecialchars($_POST['dateNaissance']));
        $lieuNaiss = trim(htmlspecialchars($_POST['lieuNaissance']));
        $nationalite = trim(htmlspecialchars($_POST['nationalite']));
        $adress = trim(htmlspecialchars($_POST['adresse']));
        $codePostal = trim(htmlspecialchars($_POST['codePostal']));
        $ville = trim(htmlspecialchars($_POST['ville']));
        $tel = trim(htmlspecialchars($_POST['telephone']));
        $telRespo = trim(htmlspecialchars($_POST['telResponsable']));
        $email = trim(htmlspecialchars($_POST['email']));
        $licence = trim(htmlspecialchars($_POST['numLicence']));
        $passSport = trim(htmlspecialchars($_POST['pass-sport']));

        if (!empty($nom) && !empty($prenom) && !empty($sexe) && !empty($birthday) && !empty($lieuNaiss) && !empty($adress) &&
        !empty($codePostal) && !empty($ville) && !empty($tel) && !empty($email) &&
        !empty($licence) && !empty($passSport)){

                if (filter_var($email, FILTER_VALIDATE_EMAIL)){

                    $token = sha1($email).sha1($tel);

                    $insert = 'INSERT INTO user(slug_user, email_user, nationalite, nom_user, prenom_user, sexe, dateNaissance, 
                                lieuNaissance, adresse_user, code_postal_user, ville_user, telephone_user, telResponsable, numLicence, 
                                passeportSportif, profil, est_active_user, token_de_confirmation, date_ajout)
                                VALUES(UUID(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,true,?,NOW())';

                    $request = $dataBase->prepare($insert);

                    $result = $request->execute(array($email, $nationalite, $nom, $prenom, $sexe, $birthday,
                        $lieuNaiss, $adress, $codePostal, $ville, $tel, $telRespo, $licence,
                        $passSport, 'ROLE_MEMBRE', $token));

                    if ($result){
                        /* Envoi du mail */
                        $subject = 'Confirmation de creation de compte';
                        $content = "Veuillez valider la création de 
                                    votre compte en cliquant sur <a href='http://".$host."/confirmer-compte.php?password-token=".$token."'>Activer</a>
                                    pour créer votre mot de passe."
                        ;
                        sendMail($email, $subject, $content, $content);
                        /* Envoi de mail */

                        $msg = ['success' => 'Inscription réussie. Un courriel pour a été envoyé à l\'adresse mail indiquée.'];
                    }
                }else{
                    $msg = ['warning' => "E-mail non valide."];
                }
        }else{
            $msg = ['danger' => "Veuillez renseigner tous les champs."];
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Membre</title>
    <?php include '../includes/css-admin.html'; ?>

    <link rel="stylesheet" href="../../../includes/style.css">
</head>
<body>
    <?php include '../includes/menu-admin.php'; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-1">
                <a role="button" href="list-users.php" class="btn btn-outline-primary" >
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col"><h2 class="text-center">Ajout d'un utilisateur</h2></div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">

            <?php if (isset($msg)){?>
            <p class="alert alert-<?=key($msg)?>">
                <?=$msg[key($msg)]?>
            </p>
            <?php }?>
            <form method="post">
                <?php include '../../../includes/form-inscription.php';?>
                <!--div class="form-group mt-3">
                    <button class="btn btn-success" type="submit" name="add-prest">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Créer la prestation
                    </button>
                </div-->
            </form>
        </div>
    </div>
    <?php include '../../../includes/footer.php'; ?>
    <?php include '../includes/js-admin.html'; ?>

</body>
</html>