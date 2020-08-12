<div class="statement text-center">
	<p class="font-weight-bold"><span class="essential">AN ESSENTIAL SERVICE PROVIDER.</span> Read our <a href="<?php echo get_home_url(); ?>/coronavirus-statement"><u class="text-dark">Statement</u></a> on Coronavirus</p>
</div>
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
							<a class="dropdown-item" href="#">About Heating &amp; Air Conditioning</a>
							<a class="dropdown-item" href="#">Heating Repairs</a>
							<a class="dropdown-item" href="#">Heating Installation and Replacement</a>
							<a class="dropdown-item" href="#">Air Conditioning Repairs</a>
							<a class="dropdown-item" href="#">AC Installation &amp; Replacement</a>
							<a class="dropdown-item" href="#">Heating &amp; Cooling Pro Check</a>
							<a class="dropdown-item" href="#">Service Partner Plans</a>
							<a class="dropdown-item" href="#">Custom Homes</a>
							<a class="dropdown-item" href="#">Geothermal</a>
							<a class="dropdown-item" href="#">Boilers</a>
							<a class="dropdown-item" href="#">Turn Up Your Comfort with a WiFi Thermostat</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Plumbing & Drain Services</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="#">About Plumbing &amp; Drain Services</a>
							<a class="dropdown-item" href="#">Plumbing Installation and Replacements</a>
							<a class="dropdown-item" href="#">Back Up Sump Pump</a>
							<a class="dropdown-item" href="#">Sewer &amp; Drain Service/Repair</a>
							<a class="dropdown-item" href="#">Sewer &amp; Drain Installation/Replacements</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Water Heaters</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="#">About Water Heaters</a>
							<a class="dropdown-item" href="#">Water Heater Installation/Replacement</a>
							<a class="dropdown-item" href="#">Why Tankless?</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Indoor Air Quality</a>
						<div class="dropdown-menu dropdown-menu-right">	
							<a class="dropdown-item" href="#">About IAQ</a>
							<a class="dropdown-item" href="#">Dehumidifiers</a>
							<a class="dropdown-item" href="#">Humidifiers</a>
							<a class="dropdown-item" href="#">Indoor Air Quality Analysis</a>
							<a class="dropdown-item" href="#">Merv Air Filtration</a>
							<a class="dropdown-item" href="#">UV Air Quality Products</a>
							<a class="dropdown-item" href="#">Ventilation</a>
						</div>
					</li>
				</ul>
		</div>
	</div>
</nav>
<div class="phone-numbers d-none d-lg-block">
	<p class="h4 font-weight-bold">866-477-4404</p>
</div>
<div class="phone-numbers d-block d-lg-none">
	<p>866-477-4404</p>
</div>
