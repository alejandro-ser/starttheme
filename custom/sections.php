<?php

function starttheme_register_sections( $wp_customize ) {
    $wp_customize->add_section('starttheme_mysection', array(
        "title" => "Mi sección",
        "description" => "Mi sección predefinida",
        "priority" => 60
    ));
}

add_action('customize_register', 'starttheme_register_sections');

?>