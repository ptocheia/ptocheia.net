<?php
/*
 * All Pages Template
 * This template is used when a page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container'); ?>

	<?php do_action('wpstart_content'); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		
		<?php do_action('wpstart_before_page_post'); ?>
		
			<?php do_action('wpstart_page_before_entry_content'); ?>
		
			<?php do_action('wpstart_page_entry_content'); ?>
					
			<?php do_action('wpstart_page_after_entry_content'); ?>

		<?php do_action('wpstart_after_page_post'); ?>
		
		<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
	
	<?php do_action('wpstart_after_content'); ?>

<?php do_action('wpstart_after_container'); ?>

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>