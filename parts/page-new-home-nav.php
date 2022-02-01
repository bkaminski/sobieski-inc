<script src="https://webchat.scheduleengine.net/webchat-v1.js"></script>
<script>
  WebChat.loadChat({
    "apiKey": "sci48bm7s65xpqh1oxrovn553mqyfwiz",
    "initialMessage":"How can we make you smile today?",
    "initialResponses":[],
    "logoUrl":"https://www.sobieskiinc.com/wp-content/uploads/2020/06/revised_logo.png",
    "title":"Welcome",
    "primaryAccentColor":"#cc433a",
    "primaryAccentTextColor":"#FFFFFF",
    "backgroundColor":"#FFFFFF",
    "agentBubbleBackgroundColor":"#cc433a",
    "agentBubbleTextColor":"#FFFFFF",
    "bubbleBackgroundColor":"#F1F1F1",
    "bubbleTextColor":"#000000",
    "sendButtonBackgroundColor":"#cc433a",
    "sendButtonTextColor":"#FFFFFF",
    "suggestedResponseColor":"#cc433a",
    "autoOpen":true,
    "autoOpenMobile":false,
    "position":"right",
    "buttonBackgroundColor":"#cc433a",
    "buttonText":"Chat with Us",
    "buttonTextColor":"#FFFFFF",
    "autoOpenDelay":30,
  });
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="logo-wrapper">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); 
			echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img d-none d-lg-block" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="d-block d-lg-none">
		<a class="text-center" href="<?php echo get_home_url(); ?>">
				<?php $uploads = wp_upload_dir(); 
				echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/08/Sobieski-Homeowner.png' ) . '" class="logo-img" alt="Sobieski Inc Logo">'; ?>
		</a>
	</div>
	<div class="clearfix"></div>
	<button class="navbar-toggler rounded-0 hamburger" type="button" data-toggle="collapse" data-target="#sobieskiHomeNav" aria-controls="sobieskiHomeNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="sobieskiHomeNav">
		<div class="flex-column ml-auto">
			
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav justify-content-end',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				<ul class="nav sub-nav float-right">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Neighborhood Links</a>
							<ul class="dropdown-menu multi-column columns-3 dropdown-menu-right">
								<div class="row">
			            			<div class="col-sm-4">
			            				<ul class="multi-column-dropdown">
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-anthem">Anthem</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-abbots-pond">Abbot's Pond</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-ashland">Ashland</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-aviemore-odessa-national">Aviemore</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-avonbridge">Avonbridge</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-bancroft-square">Bancroft Square</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-baston-creek">Baston Creek</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-bay-colony">Bay Colony</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-bay-forest-resort">Bay Forest Resort</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-bay-pointe">Bay Pointe</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-bayside">Bayside</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-beaver-dam-acres">Beaver Dam Acres</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-brookstone">Brookstone</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-canal-view">Canal View</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-chestnut-hill-preserve">Chestnut Hill Preserve</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-clearview-meadow">Clearview Meadow</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-coastal-club">Coastal Club</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-darley-green">Darley Green</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-fox-haven">Fox Haven</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/exclusive-offer-for-the-legends-at-frog-hollow">Frog Hollow</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-governors">Governors</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-harbor-point">Harbor Point</a></li>
											<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/exclusive-offer-for-heritage-park">Heritage Park</a></li>
			            		<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-hickory-hollow">Hickory Hollow</a></li>
			            		
										</ul>
									</div>
									<div class="col-sm-4">
			            				<ul class="multi-column-dropdown">
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-high-hook-farms">High Hook Farms</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-high-pointe">High Pointe</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-highlands-pointe">Highlands Pointe</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-hyetts-crossing">Hyetts Crossing</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-hyetts-crossing-townhomes">Hyetts Crossing Townhomes</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-independence">Independence</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-jefferson-creek">Jefferson Creek</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-lake-como-woods">Lake Como Woods</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-lewes-crossing">Lewes Crossing</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-lighthouse-lakes">Lighthouse Lakes</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-marsh-farm-estates">Marsh Farm Estates</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-masseys-mill">Massey's Mill</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/exclusive-offer-for-mendenhall-village">Mendenhall Village</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-meridian-crossing">Meridian Crossing</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-middle-creek-preserve">Middle Creek Preserve</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-milford-ponds">Milford Ponds</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-oakwood">Oakwood</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-ocean-meadows">Ocean Meadows</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-parkside">Parkside</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-pelican-point">Pelican Point</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-peninsula-lakes">Peninsula Lakes</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-your-new-home-ravenglass-lynemore-tweedsmere/">Ravenglass - Lynemore</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-river-crest">Rivercrest</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-rockford-falls">Rockford Falls</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-rothwell-estates">Rothwell Estates</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
			            				<ul class="multi-column-dropdown">
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-saddleridge">Saddleridge</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-sawgrass">Sawgrass</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-seagrove">Seagrove</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-seskinore">Seskinore</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-silver-woods">Silver Woods</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-silver-wind-estates">Silver Wind Estates</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-solitude-on-white-creek">Solitude on White Creek</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-spring-breeze">Spring Breeze</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-spring-oaks">Spring Oaks</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-stone-brooke">Stone Brooke</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-summit-bridge">Summit Bridge</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-sunset-glen">Sunset Glen</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-estuary">The Estuary</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-the-overlook">The Overlook</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-the-parkway-at-south-ridge">The Parkway at South Ridge</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/welcome-to-your-new-home-in-the-preserve-at-deep-creek">The Preserve at Deep Creek</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-the-reserves">The Reserves</a></li>
			            					<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-the-woods-at-arnell-creek">The Woods at Arnell Creek</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-tidbury-crossing-0">Tidbury Crossing</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-verona-woods">Verona Woods</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-village-of-eastridge">Village of Eastridge</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-whitehall">Whitehall</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-windmill-woods">Windmill Woods</a></li>
														<li><a class="dropdown-item" href="<?php echo get_home_url(); ?>/service/service-partner-plans-whispering-woods">Whispering Woods</a></li>
													</ul>
									</div>
								</div>
							</ul>
					</li>
				</ul>
		</div>
	</div>
