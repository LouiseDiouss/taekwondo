<?php
    session_start();
    require_once 'proccess/config.php';

    $str = 'SELECT idCours, slug_prest, nom_prest, categorie, jour, TIME_FORMAT(debut, "%H:%i") as debut, TIME_FORMAT(fin, "%H:%i") as fin
            FROM prestation WHERE est_active_prest = true ';
    $response = $dataBase->query($str);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Prestations - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
</head>
<body>
    <?php include 'includes/menu.php';?>
    <div class="banner-bottom" >
                <div class="container">
                    <h2 class="agileits_head" >Nos Cours</h2>
                </div>

    </div>
    <div class="container mt-0 mb-5">
        <div class="row">
            <!--div class="row mb-3">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="text-center">NOS COURS</h2>
                </div>
            </div>
            <br-->
            <div class="row mt-0">
                <!--<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">-->
                    <?php while ($data = $response->fetch()) { ?>
                        <div class="card mr-2 mb-2" style="width: 16rem;">
                            <div class="card-body">
                                <h5 class="card-title"><strong><em><?= ucfirst($data['nom_prest']); ?></em></strong></h5>
                                <p class="card-text text-center"
                                   style="color: red; font-weight: bold;"><?= ucfirst($data['categorie']); ?></p>
                                <p class="card-text text-center"><?= ucfirst($data['jour']); ?></p>
                                <p class="card-text text-center"><?= $data['debut'] . ' - ' . $data['fin']; ?></p>
                            </div>
                            <div class="card-footer text-center">
                                <?php if (isset($_SESSION['profil'])){?>
                                <button onclick="window.location.href='reserver.php?prestation=<?= $data['slug_prest']; ?>'"
                                   class="card-link btn btn-primary">Reserver</button>
                                <?php } else{?>
                                <button onclick="window.location.href='login.php'"
                                   class="card-link btn btn-primary">Reserver</button>
                                <?php }?>
                            </div>
                        </div>
                    <?php } ?>
               <!-- </div>-->
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php';?>
    <!--s?php include 'includes/js-links.html';?-->
</body>
</html>