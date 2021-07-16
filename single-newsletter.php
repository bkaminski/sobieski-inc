<?php
/*
 * Template Name: Newsletter Article
 * Template Post Type: newsletter
 */
  
get_header();  ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<br />
	<br />
	<div class="container pt-5 pb-5">
		<div class="col text-center pb-5">
			<img src="<?php echo the_field('header_image');?>" class="img-fluid pb-5" alt="<?php echo the_field('header_image_alt'); ?>" />
			<div class="red-text text-uppercase" style="font-size: 3rem;line-height: 1;">
				<?php echo the_field('heading_1_red'); ?>
					
			</div>
			<div class="blue-text text-uppercase font-weight-bold" style="font-size: 5rem;line-height: 1;">
				<?php echo the_field('heading_2_blue'); ?>
					
			</div>
		</div>
		<div class="row pt-5 pb-3">
			<div class="col-lg-8">
				<div class="red-text pb-3" style="font-size: 3rem;line-height:1;"><strong><?php echo the_field('heading_3_red'); ?></strong></div>
				<?php the_content(); ?>
					
			</div>
			<div class="col-lg-4">
				<img src="<?php echo the_field('featured_image_1'); ?>" class="img-fluid" alt="<?php echo the_field('featured_image_1_alt'); ?>" />
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 pt-5">
				<div style="border-bottom: 5px solid #B6332C;"></div>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="row pt-5 pb-5">
			<div class="col-lg-5">
				<img src="<?php echo the_field('featured_image_2'); ?>" class="img-fluid" alt="<?php echo the_field('featured_image_2_alt'); ?>" />
			</div>
			<div class="col-lg-7">
				<div class="red-text font-weight-bold" style="font-size: 3rem;line-height: 1;">
					<?php echo the_field('heading_4_red'); ?>
					
				</div>
				<div class="blue-text pt-4 pb-4" style="font-size: 2rem;line-height: 1;">
					<em><?php echo the_field('heading_5_blue'); ?></em>
						
				</div>
				<?php echo the_field('secondary_text_area'); ?>
			</div>
		</div>
		<div class="row pt-5 pb-5">
			<div class="col-lg-6 text-center">
				<a href="<?php echo the_field('coupon_image_1_link'); ?>">
					<img src="<?php echo the_field('coupon_image_1'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_1_alt'); ?>" />
				</a>
			</div>
			<div class="col-lg-6 text-center">
				<a href="<?php echo the_field('coupon_image_2_link'); ?>">
					<img src="<?php echo the_field('coupon_image_2'); ?>" class="img-fluid" alt="<?php echo the_field('coupon_image_2_alt'); ?>" />
				</a>
			</div>
		</div>
		<div class="col-lg-12 text-center">
			<img src="<?php echo the_field('footer_top_image'); ?>" class="img-fluid" alt="<?php echo the_field('footer_top_image_alt'); ?>" />
			<p><?php echo the_field('footer_top_image_caption'); ?></p>

		</div>
		<div class="col-lg-12 text-center pt-5">
			<img src="<?php echo the_field('footer_bottom_image'); ?>" class="img-fluid" alt="<?php echo the_field('footer_bottom_image_alt'); ?>" />
			<p><?php echo the_field('footer_bottom_image_caption'); ?></p>

		</div>
				
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
