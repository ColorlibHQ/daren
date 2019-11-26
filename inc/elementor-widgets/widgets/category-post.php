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
class Daren_Category_Post extends Widget_Base {

	public function get_name() {
		return 'daren-category-post';
	}

	public function get_title() {
		return __( 'Category Posts', 'daren' );
	}

	public function get_icon() {
		return 'eicon-sitemap';
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
                'showposts' => 3,
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
            'category_section',
            [
                'label' => __( 'Category Post Section', 'daren' ),
            ]
        );
        $this->add_control(
            'post_cat',
            [
                'label'         => esc_html__( 'Select Category', 'daren' ),
                'type'          => Controls_Manager::SELECT,
                'default'       => 'brand-identity',
                'description'   => esc_html__( 'Please use the featured images size 360px width & 336px height or more for better look. Aslo it should be square image.', 'daren' ),
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
        $this->add_control(
            'show_label',
            [
                'label'         => esc_html__( 'Show/Hide Category Name', 'daren' ),
                'description'   => esc_html__( 'Show the Category name or not on right side?', 'daren' ),
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
        $meta = $settings['show_meta'] == 'yes' ? true : false;
        $order = $settings['post_order'] == 'yes' ? 'desc' : 'asc';
        $cat_lbl = $settings['show_label'] == 'yes' ? true : false;
    ?>
    <!-- category_post start-->
    <section class="catagory_post">
        <div class="container">
            <div class="row">
                <?php
                    if( function_exists( 'daren_category_post' ) ) {
                        daren_category_post( $cat, $meta, $order, $cat_lbl );
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- category_post end-->
    <?php
    }
}
