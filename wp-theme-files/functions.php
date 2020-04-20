<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
 
 
 

// Exit if accessed directly.
defined('ABSPATH') || exit;

$rcc_includes = array(
    '/setup.php', // Initialize theme default settings.
    '/enqueue.php', // Enqueue scripts and styles.
    '/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
);

foreach ($rcc_includes as $file) {
    require_once get_template_directory() . '/inc' . $file;
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

function rcc_script_js()
{

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);

}

add_action('wp_enqueue_scripts', 'rcc_script_js');

function twentytwenty_register_styles()
{

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('twentytwenty-style', get_stylesheet_uri(), array(), $theme_version);
    wp_style_add_data('twentytwenty-style', 'rtl', 'replace');
}

add_action('wp_enqueue_scripts', 'twentytwenty_register_styles');

function rcc_add_google_fonts()
{
    wp_enqueue_style('rcc-google-fonts', 'https://fonts.googleapis.com/css2?family=Dawning+of+a+New+Day&family=Source+Sans+Pro&family=Lato:ital@0;1&display=swap', false);
}

add_action('wp_enqueue_scripts', 'rcc_add_google_fonts');

require get_template_directory() .'/inc/function-admin.php';
