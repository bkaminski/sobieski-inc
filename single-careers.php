<?php get_header(); 
/*
 * Template Name: Single Career Post Page
 * Template Post Type: post, page, career
 */

?>

<article>
	<?php get_template_part( 'parts/page', 'career-loop' ); ?>

</article>

<section>
	<?php get_template_part( 'parts/page', 'contact-us' ); ?>

</section>

<section>
	<?php get_template_part( 'parts/page', 'affiliates' ); ?>

</section>

<?php get_footer(); ?>
