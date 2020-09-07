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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--link rel="icon" type="image/x-icon" href="assets/media/images/logo.png"/-->
	<link rel="shortcut icon" href="assets/media/images/logo.png">
	<?php include 'includes/css-links.html';?>
	<script  src="assets/js/jquery-2.1.4.min.js"></script>
	<script defer src="assets/js/jquery.flexslider.js"  type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/move-top.js" ></script>
	<script type="text/javascript" src="assets/js/easing.js" ></script>
	<script type="text/javascript" src="assets/js/jquery.flexisel.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>




	<!--?php include 'includes/style.css';?-->
</head>
<body>
	<?php include 'includes/menu.php';?>
	
	<div class="w3_agile_banner_info" style="margin-top:100px;">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agile_banner_info_grid">
									<div class="agile_banner_info_grid_pos">
										<p><span>Bienvenue</span> à Challenge Taekwondo</p>
									</div>
								</div>
							</li>
							<li>
								<div class="agile_banner_info_grid">
									<div class="agile_banner_info_grid_pos">
										<p><span>Bienvenue</span> à Challenge Taekwondo</p>
									</div>
								</div>
							</li>
							<li>
								<div class="agile_banner_info_grid">
									<div class="agile_banner_info_grid_pos">
										<p><span>Bienvenue</span> à Challenge Taekwondo</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>			
	</div>
	
	<!-- //banniere -->


	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-2 w3_agileits_banner_bottom_grid">
				<h2>Actualités</h2>
			</div>
			<div class="col-md-10 w3_agileits_banner_bottom_grid_left">
				<ul id="flexiselDemo1">	
					<li>
						<div class="agileits_w3layouts_banner_bottom_grid">
							<div class="wthree_banner_bottom_grid1">
								<img src="assets/media/images/logo.png" alt=" " class="img-responsive" />
								<div class="agileinfo_banner_bottom_grid1_pos">
									<h3>Challenge Taekwondo</h3>
									<!-- <p>Donec vitae hendrerit faucibus.</p> -->
								</div>
							</div>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Challenge Taekwondo</a></h4>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_bottom_grid">
							<div class="wthree_banner_bottom_grid1">
								<img src="assets/media/images/logo.png" alt=" " class="img-responsive" />
								<div class="agileinfo_banner_bottom_grid1_pos">
									<h3>Challenge Taekwondo</h3>
									<!-- <p>Donec vitae hendrerit faucibus.</p> -->
								</div>
							</div>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Challenge Taekwondo.</a></h4>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_bottom_grid">
							<div class="wthree_banner_bottom_grid1">
								<img src="assets/media/images/7.jpg" alt=" " class="img-responsive" />
								<div class="agileinfo_banner_bottom_grid1_pos">
									<h3>Challenge Taekwondo</h3>
									<!-- <p>Donec vitae hendrerit faucibus.</p> -->
								</div>
							</div>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Challenge Taekwondo</a></h4>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_bottom_grid">
							<div class="wthree_banner_bottom_grid1">
								<img src="assets/media/images/3.jpg" alt=" " class="img-responsive" />
								<div class="agileinfo_banner_bottom_grid1_pos">
									<h3>Challenge Taekwondo</h3>
									<p><!-- Donec vitae hendrerit faucibus. --></p>
								</div>
							</div>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Challenge Taekwondo.</a></h4>
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_bottom_grid">
							<div class="wthree_banner_bottom_grid1">
								<img src="assets/media/images/5.jpg" alt=" " class="img-responsive" />
								<div class="agileinfo_banner_bottom_grid1_pos">
									<h3>Challenge Taekwondo</h3>
									<!-- <p>Donec vitae hendrerit faucibus.</p> -->
								</div>
							</div>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Challenge Taekwondo.</a></h4>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!--about -->
	<div class="about">
		<div class="container">
			<div class="col-md-6 agileits_about_grid_left">
				
			</div>
			<div class="col-md-6 agileits_about_grid_right"  >
				<h3>A propos  du <span>Taekwondo</span></h3>
				<!--h4>Pellentesque habitant morbi tristique senectus</h4-->
				<p><i>Le taekwondo est un art martial d'origine sud coréenne permettant de bloquer une attaque adverse et de contre attaquer par la voie du pied et du poing.</i> <br>
				Il a plusieurs atout comme:
					<ul>
						<li style="margin-left:2vw;">l'amélioration des réflexes</li>
						<li style="margin-left:2vw;">la précision des mouvements</li>
						<li style="margin-left:2vw;">le goût du dépassement de soi et du travail</li>		
						<li style="margin-left:2vw;">la souplesse, l'agilité et la force musculaire</li>	
						<li style="margin-left:2vw;">le goût du dépassement de soi et du travail</li>		
						<li style="margin-left:2vw;">la confiance en soi</li>
						<li style="margin-left:2vw;">l'ouverture au monde et aux autres</li>	
					</ul>		
				</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3ls_about_bottom">
			<div class="container">
				<div class="w3layouts_about_grid_left_pos">
					<img src="assets/media/images/1.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3_about_bottom_grid">
					<h3><span>Le Taekwondo</span>permet de développer cinqs qualités qui sont: respect, humilité, persévérance, maîtrise de soi et honnêteté</h3>
					<div class="link-effect-2" id="link-effect-2">
						<a href="" class="w3l_more" data-toggle="modal" data-target="#myModal"><span data-hover="DEMO">DEMO</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Taekwondo Challenge
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						 <img src="assets/media/images/ent2.jpg" alt=" " class="img-responsive" /> 
						<!--video class="img-responsive" src=".\images\video.mp4" autoplay loop/-->
						<p>Voilà une petite démo prise lors de la première édition de <B>Taekwondo Challenge MALAKOFF</B>
							</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->





	<!-- Pieds de page -->
	<?php include 'includes/footer.php'; ?>

	<!--?php include 'includes/js-links.html';?-->



<script type="application/x-javascript"> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->


<!-- flexSlider -->

	
	<script type="text/javascript">
		$(window).on('load', function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
	

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
<!-- //here ends scrolling icon -->




	<!-- //bootstrap-pop-up -->

</body>
</html>