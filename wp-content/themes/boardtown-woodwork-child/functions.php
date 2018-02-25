<?php
/**
* Boardtown Woodwork Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Boardtown Woodwork
* @since Boardtown Woodwork 1.0
*/

// Enqueue scripts and styles
function boardtown_woodwork_child_scripts(){
	wp_enqueue_style( 'boardtown-woodwork-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'boardtown-woodwork-style' ));
}
add_action( 'wp_enqueue_scripts', 'boardtown_woodwork_child_scripts' );

// Add support for custom logo
add_theme_support( 'custom-logo' );

// Configure custom logo parameters https://developer.wordpress.org/themes/functionality/custom-logo/
function boardtown_woodwork_child_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'boardtown_woodwork_child_custom_logo_setup' );
