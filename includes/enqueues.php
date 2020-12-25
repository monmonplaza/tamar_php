<?php

function tamar__assets() {
    wp_enqueue_style('tamar_style', get_template_directory_uri() . '/css/main.css',   microtime());
    //wp_enqueue_style('tamar_icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',   microtime());
    
    wp_enqueue_style('tamar_mobile', get_template_directory_uri() . '/css/mobile.css',  microtime());
    wp_enqueue_style('tamar_slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(),  microtime());
    wp_enqueue_style('tamar_slicktheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(),  microtime());

    wp_enqueue_script('tamar_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', NULL,  true);
    wp_enqueue_script('tamar_slickstyle', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL,  true);
    wp_enqueue_script('tamar_slider', get_template_directory_uri() . '/js/responsiveslides.js', NULL,  true);
    wp_enqueue_script('tamar_app', get_template_directory_uri() . '/js/app.js', NULL, microtime(), true);
   
}

add_action('wp_enqueue_scripts', 'tamar__assets');