<script src="https://webchat.scheduleengine.net/webchat-v1.js"></script>
<script>
  WebChat.loadChat({
    "apiKey": "sci48bm7s65xpqh1oxrovn553mqyfwiz",
    "initialMessage":"How can we make you smile today?",
    "initialResponses":[],
    "logoUrl":"https://www.sobieskiinc.com/wp-content/uploads/2020/06/revised_logo.png",
    "title":"Welcome",
    "primaryAccentColor":"#cc433a",
    "primaryAccentTextColor":"#FFFFFF",
    "backgroundColor":"#FFFFFF",
    "agentBubbleBackgroundColor":"#cc433a",
    "agentBubbleTextColor":"#FFFFFF",
    "bubbleBackgroundColor":"#F1F1F1",
    "bubbleTextColor":"#000000",
    "sendButtonBackgroundColor":"#cc433a",
    "sendButtonTextColor":"#FFFFFF",
    "suggestedResponseColor":"#cc433a",
    "autoOpen":true,
    "autoOpenMobile":false,
    "position":"right",
    "buttonBackgroundColor":"#cc433a",
    "buttonText":"Chat with Us",
    "buttonTextColor":"#FFFFFF",
    "autoOpenDelay":30
  });
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="logo-wrapper">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); 
			echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img d-none d-lg-block" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="d-block d-lg-none">
		<a class="text-center" href="<?php echo get_home_url(); ?>">
				<?php $uploads = wp_upload_dir(); 
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="clearfix"></div>
	<button class="navbar-toggler rounded-0 hamburger" type="button" data-toggle="collapse" data-target="#sobieskiHomeNav" aria-controls="sobieskiHomeNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="sobieskiHomeNav">
		<div class="flex-column ml-auto">
			
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav justify-content-end',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				<ul class="nav sub-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Heating & Air Conditioning</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/heating-air-conditioning">About Heating &amp; Air Conditioning</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/heating-repairs">Heating Repairs</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/heating-installation-replacement">Heating Installation and Replacement</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/air-conditioning-repairs">Air Conditioning Repairs</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/lennox">Lennox Partner Information</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/goodman">Goodman Partner Information</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/ac-installation-replacement">AC Installation &amp; Replacement</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/heating-cooling-tune-up">Heating &amp; Cooling Tune Up</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans">Service Partner Plans</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/geothermal-heating-cooling">Geothermal</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/boilers">Boilers</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/turn-your-comfort-wi-fi-thermostat">Turn Up Your Comfort with a WiFi Thermostat</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Plumbing & Drain Services</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/plumbing-drain-services">About Plumbing &amp; Drain Services</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/plumbing-installations-replacements">Plumbing Installation and Replacements</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/back-sump-pump">Back Up Sump Pump</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/sewer-drain-service-repair">Sewer &amp; Drain Service/Repair</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/sewer-drain-installation-and-replacements">Sewer &amp; Drain Installation/Replacements</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Water Heaters</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/water-heaters">About Water Heaters</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/water-heater-installation-replacement">Water Heater Installation/Replacement</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/why-tankless">Why Tankless?</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/bradfordwhite">Bradford White Partner Information</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Indoor Air Quality</a>
						<div class="dropdown-menu dropdown-menu-right">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/indoor-air-quality">About IAQ</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/dehumidifiers">Dehumidifiers</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/humidifiers">Humidifiers</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/air-advice">Indoor Air Quality Analysis</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/lennox-iaq-systems">Lennox IAQ Systems</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/goodman-iaq-systems">Goodman IAQ Systems</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/merv-air-filtration">Merv Air Filtration</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/uv-air-quality-products">UV Air Quality Products</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/ventilation">Ventilation</a>
						</div>
					</li>
				</ul>
		</div>
	</div>
</nav>
<div class="container-fluid pb-2 d-none d-lg-block">
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-4 text-center">
			<div class="phone-numbers">
				<p class="h5 font-weight-bold">Homeowners: 866-477-4404</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/audience/home-builders" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-hammer"></i> Home Builders</a>
  				<a href="<?php echo get_home_url(); ?>/guide/enter-contact-info-below-be-contacted-about-ensuring-your-new-homes-equipment-warranty" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> New Construction</a>
  			</div>
		</div>
	</div>
</div>
<div class="container-fluid pb-2 d-block d-lg-none">
	<div class="row">
		<div class="col-lg-6 text-center">
			<div class="phone-numbers">
				<p class="h5 font-weight-bold">Homeowners: 866-477-4404</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/audience/home-builders" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-hammer"></i> Home Builders</a>
  				<a href="<?php echo get_home_url(); ?>/guide/enter-contact-info-below-be-contacted-about-ensuring-your-new-homes-equipment-warranty" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> New Construction</a>
  			</div>
		</div>
	</div>
</div>
