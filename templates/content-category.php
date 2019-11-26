    <div <?php post_class('single_post media post_3'); ?>>
        <?php
            if( is_sticky() ){
                echo '<span class="sticky_label">'. esc_html__( 'Sticky', 'daren' ) .'</span>';
            }
            if( has_post_thumbnail() ){ ?>
                <div class="single_post_img">
                    <?php
                        $author_nickname = get_the_author_meta( 'nickname');
                        the_post_thumbnail( 'all_post_350x340', array( 'alt' => get_the_title() ) );
                        echo daren_featured_post_cat( 'category_btn' );
                    ?>
                </div>
                <?php
            }
        ?>
        <div class="post_text_1 media-body align-self-center">
            <p><span><?php echo esc_html__( 'By ', 'daren' ) . $author_nickname?> </span> / <?php the_time('F j, Y') ?></p>
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