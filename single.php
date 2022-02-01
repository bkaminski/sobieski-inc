<?php get_header(); ?>

<article>
	<?php get_template_part( 'parts/page', 'blog-loop' ); ?>

</article>

<section>
	<?php get_template_part( 'parts/page', '2021-offers' ); ?>

</section>

<section>
	<?php get_template_part( 'parts/home', 'savings' ); ?>

</section>

<?php get_footer(); ?>
