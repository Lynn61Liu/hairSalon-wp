<?php 
function setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');    
}
add_action('after_setup_theme', 'setup');

function create_posts_thumb()
{
    add_image_size('post-thumbs', 220, 140, true);
}
add_action('after_setup_theme', 'create_posts_thumb');


function display_custom_images($sizes)
{
    return array_merge($sizes, array(
        'post-thumbs' => 'Post Thumbs',
    ));
}
add_filter('image_size_names_choose', 'display_custom_images');


?>