<?php

add_action( 'init', 'register_custom_post_type', 9 );
function register_custom_post_type() {
    register_post_type( 'portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'has_archive' => false,
        'supports' => [ 'title', 'thumbnail' ],
        'rewrite' => [ 'slug' => 'portfolio' ],
        'show_in_rest' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon'           => 'dashicons-portfolio',
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 5,
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
            'add_new' => 'Add New',
            'add_new_item' => 'Add Portfolio',
            'edit_item' => 'Edit Portfolio',
            'new_item' => 'New Portfolio',
            'all_items' => 'All Portfolio',
            'view_item' => 'View Portfolio',
            'search_items' => 'Search Portfolio',
            'not_found' => 'No Portfolio found',
            'not_found_in_trash' => 'No Portfolio found in Trash',
            'featured_image' => 'Thumbnail Image',
            'set_featured_image' => 'Set thumbnail image',
            'remove_featured_image' => 'Remove thumbnail image',
            'use_featured_image' => 'Use as thumbnail image',
            'insert_into_item' => 'Insert into portfolio',
            'uploaded_to_this_item' => 'Uploaded to this portfolio',
            'items_list' => 'Portfolio list',
            'items_list_navigation' => 'Portfolio list navigation',
            'filter_items_list' => 'Filter portfolio list',
        ),
    ] );
    
    // প্লেসহোল্ডার চেঞ্জ করুন
    add_filter( 'enter_title_here', 'change_portfolio_title_placeholder' );
    function change_portfolio_title_placeholder( $title ) {
        $screen = get_current_screen();
        if ( 'portfolio' == $screen->post_type ) {
            return 'Enter Project Name';
        }
        return $title;
    }

}




add_action( 'redux/metaboxes/your_theme_options/boxes', 'add_portfolio_metabox' );
function add_portfolio_metabox( $metaboxes ) {

    $box = [
        'id'         => 'portfolio-project-details',
        'title'      => 'Project Details',
        'post_types' => [ 'portfolio' ],
        'position'   => 'normal',
        'priority'   => 'high',
        'sections'   => [
            [
                'id'     => 'project-details-section',
                'title'  => 'Project Information',
                'fields' => [
                    [
                        'id'              => 'project_image',
                        'type'            => 'media',
                        'title'           => 'Main Image',
                        'library_filter'  => [ 'jpg', 'png', 'gif' ],
                    ],
                    [
                        'id'    => 'project_gallery',
                        'type'  => 'gallery',
                        'title' => 'Project Gallery',
                    ],
                    [
                        'id'       => 'client_website',
                        'type'     => 'text',
                        'title'    => 'Client Website URL',
                        'validate' => 'url',
                    ],
                    [
                        'id'    => 'project_date',
                        'type'  => 'date',
                        'title' => 'Project Date',
                    ],
                    [
                        'id'    => 'short_desc',
                        'type'  => 'textarea',
                        'title' => 'Short Description',
                    ],
                ],
            ],
        ],
    ];

    $metaboxes[] = $box;
    return $metaboxes;
}