<?php

if (!function_exists('theme_setup')) :
    /**
     * Sets up theme defaults and registers support for various
     * WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme
     * hook, which runs before the init hook. The init hook is too late
     * for some features, such as indicating support post thumbnails.
     */
    function theme_setup()
    {
        /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
        add_theme_support('title-tag');

        add_theme_support('custom-logo');

        /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => __('Primary', 'Primary Nav'),
            )
        );
    }
endif; // theme_setup
add_action('after_setup_theme', 'theme_setup');

function add_theme_scripts()
{
    $the_theme = wp_get_theme();

    wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/css/style.css', array(), $the_theme->get('Version'), 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');