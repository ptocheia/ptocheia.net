<?php
/*
 * Attachment Template
 * This template is used when an attachment page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container'); ?>

	<?php do_action('wpstart_content'); ?>
	
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php do_action('wpstart_before_attachment_post'); ?>			
						
			<?php do_action('wpstart_attachment_before_entry_content'); ?>
		
			<?php do_action('wpstart_attachment_entry_content'); ?>

			<?php do_action('wpstart_attachment_after_entry_content'); ?>
			
		<?php do_action('wpstart_after_attachment_post'); ?>

		<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
	
	<?php do_action('wpstart_after_content'); ?>

<?php do_action('wpstart_after_container'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>