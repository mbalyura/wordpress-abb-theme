<?php

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

function abb_init_menus()
{
    $locations = [
        'primary' => 'Header',
        'footer' => 'Footer'
    ];

    register_nav_menus($locations);
}
add_action('init', 'abb_init_menus');


function abb_register_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/styles.css', [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'abb_register_styles');


/* filters */
//custom classes to menu
function add_menu_item_class($classes, $item, $args)
{
    switch ($args->theme_location) {
        case 'primary':
            $classes[] = 'main-menu__item';
            break;
        case 'footer':
            $classes[] = 'footer-menu__item';
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
        case 'footer':
            $atts['class'] = 'footer-menu__link';
            break;
        default:
            break;
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);


/* clean-up header */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
