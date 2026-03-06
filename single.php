<?php global $opt_name;
/**
 * The template for displaying all single posts
 * @package gunter
 */
get_header();

// Post Pagination
$gunter_next_post = get_next_post();
$gunter_prev_post = get_previous_post();

// Single Posts Vido And Images
if(function_exists('get_field')){
	$images 	= get_field('gallery_slider');
	$link 		= get_field('video_link');
	$bg_image 	= get_field('blog_single_page_background_image');
}else{
	$images 	= '';
	$link   	= '';
	$bg_image   = '';
}

// Banner Title & Background Image
$title = get_the_title();

if ( get_option( 'page_for_posts' ) ) {
	$blog_link = get_permalink( get_option( 'page_for_posts' ));
} else {
	$blog_link = home_url( '/' );
}

// Lasy loader
if( isset( $opt_name['enable_lazyloader'] ) ):
	$is_lazyloader = $opt_name['enable_lazyloader'];
else:
	$is_lazyloader = true;
endif; 

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

<div class="page-title-area uk-page-title" <?php if(!$bg_image == ''){?>style="background-image: url(<?php echo esc_url($bg_image, 'gunter' );?>);"<?php } ?>>
	<div class="uk-container">

		<?php while ( have_posts() ) : the_post(); ?>
		<h1> <?php if($title == '') { echo esc_html__('No Title', 'gunter'); }else { the_title(); } ?></h1>

		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p class="gunter-seo-breadcrumbs" id="breadcrumbs">','</p>' );
			} else { ?>
				<ul>
					<li><a href="<?php echo esc_url($blog_link, 'gunter'); ?>"><?php echo esc_html_e('Blog', 'gunter')?> </a></li>
					<li><?php if($title == '') { echo esc_html__('No Title', 'gunter'); }else{ the_title(); }?></li>
				</ul>
			<?php } ?>
		<?php endwhile; ?>

	</div>
</div>

<!-- Start Post Details -->
<section class="blog-details-area uk-blog-details uk-section">
	<div class="<?php echo esc_attr( $gunter_blog_layout ); ?>">
		<div class="uk-article blog-details">
			<div class="custom-row inner uk-width-expand">
				<div class="<?php echo esc_attr( $sidebar ); ?>">
					<?php while ( have_posts() ) : the_post(); ?>

						<!-- Start Post Formt Video -->
						<?php if ( has_post_format( 'video' )) {
							if (has_post_thumbnail()) { 
								if (!$link == '' ) { ?>
									<div class="single-blog-video" style="background-image: url('<?php the_post_thumbnail_url('gunter_post_image') ?>');">
										<div class="d-table">
											<div class="d-table-cell">
												<a href="<?php echo esc_url($link, 'gunter'); ?>" class="play-link popup-youtube">
													<i class="fa fa-play"></i>
													<div class="sonar-wrapper">
														<div class="sonar-emitter">
															<div class="sonar-wave"></div>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								<?php } else { ?>
									<div class="blog-post-image">
										<a href="<?php the_permalink() ?>" class="blog-image">
											<?php if( $is_lazyloader == true ): ?>
												<img class="smartify" sm-src="<?php the_post_thumbnail_url('gunter_post_image') ?>" alt="<?php esc_attr('blog image', 'gunter')?>">
											<?php else: ?>
												<img src="<?php the_post_thumbnail_url('gunter_post_image') ?>" alt="<?php esc_attr('blog image', 'gunter')?>">
											<?php endif; ?>
										</a>
									</div>
						<?php } } } ?>
						<!-- End Post Formt Video -->

						<!-- Start Post Format Gallery-->
						<?php if ( has_post_format( 'gallery' )) { ?>
							<?php if( $images ): ?>
								<div class ="single-blog-post-slider owl-carousel owl-theme">
									<?php foreach( $images as $image ): ?>
										<div class="single-blog-post-item" style="background-image: url(<?php echo esc_url($image, 'gunter'); ?>);">
										</div>
									<?php endforeach; ?>

									<?php if(has_post_thumbnail()):?>
										<div class="single-blog-post-item" style="background-image: url(<?php the_post_thumbnail_url('gunter_post_image') ?>);"> </div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						<?php } ?>
						<!-- End Post Format Gallery-->	

						<?php if ( !has_post_format( 'gallery' ) && !has_post_format( 'video' )) {
							if ( has_post_thumbnail() ) { ?>
								<div class="article-img">
									<?php the_post_thumbnail('gunter_post_image'); ?> 
								</div>
						<?php } } ?>	
								
						<div class="article-text <?php if ( !has_post_thumbnail() ) { echo "without-thumb"; } ?>">
							<div class="blog-details-content">
								<?php if( isset( $opt_name['is_post_meta'] ) && $opt_name['is_post_meta'] == true ) { ?>
									<ul class="entry-meta">
										<li>
											<i class="fa fa-user"></i> 
											<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>">
												<?php echo get_the_author(); ?>
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i> 
											<?php the_time('F j, Y'); ?>
										</li>
										<li>
											<i class="fa fa-comment-o"></i> 
											<?php 
											/*$zero = esc_html_e('0 Comment', 'gunter');
											$one = esc_html_e('1 Comment', 'gunter');
											$more = esc_html_e('% Comments', 'gunter');
											comments_number( $zero, $one, $more );
											*/
											comments_number(); ?>
										</li>
									</ul> 
								<?php } ?>
								<?php the_content(); ?>

								<?php wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gunter' ),
									'after'  => '</div>',
								) ); ?>
							 
								<?php if (has_tag()) {  ?>
									<ul class="tag-list">	
										<li class="title"><?php echo esc_html__('Tags:', 'gunter')?></li>
										<?php if(get_the_tag_list()) { echo get_the_tag_list('<li>',' ','</li>'); } ?>
									</ul>
								<?php } ?>
							</div>
						</div>

						<?php if($gunter_prev_post || $gunter_next_post) { ?>
							<div class="post-controls-buttons uk-grid uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s">
								<div class="item">
									<?php if ($gunter_next_post): ?>
										<a href="<?php echo get_the_permalink($gunter_next_post); ?>" class="uk-button uk-button-default">
											<?php echo esc_html__("Prev Post", "gunter"); ?>
										</a>
									<?php endif; ?>
								</div>

								<div class="item uk-text-right">
									<?php if ($gunter_prev_post): ?>
										<a href="<?php echo get_the_permalink($gunter_prev_post); ?>" class="uk-button uk-button-default">
											<?php echo esc_html__("Next Post", "gunter"); ?>
										</a>
									<?php endif; ?>
								</div>
							</div>
						<?php } ?>
								
						<div class="post-comments">
							<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
						</div>
					<?php endwhile; ?>
				</div>

				<?php if( $gunter_sidebar_hide == 'gunter_with_sidebar' ): ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- End Post Details -->
	
<?php get_footer();
