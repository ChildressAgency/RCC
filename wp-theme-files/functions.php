<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

$rcc_includes = array(
    '/setup.php', // Initialize theme default settings.
    //'/enqueue.php', // Enqueue scripts and styles.
    '/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
);

foreach ($rcc_includes as $file) {
    //require_once get_template_directory() . '/inc' . $file;
    require_once dirname(__FILE__) . '/inc' . $file;
}

function rcc_load_fa()
{

    wp_enqueue_script('rcc-fa', 'https://kit.fontawesome.com/ab62900031.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'rcc_load_fa');

function rcc_register_fa_css()
{
    wp_register_style('fa-css', 'https://kit-free.fontawesome.com/releases/latest/css/free.min.css');
    wp_enqueue_style('fa-css');
}

add_action('wp_enqueue_scripts', 'rcc_register_fa_css');


function rcc_register_styles()
{

    //$theme_version = wp_get_theme()->get('Version');

    //wp_enqueue_style('twentytwenty-style', get_stylesheet_uri(), array(), $theme_version);
    //wp_style_add_data('twentytwenty-style', 'rtl', 'replace');

  wp_register_style(
    'bootstrap-css',
    '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
  );

  wp_register_style(
    'google-fonts',
    '//fonts.googleapis.com/css?family=Dawning+of+a+New+Day|Lato:300,300i,400,700,900|Lexend+Deca&display=swap'
  );

  wp_register_style(
    'swiper-css',
    get_stylesheet_directory_uri() . '/css/swiper.min.css'
  );

  wp_register_style(
    'animate-css',
    get_stylesheet_directory_uri() . '/css/animate.min.css'
  );

  wp_register_style(
    'rcc-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style('bootstrap-css');
  wp_enqueue_style('google-fonts');
  wp_enqueue_style('swiper-css');
  wp_enqueue_style('animate-css');
  wp_enqueue_style('rcc-css');
}

add_action('wp_enqueue_scripts', 'rcc_register_styles');

add_action('wp_enqueue_script', 'rcc_scripts');
function rcc_scripts(){
  wp_register_script(
    'bootstrap-popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_register_script(
    'swiper',
    get_stylesheet_directory_uri() . '/js/swiper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'rcc-scripts',
    get_stylesheet_directory_uri() . '/js/script.js',
    array('jquery'),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
  wp_enqueue_script('swiper');
  wp_enqueue_script('rcc-scripts');
}

require get_template_directory() .'/inc/function-admin.php';
