<section class="hero-wrapper container" id="hero">
    <div class="two-col shrink">
        <?php get_template_part('template-parts/text', null, [
            'textColor' => 'text-white',
            'eyebrowColor' => 'text-green',
            'eyebrow' => 'Who we are',
            'header' => 'Engage brand and increase visibility.',
            'body' => 'Elementum sagittis vitae et leo duis ut. Eu feugiat pretium nibh ipsum consequat.',
            'hero' => true
        ]);  ?>

        <div class="cta-wrapper">
            <a href="#" class="cta primary">Download Now</a>
            <a href="#" class="cta secondary text-white">Learn More</a>
        </div>
    </div>

    <div class="two-col">
        <div class="img-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/device_ipad.png" alt="An ipad with a dark screen">
        </div>
    </div>
</section>
