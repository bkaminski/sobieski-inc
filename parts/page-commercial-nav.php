<div class="statement text-center">
	<p class="font-weight-bold"><span class="essential">AN ESSENTIAL SERVICE PROVIDER.</span> Read our <a href="<?php echo get_home_url(); ?>/coronavirus-statement"><u class="text-dark">Statement</u></a> on Coronavirus</p>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="logo-wrapper">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); 
			echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/06/revised_logo.png' ) . '" class="logo-img d-none d-lg-block" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="d-block d-lg-none">
		<a class="text-center" href="<?php echo get_home_url(); ?>">
				<?php $uploads = wp_upload_dir(); 
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/06/revised_logo.png' ) . '" class="logo-img" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="clearfix"></div>
	<button class="navbar-toggler rounded-0 hamburger" type="button" data-toggle="collapse" data-target="#sobieskiNav" aria-controls="sobieskiNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="sobieskiNav">
		<div class="flex-column ml-auto">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav main-nav justify-content-end',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				<ul class="nav sub-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Commercial Maintenance</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="#">About Commercial Maintenance</a>
							<a class="dropdown-item" href="#">HVAC</a>
							<a class="dropdown-item" href="#">Plumbing</a>
							<a class="dropdown-item" href="#">Water Heating</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Mechanical Construction</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="#">About Mechanical Construction</a>
							<a class="dropdown-item" href="#">BIM &amp; 3D Modeling</a>
							<a class="dropdown-item" href="#">Conceptual Design Budgeting</a>
							<a class="dropdown-item" href="#">Design Build Partnerships</a>
							<a class="dropdown-item" href="#">Pre-Fabrication</a>
							<a class="dropdown-item" href="#">Value Engineering</a>
							<a class="dropdown-item" href="#">Turnkey Projects</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Fire, Alarm &amp; Security</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="#">About Fire, Alarm &amp; Security</a>
							<a class="dropdown-item" href="#">Fire Alarm Systems</a>
							<a class="dropdown-item" href="#">Security Systems</a>
							<a class="dropdown-item" href="#">Testing &amp; Inspections</a>
							<a class="dropdown-item" href="#">Fire &amp; Security Monitoring</a>
							<a class="dropdown-item" href="#">Request a Fire &amp; Security System Quote</a>
							<a class="dropdown-item" href="#">Emergency Service</a>
							<a class="dropdown-item" href="#">Service, Repair, &amp; Maintenance</a>
							<a class="dropdown-item" href="#">VIP Club</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Home Builder Services</a>
						<div class="dropdown-menu dropdown-menu-right">	
							<a class="dropdown-item" href="#">About Home Builder Services</a>
							<a class="dropdown-item" href="#">Pre-Construction Services</a>
							<a class="dropdown-item" href="#">Construction Services</a>
							<a class="dropdown-item" href="#">After Sale Support</a>
						</div>
					</li>
				</ul>
		</div>
	</div>
</nav>
<div class="phone-numbers d-none d-lg-block">
	<p class="h4 font-weight-bold">866-477-4394</p>
</div>
<div class="phone-numbers d-block d-lg-none">
	<p>866-477-4394</p>
</div>
