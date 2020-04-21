<?php
/**
 * RCC enqueue scripts
 *
 * @package rcc
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('rcc_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function rcc_scripts()
    {
        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper.min.css', false, '1.1', 'all');

        wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.min.css', false, '1.1', 'all');

        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), 1.1, true);

        wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);

    }
} // endif function_exists( 'rcc_scripts' ).

add_action('wp_enqueue_scripts', 'rcc_scripts');
