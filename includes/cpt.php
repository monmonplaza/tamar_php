<?php


// CUSTOM POST TYPE

function tamar_custom_post_type(){
    $accommodation_label  = array (
        'name'          => __('Accommodation Type', 'textdomain'),
        'singular_name' => __('Accommodation Type', 'textdomain'),
        'add_new'       => __('Add Accommodation', 'textdomain'),
        'add_new_item'  => __('Add New Accommodation', 'textdomain'),
        'edit_item'     => __('Edit Accommodation', 'textdomain'),
        'all_items'     => __('Accommodations', 'textdomain')
    );
  

    $accommodation_args = array(  
            'labels'              => $accommodation_label,
            'public'              => true,
            'show_in_menu'        => 'tamar_services',
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
           // 'taxonomies'          => array('room_type' ),
            'publicly_queryable'  => true,
            'query_var'           => true,
            'has_archive'         => true,
            'hierarchical'        => true,
            'show_ui'             => true,
            'show_in_rest '       => true,
            'rewrite'             => array('slug' => 'accommodations'),
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'accommodation', $accommodation_args );
 


    $swiss_label  = array (
        'name'          => __('Swiss Village', 'textdomain'),
        'singular_name' => __('Swiss Village', 'textdomain'),
        'add_new'       => __('Add Swiss Village', 'textdomain'),
        'add_new_item'  => __('Add New Swiss Village', 'textdomain'),
        'edit_item'     => __('Edit Swiss Village', 'textdomain'),
        'all_items'     => __('Swiss Village', 'textdomain')
    );


    $swiss_args = array(  
            'labels'              => $swiss_label,
            'public'              => true,
            'show_in_menu'        => 'tamar_services',
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
            // // 'taxonomies'          => array('room_type' ),
            'has_archive'         => true,
            'show_ui'             => true,
            'show_in_rest '       => true,
            'rewrite'             => array('slug' => 'swiss-village'),
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'swiss', $swiss_args );


    $services_label  = array (
        'name'          => __('Services ', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'       => __('Add Service ', 'textdomain'),
        'add_new_item'  => __('Add New Service ', 'textdomain'),
        'edit_item'     => __('Edit Service ', 'textdomain'),
        'all_items'     => __('All Services ', 'textdomain')
    );


    $services_args = array(  
            'labels'              => $services_label,
            'public'              => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
            // 'taxonomies'          => array('room_type' ),
            'has_archive'         => true,
            'show_ui'             => true,
            'show_in_rest '       => true,
            'rewrite'             => array('slug' => 'services'),
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'service', $services_args );




    $activities_label  = array (
        'name'          => __('Activities Type', 'textdomain'),
        'singular_name' => __('Activity', 'textdomain'),
        'add_new'       => __('Add Activity ', 'textdomain'),
        'add_new_item'  => __('Add New Activity ', 'textdomain'),
        'edit_item'     => __('Edit Activity ', 'textdomain'),
        'all_items'     => __('Activities ', 'textdomain')
    );


    $activities_args = array(  
            'labels'              => $activities_label,
            'public'              => true,
            'show_in_menu'        => 'tamar_services',
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
            // 'taxonomies'          => array('room_type' ),
            'has_archive'         => true,
            'show_ui'             => true,
            'show_in_rest '       => true,
            'rewrite'             => array('slug' => 'activities'),
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'activity', $activities_args );



    $room_type_label  = array (
        'name'          => __('Room Types ', 'textdomain'),
        'singular_name' => __('Room Type', 'textdomain'),
        'add_new'       => __('Add Room Type ', 'textdomain'),
        'add_new_item'  => __('Add New Room Type ', 'textdomain'),
        'edit_item'     => __('Edit Room Type ', 'textdomain'),
        'all_items'     => __('Room Types ', 'textdomain')
    );


    $room_type_args = array(  
            'labels'              => $room_type_label,
            'public'              => true,
            'show_in_menu'        => 'tamar_services',
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
            'taxonomies'          => array('room_type' ),
            'has_archive'         => true,
            'show_ui'             => true,
            'show_in_rest '       => true,
            'rewrite'             => array('slug' => 'room_type'),
            'supports'            => array( 'title', 'editor' )
    );

    register_post_type( 'room_type', $room_type_args );

    
$villas_cabin_label  = array (
    'name'          => __('Villas/Cabin ', 'textdomain'),
    'singular_name' => __('Villas/Cabin', 'textdomain'),
    'add_new'       => __('Add Villas/Cabin ', 'textdomain'),
    'add_new_item'  => __('Add New Villas/Cabin ', 'textdomain'),
    'edit_item'     => __('Edit Villas/Cabin', 'textdomain'),
    'all_items'     => __('Villas/Cabin ', 'textdomain')
);


$villas_cabin_args = array(  
        'labels'              => $villas_cabin_label,
        'public'              => true,
        'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        // 'taxonomies'          => array('room_type' ),
        'has_archive'         => true,
        'show_ui'             => true,
        'show_in_rest '       => true,
        'rewrite'             => array('slug' => 'villas-cabin'),
        'supports'            => array( 'title', 'editor' )
);

register_post_type( 'villas-cabin', $villas_cabin_args );



   
$chalets_family_label  = array (
    'name'          => __('Chalets/Family ', 'textdomain'),
    'singular_name' => __('Chalets/Family ', 'textdomain'),
    'add_new'       => __('Add Chalets/Family  ', 'textdomain'),
    'add_new_item'  => __('Add New Chalets/Family  ', 'textdomain'),
    'edit_item'     => __('Edit Chalets/Family ', 'textdomain'),
    'all_items'     => __('Chalets/Family  ', 'textdomain')
);


$chalets_family_args = array(  
        'labels'              => $chalets_family_label,
        'public'              => true,
        'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        // 'taxonomies'          => array('room_type' ),
        'has_archive'         => true,
        'show_ui'             => true,
        'show_in_rest '       => true,
        'rewrite'             => array('slug' => 'chalets-family'),
        'supports'            => array( 'title', 'editor' )
);

register_post_type( 'chalets-family', $chalets_family_args );




    $events_label  = array (
        'name'          => __('Events ', 'textdomain'),
        'singular_name' => __('Event', 'textdomain'),
        'add_new'       => __('Add Event ', 'textdomain'),
        'add_new_item'  => __('Add New Event ', 'textdomain'),
        'edit_item'     => __('Edit Event', 'textdomain'),
        'all_items'     => __('Events ', 'textdomain')
    );


    $events_args = array(  
            'labels'              => $events_label,
            'public'              => true,
            'show_in_menu'        => 'tamar_services',
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
            // 'taxonomies'          => array('room_type' ),
            'has_archive'         => true,
            'show_ui'             => true,
            'show_in_rest '       => true,
            'rewrite'             => array('slug' => 'events'),
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );

   register_post_type( 'event', $events_args );


$testimonial_label  = array (
    'name'          => __('Testimonials ', 'textdomain'),
    'singular_name' => __('Testimonial', 'textdomain'),
    'add_new'       => __('Add Testimonial ', 'textdomain'),
    'add_new_item'  => __('Add New Testimonial ', 'textdomain'),
    'edit_item'     => __('Edit Testimonial', 'textdomain'),
    'all_items'     => __('Testimonials ', 'textdomain')
);


$testimonial_args = array(  
        'labels'              => $testimonial_label,
        'public'              => true,
        // 'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        // 'taxonomies'          => array('room_type' ),
        'has_archive'         => true,
        'show_ui'             => true,
        'show_in_rest '       => true,
        'rewrite'             => array('slug' => 'testimonials'),
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
);
register_post_type( 'testimonial', $testimonial_args );


$offer_label  = array (
    'name'          => __('Offers ', 'textdomain'),
    'singular_name' => __('Offer', 'textdomain'),
    'add_new'       => __('Add Offer ', 'textdomain'),
    'add_new_item'  => __('Add New Offer ', 'textdomain'),
    'edit_item'     => __('Edit Offer', 'textdomain'),
    'all_items'     => __('Offers ', 'textdomain')
);


$offer_args = array(  
        'labels'              => $offer_label,
        'public'              => true,
        // 'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        // 'taxonomies'          => array('room_type' ),
        'has_archive'         => true,
        'show_ui'             => true,
        'show_in_rest '       => true,
        'rewrite'             => array('slug' => 'offers'),
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
);

register_post_type( 'offer', $offer_args );


$facility_label  = array (
    'name'          => __('Facility ', 'textdomain'),
    'singular_name' => __('Facility', 'textdomain'),
    'add_new'       => __('Add Facility ', 'textdomain'),
    'add_new_item'  => __('Add New Facility ', 'textdomain'),
    'edit_item'     => __('Edit Facility', 'textdomain'),
    'all_items'     => __('Facility ', 'textdomain')
);


$facility_args = array(  
        'labels'              => $facility_label,
        'public'              => true,
        'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        // 'taxonomies'          => array('room_type' ),
        'has_archive'         => true,
        'show_ui'             => true,
        'show_in_rest '       => true,
        'rewrite'             => array('slug' => 'facilities'),
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
);

register_post_type( 'facility', $facility_args );


$wedding_label  = array (
    'name'          => __('Wedding ', 'textdomain'),
    'singular_name' => __('Wedding', 'textdomain'),
    'add_new'       => __('Add Wedding ', 'textdomain'),
    'add_new_item'  => __('Add New Wedding ', 'textdomain'),
    'edit_item'     => __('Edit Wedding', 'textdomain'),
    'all_items'     => __('Wedding ', 'textdomain')
);


$wedding_args = array(  
        'labels'              => $wedding_label,
        'public'              => true,
        'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        'hierarchical'        => true   ,
        // 'taxonomies'            => array( 'category'),
        'has_archive'         => true,
        'show_ui'             => true,
        'rewrite'             => array('slug' => 'weddings'),
        'supports'            => array( 'title', 'editor',  'thumbnail')
);

register_post_type( 'wedding', $wedding_args );


$dining_menu_label  = array (
    'name'          => __('Dining Menu ', 'textdomain'),
    'singular_name' => __('Dining Menu', 'textdomain'),
    'add_new'       => __('Add Dining Menu', 'textdomain'),
    'add_new_item'  => __('Add New Dining Menu ', 'textdomain'),
    'edit_item'     => __('Edit Dining Menu', 'textdomain'),
    'all_items'     => __('Dining Menu ', 'textdomain')
);


$dining_menu_args = array(  
        'labels'              => $dining_menu_label,
        'public'              => true,
        // 'show_in_menu'        => 'tamar_services',
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'capability_type'     => 'post',
        'hierarchical'        => true   ,
        'taxonomies'          => array( 'food_category'),
        'has_archive'         => true,
        'show_ui'             => true,
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'dining-menu'),
        'supports'            => array( 'title', 'editor',  'thumbnail')
);

register_post_type( 'dining_menu', $dining_menu_args );



}

