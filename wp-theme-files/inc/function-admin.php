<?php

/*
@package rcctheme
===============================================
              ADMIN PAGE 
           GENERAL SETTING
===============================================
*/
function rcc_add_admin_page(){
    //Generate RCC Admin page
    add_menu_page('RCC Theme Options','General Settings','manage_options','rcc-general-settings','rcc_theme_create_page','dashicons-hammer',81);
    
    //Activate custom settings
    add_action('admin_init','rcc_custom_settings');
    
}
add_action('admin_menu','rcc_add_admin_page');

function rcc_custom_settings(){
    register_setting( 'rcc-settings-group', 'first_name ');
   // add_settings_section('');
}

function rcc_theme_create_page(){
   require_once(get_template_directory().'/inc/templates/rcc_admin.php');
}



?>