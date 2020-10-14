<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

	<div class="title-wrapper" 
		<?php if( empty( $featImg ) ) { $featImg = ''; } 
			if( $featImg ):?> style="background: url('<?php echo $featImg['0'];?>');background-size: cover;">
		<?php endif;?>>

		<div class="container text-center">
			<h1 class="blog-header text-white text-uppercase text-center pt-0 font-weight-bold"><?php the_title(); ?></h1>
			<button class="btn btn-lg btn-outline-sobieski-red rounded-0 mb-2 mt-3 p-3 schedule-btn-md" onclick="ScheduleEngine.show();"><i class="far fa-calendar-alt fa-fw fa-lg" style="vertical-align:middle;"></i> Schedule Service Online</button>
		</div>
	</div>
	<div class="mt-5 pb-5">
		<div class="container">			
			<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

		</div>
	</div>