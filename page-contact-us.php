<?php get_header("portfolio"); ?>
<div class="contact-page-wrap">
    <section>

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="container">
            <?php the_content() ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <section>

    </section>




</div>
<?php get_footer(); ?>