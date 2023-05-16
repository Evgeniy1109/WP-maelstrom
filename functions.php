<?php
add_action('wp_enqueue_scripts', 'add_script_and_style');
add_action('after_setup_theme', 'add_menu');
function add_script_and_style()
{
    if (is_page_template('index.php')) {
        wp_enqueue_script('script.js', get_template_directory_uri().'/js/script.js', null, null, true);
    };
    if (is_page_template('schedule.php')) {
        wp_enqueue_style('style',get_template_directory_uri().'/style.css');
        wp_enqueue_style('schedule.css',get_template_directory_uri().'/css/schedule.css');
        wp_enqueue_script('schedule.js',get_template_directory_uri().'/js/schedule.js', null, null, true);
        wp_enqueue_script('script.js',get_template_directory_uri().'/js/script.js', null, null,
        true );
    };
    if (is_page_template('reminder.php')) {
        wp_enqueue_style('style', get_template_directory_uri().'/style.css');
        wp_enqueue_style('reminder.css', get_template_directory_uri().'/css/reminder.css');
        wp_enqueue_script('reminder.js', get_template_directory_uri().'/js/reminder.js', null, null, true);
        wp_enqueue_script('script.js', get_template_directory_uri() . '/js/script.js', null, null, true);
    };
    if (is_page_template('about.php')) {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('about.css', get_template_directory_uri() . '/css/about.css');
        wp_enqueue_script('script.js', get_template_directory_uri() . '/js/script.js', null, null, true);
    };
    wp_enqueue_style('style', get_stylesheet_uri());
};
function add_menu()
{
    register_nav_menu('top', 'Главное меню');
};
