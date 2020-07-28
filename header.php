<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
        wp_title(' - ', true, 'right');
        bloginfo('name');
    ?>
    </title>
    <style>
        body{
            margin-top: 40px;
        }
        header{
            background: <?php echo get_theme_mod('starttheme_colors') ?>;
        }
    </style>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php bloginfo('description'); ?>"><h3><?php bloginfo('name'); ?></h3></a>
            <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu( array(
                    "theme_location" => "primary_menu",
                    "menu_class" => "primary_menu_class",
                    "container_class" => "primary_menu_container_class"
                ) );
            }
            ?>
        </nav>
    </header>
</body>