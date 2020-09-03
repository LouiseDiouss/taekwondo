<?php
    session_start();
	require 'proccess/config.php';
	/*$time1 = time();
    $time2 = time() + (1*24*60*60);
    var_dump('date 1 :'.date('d/m/Y H:i:s', $time1));
    var_dump('date 2: '.date('d/m/Y H:i:s', $time2));*/
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil - Taekwondo Challenge</title>
	<?php include 'includes/css-links.html';?>
	<!--?php include 'includes/style.css';?-->
</head>
<body>
	<?php include 'includes/menu.php';?>

		<div class="container">
			<h3 class="titre_info">INFOS UTILES</h3>
		
			<div class="télécharger" style="font-size:1.5em">
				<p>Nous vous proposons ici toutes les informations utiles  sur le club.</p>
				<p>Vous pouvez télécharger le dossier d'inscription ici:<a href="assets/media/images/Dossier_Inscription_2020-21.pdf" title="inscription">Dossier D'inscription</a> ou le faire directement en ligne<a href="inscription.php"> ici.</a></p><br>
				<p>Pour réserver un cours<a href="prestations.php"> cliquez ici</a></p>
				<p>Et pour commander votre équipement <a href="boutique.php">cliquez là</a></p>
				  <p class="nb">NB: les tarifs individuels comprennent: les cours, le matériel, les cotisations fédérales(56€)<br></p>
			</div>
		</div>
		<div class="container" >
			<div class="table-responsive-sm">	
				<table class="table" style="margin-top:20px;margin-bottom: 100px;">
				  <thead class="thead-dark">
				  	<tr>
			    		<th scope="col" colspan="5" class="cours">NOS TARIFS</th>
			   
			   		 </tr>
				    <tr>
				      <th scope="col"></th>
				      <th scope="col">Enfants(5-12ans)</th>
				      <th scope="col">Adultes(+12ans)</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row" >Passeport</th>
				      <td colspan="2"><br>20 €</td>
				    </tr>
				    <tr>
				      <th scope="row" >Licence</th>
				      <td colspan="2"><br>35 €</td>
				    </tr>
				    <tr>
				      <th scope="row" >Ceinture Noire</th>
				      <td colspan="2"><br>150 €</td>
				     
				    </tr>
				    <tr>
				     <th scope="row" >TOTAL ANNUEL</th>
				      <td>185 €</td>
				      <td>215 €</td>
				    </tr>
				    
				  </tbody>
				</table>
			</div>  

		</div>
	

<!-- //banner -->
		<div class="container" >
			<div class="table-responsive-sm">
			<table class="table" style="margin-bottom: 15%;">
				  <thead class="thead-dark">
				  	<tr>
				    	<th scope="col" colspan="6" class="cours">NOS COURS</th>
				   
				    </tr>
				    <tr>

				      <th scope="col">intitulé</th>
				      <th scope="col">Jour</th>
				      <th scope="col">Public</th>
				      <th scope="col">Heure</th>
				      <th scope="col">Lieux</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row" rowspan="2">TECHNIQUE<br>SELF-DEFENSE<br>CARDIO</th>
				      <td rowspan="2"><br>MARDI</td>
				      <td>Enfants</td>
				      <td>18h-19h30</td>
				      <td rowspan="5"><br><br><br><br><br>Gymnase MALAKOFF 4 </td>
				    </tr>
				    <tr>
				      <td>Adultes</td>
				      <td>19h30-21h</td>
				    </tr>
				    <tr>
				      <th scope="row">CARDIO</th>
				      <td>MERCREDI</td>
				      <td>ADULTES</td>
				      <td>19h-20h</td>
				     
				    </tr>
				    <tr>
				      <th scope="row" rowspan="2">TECHNIQUES<br> DE <br>COMBAT</th>
				      <td rowspan="2"><br>JEUDI</td>
				      <td>Enfants</td>
				      <td>18h-19h</td>
				      
				    </tr>
				    <tr>
				      <td>Adultes</td>
				      <td>20h-22h</td>
				      
				    </tr>
				  </tbody>
				</table>
			</div>

	</div>


	<!-- Pieds de page -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js-links.html';?>
</body>
</html>