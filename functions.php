<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'DAREN_DIR_URI' ) )
		define( 'DAREN_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'DAREN_DIR_ASSETS_URI' ) )
		define( 'DAREN_DIR_ASSETS_URI', DAREN_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'DAREN_DIR_CSS_URI' ) )
		define( 'DAREN_DIR_CSS_URI', DAREN_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'DAREN_DIR_JS_URI' ) )
		define( 'DAREN_DIR_JS_URI', DAREN_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('DAREN_DIR_ICON_IMG_URI') )
		define( 'DAREN_DIR_ICON_IMG_URI', DAREN_DIR_URI.'img/core-img/' );
	
	//DIR inc
	if( !defined( 'DAREN_DIR_INC' ) )
		define( 'DAREN_DIR_INC', DAREN_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'DAREN_DIR_ELEMENTOR' ) )
		define( 'DAREN_DIR_ELEMENTOR', DAREN_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'DAREN_DIR_PATH' ) )
		define( 'DAREN_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'DAREN_DIR_PATH_INC' ) )
		define( 'DAREN_DIR_PATH_INC', DAREN_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'DAREN_DIR_PATH_LIB' ) )
		define( 'DAREN_DIR_PATH_LIB', DAREN_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'DAREN_DIR_PATH_CLASSES' ) )
		define( 'DAREN_DIR_PATH_CLASSES', DAREN_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'DAREN_DIR_PATH_WIDGET' ) )
		define( 'DAREN_DIR_PATH_WIDGET', DAREN_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'DAREN_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'DAREN_DIR_PATH_ELEMENTOR_WIDGETS', DAREN_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( DAREN_DIR_PATH_INC . 'daren-breadcrumbs.php' );
	// Sidebar register file include
	require_once( DAREN_DIR_PATH_INC . 'widgets/daren-widgets-reg.php' );
	// Post widget file include
	require_once( DAREN_DIR_PATH_INC . 'widgets/daren-recent-post-thumb.php' );
	// News letter widget file include
	require_once( DAREN_DIR_PATH_INC . 'widgets/daren-newsletter-widget.php' );
	//Social Links
	require_once( DAREN_DIR_PATH_INC . 'widgets/daren-social-links.php' );
	// Instagram Widget
	require_once( DAREN_DIR_PATH_INC . 'widgets/daren-instagram.php' );
	// Nav walker file include
	require_once( DAREN_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( DAREN_DIR_PATH_INC . 'daren-functions.php' );

	// Theme Demo file include
	require_once( DAREN_DIR_PATH_INC . 'demo/demo-import.php' );

	// Inline css file include
	require_once( DAREN_DIR_PATH_INC . 'daren-commoncss.php' );
	// Post Like
	require_once( DAREN_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( DAREN_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( DAREN_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( DAREN_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( DAREN_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( DAREN_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( DAREN_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( DAREN_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( DAREN_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class daren dashboard
	require_once( DAREN_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	

	// Admin Enqueue Script
	function daren_admin_script(){
		wp_enqueue_style( 'daren-admin', get_template_directory_uri().'/assets/css/daren_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'daren_admin', get_template_directory_uri().'/assets/js/daren_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'daren_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Daren object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Daren Dashboard .
	 *
	 */
	
	$Daren = new Daren();
	
