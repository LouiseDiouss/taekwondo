<?php
    session_start();

    // Redige le visiteur qui n'a pas les droits d'accès...
    if ((isset($_SESSION['profil']) || !isset($_SESSION['profil'])) && strcmp($_SESSION['profil'], 'ROLE_ADMIN') != 0){
        header('location: /');
    }

    require_once '../../proccess/config.php';

    $str = 'SELECT * FROM parametres ORDER BY ets_est_active = true DESC';
    $activeParam = 'SELECT ets_nom, ets_est_active FROM parametres WHERE ets_est_active = true';

    $response = $dataBase->query($str);

    $param = $dataBase->query($activeParam);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Liste des paramètres - Taekwondo Challenge</title>
    <?php include '../includes/css-admin.html';?>
    <link rel="shortcut icon" href="../../assets/media/images/logo.png">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
</head>
<body>
    <?php include '../includes/menu-admin.php';?>
    <div class="container">
        <h2 class="text-center mt-2 mb-2">Paramètres du site</h2>
        <div class="row justify-content-md-center mt-3 mb-3">
            <?php if (empty($param->fetch())){?>
            <div class="row mb-5">
                <div class="col-md-3 offset-md-9">
                    <a href="add-parametre.php" role="button" class="btn btn-primary">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Nouveau paramètres
                    </a>
                </div>
            </div>
            <?php }?>
            <div class="">
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>Etat du paramètre</td>
                            <td>Raison sociale</td>
                            <td>Siege social</td>
                            <td>Téléphone</td>
                            <td>Email</td>
                            <td colspan="3" class="text-center">Reseaux sociaux</td>
                            <td>Actions</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($data = $response->fetch()) { ?>
                            <tr>
                                <td><?php if($data['ets_est_active'])
                                    print '<i class="fa fa-circle" aria-hidden="true" style="color: green"></i>'.' Actif';
                                    else print '<i class="fa fa-circle" aria-hidden="true" style="color: red"></i>'.' Inactif' ?></td>
                                <td><?= $data['ets_nom'] ?></td>
                                <td><?= substr($data['ets_siege_social'], 0, 22).'...' ?></td>
                                <td><?= $data['ets_telephone'] ?></td>
                                <td><?= $data['ets_email'] ?></td>
                                <td><?= substr($data['ets_facebook'], 0, 22).'...' ?></td>
                                <td><?= substr($data['ets_twitter'], 0, 22).'...' ?></td>
                                <td><?= substr($data['ets_instagram'], 0, 22).'...' ?></td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="">
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-warning" title="Consulter"
                                               href="show-parameter.php?parameter=<?=$data['ets_slug']?>">
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
            </div>
        </div>
    </div>
    <?php include '../includes/js-admin.html';?>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <script>
        /**
         * Chargement du datatable
         */
        $(document).ready( function () {
            $('#parameters-list').DataTable({
                "language": {
                    "search": "Rechercher: ",
                    "lengthMenu": "Montrer  _MENU_  r&eacute;sultats par page",
                    "zeroRecords": "Aucun r&eacute;sultat trouv&eacute; ",
                    "info": "Page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun r&eacute;sultat",
                    "infoFiltered": "(filtré de _MAX_ total records)",
                    "paginate": {
                        "first":      "Premier",
                        "previous":   "Pr&eacute;c&eacute;dent",
                        "next":       "Suivant",
                        "last":       "Dernier"
                    },
                }
            });
        } );
    </script>
</body>
</html>