<?php 
function add_texture_taxonomy()
{
    $labels = array(
        'name' => _x('Texture', 'taxonomy general name'),
        'singular_name' => _x('Texture', 'taxonomy singular name'),
        'search_items' => __('Search Texture'),
        'all_items' => __('All Texture'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Texture'),
        'update_item' => __('Update Texture'),
        'add_new_item' => __('Add New Texture'),
        'new_item_name' => __('New Texture Name'),
        'menu_name' => __('Texture'),
    );


    register_taxonomy('texture', 'product', array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product/texture'),
    ));
}
add_action('init', 'add_texture_taxonomy', 0);

?>