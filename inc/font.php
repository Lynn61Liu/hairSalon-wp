<?php
function add_custom_font_sizes()
{

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => esc_html__('heading'),
                'size'      => 45,
                'slug'      => 'heading',
            ),
            array(
                'name'      => esc_html__('subheading'),
                'size'      => 30,
                'slug'      => 'subheading',
            ),
            array(
                'name'      => esc_html__('small-content'),
                'size'      => 17,
                'slug'      => 'small-content',
            ),
            array(
                'name'      => esc_html__('footer-title'),
                'size'      => 40,
                'slug'      => 'footer-title',
            ),
            array(
                'name'      => esc_html__('footer-content'),
                'size'      => 20,
                'slug'      => 'footer-content',
            ),
            array(
                'name'      => esc_html__('items'),
                'size'      => 20,
                'slug'      => 'items',
            ),
            array(
                'name'      => esc_html__('logo'),
                'size'      => 76,
                'slug'      => 'logo',
            ),
        )
    );
}


add_action('after_setup_theme', 'add_custom_font_sizes');