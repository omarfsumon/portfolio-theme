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
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => 3,
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

    //Meta Fields
    if ( class_exists( 'CSF' ) ) {

        $prefix = 'portfolio_meta';

        CSF::createMetabox( $prefix, array(
            'title'     => 'Project Details',
            'post_type' => 'portfolio',
            'context'   => 'normal',
            'priority'  => 'high',
            'show_in_rest' => true,
            'show_ui' => true,
        ) );

        // ফিল্ড যোগ
        CSF::createSection( $prefix, array(
            'fields' => array(

                array(
                    'id'    => 'full_image',
                    'type'  => 'media',
                    'title' => 'Full Image',
                ),

                array(
                    'id'    => 'website',
                    'type'  => 'text',
                    'title' => 'Website URL',
                    'validate' => 'csf_validate_url',
                    'placeholder' => 'https://example.com',
                ),

                array(
                    'id'    => 'desc',
                    'type'  => 'textarea',
                    'title' => 'Short Description',
                    'placeholder' => 'Enter the short description',
                    'rows' => 4,
                ),
            )
        ) );
    }

    // প্লেসহোল্ডার চেঞ্জ করুন
    add_filter( 'enter_title_here', 'change_portfolio_title_placeholder' );
    function change_portfolio_title_placeholder( $title ) {
        $screen = get_current_screen();
        if ( 'portfolio' == $screen->post_type ) {
            return 'Enter Project Name';
        }
        return $title;
    }

    ?>
        <style>
            .csf-field input { width: 100% !important; }
            .csf-field { display: flex; flex-direction: column; gap: 5px; }
            .csf-field .csf-fieldset { width: 100% !important; }
        </style>
    <?php
}
