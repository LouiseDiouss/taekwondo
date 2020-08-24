<?php
    session_start();
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
</head>
<body>
    <?php include '../includes/menu-admin.php';?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <!--<td>Id</td>-->
                    <td>Numéro réser.</td>
                    <td>Cours</td>
                    <td>Prénom & Nom</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($reservation = $request->fetch()){?>
                    <tr>
                        <td><?=$reservation['numResa'];?></td>
                        <td><?=$reservation['nom'];?></td>
                        <td><?=$reservation['prenom'].' '.$reservation['nom'];?></td>
                       <!-- <td><?/*=$reservation[''];*/?></td>
                        <td><?/*=$reservation[''];*/?></td>-->
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <?php include '../../includes/js-links.html';?>
</body>
</html>