<?php

// Setup

// Includes
include(get_theme_file_path('./includes/front/enqueue.php'));
include(get_theme_file_path('./includes/setup.php'));
include(get_theme_file_path('./includes/custom-nav-walker.php'));
include(get_theme_file_path('./includes/widgets.php'));
include(get_theme_file_path('./includes/theme-customizer.php'));
include(get_theme_file_path('./includes/customizer/social.php'));






// Hooks
add_action('wp_enqueue_scripts', 'wpt_enqueue');
add_action('after_setup_theme', 'wpt_setup_theme');
add_action('widgets_init', 'wpt_widgets');
add_action('customize_register', 'wpt_customize_register');
//Shortcodes