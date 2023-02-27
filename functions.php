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
 * Enqueue scripts for both frontend and editor
 */
if ( ! function_exists( 'themename_assets' ) ) {
	function themename_assets(){

		wp_enqueue_style( 
			'themename_style_index', 
			get_template_directory_uri().'/build/style-index.css', 
			[], 
			filemtime(get_template_directory().'/build/style-index.css'), 
			'All' 
		);

		// Scripts without dependency
		wp_enqueue_script( 
			'themename_script_index', 
			get_template_directory_uri().'/build/index.js', 
			array(), 
			filemtime(get_template_directory().'/build/index.js'), 
			true 
		);
		
	}
}
add_action('enqueue_block_assets', 'themename_assets');


/**
 * Enqueue scripts only for editor
 */
if ( ! function_exists( 'themename_editor_assets' ) ) {
	function themename_editor_assets(){
		wp_enqueue_style( 
			'themename_editor_index', 
			get_template_directory_uri().'/build/index.css', 
			[], 
			filemtime(get_template_directory().'/build/index.css'), 
			'All' 
		);
	}
}
add_action('enqueue_block_editor_assets', 'themename_editor_assets');


/**
 * Stop loading emoji JS/CSS files on frontend
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Remove assets from frontend
 */
function themename_remove_wp_block_library_css(){
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'wp-block-library-theme' );
	// wp_dequeue_style( 'wp-block-library' ); // block basic styles for front end
	// wp_dequeue_style( 'global-styles' );  // theme.json settings
	// wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'themename_remove_wp_block_library_css', 100 );


/**
 * Include Files
 */
include get_template_directory() . '/inc/helpers.php';