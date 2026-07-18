<?php
/**
 * CyberBridge functions and definitions
 */

if ( ! function_exists( 'cyberbridge_setup' ) ) :
    function cyberbridge_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus
        register_nav_menus(
            array(
                'menu-1'      => esc_html__( 'Primary Menu', 'cyberbridge' ),
                'menu-footer' => esc_html__( 'Footer Menu', 'cyberbridge' ),
            )
        );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'cyberbridge_setup' );

/**
 * Enqueue scripts and styles.
 */
function cyberbridge_scripts() {
    // Theme stylesheet
    wp_enqueue_style( 'cyberbridge-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Outfit Google Font
    wp_enqueue_style( 'cyberbridge-font-outfit', 'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap', array(), null );
    
    // Inter Google Font
    wp_enqueue_style( 'cyberbridge-font-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );

    // FontAwesome Icons (optional but very useful for security elements)
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
}
add_action( 'wp_enqueue_scripts', 'cyberbridge_scripts' );
