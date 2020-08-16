<div class="statement text-center">
	<p class="font-weight-bold"><span class="essential">AN ESSENTIAL SERVICE PROVIDER.</span> Read our <a href="<?php echo get_home_url(); ?>/coronavirus-statement"><u class="text-dark">Statement</u></a> on Coronavirus</p>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="logo-wrapper">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); 
			echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Commercial.png' ) . '" class="logo-img d-none d-lg-block" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="d-block d-lg-none">
		<a class="text-center" href="<?php echo get_home_url(); ?>">
				<?php $uploads = wp_upload_dir(); 
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Commercial.png' ) . '" class="logo-img" alt="Sobieski Inc Logo">'; ?>
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
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/commercial-maintenance-0">About Commercial Maintenance</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/hvac-maintenance">HVAC</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/plumbing">Plumbing</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/water-heating">Water Heating</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Mechanical Construction</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/mechanical-construction">About Mechanical Construction</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/bim-3d-modeling">BIM &amp; 3D Modeling</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/conceptual-design-budgeting">Conceptual Design Budgeting</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/design-build-partnerships">Design Build Partnerships</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/pre-fabrication">Pre-Fabrication</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/value-engineering">Value Engineering</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/turnkey-projects">Turnkey Projects</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Fire, Alarm &amp; Security</a>
						<div class="dropdown-menu">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/fire-alarm-security">About Fire, Alarm &amp; Security</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/fire-alarm-systems">Fire Alarm Systems</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/security-systems">Security Systems</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/testing-inspections">Testing &amp; Inspections</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/fire-security-monitoring">Fire &amp; Security Monitoring</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/request-fire-security-system-quote">Request a Fire &amp; Security System Quote</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/emergency-service">Emergency Service</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-repair-maintenance">Service, Repair, &amp; Maintenance</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/very-important-protection-club">VIP Club</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Home Builder Services</a>
						<div class="dropdown-menu dropdown-menu-right">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service-category/home-builder-services">About Home Builder Services</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/pre-construction-services">Pre-Construction Services</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/construction-services">Construction Services</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/after-sale-support">After Sale Support</a>
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
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0">Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0">Homeowner</a>
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
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0">Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0">Homeowner</a>
  			</div>
		</div>
	</div>
</div>
