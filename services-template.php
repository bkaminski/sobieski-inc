<?php
/**
* Template Name: Services Template
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
<?php get_template_part( 'parts/page', 'blog-loop' ); ?> 

<?php get_template_part( 'parts/page', 'contact-us' ); ?>

<?php get_template_part( 'parts/page', 'rand-posts' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
