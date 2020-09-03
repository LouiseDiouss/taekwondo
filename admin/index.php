<?php
    session_start();
    require_once '../proccess/config.php';

    if (isset($_SESSION['profil'])){
        if ($_SESSION['profil'] == 'ROLE_ADMIN') {
            //Si l'admin est déjà connecté, on ne lui donne plus accès à la page de connexion...
            header('Location: /admin/accueil.php');
        } else {
            //On redirige tout autre utilisateur qui est connecté à la page d'accueil du site
            header('Location: /');
        }

    }

    if (isset($_POST['connexion'])){
        $email = htmlspecialchars($_POST['email']);
        $pwd = $_POST['password'];

        if (!empty($email) && !empty($pwd)){
            $select = 'SELECT * FROM admin WHERE email = ? AND active = true ';
            $request = $dataBase->prepare($select);
            $request->execute(array($email));

            $row = $request->rowCount();

            if ($row == 1){
                $admin = $request->fetch();

                if (password_verify($pwd, $admin['password'])) {
                    $_SESSION['id'] = $admin['idAdmin'];
                    $_SESSION['slug'] = $admin['slug'];
                    $_SESSION['email'] = $admin['email'];
                    $_SESSION['profil'] = $admin['profil'];
                    $_SESSION['last_login'] = $admin['last_login'];


                    $dataBase->prepare("UPDATE admin SET last_login = NOW() WHERE slug = ?")->execute([$admin['slug']]);

                    header('Location: admin/accueil.php');

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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Administration - Taekwondo Challenge</title>
    <?php include './../includes/css-links.html';?>

</head>
<body>
    
    <div class="container">
        <div class="row align-items-center">
            <!--<div class="col-md-1">-- Colonne gauche --</div>-->
            <div class="col-md-4 ml-auto mr-auto mt-md-5" style="box-shadow: 10px 10px 10px grey; background-color: #F4F1F1">
                <h2 class="text-center mb-4 mt-2">Connexion</h2>
                <?php include '../includes/form-login.php';?>
            </div>
            <!--<div class="col-md-1"> Colonne droite </div>-->
        </div>
    </div>
</body>
</html>