<?php

function wp_menu_li(){
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'header_menu',
    );

    $menu = wp_nav_menu($options);
    
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '' , $menu);
};

function wp_connect_li(){
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'footer_connect_menu',
    );

    $menu = wp_nav_menu($options);
    
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '' , $menu);
};