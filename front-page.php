<?php get_header() ?>
<main class="homePageWrap">

    <?php
    $homeposts = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        // 'posts_per_page' => 6,
        'orderby' => 'date',
        'order'   => 'ASC',
        'cat' => 4,
    );

    $the_query = new WP_Query($homeposts);
    wp_reset_postdata();

    ?>
    <?php $index = 0;  ?>
    <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <section class="<?php echo "home-post-$index";  ?>">
        <div data-aos="fade-up" data-aos-duration="1000">
            <?php the_content();   ?>
        </div>


        <?php if ($post->ID == 46) { ?>
        <?php
                    $args = array(
                        'post_type' => 'Staff',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'data',
                        'order' => 'ASC',
                    );
                    $query = new WP_Query($args);
                    ?>


        <div data-aos="fade-down" data-aos-duration="1000" class="team-wrap">
            <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) :  $query->the_post(); ?>
            <div>

                <p><?php the_field('staff_name'); ?></p>
                <img src="<?php the_field('staff_image'); ?>" />

            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>

        <?php }   ?>
    </section>





    <?php $index++;  ?>
    <?php endwhile; ?>
    <?php endif; ?>

</main>



<?php get_footer() ?>