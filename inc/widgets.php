<?php
/**
 * The template for displaying all widgets
 * @package WordPress
 * @subpackage Gunter
 * @version 1.0.0
 */

if ( ! function_exists( 'gunter_widgets_init' ) ) {
	// Register widget area.
	function gunter_widgets_init() {
        // Main widget
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'gunter' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gunter' ),
			'before_widget' => '<div id="%1$s" class="uk-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
        ) );
        
        //Footer One
        register_sidebar( array( 
			'name'          => esc_html__( 'Footer First', 'gunter' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'gunter' ),
			'before_widget' => '<div class="single-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3> <div class="bar"></div>',
        ) );
        
        //Footer Two
        register_sidebar( array( 
			'name'          => esc_html__( 'Footer Second', 'gunter' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'gunter' ),
			'before_widget' => '<div class="single-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3> <div class="bar"></div>',
        ) );
        
        //Footer Three
        register_sidebar( array( 
			'name'          => esc_html__( 'Footer Third', 'gunter' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'gunter' ),
			'before_widget' => '<div class="single-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3> <div class="bar"></div>',
        ) );

        //Shop
        register_sidebar( array(
            'name'          => esc_html__( 'Shop', 'gunter' ),
            'id'            => 'shop-sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'gunter' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
	}
}
add_action( 'widgets_init', 'gunter_widgets_init' );



?>