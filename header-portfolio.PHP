<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>

    <div class="port">
        <div class="header-container" data-aos="fade-down" data-aos-duration="400">
            <div class="navigation">
                <nav id="site-navigation">
                    <?php wp_nav_menu([
                        'theme_location' => 'menu-header',
                        'container' => false,

                        'items_wrap' => '<ol>%3$s</ol>',
                    ]); ?>
                </nav>
            </div>
        </div>
    </div>