<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div style="background-color: #f4f4f4;">
	<div class="container">
		<h1 class="blog-header text-uppercase text-center pt-5 font-weight-bold"><?php the_title(); ?></h1>
	</div>
	<div class="mt-5 pb-5">
		<div class="container">			
			<?php the_content(); ?>

			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div>
	</div>
</div>
