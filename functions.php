<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package trend-business-pro
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */

if ( ! function_exists( 'trend_business_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function trend_business_support() {

		add_editor_style( get_template_directory_uri().'/assets/css/editor.css' );

		load_theme_textdomain( 'trend-business-pro', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );

	}

endif;
add_action( 'after_setup_theme', 'trend_business_support' );

function trend_business_styles() {
	// Enqueue main stylesheet
	wp_enqueue_style(
		'trend-business-pro-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue Font Awesome
	wp_enqueue_style(
		'trend-business-pro-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue Dashicons
	wp_enqueue_style( 'dashicons' );

	// Enqueue custom JavaScript
	wp_enqueue_script(
		'trend-business-pro-scripts',
		get_template_directory_uri() . '/assets/js/custom.js',
		[], // Dependencies (e.g., array('jquery'))
		wp_get_theme()->get( 'Version' ),
		true // Load in footer
	);
	wp_enqueue_script('trend-business-pro-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'trend_business_styles' );


// admin style
function trend_business_admin_styles() {
	wp_enqueue_style(
		'trend-business-pro-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'admin_enqueue_scripts', 'trend_business_admin_styles' );



// enqueue dashicons
add_action( 'enqueue_block_assets', function (): void {
	wp_enqueue_style( 'dashicons' );
});

function trend_business_excerpt_length( $length ){ 

	$excerpt_length = 20;
	if ( is_admin() ) return $length;
	return $excerpt_length;
}
add_filter( 'excerpt_length', 'trend_business_excerpt_length' );

// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

// add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Register block styles.
 */

if ( ! function_exists( 'trend_business_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Trend Businesse
	 * @return void
	 */
	function trend_business_block_styles() {

		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'admin-icon',
				'label'        => __( 'Admin Icon', 'trend-business-pro' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-admin-icon:before {
					content: "\f110";
					font-family: "dashicons";
				}
				.is-style-admin-icon span{
					display: none;
				}',
			)
		);
	}
endif;

add_action( 'init', 'trend_business_block_styles' );
