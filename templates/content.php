<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package daren
 */
$author_nickname = get_the_author_meta( 'nickname');
?>
    <div class="col-lg-6">
        <div class="single_catagory_post post_2">

            <?php
                if( is_sticky() ){
                    echo '<span class="sticky_label">'. esc_html__( 'Sticky', 'daren' ) .'</span>';
                }
                if( has_post_thumbnail() ){ ?>
                    <div class="category_post_img">
                        <?php
                            the_post_thumbnail( 'all_post_360x336', array( 'alt' => get_the_title() ) );
                        ?>
                    </div>
                <?php
                }
            ?>
            <div class="post_text_1 pr_30">
                <?php if( daren_opt( 'daren_blog_meta', 1 ) == 1 ) { ?>
                    <p><span><?php echo esc_html__( 'By ', 'daren' ) . $author_nickname?> </span> / <?php the_time('F j, Y') ?></p>
                <?php } ?>

                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title();?></h3>
                </a>
                <div class="post_icon">
                    <ul>
                        <li><i class="ti-comment"></i><?php echo daren_posted_comments();?></li>
                        <li><?php echo get_simple_likes_button( get_the_ID() );?></li>
                        <li><a href="<?php the_permalink(); ?>#social-icons"><i class="ti-export"></i> <?php echo esc_html__( 'Share ', 'daren' );?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
