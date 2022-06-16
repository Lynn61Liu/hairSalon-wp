<?php

//import css 
define('CODE_BASE', get_template_directory_uri());
function load_css()
{
    wp_enqueue_style('main-style', CODE_BASE . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'load_css');


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


// custom_logo
function add_custom_logo()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'add_custom_logo');