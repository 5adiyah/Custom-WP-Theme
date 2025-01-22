<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo( 'name' ); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <a href="#hero" class="skip-link">Skip to Content</a>
        <header>
            <div class="site-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site_logo.svg" alt="<?php bloginfo('name'); ?> Logo" class="10 Up Site logo">
                </a>
            </div>

            <button class="menuBtn" id="menuToggle"    aria-expanded="false" aria-controls="mainNav" aria-label="Toggle navigation">
                <svg id="hamburger" class="open-icon" width="37" height="28" viewBox="0 0 37 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="26.7826" height="3.65217" rx="1" fill="white"/>
                    <rect y="12.1739" width="36.5217" height="3.65217" rx="1" fill="white"/>
                    <rect y="24.3478" width="24.3478" height="3.65217" rx="1" fill="white"/>
                </svg>


                <svg id="close" class="close-icon hidden" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="35.7667" y="10.1761" width="6.70194" height="36.1905" transform="rotate(45 35.7667 10.1761)" fill="white"/>
                    <rect x="41.1282" y="35.6434" width="6.70194" height="36.1905" transform="rotate(135 41.1282 35.6434)" fill="white"/>
                </svg>

            </button>

            <nav class="main-nav" id="mainNav" role="navigation" aria-label="Main Navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'menu link light', 
                    'fallback_cb'    => false, 
                ) );
                ?>
            </nav>
        </header>
