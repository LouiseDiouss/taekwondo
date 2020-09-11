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


		<!-- boutique-->
		<div class="banner-bottom" >
				<div class="container">
					<h2 class="agileits_head" >Nos Produits</h2>
				</div>

				<div>
					<img src="assets/media/images/attente.gif" class="image-responsive" alt="responsive image"  style="width:80%;margin:0px auto 0px auto;max-width:100%;height:auto;display: block;margin-top:20px;  " /> 
					<h2 style="text-align: center;color:#157d22;margin-top: 20px"> Cette partie est en cours de développement ;).</h2>
				</div>

				<div class="clearfix"> </div>
		</div>
		<!-- boutique-->	

	<!-- Pieds de page -->
	<?php include 'includes/footer.php'; ?>

	<!--?php include 'includes/js-links.html';?-->
</body>
</html>