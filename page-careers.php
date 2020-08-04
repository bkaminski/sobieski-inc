<?php
/**
* Template Name: Careers Page
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<article>
	<?php get_template_part( 'parts/page', 'cpt-blog-loop' ); ?>

</article>
<main class="career-hero">
	<?php get_template_part( 'parts/page', 'career-hero' ); ?>

</main>

<?php get_template_part( 'parts/page', 'contact-us' ); ?>

<?php get_template_part( 'parts/page', 'home-header' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
