<?php
/**
* Template Name: Neighborhood Pages
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
	
<?php get_template_part( 'parts/page', 'blog-loop' ); ?>

<?php get_template_part( 'parts/page', 'request-pdf'); ?>

<?php get_template_part( 'parts/home', 'geo-map' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
