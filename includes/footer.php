<!-- footer -->
<div class="footer" style="">
	<div class="p-3" >
		<div class="row" ><!--style="margin-bottom: 5%;"-->
			<div class="col-md-4">
				<h3>A propos</h3>
				<p style="font-weight: 500; margin-bottom: 20px;font-size: 16px;">Vous pouvez également nous suivre sur ces réseaux.</p>
				<ul class="agileits_social_list" style="margin-bottom: 20px;">
					<li><a href="<?php if (isset($appParameters)) print $appParameters['ets_facebook'];?>"  class="w3_agile_facebook" target="_blank" style=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?php if (isset($appParameters)) print $appParameters['ets_twitter'];?>" target="_blank" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="<?php if (isset($appParameters)) print $appParameters['ets_instagram'];?>" target="_blank" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Articles récents</h3>
				<p style="font-weight: 500;margin-bottom: 20px;font-size: 16px;">Cette rubrique sera bientôt disponible </p>
			</div>
			<div class="col-md-5" style="margin-bottom: 20px;">
				<h3>Nos Coordonnées</h3>
				<ul class="w3_address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Siège social: <?php if (isset($appParameters)) print $appParameters['ets_siege_social'];?>
                    </li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Gymnase: <?php if (isset($appParameters)) print $appParameters['ets_adresse'];?>, 44200 Nantes
                    </li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="mailto:<?php if (isset($appParameters)) print $appParameters['ets_email'];?>">Taekwondochallenge.44@gmail.com</a></li>
                     <!--li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:Taekwondochallenge.44@gmail.com">Taekwondochallenge.44@gmail.com</a></li-->
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php if (isset($appParameters)) print $appParameters['ets_telephone'];?></li>
				</ul>
			</div>
		</div>
			<div class="clearfix"> </div>
			
			
		<div class="agileinfo_copyright" style="padding: 1.5em 0;border-top: 1px solid #8e8e8e;border-bottom: 1px solid #8e8e8e;">
				<p>© 2020. All rights reserved | Design by TaekwondoChallenge</p>
		</div>
	</div>
	
</div>

<!--fin footer -->
