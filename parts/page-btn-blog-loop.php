<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

	<div class="title-wrapper"<?php if( empty( $featImg ) ) { $featImg = ''; } if( $featImg ):?> style="background: url('<?php echo $featImg['0'];?>');background-size: cover;">
		<?php endif;?>
		<div class="finance-cta">
				<div class="finance-button">
					<a class="btn btn-outline-sobieski-red schedule-btn-md rounded-0" target="_blank" href="https://linkprotect.cudasvc.com/url?a=https%3a%2f%2fapply.svcfin.com%2fhome%2fdealerAuthentication%3fid%3d400215148%26key%3d1742219857&c=E,1,vAHNIwGS-6v5oUtyz65XIgqPXFlCW_yZk9qtY1KOCEbRrMlKLPsbigJfzTMMtoMKqb92p1wOa0zb-XZjtc0Snsq3oboiEPq0lOev9TisyA,,&typo=1" rel="noopener noreferrer"><small>Financing Available</small> <i class="fas fa-mouse-pointer fa-fw"></i></a>
				</div>
			</div>
		<div class="container text-center">
			<h1 class="blog-header text-white text-uppercase text-center pt-0 font-weight-bold"><?php the_title(); ?></h1>
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