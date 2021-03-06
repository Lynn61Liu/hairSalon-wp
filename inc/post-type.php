<?php
function add_women_type()
{
    $labels = array(
        'name' => 'Women',
        'singular_name' => 'Women',
        'add_new' => 'Add New',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'show_ui' => true,
        'publicly_queryable' => true,
        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 537.6 537.6" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M173.2,314.4c21.3,3.199,47.3-1.701,75.7-3.4c5.3,1.199,10.6,2,16.1,2c5.6,0,11.1-0.801,16.6-2.1
        c73.9,3.6,131.5,24.5,131.5-125.9C413.1,82.9,346.8,0,265,0c-81.8,0-148.1,82.9-148.1,185c0,82.1,15.7,114,41.2,125.1
        C162.8,312.3,167.9,313.6,173.2,314.4z M149.6,127.3c15.5,21.5,55.7,16.9,90.4-10.3c8.8-6.9,16.5-14.8,22.7-22.8
        c0.8,0.1,1.6,0.2,2.4,0.4c3.4,0.6,6.5,1.8,10,2.9c3.101,1.5,6.5,2.7,9.5,4.6c3.101,1.6,5.9,3.8,8.7,5.7c2.5,2.2,5.3,4.3,7.4,6.7
        c2.199,2.2,4.3,4.6,5.899,6.9c1.8,2.2,3.101,4.5,4.4,6.5s2.399,3.8,3,5.4c1.5,3.1,2.399,4.9,2.399,4.9s-0.3-1.9-0.899-5.4
        c-0.2-1.8-0.7-3.8-1.3-6.2c-0.601-2.4-1.301-5.2-2.5-8c-1-2.9-2.4-5.9-4-9.1c-1.5-3.2-3.7-6.3-5.801-9.7c-2.5-3.1-4.8-6.5-7.8-9.5
        c-2.8-3.2-6.2-5.9-9.5-8.8c-3.1-2.2-6.399-4.6-9.899-6.5c1.5-3.1,2.699-6.3,3.699-9.3c12.4,5.6,25.101,12.7,35.2,22.8
        c37.101,37.1,22.5,80.2,51.101,51.7c4.5-4.5,8.199-9.2,11.1-13.9c1,0,2-0.1,2.8,0.1c3.9,1,6.4,4,7.8,6.4
        c3.9,6.5,4.801,15.9,2.4,25.3c-3.6,14-12.8,22.3-20.2,23.2l-6,0.8L361,188c-14.2,51.5-52.5,106.3-95.8,106.3
        c-43.3,0-81.5-54.8-95.8-106.3l-1.6-5.9l-6-0.8c-7.3-1-16.6-9.3-20.2-23.2c-2.4-9.4-1.5-18.8,2.4-25.3
        C144.9,131,146.9,128.7,149.6,127.3z"/><path fill="black" d="M376.3,327.9c-11.6,19.799-25.1,36.5-42.9,45.699c-36.8,18.8-64.199,34.2-64.199,34.2l-0.101-0.1v-0.301l-0.3,0.2
        l-0.3-0.2v0.301l-0.1,0.1c0,0-27.3-15.2-64.2-34.2c-17.8-9.199-31.2-25.9-42.9-45.699c-54.5,22.199-92.5,72.999-92.5,117.499
        c0,46.801,0,92.2,0,92.2h199.6h0.8h199.6c0,0,0-45.399,0-92.2C468.8,401,430.7,350.1,376.3,327.9z"/></svg>'),

        'supports' => array(
            'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments'
        )
    );
    register_post_type('Women', $args);
}
add_action('init', 'add_women_type', 5);

