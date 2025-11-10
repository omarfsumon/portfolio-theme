<?php
// Theme setup
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/portfolio.php';
require_once get_template_directory() . '/inc/testimonial.php';



/*==================
ACF Functions Start
===================*/

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
//add_filter('acf/settings/show_admin', '__return_false');

// When including the PRO plugin, hide the ACF Updates menu
add_filter('acf/settings/show_updates', '__return_false', 100);

// ACF notice Hide
add_action('admin_head', 'hide_acf_license_notice');

function hide_acf_license_notice() {
    ?>
    <style>
        .acf-admin-notice {
            display: none !important;
        }
        .acf-nav-upgrade-wrap{
            display: none !important;
        }
        .acf-wp-engine {
            display: none !important;
        }
        #tmpl-acf-field-group-pro-features{
            display: none !important;
        }
    </style>
    <?php
}
/*==================
ACF Functions End
===================*/
