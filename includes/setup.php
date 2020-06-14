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

    //Support for RSS Feeds
    add_theme_support('automatic-feed-links');

    //Support for HTML5
    add_theme_support('HTML5', array(
        'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'
    ));

    //Support for Starter Content (Dummy  COntent)
    add_theme_support('starter-content', [
        'widgets' => [
            //Place three core-defined widgets in the sidebar area.
            'wpt_sidebar' => [
                'text_business_info', 'search', 'text_about',
            ]
        ],
        //Create the custom image attachments used as post thumbnails for pages
        //Attachment is a special post type
        //All Files and images you upload are considered attachments
        'attachments' => [
            'image-about' => [
                'post-title' => __('About', 'wpt-theme-dev'),
                'file' => 'assets/images/about/1.jpg', //URL relative to the temmplate directory
            ],
        ],

        //Specify the core defined pages to create and add custom thumbnails to some of them
        'posts' => [
            'home' => array(
                'thumbnail' => '{{image-about}}',

            ),
            'about' => array(
                'thumbnail' => '{{image-about}}',
            ),
            'contact' => array(
                'thumbnail' => '{{image-about}}',
            ),
            'blog' => array(
                'thumbnail' => '{{image-about}}',
            ),
            'homepage-selection' => array(
                'thumbnail' => '{{image-about}}',
            ),
            
        ],
        //Default to a static front page and assign the front and posts pages.
        'options' => [
            //show_on_front is an option for determining whether the front page will be a list of posts
            //or a single page
            'show_on_front' => 'page', 
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ],

        //Set the front-page section theme mods to the IDs of the core registered pages
        'theme_mods' => [
            'wpt_facebook_handle' => 'wpt-theme-dev',
            'wpt_twitter_handle' => 'wpt-theme-dev',
            'wpt_instagram_handle' => 'wpt-theme-dev',
            'wpt_email' => 'wpt-theme-dev',
            'wpt_phone' => 'wpt-theme-dev',
            'wpt_header_show_search' => 'yes',
            'wpt_header_show_cart' => 'yes',
        ],

        //Set up Nav Menus for each of the two areas registered in the theme
        'nav-menus' => [
            //Assign a menu to the 'top' location.

            'primary' => array(
                'name' => __('Primary Menu', 'wpt-theme-dev'),
                'items' => array(
                    'link_home', //Note that the core 'home' page is actually a link in case a static front page is note used
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
            'secondary' => array(
                'name' => __('Seconary Menu', 'wpt-theme-dev'),
                'items' => array(
                    'link_home', //Note that the core 'home' page is actually a link in case a static front page is note used
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
        ],

    ]);


    //WP Quads code
    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'wp_theme_header', 'description' => 'WPTheme Header position') );
        }

}