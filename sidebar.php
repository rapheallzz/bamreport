<?php
/**
 * The sidebar containing the main widget area
 * @package WordPress
 * @subpackage Gunter
 */

 if ( class_exists( 'WooCommerce' ) ) {
	if( is_woocommerce() ) {
		$sidebar = 'shop-sidebar';
	}elseif ( is_product() ) {
		$sidebar = 'shop-sidebar';
	}else {
		$sidebar = 'sidebar-1';
	}
}else{
	$sidebar = 'sidebar-1';
}


if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="custom-col-4">
	<div id="secondary" class="widget-area <?php echo esc_attr($sidebar) ?>">
        <?php dynamic_sidebar($sidebar ); ?>
	</div>
</div>
