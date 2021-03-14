<?php
/**
* Template Name: Neighborhood Pages
*
* @package WordPress
* @subpackage Sobieski Inc
* 
*/
get_header(); ?>
	
<?php get_template_part( 'parts/page', 'btn-blog-loop' ); ?>

	<div class="container" style="margin-top:-55px;">
		<div class="row">
			<div class="col-md-6">
				<a href="https://www.sobieskiinc.com/blog/3-benefits-water-filtration-systems/">
					<img src="https://www.sobieskiinc.com/wp-content/uploads/2020/12/oneflow.jpg" alt="image of water filter" width="1200" height="628" class="aligncenter size-full img-fluid" />
				</a>
			</div>
			<div class="col-md-6">
				<a href="https://www.sobieskiinc.com/service/why-tankless/">
					<img src="https://www.sobieskiinc.com/wp-content/uploads/2020/12/Sobi-tankless-water-heater.jpg" alt="Image of graphic explaining tankless water heaters" width="1200" height="628" class="aligncenter size-full img-fluid" />
				</a>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<img src="https://www.sobieskiinc.com/wp-content/uploads/2020/12/sobieski-covid.jpg" class="img-fluid" alt="Sobieski Cares for their customers" />
	</div>

<?php get_template_part( 'parts/page', 'request-pdf'); ?>

<?php get_template_part( 'parts/home', 'geo-map' ); ?>

<?php get_template_part( 'parts/page', 'affiliates' ); ?>

<?php get_footer(); ?>
