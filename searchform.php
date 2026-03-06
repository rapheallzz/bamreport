<?php
/**
 * Template for displaying search forms in Gunter
 *
 * @package WordPress
 * @subpackage Gunter
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" placeholder="<?php echo esc_attr_x( 'Search here...', 'placeholder', 'gunter' ); ?>"
        class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" required>
    <button type="submit"><i class="fa fa-search"></i></button>
</form>