</nav>
<div class="container-fluid pb-2 d-none d-lg-block">
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-4 text-center">
			<div class="phone-numbers">
				<div class="phone-numbers">
					<?php if ( is_page(9767) ) { ;?>
						<p class="h5 font-weight-bold"><?php the_field('neighborhood_name'); ?> - <?php the_field('neighborhood_phone_number') ;?></p>
					<?php } else { ; ?>
						<p class="h5 font-weight-bold">Homeowners: 866-477-4404</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
  				<a href="<?php echo get_home_url(); ?>/audience/home-builders" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-hammer"></i> Home Builders</a>
  			</div>
		</div>
	</div>
</div>
<div class="container-fluid pb-2 d-block d-lg-none">
	<div class="row">
		<div class="col-lg-6 text-center">
			<div class="phone-numbers">
				<div class="phone-numbers">
					<?php if ( is_page(9767) ) { ;?>
						<p class="h5 font-weight-bold"><?php the_field('neighborhood_name'); ?> - <?php the_field('neighborhood_phone_number') ;?></p>
					<?php } else { ; ?>
						<p class="h5 font-weight-bold">Homeowners: 866-477-4404</p>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-6 text-center">
				<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
	  				<a href="<?php echo get_home_url(); ?>/commercial" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-truck"></i> Commercial</a>
	  				<a href="<?php echo get_home_url(); ?>/homeowner" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-home"></i> Homeowner</a>
	  				<a href="<?php echo get_home_url(); ?>/audience/home-builders" class="btn btn-outline-sobieski rounded-0"><i class="fas fa-hammer"></i> Home Builders</a>
	  			</div>
			</div>
		</div>
	</div>
</div>
