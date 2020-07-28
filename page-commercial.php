<?php
/**
* Template Name: Commercial
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<?php get_template_part( 'parts/page', 'comm-header' ); ?>

<?php get_template_part( 'parts/page', 'contact-us' ); ?>
	
	<div class="mission">
		<div class="container text-center pt-5 pb-4">
			<?php the_field('single_source_solution'); ?>
			
		</div>
	</div>

<?php get_template_part( 'parts/page', 'rand-posts' ); ?>

<?php get_template_part( 'parts/page', 'testimonials' ); ?>

<?php get_template_part( 'parts/home', 'geo-map' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
