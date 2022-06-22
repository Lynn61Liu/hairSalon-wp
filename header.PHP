<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz@6..96&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="banner-wrap">
        <header>
            <div class="header-container" data-aos-duration="400">
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
            <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_url($custom_logo_id, 'custom-logo-size');
                ?>
            <img data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="300"
                data-aos-easing="ease-in-sine" src=<?php echo $image; ?> alt="logo" />
            <!-- <img  src="<?php echo wp_get_attachment_url(102) ?>" alt=""> -->
            <h1 data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000" data-aos-offset="300"
                data-aos-easing="ease-in-sine">SARALEWIS</h1>
            <h3 data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000" data-aos-offset="100"
                data-aos-easing="ease-in-sine">Keeping your perfect look</h3>
            <button data-aos="fade-right" data-aos-delay="700" data-aos-duration="1000" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <?php $url = home_url('/booking') ?>
                <a href="<?php echo $url ?>"> Book Online</a>
            </button>
            <div data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
            </div>
            <section data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000" data-aos-offset="100"
                data-aos-easing="ease-in-sine">
                <p>268
                    Penrose Road Mount Wellington, Auckland 1060</p>
                <p> 09 73847 7238</p>
            </section>

            <?php }  ?>


        </div>
        <?php if (is_page('women')) { ?>
        <img class="banner-bg" data-aos="zoom-in-up" data-aos-duration="1100"
            src="<?php echo wp_get_attachment_url(37) ?>" alt="">
        <?php } ?>
        <?php if (is_page('men')) { ?>
        <img class="banner-bg" data-aos="zoom-in" data-aos-duration="1100" src="<?php echo wp_get_attachment_url(34) ?>"
            alt="">
        <?php }

        if (is_front_page()) { ?>
        <img class="banner-bg" data-aos="zoom-in-up" data-aos-duration="1100"
            src="<?php echo wp_get_attachment_url(21) ?>" alt="">
        <?php } ?>

    </div>