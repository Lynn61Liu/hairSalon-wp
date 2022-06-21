<?php get_header("portfolio"); ?>
<div class="contact-page-wrap">
    <section>

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <?php the_content() ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <!-- <section data-aos="fade-up" data-aos-duration="2000">

    </section> -->




</div>
<?php get_footer(); ?>