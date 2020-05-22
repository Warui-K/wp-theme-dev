<?php
function wpt_setup_theme(){
    //Register nav menu and add parameters for location, menu-name with translations and text-domain
    //The register_nav_menu() function will automatically call the add_theme_support( ‘menus’ ) function.
    register_nav_menu('primary', __('Primary Menu'), 'wp-theme-dev ');
    register_nav_menu('secondary', __('Secondary Menu'), 'wp-theme-dev ');


    //Support for featured image
    add_theme_support('post-thumbnails');

    //Support for Title Tags
    add_theme_support('title-tag');

    //Support for Logo
    add_theme_support('custom-logo');

    //WP Quads code
    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'wp_theme_header', 'description' => 'WPTheme Header position') );
        }

}