add_action( 'init', 'tamar_custom_post_type');



// CUSTOM TAXONOMY

function tamar_custom_taxonomy()
{
    $room_type_label = array(
    'name'              => _x('Room Type', 'taxonomy general name'),
    'singular_name'     => _x('Room Type', 'taxonomy singular name'),
    'search_items'      => __('Search Room Type'),
    'all_items'         => __('All Room Type'),
    'parent_item'       => __('Parent Room Type'),
    'parent_item_colon' => __('Parent Room Type:'),
    'edit_item'         => __('Edit Room Type'),
    'update_item'       => __('Update Room Type'),
    'add_new_item'      => __('Add New Room Type'),
    'new_item_name'     => __('New Room Type Name'),
    'menu_name'         => __('Room Type'),
    );
    $room_type_args = array(
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $room_type_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    //'rewrite'           => ['slug' => 'room_type', 'with_front' => false, 'hierarchical' => true]
    );
register_taxonomy('room_type', ['tamar_accomadation'], $room_type_args);




$food_category_label = array(
    'name'              => _x('Food Category', 'taxonomy general name'),
    'singular_name'     => _x('Food Category', 'taxonomy singular name'),
    'search_items'      => __('Search Food Category'),
    'all_items'         => __('All Food Category'),
    'parent_item'       => __('Parent Food Category'),
    'parent_item_colon' => __('Parent Food Category:'),
    'edit_item'         => __('Edit Food Category'),
    'update_item'       => __('Update Food Category'),
    'add_new_item'      => __('Add New Food Category'),
    'new_item_name'     => __('New Food Category'),
    'menu_name'         => __('Food Category'),
    );
    $food_category_args = array(
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $food_category_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => ['slug' => 'food-category', 'with_front' => false, 'hierarchical' => true]
    );
register_taxonomy('food_category', 'wedding',  $food_category_args);

}
 add_action('init', 'tamar_custom_taxonomy', 0);









function tamar_room_type_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'room_type' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { 
            if ( ! class_exists( 'Tamar_Room_Type_Walker_Category_Radio_Checklist' ) ) {
              
                class Tamar_Room_Type_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new Tamar_Room_Type_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'tamar_room_type_term_radio_checklist' );




function tamar_food_category_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'food_category' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { 
            if ( ! class_exists( 'Tamar_Food_Category_Walker_Category_Radio_Checklist' ) ) {
              
                class Tamar_Food_Category_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new Tamar_Food_Category_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'tamar_food_category_radio_checklist' );