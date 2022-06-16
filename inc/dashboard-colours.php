<?php
function add_custom_colours()
{
    add_theme_support('editor-color-palette', array(
        array(
            'name' => esc_attr__('primerRed'),
            'slug' => 'primer-red',
            'color' => '#E20741',
        ),
        array(
            'name' => esc_attr__('titleColor'),
            'slug' => 'title-color',
            'color' => '#363D3F',
        ),
        array(
            'name' => esc_attr__('content'),
            'slug' => 'content',
            'color' => '#787979',
        ),
        array(
            'name' => esc_attr__('sectionBg'),
            'slug' => 'section-bg',
            'color' => '#F7F7F7',
        ),
        array(
            'name' => esc_attr__('menu'),
            'slug' => 'menu',
            'color' => '#A8ABAC',
        ),
        array(
            'name' => esc_attr__('line'),
            'slug' => 'line',
            'color' => '#707070',
        ),
    ));
}

add_action('after_setup_theme', 'add_custom_colours');