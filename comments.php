<?php
/**
 * The template for displaying comments
 * @package WordPress
 * @subpackage Gunter
 */

// Post is protected by a password
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="post-comments">
	<?php
	if ( have_comments() ) :
		?>
		<h3 class="title mt-0">
			<?php
			$gunter_comment_count = get_comments_number();
			if ( '1' === $gunter_comment_count ) {
				printf(
					esc_html( '1 Comment', 'gunter' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf(
					esc_html( _nx( '%1$s Comments', '%1$s Comments', $gunter_comment_count, 'comments title', 'gunter' ) ),
					number_format_i18n( $gunter_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3>

		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'li',
				'short_ping' => true,
				'avatar_size' => 85,
			) );
			?>
		</ul>

		<?php
		the_comments_navigation();
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'gunter' ); ?></p>
			<?php
		endif;
	endif; 
	comment_form();
	?>

</div>
