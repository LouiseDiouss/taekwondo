<?php
    session_start();
    require_once '../../proccess/config.php';

    if ((isset($_SESSION['profil']) || !isset($_SESSION['profil'])) && strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
        header('location: /');
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Accueil administration - Taekwondo Challenge</title>
    <?php include 'includes/css-admin.html';?>
    <!--<link rel="shortcut icon" href="../../assets/media/images/logo.png">-->

</head>
<body>
    <?php include 'includes/menu-admin.php';?>
    <?php include 'includes/js-admin.html';?>
</body>
</html>