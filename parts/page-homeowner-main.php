<header>
	<div class="homeowner-hero pt-5">
		<div class="container-fluid pt-5 text-center">
			<button class="btn btn-lg btn-outline-sobieski-red rounded-0 mb-2 mt-3 p-3 schedule-btn-lg" onclick="ScheduleEngine.show();"><i class="far fa-calendar-alt fa-fw fa-2x" style="vertical-align:middle;"></i> Schedule Service Online</button>
			<h1 class="blog-header text-white text-uppercase font-weight-bold mt-5">The Only Call Our Customers Need to Make</h1>
			<p class="text-uppercase text-white p-3">SOBIESKI, ONE CALL… AND IT'S DONE!</p>
			<a href="<?php echo get_home_url(); ?>/homeowner-promotions" class="btn btn-outline-sobieski-white rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 font-weight-bold">Click for Current Coupons</a>
		</div>
	</div>
	<div class="homeowner-content">
		<div class="container pt-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>


			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div>
	</div>
</header>
