<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

	<div class="title-wrapper" style="background: url('<?php echo $featImg['0'];?>');background-size: cover;">
		<div class="container">
			<h1 class="blog-header text-white text-uppercase text-center pt-5 font-weight-bold"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="main-content mt-5">
		<div class="container">			
			<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

		</div>
	</div>
</article>
<section>
	<?php get_template_part( 'parts/page', 'blog-sign-up' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/page', 'affiliates' ); ?>

</section>

<?php get_footer(); ?>
