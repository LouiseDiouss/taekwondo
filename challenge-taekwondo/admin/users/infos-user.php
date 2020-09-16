<?php
    session_start();

    //Controle d'accèss...
    if (isset($_SESSION['profil'])){
        if(strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
            header('location: /');
        }
    }else{
        header('location: /');
    }

    require_once '../../../proccess/config.php';

   if (isset($_GET['userId']) && !empty($_GET['userId']))
   {
        $slugUser = $_GET['userId'];
            
            $str = 'SELECT * FROM user WHERE slug_user= ?';

            $request = $dataBase->prepare($str);
            $request->execute([$slugUser]);
            $user = $request->fetch();

            if (empty($user)){
                header('location: list-users.php');
            }
    }else{
       header('location: list-users.php');
   }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Détails membre - Taekwondo Challenge</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php include '../includes/css-admin.html' ?>
        <link rel="stylesheet" href="../../../includes/style.css">
    </head>
    <body>
        <?php include '../includes/menu-admin.php'; ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-1">
                    <a role="button" href="list-users.php" class="btn btn-outline-primary" >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col"><h2 class="text-center">Infos membre</h2></div>
            </div>
            <div class="row justify-content-md-center mt-5">

                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light text-dark"><strong>État du compte : </strong><?php if($user['est_active_user'])
                                print '<i class="fa fa-circle" aria-hidden="true" style="color: green"></i>'.' Actif';
                            else print '<i class="fa fa-circle" aria-hidden="true" style="color: red"></i>'.' Inactif' ?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Nom : </strong> <?=$user['nom_user'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Prénom : </strong><?=$user['prenom_user'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Genre : </strong><?=$user['sexe'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Date de naissance : </strong>
                            <?=date_format(new DateTime($user['dateNaissance']), "d/m/Y") ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Lieu de naissance : </strong><?=$user['lieuNaissance'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Nationalité : </strong><?=$user['nationalite'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Numéro de licence : </strong><?=$user['numLicence'] ;?></li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light text-dark"><strong>Numéro de passeport sportif : </strong><?=$user['passeportSportif'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Email : </strong><?= $user['email_user']; ?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Téléphone :</strong> <?=$user['telephone_user'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Téléphone du responsable : </strong><?=$user['telResponsable'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Adresse :</strong>
                            <?=$user['adresse_user'].' '.$user['code_postal_user'].' '.$user['ville_user'] ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Dernière connexion :</strong>
                            <?=date_format(new DateTime($user['derniere_connexion']), "d/m/Y à H:m:s") ;?></li>
                        <li class="list-group-item bg-light text-dark"><strong>Date d'inscription :</strong>
                            <?=date_format(new DateTime($user['date_ajout']), "d/m/Y à H:m:s") ;?></li>
                    </ul>
                </div>
            </div>
            <?php if (!$user['est_active_user']){ ?>
            <div class="text-center mb-3">
                <a href="edit-user.php?userId=<?= $user['slug_user']; ?>" role="button" class="btn btn-warning">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Modifier ce membre
                </a>
            </div>
            <?php } ?>
        </div>
        <?php include '../../../includes/footer.php'; ?>
        <?php include '../includes/js-admin.html'; ?>
    </body>
</html>