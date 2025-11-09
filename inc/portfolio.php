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


        
    //Meta Fields
    if ( class_exists( 'CSF' ) ) {

        $prefix = 'portfolio_meta';
        CSF::createMetabox( $prefix, array(
            'title'     => 'Project Details',
            'post_type' => 'portfolio',
            'context'   => 'normal',
            'priority'  => 'high',
        ) );

        // ফিল্ড যোগ
        CSF::createSection( $prefix, array(
            'fields' => array(

                array(
                    'id'    => 'main_image',
                    'type'  => 'media',
                    'title' => 'Main Image',
                ),

                array(
                    'id'    => 'gallery',
                    'type'  => 'gallery',
                    'title' => 'Project Gallery',
                ),

                array(
                    'id'    => 'website',
                    'type'  => 'text',
                    'title' => 'Website URL',
                    'validate' => 'csf_validate_url',
                ),

                array(
                    'id'    => 'date',
                    'type'  => 'date',
                    'title' => 'Project Date',
                ),

                array(
                    'id'    => 'desc',
                    'type'  => 'textarea',
                    'title' => 'Short Description',
                ),

            )
        ) );
    }

}

