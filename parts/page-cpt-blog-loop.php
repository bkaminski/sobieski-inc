<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="title-wrapper"<?php if( empty( $featImg ) ) { $featImg = ''; } if( $featImg ):?> style="background: url('<?php echo $featImg['0'];?>');background-size: cover;"><?php endif;?>>

	<div class="container">
		<h1 class="blog-header text-white text-uppercase text-center pt-5 font-weight-bold" style="text-shadow:3px 3px 0px #222;"><?php the_title(); ?></h1>
	</div>
</div>
<div class="container">
	<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
