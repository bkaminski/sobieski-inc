<?php
/**
* Template Name: Main Home Builders
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<?php get_template_part( 'parts/page', 'home-builder-header' ); ?>

<?php get_template_part( 'parts/home', 'geo-map' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_template_part( 'parts/page', 'testimonials' ); ?>

<?php get_footer(); ?>