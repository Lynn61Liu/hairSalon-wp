<?php get_header(); ?>
<div class="container">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="box">
        <?php the_content() ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

</div>

<script src="minimasonry/build/minimasonry.min.js">

</script>