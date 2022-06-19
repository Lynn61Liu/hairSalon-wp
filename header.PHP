<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>
    <div class="banner-wrap">
        <header>
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
        </header>
        <div class="banner-text">
            <?php if (is_front_page()) { ?>
            <img src="<?php echo wp_get_attachment_url(102) ?>" alt="">
            <h1>SARA LEWIS</h1>
            <h3>Keeping your perfect look</h3>
            <button> Book Online</button>
            <div></div>
            <p>268 Penrose Road Mount Wellington, Auckland 1060</p>
            <p>09 73847 7238</p>
            <?php }  ?>


        </div>
        <?php if (is_page('women')) { ?>
        <img class="banner-bg" src="<?php echo wp_get_attachment_url(37) ?>" alt="">
        <?php } ?>
        <?php if (is_page('men')) { ?>
        <img class="banner-bg" src="<?php echo wp_get_attachment_url(34) ?>" alt="">
        <?php }
        if (is_front_page()) { ?>
        <img class="banner-bg" src="<?php echo wp_get_attachment_url(21) ?>" alt="">
        <?php } ?>
    </div>