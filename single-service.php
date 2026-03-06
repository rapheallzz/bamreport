<?php
/**
 * The template for displaying the single srvices
 * @package WordPress
 * @subpackage Gunter
 */
get_header();

// Options
$bg_image = get_field('service_single_page_background_image');
$title = get_the_title();
$enable_services_banner = $opt_name['enable_services_banner'];
$ptb = 'ptb-140-70';
?>

<?php if( $enable_services_banner == true ): ?>
    <div class="page-title-area uk-page-title" <?php if(!$bg_image == ''){?>style="background-image: url(<?php echo esc_url($bg_image );?>);"<?php } ?>>
        <div class="uk-container">
            <h1><?php if(!$title == ''){ echo esc_html($title); }else{ echo esc_html_e('Services Details', 'gunter'); } ?></h1>
            <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p class="gunter-seo-breadcrumbs" id="breadcrumbs">','</p>' );
			} else { ?>
                <ul>
                    <li><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></li>
                    <li><?php if(!$title == ''){ echo esc_html($title); }else{ echo esc_html_e('Services Details', 'gunter'); } ?></li>
                </ul>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>

<section class="services-details-area uk-services-details uk-section <?php if( $enable_services_banner == false ): echo esc_attr( $ptb ); endif; ?>">
    <div class="uk-container">
        <article class="uk-article services-details">
            <div class="uk-grid uk-flex">
                <div class="inner uk-width-expand">
                    <div class="services-details-desc">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            $images = get_field('services_slider');
                            if( !empty( $images) ) : ?>
                            <div class="services-image-slides owl-carousel owl-theme">
                                <?php
                                foreach($images as $image) { ?>
                                    <div class="item" style="background-image: url(<?php echo esc_url($image)?>);"></div>
                                <?php
                                } ?>
                            </div>
                            <?php
                            endif; ?>
                        <?php the_content(); ?>

                        <?php if( have_rows('single_services_faq') ): ?>
						<div class="our-work-benefits">
                            
                            <ul class="accordion">

                            <?php while( have_rows('single_services_faq') ): the_row(); 
                                // vars
                                $ans = get_sub_field('services_question');
                                $que = get_sub_field('services_answer');
                                if( $ans != '' && $que != '' ): ?>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="flaticon-plus"></i>
                                            <?php echo esc_html( $ans ); ?>
                                        </a>
                                        <p class="accordion-content"> <?php echo esc_html( $que ); ?></p>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </ul>
						</div>
                        <?php endif; ?>
                        
                    </div>
                    <?php 
                    endwhile; ?>
                </div>

                <div class="uk-sidebar uk-width-1-5 uk-flex-first@l uk-first-column">
                    <div class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" placeholder="<?php echo esc_attr_x( 'Search here...', 'placeholder', 'gunter' ); ?>"
                                class="uk-input" value="<?php echo get_search_query(); ?>" name="s" id="s" required>
                            <button type="submit"><i class="flaticon-search"></i></button>
                        </form>
                    </div>

                    <div class="widget service_list">
                        <ul><?php 
                            global $loop;
                            $all_posts = array( 'post_type' => 'service', 'posts_per_page' => -1 );
                            $loop = new WP_Query( $all_posts );
                            if($loop->have_posts()){
                                while($loop->have_posts()){
                                     $loop->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" class="<?php gunter_if_current('active'); ?>"><?php the_title(); ?> <i class="flaticon-right"></i></a></li>
                                <?php
                                }
                            }
                            wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="widget widget_download">

                        <?php $download = get_field( "single_services_sidebar_download_title" );
                            if(!$download == ''){ ?>

                                <h3 class="widget-title"><?php echo esc_html( $download )?></h3>
                                <div class="bar"></div>

                        <?php } ?>
                        
                        <?php if( have_rows('single_services_sidebar_download_item') ): ?>
                            <ul>
                            <?php while( have_rows('single_services_sidebar_download_item') ): the_row(); 
                                // vars
                                $title = get_sub_field('title');
                                $link = get_sub_field('link');
                                if( $title != '' && $link != '' ): ?>
                                    <li>
                                        <?php if( $link ): ?>
                                            <a href="<?php echo esc_url( $link ); ?>">
                                        <?php endif; ?>
                                            <?php echo esc_html( $title ); ?>
                                            <i class="flaticon-edit"></i>
                                        <?php if( $link ): ?>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<?php get_footer();