<?php
/**
* Template Name: Newsletter
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<div class="container pt-5 pb-5">
	<div class="col-lg-12 text-center pt-5 pb-5">
		<h1>Sobieski Newsletter Archive</h1>
	</div>
	<?php
	$loop = new WP_Query( array(
	    'post_type' => 'Newsletter',
	    'posts_per_page' => 10
	  )
	);?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-lg-12">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div><?php the_excerpt(); ?></div>
		</div>
	<?php endwhile; wp_reset_query(); ?>

</div>



<?php get_footer(); ?>