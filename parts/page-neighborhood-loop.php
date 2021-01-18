<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="title-wrapper" style="background-image: url('<?php the_field('header_image'); ?>'); background-size: cover;">
		<div class="finance-cta">
			<div class="finance-button">
				<a class="btn btn-outline-sobieski-red schedule-btn-md rounded-0" target="_blank" href="https://linkprotect.cudasvc.com/url?a=https%3a%2f%2fapply.svcfin.com%2fhome%2fdealerAuthentication%3fid%3d400215148%26key%3d1742219857&c=E,1,vAHNIwGS-6v5oUtyz65XIgqPXFlCW_yZk9qtY1KOCEbRrMlKLPsbigJfzTMMtoMKqb92p1wOa0zb-XZjtc0Snsq3oboiEPq0lOev9TisyA,,&typo=1" rel="noopener noreferrer"><small>Financing Available</small> <i class="fas fa-mouse-pointer fa-fw"></i></a>
			</div>
		</div>
		<div class="container text-center">
			<h1 class="blog-header text-white text-uppercase text-center pt-0 font-weight-bold"><?php the_title(); ?></h1>
			<button class="btn btn-lg btn-outline-sobieski-red rounded-0 mb-2 mt-3 p-3 schedule-btn-md" onclick="ScheduleEngine.show();"><i class="far fa-calendar-alt fa-fw fa-lg" style="vertical-align:middle;"></i> Schedule Service Online</button>
		</div>
	</div>
	<div class="mt-5 pb-5">
		<div class="container">	
			<div class="text-center">
				<div class="alert alert-info h3 rounded-0 text-uppercase font-weight-bold">
					Call Us Today: <?php the_field('neighborhood_phone_number') ;?>

				</div>
				<img src="<?php the_field('hero_image'); ?>" class="img-fluid mb-4" alt="<?php the_field('hero_image_alt'); ?>" />
			</div>
			<div class="h5 mb-5 mt-4">
				<?php the_content(); ?>

			</div>
			<!-- <div class="text-center">
				<a href="">
					<img src="<?php //the_field('spp_graphic'); ?>" class="img-fluid mb-4" alt="<?php //the_field('spp_graphic_alt'); ?>" />
				</a>
			</div> -->
			<div class="container">
				<div style="background-image:url('<?php the_field('spp_header_image'); ?>');background-repeat:no-repeat;background-size:cover;background-position: top center;">
					<?php the_field('spp_copy_text'); ?>
				</div>
			</div>
			<div class="text-center">
				<a href="service-partner-plans" class="btn btn-lg btn-outline-sobieski rounded-0 mb-4 text-uppercase">Learn More About Service Partner Plans</a>
			</div>
			<div class="alert alert-success h3 rounded-0 text-center text-uppercase font-weight-bold">
				Call Us Today: <?php the_field('neighborhood_phone_number') ;?>
					
			</div>
			<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>