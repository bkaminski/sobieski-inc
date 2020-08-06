<div class="current-openings">
	<h2 class="text-center pt-5 pb-4 text-uppercase">Current Openings</h2>
	<div class="container-fluid">
		<div class="row row-cols-lg-8 row-cols-4 text-center">
			<div class="col"><a class="career-link" id="baltimoreCareer">Baltimore</a></div>
			<div class="col"><a class="career-link" id="delawareCareer">Delaware</a></div>
			<div class="col"><a class="career-link" id="executiveCareer">Executive</a></div>
			<div class="col"><a class="career-link" id="kopCareer">King of Prussia</a></div>
			<div class="col"><a class="career-link" id="njCareer">New Jersey</a></div>
			<div class="col"><a class="career-link" id="phillyCareer">Philadelphia</a></div>
			<div class="col"><a class="career-link" id="southDelawareCareer">South Delaware</a></div>
			<div class="col"><a class="career-link" id="yorkCareer">York, PA</div>
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
</div>			
		

		
