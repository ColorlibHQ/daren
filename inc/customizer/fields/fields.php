<?php 
/**
 * @Packge     : Daren
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/
// Header top background color
Epsilon_Customizer::add_field(
    'daren_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_general_section',
        'default'     => '#ef1313',
    )
);


// Search section
Epsilon_Customizer::add_field(
    'search_sec_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Search Section', 'daren' ),
        'section'     => 'daren_header_section',
        'default'     => true,

    )
);


// Header search form toggle field
Epsilon_Customizer::add_field(
    'daren_hsearchform_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Show header search form', 'daren' ),
        'description' => esc_html__( 'Toggle to show header search form.', 'daren' ),
        'section'     => 'daren_header_section',
        'default'     => true,
    )
);



// Social Profile section
Epsilon_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'daren' ),
        'section'     => 'daren_header_section',
        'default'     => true,

    )
);

// Social Profile Show/Hide
Epsilon_Customizer::add_field(
    'daren_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'daren' ),
        'section'     => 'daren_header_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'daren_header_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'daren_header_section',
		'label'        => esc_html__( 'Social Profile Links', 'daren' ),
        'button_label' => esc_html__( 'Add new social link', 'daren' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'daren' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'daren' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'https://twitter.com',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'daren' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);



// Header color section
Epsilon_Customizer::add_field(
    'daren_header_color_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Color Settings', 'daren' ),
        'section'     => 'daren_header_section',
        'default'     => true,

    )
);


// Header background color field
Epsilon_Customizer::add_field(
    'daren_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'daren' ),
        'description' => esc_html__( 'Select the header background color.', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '#fff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'daren_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '#2a2a2a',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'daren_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '',
    )
);
// Header menu dropdown background color field
Epsilon_Customizer::add_field(
    'daren_header_menu_dropbg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu dropdown background color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '#fff',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'daren_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '#2a2a2a',
    )
);
// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'daren_drop_menu_item_hover_bg',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu item hover background', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '',
    )
);
// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'daren_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_header_section',
        'default'     => '#2a2a2a',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'daren_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'daren' ),
        'section'     => 'daren_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'daren_blog_single_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog single post meta show/hide', 'daren' ),
        'section'     => 'daren_blog_section',
        'default'     => true
    )
);


/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'daren_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'daren' ),
        'section'           => 'daren_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'daren_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'daren' ),
        'section'           => 'daren_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'daren_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'daren_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'daren_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'daren' ),
        'section'     => 'daren_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'daren_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'daren' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'daren' ),
        'section'     => 'daren_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'daren_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'daren' ),
        'section'     => 'daren_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'daren' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'daren_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'daren' ),
        'section'     => 'daren_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'daren_footer_widget_bdcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => '#111516',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'daren_footer_widget_textcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => '#8f8f8f',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'daren_footer_widget_titlecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'daren_footer_widget_anchorcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => '#ef1313',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'daren_footer_widget_anchorhovcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => '#ef1313',
    )
);

// Footer newsletter button color field
Epsilon_Customizer::add_field(
    'daren_footer_newsletter_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Newsletter Form Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => 'inherit'
    )
);

// Footer other anchor color field
Epsilon_Customizer::add_field(
    'daren_footer_other_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Other Color', 'daren' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'daren_footer_section',
        'default'     => 'inherit',
    )
);



