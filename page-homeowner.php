<?php
/**
* Template Name: Homeowner Main
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<?php get_template_part( 'parts/page', 'homeowner-main' ); ?>

<?php get_template_part( 'parts/page', 'contact-us' ); ?>

<?php get_template_part( 'parts/page', 'rand-posts' ); ?>

<?php get_template_part( 'parts/page', 'testimonials-service' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
