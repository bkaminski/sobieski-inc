<div class="current-openings">
	<h2 class="text-center pt-5 pb-4 text-uppercase">Current Openings</h2>
	<div class="container-fluid">
		<div class="row row-cols-lg-8 row-cols-4 text-center">
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white baltimoreCareer">Baltimore</a>
					</div>
					<div class="card-body">
						<a class="baltimoreCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/baltimore_nobanner.png' ) . '" class="img-fluid" alt="Graphic of Maryland with a Pin on Baltimore">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white delawareCareer">Delaware</a>
					</div>
					<div class="card-body">
						<a class="delawareCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of the State of Delaware">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white executiveCareer">Executive</a>
					</div>
					<div class="card-body">
						<a class="executiveCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of person in business suit">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white kopCareer">King of Prussia</a>
					</div>
					<div class="card-body">
						<a class="kopCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of Pennsylvania with pin on King of Prussia">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white njCareer">New Jersey</a>
					</div>
					<div class="card-body">
						<a class="njCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of state of New Jersey">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white phillyCareer">Philadelphia</a>
					</div>
					<div class="card-body">
						<a class="phillyCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of state of Pennsylvania with a pin on Philadelphia">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white southDelawareCareer">South Delaware</a>
					</div>
					<div class="card-body">
						<a class="southDelawareCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of state of Delaware with a pin on Sussex County">'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header career-header">
						<a class="career-link text-white yorkCareer">York, PA</a>
					</div>
					<div class="card-body">
						<a class="yorkCareer">
							<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '' ) . '" class="img-fluid" alt="Graphic of state of Pennsylvania with a pin on York">'; ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid pt-5">
	<!-- Baltimore -->
	<div class="career-baltimore">
		<h4 class="text-center text-uppercase">Baltimore</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'baltimore',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
										
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
	</div>
	</div>
	<!-- Delaware -->
	<div class="career-delaware">
		<h4 class="text-center text-uppercase">Delaware</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 27,
			'category_name' => 'delaware',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
											
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
		</div>

	<!-- Executive -->
	<div class="career-executive">
		<h4 class="text-center text-uppercase">Executive</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'executive',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
											
								</div>
								</div>
							</div>
						</div>
						<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
						</div>
						<div class="clearfix"></div>
					<?php } ?>
				<?php endwhile; } wp_reset_query(); ?>
		</div>
	</div>

	<!-- King of Prussia -->
	<div class="career-kop">
		<h4 class="text-center text-uppercase">King of Prussia</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'king-of-prussia',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
										
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
		</div>
	
	<!-- New Jersey -->
	<div class="career-nj">
		<h4 class="text-center text-uppercase">New Jersey</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'new-jersey',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
										
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
	</div>

	<!-- Philadelphia -->
	<div class="career-philadelphia">
		<h4 class="text-center text-uppercase">Philadelphia</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'philadelphia',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
										
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
	</div>

	<!-- South Delaware -->
	<div class="career-south-delaware">
		<h4 class="text-center text-uppercase">South Delaware</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'south-delaware',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
										
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
	</div>
	
			
<!-- York PA -->
	<div class="career-york">
		<h4 class="text-center text-uppercase">York, PA</h4>
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
			'category_name' => 'york-pa',
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			$i = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
				if($i % 3 == 0) { ?>
					<div class="row">
					<?php } ?>
					<div class="col-lg-4 mb-4">
						<div class="card shadow h-100">
							<div class="card-body p-0">
								<p class="card-title text-center pt-2"><?php the_title(); ?></p>
								<div class="card-text text-center">
									<?php the_content(); ?>
										
								</div>
							</div>
						</div>
					</div>
					<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
					</div>
					<div class="clearfix"></div>
				<?php } ?>
			<?php endwhile; } wp_reset_query(); ?>
	</div>
		
		

		

