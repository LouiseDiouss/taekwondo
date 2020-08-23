<?php
    require_once '../../proccess/config.php';

    $str = 'SELECT * FROM prestation ORDER BY active = true DESC';


    /* Désactivation d'une prestation */
    if (isset($_POST['confirm-dis'])){
        $disSlug = htmlspecialchars($_POST['prest-dis-slug']);

        if (!empty($disSlug)){
            $disStr = 'UPDATE prestation SET active = false WHERE slug = ?';
            $disRequest = $dataBase->prepare($disStr);
            $disRequest->execute([$disSlug]);
        }
    }
    /* Fin désactivation */

    /* Réactivation d'un prestation */
    if (isset($_POST['confirm-en']))
    {
        $enSlug = htmlspecialchars($_POST['prest-en-slug']);

        if (!empty($enSlug)){
            $enStr = 'UPDATE prestation SET active = true WHERE slug = ?';
            $enRequest = $dataBase->prepare($enStr);
            $enRequest->execute([$enSlug]);
        }
    }
    /* Fin réactivation d'un prestation */

    $response = $dataBase->query($str);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des prestations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include '../../includes/css-links.html'?>
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <?php include '../../includes/menu.php'; ?>
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="row mb-5" style="width: 100%">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                    <!--h2 class="">Liste des prestations</h2-->
                    <a href="add-prestation.php" role="button" class="btn btn-primary pull-left">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Ajouter une prestation
                    </a>
                </div>
            </div>
            <div class="row">
                <!--<div class="col-md-2"></div>-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <table class="table table-striped display responsive no-wrap" id="prestations-list">
                        <thead class="thead-dark">
                            <tr>
                        <th scope="col" colspan="9" class="cours" style="background-color: grey;">Liste des prestations</th>
                   
                    </tr>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Jour</th>
                            <th>Début</th>
                            <th>Fin</th>
                            <th>Etat</th>
                            <th>Créée le</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($data = $response->fetch()) { ?>
                            <tr>
                                <td><?= $data['idCours'] ?></td>
                                <td><?= $data['nom'] ?></td>
                                <td><?= ucfirst($data['categorie']); ?></td>
                                <td><?= ucfirst($data['jour']) ?></td>
                                <td><?= $data['debut'] ?></td>
                                <td><?= $data['fin'] ?></td>
                                <td><?= ($data['active'] == true) ? 'Active' : 'Désactivée'; ?></td>
                                <td><?= date_format(new DateTime($data['date_creation']), "d/m/Y à H:m") ?></td>

                                <!-- Les buttons d'actions -->
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="">
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-warning" title="Modifier"
                                               href="edit-prestation.php?prestation=<?= $data['slug'] ?>">
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

    <!-- Modal de confirmation de désactivation -->
    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmation de désactivation</h5>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <input type="hidden" name="prest-dis-slug" id="prest-dis-slug"/>
                        <p>
                            Êtes-vous sûr de vouloir désactiver cette prestation ?<br/>
                            Elle ne figurera plus dans la liste des prestations visibles par vos visiteurs.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="confirm-dis">Oui</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin modal de confirmation de désactivation -->

    <!-- Modal de confirmation d'activation -->
    <!-- Modal -->
    <div class="modal fade" id="activationModal" tabindex="-1" role="dialog" aria-labelledby="activationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activationModalLabel">Confirmation d'activation</h5>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <input type="hidden" name="prest-en-slug" id="prest-en-slug"/>
                        <p class="text-center">
                            Êtes-vous sûr de vouloir activer cette prestation ?<br/>
                            Elle figurera dans la liste des prestations visibles par vos visiteurs.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="confirm-en">Oui</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin modal de confirmation de désactivation -->

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