<?php 

/**
 * Register and enqueue theme styles
 *
 * @return void
 */
function bf_styles()
{
    global $wp_styles;

    $dev = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? '' : '.min';
    $dev = '';

	// Add Normalize.css
    wp_register_style(
        'normalize'
        ,get_template_directory_uri() . '/assets/css/normalize'.$dev.'.css'
    );
    // Add Normalize.css
    wp_register_style(
        'font-awesome'
        ,get_template_directory_uri() . '/assets/css/font-awesome.min.css'
    );
    // Add Slick.css
    wp_register_style(
        'slick'
        ,'//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'
    );
    // Add Main Stylesheet File
    wp_register_style(
        'site_main'
        ,get_template_directory_uri() . '/assets/css/main'.$dev.'.css'
        ,array('normalize')
    );
    // Add IE Stylesheet File
    wp_register_style(
        'site_ie'
        ,get_template_directory_uri() . '/assets/css/ie'.$dev.'.css'
    );
    $wp_styles->add_data( 'site_ie', 'conditional', 'IE' );


    if( ! is_admin() )
    {
        wp_enqueue_style( 'font-awesome' );
        wp_enqueue_style( 'slick' );
        wp_enqueue_style( 'site_main' );
        wp_enqueue_style( 'site_ie' );
    }
}
add_action( 'wp_enqueue_scripts', 'bf_styles' );

/**
 * Register and enqueue theme scripts
 *
 * @return void
 */
function bf_scripts()
{
    $dev = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? '' : '.min';
    $dev = '';

    // Add Modernizr js File
    wp_register_script(
        'modernizr'
        ,get_template_directory_uri() . '/assets/js/vendor/modernizr.min.js'
        ,false
        ,'2.8.2'
    );
    // Add Slick.css
    wp_register_script(
        'slick'
        ,'//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'
    );
    // Add Plugins js File
    wp_register_script(
        'site_plugins'
        ,get_template_directory_uri() . '/assets/js/plugins'.$dev.'.js'
        ,array('jquery')
        ,null
        ,true
    );
    // Add Global js File
    wp_register_script(
        'site_main'
        ,get_template_directory_uri() . '/assets/js/main'.$dev.'.js'
        ,array('jquery', 'slick', 'site_plugins')
        ,null
        ,true
    );
    if( ! is_admin() )
    {
        wp_enqueue_script(  'modernizr' );
        wp_enqueue_script(  'site_main' );
        wp_localize_script( 'site_main', 'BF', array('ajaxurl' => admin_url( 'admin-ajax.php' )) );
    }
}
add_action( 'wp_enqueue_scripts', 'bf_scripts' );
