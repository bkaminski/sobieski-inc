<?php
/**
* Template Name: Neighborhood Template
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
	
<?php get_template_part( 'parts/page', 'neighborhood-loop' ); ?>

	<div class="container mb-3">
		<div class="card text-center rounded-0">
			<div class="card-header">
				Featured Sobieski Products
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<a href="https://www.sobieskiinc.com/blog/3-benefits-water-filtration-systems/">
							<img src="https://www.sobieskiinc.com/wp-content/uploads/2020/12/oneflow.jpg" alt="image of water filter" class="aligncenter size-full img-fluid" />
						</a>
					</div>
					<div class="col-md-6">
						<a href="https://www.sobieskiinc.com/service/why-tankless/">
							<img src="https://www.sobieskiinc.com/wp-content/uploads/2020/12/Sobi-tankless-water-heater.jpg" alt="Image of graphic explaining tankless water heaters" class="aligncenter size-full img-fluid" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-5">
		<p class="h2 text-center display-2 text-danger font-weight-bold">We're Caring</p>
		<p class="text-center h3 text-danger font-weight-bold">for our Customers and Staff by:</p>
		<div class="row pt-3">
			<div class="col-md-3 text-center">
				<img src="https://sobieskiinc.com/wp-content/uploads/2021/01/caring-1.png" class="img-fluid" alt="" />
				<p class="h4">Wearing gloves and masks</p>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://sobieskiinc.com/wp-content/uploads/2021/01/caring-2.png" class="img-fluid" alt="" />
				<p class="h4">Disinfecting surfaces and tools</p>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://sobieskiinc.com/wp-content/uploads/2021/01/caring-4.png" class="img-fluid" alt="" />
				<p class="h4">Following social distancing guidelines</p>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://sobieskiinc.com/wp-content/uploads/2021/01/caring-3.png" class="img-fluid" alt="" />
				<p class="h4">Offering no-contact service calls</p>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<p>If you have any questions, please call us at <?php the_field('neighborhood_phone_number') ;?></p>
	</div>

<?php get_template_part( 'parts/page', 'request-pdf'); ?>

<?php get_template_part( 'parts/home', 'geo-map' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

	<div class="spp-cookie">
		<div class="alert alert-blue alert-dismissible fade show rounded-0">
			<div class="container">
				<div class="row">
					<div class="col-md-7 text-right">
						<p class="m-0">Call Your Personal Sobieski Service Line at:</p>
						<p class="h5">
							<?php the_field('neighborhood_name'); ?> - <?php the_field('neighborhood_phone_number') ;?>
						</p>
					</div>
					<div class="col-md-5 text-left">
						<a href="#" class="btn btn-info rounded-0 btn-sm mt-2" data-dismiss="alert" aria-label="Close">X Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
