<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Bienvenido a mi web</title>
</head>
<?php
    $game_class = '';
    if(is_front_page()) $game_class = 'game-frontpage';
    elseif(is_page('hollow-knight')) $game_class = 'game-hollow-knight';
    elseif(is_page('silksong')) $game_class = 'game-silksong';
    elseif(is_page('sea-of-sorrow')) $game_class = 'game-sea-of-sorrow';
?>
<body <?php body_class(array($game_class)); ?>>
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
            "depth"           => 2,
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