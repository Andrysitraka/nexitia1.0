<?php
/**
 * The template includes necessary functions for theme.
 *
 * @package sanjose
 * @since 1.0.0
 *
 */

if ( ! isset( $content_width ) ) {
    $content_width = 960; // pixel
}


// ------------------------------------------
// Global define for theme
// ------------------------------------------
defined( 'SANJOSE_URI' )    or define( 'SANJOSE_URI',    get_template_directory_uri() );
defined( 'SANJOSE_T_PATH' ) or define( 'SANJOSE_T_PATH', get_template_directory() );
defined( 'SANJOSE_F_PATH' ) or define( 'SANJOSE_F_PATH', SANJOSE_T_PATH . '/include' );

// ------------------------------------------
// Framework integration
// ------------------------------------------

// Include all styles and scripts.
require_once SANJOSE_T_PATH .'/include/custom/inc.php';

// ------------------------------------------
// Setting theme after setup
// ------------------------------------------
if ( ! function_exists( 'sanjose_after_setup' ) ) {
    function sanjose_after_setup()
    {
        load_theme_textdomain( 'sanjose', SANJOSE_T_PATH .'/languages' );

        register_nav_menus(
            array(
                'top-menu' => esc_html__( 'Top menu', 'sanjose' ),
            )
        );

        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
    }
}
add_action( 'after_setup_theme', 'sanjose_after_setup' );
