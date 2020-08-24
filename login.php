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
            $select = 'SELECT * FROM user WHERE email = ? AND active = true ';
            $request = $dataBase->prepare($select);
            $request->execute(array($email));

            $row = $request->rowCount();

            if ($row == 1){
                $user = $request->fetch();

                if (password_verify($pwd, $user['password'])) {
                    $_SESSION['idUser'] = $user['idUser'];
                    $_SESSION['slug'] = $user['slug'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['prenom'] = $user['prenom'];
                    $_SESSION['sexe'] = $user['sexe'];
                    $_SESSION['nation'] = $user['nationalite'];
                    $_SESSION['naissance'] = $user['dateNaissance'];
                    $_SESSION['lieu'] = $user['lieuNaissance'];
                    $_SESSION['adresse'] = $user['adresse'];
                    $_SESSION['cp'] = $user['codePostal'];
                    $_SESSION['ville'] = $user['ville'];
                    $_SESSION['phone'] = $user['telephone'];
                    $_SESSION['phoneRespo'] = $user['telResponsable'];
                    $_SESSION['licence'] = $user['numLicence'];
                    $_SESSION['passSport'] = $user['passeportSportif'];
                    $_SESSION['profil'] = $user['profil'];

                    $dataBase->prepare("UPDATE user SET derniere_connexion = NOW() WHERE slug = ?")->execute([$user['slug']]);

                    header('Location: prestations.php');

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

    <div class="container">
        <?php if (isset($msg)){?>
        <p class="alert alert-<?=key($msg)?>">
            <?=$msg[key($msg)]?>
        </p>
        <?php }?>
        <?php include 'includes/form-login.php';?>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js-links.html';?>
</body>
</html>