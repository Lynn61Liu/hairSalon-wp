<?php get_header(); ?>
<div class="men-page-wrap">
    <h1>MEN SERVICES</h1>
    <div class="services-list-wrap">
        <?php
        $args = array(
            'post_type' => 'men',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        );
        $query = new WP_Query($args);
        // var_dump($query)
        ?>

        <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) :  $query->the_post(); ?>
        <div class="<?php echo "services-item"; ?>">
            <!-- <a href="<?php echo the_permalink() ?>"> -->
            <div class="item-img">
                <?php echo the_post_thumbnail("medium") ?>
            </div>
            <div class="services-info">
                <?php the_content(); ?>
                <button class="booking-btn"> Booking</button>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>


<?php get_footer(); ?>