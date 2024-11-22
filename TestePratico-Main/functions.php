<?php

// carregando scripts e css
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
    , array(), '5.3.3', true);
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3',
'all' );

    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0',
'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts');

// registrando menus

register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu'
    )
);