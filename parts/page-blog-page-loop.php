<?php
			$args=array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 18
			);

			$my_query = null;
			$my_query = new WP_Query($args);

			if( $my_query->have_posts() ) {


				$i = 0;
				while ($my_query->have_posts()) : $my_query->the_post();
					if($i % 3 == 0) { ?>


						<div class="row pb-4">
							<div class="card-deck">
							<?php } ?>

							<div class="col-md-4">
								<div class="card">
									<?php  $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
									<img src="<?php echo $featImg['0'];?>" class="card-img-top" alt="">
									<div class="card-body">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<h1 class="card-title"><?php the_title(); ?></h1>
										</a>
										<div class="card-text">
											<?php the_excerpt(); ?>

										</div>
									</div>

								</div>
							</div>

							<?php $i++;
							if($i != 0 && $i % 3 == 0) { ?>

							</div>
						</div>
						<div class="clearfix"></div>
						<?php } ?>
						<?php endwhile; } wp_reset_query(); 

		?>
<div class="col pt-5">
	<?php echo sobieski_pagination(); ?>
</div>
