<?php
/**
 * The main template file
 * @package WordPress
 * @subpackage Gunter
 */

get_header();

// Page Banner & Background Image
if(isset($opt_name['blog_title'])) {
	$bg_image 			= $opt_name['blog_bg']['url'];
	$title 				= $opt_name['blog_title'];
	$enable_blog_banner = $opt_name['enable_blog_banner'];
}else{
	$bg_image 			= '';
	$title		 		= esc_html__( 'Blog', 'gunter' );
	$enable_blog_banner = true;
}

$ptb = 'ptb-140-70';

$gunter_blog_grid = !empty($opt_name['gunter_blog_grid']) ? $opt_name['gunter_blog_grid'] : 'custom-col-12';

if(isset($opt_name['gunter_blog_sidebar'])) {
    if( $opt_name['gunter_blog_sidebar'] == 'gunter_without_sidebar_center' ):
        $sidebar = 'custom-col-8 offset-lg-2';
    elseif( $opt_name['gunter_blog_sidebar'] == 'gunter_without_sidebar' ):
        $sidebar = 'custom-col-12';
    else:
        if( is_active_sidebar( 'sidebar-1' ) ):
            $sidebar = 'custom-col-8';
        else:
            $sidebar = 'custom-col-8 offset-lg-2';
        endif;
    endif;
    $gunter_sidebar_hide = $opt_name['gunter_blog_sidebar'];
} else {
    if( is_active_sidebar( 'sidebar-1' ) ):
        $sidebar = 'custom-col-8';
        $gunter_sidebar_hide = 'gunter_with_sidebar';
    else:
        $sidebar = 'custom-col-8 offset-lg-2';
        $gunter_sidebar_hide = 'gunter_without_sidebar';
    endif;
}

if ( !empty($_GET['gunter_sidebar_hide']) ) {
    $gunter_sidebar_hide = $_GET['gunter_sidebar_hide'];
}

if ( !empty($_GET['gunter_blog_sidebar']) ) {
    $sidebar = $_GET['gunter_blog_sidebar'];
}

$gunter_blog_layout = !empty($opt_name['gunter_blog_layout']) ? $opt_name['gunter_blog_layout'] : 'uk-container';
if ( !empty($_GET['gunter_blog_layout']) ) {
    $gunter_blog_layout = $_GET['gunter_blog_layout'];
}

if($gunter_blog_grid == 'custom-col-6' || $gunter_blog_grid == 'custom-col-4' || $gunter_blog_grid == 'custom-col-3'):
	$sidebar = 'custom-col-12';
endif;
	
?>

<?php if( $enable_blog_banner == true ): ?>
	<div class="page-title-area uk-page-title" <?php if( !$bg_image == '' ){ ?>style="background-image: url(<?php echo esc_url($bg_image, 'gunter' );?>);"<?php } ?>>
		<div class="uk-container">
			<h1><?php if(!$title == ''){ echo esc_html($title, 'gunter'); }else{ echo esc_html_e('Blog', 'gunter'); } ?></h1>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p class="gunter-seo-breadcrumbs" id="breadcrumbs">','</p>' );
			} else { ?>
				<ul>
					<li><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></li>
					<li><?php if(!$title == ''){ echo esc_html($title, 'gunter'); }else{ echo esc_html_e('Blog', 'gunter'); } ?></li>
				</ul>
			<?php } ?>
		</div>
	</div>
<?php endif; ?>

<section class="blog-area uk-blog uk-section <?php if( $enable_blog_banner == false ): echo $ptb; endif; ?>">
	<div class="<?php echo esc_attr( $gunter_blog_layout ); ?>">
		<div class="custom-row">
			<div class="<?php echo esc_attr( $sidebar ); ?>">
				<div class="custom-row">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post-formats/content',get_post_format());
						endwhile;
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
				<div class="pagination-area">
					<nav aria-label="navigation">
						<?php echo paginate_links( array(
							'format' => '?paged=%#%',
							'prev_text' => '<i class="fa fa-angle-double-left"></i>',
							'next_text' => '<i class="fa fa-angle-double-right"></i>',
							)
						) ?>
					</nav>
				</div>
			</div>

			<?php if( $gunter_sidebar_hide == 'gunter_with_sidebar' ): ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
            </div>   
		</div>
	</div>
</section>

<?php
get_footer();