<?php
    session_start();
    require_once '../../proccess/config.php';
    $token = base64_encode(openssl_random_pseudo_bytes(32));
    echo 'token 1 : ',$token;

    $token2 = substr(md5(uniqid()),0 ,32);
    echo ' token 2: ',$token2;

    $request = $dataBase->query('SELECT * FROM reserver');
    //$response = $request->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Liste des réservations</title>
    <?php include '../../includes/css-links.html'?>
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <?php include '../../includes/menu.php';?>

    <div class="container">
        <!--div class="col-md-3"-->
            <!--?php include '../includes/menu-admin.php'; ?>
        </div class="col-md-9"-->
        <div class="table-responsive-sm">
            <table class="table" style="margin-bottom: 15%;margin-top: 10%;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="6" class="cours" style="background-color: grey;">Liste des Réservations</th>
                   
                    </tr>
                <tr>
                    <th scope="col">Utilisateur</th>
                    <th scope="col">Prestation</th>
                    <th scope="col">Numéro</th>
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
     <?php include '../../includes/footer.php'; ?>
    <!--?php include '../../includes/js-links.html'; ?-->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</body>
</html>
    