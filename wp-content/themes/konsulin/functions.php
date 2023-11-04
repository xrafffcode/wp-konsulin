<?php

function styleKonsulin()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

    // script
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',[] , '1.0', true);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js',[] , '1.0', true);
    wp_enqueue_script('main-script', get_theme_file_uri('/js/script.js'),[] , '1.0', true);
}

add_action('wp_enqueue_scripts', 'styleKonsulin');

// theme support
function KonsulinSupportTheme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('menus');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'KonsulinSupportTheme');

// default page
function KonsulinDefaultPage()
{
    $defaultPage = array(
        'post_title'    => 'Home',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'page_template' => 'home.php'
    );

    $defaultPageId = wp_insert_post($defaultPage);
    update_option('page_on_front', $defaultPageId);
    update_option('show_on_front', 'page');
}

add_action('after_switch_theme', 'KonsulinDefaultPage');