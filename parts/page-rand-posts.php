<section class="related-posts">
	<div class="container pt-5">
		<div class="row">
			<?php query_posts('posts_per_page=3&orderby=rand'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

			<div class="col-lg card-deck mb-5">
				<div class="card shadow">
					<a href="<?php the_permalink(); ?>">
						<figure class="boxImg"
							<?php if( empty( $featImg ) ) { $featImg = ''; } if( $featImg ):?> style="background: url('<?php echo $featImg['0'];?>');background-size: cover;height: 150px;"><?php endif;?>
						</figure>
					</a>
					<div class="card-body">
						<h3 class="card-title main-header-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="mb-3">
							<small><em><?php the_date('l, F j, Y'); ?></em></small>
						</div>
						<div class="card-text mb-5">
							<?php the_excerpt(); ?>

						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?> 
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
