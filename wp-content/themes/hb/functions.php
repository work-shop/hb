<?php

get_template_parts( array( 'theme-options') );

function register_my_menus(){
	register_nav_menus(
	array(
	'primary' => _( 'Main Menu' ),
	)
	);
}
add_action( 'init', 'register_my_menus');


add_action( 'init', 'create_post_type' );
function create_post_type() {

	register_post_type( 'project',
		array(
			'labels' => array(
				'name' => 'Projects',
				'singular_name' =>'Project',
				'add_new' => 'Add New',
			    'add_new_item' => 'Add New Project',
			    'edit_item' => 'Edit Project',
			    'new_item' => 'New Project',
			    'all_items' => 'All Projects',
			    'view_item' => 'View Project',
			    'search_items' => 'Search Projects',
			    'not_found' =>  'No Projects found',
			    'not_found_in_trash' => 'No Projects found in Trash', 				
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'projects'),
			'supports' => array( 'title', 'editor','thumbnail'),
			'taxonomies' => array('post_tag')			
		)
	);	
	
	register_post_type( 'collaboration',
		array(
			'labels' => array(
				'name' => 'Collaborations',
				'singular_name' =>'Collaboration',
				'add_new' => 'Add New',
			    'add_new_item' => 'Add New Collaboration',
			    'edit_item' => 'Edit Collaboration',
			    'new_item' => 'New Collaboration',
			    'all_items' => 'All Collaborations',
			    'view_item' => 'View Collaborations',
			    'search_items' => 'Search Collaborations',
			    'not_found' =>  'No Collaborations found',
			    'not_found_in_trash' => 'No Collaborations found in Trash', 				
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'collaborations'),
			'supports' => array( 'title', 'editor','thumbnail'),
			'taxonomies' => array('post_tag')			
		)
	);		

}


function theme_scripts() {
	wp_deregister_script( 'jquery' );
    
    wp_register_script( 'jquery', get_template_directory_uri() . '/_/js/jquery.js');
    wp_register_script( 'less', get_template_directory_uri() . '/_/js/less.js');
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/_/js/bootstrap.min.js');
    wp_register_script( 'flexslider', get_template_directory_uri() . '/_/js/flexslider.js');           
    wp_register_script( 'functions', get_template_directory_uri() . '/_/js/functions.js');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'less' );    
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'flexslider' );    
	wp_enqueue_script( 'functions' );
	
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_styles()  { 
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/_/css/bootstrap/bootstrap.less');  
  wp_register_style( 'myfonts', get_template_directory_uri() . '/_/css/fonts/MyFontsWebfontsKit.css');  
  wp_register_style( 'pictograms', get_template_directory_uri() . '/_/css/fonts/pictograms.css');  
  wp_register_style( 'style-less', get_template_directory_uri() . '/_/css/style.less');  
  //wp_register_style( 'style-css', get_template_directory_uri() . '/_/css/style.css');  

  wp_enqueue_style( 'bootstrap' );
  wp_enqueue_style( 'myfonts' );
  wp_enqueue_style( 'pictograms' );
  wp_enqueue_style( 'style-less' );  
  //wp_enqueue_style( 'style-css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');

function enqueue_less_styles($tag, $handle) {
    global $wp_styles;
    $match_pattern = '/\.less$/U';
    if ( preg_match( $match_pattern, $wp_styles->registered[$handle]->src ) ) {
        $handle = $wp_styles->registered[$handle]->handle;
        $media = $wp_styles->registered[$handle]->args;
        $href = $wp_styles->registered[$handle]->src . '?ver=' . $wp_styles->registered[$handle]->ver;
        $rel = isset($wp_styles->registered[$handle]->extra['alt']) && $wp_styles->registered[$handle]->extra['alt'] ? 'alternate stylesheet' : 'stylesheet';
        $title = isset($wp_styles->registered[$handle]->extra['title']) ? "title='" . esc_attr( $wp_styles->registered[$handle]->extra['title'] ) . "'" : '';

        $tag = "<link rel='stylesheet' id='$handle' $title href='$href' type='text/less' media='$media' />";
    }
    return $tag;
}
add_filter( 'style_loader_tag', 'enqueue_less_styles', 5, 2);


if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 570, 570, false );
}
if ( function_exists( 'add_image_size' ) ) {
	add_image_size('project-slideshow',1440,768, true); 
	add_image_size( 'project-small', 260, 160, true ); 
	add_image_size( 'project-large', 540, 420, true ); 
	add_image_size( 'headshot', 300, 300, true ); 

}


function autoset_featured() {
  global $post;
  $already_has_thumb = has_post_thumbnail($post->ID);
      if (!$already_has_thumb)  {
      $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
          if ($attached_image) {
            foreach ($attached_image as $attachment_id => $attachment) {
            set_post_thumbnail($post->ID, $attachment_id);
            }
          }
      }
}
add_action('the_post', 'autoset_featured');
add_action('save_post', 'autoset_featured');
add_action('draft_to_publish', 'autoset_featured');
add_action('new_to_publish', 'autoset_featured');
add_action('pending_to_publish', 'autoset_featured');
add_action('future_to_publish', 'autoset_featured');


function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/_/css/login.css' );
}
add_action('login_head', 'login_css');


function customAdmin() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/_/css/admin.css' );}
add_action('admin_head', 'customAdmin');


function get_template_parts( $parts = array() ) {
	foreach( $parts as $part ) {
		get_template_part( $part );
	};
}

function remove_menus () {
global $menu;
	$restricted = array( __('Comments'),__('Appearance'),__('Pages')/*,__('Plugins') ,__('Tools'),__('Settings')  */ );
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');


function remove_acf_menu(){
 
    $admins = array( 
        'dev' 
    );
 
    $current_user = wp_get_current_user();
 
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }
 
}

add_action( 'admin_menu', 'remove_acf_menu', 999 );


show_admin_bar(false);


add_filter('default_hidden_meta_boxes', 'be_hidden_meta_boxes', 10, 2);
function be_hidden_meta_boxes($hidden, $screen) {
	if ( 'post' == $screen->base || 'page' == $screen->base )
		$hidden = array('slugdiv', 'trackbacksdiv', 'commentstatusdiv', 'commentsdiv', 'postcustom', 'revisionsdiv');
	return $hidden;
}

define('MAGPIE_FETCH_TIME_OUT', 180);


?>
