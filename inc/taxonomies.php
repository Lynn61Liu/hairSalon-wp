<?php
function add_services_taxonomy()
{
    $labels = array(
        'name' => _x('services', 'taxonomy general name'),
        'singular_name' => _x('services', 'taxonomy singular name'),
        'search_items' => __('Search services'),
        'all_items' => __('All services'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit services'),
        'update_item' => __('Update services'),
        'add_new_item' => __('Add New services'),
        'new_item_name' => __('New services Name'),
        'menu_name' => __('services'),
    );


    register_taxonomy('wServices', array('women', 'men'), array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'staff/wServices'),
    ));
}
add_action('init', 'add_services_taxonomy', 0);
?>
<?php    ?>