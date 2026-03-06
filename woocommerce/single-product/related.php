<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<h2><?php esc_html_e( 'Related products', 'gunter' ); ?></h2>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>
                    <div id="modal-center<?php echo esc_attr($post_object->ID,'gunter');?>" class="uk-flex-top related-wc-modal" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-modal-dialog-large uk-margin-auto-vertical productsQuickView">

                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            
                            <div class="modal-content">
                                <div class="uk-grid">
                                    <div class="uk-width-1-2">
                                        <div class="products-image">
                                        <?php woocommerce_template_loop_product_thumbnail(); ?>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="products-content">
                                            <h3><?php the_title(); ?></h3>
                                            <?php woocommerce_template_loop_price(); ?>
                                            <?php woocommerce_template_loop_rating(); ?>
                                            <?php woocommerce_template_single_excerpt(); ?>

                                            <?php  woocommerce_template_single_add_to_cart(); ?>


                                            <div class="product-meta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;
wp_reset_postdata();