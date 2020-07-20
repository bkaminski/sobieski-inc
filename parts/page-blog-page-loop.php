<div class="container">
	<div class="row justify-content-between">
		<?php $the_query=new WP_Query( array( 'category_name' => 'blog' ) ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				
				<div class="col-lg-4 pb-3">
					<div class="card mb-2 rounded-0 shadow">
						<img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
						<div class="card-body">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<h4 class="card-title main-header-blog"><?php the_title(); ?></h4>
							</a>
							<?php the_excerpt(); ?>

						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

    	<?php endif; ?>
  </div>
  <div class="col pt-5">
  	<?php echo sobieski_pagination(); ?>
  		
  </div>
</div>
