<?php
/**
 * WooCommerce Compatibility File
 *
 *
 * @package axolot_woocommerce
 */


 //Add the support
function axolot_woocommerce_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'axolot_woocommerce_woocommerce_setup' );



//Filter loop_shop_columns
if ( ! function_exists( 'axolot_loop_shop_column' ) ) :
    function axolot_loop_shop_column($nc){
        if (is_active_sidebar('shop-sidebar')) {
            return 2 ;
        }else{
            return 3 ;
        }
    }
endif;
add_filter('loop_shop_columns', 'axolot_loop_shop_column');



//Filter comment_form_defaults
if ( ! function_exists( 'axolot_as_adapt_comment_form' ) ) :
function axolot_as_adapt_comment_form( $arg ) {
    $arg['class_submit'] = 'btn btn-primary';
    return $arg;
}
endif;
add_filter( 'comment_form_defaults', 'axolot_as_adapt_comment_form' );


//Filter woocommerce_checkout_fields
if ( ! function_exists( 'axolot_field_class_add' ) ) :
 function axolot_field_class_add($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            $field['class'][] = 'form-group'; 
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
endif;
add_filter('woocommerce_checkout_fields', 'axolot_field_class_add' );

 
// woocommerce_output_related_products_args
if ( ! function_exists( 'axolot_related_products_args' ) ) :
    function axolot_related_products_args( $args ) {
        if (is_active_sidebar('shop-sidebar')) {
            $args['posts_per_page'] = 2; 
            $args['columns'] = 2; 
        }else{
            $args['posts_per_page'] = 3; 
            $args['columns'] = 3; 
        }
        return $args;
    }
endif;
add_filter( 'woocommerce_output_related_products_args', 'axolot_related_products_args', 20 );


if ( ! function_exists( 'axolot_wc_change_number_related_products' ) ) :
    function axolot_wc_change_number_related_products( $args ) {
        if (is_active_sidebar('shop-sidebar')) {
            $args['posts_per_page'] = 2; 
            $args['columns'] = 2; 
        }else{
            $args['posts_per_page'] = 3; 
            $args['columns'] = 3; 
        }
    return $args;
    }
endif;
add_filter( 'woocommerce_upsell_display_args', 'axolot_wc_change_number_related_products', 20 );


if ( ! function_exists( 'axolot_wc_refresh_mini_cart_count' ) ) :
    function axolot_wc_refresh_mini_cart_count($fragments){
        ob_start();
        ?>
        <span class="mini-cart-count"> 
            <?php echo WC()->cart->get_cart_contents_count(); ?>
        </span>
        <?php
            $fragments['.mini-cart-count'] = ob_get_clean();
        return $fragments;
    }
endif;
add_filter( 'woocommerce_add_to_cart_fragments', 'axolot_wc_refresh_mini_cart_count');
