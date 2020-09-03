<?php
   require '../../proccess/config.php';
    require_once '../../proccess/mailer.php';

    $host = $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'];

    if (isset($_POST['demandeInscription'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $birthday = htmlspecialchars($_POST['dateNaissance']);
        $lieuNaiss = htmlspecialchars($_POST['lieuNaissance']);
        $nationalite = htmlspecialchars($_POST['nationalite']);
        $adress = htmlspecialchars($_POST['adresse']);
        $codePostal = htmlspecialchars($_POST['codePostal']);
        $ville = htmlspecialchars($_POST['ville']);
        $tel = htmlspecialchars($_POST['telephone']);
        $telRespo = htmlspecialchars($_POST['telResponsable']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confPass = htmlspecialchars($_POST['confirm-password']);
        $licence = htmlspecialchars($_POST['numLicence']);
        $passSport = htmlspecialchars($_POST['pass-sport']);

        if (!empty($nom) && !empty($prenom) && !empty($sexe) && !empty($birthday) && !empty($lieuNaiss) && !empty($adress) &&
        !empty($codePostal) && !empty($ville) && !empty($tel) && !empty($telRespo) && !empty($email) && !empty($password) &&
        !empty($confPass) && !empty($licence) && !empty($passSport)){
            if (strcmp($password, $confPass) == 0){
                if (filter_var($email, FILTER_VALIDATE_EMAIL)){

                    $token = sha1($email).sha1($tel);
                    $hashPwd = password_hash($password, PASSWORD_BCRYPT);

                    $insert = 'INSERT INTO user(slug, email, password, nationalite, nom, prenom, sexe, dateNaissance, 
                                lieuNaissance, adresse, codePostal, ville, telephone, telResponsable, numLicence, 
                                passeportSportif, profil, active, token_de_confirmation, date_ajout)
                                VALUES(UUID(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,true,?,NOW())';

                    $request = $dataBase->prepare($insert);

                    $result = $request->execute(array($email, $hashPwd, $nationalite, $nom, $prenom, $sexe, $birthday,
                        $lieuNaiss, $adress, $codePostal, $ville, $tel, $telRespo, $licence,
                        $passSport, 'ROLE_MEMBRE', $token));

                    if ($result){
                        /* Envoi du mail */
                        $subject = 'Confirmation de creation de compte';
                        $content = "Veuillez valider la création de 
                                    votre compte en cliquant sur <a href='http://".$host."/confirm-inscription.php?token=".$token."'>Activer</a>";
                        ;
                        sendMail($email, $subject, $content, $content);
                        /* Envoi de mail */

                        $msg = ['success' => 'Inscription réussie. Un courriel pour a été envoyé.'];
                    }
                }else{
                    $msg = ['warning' => "E-mail non valide."];
                }
            }else{
                $msg = ['danger' => "Les mots de passe ne sont pas indentique."];
            }
        }else{
            $msg = ['danger' => "Veuillez renseigner tous les champs."];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Membre</title>
    <?php include '../../includes/css-links.html'; ?>
     <link rel="shortcut icon" href="../../assets/media/images/logo.png">

    <link rel="stylesheet" href="../../includes/style.css">
</head>
<body>
    <?php include '../../includes/menu.php'; ?>
    <?php //include ROOT.'/includes/menu.php'; ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                <a role="button" href="list-users.php" class="btn btn-outline-primary" >
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-sm-8 col-xs-8 col-md-8 col-lg-8 col-xl-8">
                <h2>Ajout d'un membre existant</h2>
                <?php if (isset($msg)){?>
                <p class="alert alert-<?=key($msg)?>">
                    <?=$msg[key($msg)]?>
                </p>
                <?php }?>
                <form method="post">
                    <?php include '../../includes/form-inscription.php';?>
                    <!--div class="form-group mt-3">
                        <button class="btn btn-success" type="submit" name="add-prest">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Créer la prestation
                        </button>
                    </div-->
                </form>
            </div>
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>
    <?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/js-links.html'; ?>

</body>
</html>