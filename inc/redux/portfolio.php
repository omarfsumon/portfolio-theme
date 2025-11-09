<?php
add_action( 'init', 'register_custom_post_type', 9 );
function register_custom_post_type() {
    register_post_type( 'portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'has_archive' => true,
        'supports' => [ 'title', 'thumbnail' ],
        'rewrite' => [ 'slug' => 'work' ],
        'show_in_rest' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon'           => 'dashicons-portfolio',
        'taxonomies'          => [ 'client' ],

    ] );

}



// BE SURE TO RENAME THE FUNCTION NAMES TO YOUR OWN NAME OR PREFIX
if ( !function_exists( "redux_add_metaboxes" ) ):
    function redux_add_metaboxes($metaboxes) {
        // Declare your sections
        $boxSections = array();
        $boxSections[] = array(
            //'title'         => __('General Settings', 'redux-framework-demo'),
            //'icon'          => 'el-icon-home', // Only used with metabox position normal or advanced
            'fields'        => array(
                array(
                    'id' => 'sidebar',
                    //'title' => __( 'Sidebar', 'redux-framework-demo' ),
                    'desc' => 'Please select the sidebar you would like to display on this page. Note: You must first create the sidebar under Appearance > Widgets.',
                    'type' => 'select',
                    'data' => 'sidebars',
                ),
            ),
        );

        // Declare your metaboxes
        $metaboxes = array();
        $metaboxes[] = array(
            'id'            => 'sidebar',
            'title'         => __( 'Sidebar', 'fusion-framework' ),
            'post_types'    => array( 'page', 'post', 'acme_product' ),
            //'page_template' => array('page-test.php'), // Visibility of box based on page template selector
            //'post_format' => array('image'), // Visibility of box based on post format
            'position'      => 'advanced', // normal, advanced, side
            'priority'      => 'core', // high, core, default, low - Priorities of placement
            'sections'      => $boxSections,
        );

        return $metaboxes;
    }
    // Change {$redux_opt_name} to your opt_name
    add_action("redux/metaboxes/{$redux_opt_name}/boxes", "redux_add_metaboxes");
endif;