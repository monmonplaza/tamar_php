<?php

function tamar_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'tamar_register_nav_menu', 0 );




add_theme_support('menus');
add_theme_support('post-thumbnails');



add_image_size( 'index-thumbnail', 550, 500, true );
add_image_size( 'testimonial-thumbnail', 60, 60, true );  
add_image_size( 'offer-thumbnail', 368, 230, true );  
add_image_size( 'wedding-venue', 393, 740, true );  
add_image_size( 'conference-venue', 447, 340, true );  
add_image_size( 'offers-lg', 550, 700, true );  
 
// THEME SUPPORT

$options = get_option('post_formats');

$formats = array('aside','gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();

foreach ( $formats as $format ) {
         $output[] = ( @$options[$format]  == 1 ? $format : '');
    }
if (!empty( $options )) {
    add_theme_support( 'post-formats', $output );
}


$header = get_option('custom_header');
if(@$header == 1) {
    add_theme_support( 'custom-header' );;
}


$background = get_option('custom_background');
if(@$background == 1) {
    add_theme_support( 'custom-background' );;
}

