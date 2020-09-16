<?php
    session_start();
    require_once '../../../proccess/config.php';

    $str = 'SELECT * FROM contact ORDER BY dateContact DESC';


    $response = $dataBase->query($str);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include '../includes/css-admin.html' ?>
    <link rel="stylesheet" href="../../../includes/style.css">
    <!--<link rel="shortcut icon" href="../../../assets/media/images/logo.png">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
</head>
<body>
    <?php include '../includes/menu-admin.php'; ?>
    <div class="container">
        <div class="row mt-3 mb-3">
            
            <div class="row">
                <!--<div class="col-md-2"></div>-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    
                    <table class="table table-striped dt-responsive no-wrap" id="prestations-list"
                           style="margin-top: 50px; width: 100%;">
                        <thead class="thead-dark">
                         <tr>
                             <th scope="col" colspan="9" class="cours" style="background-color: grey;">Liste des Contacts</th>
                   
                         </tr>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Objet</th>
                            <th>Message</th>
                            <th>Date Reception</th>
                            <th>Actions</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($data = $response->fetch()) { ?>
                            <tr>
                                <td><?= $data['idContact'] ?></td>
                                <td><?= $data['nom'] ?></td>
                                <td><?= $data['prenom'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['objet'] ?></td>
                                <td><?= substr($data['message'], 0, 43). '...' ?></td>
                                <td><?= $data['dateContact'] ?></td>

                                <!-- Les buttons d'actions -->
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="">
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-warning" title="Repondre"
                                               href="edit-contact.php?contact=<?= $data['slug'] ?>">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <!--div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-primary" title="visualiser"
                                              data-toggle="modal" data-target="exampleModalScrollable" >
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div-->

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

    
 <!--// fin fenêtre modale pour visualiser les infos sur un enregistrelent--->

    <?php include '../../../includes/footer.php'; ?>
    <?php include '../includes/js-admin.html'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <script>
        function getDisId(id) {
            document.getElementById('prest-dis-slug').value = id;
        }

        function getEnId(id) {
            document.getElementById('prest-en-slug').value = id;
        }

        $(document).ready( function () {
            $('#prestations-list').DataTable({
                responsive: true,
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