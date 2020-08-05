<div class="current-openings">
	<h2 class="text-center pt-5 pb-4">Current Openings</h2>
	<div class="container-fluid">
		<div class="row row-cols-lg-8 row-cols-4 text-center">
			<div class="col"><a id="baltimoreCareer">Baltimore</a></div>
			<div class="col"><a id="delawareCareer">Delaware</a></div>
			<div class="col"><a id="executiveCareer">Executive</a></div>
			<div class="col">King of Prussia</div>
			<div class="col">New Jersey</div>
			<div class="col">Philadelphia</div>
			<div class="col">South Delaware</div>
			<div class="col">York, PA</div>
		</div>
	</div>
</div>
<div class="container-fluid pt-5">
	<!-- Baltimore -->
	<div class="career-baltimore">
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
		<?php $args=array(
			'post_type' => 'careers',
			'posts_per_page' => 20,
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
			
		

		

