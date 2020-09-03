<?php
    session_start();
    // Rediriger l'utilisateur sur la page d'accueil s'il est déjà connecté...
    if (isset($_SESSION['profil'])){
        header('location: /');
    }

    require_once 'proccess/config.php';

    if (isset($_GET['token']) && !empty($_GET['token'])){
        $token = trim(htmlspecialchars($_GET['token']));

        $selectToken = 'SELECT token_recup, token_recup_validite FROM user WHERE token_recup = ?';

        $requestToken = $dataBase->prepare($selectToken);
        $requestToken->execute(array($token));
        $result = $requestToken->fetch(); //récupère le timestamp du token ainsi que le token en bd
        $timeLoad = $result['token_recup_validite'];
        $recupToken = $result['token_recup'];

        $time = time();//Recupere le timestamp courant

        //Si time est supérieur à timeLoad alors le lien aura expiré, on redirige le visiteur sur la page de connexion
        if ($time > $timeLoad){
            header('location: login.php');
        }

        if (isset($_POST['password-write'])){
            $password = trim(htmlspecialchars($_POST['password']));
            $passwordConfirm = trim(htmlspecialchars($_POST['confirm-password']));

            if (!empty($password) && !empty($passwordConfirm)){
                if (strcmp($password, $passwordConfirm) == 0){
                    $hashPassword = password_hash($passwordConfirm, PASSWORD_BCRYPT);

                    $updatePwd = 'UPDATE user SET password = ? WHERE token_recup = ?';
                    $requestPwd = $dataBase->prepare($updatePwd);
                    $requestPwd->execute(array($hashPassword, $recupToken));

                    $msg = ['success' => 'Votre mot de passe a été modifier avec succès.'];

                    header('refresh:5;url=login.php');
                }else{
                    $msg = ['danger' => 'Les mots de passe ne correspondent pas.'];
                }
            }else{
                $msg = ['warning' => 'Les champs sont obligatoires.'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Saisir votre mot de passe - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
</head>
<body>
    <?php include 'includes/menu.php';?>
    <div class="container">
        <?php if (isset($msg)){?>
            <p class="alert alert-<?=key($msg)?>">
                <?=$msg[key($msg)]?>
            </p>
        <?php }?>
        <?php include 'includes/_form-password.php';?>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js-links.html';?>
</body>
</html>