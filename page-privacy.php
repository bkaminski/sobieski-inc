<?php
/**
* Template Name: Privacy Policy
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<article>
	<?php get_template_part( 'parts/page', 'blog-loop' ); ?>

</article>

<section>
	<?php get_template_part( 'parts/home', 'geo-map' ); ?>

</section>
<header>
	<?php get_template_part( 'parts/page', 'home-header' ); ?>

</header>

<section>
	<?php get_template_part( 'parts/page', 'affiliates' ); ?>

</section>

<?php get_footer(); ?>
