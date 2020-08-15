<!doctype html>
<html <?php language_attributes(); ?>>
<head>
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
	<?php if ( is_front_page() ) {
		echo get_template_part( 'parts/page', 'nav' );
	} elseif ( is_home () ) {
		echo get_template_part ('parts/page', 'nav');
	} elseif (is_single() ) {
		echo get_template_part ('parts/page', 'nav');
	} elseif ( is_page ( array( 
		'commercial',
		'commercial-maintenance-0',
		'hvac-maintenance',
		'plumbing',
		'water-heating',
		'business-property-owners',
		'general-contractors',
		'home-builders',
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
		'home-builder-services',
		'pre-construction-services',
		'construction-services',
		'after-sale-support',
	) ) ) {
		echo get_template_part ('parts/page', 'commercial-nav');
	} elseif ( is_page ( array( 
		'homeowner',
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
		'turn-your-comfort-wi-fi-thermostat',
		'plumbing-drain-services',
		'plumbing-installations-replacements',
		'back-sump-pump',
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
	} else {
		echo get_template_part( 'parts/page', 'nav' );
	}?>
