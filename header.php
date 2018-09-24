<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package havana
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
  <meta charset="utf-8">
  <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Havana te queda bien">

  <!-- Jquery -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Styes -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
  <!-- Animation -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/animate.css">
	<script src="<?php echo get_template_directory_uri(); ?>/resources/scrollreveal.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/resources/smoothstate.js"></script>

	<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
