<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="title-wrapper" <?php if( empty( $featImg ) ) { $featImg = ''; } if( $featImg ):?> style="background: url('<?php echo $featImg['0'];?>');background-size: cover;"><?php endif ;?>

		<div class="container">
			<h1 class="blog-header text-white text-uppercase text-center pt-5 font-weight-bold"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="mt-5 pb-5">
		<div class="container text-center">	
			<h3><?php
				foreach ( ( get_the_category() ) as $category ) {
					echo $category->cat_name . ', ';
				}?>
					
			</h3>		
			<a target="_blank" href="<?php the_field('link_to_job_listing'); ?>" class="btn btn-lg btn-success rounded-0">Apply Now</a>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

		</div>
	</div>
