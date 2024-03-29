<?php

//FONTAWESOME ICONS ON DASHBOARD MENU

function fontawesome_dashboard() {
   wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/9a1bb2c83f.js'); 
}

add_action('admin_init', 'fontawesome_dashboard');
function fontawesome_icon_dashboard() {
   echo "<style type='text/css' media='screen'>
   		#adminmenu .menu-icon-careers div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: '\\f022';
     	}
      #adminmenu .menu-icon-promotions div.wp-menu-image:before {
        font-family: Fontawesome !important;
        content: '\\f53d';
      }
     	</style>";
}
add_action('admin_head', 'fontawesome_icon_dashboard');


// ======================================================================================== //

add_action('init', 'register_careers_cpt');
function register_careers_cpt() {
	register_post_type('careers', [
		'label' => 'Careers',
		'public' => true, 
		'capability_type' => 'post',
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'  => array( 'category' ),
	]);
}

// Add Tag Support
function careers_tag() {
	register_taxonomy_for_object_type('post_tag', 'careers');
}
add_action('init', 'careers_tag');

// ======================================================================================== //

function add_custom_id_column ( $columns ) {
    return array_merge ( $columns, array (
        'custom_id' => __ ( 'Requisition ID' ),
    ) );
};

add_filter( 'manage_careers_posts_columns', 'add_custom_id_column' );


function fill_custom_column ( $column, $post_id ) {
    switch ( $column ) {

        case 'custom_id':
            echo get_field('requisition_id', $post_id);
            break;

    }
}
add_action ( 'manage_careers_posts_custom_column', 'fill_custom_column', 10, 2 );

//REMOVE WYSIWYG AND EXCERPT FROM CAREER POSTS
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'careers';
    $post_type = 'promotions';
    remove_post_type_support( $post_type, 'editor');
    remove_post_type_support( $post_type, 'excerpt' );
}


// ================================================================================================ //

add_action('init', 'register_promotions_cpt');
function register_promotions_cpt() {
  register_post_type('promotions', [
    'label' => 'Promotions',
    'public' => true, 
    'capability_type' => 'post',
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'  => array( 'category' ),
  ]);
}


// ================================================================================================ //

add_action('init', 'register_newsletter_cpt');
function register_newsletter_cpt() {
  register_post_type('newsletter', [
    'label' => 'Newsletter',
    'public' => true, 
    'capability_type' => 'post',
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'  => array( 'category' ),
  ]);
}

// ================================================================================================ //

add_action('init', 'register_whats_happening_cpt');
function register_whats_happening_cpt() {
  register_post_type('happenings', [
    'label' => 'Happenings',
    'public' => true, 
    'capability_type' => 'post',
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'  => array( 'category' ),
  ]);
}
