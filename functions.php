<?php
/**
 * Gunter functions and definitions
 *
 * @package WordPress
 * @subpackage Gunter
 */

if ( ! function_exists( 'gunter_setup' ) ) :

	// Sets up theme defaults and registers support for various WordPress features.
	function gunter_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'gunter', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for yoast seo plugin
		add_theme_support( 'yoast-seo-breadcrumbs' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Custom Image sizes for this theme

		// Projects Image Size
		add_image_size( 'gunter_project_image', 380, 350, true );
		add_image_size( 'gunter_project_image_full', 665, 520, true );
		add_image_size( 'gunter_project_image_two', 650, 434, true );

		// Services Image Size
		add_image_size( 'gunter_service_single', 600, 325, true );

		// Blog (the default blog & single image)
		add_image_size( 'gunter_post_image', 790, 400, true );
		 
		// News Image Size
        add_image_size( 'gunter_news_image', 380, 330, true ); 
		

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'multi-menu' => esc_html( 'Multi Page Menu', 'gunter' ),
			'landing-menu' => esc_html( 'Landing Page Menu', 'gunter' ),
			'landing-menu-two' => esc_html( 'Landing Page Menu Two', 'gunter' ),
			'footer-menu' => esc_html( 'Footer menu', 'gunter' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add support for posts formats
		add_theme_support( 'post-formats', array( 
			'aside', 
			'gallery', 
			'link', 
			'image', 
			'quote', 
			'video', 
			'audio', 
			'chat'
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'gunter_setup' );

// Set the content width in pixels, based on the theme's design and stylesheet.
	function gunter_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'gunter_content_width', 640 );
	}
add_action( 'after_setup_theme', 'gunter_content_width', 0 );

// Enqueue scripts and styles.
if ( ! function_exists( 'gunter_scripts' ) ) {
	function gunter_scripts() {
		global $opt_name;

		if( isset( $opt_name['enable_lazyloader'] ) ):
			$is_lazyloader = $opt_name['enable_lazyloader'];
		else:
			$is_lazyloader = true;
		endif;

		if( isset( $opt_name['enable_minify_css_js'] ) ):
			$is_minify = $opt_name['enable_minify_css_js'];
		else:
			$is_minify = true;
		endif;

		wp_enqueue_style( 'gunter-style', get_stylesheet_uri() );
		wp_style_add_data( 'gunter-style', 'rtl', 'replace' );

		wp_enqueue_style( 'vendors', get_template_directory_uri() . '/diaspora-report/assets/css/vendors.min.css' );

		wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/diaspora-report/assets/css/font-awesome.min.css');
		wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/diaspora-report/assets/css/flaticon.css');

		if( $is_minify == true ):
			wp_enqueue_style( 'gunter-main-style', get_template_directory_uri() . '/diaspora-report/assets/css/gunter-style.min.css');
			wp_enqueue_style( 'gunter-responsive', get_template_directory_uri() . '/diaspora-report/assets/css/responsive.min.css');
		else :
			wp_enqueue_style( 'gunter-main-style', get_template_directory_uri() . '/diaspora-report/assets/css/gunter-style.css');
			wp_enqueue_style( 'gunter-responsive', get_template_directory_uri() . '/diaspora-report/assets/css/responsive.css');
		endif;

		// RTL CSS
		if( gunter_rtl() == true ):
			wp_enqueue_style( 'gunter-rtl', get_template_directory_uri() . '/style-rtl.css' );
		endif;

		wp_enqueue_script( 'vendors', get_template_directory_uri() . '/diaspora-report/assets/js/vendors.min.js', array ( 'jquery' ), true);
		wp_enqueue_script( 'jquery-ajaxchimp', get_template_directory_uri() . '/diaspora-report/assets/js/jquery.ajaxchimp.min.js', array ( 'jquery' ), true);

		// Smartify JS 
		if( $is_lazyloader == true ):
			wp_enqueue_script( 'jquery-smartify', get_template_directory_uri() . '/diaspora-report/assets/js/jquery.smartify.js', array( 'jquery' ), false, true );
			wp_enqueue_script( 'gunter-smartify', get_template_directory_uri() . '/diaspora-report/assets/js/smartify.js', array( 'jquery' ), false, true );
		endif;

		if( $is_minify == true ):
			wp_enqueue_script( 'gunter-active', get_template_directory_uri() . '/diaspora-report/assets/js/active.min.js', array( 'jquery' ), false, true );
		else :
			wp_enqueue_script( 'gunter-active', get_template_directory_uri() . '/diaspora-report/assets/js/active.js', array( 'jquery' ), false, true );
		endif;

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'gunter_scripts' );

// Load Google Fontz
if ( ! function_exists( 'poppins_fonts' ) ) {
	function poppins_fonts() {
		wp_enqueue_style( 'poppins-fonts', "//fonts.googleapis.com/css?family=Poppins:500,600,600i,700,800,900", '', '1.0.0', 'screen' );
	}
}

add_action( 'wp_enqueue_scripts', 'poppins_fonts' );

// Blog Search
if ( ! function_exists( 'gunter_search_filter' ) ) {
	function gunter_search_filter($query) {
		if ($query->is_search) {
				$query->set('post_type', 'post');
		}
		return $query;
	}
}
add_filter('pre_get_posts','gunter_search_filter');

// Categories Post Count filter
if ( ! function_exists( 'gunter_categories_postcount_filter' ) ) {
	function gunter_categories_postcount_filter ($variable) {
		$variable = str_replace('</a> (', '<span class="post_count"> ', $variable);
		$variable = str_replace(')', ' </span> </a>', $variable);
		return $variable;
	}
} 
add_filter('wp_list_categories','gunter_categories_postcount_filter');

//Single Services Sidebar Title Active Class
if ( ! function_exists( 'gunter_if_current' ) ) {
	function gunter_if_current($s) {
		global $wp_query,$post;
		$current    = $wp_query->get_queried_object_id();
		$post_id    = $post->ID;
		if($current==$post_id){echo esc_attr($s, 'gunter');}
	}
}

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Register Widget
require get_template_directory() . '/inc/widgets.php';

// TGM Plugin Activation
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

// Recommended Plugins
require_once get_template_directory() . '/lib/recommended-plugin.php';

// Template Functions
require_once get_template_directory() . '/inc/template-functions.php';

// ACF Include
require_once get_template_directory() . '/inc/acf.php';

// Demo Data Filter
$pcs = trim( get_option( 'gunter_purchase_code_status' ) );
if ( $pcs == 'valid' ) {
	require_once get_template_directory() . '/lib/demo-import.php';
}

// Custom Style
require_once get_template_directory() . '/inc/custom-style.php';

// Template Functions
require_once get_template_directory() . '/inc/template-functions.php';

// Uikit Navwalker
require_once get_template_directory() . '/inc/uikit-nav.php';

// Filter the excerpt "read more" string.
function wpdocs_excerpt_more( $more ) {
    return ' ';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// If page edited by elementor
if ( ! function_exists( 'gunter_is_elementor' ) ) :
	function gunter_is_elementor(){
		if ( function_exists( 'elementor_load_plugin_textdomain' ) ):
			global $post;
			return \Elementor\Plugin::$instance->db->is_built_with_elementor($post->ID);
		endif;
	}
endif;

// Preloader
if ( ! function_exists( 'gunter_preloader' ) ) :
	function gunter_preloader() { 
		global $opt_name;

		if( isset( $opt_name['enable_preloader'] ) ):
			$is_preloader = $opt_name['enable_preloader'];
		else:
			$is_preloader = true;
		endif;

		//$is_preloader       = !empty($opt_name['enable_preloader']) ? $opt_name['enable_preloader'] : '1';
		
        $preloader_style    = !empty($opt_name['preloader_style']) ? $opt_name['preloader_style'] : 'circle-spin';

        if( $is_preloader == true ): 
            if ( defined( 'ELEMENTOR_VERSION' ) ) :
                if (\Elementor\Plugin::$instance->preview->is_preview_mode()) :
                    echo '';
                else:
                    if ( $preloader_style == 'text' ) :
                        if (!empty( $opt_name['loading_text'] ) ) : ?>
                            <div class="uk-preloader">
                                <div class="spinner">
                                    <p class="text-center"> <?php echo esc_html( $opt_name['loading_text'] ) ?> </p>
                                </div>
                            </div>
                        <?php endif;
                    elseif( $preloader_style == 'circle-spin' ) : ?>
                        <div class="uk-preloader">
							<div class="spinner">
								<div class="double-bounce1"></div>
								<div class="double-bounce2"></div>
							</div>
						</div>
                    <?php else: ?>
                        <div class="uk-preloader preloader-img">
                            <div class="spinner">
                            </div>
                        </div>
                    <?php endif;
                endif;
            else:
                if ( $preloader_style == 'text' ) :
                    if (!empty( $opt_name['loading_text'] ) ) : ?>
                        <div class="uk-preloader">
                            <div class="spinner">
                                <p class="text-center"> <?php echo esc_html( $opt_name['loading_text'] ) ?> </p>
                            </div>
                        </div>
                    <?php endif;
                elseif( $preloader_style == 'circle-spin' ) :
                    ?>
                    <div class="uk-preloader">
						<div class="spinner">
							<div class="double-bounce1"></div>
							<div class="double-bounce2"></div>
						</div>
					</div>
                <?php else : ?>
                    <div class="uk-preloader preloader-img">
                        <div class="spinner">
                        </div>
                    </div>
                    <?php 
                endif;
            endif;
        endif;
	}
endif;

/**
 * Gunter RTL
*/
if( ! function_exists( 'gunter_rtl' ) ):
	function gunter_rtl() {
		global $opt_name;

		if(	isset( $opt_name['gunter_enable_rtl'])  ):
			$gunter_rtl_opt = $opt_name['gunter_enable_rtl'];
		else:
			$gunter_rtl_opt = 'disable';
		endif;

		if ( isset( $_GET['rtl'] ) ) {
			$gunter_rtl_opt = $_GET['rtl'];
		}

		if ( $gunter_rtl_opt == 'enable' ) :
			$gunter_rtl = true;
		else:
			$gunter_rtl = false;
		endif;
		
		return $gunter_rtl;
	}
endif;


/**
 * Classes
 */
require get_template_directory() . '/inc/classes/Gunter_base.php';
require get_template_directory() . '/inc/classes/Gunter_rt.php';
require get_template_directory() . '/inc/classes/Gunter_admin_page.php';
require get_template_directory() . '/inc/admin/dashboard/Gunter_admin_dashboard.php';

/**
 * Admin dashboard style and scripts
 */
add_action( 'admin_enqueue_scripts', function() {
    global $pagenow;
    wp_enqueue_script( 'gunter-admin', get_template_directory_uri() .'/diaspora-report/assets/js/gunter-admin.js', array('jquery'), '1.0.0', true );
    if ( $pagenow == 'admin.php' ) {
        wp_enqueue_style( 'gunter-admin-dashboard', get_template_directory_uri() .'/diaspora-report/assets/css/admin-dashboard.min.css' );
    }
});

/**
 * Redirect after theme activation
 */
add_action( 'after_switch_theme', function() {
    if ( isset( $_GET['activated'] ) ) {
		wp_safe_redirect( admin_url('admin.php?page=gunter') );
		update_option( 'gunter_purchase_code_status', '', 'yes' );
		update_option( 'gunter_purchase_code', '', 'yes' );
        exit;
	}
	update_option('notice_dismissed', '0');
});

/**
 * Notice dismiss handle
 */
add_action( 'admin_init', function() {
    if ( isset($_GET['dismissed']) && $_GET['dismissed'] == 1 ) {
        update_option('notice_dismissed', '1');
    }
});

$pcs = trim( get_option( 'gunter_purchase_code_status' ) );
if ( $pcs != 'valid' ) {
    function gunter_deregister(){
        wp_deregister_script( 'gunter-active' );
        wp_deregister_style( 'gunter-main-style' );
    }
    add_action( 'wp_enqueue_scripts', 'gunter_deregister' );
}else{
    // Load WooCommerce compatibility file.
    if ( class_exists( 'WooCommerce' ) ) {
        require get_template_directory() . '/inc/woocommerce.php';
    }
}


/**
 * Inc
 */
include_once get_template_directory() . '/inc/init.php';