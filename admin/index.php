<?php
    session_start();
    require_once '../proccess/config.php';

    if (isset($_SESSION['profil']) && $_SESSION['profil'] != 'ROLE_ADMIN'){
        header('Location: /');
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

                    header('Location: accueil.php');

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
    <link rel="stylesheet" href="./../includes/style.css">
</head>
<body>
    
    <div class="">
<<<<<<< HEAD
        <div class="">
            <?php include 'includes/menu-admin.php'; ?>
        </div>
        <!--div class="row">
            <div class="col-md-3"-->
                <!--?php include 'includes/menu-admin.php'; ?>
            </div>
            <div class="col-md-9">

            </div>d
        </div-->
=======
        <div class="row">
            <div class="col-md-1"><!-- Colonne gauche --></div>
            <div class="col-md-10">
                <?php include '../includes/form-login.php';?>
            </div>
            <div class="col-md-1"><!-- Colonne droite --></div>
        </div>
>>>>>>> 1f19fa4eb9d85e58aa92f97e9d270c2808e20358
    </div>
    <?php include '../includes/footer.php';?>
</body>
</html>