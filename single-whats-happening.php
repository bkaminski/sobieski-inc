<?php
/*
 * Template Name: What's Happening Article
 * Template Post Type: whats_happening
 */
  
get_header();  ?>
<div class="container pt-5 pb-5">
	<div class="pt-5">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 <h1><?php the_title(); ?></h1>
	 <?php the_content(); ?>
				
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
