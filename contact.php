<?php 
	require 'proccess/config.php';
	require_once 'proccess/mailer.php';

	$host = $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'];

	if (isset($_POST['contact']))
	{
	    $nom = htmlspecialchars($_POST['nom']);
	    $prenom = htmlspecialchars($_POST['prenom']);
	    $email = htmlspecialchars($_POST['email']);
	    $objet = htmlspecialchars($_POST['objet']);
	    $message=htmlspecialchars($_POST['message']);

	    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($objet) && !empty($message))
        {
        	 $insert = 'INSERT INTO contact(slug, nom,prenom,email, objet,message,dateContact)
                                VALUES(UUID(),?,?,?,?,?,NOW())';
              $request = $dataBase->prepare($insert);
              $resultat=$request->execute(array($nom,$prenom,$email,$objet,$message));
              if ($resultat){
                        /* Envoi du mail */
                       
                       
                        sendMail($email, $objet, $message, $message);
                        /* Envoi de mail */

                        $msg = ['success' => 'Votre demande a bien été reçu. Nous vous répondrons dans les plus brefs délais.'];
                }
                else
                {
                	$msg=['danger' => 'Oups!!!Demande pas reçue'];
                }
        }
        else
	        {
	        	['warning' => 'Tous les champs sont obligatoires'];
	        }
	 }




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil - Taekwondo Challenge</title>
	<?php include 'includes/css-links.html';?>
	<!--?php include 'includes/style.css';?-->
	<link href="./assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<?php include 'includes/menu.php';?>

	<!-- infos  page contact -->
			<div class="w3layouts_banner1_info">
				<h3 class="agileits_head">Nous Contacter</h3>
			</div>
			

			<!-- mail -->
	<div class="agileits_w3layouts_mail_grids">	
		<div class="col-md-7 w3l_mail_left">                
      <!--Google map-->
	        <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 485; -webkit-background-size:cover;
				-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;">
	            <iframe src="https://maps.google.com/maps?q=Gymnase+Malakoff+4&center=47.21437,-1.5285&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
	                    style="border:0;width:100%; height:485px; " allowfullscreen ></iframe>
	        </div>
				<!--div id="map">
	        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1j7uPuixmwHH1wYUQaRX_xJ8TtrFkBSmH" width="800" height="485"></iframe>   
	      </div-->
		</div>
		<div class="col-md-5  w3l_mail_right" style="height: 485; -webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover; border:0;width:100%; height:485px;" >      
			<h3>Nos Coordonnées</h3>
			<ul>
				<li><span><i class="fa fa-home" aria-hidden="true"></i>Siège Social<label>:</label></span> 4 rue Laurent Bonnevay, Nantes, 44200</li>
				<li><span><i class="fa fa-home" aria-hidden="true"></i>Gymnase<label>:</label></span> esplanade d'angleterre, Nantes, 44100</li>
				<li><span><i class="fa fa-phone" aria-hidden="true"></i>Tel<label>:</label></span> (+33) 621466467</li>
				<li><span><i class="fa fa-envelope" aria-hidden="true"></i>Email<label>:</label></span> <a href="mailto:taekwondochallenge.44@gmail.com">taekwondochallenge.44@gmail.com</a></li>
				<li><span><i class="fa fa-globe" aria-hidden="true"></i>Website<label>:</label></span> <a href="https://w3layouts.com/"><!-- http://karatew3layouts.com --></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<h3 class="agileits_head">Nous contacter</h3>
			<p class="w3layouts_para">Challenge Taekwondo</p>
			 <?php if (isset($msg)){?>
                <p class="alert alert-<?=key($msg)?>">
                    <?=$msg[key($msg)]?>
                </p>
            <?php }?>
			<div class="agileinfo_mail_grids">
				<?php include'includes/form-contact.php'?>
			</div>
		</div>
	</div>
<!-- //mail -->


<script src="assets/js/classie.js"></script>
	<script>
		(function() {
			// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
			if (!String.prototype.trim) {
				(function() {
					// Make sure we trim BOM and NBSP
					var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
					String.prototype.trim = function() {
						return this.replace(rtrim, '');
					};
				})();
			}

			[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
				// in case the input is already filled..
				if( inputEl.value.trim() !== '' ) {
					classie.add( inputEl.parentNode, 'input--filled' );
				}

				// events:
				inputEl.addEventListener( 'focus', onInputFocus );
				inputEl.addEventListener( 'blur', onInputBlur );
			} );

			function onInputFocus( ev ) {
				classie.add( ev.target.parentNode, 'input--filled' );
			}

			function onInputBlur( ev ) {
				if( ev.target.value.trim() === '' ) {
					classie.remove( ev.target.parentNode, 'input--filled' );
				}
			}
		})();
	</script>
<!-- footer -->
	
<!-- //footer -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Karate
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="assets/media/images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<!-- Pieds de page -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js-links.html';?>
</body>
</html>