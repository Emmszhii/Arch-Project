<?php

function arch_theme_support(){
    register_nav_menus( 
        array(
            'header_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_connect_menu' => __( 'Footer Connect Menu', 'text_domain' )
        )   
    );
    // THEME SUPPORT
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', 
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
        )
    );

    // custom image sizes
    add_image_size('thumbnail-project', 250,150,true);
    add_image_size('banner-project', 1640, 560, true );

    // FILTER THEME
    add_filter('wpcf7_autop_or_not', '__return_false'); // Contact Form 7 remove P tag
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    
        return $content;
    }); // Remove Span in Contact Form 7
}

add_action('after_setup_theme', 'arch_theme_support');