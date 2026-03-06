<?php 
/**
 * @package    gunter
 * @author     EnvyTheme <hello@envytheme.com>
 * Websites: https://envytheme.com/
 * Post Format: link
 */
global $opt_name;
// Blog Column
$gunter_blog_grid = !empty($opt_name['gunter_blog_grid']) ? $opt_name['gunter_blog_grid'] : 'custom-col-12';
if ( !empty($_GET['gunter_blog_grid']) ) {
    $gunter_blog_grid = $_GET['gunter_blog_grid'];
}
?>

<div <?php post_class( $gunter_blog_grid ); ?>>
    <div class="single-blog-post <?php if(!has_post_thumbnail()) { echo esc_attr('without-thumb', 'gunter'); } ?>"> 
        <div class="blog-post-content blog-post-link">
            <div class="post_type_link">
                <i class="fa fa-link"></i>
            </div>
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
                <h3><?php the_title(); ?></h3>
            <?php }else{ ?>
                <div class="no-title"></div>
            <?php } ?>

            <div class="link-content">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</div>