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
 
 
// enqueue css
function daren_common_custom_css(){
    
    wp_enqueue_style( 'daren-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : 'background-image: none';

		$themeColor     		  = daren_opt( 'daren_theme_color' );

		$headerBg          		  = daren_opt( 'daren_header_bg_color' );
		$menuColor          	  = daren_opt( 'daren_header_menu_color' );
		$menuColor          	  = $menuColor . '!important';
		$menuHoverColor           = daren_opt( 'daren_header_menu_hover_color' );
		$menuHoverColor           = $menuHoverColor . ' !important';

		$dropMenuBgColor          = daren_opt( 'daren_header_menu_dropbg_color' );
		$dropMenuColor            = daren_opt( 'daren_header_drop_menu_color' );
		$dropMenuColor            = $dropMenuColor . '!important';
		$dropMenuHovColor         = daren_opt( 'daren_header_drop_menu_hover_color' );
		$dropMenuHovColor         = $dropMenuHovColor . '!important';
		$dropMenuHovItemBg        = daren_opt( 'daren_drop_menu_item_hover_bg' );


		$footerwbgColor     	  = daren_opt('daren_footer_widget_bdcolor');
		$footerbottombgColor      = daren_opt('daren_footer_bottom_bgcolor');
		$footerwTextColor   	  = daren_opt('daren_footer_widget_textcolor');
		$footerwanchorcolor 	  = daren_opt('daren_footer_widget_anchorcolor');
		$footerothrcolor 	  	  = daren_opt('daren_footer_other_anchor_color');
		$footerwanchorhovcolor    = daren_opt('daren_footer_widget_anchorhovcolor');
		$footerwanchorhovcolor    = $footerwanchorhovcolor . '!important';
		$widgettitlecolor  		  = daren_opt('daren_footer_widget_titlecolor');
		$footernewsltrbtncolor    = daren_opt('daren_footer_newsletter_btn_color');


		$fofbg  	  		  = daren_opt('daren_fof_bg_color');
		$foftonecolor  	  	  = daren_opt('daren_fof_textone_color');
		$fofttwocolor  	  	  = daren_opt('daren_fof_texttwo_color');


		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}

			.single_sidebar_widget .tagcloud a:hover
			{
				border-color: {$themeColor}
			}

			.sidebar_widget .sidebar_tittle h3:before, .sidebar_widget .sidebar_tittle h3:after, .sidebar_widget .btn, .btn_1
			{
				background: {$themeColor};
			}

			.banner_post h5, .banner_post a h2:hover, .post_1 .post_text_1 h5, .post_2 .post_text_1 h5, .post_3 .post_text_1 h5, .post_1 .post_text_1 h3:hover, .post_2 .post_text_1 h3:hover, .post_3 .post_text_1 h3:hover, .post_2 .category_post_img .category_btn, .post_3 .single_post_img .category_btn, .single_sidebar_widget.widget_categories ul li a:hover, .single_sidebar_widget .tagcloud a:hover, a:hover
			{
				color: {$themeColor} !important;
			}


			header.main_menu{
				background: {$headerBg}
			}
			.main_menu .navbar-light .navbar-nav .nav-link
			{
				color: {$menuColor}
			}
			.main_menu .navbar-light .navbar-nav .nav-link:hover
			{
				color: {$menuHoverColor}
			}
			.dropdown:hover .dropdown-menu
			{
				background: {$dropMenuBgColor}
			}
			.main_menu .navbar-light .navbar-nav .dropdown-menu .nav-link
			{
				color: {$dropMenuColor}
			}
			.main_menu .navbar-light .navbar-nav .dropdown-menu .nav-link:hover
			{
				color: {$dropMenuHovColor};
				background: {$dropMenuHovItemBg}
			}
			.header_area .navbar .nav .nav-item .nav-link {
			   color: {$menuColor};
			}
			.header_area .navbar .nav .nav-item:hover .nav-link {
			   color: {$menuHoverColor};
			}
			.header_area .navbar .nav .nav-item.submenu ul {
			   background: {$dropMenuBgColor};
			}
			.header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
			   color: {$dropMenuColor};
			}
			
			.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link{
				background: {$dropMenuHovItemBg};
				color: {$dropMenuHovColor}
			}

			.footer-area {
				background-color: {$footerwbgColor};
			}
			.copyright_part {
				background-color: {$footerbottombgColor};
			}
			.footer-area .single-footer-widget p, .footer-area .copyright_part_text p{
				color: {$footerwTextColor}
			}
			.footer-area .single-footer-widget h4 {
				color: {$widgettitlecolor}
			}
			.footer-area .single-footer-widget ul li a{
			   color: {$footerwanchorcolor};
			}
			.footer-area .single-footer-widget p a, .footer-area .copyright_part_text a{
			   color: {$footerwanchorcolor};
			}
			.footer-area .single-footer-widget p a:hover, .footer-area .copyright_part_text a:hover{
			   color: {$footerwanchorhovcolor};
			}
			.footer-area .single-footer-widget h5, .footer-area .contact_info span{
				color: {$footerothrcolor};
			}
			.footer-area .copyright_part_text{
				border-color: {$footerothrcolor};
			}
			.footer-area .single-footer-widget .click-btn{
				background: {$footernewsltrbtncolor};
				box-shadow: none;
			}
			.footer-area .single-footer-widget input[type=email]{
				border-color: {$footernewsltrbtncolor} !important;
			}
			.footer-area .single-footer-widget ul li a:hover, .footer-area .copyright_part_text a:hover{
			   color: {$footerwanchorhovcolor};
			}
			.copyright_part .footer-social a:hover{
				background: {$footerwanchorhovcolor};
			}
			#f0f {
			   background-color: {$fofbg};
			}
			.f0f-content .h1 {
			   color: {$foftonecolor};
			}
			.f0f-content p {
			   color: {$fofttwocolor};
			}

        ";
       
    wp_add_inline_style( 'daren-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'daren_common_custom_css', 50 );
