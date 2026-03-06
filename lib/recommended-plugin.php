<?php
/**
 * Include the TGM_Plugin_Activation class.
 * @package WordPress
 * @subpackage Gunter
 */

$pcs = trim( get_option( 'gunter_purchase_code_status' ) );

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

if ( $pcs == 'valid' ) {
	add_action( 'tgmpa_register', 'gunter_register_required_plugins' );
}

function gunter_register_required_plugins() {

	$plugins = array(
		
		array(
			'name'               => esc_html__('Gunter Toolkit', 'gunter'),
			'slug'               => 'gunter-toolkit',
			'source'             => get_stylesheet_directory() . '/lib/plugins/gunter-toolkit.zip', 
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		array(
			'name'               => esc_html__('Elementor Page Builder', 'gunter'),
			'slug'               => 'elementor',
			'required'           => false,
		),

		// WPBakery Page Builder
		array(
			'name'               => esc_html__('WPBakery Page Builder', 'gunter'),
			'slug'               => 'js_composer',
			'source'             => get_stylesheet_directory() . '/lib/plugins/js_composer.zip', 
			'required'           => false,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		// ACF 
		array(
			'name'      => esc_html__('Advanced Custom Fields Pro', 'gunter'),
			'slug'      => 'advanced-custom-fields-pro',
			'source'    => get_stylesheet_directory() . '/lib/plugins/advanced-custom-fields-pro.zip',
			'required'  => true,
        ),

        // WooCommerce
        array(
			'name'      => esc_html__('WooCommerce', 'gunter'),
			'slug'      => 'woocommerce',
			'required'  => false,
        ),
        
        // Contact Form 7
		array(
			'name'      => esc_html__('Contact Form 7', 'gunter'),
			'slug'      => 'contact-form-7',
			'required'  => false,
        ),
        
        // Newsletter
		array(
			'name'      => esc_html__('Newsletter', 'gunter'),
			'slug'      => 'newsletter',
			'required'  => false,
        ),
		array(
			'name'		 => esc_html__( 'Unyson', 'gunter' ),
			'slug'		 => 'unyson',
			'required'	 => false,
		),        

	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true, 
		'dismissable'  => true, 
		'dismiss_msg'  => '',   
		'is_automatic' => false, 
		'message'      => '',                      
	);
	tgmpa( $plugins, $config );
}