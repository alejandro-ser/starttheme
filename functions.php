<?php

function startttheme_register_sidebar() {

    register_sidebar( array(
        "id" => "my_sidebar",
        "name" => "My sidebar",
        "description" => "El sidebar de StartTheme",
        "class" => "my_sidebar_class"
    ) );

}

function starttheme_supports_theme() {
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'starttheme_supports_theme');
add_action('widgets_init', 'startttheme_register_sidebar');

?>