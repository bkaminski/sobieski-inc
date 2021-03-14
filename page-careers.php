<?php
/**
* Template Name: Careers Page
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>

<header>
	<?php get_template_part( 'parts/page', 'cpt-blog-loop' ); ?>

</header>
<main class="career-hero">
	<?php get_template_part( 'parts/page', 'career-hero' ); ?>

</main>
<section>
	<?php get_template_part( 'parts/page', 'career-core-values' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/page', 'career-openings' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/page', 'career-comments' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/page', 'contact-us' ); ?>

</section>

<?php get_template_part( 'parts/page', 'home-header' ); ?>

<section>
	<?php get_template_part( 'parts/page', 'affiliates' ); ?>

</section>

<?php get_footer(); ?>
