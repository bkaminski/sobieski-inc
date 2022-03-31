<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-20056162-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-20056162-1');
</script>
 
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKG5XXC');</script>
<!-- End Google Tag Manager -->


 <!-- Facebook Pixel Code  -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2340589909519481');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2340589909519481&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/manifest.json">
<meta name="msapplication-TileColor" content="#e9e9e9">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/ms-icon-144x144.png">
<meta name="theme-color" content="#e9e9e9">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKG5XXC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php if ( is_front_page() ) {
		echo get_template_part( 'parts/page', 'nav' );
	} elseif ( is_home () ) {
		echo get_template_part ('parts/page', 'homeowner-nav');
	} elseif (is_single() ) {
		echo get_template_part ('parts/page', 'homeowner-nav');
	} elseif ( is_page ( array( 
		'commercial',
		'commercial-maintenance-0',
		'hvac-maintenance',
		'plumbing',
		'water-heating',
		'business-property-owners',
		'general-contractors',
		'facility-managers',
		'mechanical-construction',
		'bim-3d-modeling',
		'conceptual-design-budgeting',
		'design-build-partnerships',
		'pre-fabrication',
		'value-engineering',
		'turnkey-projects',
		'fire-alarm-security',
		'fire-alarm-systems',
		'security-systems',
		'testing-inspections',
		'fire-security-monitoring',
		'request-fire-security-system-quote',
		'emergency-service',
		'service-repair-maintenance',
		'very-important-protection-club',
		'backflow-preventer',
	) ) ) {
		echo get_template_part ('parts/page', 'commercial-nav');
	} elseif ( is_page ( array(
		'home-builder-services',
		'about-regional-and-national-homebuilders',
		'pre-construction-services',
		'construction-services',
		'after-sale-support',
	) ) ) {
		echo get_template_part ('parts/page', 'home-builder-nav');
	} elseif ( is_page ( array(
		'the-sobieski-experience',
		'homeowner-projects',
		'architect',
		'builder',
	) ) ) {
		echo get_template_part ('parts/page', 'custom-builder-nav');
	} elseif ( is_page ( array( 
		'heating-air-conditioning',
		'heating-repairs',
		'heating-installation-replacement',
		'air-conditioning-repairs',
		'ac-installation-replacement',
		'heating-cooling-pro-check',
		'service-partner-plans',
		'custom-homes',
		'geothermal-heating-cooling',
		'boilers',
		'goodman',
		'ac-tune-ups-starting-79',
		'lennox',
		'goodman-iaq-systems',
		'lennox-iaq-systems',
		'turn-your-comfort-wi-fi-thermostat',
		'plumbing-drain-services',
		'plumbing-installations-replacements',
		'back-sump-pump',
		'bradfordwhite',
		'sewer-drain-service-repair',
		'sewer-drain-installation-and-replacements',
		'water-heaters',
		'water-heater-installation-replacement',
		'why-tankless',
		'indoor-air-quality',
		'dehumidifiers',
		'humidifiers',
		'air-advice',
		'merv-air-filtration',
		'uv-air-quality-products',
		'ventilation',
	) ) ) {
		echo get_template_part ('parts/page', 'homeowner-nav');
	} elseif ( is_page ( array( 
		'save-52-your-plumbing-repair-today',
		'10-off-10-year-warranty-on-full-system-replacement',
		'take-52-your-next-air-conditioning-repair',
		'heating-tune-ups-starting-89',
		'30-off-water-purification',
		'15-toilet-repair-20-toilet-replacement',
		'weekly-specials',
		'30-indoor-air-quality-products',
		'full-system-installed-starting-98-month',
		'schedule-your-free-hvac-system-replacement-estimate-today',
		'enter-contact-info-below-be-contacted-about-ensuring-your-new-homes-equipment-warranty',
		'sobieski-21-point-inspection',
		'service-partner-plans-anthem',
		'homeowner-promotions',
		'welcome-your-new-home-aviemore-ravenglass-lynemore-tweedsmere',
		'service-partner-plans-bancroft-square',
		'service-partner-plans-bayside',
		'welcome-to-your-new-home-in-brookstone',
		'service-partner-plans-canal-view',
		'welcome-to-your-new-home-in-chestnut-hill-preserve',
		'welcome-to-your-new-home-in-clearview-meadow',
		'service-partner-plans-coastal-club',
		'welcome-to-your-new-home-in-hickory-hollow',
		'service-partner-plans-high-hook-farms',
		'service-partner-plans-high-pointe',
		'service-partner-plans-seagrove',
		'service-partner-plans-beaver-dam-acres',
		'service-partner-plans-seskinore',
		'service-partner-plans-village-of-eastridge',
		'service-partner-plans-spring-breeze',
		'service-partner-plans-summit-bridge',
		'service-partner-plans-sunset-glen',
		'service-partner-plans-windmill-woods',
		'service-partner-plans-whispering-woods',
		'service-partner-plans-verona-woods',
	  'service-partner-plans-hyetts-crossing',
		'service-partner-plans-lewes-crossing',
		'service-partner-plans-lighthouse-lakes',
		'service-partner-plans-masseys-mill',
		'welcome-to-your-new-home-in-milford-ponds',
		'welcome-to-your-new-home-in-parkside',
		'service-partner-plans-pelican-point',
		'service-partner-plans-peninsula-lakes',
		'service-partner-plans-rothwell-estates',
		'service-partner-plans-sawgrass',
		'welcome-to-your-new-home-in-silver-wind-estates',
		'service-partner-plans-solitude-on-white-creek',
		'welcome-to-your-new-home-in-spring-oaks',
		'service-partner-plans-estuary',
		'service-partner-plans-the-overlook',
		'service-partner-plans-the-parkway-at-south-ridge',
		'welcome-to-your-new-home-in-the-preserve-at-deep-creek',
		'service-partner-plans-the-reserves',
		'service-partner-plans-the-woods-at-arnell-creek',
		'service-partner-plans-tidbury-crossing-0',
		'service-partner-plans-abbots-pond',
		'service-partner-plans-baston-creek',
		'service-partner-plans-darley-green',
		'exclusive-offer-for-heritage-park',
		'service-partner-plans-oakwood',
		'exclusive-offer-for-the-legends-at-frog-hollow',
		'service-partner-plans-river-crest',
		'service-partner-plans-silver-woods',
		'service-partner-plans-stone-brooke',
		'exclusive-offer-for-mendenhall-village',
		'service-partner-plans-whitehall',
		'welcome-your-new-home-ravenglass-lynemore-tweedsmere',
		'service-partner-plans-independence',
		'service-partner-plans-lake-como-woods',
		'service-partner-plans-aviemore-odessa-national',
		'service-partner-plans-avonbridge',
		'service-partner-plans-bay-colony',
		'service-partner-plans-bay-pointe',
		'service-partner-plans-ashland',
		'service-partner-plans-bay-forest-resort',
		'service-partner-plans-fox-haven',
		'service-partner-plans-governors',
		'service-partner-plans-harbor-point',
		'service-partner-plans-highlands-pointe',
		'service-partner-plans-jefferson-creek',
		'service-partner-plans-hyetts-crossing-townhomes',
		'service-partner-plans-marsh-farm-estates',
		'service-partner-plans-meridian-crossing',
		'service-partner-plans-middle-creek-preserve',
		'service-partner-plans-ocean-meadows',
		'service-partner-plans-rockford-falls',
		'service-partner-plans-saddleridge',
		'test-neighborhood',
	) ) ) {
		echo get_template_part ('parts/page', 'new-home-nav');

	} elseif ( is_page ('sobieski-custom-homes') ) {
		
		echo get_template_part ('parts/page', 'custom-builder-nav');

	} else {

		echo get_template_part( 'parts/page', 'nav' );
	}?>
	
