<?php

function starttheme_menu_admin() {

    function starttheme_echo() {
        echo 'Hola mundo';
    }
    
    add_menu_page('Admin menu', 'Start Theme', 'manage_options', 'starttheme_menu1', 'starttheme_echo', 'dashicons-lock', 20);
}

add_action('admin_menu', 'starttheme_menu_admin');

?>