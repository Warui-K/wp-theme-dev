<?php
function wpt_social_customizer_section($wp_customize){
//setting
$wp_customize->add_setting('wpt_facebook_handle',
['default' => '']
);
$wp_customize->add_setting('wpt_twitter_handle',
['default' => '']
);
$wp_customize->add_setting('wpt_instagram_handle',
['default' => '']
);
$wp_customize->add_setting('wpt_email',
['default' => '']
);
$wp_customize->add_setting('wpt_phone',
['default' => '']
);

//Section
$wp_customize->add_section('wpt_social_section', 
[
'title' => __('Wordpress Theme Social Settings', 'wp-theme-dev'),
'priority' => 30,
]);

$wp_customize->add_control(
new Wp_Customize_Control(
$wp_customize,
'wpt_social_facebook_input', 
array(
'label'    => __( 'Facebook Handle', 'wp-theme-dev' ),
'section'  => 'wpt_social_section',
'settings' => 'wpt_facebook_handle',
'type' => 'text'

)));

//Controller
$wp_customize->add_control(
new Wp_Customize_Control(
$wp_customize,
'wpt_social_twitter_input', 
array(
'label'    => __( 'Twitter Handle', 'wp-theme-dev' ),
'section'  => 'wpt_social_section',
'settings' => 'wpt_twitter_handle',
'type' => 'text'

)));


$wp_customize->add_control(
new Wp_Customize_Control(
$wp_customize,
'wpt_social_instagram_input', 
array(
'label'    => __( 'Instagram Handle', 'wp-theme-dev' ),
'section'  => 'wpt_social_section',
'settings' => 'wpt_instagram_handle',
'type' => 'text'
)));


$wp_customize->add_control(
new Wp_Customize_Control(
$wp_customize,
'wpt_social_email_input', 
array(
'label'    => __( 'Email', 'wp-theme-dev' ),
'section'  => 'wpt_social_section',
'settings' => 'wpt_email',
'type' => 'text'

)));

$wp_customize->add_control(
new Wp_Customize_Control(
$wp_customize,
'wpt_social_phone_input', 
array(
'label'    => __( 'Phone Number', 'wp-theme-dev' ),
'section'  => 'wpt_social_section',
'settings' => 'wpt_phone',
'type' => 'text'

)));
}