<?php get_header(); ?>
<div class="women-page-wrap" style="background-image: url(<?php echo wp_get_attachment_image_url(39); ?>)">
    <h1>WOMEN SERVICES</h1>
    <p>
        SALON by sara lewis offers a full range of hair treatments in a no-drama, design-forward environment.
        We hire the top stylists in NewZealand, and try to use natural and organic products when possible.
    </p>
    <div class="br0"></div>
    <div class="items-wrap">
        <?php
        $parent_ID = 0;
        //-level_one_clilds-
        $level_one_clilds = get_terms(array(
            'taxonomy'   => 'wServices',
            'parent'     => $parent_ID,
            'depth'      => 1,
            'hide_empty' => false,

        ));
        foreach ($level_one_clilds as $level_one_clild) :
            $cover = get_field('cover', $level_one_clild->taxonomy . '_' . $level_one_clild->term_id);

        ?>

        <div class="women-list-wrap">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <!-- <div class="list-content"> -->
            <!-- <div class="inner-border"> -->

            <div class="list-content" style="background-image: url(<?php echo $cover['url']; ?>)">
                <div class="treatments-filter">
                    <p><?php echo $level_one_clild->name ?></p>
                    <?php
                        $custom_terms = get_terms('services');
                        $args = array(
                            'post_type' => 'women',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'wServices',
                                    'field'    => 'slug',
                                    'terms'    => $level_one_clild->slug,
                                ),
                            ),
                        );
                        $query = new WP_Query($args);
                        // var_dump($query);
                        ?>


                    <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) :  $query->the_post(); ?>
                    <div class="women-services-item">
                        <?php the_title(); ?>

                    </div>
                    <!-- <button class="booking-btn"> Booking</button> -->
                    <?php endwhile; ?>
                    <!-- <button class="booking-btn"> Booking</button> -->
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>



                </div>
            </div>
        </div>

        <?php endforeach;
        ?>
    </div>
</div>


<?php get_footer(); ?>