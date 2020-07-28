<?php

function startttheme_register_sidebar() {

    register_sidebar( array(
        "id" => "my_sidebar",
        "name" => "My sidebar",
        "description" => "El sidebar de StartTheme",
        "class" => "my_sidebar_class"
    ) );

}

function starttheme_include() {
    require 'custom/sections.php';
    require 'custom/settings.php';
    require 'custom/controlls.php';
    require 'inc/menu.php';
}

function starttheme_nav_menus() {
    register_nav_menus( array(
        'primary_menu' => 'Menu primario',
        'secondary_menu' => 'Menu secundario',
    ) );
}

function starttheme_supports_theme() {
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
}

function starttheme_setup() {
    starttheme_supports_theme();
    starttheme_nav_menus();
    starttheme_include();
}

function starttheme_linked_scripts() {
    wp_register_style('styles', get_template_directory_uri().'/styles.css', '', '1.0', 'all');
    wp_enqueue_style('styles');
    wp_register_script('script', get_template_directory_uri().'/script.js', '', '1.0', false);
    wp_enqueue_script('script');
}

function starttheme_customize_live() {
    wp_enqueue_script('starttheme_customize_live', get_template_directory_uri().'/custom/theme-customize.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'starttheme_linked_scripts');
add_action('customize_preview_init', 'starttheme_customize_live');
add_action('after_setup_theme', 'starttheme_setup');
add_action('widgets_init', 'startttheme_register_sidebar');

?>