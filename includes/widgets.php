<?php

function wpt_widgets(){
    register_sidebar([
        'name' => __('Sidebar-1', 'wp-theme-dev'),
        'id' => 'wpt_sidebar',
        'description' => __('Sidebar for the theme WPT-THEME-DEV', 'wp-theme-dev'),
        //The characters %1$s and %2$s are placeholders that enable other plugins to input their classes/d
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}