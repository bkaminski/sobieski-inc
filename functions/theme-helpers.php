<?php
//GUTENBERG SUPPORT
add_theme_support( 'align-wide' );
add_theme_support( 'responsive-embeds' );
//HTML 5 SUPPORT
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
//TITLE TAG SUPPORT
add_theme_support( 'title-tag' );
//ALLOW POSTS AND PAGES FEATURED IMAGE
add_theme_support('post-thumbnails');
//ADD RSS/ATOM SUPPORT
add_theme_support( 'automatic-feed-links' );
//ADD TAG SUPPORT TO PAGES
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}
//DISABLE EMOJI BLOAT
function disable_wp_emoji() {
//REMOVE ALL ACTIONS USING EMOJI
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
//REMOVE EDITOR EMOJIS
add_filter( 'tiny_mce_plugins', 'disable_emoji_tinymce' );

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
  
//REMOVE DNS PREFETCH
add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emoji' );
function disable_emoji_tinymce( $plugins ) {
if ( is_array( $plugins ) ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
} else {
	return array();
}}

//REMOVE CAREERS FROM SEARCH
add_action( 'init', 'remove_careers_from_search', 99 );

function remove_careers_from_search() {
	global $wp_post_types;

	if ( post_type_exists( 'careers' ) ) {

		// exclude from search results
		$wp_post_types['careers']->exclude_from_search = true;
	}
}

//ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'DMI Theme Settings',
        'menu_title'    => 'DMI Theme Settings',
        'menu_slug'     => 'dmi-theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

//REMOVE THE TYPE ATTRIBUTE FROM JAVASCRIPT FILES
add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() { 
	ob_start("prefix_output_callback"); 
}
add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() { 
	ob_end_flush(); 
}
function prefix_output_callback($buffer) {
	return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}
//INCLUDE TAGS IN SEARCH QUERIES
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag'))
        $wp_query->set('post_type', 'any');
}
//TAG HOOKS
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// REMOVE WP VERSION PARAM FROM ENQUEUED SCRIPTS AND CSS
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

//BEGIN READ MORE BUTTON ON TAGS AND BLOG
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn excerpt-button btn-outline-sobieski text-uppercase rounded-0" href="' . get_permalink() . '">Read More <i class="fas fa-angle-double-right fa-fw fa-lg"></i></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

//REMOVE COMMENTS FEED RSS
add_filter( 'feed_links_show_comments_feed', '__return_false' );

//REMOVE WP VERSION FROM CODE
function sobieski_remove_version() {
return '';
}
add_filter('the_generator', 'sobieski_remove_version');

//REMOVE YOAST SEO COMMENTS
add_filter( 'wpseo_debug_markers', '__return_false' );

//AUTO UPDATE PLUGINS
add_filter( 'auto_update_plugin', '__return_true' );

//Change WP Emails and email address away from "WordPress" as sender
function sobieski_mail_name( $email ){
  return 'Sobieski Services Inc.'; // new email name from sender.
}
add_filter( 'wp_mail_from_name', 'sobieski_mail_name' );

function sobieski_mail_from ($email ){
  return 'info@sobieskiinc.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'sobieski_mail_from' );

//DUPLICATE PAGES
    /*
     * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
     */
    function rd_duplicate_post_as_draft(){
      global $wpdb;
      if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
        wp_die('No post to duplicate has been supplied!');
      }
     
      /*
       * Nonce verification
       */
      if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
        return;
     
      /*
       * get the original post id
       */
      $post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
      /*
       * and all the original post data then
       */
      $post = get_post( $post_id );
     
      /*
       * if you don't want current user to be the new post author,
       * then change next couple of lines to this: $new_post_author = $post->post_author;
       */
      $current_user = wp_get_current_user();
      $new_post_author = $current_user->ID;
     
      /*
       * if post data exists, create the post duplicate
       */
      if (isset( $post ) && $post != null) {
     
        /*
         * new post data array
         */
        $args = array(
          'comment_status' => $post->comment_status,
          'ping_status'    => $post->ping_status,
          'post_author'    => $new_post_author,
          'post_content'   => $post->post_content,
          'post_excerpt'   => $post->post_excerpt,
          'post_name'      => $post->post_name,
          'post_parent'    => $post->post_parent,
          'post_password'  => $post->post_password,
          'post_status'    => 'draft',
          'post_title'     => $post->post_title,
          'post_type'      => $post->post_type,
          'to_ping'        => $post->to_ping,
          'menu_order'     => $post->menu_order
        );
     
        /*
         * insert the post by wp_insert_post() function
         */
        $new_post_id = wp_insert_post( $args );
     
        /*
         * get all current post terms ad set them to the new post draft
         */
        $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
        foreach ($taxonomies as $taxonomy) {
          $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
          wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
        }
     
        /*
         * duplicate all post meta just in two SQL queries
         */
        $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
        if (count($post_meta_infos)!=0) {
          $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
          foreach ($post_meta_infos as $meta_info) {
            $meta_key = $meta_info->meta_key;
            if( $meta_key == '_wp_old_slug' ) continue;
            $meta_value = addslashes($meta_info->meta_value);
            $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
          }
          $sql_query.= implode(" UNION ALL ", $sql_query_sel);
          $wpdb->query($sql_query);
        }
     
     
        /*
         * finally, redirect to the edit post screen for the new draft
         */
        wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
        exit;
      } else {
        wp_die('Post creation failed, could not find original post: ' . $post_id);
      }
    }
    add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
     
    /*
     * Add the duplicate link to action list for post_row_actions
     */
    function rd_duplicate_post_link( $actions, $post ) {
      if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
      }
      return $actions;
    }
     
    add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);



     