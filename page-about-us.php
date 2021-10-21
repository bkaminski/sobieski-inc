<?php
/**
* Template Name: About Us

*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<article>
	<?php get_template_part( 'parts/page', 'blog-loop' ); ?>

</article>
<section class="about-statement">
	<div class="container pt-5 pb-5">
		<?php the_field('about_us_statement'); ?>
	
	</div>
</section>

<?php get_template_part( 'parts/page', 'home-header' ); ?>

<?php get_template_part( 'parts/page', 'affiliates-custom' ); ?>

<?php get_footer(); ?>
