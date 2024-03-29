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
	<title>	Galerie - Taekwondo Challenge</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="keywords" content="Taekwondo challenge Nantes" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script  src="assets/js/jquery-2.1.4.min.js"></script>
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<
	<link rel="shortcut icon" href="assets/media/images/logo.png">
	<?php include 'includes/css-links.html';?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


</head>
<body>
	<?php include './includes/menu.php';?>
	
	<!--galerie -->
	<!-- galerie -->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="agileits_head">Galerie</h3>
			<!--p class="w3layouts_para">Le Taekwondo</p-->
			<div class="w3ls_gallery_grids">
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="groupe." href="/taekwondo/assets/media/images/groupe.jpg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/groupe.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>photo de groupe avec les enfants.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="entrainement" href="assets/media/images/ent3.JPG">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/ent3.JPG" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>Séance d'entrainement</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="entrainement" href="assets/media/images/challenge.jpeg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/challenge.jpeg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>Séance d'entrainement</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="entrainement" href="assets/media/images/ent7.jpg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/ent7.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>Séance d'entrainement</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="entrainement" href="assets/media/images/ent9.jpg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/ent9.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>Séance d'entrainement</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="edition 1 CHALLENGE TAEKWONDO MALAKOFF" href="assets/media/images/challenge1.jpeg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/challenge1.jpeg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>édition 1 MALAKOFF</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="CHALLENGE TAEKWONDO MALAKOFF" href="assets/media/images/ent12.jpg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/ent12.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p> première édition de CHALLENGE TAEKWONDO MALAKOFF </p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="CHALLENGE TAEKWONDO MALAKOFF." href="assets/media/images/ent5.jpg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/ent5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Takwondo Challenge</h3>
									<p>première édition de CHALLENGE TAEKWONDO MALAKOFF</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="démo lors d'une cérémonie" href="assets/media/images/invit1.jpeg">
							<div class="agile_gallery_grid1">
								<img src="assets/media/images/invit1.jpeg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Taekwondo Challenge</h3>
									<p>démo </p>
								</div>
							</div>
						</a>
					</div>
				</div>
				

				<div class="clearfix"></div>
			</div>


		</div>
	</div>
<!-- //gallery -->
<!--?php include 'includes/js-links.html';?-->
<!-- //gallery -->
	<script src="assets/js/simpleLightbox.js"></script>
	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
<!-- footer -->

	<!--fin galerie -->
	<!-- Pieds de page -->
	<?php include 'includes/footer.php'; ?>

	





	
</body>
</html>