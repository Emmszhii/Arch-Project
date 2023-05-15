<?php

function arch_custom_block(){
    if ( function_exists( 'acf_register_block_type' ) ) {
        acf_register_block_type(  
            array(
               'name'            => 'arch-page-banner',
               'title'           => 'Arch Page Banner',
               'render_template' => 'templates/blocks/block-page-banner.php',
               'category'        => 'common',
               'icon'            => 'admin-comments',
               'mode'            => 'edit'
           ));
        acf_register_block_type(  
        array(
            'name'            => 'arch-page-qoute',
            'title'           => 'Arch Page Qoute',
            'render_template' => 'templates/blocks/block-page-qoute.php',
            'category'        => 'common',
            'icon'            => 'admin-comments',
            'mode'            => 'edit'
        ));
        acf_register_block_type(  
            array(
                'name'            => 'arch-page-cpt',
                'title'           => 'Arch Page Cpt',
                'render_template' => 'templates/blocks/block-page-cpt.php',
                'category'        => 'common',
                'icon'            => 'admin-comments',
                'mode'            => 'edit'
            ));
        acf_register_block_type(  
            array(
                'name'            => 'arch-page-services-items',
                'title'           => 'Arch Page Services Items',
                'render_template' => 'templates/blocks/block-page-services-items.php',
                'category'        => 'common',
                'icon'            => 'admin-comments',
                'mode'            => 'edit'
            ));
        acf_register_block_type(  
            array(
                'name'            => 'arch-page-footer',
                'title'           => 'Arch Page Footer',
                'render_template' => 'templates/blocks/block-page-footer.php',
                'category'        => 'common',
                'icon'            => 'admin-comments',
                'mode'            => 'edit'
            ));      
        acf_register_block_type(  
            array(
                'name'            => 'arch-page-about-section',
                'title'           => 'Arch Page About Section',
                'render_template' => 'templates/blocks/block-page-about-section.php',
                'category'        => 'common',
                'icon'            => 'admin-comments',
                'mode'            => 'edit'
            ));
        acf_register_block_type(  
            array(
                'name'            => 'arch-page-projects',
                'title'           => 'Arch Page Projects',
                'render_template' => 'templates/blocks/block-page-projects.php',
                'category'        => 'common',
                'icon'            => 'admin-comments',
                'mode'            => 'edit'
            ));        
    }
    // GLOBAL SETTINGS
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Arch Settings'),
            'menu_title'    => __('Arch Settings'),
            'menu_slug'     => 'arch-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
   }
}

add_action('acf/init', 'arch_custom_block');
