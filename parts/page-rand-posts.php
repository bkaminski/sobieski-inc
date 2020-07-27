<section class="related-posts">
	<div class="container pt-5">
		<div class="row">
			<?php query_posts('orderby=DESC&posts_per_page=3'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="col-lg card-deck mb-5">
				<div class="card shadow">
					<figure class="boxImg">
						<a href="<?php the_permalink(); ?>">
							<?php  $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
							
							<img src="<?php echo $featImg['0'];?>" class="card-img-top" alt="">		
						</a>
					</figure>
					<div class="card-body">
						<h3 class="card-title main-header-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="mb-3">
							<em><?php the_date('l, F j, Y'); ?></em>
						</div>
						<div class="card-text mb-5">
							<?php the_excerpt(); ?>

						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?> <?php wp_reset_query(); ?>
		</div>
	</div>
</section>
