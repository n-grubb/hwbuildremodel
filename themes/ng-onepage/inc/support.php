<?php 
/* 
 *  Theme Support File
 */ 

/**
 * Register functionality, initilize plugin functionality
 *
 * @return void
 */
function bf_init()
{
    // Register Menu
    register_nav_menus(array(
        'main_menu'   => 'Navigation items at the top of page.',
        'footer_menu' => 'Navigation items for the footer.'
    ));
}
add_action( 'init', 'bf_init' );
