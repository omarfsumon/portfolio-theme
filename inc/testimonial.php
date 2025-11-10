<?php
add_action( 'init', 'register_testimonial_post_type', 9 );

function register_testimonial_post_type() {
    register_post_type( 'testimonial', [
        'label' => 'Testimonial',
        'public' => true,
        'has_archive' => false,
        'supports' => [ 'title', 'thumbnail' ],
        'rewrite' => false,
        'query_var' => false,
        'exclude_from_search' => true,
        'show_in_rest' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-star-half',
        'publicly_queryable' => false,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 6,
        'labels' => array(
            'name' => 'Testimonial',
            'singular_name' => 'Testimonial',
            'add_new' => 'Add New',
            'add_new_item' => 'Add Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'all_items' => 'All Testimonial',
            'search_items' => 'Search Testimonial',
            'not_found' => 'No Testimonial found',
            'not_found_in_trash' => 'No Testimonial found in Trash',
            'featured_image' => 'Client Image',
            'set_featured_image' => 'Set Client Image',
            'remove_featured_image' => 'Remove Client Image',
            'use_featured_image' => 'Use as Client Image',
            'insert_into_item' => 'Insert into testimonial',
            'uploaded_to_this_item' => 'Uploaded to this testimonial',
            'items_list' => 'Testimonial list',
            'items_list_navigation' => 'Testimonial list navigation',
            'filter_items_list' => 'Filter testimonial list',
        ),
    ] );

    //Meta Fields
    if ( class_exists( 'CSF' ) ) {

        $prefix = 'testimonial_meta';

        CSF::createMetabox( $prefix, array(
            'title'     => 'Testimonial Details',
            'post_type' => 'testimonial',
            'context'   => 'normal',
            'priority'  => 'high',
            'show_in_rest' => true,
            'show_ui' => true,
        ) );

        // ফিল্ড যোগ
        CSF::createSection( $prefix, array(
            'fields' => array(

                array(
                    'id'    => 'client_location',
                    'type'  => 'text',
                    'title' => 'Client Location',
                ),

                array(
                    'id'    => 'review',
                    'type'  => 'textarea',
                    'title' => 'Review',
                    'placeholder' => 'Enter the review',
                    'rows' => 4,
                ),
            )
        ) );
    }

    // প্লেসহোল্ডার চেঞ্জ করুন
    add_filter( 'enter_title_here', 'change_testimonial_title_placeholder' );
    function change_testimonial_title_placeholder( $title ) {
        $screen = get_current_screen();
        if ( 'testimonial' == $screen->post_type ) {
            return 'Client Name';
        }
        return $title;
    }
}
