<?php

function starttheme_register_controlls($wp_customize) {
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'starttheme_colors', array(
            "label" => "Color Header/Footer",
            "description" => "Selecciona el color del header y el footer",
            "section" => "starttheme_mysection"
        ))
    );
}

add_action('customize_register', 'starttheme_register_controlls');

?>