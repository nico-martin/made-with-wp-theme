<?php
/**
 * Do the initial stuff
 * @since  madewithwp-wordpress-starter 1.0.0
 *
 * @return void
 */

if (!function_exists('wp_madewithwp_setup')) :
    function wp_madewithwp_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        // Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        /*
         * Make theme available for translation, translations can be filed in
         * the /language/ directory
         */
        load_theme_textdomain( 'madewithwp', get_template_directory() . '/languages' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        /*
         * This theme uses wp_nav_menu() in two locations
         */
        register_nav_menus( array(
            'header-navigation' => __( 'Menü Header', 'madewithwp' ),
            'footer-navigation' => __( 'Menü Footer', 'madewithwp' )
        ) );

        /*
         * Remove WordPress generator meta tag
         */
        remove_action( 'wp_head', 'wp_generator' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
    }
endif;
add_action('after_setup_theme', 'wp_madewithwp_setup');