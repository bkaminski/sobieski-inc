<nav class="navbar navbar-expand-lg bg-sobieski" style="z-index: 10;">
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
		<?php $uploads = wp_upload_dir();
		echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/06/Sobieski-Homeowner.png' ) . '" class="logo-img-2021 d-none d-lg-block" width="300" alt="Sobieski Inc Logo" style="z-index: 999;">'; ?>	
	</a>
	<div class="d-block d-lg-none">
		<a class="text-center" href="<?php echo get_home_url(); ?>">
				<?php $uploads = wp_upload_dir(); 
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/06/Sobieski-Homeowner.png' ) . '" class="logo-img-2021" width="250" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="clearfix"></div>
	<button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#sobieskiNav" aria-controls="sobieskiNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="sobieskiNav" style="background: transparent;">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item nav-item-2021">
				<a class="nav-link" href="#">Homeowner</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link" href="#">Commercial</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link" href="#">Home Builder</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link" href="#">About Us</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link" href="#">Careers</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link text-uppercase" href="#" style="color:#AD3226;">Schedule Online</a>
			</li>
			<li class="nav-item nav-item-2021">
				<a class="nav-link sobieski-search-modal" href="#"><i class="fas fa-search fa-lg"></i></a>
			</li>
		</ul>
		<div class="call-us pt-2 pb-2">(302) 000-0000</div>
	</div>
</nav>
