<?php
// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu( 'primary', 'Primary Menu' );

if( !defined('THEME_DIR') )
	define('THEME_DIR', get_theme_root().'/'.get_template().'/');
if( !defined('THEME_URL') )
	define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/* Przeladowanie rewrite rules */
add_action( 'after_switch_theme', 'bt_flush_rewrite_rules' );
function bt_flush_rewrite_rules() {
     flush_rewrite_rules();
}

add_theme_support( 'post-thumbnails' ); 
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 500, 250, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

?>