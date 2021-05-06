<div class="promotions-content">
	<div class="container-fluid pt-2 pl-0 pr-0">
		<!-- Plumbing -->
		<div class="container pt-5 pb-5 plumb-container">
			<h5 class="text-uppercase">Plumbing</h5>
			<?php $args=array(
				'post_type' => 'promotions',
				'posts_per_page' => 4,
				'category_name' => 'plumbing-promo',
				'orderby' => 'date',
				'order' => 'ASC',
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				$i = 0;
				while ($my_query->have_posts()) : $my_query->the_post();
					if($i % 4 == 0) { ?>
						<div class="row">
						<?php } ?>
						<div class="col-6 col-md-3 mb-4 promo-card">
							<div class="card">
								<div class="card-body p-0">
									<a data-target="#<?php echo the_field('coupon_unique_identifier'); ?>" data-toggle="modal" class="transition-wrapper">
										<img src="<?php echo the_field('coupon_image_hover'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
										<img src="<?php echo the_field('coupon_image'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
									</a>
								</div>
							</div>
						</div>
						<?php $i++; if($i != 0 && $i % 4 == 0) { ?>
						</div>
					<?php } ?>
				<?php endwhile; } wp_reset_query(); ?>
		</div>
		<!-- HVAC -->
		<div class="container-fluid pt-5 pb-3 hvac-container pb-5">
			<div class="container">
				<h5 class="text-uppercase">HVAC</h5>
				<?php $args=array(
					'post_type' => 'promotions',
					'posts_per_page' => 4,
					'category_name' => 'hvac-promo',
					'orderby' => 'date',
					'order' => 'ASC',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					$i = 0;
					while ($my_query->have_posts()) : $my_query->the_post();
						if($i % 4 == 0) { ?>
							<div class="row">
							<?php } ?>
							<div class="col-6 col-md-3 mb-4 promo-card">
								<div class="card h-100">
									<div class="card-body p-0">
										<a data-target="#<?php echo the_field('coupon_unique_identifier'); ?>" data-toggle="modal" class="transition-wrapper">
											<img src="<?php echo the_field('coupon_image_hover'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
											<img src="<?php echo the_field('coupon_image'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
										</a>
									</div>
								</div>
							</div>
							<?php $i++; if($i != 0 && $i % 4 == 0) { ?>
							</div>
						<?php } ?>
					<?php endwhile; } wp_reset_query(); ?>
			</div>
		</div>
		<!-- INDOOR AIR QUALITY -->
		<div class="container-fluid pt-5 plumb-container pl-0 pr-0">
			<div class="container pb-5">
				<h5 class="text-uppercase">Indoor Air Quality</h5>
				<?php $args=array(
					'post_type' => 'promotions',
					'posts_per_page' => 4,
					'category_name' => 'air-quality-promo',
					'orderby' => 'date',
					'order' => 'ASC',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					$i = 0;
					while ($my_query->have_posts()) : $my_query->the_post();
						if($i % 4 == 0) { ?>
							<div class="row">
							<?php } ?>
							<div class="col-6 col-md-3 mb-4 promo-card">
								<div class="card h-100">
									<div class="card-body p-0">
										<a data-target="#<?php echo the_field('coupon_unique_identifier'); ?>" data-toggle="modal" class="transition-wrapper">
											<img src="<?php echo the_field('coupon_image_hover'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
											<img src="<?php echo the_field('coupon_image'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
										</a>
									</div>
								</div>
							</div>
							<?php $i++; if($i != 0 && $i % 4 == 0) { ?>
							</div>
						<?php } ?>
					<?php endwhile; } wp_reset_query(); ?>
			</div>
		</div>
		<!-- WARRANTY -->
		<div class="container-fluid pt-5 pb-3 hvac-container">
			<div class="container pb-5">
				<h5 class="text-uppercase">Warranty</h5>
				<?php $args=array(
					'post_type' => 'promotions',
					'posts_per_page' => 4,
					'category_name' => 'warranty-promo',
					'orderby' => 'date',
					'order' => 'ASC',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					$i = 0;
					while ($my_query->have_posts()) : $my_query->the_post();
						if($i % 4 == 0) { ?>
							<div class="row">
							<?php } ?>
							<div class="col-6 col-md-3 mb-4 promo-card">
								<div class="card h-100">
									<div class="card-body p-0">
										<a data-target="#<?php echo the_field('coupon_unique_identifier'); ?>" data-toggle="modal" class="transition-wrapper">
											<img src="<?php echo the_field('coupon_image_hover'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
											<img src="<?php echo the_field('coupon_image'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_alt'); ?>" />
										</a>
									</div>
								</div>
							</div>
							<?php $i++; if($i != 0 && $i % 4 == 0) { ?>
							</div>
						<?php } ?>
					<?php endwhile; } wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>




