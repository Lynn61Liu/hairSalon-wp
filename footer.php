<div class="subscription">
    <img src="<?php echo wp_get_attachment_url('133') ?> " alt="">
    <div class="subs-text">
        <p>
            Subscribe to the sara lewis Newsletter for special offers
        </p>
        <!-- <div class="subs-email">
            <div> <input type="text" placeholder="Email"></div>
            <div><button>
                    SEND
                </button></div>


        </div> -->
        <?php if (is_active_sidebar('interesting-widget')) : ?>
        <div class="subs-email">
            <?php dynamic_sidebar('interesting-widget'); ?>
        </div>
        <?php endif; ?>



    </div>
</div>
<footer>


    <div class="foot-nav">
        <h1>Page</h1>
        <?php wp_nav_menu([
            'theme_location' => 'menu-header',
            'container' => false,

            'items_wrap' => '<ol>%3$s</ol>',
        ]); ?>
    </div>
    <div class=" foot-des">
        <h1>Description</h1>
        <p>Our philosophy is simple, education for our team and our clients.
            We always want to work towards becoming a better salon, recommend
            products, teach them how to style and tell them what’s trending.
            We don’t want to be a place where people go to get their haircut,
            we want to be a place where people go to get better haircuts.
        </p>
    </div>
    <div class="social-icon">
        <h1>Follow Us</h1>


        <?php
        $logolist = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            // 'posts_per_page' => 6,
            'orderby' => 'date',
            'order'   => 'ASC',
            'cat' => 6,
        );

        $the_query = new WP_Query($logolist);
        wp_reset_postdata();

        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


        <?php the_content();   ?>


        <?php $index++;  ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>