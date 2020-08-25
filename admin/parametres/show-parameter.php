<?php
    session_start();
    require_once '../../proccess/config.php';

    if (isset($_GET['parameter']) && !empty($_GET['parameter'])){
        $paramSlug = $_GET['parameter'];

        $str = 'SELECT * FROM parametres WHERE ets_slug = ?';
        $request = $dataBase->prepare($str);
        $request->execute(array($paramSlug));

        $parameter = $request->fetch();

    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Détails des paramètres - Taekwondo Challenge</title>
    <?php include '../includes/css-admin.html';?>
</head>
<body>
    <?php include '../includes/menu-admin.php';?>
    <div class="container">
        <h2 class="text-center mt-3">Détails du paramètre</h2>
        <div class="row justify-content-md-center mt-5">

            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light text-dark"><strong>Raison sociale : </strong> <?=$parameter['ets_nom'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Adresse : </strong><?=$parameter['ets_adresse'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Code postal : </strong><?=$parameter['ets_code_postal'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Ville : </strong><?=$parameter['ets_ville'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Téléphone : </strong><?=$parameter['ets_telephone'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Email : </strong><?=$parameter['ets_email'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Siège social : </strong><?= $parameter['ets_siege_social']; ?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light text-dark"><strong>État : </strong><?=$parameter['ets_est_active'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Date d'ajout :</strong> <?=$parameter['ets_date_ajout_param'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Facebook :</strong> <?=$parameter['ets_facebook'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Twitter :</strong> <?=$parameter['ets_twitter'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Instagram :</strong> <?=$parameter['ets_instagram'] ;?></li>
                    <li class="list-group-item bg-light text-dark"><strong>Snapchat :</strong> <?=$parameter['ets_snapchat'] ;?></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="edit-parametre.php?parameter=<?= $parameter['ets_slug']; ?>" role="button" class="btn btn-warning">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Modifier ce paramètre
            </a>
        </div>
    </div>
    <?php include '../includes/js-admin.html';?>
</body>
</html>