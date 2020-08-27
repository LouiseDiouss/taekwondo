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
                            <!--th>IdUser</th-->
                            <th>Nom</th>
                            <th>Prénom</th>
                            <!--th>Date et Lieu de Naissance</th-->
                            <th>Sexe</th>
                            <th>Adresse</th>
                            <!--th>Code Postal</th>
                            <th>Ville</th>
                            <th>Nationalité</th-->
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Tél Responsable</th>
                            <!--th>Licence Sportive</th>
                            <th>Passeport Sportif</th-->
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = $response->fetch()) { ?>
                            <tr>
                                
                                <td><?= $data['nom_user'] ?></td>
                                <td><?= $data['prenom_user'] ?></td>
                                <!--td><?= $data['dateNaissance'].' '.$data['lieuNaissance'] ?> </td-->
                                <td><?= $data['sexe'] ?></td>
                                <td><?= $data['adresse_user'] . ' '.$data['code_postal_user'].' '.$data['ville_user'] ?></td>
                                <td><?= $data['email_user'] ?></td>
                                <td><?= $data['telephone_user']  ?></td>
                                <td><?= $data['telResponsable'] ?></td>
                                <!--td><?= $data['numLicence'] ?></td>
                                <td><?= $data['passeportSportif'] ?></td-->
                                <!-- Les buttons d'actions -->
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="">
                                        <?php if ($data['est_active_user'] == false) { ?>
                                            <div class="btn-group mr-2" role="group">
                                                <a role="button" class="btn btn-warning" title="Modifier"
                                                   href="edit-user.php?user=<?= $data['slug_user'] ?>">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                         <?php }  ?>

                                        
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-info" title="InfosMembre"
                                               href="infos-membre.php?user=<?= $data['slug_user'] ?>"  >
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