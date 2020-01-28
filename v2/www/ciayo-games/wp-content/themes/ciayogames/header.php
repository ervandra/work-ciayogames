<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ciayo_Games
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ciayogames' ); ?></a>
 <!-- the trigger -->
 <div class="curtain-menu-button"  data-curtain-menu-button>
        <div class="curtain-menu-button-toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
        </div>
    </div>

    <!-- the menu ciayo games   -->
    <div class="curtain-menu">
        <div class="curtain"></div>
        <div class="curtain"></div>
        <div class="curtain"></div>
        <div class="curtain-menu-wrapper">
            <ul class="curtain-menu-list menu vertical">
                <li class="menu-logo">
                    <a href="<?php echo get_permalink(11); ?>"> <img src="<?php echo get_template_directory_uri(11); ?>/assets/images/CIAYO-games-logo-transparan2.png" width="88px" /></a>
                </li>
                <li><a href="<?php echo get_permalink(32); ?>">Our Story</a></li>
                <li><a href="<?php echo get_permalink(35); ?>">Games</a></li>
                <li><a href="<?php echo get_permalink(37); ?>">Careers</a></li>
                <li><a href="<?php echo get_permalink(126); ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div  class="top-bar callout" id="example-menu" data-closable>
        <div class="top-bar-left">
            <ul id="navigation" class="dropdown menu tob-bar-mobile" data-dropdown-menu>
                <li class="menu-logo">
                    <a href="<?php echo get_permalink(11); ?>">  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CIAYO-games-logo.png" width="88px" /></a>
                </li>
                <li><a href="<?php echo get_permalink(32); ?>">Our Story</a></li>
                <li class="games-link-1">
                    <a data-toggle="example-dropdown-right-center">Games ▼</a>
                    <div class="dropdown-pane" data-position="center" data-alignment="center" id="example-dropdown-right-center" data-dropdown data-auto-focus="true">
                        <a class="" href="<?php echo get_permalink(35); ?>">Games All</a>
                        <a class="" href="<?php echo get_permalink(61); ?>">CHIPS: Monster Tap!</a>
                        <a class="" href="<?php echo get_permalink(56); ?>">CHIPS: Heroes Uprising</a>
                        <a class="" href="<?php echo get_permalink(58); ?>">Ciayo Stories</a>
                        <a class="" href="<?php echo get_permalink(54); ?>">Heroes Uprising (Card Game)</a>
                    </div>
                </li>
                <li class="games-link-2"><a href="<?php echo get_permalink(35); ?>">Games</a></li>
                <li><a href="<?php echo get_permalink(37); ?>">Careers</a></li>
                <li><a href="<?php echo get_permalink(126); ?>">Contact Us</a></li>
            </ul>

        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li>
                    <input type="search" class="search-top-bar" placeholder="Search..">
                </li>
                <li>
                    <button type="button" class="button button-bg-search search-clip-gradient"><i class="fas fa-search"></i></button>
                </li>
            </ul>
        </div>

    </div>

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! ciayogames_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'ciayogames-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
