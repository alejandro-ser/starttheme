<?php

function starttheme_register_controlls($wp_customize) {
    //$wp_customize->add_control();
}

add_action('customize_register', 'starttheme_register_controlls');

?>