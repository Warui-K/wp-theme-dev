<?php
function wpt_setup_theme(){
    //Register nav menu and add parameters for location, menu-name with translations and text-domain
    //The register_nav_menu() function will automatically call the add_theme_support( ‘menus’ ) function.
    register_nav_menu('primary', __('Primary Menu'), 'wp-theme-dev ');

    //Support for featured image
    add_theme_support('post-thumbnails');
}