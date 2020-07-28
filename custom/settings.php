<?php

function starttheme_register_settings($wp_customize) {
    $wp_customize->add_setting('starttheme_colors', array(
        "default" => "#000",
        "transport" => "postMessage"
    ) );

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
}

add_action('customize_register', 'starttheme_register_settings');

?>