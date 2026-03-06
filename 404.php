<?php
/**
 * Gunter 404 pages (not found)
 * @package WordPress
 * @subpackage Gunter
 */
get_header();

// 404 Page Options
if(isset($opt_name['title_not_found'])){
	$bg_image 	= $opt_name['bg_not_found']['url'];
	$title 		= $opt_name['title_not_found'];
	$image 		= $opt_name['image_not_found']['url'];
	$content 	= $opt_name['content_not_found'];
	$button 	= $opt_name['button_not_found'];
}else{
	$bg_image	= '';
	$title	= '';
	$image 	= '';
	$content 	= '';
	$button	= '';
}

global $opt_name;
if( isset( $opt_name['enable_lazyloader'] ) ):
	$is_lazyloader = $opt_name['enable_lazyloader'];
else:
	$is_lazyloader = true;
endif;
?>

<div class="page-title-area uk-page-title" <?php if(!$bg_image == ''){?>style="background-image: url(<?php echo esc_url($bg_image, 'gunter' );?>);"<?php } ?>>
	<div class="uk-container">
		<h1><?php if(!$title == ''){ echo esc_html( $title, 'gunter' );}else { echo esc_html_e('404', 'gunter'); } ?></h1>
		<ul>
			<li><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></li>
			<li><?php if(!$title == ''){ echo esc_html( $title, 'gunter' );}else { echo esc_html_e('404', 'gunter'); } ?></li>
		</ul>
	</div>
</div>


<div class="error-page">
    <div class="error-page-content">
		<?php if(!$image == ''){ ?>
			<?php if( $is_lazyloader == true ): ?>
				<img class="smartify" sm-src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr__('404', 'gunter'); ?>">
			<?php else: ?>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr__('404', 'gunter'); ?>">
			<?php endif; ?>

		<?php } else { ?>

			<?php if( $is_lazyloader == true ): ?>
				<img class="smartify" sm-src="<?php echo esc_url(get_template_directory_uri().'/assets/img/page-not-found.png') ?>" alt="<?php echo esc_attr('404', 'gunter'); ?>">
			<?php else: ?>
				<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/page-not-found.png') ?>" alt="<?php echo esc_attr('404', 'gunter'); ?>">
			<?php endif; ?>
		<?php } ?>

            <?php if (!$content == ''){ ?>
                <p><?php echo esc_html( $content ); ?> </p>
            <?php }else { ?>
				<p><?php echo esc_html_e("Oops! Page not found", "gunter")?></p>
			<?php } ?>

        <a href="<?php echo site_url(); ?>" class="uk-button uk-button-default"><?php if(!$button == ''){echo esc_html($button); }else{ echo esc_html_e("Back To Home", 'gunter'); } ?></a>
    </div>
</div>

<?php get_footer();