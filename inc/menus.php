<?php 
function site_menus(){
    register_nav_menus([
    'menu-header' => esc_html__('Menu For Header'),
    'menu-footer' => esc_html__('Menu For Footer'),
    ]);
    }
    add_action('after_setup_theme', 'site_menus');






?>