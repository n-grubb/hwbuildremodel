<?php

/*
 * Theme Boostrap
 * File is used only to load in the necessary files for the theme
 * There shouldn't be any functions added in here
 *
 * Also please keep in mind that only presentation functionality
 * should be added inside the theme. Any additional functionality
 * posttypes, taxonomies, etc should be added as plugins to allow
 * the theme to be changed without affecting content.
 */

// Remove unnecessary items from head
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

// Grab path for includes
$theme_path = get_template_directory();

/**
 * Include the theme support file
 * Contains logic for setting up theme support items
 */

include_once $theme_path . '/inc/support.php';

/**
 * Include the theme assets file
 * Contains logic for enqueueing styles and scripts
 */

include_once $theme_path . '/inc/assets.php';

/* Shortcodes */
//include_once $theme_path . '/inc/shortcodes/shortcode.php';
