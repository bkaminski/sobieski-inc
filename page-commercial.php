<?php
/**
* Template Name: Commercial
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
<section class="commercial-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 kill-padding">
				<div class="prop-own">
					<h1 class="text-white text-uppercase text-center h3 font-weight-bold">Business &amp; Property Owners</h1>
					<button type="submit" class="btn btn-outline-sobieski-white rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 mb-4 font-weight-bold text-uppercase mx-auto d-block">Learn More</button>
				</div>
			</div>
			<div class="col-md-3 kill-padding">
				<div class="gen-contract">
					<h1 class="text-white text-uppercase text-center h3 font-weight-bold">General Contractors</h1>
					<button type="submit" class="btn btn-outline-sobieski-white rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 mb-4 font-weight-bold text-uppercase mx-auto d-block">Learn More</button>
				</div>
			</div>
			<div class="col-md-3 kill-padding">
				<div class="home-build">
					<h1 class="text-white text-uppercase text-center h3 font-weight-bold">Home Builders</h1>
					<button type="submit" class="btn btn-outline-sobieski-white rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 mb-4 font-weight-bold text-uppercase mx-auto d-block">Learn More</button>
				</div>
			</div>
			<div class="col-md-3 kill-padding">
				<div class="managers">
					<h1 class="text-white text-uppercase text-center h3 font-weight-bold">Facility Managers</h1>
					<button type="submit" class="btn btn-outline-sobieski-white rounded-0 text-uppercase mt-3 pr-4 pl-4 pt-2 pb-2 mb-4 font-weight-bold text-uppercase mx-auto d-block">Learn More</button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part( 'parts/page', 'contact-us' ); ?>
	<div class="mission">
		<div class="container text-center pt-5 pb-4">
			<?php the_field('single_source_solution'); ?>
			
		</div>
	</div>

<?php get_template_part( 'parts/page', 'rand-posts' ); ?>

<?php get_template_part( 'parts/home', 'geo-map' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>


<?php get_footer(); ?>
