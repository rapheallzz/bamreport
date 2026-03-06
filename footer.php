<?php
/**
 * The template for displaying the footer
 * @package WordPress
 * @subpackage Gunter
 */

global $opt_name;

if( isset( $opt_name['enable_lazyloader'] ) ):
    $is_lazyloader = $opt_name['enable_lazyloader'];
else:
    $is_lazyloader = true;
endif;

?>
<footer class="footer-area uk-dark uk-footer">
    <div class="uk-container">
        <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s">
            <div class="item">
                <div class="single-footer-widget widget_text">	
                    <a href="<?php echo home_url(); ?>">
                    <?php 
                    if(isset($opt_name['footer_logo'] )){ 
                        $logo = $opt_name['footer_logo']['url'];
                        if(!$logo == '') { ?>
                            <img src="<?php echo esc_url( $logo, 'gunter' ); ?>" alt="<?php bloginfo( 'title' ); ?>">
                        <?php }else{ ?>
                            <h2><?php bloginfo( 'name' ); ?></h2>
                        <?php } }else{ ?>
                            <h2><?php bloginfo( 'name' ); ?></h2>
                        <?php } ?>
                    </a>	
                    <p><?php if(isset($opt_name['footer_desc'] )){ echo esc_html($opt_name['footer_desc']); } ?></p>
                </div>
            </div>

            <div class="item">
                <?php 
                if ( is_active_sidebar( 'footer-1' ) ) { 
                    dynamic_sidebar('footer-1'); 
                } ?>
            </div>

            <div class="item">
                <?php 
                if ( is_active_sidebar( 'footer-2' ) ) { 
                    dynamic_sidebar('footer-2'); 
                } ?>
            </div>

            <div class="item">
                <?php if ( is_active_sidebar( 'footer-3' ) ) { 
                    dynamic_sidebar('footer-3'); 
                } 

                //Social link
                if(isset($opt_name['footer_desc'] ) && $opt_name['enable_social_share'] != false):
                    get_template_part('inc/social-link', 'social-link');
                endif;  
                ?>                  
            </div>
        </div>

        <div class="copyright-area">
            <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s">
                <div class="item">
                    <?php if(isset($opt_name['footer_desc'] ) && $opt_name['copyright_text'] ): ?>
                        <p><?php echo wp_kses_post( $opt_name['copyright_text'] ); ?></p>
                    <?php endif; ?>
                </div>

                <div class="item">
                <?php 
				if(has_nav_menu('footer-menu')){
					wp_nav_menu( array(
						'theme_location'  	=> 'footer-menu',
						'depth'             => 1,
						'fallback_cb'   	=> false,
						'menu_class'        => 'ul',
					) );
				} ?>
                </div>
            </div>

            <?php 
                if ( isset($opt_name['enable_shape_images'] ) && isset($opt_name['enable_back_to_top'] ) && function_exists( 'gunter_toolkit_custom_post' ) ) {
                    $shape = $opt_name['enable_shape_images'];
                    $top = $opt_name['enable_back_to_top'];
                }else{
                    $shape = true;
                    $top = true;
                }
            ?>

            <?php if($top != false):?>
                <div class="go-top"><i class="flaticon-chevron"></i></div>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="br-line"></div>

    <?php if($shape != false): ?>
        <div class="footer-shape1">
            <?php if( $is_lazyloader == true ): ?>
                <img class="smartify" sm-src="<?php echo esc_url(get_template_directory_uri().'/assets/img/footer-shape1.png') ?>" alt="<?php echo esc_attr__('shape', 'gunter')?>">
            <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/footer-shape1.png') ?>" alt="<?php echo esc_attr__('shape', 'gunter')?>">
            <?php endif; ?>
        </div>
        <div class="footer-shape2">
            <?php if( $is_lazyloader == true ): ?>
                <img class="smartify" sm-src="<?php echo esc_url(get_template_directory_uri().'/assets/img/footer-shape2.png') ?>" alt="<?php echo esc_attr__('shape', 'gunter')?>">
            <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/footer-shape2.png') ?>" alt="<?php echo esc_attr__('shape', 'gunter')?>">
            <?php endif; ?>
        </div>
    <?php endif;?>

</footer>   

    <?php 
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( strpos($actual_link, 'themes.envytheme.com/gunter') != false ): ?>
        <div class="et-demo-options-toolbar">
            <?php
            global $wp;
            $current_url = home_url(add_query_arg(array(), $wp->request));
            ?>
            <?php if( gunter_rtl() == true ): ?>
                <a href="<?php echo esc_url( $current_url ); ?>" class="hint--bounce hint--left hint--black" id="toggle-quick-options" aria-label="LTR Demo">
                    <span uk-icon="sign-out"></span>
                </a>
            <?php else: ?>
                <a href="<?php echo esc_url( $current_url ); ?>/?rtl=enable" class="hint--bounce hint--left hint--black" id="toggle-quick-options" aria-label="RTL Demo">
                    <span uk-icon="sign-out" class="right"></span>
                </a>
            <?php endif; ?>
            <a href="https://support.envytheme.com/" target="_blank" rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Reach Us">
            <span uk-icon="users"></span>
            </a>
            <a href="https://docs.envytheme.com/docs/gunter-theme-documentation/" target="_blank" rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Documentation">
                <span uk-icon="copy"></span>
            </a>
            <a href="https://1.envato.market/Xav5M" target="_blank" rel="nofollow" class="hint--bounce hint--left hint--black" aria-label="Purchase Gunter">
            <span uk-icon="cart"></span>
            </a>
        </div>
    <?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
