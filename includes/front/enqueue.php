<?php

function wpt_enqueue(){

    $uri = get_theme_file_uri();
    $ver = WPT_DEV_MODE ? time() : false;

    wp_register_style('wpt_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [],$ver);
    wp_register_style('wpt_bootstrap',$uri . '/assets/css/bootstrap.css', [],$ver);
    wp_register_style('wpt_style',$uri . '/assets/css/style.css', [],$ver);
    wp_register_style('wpt_dark',$uri . '/assets/css/dark.css', [],$ver);
    wp_register_style('wpt_font_icons',$uri . '/assets/css/font-icons.css', [],$ver);
    wp_register_style('wpt_animate',$uri . '/assets/css/animate.css', [],$ver);
    wp_register_style('wpt_magnific_popup',$uri . '/assets/css/magnific-popup.css', [],$ver);
    wp_register_style('wpt_responsive',$uri . '/assets/css/responsive.css', [],$ver);
    wp_register_style('wpt_custom',$uri . '/assets/css/custom.css', [],$ver);

    
    wp_enqueue_style('wpt_google_fonts');
    wp_enqueue_style('wpt_bootstrap');
    wp_enqueue_style('wpt_style');
    wp_enqueue_style('wpt_dark');
    wp_enqueue_style('wpt_font_icons');
    wp_enqueue_style('wpt_animate');
    wp_enqueue_style('wpt_magnific_popup');
    wp_enqueue_style('wpt_responsive');
    wp_enqueue_style('wpt_custom');
    
    $read_more_color = get_theme_mod('wpt_read_more_color');
    wp_add_inline_style(
        'wpt_custom',
        'a.more-link{color: '. $read_more_color. '; border-color: '.$read_more_color.';}'
    );

    wp_register_script('wpt_plugins', $uri.'/assets/js/plugins.js', [],$ver, true);
    wp_register_script('wpt_functions', $uri.'/assets/js/functions.js', [],$ver, true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('wpt_plugins');
    wp_enqueue_script('wpt_functions');

  
}

