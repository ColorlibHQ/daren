<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
 */

    $url = 'https://colorlib.com/';
    $copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'daren' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
    $copyRight = !empty( daren_opt( 'daren_footer_copyright_text' ) ) ? daren_opt( 'daren_footer_copyright_text' ) : $copyText;
    ?>

    <!-- footer part start-->
    <?php
        $footer_wtoggle = daren_opt( 'daren_footer_widget_toggle' );
        $footer_active_class = ( $footer_wtoggle == 1 ) ? 'footer_active' : 'footer_deactivated';
    ?>
    
    <footer class="footer-area section_padding <?php echo $footer_active_class?>">
        <div class="container">
            <?php
                if( $footer_wtoggle == 1 ) {
            ?>
            <div class="row">
                <?php
                    // Footer Widget 1
                    if ( is_active_sidebar( 'footer-1' ) ) {
                        dynamic_sidebar( 'footer-1' );
                    }

                    // Footer Widget 2
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    }

                    // Footer Widget 3
                    if ( is_active_sidebar( 'footer-3' ) ) {
                        dynamic_sidebar( 'footer-3' );
                    }
                ?>
            </div>
            <?php
                }
            ?>

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
    </body>
</html>