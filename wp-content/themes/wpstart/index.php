<?php
/*
 * Index Page Template
 * This template is used to show posts.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container'); ?>

	<?php do_action('wpstart_content'); ?>
	
		<?php if ( have_posts() ) : ?>
		
		<?php do_action('wpstart_before_post_loop'); ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			
		<?php do_action('wpstart_after_post_loop'); ?>
						
		<?php else : ?>
					
			<?php get_template_part( 'content', 'none' ); ?>
							
		<?php endif; ?>
	
	<?php do_action('wpstart_after_content'); ?>

<?php do_action('wpstart_after_container'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>