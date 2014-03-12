<?php
/*
 * Single Post Template
 * This template is used when a single post page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container'); ?>

	<?php do_action('wpstart_content'); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>
									
		<?php comments_template( '', true ); ?>
					
		<?php endwhile; ?>
	
	<?php do_action('wpstart_after_content'); ?>

<?php do_action('wpstart_after_container'); ?>

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>