<div class="statement text-center">
	<p class="font-weight-bold"><span class="essential">AN ESSENTIAL SERVICE PROVIDER.</span> Read our Statement on Coronavirus</p>
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
				'menu_class'        => 'navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
			<form class="form-inline float-lg-right" method="get" id="searchform" action="<?php echo home_url() ; ?>/">
				<div class="input-group input-group-sm">
					<input class="form-control" type="text" placeholder="Search our site" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" required />
					<div class="input-group-append">
						<button class="btn btn-outline-sobieski my-sm-0" type="submit">
							<i class="fas fa-search fa-lg fa-fw"></i>
						</button>
					</div>
				</div>
			</form>
			<div class="clearfix"></div>
			<div class="flex-column float-lg-right">
				<ul class="navbar-nav commercial-nav">
					<li class="nav-item">
						<a class="nav-link pr-2" href="#">Commercial Maintenance</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pr-2" href="#">Mechanical Construction</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pr-2" href="#">Fire, Alarm &amp; Security</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Home Builder Services</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div class="phone-numbers d-none d-lg-block">
	<p>866-477-4394</p>
</div>
<div class="phone-numbers d-block d-lg-none">
	<p>866-477-4394</p>
</div>
