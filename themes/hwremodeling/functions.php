<?php

function hw_theme_enqueue_styles() {

    // $parent_style = 'parent-style';
    // wp_enqueue_style( $parent_style, get_template_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_style( 
	 	'webfonts',
	 	'https://fonts.googleapis.com/css?family=Oswald:300,400,700|Roboto:300,400,500,700'
	);

    wp_enqueue_style( 
    	'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'site_main', 'webfonts' )
    );

}
add_action( 'wp_enqueue_scripts', 'hw_theme_enqueue_styles' );