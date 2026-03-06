<?php 
/**
 * @package    gunter
 * @author     EnvyTheme <hello@envytheme.com>
 * Websites: https://envytheme.com/
 * Post Format: video
 */
global $opt_name;

if(function_exists('get_field')){
    $link = get_field('video_link');
}else{
    $link = '';
}

if( isset( $opt_name['enable_lazyloader'] ) ):
    $is_lazyloader = $opt_name['enable_lazyloader'];
else:
    $is_lazyloader = true;
endif;

// Post thumb size
if(isset ($opt_name['gunter_blog_sidebar'] ) ) {
    if( $opt_name['gunter_blog_sidebar'] == 'gunter_without_sidebar' ):
        $thumb_size = 'full';
    else:
        $thumb_size = 'gunter_post_image';
    endif;
    }else {
        $thumb_size = 'gunter_post_image';
}
 
// Blog Column
$gunter_blog_grid = !empty($opt_name['gunter_blog_grid']) ? $opt_name['gunter_blog_grid'] : 'custom-col-12';
if ( !empty($_GET['gunter_blog_grid']) ) {
    $gunter_blog_grid = $_GET['gunter_blog_grid'];
}
?>

<div <?php post_class( $gunter_blog_grid ); ?>>
    <div class="single-blog-post <?php if(!has_post_thumbnail()) { echo esc_attr('without-thumb', 'gunter'); } ?>">
        <?php if (has_post_thumbnail()) { ?>
            <?php 
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
            <?php 
            } else { ?>
                <div class="blog-post-image">
                    <a href="<?php the_permalink() ?>" class="blog-image">
                        <?php if( $is_lazyloader == true ): ?>
                            <img class="smartify" sm-src="<?php the_post_thumbnail_url('gunter_post_image') ?>" alt="<?php echo esc_attr('blog-image', 'gunter')?>">
                        <?php else: ?>
                            <img src="<?php the_post_thumbnail_url('gunter_post_image') ?>" alt="<?php echo esc_attr('blog-image', 'gunter')?>">
                        <?php endif; ?>  
                    </a>
                </div>
                <?php
            } 
        } ?>
        <div class="blog-post-content">
            <?php if (!has_post_thumbnail()) { ?>
                <div class="post_type_icon">
                    <i class="fa fa-play pl-4"></i>
                </div> 
            <?php } ?>

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
                        <?php comments_number(); ?>
                    </li>
                </ul>
            <?php } ?>
         
            <?php if (get_the_title()){ ?>
                <h3><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 15, ' ' ); ?></a></h3>
            <?php }else{ ?>
                <div class="no-title"></div>
            <?php } ?>
            <p><?php echo wp_trim_words( get_the_content(), 40, ' ' ); ?></p>

            <div class="read-more-btn">
                <a href="<?php the_permalink() ?>" class="read-more">
                    <?php if(isset($opt_name['post_read_more'] ) && !$opt_name['post_read_more'] == ''){ echo esc_html($opt_name['post_read_more'], 'gunter'); }else{ echo esc_html_e('Read More','gunter'); } ?>
                </a>
            </div>
        </div>
    </div>
</div>