<?php

function wpt_customize_register($wp_customize){
    /* echo '<pre>';
    var_dump($wp_customize);
    echo '</pre>'; */


    //Override existing setting for Site Identity Panel on Customizer
   $wp_customize->get_section('title_tagline')->title = 'General';

   //Add a panel on Customizer
   $wp_customize->add_panel('wp-theme-dev',
    [
        'title' => __('WP Theme Dev', 'wp-theme-dev'),
        'description' => '<p>WP Theme Dev Settings</p>',
        'priority' => 160
    ]);
    wpt_social_customizer_section($wp_customize);
    wpt_misc_customizer_section($wp_customize);
}
