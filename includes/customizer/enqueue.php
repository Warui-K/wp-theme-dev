<?php 

function wpt_customize_preview_init(){
    wp_enqueue_script(
        'wpt_theme_customizer',
        get_theme_file_uri('/assets/js/theme-customizer.js'),
        [
            'jquery', 'customize-preview'
        ],
        false,
        true
    );
}