<?php
/**
 * The template for displaying the single project
 * @package WordPress
 * @subpackage Gunter
 */
get_header();

// Pagination
$gunter_next_post = get_next_post();
$gunter_prev_post = get_previous_post();

// Options
$bg_image   = get_field('project_single_page_background_image');
$title      = get_the_title();
$enable_project_banner = $opt_name['enable_project_banner'];
$ptb = 'ptb-140-70';

?>

<?php if( $enable_project_banner == true ): ?>
    <div class="page-title-area uk-page-title" <?php if(!$bg_image == ''){?>style="background-image: url(<?php echo esc_url($bg_image );?>);"<?php } ?>>
        <div class="uk-container">
            <h1><?php if(!$title == ''){ echo esc_html($title); }else{ echo esc_html_e('Project Details', 'gunter'); } ?></h1>

            <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p class="gunter-seo-breadcrumbs" id="breadcrumbs">','</p>' );
			} else { ?>
                <ul>
                    <li><a href="<?php echo site_url(); ?>"> <?php bloginfo( 'name' ); ?></a></li>
                    <li><?php if(!$title == ''){ echo esc_html($title); }else{ echo esc_html_e('Project Details', 'gunter'); } ?></li>
                </ul>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>


<section class="project-details-area uk-project-details uk-section <?php if( $enable_project_banner == false ): echo esc_attr( $ptb ); endif; ?>">
    <div class="uk-container">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="uk-grid uk-flex project-details">
            <div class="project-details-img uk-width-expand">
                <?php the_post_thumbnail();?>
            </div>

         
            <div class="item uk-width-1-5">
                <div class="project-details-info">
                    <?php if( have_rows('project_single__descriptions') ): ?>
                        <ul>
                        <?php while( have_rows('project_single__descriptions') ): the_row(); 
                            // vars
                            $title = get_sub_field('label_name');
                            $lable_content = get_sub_field('label_content');
                            ?>
                            <li><span> <?php echo esc_html( $title )?></span>  <?php echo esc_html( $lable_content )?></li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>

        <div class="project-details-desc">
            <?php the_content(); ?>
        </div>

        <?php if($gunter_prev_post || $gunter_next_post) { ?>
            <div class="project-next-and-prev">
                <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s">    
                    <div class="item">
                        <?php if ($gunter_next_post): ?>
                            <a href="<?php echo get_the_permalink($gunter_next_post); ?>" class="uk-button uk-button-default">
                                <?php echo esc_html_e("Prev Project", "gunter"); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="item uk-text-right">
                        <?php if ($gunter_prev_post): ?>
                            <a href="<?php echo get_the_permalink($gunter_prev_post); ?>" class="uk-button uk-button-default">
                                <?php echo esc_html_e("Next Project", "gunter"); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php endwhile; ?>
    </div>
</section> 
<?php

get_footer();
?>