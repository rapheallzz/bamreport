<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); 
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
 ?>

<div class="page-title-area uk-page-title">
	<div class="d-table">
		<div class="uk-container">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1><?php woocommerce_page_title(); ?></h1>
            <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p class="gunter-seo-breadcrumbs" id="breadcrumbs">','</p>' );
			} else {  woocommerce_breadcrumb(); } ?>
            <?php endif; ?>
		</div>
	</div>
</div>

    <div class="products-area products_details ptb-100">
        <div class="uk-container">
            <div class="custom-row">
                <div class="<?php if ( is_active_sidebar( 'shop-sidebar' ) ) { echo esc_attr('custom-col-8', 'gunter');} else{ echo esc_attr('custom-col-12', 'gunter');} ?>">
                    <?php
                    /**
                     * woocommerce_before_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */

                    do_action( 'woocommerce_before_main_content' );
                    ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php wc_get_template_part( 'content', 'single-product' ); ?>

                        <?php endwhile; // end of the loop. ?>

                    <?php
                        /**
                         * woocommerce_after_main_content hook.
                         *
                         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                         */
                        do_action( 'woocommerce_after_main_content' );
                    ?>
                </div>
                    <?php
                        /**
                         * woocommerce_sidebar hook.
                         *
                         * @hooked woocommerce_get_sidebar - 10
                         */
                        do_action( 'woocommerce_sidebar' );
                    ?>
            </div>
        </div>
    </div>
    <?php get_footer( 'shop' );

    /* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
    ?>