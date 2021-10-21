<?php
/**
* Template Name: Home Builders Template
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
<?php get_template_part( 'parts/page', 'blog-loop' ); ?> 

<?php if( is_page( array( 10534, 10532, 10530, 10528, 10526 ) ) ) {
	//do nothing
} else {

	get_template_part( 'parts/home', 'geo-map');

	get_template_part( 'parts/page', 'rand-posts' );

	get_template_part( 'parts/page', 'testimonials');

} ?>


<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
