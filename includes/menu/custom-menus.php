<?php
function tamar_services_menu() {
    add_menu_page( 
        'Tamar Services Menu',
        'Tamar Data ',
        'manage_options',
        'tamar_services',
        'tamar_services_menu',
        get_template_directory_uri() . '/img/logo-icon.png',
        '100' );
    }
   
add_action('admin_menu', 'tamar_services_menu');





function tmr_admin_page(){
    //  GENERATE NAME PAGE
     add_menu_page( 'Tamar Theme Option', 'Tamar Options', 'manage_options', 'tmr_info', 'tmr_theme_create_page', get_template_directory_uri() . '/img/logo-icon.png' ,'100' );
   //  GENERATE SUBMENU PAGE
    add_submenu_page( 'tmr_info', 'Company Information', 'Company Info', 'manage_options', 'tmr_info', 'tmr_theme_create_page' );
    add_submenu_page( 'tmr_info', 'Social Media', 'Social Media', 'manage_options', 'tmr_socmed', 'tmr_theme_socialmedia_page');
    add_submenu_page( 'tmr_info', 'Theme Setting', 'Post Format', 'manage_options', 'tmr_settings', 'tmr_theme_settings_page' );
    add_submenu_page( 'tmr_info', 'Theme Option', 'Options', 'manage_options', 'tmr_options', 'tmr_theme_options_page' );
 }
 add_action('admin_menu', 'tmr_admin_page');



require_once get_template_directory() . '/includes/menu/settings/settings.php';
require_once get_template_directory() . '/includes/menu/forms/forms.php';




 function tmr_theme_create_page() {
    require_once get_template_directory() . '/includes/menu/templates/admin.php';
 }

 function tmr_theme_socialmedia_page() {
    require_once get_template_directory() . '/includes/menu/templates/socialmedia.php';
 }

 function tmr_theme_settings_page() {
    require_once get_template_directory() . '/includes/menu/templates/theme-support.php';
}


function tmr_theme_options_page() {
    require_once get_template_directory() . '/includes/menu/templates/theme-options.php';
}




//section na general page
function tmr_company_info() {
    echo '<p>Complete the company information below about Tamar Hotel and Resort .</p>';
}

function tmr_socialmedia_info() {
    echo '<p>Complete the Social Media information below about Tamar Hotel and Resort .</p>';
}

function tmr_theme_settings_info () {
    echo '<p>Activate and Deactivate Theme Support Option</p>';
}

function tmr_theme_options_info () {
    echo '<p>Activate and Deactivate Theme Options</p>';
}

