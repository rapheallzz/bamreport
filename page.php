<?php
/**
 * The template for displaying all pages
 * @package WordPress
 * @subpackage Gunter
 */
get_header();

$vc_enabled = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);

$page = get_field('hide_page_banner');
if(!$page) { ?>

<div class="page-title-area uk-page-title" <?php if ( has_post_thumbnail() ) { ?> style="background-image: url( <?php the_post_thumbnail_url('full'); ?> );" <?php  } ?> >
	<div class="d-table">
		<div class="uk-container">
			<h1>
				<?php $title = get_the_title();
					if( $title == '' ) {
						echo esc_html_e('No Title', 'gunter');
					} else { the_title(); } ?>
			</h1>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p class="gunter-seo-breadcrumbs" id="breadcrumbs">','</p>' );
			} else { ?>
				<ul>
					<li><a href="<?php echo site_url(); ?>"><?php echo esc_html_e('Home', 'gunter')?></a></li>
					<li><?php 
						$title = get_the_title();
						if( $title == '' ) { echo esc_html_e( 'No Title', 'gunter' ); }else{ the_title(); }?>
					</li>
				</ul>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>

<?php if ($vc_enabled !== 'true' && !gunter_is_elementor() ) {  ?>
	<div class="main-content">
<?php } ?>
	<?php if( !gunter_is_elementor()): ?>
		<div class="uk-container">
	<?php endif; ?>
		<?php
		while ( have_posts() ) :
			the_post();

			$thecontent = get_the_content();
			if( empty( $thecontent ) ){ ?>
				<div class="gunter-single-blank-page"> </div> <?php 
			}
			
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	<?php if( !gunter_is_elementor()): ?>
		</div>
	<?php endif; ?>
<?php if ($vc_enabled !== 'true' && !gunter_is_elementor() ) {  ?>
</div>
<?php } 

get_footer();
