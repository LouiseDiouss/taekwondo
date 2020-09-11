<?php
    session_start();
    require_once 'proccess/config.php';
    //require_once 'proccess/mailer.php';

    if(isset($_SESSION['profil'])){
        header('location: /');
    }

    if (isset($_GET['password-token']) && !empty($_GET['password-token'])){
        $passwordToken = trim(htmlspecialchars($_GET['password-token']));

        $req = 'SELECT token_de_confirmation FROM user WHERE token_de_confirmation = ?';

        if (isset($_POST['create-password'])) {
            $pwd = trim(htmlspecialchars($_POST['password']));
            $pwdConf = trim(htmlspecialchars($_POST['confirm-password']));
            if (!empty($pwd) && !empty($pwdConf)) {
                if (strcmp($pwd, $pwdConf) == 0) {
                    $pwdHash = password_hash($pwdConf, PASSWORD_BCRYPT);

                    $str = 'UPDATE user SET password = ?, est_active_user = true';

                    $request = $dataBase->prepare($str);
                    $request->execute(array($pwdHash));
                    $msg = ['success' => 'Votre mot de passe a bien été créé. Vous serez rédirigé dans vers la page de connexion dans 5s'];

                    header('refresh:5;url=login.php');
                }else{
                    $msg = ['warning' => 'Les mots de passe ne correspondent pas.'];
                }
            }else{
                $msg = ['warning' => 'Veuillez remplir tous les champs.'];
            }
        }
    }else{
        header('location: /');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Confirmation de création de compte - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
</head>
<body>
    <?php include 'includes/menu.php';?>
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-4 ml-auto mr-auto mt-md-5" style="box-shadow: 10px 10px 10px grey; background-color: #F4F1F1">
                <h2 class="text-center mb-4 mt-2">Création de mot de passe</h2>
                <?php if (isset($msg)){?>
                    <p class="alert alert-<?=key($msg)?>">
                        <?=$msg[key($msg)]?>
                    </p>
                <?php }?>
                <?php include 'includes/_form-password.php';?>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js-links.html';?>
</body>
</html>