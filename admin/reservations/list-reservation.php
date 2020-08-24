<?php
    session_start();
    require_once '../../proccess/config.php';
    /*$token = base64_encode(openssl_random_pseudo_bytes(32));
    echo 'token 1 : ',$token;

    $token2 = substr(md5(uniqid()),0 ,32);
    echo ' token 2: ',$token2;*/

    $request = $dataBase->query('SELECT * FROM reserver');
    //$response = $request->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Liste des réservations</title>
    <?php include '../../includes/css-links.html';?>
</head>
<body>
<?php include '../includes/menu-admin.php'; ?>
    <div class="container">
        <!--<div class="col-md-3">
            <?php /*include '../includes/menu-admin.php'; */?>
        </div>-->
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <td>Utilisateur</td>
                    <td>Prestation</td>
                    <td>Numéro</td>
                </tr>
                </thead>
                <tbody>
                <?php while($data = $request->fetch()) {?>
                    <tr>
                        <td><?=$data['idUser']?></td>
                        <td><?=$data['idCours']?></td>
                        <td><?=$data['numResa']?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <!--<div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <td>Utilisateur</td>
                        <td>Prestation</td>
                        <td>Numéro</td>
                    </tr>
                </thead>
                <tbody>
                <?php /*while($data = $request->fetch()) {*/?>
                    <tr>
                        <td><?/*=$data['idUser']*/?></td>
                        <td><?/*=$data['idCours']*/?></td>
                        <td><?/*=$data['numResa']*/?></td>
                    </tr>
                <?php /*}*/?>
                </tbody>
            </table>
        </div>
    </div>-->
    <?php include '../../includes/footer.php';?>
    <?php include '../../includes/js-links.html';?>
</body>
</html>