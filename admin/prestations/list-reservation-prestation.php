<?php
    session_start();

    // Redige le visiteur qui n'a pas les droits d'accès...
    if ((isset($_SESSION['profil']) || !isset($_SESSION['profil'])) && strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
        header('location: /');
    }

    require_once '../../proccess/config.php';

    $str = 'SELECT * FROM reserver AS reserve, prestation AS prestation, user AS user 
            WHERE reserve.idCours = prestation.idCours AND reserve.idUser = user.idUser';

    $request = $dataBase->query($str);
    //$reservation = $request->fetch();
    //print_r($reservation['reserve']);die();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Liste des reservation sur la prestation - Taekwondo Challenge</title>
    <?php include '../../includes/css-links.html';?>
    <link rel="shortcut icon" href="../../assets/media/images/logo.png">
</head>
<body>
    <?php include '../includes/menu-admin.php';?>

    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-1">
                <a role="button" href="list-prestation.php" class="btn btn-outline-primary" >
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col"><h2 class="text-center">Reservation sur la prestation</h2></div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>Numéro réser.</td>
                    <td>Cours</td>
                    <td>Prénom & Nom</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($reservation = $request->fetch()){?>
                    <tr>
                        <td><?=$reservation['numResa'];?></td>
                        <td><?=$reservation['nom_prest'];?></td>
                        <td><?=$reservation['prenom_user'].' '.$reservation['nom_user'];?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <?php include '../../includes/js-links.html';?>
</body>
</html>