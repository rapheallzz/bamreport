<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Initializing online demo contents
function _filter_gunter_fw_ext_backups_demos( $demos ) {
	$demos_array			 = array(
		'elementor-demo'	=> array(
            'title'			 => esc_html__( 'Elementor Demo', 'gunter' ),
            'screenshot'	 => esc_url( get_template_directory_uri() ) . '/screenshot.png',
			'preview_link'	 => esc_url( 'https://themes.envytheme.com/gunter/' ),
		),		
		'wpbakery-demo'		=> array(
			'title'			 => esc_html__( 'WPBakery Demo', 'gunter' ),
            'screenshot'	 => esc_url( get_template_directory_uri() ) . '/screenshot.png',
			'preview_link'	 => esc_url( 'https://themes.envytheme.com/gunter/' ),
		),		
	);
	
	$download_url	 = 'https://themes.envytheme.com/gunter/wp-content/demo-content/';

	foreach ( $demos_array as $id => $data ) {
		$demo			 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}
add_filter( 'fw:ext:backups-demo:demos', '_filter_gunter_fw_ext_backups_demos' );
