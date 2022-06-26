<?php

//import css 
define('CODE_BASE', get_template_directory_uri());
function salon_scripts()
{
    wp_enqueue_script('test', get_template_directory_uri() . '/js/test.js', array(), false, true);
    wp_enqueue_script('masonry', get_template_directory_uri()  . '/js/macy.js', array(), false, true);
    wp_enqueue_style('main-style', CODE_BASE . '/css/style.css');
    wp_enqueue_script('aos', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'salon_scripts');

function init_macy()
{
    wp_enqueue_script("macy-js", "https://cdn.jsdelivr.net/npm/macy@2");
}

add_action('wp_enqueue_scripts', 'init_macy');


//menus
include __DIR__ . "/inc/menus.php";

//post-thumbnails
include __DIR__ . "/inc/post-thumbnails.php";

// custom post type -- product
include __DIR__ . "/inc/post-type.php";

//add textures_taxonomy
include __DIR__ . "/inc/taxonomies.php";

//  COLOR
include __DIR__ . "/inc/dashboard-colours.php";
include __DIR__ . "/inc/font.php";
// include __DIR__ . "/inc/widget.php";


// define_widgets

function define_widgets()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Interesting Stuff'),
            'id'            => 'interesting-widget',
            'description'   => esc_html__('Add widgets here.....'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',

        )
    );
}
add_action('widgets_init', 'define_widgets');



function create_logo_size()
{
    add_image_size('custom-logo-size', 200, 200, true);
}

add_action('after_setup_theme', 'create_logo_size');

function add_custom_logo()
{
    $defaults = array(
        'height' => 'custom-logo-size',
        'width' => 'custom-logo-size',
        'flex-height' => true,
        'flex-width' => true,

    );

    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'add_custom_logo');


include __DIR__ . "/inc/customizer.php";