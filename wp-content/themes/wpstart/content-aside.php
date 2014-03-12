<?php
/*
 * Aside Content Template
 * This template is used for displaying posts in the Aside post format.
 *
 * @package WordPress
 * @subpackage WPstart
 * @since WPstart 1.1.1
 */
?>

<?php if ( is_single() ) { ?>

<?php do_action('wpstart_before_single_post'); ?>

	<?php do_action('wpstart_single_entry_content'); ?>
					
	<?php
	wpstart_entry_footer_start();
	wpstart_meta_date();
	wpstart_meta_categories();
	wpstart_meta_tags();
	wpstart_edit_post_link();
	wpstart_entry_footer_end();
	?>
				
<?php do_action('wpstart_after_single_post'); ?>

<?php } else { ?>

<?php do_action('wpstart_before_post'); ?>

	<?php do_action('wpstart_post_entry_content'); ?>
					
	<?php
	wpstart_entry_footer_start();
	wpstart_meta_date();
	wpstart_edit_post_link();
	wpstart_entry_footer_end();
	?>

<?php do_action('wpstart_after_post'); ?>

<?php } ?>