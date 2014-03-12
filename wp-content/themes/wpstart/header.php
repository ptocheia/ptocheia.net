<?php
/*
 * Header Template
 * The area of the page that contains the header.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<?php do_action('wpstart_head'); ?>

<body <?php body_class(); ?>>

<?php do_action('wpstart_before_header'); ?>

<?php do_action('wpstart_header'); ?>

<?php do_action('wpstart_after_header'); ?>

<?php do_action('wpstart_main'); ?>