function add_men_type()
{
    $labels = array(
        'name' => 'Men',
        'singular_name' => 'Men',
        'add_new' => 'Add New',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'show_ui' => true,
        'publicly_queryable' => true,


        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 532.699 532.699" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M113.299,196.3c4.8,18.9,17.1,33.7,31.8,38.8c17.2,56.4,61.4,115.099,121.2,115.099S370.2,291.6,387.5,235.1
 c14.7-5,27-19.8,31.8-38.9c6.8-27.1-3.8-52.3-24.1-58.5c4.5-6.5,9.5-13.1,9.5-20.5c0-11.2-11.4-20.3-15.101-30.5
 c-3.7-10.2-0.899-24.4-7.8-33.2c-6.6-8.4-21.3-9.1-30.4-15.7c-8.6-6.3-13.399-20-23.699-24.5c-9.9-4.1-23.2,1.8-34.2-0.4
 c-10.4-2-20.5-12.9-31.7-12.9s-21.3,10.6-31.7,12.8c-11,2.1-24.3-3.8-34.2,0.4c-10.3,4.5-15.1,18.3-23.7,24.6
 c-9.1,6.6-23.6,7.4-30.4,15.7c-6.9,8.7-4,23-7.8,33.2c-3.7,10.2-15.1,19.3-15.1,30.5c0,8.6,6.7,16,11.5,23.5
 C114.899,150.1,107.399,172.4,113.299,196.3z M399.799,191.4c-3.8,15.2-13.8,24.3-21.7,25.4l-6.6,0.9l-1.8,6.4
 c-14.4,52.599-54.5,106-103.4,106c-48.9,0-89-53.3-103.4-106.1l-1.8-6.4l-6.6-0.9c-7.8-1.1-17.9-10.1-21.7-25.4
 c-2.8-11.3-1-22.6,3.7-29.2c2-2.7,4.4-4.7,7.3-5.5c0.7-0.1,1.3-0.2,2.1-0.2c0.6,0,1.1,0,1.7,0.1l9.4,0.9l1.5-9.4
 c3.7-24.6,12.4-46.3,24.9-63.4c2.1,4.9,1.3,14,6.4,17c4.7,2.9,14.3-3.1,20.4-1c5.3,2,8.4,12.9,14.6,14.2
 c5.6,1.2,13.1-7.4,19.3-6.7c5.8,0.6,11.3,10.5,17.4,10.5c6.199,0,11.6-10,17.5-10.5c6.199-0.7,13.6,8,19.3,6.7
 c6.2-1.3,9.2-12.2,14.6-14.2c6-2.2,15.7,3.8,20.4,1c5.6-3.5,3.9-14.4,7.3-18.7c1.101-1.5,2.9-2.7,4.7-3.8
 c14.7,17.9,25.1,41.4,29.1,68.9l1.5,9.4l9.4-0.9c1-0.1,1.9,0,2.7,0.1c0.3,0,0.8,0,1.1,0C398.7,159.1,403.7,175.3,399.799,191.4z"
 /><path fill="black" d="M376.3,327.9c-11.6,19.799-25.1,36.5-42.9,45.699c-36.8,18.8-64.199,34.2-64.199,34.2l-0.101-0.1v-0.301l-0.3,0.2
 l-0.3-0.2v0.301l-0.1,0.1c0,0-27.3-15.2-64.2-34.2c-17.8-9.199-31.2-25.9-42.9-45.699c-54.5,22.199-92.5,72.999-92.5,117.499
 c0,46.801,0,92.2,0,92.2h199.6h0.8h199.6c0,0,0-45.399,0-92.2C468.8,401,430.7,350.1,376.3,327.9z"/>
 <path fill="black" d="M267.9,235.3c-38.301,0-69.201,33.8-69.201,33.8c0,9.6,31,0,69.201,0c38.199,0,69.199,9.6,69.199,0
 C337.2,269.1,306.2,235.3,267.9,235.3z"/>
<path fill="black" d="M378.099,314.9c-12.1,20.6-26.1,38-44.6,47.5c-38.2,19.6-66.6,35.4-66.6,35.4l-0.1-0.102v-0.398l-0.5,0.1l-0.4-0.201v0.4
 l-0.1,0.1c0,0-28.4-15.899-66.6-35.399c-18.5-9.5-32.5-26.899-44.6-47.5c-56.7,23-96.1,75.899-96.1,122.101
 c0,48.6,0,95.799,0,95.799h207.4h0.8h207.5c0,0,0-47.199,0-95.799C474.2,390.801,434.599,338,378.099,314.9z"/>
</svg>'),
        'supports' => array(
            'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments'
        )
    );
    register_post_type('Men', $args);
}
add_action('init', 'add_men_type', 5);

function add_staff_type()
{
    $labels = array(
        'name' => 'Staff',
        'singular_name' => 'Staff',
        'add_new' => 'Add New Staff',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'show_ui' => true,
        'publicly_queryable' => true,


        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M0 24C0 10.75 10.75 0 24 0H616C629.3 0 640 10.75 640 24C640 37.25 629.3 48 616 48H24C10.75 48 0 37.25 0 24zM0 488C0 474.7 10.75 464 24 464H616C629.3 464 640 474.7 640 488C640 501.3 629.3 512 616 512H24C10.75 512 0 501.3 0 488zM211.2 160C211.2 195.3 182.5 224 147.2 224C111.9 224 83.2 195.3 83.2 160C83.2 124.7 111.9 96 147.2 96C182.5 96 211.2 124.7 211.2 160zM32 320C32 284.7 60.65 256 96 256H192C204.2 256 215.7 259.4 225.4 265.4C188.2 280.5 159.8 312.6 149.6 352H64C46.33 352 32 337.7 32 320V320zM415.9 264.6C425.3 259.1 436.3 256 448 256H544C579.3 256 608 284.7 608 320C608 337.7 593.7 352 576 352H493.6C483.2 311.9 453.1 279.4 415.9 264.6zM391.2 290.4C423.3 297.8 449.3 321.3 460.1 352C463.7 362 465.6 372.8 465.6 384C465.6 401.7 451.3 416 433.6 416H209.6C191.9 416 177.6 401.7 177.6 384C177.6 372.8 179.5 362 183.1 352C193.6 322.3 218.3 299.2 249.1 291.1C256.1 289.1 265.1 288 273.6 288H369.6C377 288 384.3 288.8 391.2 290.4zM563.2 160C563.2 195.3 534.5 224 499.2 224C463.9 224 435.2 195.3 435.2 160C435.2 124.7 463.9 96 499.2 96C534.5 96 563.2 124.7 563.2 160zM241.6 176C241.6 131.8 277.4 96 321.6 96C365.8 96 401.6 131.8 401.6 176C401.6 220.2 365.8 256 321.6 256C277.4 256 241.6 220.2 241.6 176z"/></svg>'),
        'supports' => array(
            'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments'
        )
    );
    register_post_type('Staff', $args);
}
add_action('init', 'add_staff_type', 5);