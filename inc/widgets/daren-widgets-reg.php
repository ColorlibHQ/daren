<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Daren
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
function daren_widgets_init() {
    // sidebar widgets 
    
    register_sidebar(array(
        'name'          => esc_html__('Sidebar widgets', 'daren'),
        'description'   => esc_html__('Place widgets in sidebar widgets area.', 'daren'),
        'id'            => 'sidebar_widgets',
        'before_widget' => '<div id="%1$s" class="widget single_sidebar_widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar_tittle"><h3>',
        'after_title'   => '</h3></div>'
    ));

	// footer widgets register
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'daren' ),
			'id'            => 'footer-1',
			'before_widget' => '<div id="%1$s" class="col-xl-4 col-md-4 col-sm-6 single-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'daren' ),
			'id'            => 'footer-2',
			'before_widget' => '<div id="%1$s" class="col-xl-4 col-md-4 col-sm-6 single-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'daren' ),
			'id'            => 'footer-3',
			'before_widget' => '<div id="%1$s" class="col-xl-4 col-md-4 col-sm-10 single-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'daren_widgets_init' );
