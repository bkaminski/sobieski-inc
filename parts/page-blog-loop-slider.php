<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

	<div class="title-wrapper" <?php if( empty( $featImg ) ) { $featImg = ''; } if( $featImg ):?> style="background: url('<?php echo $featImg['0'];?>');background-size: cover;"><?php endif ;?>

		<div class="container">
			<h1 class="blog-header text-white text-uppercase text-center pt-5 font-weight-bold"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="mt-5 pb-5">
		<div class="container">
			<div id="carouselControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php the_field('slider_img_one'); ?>" class="d-block w-100" alt="<?php the_field('slider_img_alt_one'); ?>">
					</div>
					<div class="carousel-item">
						<img src="<?php the_field('slider_img_two'); ?>" class="d-block w-100" alt="<?php the_field('slider_img_alt_two'); ?>">
					</div>
					<div class="carousel-item">
						<img src="<?php the_field('slider_img_three'); ?>" class="d-block w-100" alt="<?php the_field('slider_img_alt_three'); ?>">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

		</div>
	</div>
