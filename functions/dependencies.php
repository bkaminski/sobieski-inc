<?php 
//LOAD SCRIPTS
function enqueue_site_scripts() {
    wp_enqueue_script('Ajax-Popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4.5.0', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/siteScripts.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/assets/js/sscroll.min.js', array('jquery'), null, true, null );
}
add_action('wp_enqueue_scripts', 'enqueue_site_scripts');
//LOAD CSS
function enqueue_site_styles() {
    wp_enqueue_style('bootstrap-4.5.0', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/styles/siteStyles.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_site_styles');

//CONDITIONAL SCRIPTS/CSS
function enqueue_waypoints_deps() {
	if ( is_page('homeowner') ) {
		wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true, null);
		wp_enqueue_script('waypoints-triggers', get_template_directory_uri() . '/assets/js/waypoints-scripts.js', array('jquery'), null, true, null);
		wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), null);
	};
}
add_action('wp_enqueue_scripts', 'enqueue_waypoints_deps');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'sobieski-inc' ),
));
// Nav Walker

/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = '') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}

fa_custom_setup_kit('https://kit.fontawesome.com/b843419930.js');
