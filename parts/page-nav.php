<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="logo-wrapper">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">

			<?php if ( is_page( array( 9391, 9392 ) ) ) {
				$uploads = wp_upload_dir();
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img d-none d-lg-block" alt="Sobieski Inc Logo">'; 
			} else {
				$uploads = wp_upload_dir();
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/06/revised_logo.png' ) . '" class="logo-img d-none d-lg-block" alt="Sobieski Inc Logo">';
			}; ?>
				
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
			<div class="phone-numbers">
				<p class="font-weight-bold">Commercial: 302-993-0600 | Homeowner: 866-477-4404</p>
			</div>
		</div>
		<div class="col-lg-4">
			<?php if ( is_page(10238) ) {
				echo(''); 
			} else {  ?>
			<div class="btn-group btn-group-sm float-right" role="group" aria-label="Sub-nav Options">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/audience/home-builders" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-hammer"></i> Home Builders</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
  			</div>
  		<?php } ?>
		</div>
	</div>
</div>
<div class="container-fluid pb-2 d-block d-lg-none">
	<div class="row">
		<div class="col-lg-6 text-center">
			<div class="phone-numbers">
				<p class="font-weight-bold">Commercial: 302-993-0600 | Homeowner: 866-477-4404</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<?php if ( is_page(10238) ) {
				echo(''); 
			} else {  ?>
			<div class="btn-group btn-group-sm" role="group" aria-label="Sub-nav Options">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/audience/home-builders" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-hammer"></i> Home Builders</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
  			</div>
  			<?php } ?>
		</div>
	</div>
</div>
