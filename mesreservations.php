<?php

session_start();

if ((isset($_SESSION['profil']) || !isset($_SESSION['profil'])) && strcmp($_SESSION['profil'], 'ROLE_MEMBRE') != 0){
    header('location: /');
}

require_once 'proccess/config.php';

$str = 'SELECT * FROM reserver AS reserve, prestation AS prestation, user AS user 
            WHERE reserve.idCours = prestation.idCours AND reserve.idUser = user.idUser';

$request = $dataBase->query($str);

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mon espace membre - Taekwondo Challenge</title>
    <?php include 'includes/css-links.html';?>
    <link rel="stylesheet" href="includes/styleMembre.css">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="shortcut icon" href="assets/media/images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">

</head>
<body>

    <?php include 'includes/menuMembre.php';?>
    <section style="background-size:100%;color:black;text-transform: capitalize;position:relative;width:1116px;left:250px;padding:0px 5px 0px 0px;">

        <?php include 'includes/menu_site_Membre.php';?>

        <div class="container">
            <div class="table-responsive-sm">
                <table class="table" style="margin-top:40px;margin-bottom: 100px;">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="5" class="cours">Listes des Reservations</th>
               
                    </tr>
                    <tr>
                            <th>Nom</th>
                            <th>Cours</th>
                            <th>Numéro de Réservation</th>
                            <th>Date et Heure Réservation</th>
                            <!--th>Action</th-->
                     </tr>
                        </thead>
                        <tbody>
                        <?php while ($data = $request->fetch()) { ?>
                            <tr>
                                <td><?= $data['nom_user'] ?></td>
                                <td><?= $data['nom_prest'] ?></td>
                                <td><?= $data['numResa'] ?></td>
                                <td><?= $data['date_heure_resa'] ?></td>
                                
                                <!-- Les buttons d'actions -->
                                <!--td>
                                    
                                        <div class="btn-group mr-2" role="group">
                                            <a role="button" class="btn btn-primary" title="visualiser"
                                              data-toggle="modal" data-target="exampleModalScrollable" >
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                </td-->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    
                </table>
            </div>
        </div>


        

        
    </section>


    <!--// fin fenêtre modale pour visualiser les infos sur un enregistrelent--->

   
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