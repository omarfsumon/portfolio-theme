<?php
// Theme setup
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/portfolio.php';
require_once get_template_directory() . '/inc/testimonial.php';

// Codestar লোড
if ( ! class_exists( 'CSF' ) ) {
    require_once get_template_directory() . '/inc/codestar/codestar-framework.php';
}