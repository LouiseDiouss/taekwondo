<?php 
	require_once '../../proccess/config.php';

	$str='SELECT * FROM contact ORDER BY dateContact DESC';
	$response = $dataBase->query($str);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include '../../includes/css-links.html'?>
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
	<?php include './../includes/menu.php'; ?>
 <!--div class="row"-->
  <div class="container">
        <!--div class="col-md-3"-->
            <!--?php include '../includes/menu-admin.php'; ?>
        </div class="col-md-9"-->
        <div class="table-responsive-sm">
            <table class="table" style="margin-bottom: 15%;margin-top: 10%;">
                <thead class="thead-dark">
                	<tr>
				    	<th scope="col" colspan="6" class="cours" style="background-color: grey;">Liste des Demandes de contact</th>
				   
				    </tr>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Objet</th>
                    <th scope="col">Message</th>
                    <th  scope="col">Date de Réception</th>
                </tr>
                </thead>
                <tbody>
                <?php while($data = $response->fetch()) {?>
                    <tr>
                        <td><?=$data['nom']?></td>
                        <td><?=$data['prenom']?></td>
                        <td><?=$data['email']?></td>
                        <td><?=$data['objet']?></td>
                        <td><?=$data['message']?></td>
                        <td><?=$data['dateContact']?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>


    

	

	

	<?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/js-links.html'; ?>

</body>


