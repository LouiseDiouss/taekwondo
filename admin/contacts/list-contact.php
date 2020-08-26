<?php
    require_once '../../proccess/config.php';

    $str = 'SELECT * FROM contact ORDER BY dateContact DESC';


    $response = $dataBase->query($str);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include '../../includes/css-links.html'?>
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <?php include '../includes/menu-admin.php'; ?>
    <div class="container">
        <div class="row mt-3 mb-3">
            
            <div class="row">
                <!--<div class="col-md-2"></div>-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    
                    <table class="table table-striped display responsive no-wrap" id="prestations-list" style="margin-top: 50px;">
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
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-primary" title="visualiser"
                                              data-toggle="modal" data-target="exampleModalScrollable" >
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

    
    <!--fenêtre modale pour visualiser les infos sur un enregistrelent--->
    <!--div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
    </div-- >




    <!--// fin fenêtre modale pour visualiser les infos sur un enregistrelent--->

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