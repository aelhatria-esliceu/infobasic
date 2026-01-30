<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Bienvendio a mi web</title>
</head>
<body <?php body_class(); ?>>
    <div class="cabecera">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu( array(
                "theme_location"  => "infobasic_main_menu",
                "depth"           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                "container"       => "div",
                "container_class" => "collapse navbar-collapse",
                "container_id"    => "navbarNav",
                "menu_class"      => "navbar-nav mr-auto",
                "fallback_cb"     => "WP_Bootstrap_Navwalker::fallback",
                "walker"          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        </nav>
    </div>