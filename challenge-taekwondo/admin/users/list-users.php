<?php
    session_start();

    // Controle d'accèss...
    if (isset($_SESSION['profil'])){
        if(strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
            header('location: /');
        }
    }else{
        header('location: /');
    }
    require_once '../../../proccess/config.php';

    $str = 'SELECT * FROM user ORDER BY est_active_user DESC';

    $response = $dataBase->query($str);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des membres - Taekwondo Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include '../includes/css-admin.html' ?>
    <!--<link rel="shortcut icon" href="../../assets/media/images/logo.png">-->

    <link rel="stylesheet" href="../../../includes/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <?php include '../includes/menu-admin.php'; ?>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="row mb-5" style="width: 100%">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12" >
                    <!--h2 class="">Liste des prestations</h2-->
                    <a href="add-user.php" role="button" class="btn btn-primary pull-left">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Ajouter un membre
                    </a>
                </div>
            </div>
            <div class="row">
                <!--<div class="col-md-2"></div>-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <table class="table table-striped display responsive no-wrap" id="list-users">
                        <thead class="thead-dark">
                            <tr>
                        <th scope="col" colspan="16" class="cours" style="background-color: grey;">Liste des Membres</th>
                   
                    </tr>
                        <tr>
                            <th>Etat compte</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = $response->fetch()) { ?>
                            <tr>
                                <td>
                                    <?php if($data['est_active_user'])
                                        print '<i class="fa fa-circle" aria-hidden="true" style="color: green"></i>'.' Actif';
                                    else print '<i class="fa fa-circle" aria-hidden="true" style="color: red"></i>'.' Inactif' ?>
                                </td>
                                <td><?= $data['nom_user'] ?></td>
                                <td><?= $data['prenom_user'] ?></td>
                                <td><?= $data['adresse_user'] . ' '.$data['code_postal_user'].' '.$data['ville_user'] ?></td>
                                <td><?= $data['email_user'] ?></td>
                                <td><?= $data['telephone_user']  ?></td>
                                <!-- Les buttons d'actions -->
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="">
                                        <?php if (!$data['est_active_user']) { ?>
                                            <div class="btn-group mr-2" role="group">
                                                <a role="button" class="btn btn-warning" title="Modifier"
                                                   href="edit-user.php?userId=<?= $data['slug_user'] ?>">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                         <?php }  ?>

                                        
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-info" title="InfosMembre"
                                               href="infos-user.php?userId=<?= $data['slug_user'] ?>"  >
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                  
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
                <!--<div class="col-md-2"></div>-->
            </div>
        </div>
    </div>
    <?php include '../../../includes/footer.php'; ?>
    <?php include '../includes/js-admin.html'; ?>
</body>
</html>