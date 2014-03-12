<?php
/*
 * Sidebar widget area.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div class="sidebar sidebar-first">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<?php endif; ?>
		
<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
<div class="sidebar sidebar-second">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>
<?php endif; ?>