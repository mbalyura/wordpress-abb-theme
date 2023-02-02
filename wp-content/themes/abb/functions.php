<?php

/* clean-up header */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
function abb_remove_unusual_styles()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'abb_remove_unusual_styles', 100);

/* actions */
function abb_setup()
{
    add_theme_support('title-tag');

    $logo_width  = 134;
    $logo_height = 50;
    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );
}
add_action('after_setup_theme', 'abb_setup');

function abb_add_custom_image_sizes()
{
    add_image_size('hero-bg-mobile', 1440, 450);
    add_image_size('full-width-mobile', 740);
    add_image_size('section', 388);
    add_image_size('section-download', 563);
}
add_action('after_setup_theme', 'abb_add_custom_image_sizes');

function abb_init_menus()
{
    $locations = [
        'primary' => 'Header',
        'footer-menu' => 'Footer Menu',
        'social-menu' => 'Social Menu'
    ];

    register_nav_menus($locations);
}
add_action('init', 'abb_init_menus');

function abb_register_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/dist/main.css', [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'abb_register_styles');

/* filters */
//disable gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// remove default image sizes
function abb_remove_default_image_sizes($sizes)
{
    return array_diff($sizes, [
        'thumbnail',
        'small',
        'medium',
        'large',
        'medium_large',
        '1536x1536',
        '2048x2048',
    ]);
}
add_filter('intermediate_image_sizes', 'abb_remove_default_image_sizes');

//custom classes to menus
function add_menu_item_class($classes, $item, $args)
{
    switch ($args->theme_location) {
        case 'primary':
            $classes[] = 'main-menu__item';
            break;
        case 'footer-menu':
            $classes[] = 'footer-menu__item';
            break;
        case 'social-menu':
            $classes[] = 'social-menu__item';
            break;
        default:
            break;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_item_class', 10, 3);

function add_menu_link_class($atts, $item, $args)
{
    switch ($args->theme_location) {
        case 'primary':
            $atts['class'] = 'main-menu__link';
            break;
        case 'footer-menu':
            $atts['class'] = 'footer-menu__link';
            break;
        case 'social-menu':
            $atts['class'] = 'social-menu__link';
            break;
        default:
            break;
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);
