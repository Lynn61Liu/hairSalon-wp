<?php get_header("portfolio"); ?>
<div class="booking-page-wrap">
    <h1>BOOKING SERVICES</h1>
    <!-- <div class="right"> -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <?php the_content() ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- </div> -->


</div>
<?php get_footer(); ?>