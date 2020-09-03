<?php
    session_start();
    // Rediriger l'utilisateur sur la page d'accueil s'il est déjà connecté...
    if (isset($_SESSION['profil'])){
        header('location: /');
    }

    require_once 'proccess/config.php';
    require_once 'proccess/mailer.php';

    if (isset($_POST['forget-email'])){
        $email = trim(htmlspecialchars($_POST['forget-email']));

        if (!empty($email)){

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $token = sha1($email . uniqid());
                $validity = time() + (1 * 24 * 60 * 60);// pour 1 jours, 24 heures, 60 minutes et 60 secondes
                $update = 'UPDATE user SET token_recup = ?, token_recup_validite = ? WHERE email_user = ?';

                $request = $dataBase->prepare($update);
                $result = $request->execute(array($token, $validity, $email));

                if ($result){
                    /* Envoi du mail */
                    $subject = 'Réinitialisation de mot de passe';
                    $content = "Veuillez réinitialiser votre mot de passe en cliquant sur 
                    <a href='http://".$host."/saisir-mot-de-passe.php?token=".$token."'>Réinitiliser</a>.
                    \nCe lien est valide pour 24 heures."
                    ;
                    sendMail($email, $subject, $content, $content);
                    /* Envoi de mail */

                    $msg = ['success' => 'Un courriel vous a été envoyé. 
                    Veuillez cliquer sur le lien qu\'il contient pour réinitiliser votre mot de passe'];

                    // Redirige après 5 secondes
                    header('refresh:5;url=login.php');
                }

            } else {
                $msg = ['danger' => 'Email invalide.'];
            }

        }else{
            $msg = ['warning' => 'Veuillez saisir votre email.'];
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mot de passe oublié - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
</head>
<body>
    <?php include 'includes/menu.php';?>
    <div class="container mb-5">
        <div class="row align-items-center">

            <div class="col-md-4 ml-auto mr-auto mt-md-5" style="box-shadow: 10px 10px 10px grey; background-color: #F4F1F1">
                <h2 class="text-center mb-4 mt-2">Votre adresse email</h2>
                <?php if (isset($msg)){?>
                    <p class="alert alert-<?=key($msg)?>">
                        <?=$msg[key($msg)]?>
                    </p>
                <?php }?>
                <?php include 'includes/form-password-forget.php';?>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js-links.html';?>
</body>
</html>