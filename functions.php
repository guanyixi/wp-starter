<?php
if ( ! function_exists( 'themename_theme_support' ) ) :
	function themename_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );	
        add_post_type_support( 'page', 'excerpt' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Register Menus
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}

endif;
add_action( 'after_setup_theme', 'themename_theme_support' );


/**
 * Enqueue Styles and Scripts for both Frontend and Editor
 */
if ( ! function_exists( 'themename_assets' ) ) {
	function themename_assets(){
		wp_enqueue_style( 'themename_style_index', get_template_directory_uri().'/build/style-index.css', [], filemtime(get_template_directory().'/build/style-index.css'), 'All' );
		wp_enqueue_script( 'themename_script_index', get_template_directory_uri().'/build/index.js', array('wp-element'), filemtime(get_template_directory().'/build/index.js'), true );
	}
}
add_action('enqueue_block_assets', 'themename_assets');


/**
 * Stop loading emoji JS/CSS files on frontend
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Remove Gutenberg Block Library CSS from loading on the frontend
 */
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	//wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


/**
 * Include Files
 */
include get_template_directory() . '/inc/helpers.php';