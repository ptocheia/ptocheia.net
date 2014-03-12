<?php
/*
 * Status Content Template
 * This template is used for displaying posts in the Status post format.
 *
 * @package WordPress
 * @subpackage WPstart
 * @since WPstart 1.1.1
 */
?>

<?php if ( is_single() ) { ?>

<?php do_action('wpstart_before_single_post'); ?>
					
	<?php
	wpstart_single_entry_content_start();
	wpstart_single_entry_content();
	wpstart_single_entry_content_end();
	
	wpstart_entry_footer_start();
	wpstart_meta_date();
	wpstart_edit_post_link();
	wpstart_entry_footer_end();
	?>
				
<?php do_action('wpstart_after_single_post'); ?>

<?php } else { ?>

<?php do_action('wpstart_before_post'); ?>
					
	<?php
	wpstart_post_entry_content_start();
	wpstart_single_entry_content();
	wpstart_post_entry_content_end();
	
	wpstart_entry_footer_start();
	wpstart_meta_date();
	wpstart_edit_post_link();
	wpstart_entry_footer_end();
	?>

<?php do_action('wpstart_after_post'); ?>

<?php } ?>