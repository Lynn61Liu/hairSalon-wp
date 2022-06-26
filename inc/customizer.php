<?php


function pageCallHome()
{
    return is_front_page();
}



//heading customizer


function update_banner_text($wp_customize)
{

    $wp_customize->add_panel('banner_text_panel', array(
        'title'     => 'Banner Text',
        'priority'     => '1',
        'description'   => 'Update Banner Text Here',
    ));

    //Home Banner Text

    $wp_customize->add_setting('banner_home', array(
        'default'     => 'SARA LEWIS',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_setting('banner_home2', array(
        'default'     => 'Keeping your perfect look',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_setting('banner_home3', array(
        'default'     => '268 Penrose Road Mount Wellington, Auckland 1060',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('banner_home4', array(
        'default'     => '09 73847 7238',
        'transport'   => 'refresh',
    ));


    $wp_customize->add_section('custom_text', array(
        'panel'      => 'banner_text_panel',
        'title'      => 'Banner Text Home',
        'priority'   => 30,
        'active_callback' => 'pageCallHome'
    ));

    $wp_customize->add_section('custom_text2', array(
        'panel'      => 'custom_text',
        'title'      => 'Banner Text Home2',
        'priority'   => 30,
        'active_callback' => 'pageCallHome'
    ));

    $wp_customize->add_section('custom_text3', array(
        'panel'      => 'custom_text',
        'title'      => 'Banner Text Home3',
        'priority'   => 30,
        'active_callback' => 'pageCallHome'
    ));
    $wp_customize->add_section('custom_text4', array(
        'panel'      => 'custom_text',
        'title'      => 'Banner Text Home4',
        'priority'   => 30,
        'active_callback' => 'pageCallHome'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_custom_text', array(
        'label'      => 'First line of text',
        'section'    => 'custom_text',
        'settings'   => 'banner_home',
        'type'       => 'text'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_custom_text2', array(
        'label'      => 'Second line of text',
        'section'    => 'custom_text',
        'settings'   => 'banner_home2',
        'type'       => 'text'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_custom_text3', array(
        'label'      => 'Third line of text',
        'section'    => 'custom_text',
        'settings'   => 'banner_home3',
        'type'       => 'text'
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_custom_text4', array(
        'label'      => 'Fourth line of text',
        'section'    => 'custom_text',
        'settings'   => 'banner_home4',
        'type'       => 'text'
    )));
}

add_action("customize_register", "update_banner_text");







//image customizer

function banner_images($wp_customize)
{


    //Create Category Panel

    $wp_customize->add_panel('panel_id', array(
        'title'     => 'Banner Image',
        'priority'     => '1',
        'description'   => 'Update Banner Image Here',
    ));


    // Home page Banner Image

    $wp_customize->add_section('custom_image', array(
        //Call Category Panel
        'panel'      => 'panel_id',
        'title'      => 'Home Banner Image',
        'priority'   => 30,
        'active_callback' => 'pageCallHome'
    ));

    $wp_customize->add_setting('home_image_placement', array(
        'default'     => wp_get_attachment_url(21),
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image_placement', array(
        'label'      => 'update image',
        'section'    => 'custom_image',
        'settings'   => 'home_image_placement',
    )));
}

add_action("customize_register", "banner_images");