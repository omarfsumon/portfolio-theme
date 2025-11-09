<?php
/**
 * Omarfolio functions and definitions
 *
 * @package Omarfolio
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// Define theme paths
define('OMAR_PATH', get_template_directory());
define('OMAR_URI', get_template_directory_uri());

/*
 * Sets up theme defaults and registers support for various WordPress features.
 */
function omarfolio_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'omarfolio'),
        'footer' => esc_html__('Footer Menu', 'omarfolio'),
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'omarfolio_setup');


/*
 * satup all pages puth location like "/page/page-about-us.php"
 */
function omarfolio_page_template($template) {
    if (is_page()) {
        $page_slug = get_post_field('post_name', get_queried_object_id());
        $custom_template = locate_template('page/page-' . $page_slug . '.php');
        if ($custom_template) {
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'omarfolio_page_template');