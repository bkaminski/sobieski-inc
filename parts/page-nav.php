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
				'menu_class'        => 'navbar-nav ml-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
		</div>
	</div>
</nav>
<div class="container-fluid pb-2 d-none d-lg-block">
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-4 text-center">
			<?php if ( is_front_page() ) {
			   //nada :)
			} elseif ( is_home () ) { 
			   //nada!
			} else { ?>
				<button class="btn btn-outline-sobieski-red btn-sm rounded-0 mb-2" onclick="ScheduleEngine.show();"><i class="far fa-calendar-alt fa-fw"></i> Schedule Service Online</button>
			<?php } ?>
			
			<div class="phone-numbers">
				<p class="font-weight-bold">Commercial: 866-477-4394 | Homeowner: 866-477-4404</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="btn-group btn-group-sm float-right" role="group" aria-label="Sub-nav Options">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
  			</div>
		</div>
	</div>
</div>
<div class="container-fluid pb-2 d-block d-lg-none">
	<div class="row">
		<div class="col-lg-6 text-center">
			<?php if ( is_front_page() ) {
			   //nada :)
			} elseif ( is_home () ) { 
			   //nada!
			} else { ?>
				<button class="btn btn-outline-sobieski-red btn-sm rounded-0 mb-2" onclick="ScheduleEngine.show();"><i class="far fa-calendar-alt fa-fw"></i> Schedule Service Online</button>
			<?php } ?>
			
			<div class="phone-numbers">
				<p class="font-weight-bold">Commercial: 866-477-4394 | Homeowner: 866-477-4404</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<div class="btn-group btn-group-sm" role="group" aria-label="Sub-nav Options">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
  			</div>
		</div>
	</div>
</div>
