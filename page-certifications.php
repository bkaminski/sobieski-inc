<?php
/**
* Template Name: Certifications Page
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>


<article>
	<?php get_template_part( 'parts/page', 'blog-loop' ); ?>

</article>

<div class="blog-desc">
	<div class="container pt-5 pb-4">
		<p class="text-center">At Sobieski, excellent service and customer satisfaction are our top priorities. Our certifications and awards demonstrate our commitment to providing our customers with exceptional service.</p>
	</div>
</div>

<section>
	<?php get_template_part( 'parts/page', 'contact-us' ); ?>

</section>


<?php get_template_part( 'parts/page', 'home-header' ); ?>

<section>
	<?php get_template_part( 'parts/page', 'affiliates' ); ?>

</section>

<?php get_footer(); ?>
