<?php
/*
 * Comments Template
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e('Protected Comments: Please enter your password to view comments.', 'wpstart'); ?></p>
</div>
<?php 
return; 
endif; ?>

	<?php if ( have_comments() ) : ?>
	<h3 id="comments-title">
	<?php printf( _n('One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'wpstart' ), number_format_i18n( get_comments_number()), '<em>' . get_the_title() . '</em>' ); ?>
	
	<?php $icon = includes_url('images/rss.png'); ?>
	<span class="comments-rss"><img style='border:0' width='10' height='10' src='<?php echo $icon ?>' alt='RSS' /> <?php post_comments_feed_link( __('Comments (RSS)', 'wpstart')); ?></span>	
	</h3>
	
	<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
	<div class="navigation">
		<div class="previous-comments"><?php previous_comments_link( __('&laquo; Older Comments', 'wpstart') ); ?></div>
		<div class="next-comments"><?php next_comments_link( __('Newer Comments &raquo;', 'wpstart') ); ?></div>
	</div>
	<?php endif; ?>

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
	<div class="navigation">
		<div class="previous-comments"><?php previous_comments_link( __( '&laquo; Older Comments', 'wpstart' ) ); ?></div>
		<div class="next-comments"><?php next_comments_link( __('Newer Comments &raquo;', 'wpstart') ); ?></div>
	</div>
	<?php endif; ?>

	<?php else : // if there are no comments
	
		if ( ! comments_open() && get_comments_number() ) : // if comments are closed ?>
		<p class="nocomments"><?php _e('Comments are closed.', 'wpstart'); ?></p>
		<?php endif; // end comments_open() ?>

	<?php endif; // end have_comments() ?>

	<?php comment_form(); ?>
</div>