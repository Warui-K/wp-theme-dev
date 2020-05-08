<?php
function wpt_setup_theme(){
    //Register nav menu and add parameters for location, menu-name with translations and text-domain
    register_nav_menu('primary', __('Primary Menu'), 'wp-theme-dev ');
}