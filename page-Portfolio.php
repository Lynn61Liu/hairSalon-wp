<?php get_header("portfolio"); ?>
<div class="port-page-wrap">
    <div class="left">
        <h1 data-aos="fade-up" data-aos-duration="2000">What You Can Expect from Auckland Studio</h1>
        <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">We offer exclusive and personalised men’s
            Barba services to all
            our customers. Our barbers are all highly
            skilled to provide a first-class service. We offer a wide range of the finest products based on your skin
            and hair type. Our experience has refined our services to provide the best in traditional barber services to
            include traditional wet shaves, haircuts, bespoke skincare, and facial cleansing.
            Our methods are traditional as they provide the finest and most unique techniques. Our barbers each have
            specific skills to help you get what you desire. We don’t believe in sending clients out of our
            establishment with something they don’t want. We understand that this is one of the most frustrating aspects
            of trying a new barber and encourage our clients to bring in ideas, and we will provide professional advice.
            Our barbers are up to date with the latest style trends so even if you don’t have an idea of what you might
            want, we are here to help you discover your best-suited style.
        </p>
    </div>
    <div class="right"> <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <?php the_content() ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>


</div>
<?php get_footer(); ?>


<script>
var masonry = new Macy({
    container: '.container',
    trueOrder: false,
    waitForImages: false,
    useOwnImageLoader: false,
    debug: true,
    mobileFirst: true,
    columns: 1,
    margin: {
        y: 16,
        x: '2%',
    },
    breakAt: {
        1200: 4,
        940: 3,
        520: 2,
        400: 1
    },
});

console.log("minimasonry working")
</script>