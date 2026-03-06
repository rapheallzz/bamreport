<?php global $opt_name;
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage Gunter
 */
?>
<!DOCTYPE html>
<?php

if( gunter_rtl() == true ): ?><html dir="rtl" <?php language_attributes(); ?>>
<?php else: ?><html <?php language_attributes(); ?>><?php endif; ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
			
<?php wp_head(); 

// Header
if(function_exists('get_field')){
	$menu = get_field('select_menu');
	$ver = get_field('select_nav_version');
	$top_bar = get_field('hide_top_bar');
}else{
	$menu = 'multi-menu';
	$ver = 'dark';
	$top_bar = true;
}

// Google Analytic Code
if( isset($opt_name['ga_code'] )){
	$google_analytic = $opt_name['ga_code']; 
	if(!$google_analytic == ''){ ?>
	<script>
		<?php echo wp_kses_post($google_analytic, 'gunter'); ?>
	</script>
<?php } } ?>

</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php gunter_preloader(); ?><!-- Preloader -->

	<?php if( $top_bar != true ): ?>
		<?php if(isset($opt_name['enable_to_nav'] ) && $opt_name['enable_to_nav'] != false):
				if($ver == 'light') { ?>
					<div class="header-info top-light">
				<?php }elseif($ver == 'dark') { ?>
					<div class="header-info top-dark">
				<?php }else {
					if(isset($opt_name['enable_light_header'])){
						if($opt_name['enable_light_header'] == true){ ?>
							<div class="header-info top-light">
						<?php
						}else { ?>
							<div class="header-info top-dark">
						<?php }
					}else{ ?>
						<div class="header-info top-dark">
					<?php }
				} ?>
			
			<div class="uk-container">
				<div class="h-info-list">
					<ul>
						<?php
						if(isset($opt_name['top_bar_number'] ) && !$opt_name['top_bar_number'] == '') { ?>
								<li>
									<i class="fa fa-phone"></i> 
									<a href="<?php echo esc_url($opt_name['top_bar_number_link']); ?>">
										<?php echo esc_html($opt_name['top_bar_number']); ?>
									</a>
								</li><?php
							} 
							if(isset($opt_name['top_bar_gmail'] ) && !$opt_name['top_bar_gmail'] == '') { ?>
							<li>
								<i class="fa fa-envelope-open"></i> 
								<a href="<?php echo esc_url($opt_name['top_bar_gmail_link']); ?>">
									<?php echo esc_html($opt_name['top_bar_gmail']); ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>

				<div class="h-social-link">
					<?php
					//Social link
					get_template_part('inc/social-link', 'social-link');
					?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	<?php endif; ?>

	<!-- Start Mobile Navbar -->
	<div id="offcanvas-flip" class="mobile-navbar uk-mobile-navbar" data-uk-offcanvas="flip: true; overlay: true">
		<div class="uk-offcanvas-bar">
			<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close="ratio: 2;"></button>
			<nav class="uk-navbar-container" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
				<?php
				if($menu == 'Landing Page Menu'){
					if(has_nav_menu('landing-menu')){
						wp_nav_menu( array(
							'theme_location'  	=> 'landing-menu',
							'depth'             => 1,
							'fallback_cb'   	=> false,
							'menu_class'        => 'uk-navbar-nav',
						) );
					}
				}elseif( $menu == 'Landing Page Menu Two' ){
					if(has_nav_menu('landing-menu-two')){
						wp_nav_menu( array(
							'theme_location'  	=> 'landing-menu-two',
							'depth'             => 1,
							'fallback_cb'   	=> false,
							'menu_class'        => 'uk-navbar-nav',
						) );
					}
				}else{
					if(has_nav_menu('multi-menu')){
						wp_nav_menu( array(
							'theme_location'  	=> 'multi-menu',
							'depth'             => 4,
							'fallback_cb'   	=> false,
							'menu_class'        => 'uk-navbar-nav',
						) );
					}
				} ?> 
			</nav>
            <?php
            if ( class_exists( 'WooCommerce' ) ) { ?>
            <a href="<?php echo esc_url(wc_get_cart_url()) ?>" class="cart-link">
                <i class="fa fa-shopping-cart"></i>
                <span class="mini-cart-count"></span>
            </a> <?php } ?>
		</div>
	</div>
	<!-- End Mobile Navbar -->

	<!-- Start Navbar Area -->
	
		<?php
		if( $menu == 'Landing Page Menu'){ ?>
			<div class="landing-page-menu">
		<?php }else{ ?>
			<div class="multi-page-menu">
		<?php } 

		if($ver == 'light') { ?>
			<header class="header-area light <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
		<?php }elseif($ver == 'dark') { ?>
			<header class="header-area uk-dark <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
		<?php }elseif($ver == 'style_four') { ?>
			<header class="header-area uk-sticky uk-sticky-fixed bg-tr <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
		<?php }elseif($ver == 'style_three') { ?>
			<header class="header-area header-style-two <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
		<?php }else {
			if(isset($opt_name['enable_light_header'])){
				if($opt_name['enable_light_header'] == true){ ?>
					<header class="header-area light <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
				<?php
				}else { ?>
					<header class="header-area uk-dark <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
				<?php }
			}else{ ?>
				<header class="header-area uk-dark <?php if ( is_user_logged_in() ) { echo esc_attr('hide-adminbar');} ?>">
			<?php }
		} ?>
	
		<?php if($ver == 'style_three'): ?>
            <div class="uk-container-expand">
		<?php else: ?>
			<div class="uk-container">
		<?php endif; ?>
			<div class="uk-navbar">
				<div class="logo uk-navbar-left">
					<a href="<?php echo home_url(); ?>" class="navbar-brand">

						<?php
						if(isset($opt_name['dark_logo']['url'] ) && isset($opt_name['light_logo']['url'] )){
							$dark = $opt_name['dark_logo']['url'];
							$light = $opt_name['light_logo']['url'];
						}else{
							$dark = '';
							$light = '';
						}

						if($ver == 'light') {
							if(!$light == '') { ?>
								<img src="<?php echo esc_url($light)?>" alt="<?php bloginfo( 'title' ); ?>">
							<?php 
							}
						}elseif($ver == 'dark') { 
							if(!$dark == '') { ?>
								<img src="<?php echo esc_url($dark)?>" alt="<?php bloginfo( 'title' ); ?>">
							<?php 
							}
						}elseif($ver == 'style_four') { 
							if(!$light == '') { ?>
								<img src="<?php echo esc_url($light)?>" alt="<?php bloginfo( 'title' ); ?>">
							<?php 
							}
						}else {
							if(isset($opt_name['enable_light_header'])){
								if($opt_name['enable_light_header'] == true){ 
									if(!$light == '') { ?>
										<img src="<?php echo esc_url($light)?>" alt="<?php bloginfo( 'title' ); ?>">
									<?php 
									}
								}else { if(!$dark == '') { ?>
									<img src="<?php echo esc_url($dark)?>" alt="<?php bloginfo( 'title' ); ?>">
								<?php 
								}  }
							}else{ 
								if(!$dark == '') { ?>
									<img src="<?php echo esc_url($dark)?>" alt="<?php bloginfo( 'title' ); ?>">
								<?php 
								}
							 }
						} 
						if($dark == '' && $light == '') { ?>
							<div class="site-title">
								<h2><?php bloginfo( 'name' ); ?></h2>
							</div>
						<?php } ?>
					</a>
				</div>

				<div class="uk-navbar-toggle" id="navbar-toggle" data-uk-toggle="target: #offcanvas-flip">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="navbar uk-navbar-right">
					<nav class="uk-navbar-container" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
						<?php 
						if( $menu == 'Landing Page Menu'){
							if(has_nav_menu('landing-menu')){
								wp_nav_menu( array(
									'theme_location'  	=> 'landing-menu',
									'depth'             => 1,
									'fallback_cb'   	=> false,
									'menu_class'        => 'uk-navbar-nav',
								) );
							}
						}elseif( $menu == 'Landing Page Menu Two' ){
							if(has_nav_menu('landing-menu-two')){
								wp_nav_menu( array(
									'theme_location'  	=> 'landing-menu-two',
									'depth'             => 1,
									'fallback_cb'   	=> false,
									'menu_class'        => 'uk-navbar-nav',
								) );
							}
						}else{
							if(has_nav_menu('multi-menu')){
								wp_nav_menu( array(
									'theme_location'  	=> 'multi-menu',
									'depth'             => 4,
									'fallback_cb'   	=> false,
									'menu_class'        => 'uk-navbar-nav',
									'fallback_cb'       => 'gunter_top_menu::fallback',
	                				'walker'            => new gunter_offcanvas_menu()
								) );
							}
						} ?> 
					</nav>
                    <?php
                    if ( class_exists( 'WooCommerce' ) ) { ?>
                    <a href="<?php echo esc_url(wc_get_cart_url()) ?>" class="cart-link">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="mini-cart-count"></span>
                    </a> <?php } ?>
				</div>
			</div>
		</div>
	</header>
</div><!-- End Navbar Area -->
