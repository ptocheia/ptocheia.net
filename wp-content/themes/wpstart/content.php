<?php
/*
 * Content Template
 * This template is used for displaying content.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php if ( is_single() ) { ?>

<?php do_action('wpstart_before_single_post'); ?>

	<?php do_action('wpstart_single_before_entry_content'); ?>
		
	<?php do_action('wpstart_single_entry_content'); ?>
					
	<?php do_action('wpstart_single_after_entry_content'); ?>
				
<?php do_action('wpstart_after_single_post'); ?>

<?php } else { ?>

<?php do_action('wpstart_before_post'); ?>

	<?php do_action('wpstart_post_before_entry_content'); ?>

	<?php do_action('wpstart_post_entry_content'); ?>
					
	<?php do_action('wpstart_post_after_entry_content'); ?>

<?php do_action('wpstart_after_post'); ?>

<?php } ?>