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
class Daren_Feature_Posts extends Widget_Base {

	public function get_name() {
		return 'daren-feature';
	}

	public function get_title() {
		return __( 'Feature Posts', 'daren' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
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
            'banner_section',
            [
                'label' => __( 'Feature Post Section', 'daren' ),
            ]
        );
        $this->add_control(
            'post_cat',
            [
                'label'         => esc_html__( 'Select Category', 'daren' ),
                'type'          => Controls_Manager::SELECT,
                'default'       => 'featured',
                'description'   => esc_html__( 'Please use the featured images size 380px width & 310px height or more for better look. Also try to upload the square image for this section.', 'daren' ),
                'options'       => $this->daren_featured_post_cat()
            ]
        );
        
        $this->end_controls_section(); // End content

	}

	protected function render() {
        $settings = $this->get_settings();
        $cat = $settings['post_cat'];
    ?>

    <!-- feature_post start-->
    <section class="feature_post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                        if( function_exists( 'daren_feature_post' ) ) {
                            daren_feature_post( $cat );
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_post end-->
    <?php
    }
}
