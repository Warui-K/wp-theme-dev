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

$wp_customize->add_setting('wpt_read_more_color', 
[
    'default' => '#1ABC9C'
]);

$wp_customize->add_setting('wpt_report_file', 
[
    'default' => ''
]);

//Show Popular Posts
$wp_customize->add_setting('wpt_show_header_popular_posts', 
[
    'default' => false
]);

//Show Popular Posts
$wp_customize->add_setting('wpt_popular_posts_widget_title', 
[
    'default' => 'Popular Posts'
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

//Read More controller
$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize, 
    'wpt_read_more_color_input',

    array('label' => __('Read More Link Color', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_read_more_color',
    )

));
//Upload Control

$wp_customize->add_control(new WP_Customize_Upload_Control(
    $wp_customize, 
    'wpt_report_file_input',

    array('label' => __('File Report', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_report_file',
    )

));

//Controller for Popular Posts

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 
    'wpt_show_header_popular_posts_input',

    array('label' => __('Show Header Popular Posts Widget', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_show_header_popular_posts',
        'type' => 'checkbox',
        'choices' => [
            'yes' => __('Yes', 'wp-theme-dev')
        ]
    )

));

//Controller for Widget Title Popular Posts

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 
    'wpt_popular_posts_widget_title_input',

    array('label' => __('Popular Posts Widget Title', 'wp-theme-dev'),
        'section' => 'wpt_misc_section',
        'settings' => 'wpt_popular_posts_widget_title',
       
    )

));

}
