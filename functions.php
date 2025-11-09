<?php
// Theme setup
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/redux/portfolio.php';

if ( !class_exists( 'Redux' ) && file_exists( get_template_directory() . '/inc/redux/ReduxCore/framework.php' ) ) {
    require_once get_template_directory() . '/inc/redux/ReduxCore/framework.php';
}