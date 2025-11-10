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

//Metabox Field
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_6911ad9814464',
	'title' => 'Portfolio Details',
	'fields' => array(
		array(
			'key' => 'field_6911ae94c464f',
			'label' => 'Project URL',
			'name' => 'project_url',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6911ad986f300',
			'label' => 'Full Image',
			'name' => 'full_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'full',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
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