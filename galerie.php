<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taekwondo Challenge</title>
	<?php include 'includes/css-links.html';?>
	<!--?php include 'includes/style.css';?-->
</head>
<body>
	<?php include 'includes/menu.php';?>
	<div class="banner-bottom">
		<div class="container">
				<h3 class="agileits_head">Galerie</h3>
				<!--p class="w3layouts_para">Le Taekwondo</p-->
				<div class="w3ls_gallery_grids">
					<div class="col-md-4 w3_agile_gallery_grid">
						<div class="agile_gallery_grid">
							<a title="groupe." href="assets/media/images/groupe.jpg">
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
							<a title="entrainement" href="assets/media/images/ent8.jpg">
								<div class="agile_gallery_grid1">
									<img src="assets/media/images/ent8.jpg" alt=" " class="img-responsive" />
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
							<a title="CHALLENGE TAEKWONDO MALAKOFF." href="assets/media/images/ent5.jpg" >
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

	<!--js -->
		<!-- //gallery -->
	<script src="assets/js/simpleLightbox.js"></script>
	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
<!-- footer -->
	
<!-- //footer -->

<!-- for bootstrap working -->
	<script src="includes/js-links.html"></script>
<!-- //for bootstrap working -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- JS -->
	<!-- Pieds de page -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js-links.html';?>
</body>
</html>