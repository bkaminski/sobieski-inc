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
				<ul class="nav sub-nav float-right">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Neighborhood Links</a>
						<div class="dropdown-menu dropdown-menu-right">	
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-anthem">Anthem</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-your-new-home-aviemore-ravenglass-lynemore-tweedsmere">Aviemore-Lynemore</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Brookstone</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Canal View</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Chestnut Hill Preserve</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Clearview Meadow</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Coastal Club</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Hickory Hollow</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">High Hook Farms</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">High Pointe</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Hyetts Crossing</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Lewes Crossing</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Lighthouse Lakes</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Massey's Mill</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Milford Ponds</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Parkside</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Pelican Point</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Peninsula Lakes</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Rothwell Estates</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Sawgrass</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Silver Wind Estates</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Solitude on White Creek</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Spring Oaks</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">The Estuary</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">The Overlook</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">The Parkway at South Ridge</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">The Preserve at Deep Creek</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">The Reserves</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">The Woods at Arnell Creek</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Tidbury Crossing</a>
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
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
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
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
  			</div>
		</div>
	</div>
</div>
