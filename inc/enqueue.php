<?php
function tailwind_portfolio_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' ) ?: '1.0.0';

    // === CSS ===
    wp_enqueue_style( 'portfolio-icon', get_stylesheet_directory_uri() . '/assets/css/icon.css', [], $theme_version );
    wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css', [], $theme_version );
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', [], $theme_version );
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', [], $theme_version );
    wp_enqueue_style( 'portfolio-style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], $theme_version );

    // === JS ===
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/assets/js/isotope.js', [ 'jquery' ], '2.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', [ 'jquery' ], '0.9.9', true );
    wp_enqueue_script( 'alpinejs', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', [], null, true );
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', [ 'jquery' ], '2.3.4', true );
    wp_enqueue_script( 'tilt-jquery', get_stylesheet_directory_uri() . '/assets/js/tilt.jquery.js', [ 'jquery' ], $theme_version, true );
    wp_enqueue_script( 'wow-js', get_stylesheet_directory_uri() . '/assets/js/wow.min.js', [], '1.2.1', true );
    wp_enqueue_script( 'portfolio-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', [ 'jquery', 'isotope', 'magnific-popup', 'owl-carousel', 'wow-js' ], $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'tailwind_portfolio_enqueue_assets' );

/* =============================================
   Add 'defer' to all specified JS files
   ============================================= */
add_filter( 'script_loader_tag', function( $tag, $handle, $src ) {
    $defer_scripts = [
        'alpinejs',
        'wow-js',
        'owl-carousel',
        'magnific-popup',
        'isotope',
        'tilt-jquery',
        'portfolio-custom'
    ];

    if ( in_array( $handle, $defer_scripts, true ) && false === strpos( $tag, 'defer' ) ) {
        $tag = str_replace( '<script ', '<script defer ', $tag );
    }

    return $tag;
}, 10, 3 );