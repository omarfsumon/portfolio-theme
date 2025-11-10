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


//Metabox Field
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_6911bb78443c8',
	'title' => 'Testimonial Field',
	'fields' => array(
		array(
			'key' => 'field_6911bb788ee0b',
			'label' => 'Client Location',
			'name' => 'client_location',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6911bbcc8ee0c',
			'label' => 'Review',
			'name' => 'review',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonial',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );