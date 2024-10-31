<?php
if ( ! function_exists( 'esqueleto_setup' ) ) :

function esqueleto_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'esqueleto', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    /* Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
    add_post_type_support( 'page', 'excerpt' );

    /*
     * Enable support for custom logos.
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    /*
     * Enable wide alignment support for Gutenberg blocks.
     */
    add_theme_support( 'align-wide' );

    /*
     * Enable responsive embeds.
     */
    add_theme_support( 'responsive-embeds' );

    /*
     * Set up support for selective refresh of widgets in the customizer.
     */
    add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // esqueleto_setup

add_action( 'after_setup_theme', 'esqueleto_setup' );


function esqueleto_enqueue_scripts() {
    wp_enqueue_style( 'esqueleto-reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'esqueleto-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'esqueleto_enqueue_scripts' );

function esqueleto_add_elementor_support() {
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'esqueleto_add_elementor_support' );

function esqueleto_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'esqueleto_content_width', 800 );
}
add_action( 'after_setup_theme', 'esqueleto_content_width', 0 );
