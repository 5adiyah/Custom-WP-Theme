<section class="content-wrapper container">
    <div class="two-col">
        <div class="img-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/device_mobile.png" alt="An iphone displayign some code and an modal with the words Active time: 2.7">
        </div>
    </div>

    <div class="two-col shrink">
        <?php get_template_part('template-parts/text', null, [
            'textColor' => 'text-dark',
            'eyebrowColor' => 'text-blue',
            'eyebrow' => 'Eyebrow',
            'header' => 'Generating relevant and engaging content.',
            'body' => 'Non diam phasellus vestibulum lorem sed. Massa enim nec dui nunc mattis enim. Quisque egestas diam in arcu cursus euismod quis viverra. Eget arcu dictum varius duis at consectetur lorem donec massa.'
        ]);  ?>
    </div>

</section>
