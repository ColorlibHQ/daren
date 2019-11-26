<?php
namespace Darenelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
//use Elementor\Scheme_Color;
//use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
//use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * Daren elementor about us section widget.
 *
 * @since 1.0
 */
class Daren_Banner_Posts extends Widget_Base {

	public function get_name() {
		return 'daren-banner';
	}

	public function get_title() {
		return __( 'Banner Posts', 'daren' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'daren-elements' ];
    }
    
    public function daren_featured_post_cat(){
        $post_cat_array = [];
        $cat_args = [
            'orderby' => 'name',
            'order'   => 'ASC'
        ];
        $categories = get_categories($cat_args);
        foreach($categories as $category) {
            $args = array(
                'showposts' => 2,
                'category_name' => $category->slug,
                'ignore_sticky_posts'=> 1
            );
            $posts = get_posts($args);
            if ($posts) {
                $post_cat_array[ $category->slug ] = $category->name;
            } else {
                return __( 'Select a different category, because this category have not enough posts.', 'daren' );
            }
        }
    
        return $post_cat_array;

             
    }

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_section',
            [
                'label' => __( 'Banner Post Section', 'daren' ),
            ]
        );
        $this->add_control(
            'post_cat',
            [
                'label'         => esc_html__( 'Select Category', 'daren' ),
                'type'          => Controls_Manager::SELECT,
                'default'       => 'creative-design',
                'description'   => esc_html__( 'Please use the featured images size 1159px width & 811px height or more for better look.', 'daren' ),
                'options'       => $this->daren_featured_post_cat()
            ]
        );
        $this->add_control(
            'post_order',
            [
                'label'         => esc_html__( 'Post Order', 'daren' ),
                'type'          => Controls_Manager::SWITCHER,
                'label_on'      => __( 'ASC', 'daren' ),
				'label_off'     => __( 'DESC', 'daren' ),
				'return_value'  => 'yes',
				'default'       => 'yes',
            ]
        );
        $this->add_control(
            'show_meta',
            [
                'label'         => esc_html__( 'Show/Hide Meta', 'daren' ),
                'type'          => Controls_Manager::SWITCHER,
                'label_on'      => __( 'Show', 'daren' ),
				'label_off'     => __( 'Hide', 'daren' ),
				'return_value'  => 'yes',
				'default'       => 'yes',
            ]
        );
        
        $this->end_controls_section(); // End content
	}

	protected function render() {
        $settings = $this->get_settings();
        $cat = $settings['post_cat'];
        $order = $settings['post_order'] == 'yes' ? 'desc' : 'asc';
        $meta = $settings['show_meta'] == 'yes' ? true : false;
    ?>
    <!-- banner post start-->
    <section class="banner_post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                        if( function_exists( 'daren_banner_post' ) ) {
                            daren_banner_post( $cat, $meta, $order );
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- banner post end-->
    <?php
    }
}
