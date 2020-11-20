<?php

add_action('admin_init', 'tmr_addition_info');
function tmr_addition_info(){
    add_settings_section('tmr-company-info', 'Customize Information', 'tmr_company_info', 'tmr_info' );
    // INFORMATION
     register_setting( 'tmr-info-group', 'tmr_name');
     register_setting( 'tmr-info-group', 'tmr_logo');
     register_setting( 'tmr-info-group', 'tmr_landline');
     register_setting( 'tmr-info-group', 'tmr_email');
     register_setting( 'tmr-info-group', 'tmr_map');
     register_setting( 'tmr-info-group', 'tmr_address');

     
     add_settings_field( 'company-name', 'Name', 'tmr_information_name', 'tmr_info','tmr-company-info');
     add_settings_field( 'company-logo', 'Logo URL', 'tmr_information_logo', 'tmr_info','tmr-company-info');
     add_settings_field( 'company-landline', 'Landline', 'tmr_information_landline', 'tmr_info','tmr-company-info');
     add_settings_field( 'company-email', 'Email', 'tmr_information_email', 'tmr_info','tmr-company-info');
     add_settings_field( 'company-map', 'Map', 'tmr_information_map', 'tmr_info','tmr-company-info');
     add_settings_field( 'company-address', 'Address', 'tmr_information_address', 'tmr_info','tmr-company-info');
    // INFORMATION END


    // SOCIAL MEDIA
     add_settings_section('tmr-socialmedia', 'Customize Information', 'tmr_socialmedia_info', 'tmr_socialmedia' );

     register_setting( 'tmr-socmed-group', 'tmr_facebook');
     register_setting( 'tmr-socmed-group', 'tmr_twitter');
     register_setting( 'tmr-socmed-group', 'tmr_instagram');
       
     add_settings_field( 'company-facebook', 'Facebook', 'tmr_information_facebook', 'tmr_socialmedia','tmr-socialmedia');
     add_settings_field( 'company-twitter', 'Twitter', 'tmr_information_twitter', 'tmr_socialmedia','tmr-socialmedia');
     add_settings_field( 'company-instagram', 'Instagram', 'tmr_information_instagram', 'tmr_socialmedia','tmr-socialmedia');
    // SOCIAL MEDIA END


    // THEME SUPPORT
     add_settings_section('tmr-theme-settings', 'Theme Settings', 'tmr_theme_settings_info', 'tmr_theme_settings' );       

     register_setting( 'tmr-theme-support-group', 'post_formats');
     add_settings_field( 'post-format', 'Post Formats', 'tmr_post_formats', 'tmr_theme_settings','tmr-theme-settings');  

     register_setting( 'tmr-theme-support-group', 'custom_header');
     add_settings_field( 'custom-header', 'Custom Header', 'tmr_custom_header', 'tmr_theme_settings','tmr-theme-settings');  

     register_setting( 'tmr-theme-support-group', 'custom_background');
     add_settings_field( 'custom-background', 'Custom Background', 'tmr_custom_background', 'tmr_theme_settings','tmr-theme-settings');  

    // THEME SUPPORT END


    add_settings_section('tmr-theme-options', 'Theme Options', 'tmr_theme_options_info', 'tmr_theme_options');

    register_setting('tmr-theme-option-group', 'video_background' );
    add_settings_field( 'video-background', 'Video Background?','tmr_video_background', 'tmr_theme_options','tmr-theme-options' );

    register_setting('tmr-theme-option-group', 'video_background_path' );
    add_settings_field( 'bgv-path', 'Video Background Path','tmr_background_video_path', 'tmr_theme_options','tmr-theme-options' );

    register_setting('tmr-theme-option-group', 'video_tour_path' );
    add_settings_field( 'video-tour', 'Video Tour Path','tmr_video_tour_path', 'tmr_theme_options','tmr-theme-options' );


    register_setting('tmr-theme-option-group', 'bg_image_path' );
    add_settings_field( 'bgi-path', 'Background Image Path','tmr_bg_image_path', 'tmr_theme_options','tmr-theme-options' );

    
   
 }








