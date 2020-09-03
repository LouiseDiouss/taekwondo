<?php
    session_start();
    require_once 'proccess/config.php';

    // Rediriger l'utilisateur sur la page d'accueil s'il est déjà connecté...
    if (isset($_SESSION['profil'])){
        header('location: /');
    }

    if (isset($_POST['connexion'])){
        $email = htmlspecialchars($_POST['email']);
        $pwd = $_POST['password'];

        if (!empty($email) && !empty($pwd)){
            $select = 'SELECT * FROM user WHERE email_user = ? AND est_active_user = true ';
            $request = $dataBase->prepare($select);
            $request->execute(array($email));

            $row = $request->rowCount();

            if ($row == 1){
                $user = $request->fetch();

                if (password_verify($pwd, $user['password'])) {
                    $_SESSION['idUser'] = $user['idUser'];
                    $_SESSION['slug'] = $user['slug_user'];
                    $_SESSION['email'] = $user['email_user'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['nom'] = $user['nom_user'];
                    $_SESSION['prenom'] = $user['prenom_user'];
                    $_SESSION['sexe'] = $user['sexe'];
                    $_SESSION['nation'] = $user['nationalite'];
                    $_SESSION['naissance'] = $user['dateNaissance'];
                    $_SESSION['lieu'] = $user['lieuNaissance'];
                    $_SESSION['adresse'] = $user['adresse'];
                    $_SESSION['cp'] = $user['code_postal_user'];
                    $_SESSION['ville'] = $user['ville_user'];
                    $_SESSION['phone'] = $user['telephone_user'];
                    $_SESSION['phoneRespo'] = $user['telResponsable'];
                    $_SESSION['licence'] = $user['numLicence'];
                    $_SESSION['passSport'] = $user['passeportSportif'];
                    $_SESSION['profil'] = $user['profil'];

                    $dataBase->prepare("UPDATE user SET derniere_connexion = NOW() WHERE slug_user = ?")->execute([$user['slug_user']]);

                    header('Location: '.$_SERVER['HTTP_REFERER']);

                } else {
                    $msg = array('danger' => 'Email et/ou mot de passe incorrects.');
                }

            }else{
                $msg = array('danger' => 'Email et/ou mot de passe incorrects.');
            }
        }else{
            $msg = array('warning' => 'Tous les champs sont obligatoires.');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Authentification - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
</head>
<body>
    <?php include 'includes/menu.php';?>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-4 ml-auto mr-auto mt-md-5" style="box-shadow: 10px 10px 10px grey; background-color: #F4F1F1">
                <h2 class="text-center mb-4 mt-2">Connexion</h2>
                <?php if (isset($msg)){?>
                    <p class="alert alert-<?=key($msg)?>">
                        <?=$msg[key($msg)]?>
                    </p>
                <?php }?>
                <?php include 'includes/form-login.php';?>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js-links.html';?>
</body>
</html>