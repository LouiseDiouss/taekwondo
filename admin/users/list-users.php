<?php
    require_once '../../proccess/config.php';

    $str = 'SELECT * FROM user ORDER BY idUser';

    $response = $dataBase->query($str);


   
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include '../../includes/css-links.html'?>
    <link rel="icon" type="image/x-icon" href="../../assets/media/images/logo.png"/>

    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <?php include '../../includes/menu.php'; ?>
    <div class="container-fluid">
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
                    <table class="table table-striped display responsive no-wrap" id="prestations-list">
                        <thead class="thead-dark">
                            <tr>
                        <th scope="col" colspan="16" class="cours" style="background-color: grey;">Liste des prestations</th>
                   
                    </tr>
                     <?php while ($data = $response->fetch()) { ?>
                        <tr>
                            <!--th>IdUser</th-->
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date et Lieu de Naissance</th>
                            <th>Sexe</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Nationalité</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Tél Responsable</th>
                            <th>Licence Sportive</th>
                            <th>Passeport Sportif</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <!--td><?= $data['idUser'] ?></td-->
                                <td><?= $data['nom'] ?></td>
                                <td><?= $data['prenom'] ?></td>
                                <td><?= $data['dateNaissance'].$data['lieuNaissance'] ?> </td>
                                <!--td><?= $data['lieuNaissance'] ?> </td-->
                                <td><?= $data['sexe'] ?></td>
                                <td><?= $data['adresse'] ?></td>
                                <td><?= $data['codePostal'] ?></td>
                                <td><?= $data['ville'] ?></td>
                                <td><?= $data['nationalite'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['telephone'] ?></td>
                                <td><?= $data['telResponsable'] ?></td>
                                <td><?= $data['numLicence'] ?></td>
                                <td><?= $data['passeportSportif'] ?></td>
                                <!-- Les buttons d'actions -->
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="">
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-warning" title="Modifier"
                                               href="edit-user.php?user=<?= $data['slug'] ?>">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="btn-group mr-2" role="group">
                                            <?php if ($data['active'] == true) { ?>
                                                <a role="button" class="btn btn-danger" title="Désactiver"
                                                   data-toggle="modal" data-target="#confirmModal"
                                                   onclick="getDisId('<?= $data['slug'] ?>')">
                                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                                </a>
                                            <?php } else { ?>
                                                <a role="button" class="btn btn-success" title="Activer"
                                                   data-toggle="modal" data-target="#activationModal"
                                                   onclick="getEnId('<?= $data['slug'] ?>')">
                                                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                </a>
                                            <?php } ?>

                                        </div>
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-info" title="Reservations"
                                               href="#reservations">
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

    

    <?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/js-links.html'; ?>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        function getDisId(id) {
            document.getElementById('prest-dis-slug').value = id;
        }

        function getEnId(id) {
            document.getElementById('prest-en-slug').value = id;
        }

        $(document).ready( function () {
            $('#prestations-list').DataTable();
        } );
    </script>
</body>
</html>