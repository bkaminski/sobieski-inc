<?php
/**
* Template Name: Home Builders Template Slider
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
<?php get_template_part( 'parts/page', 'blog-loop-slider' ); ?> 

<?php get_template_part( 'parts/page', 'builder-contact' ); ?>

<?php get_template_part( 'parts/home', 'geo-map'); ?>

<?php get_template_part( 'parts/page', 'testimonials'); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>