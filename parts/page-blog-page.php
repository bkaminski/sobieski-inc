
	<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(3554), 'full' );?>
	
	<div class="title-wrapper" style="background-image:url('<?php echo $backgroundImg[0]; ?>');background-repeat: no-repeat;background-size: cover;">
		<div class="container">
			<h1 class="main-header-hero text-white text-uppercase text-center pt-5 font-weight-bold">Blog</h1>
		</div>
	</div>
	<div class="blog-desc">
		<div class="container pt-5 pb-4">
			<p class="text-center">Visit our Blog to read the latest in heating, cooling, plumbing, commercial HVAC, fire and security, and more for your home, commercial space, or multifamily property. We regularly update the blog with news, company announcements, seasonal tips for a comfortable home and more!</p>
		</div>
	</div>
	<div class="mt-5 pb-5">
		<div class="container">			
			<?php get_template_part( 'parts/page', 'blog-page-loop' ); ?>

		</div>
	</div>

