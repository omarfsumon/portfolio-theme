<?php
// Theme setup
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/portfolio.php';
require_once get_template_directory() . '/inc/testimonial.php';

// functions.php
if ( !class_exists( 'Redux' ) && file_exists( get_template_directory() . '/inc/redux/redux-core/framework.php' ) ) {
    require_once get_template_directory() . '/inc/redux/redux-core/framework.php';
}

if ( ! class_exists( 'Redux' ) ) {
    return;
}