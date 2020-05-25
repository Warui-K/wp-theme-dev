<?php 
function wpt_misc_customizer_section($wp_customize){
//Create the Database values using the add_setting() method

$wp_customize->add_setting('wpt_header_show_search', 
    [
        'default' => 'yes',
        //Use custom JavaScript code to reflect the changes on the page
       // 'transport' => 'postMessage'
    ]);

$wp_customize->add_setting('wpt_header_show_cart', 
[
    'default' => 'yes',
    //'transport' => 'postMessage'

]);

$wp_customize->add_setting('wpt_footer_copyright_text', 
[
    'default' => '  Copyrights &copy; 2020 All Rights Reserved by Warui Kamiri.'
]);

$wp_customize->add_setting('wpt_footer_tos_page', 
[
    'default' => '0'
]);

$wp_customize->add_setting('wpt_footer_privacy_page', 
[
    'default' => '0'
]);


//Create a section that will hold all our controllers
$wp_customize->add_section('wpt_misc_section',
    [
        'title' => __('WordPress Theme Misc settings', 'wp-theme-dev'),
        'priority' => 30,
        'panel' => 'wp-theme-dev'
    ]
    );

//Create a controller for each setting
/** 1. Show search */
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'wpt_header_show_search_input',
    array(
        'label' => __('Show Search Button in Header', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_header_show_search',
        'type' => 'checkbox',
        'choices' => [
            'yes' => 'Yes'
        ]
    )
    ));

/** 2. Show Cart*/
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'wpt_header_show_cart_input',
    array(
        'label' => __('Show Cart Button in Header', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_header_show_cart',
        'type' => 'checkbox',
        'choices' => [
            'yes' => 'Yes'
        ]
    )
    ));

/** 3. Copyright Text*/
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'wpt_footer_copyright_text_input',
    array(
        'label' => __('Text for Copyright section', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_footer_copyright_text',
    )
    ));


/** 4. Terms of Service Pages*/
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'wpt_footer_tos_page_input',
    array(
        'label' => __('Footer Terms of Service Page', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_footer_tos_page',
        'type' => 'dropdown-pages',
    )
    ));


/** 5. Privacy Policy Page*/
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'wpt_footer_privacy_page_input',
    array(
        'label' => __('Footer Privacy Policy Page', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_footer_privacy_page',
        'type' => 'dropdown-pages',
    )
    ));
}