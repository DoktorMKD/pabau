<!doctype html>
<html <?php language_attributes('en'); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();
    ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="site-header">
            <div class="container">
                <div class="logo">
                    <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                </div>

                <nav class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="hamburger"></span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ));
                    ?>
                </nav>
            </div>
        </header>