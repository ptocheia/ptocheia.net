<?php
/*
 * 404 Template
 * This template is used when a 404 page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container'); ?>

	<?php do_action('wpstart_content'); ?>
	
		<?php do_action('wpstart_post_no_results_not_found'); ?>
	
	<?php do_action('wpstart_after_content'); ?>

<?php do_action('wpstart_after_container'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>