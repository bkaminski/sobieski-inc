<?php
/**
* Template Name: 2021 Homepage
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<?php get_template_part( 'parts/page', '2021-navbar' ); ?>

<?php get_template_part( 'parts/page', '2021-hero' ); ?>

<?php get_template_part( 'parts/page', '2021-our-services' ); ?>

<?php get_template_part( 'parts/page', '2021-van' ); ?>

<?php get_template_part( 'parts/home', 'savings' ); ?>

<?php get_footer(); ?>